@extends('layouts.app')

@section('subtitle', 'Agenda')

@section('content')
    @livewire('admin.agenda.agenda-index')
@endsection

@section('css')
    <style>
        .event-title {
            color: #f1ecec;
            text-transform: uppercase;
        }

        .event-title:hover {
            color: blue;
            background-color: #f1ecec;
            text-transform: uppercase;
        }
    </style>
@endsection

@section('js')

    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.11/index.global.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const calendarEl = document.getElementById('calendar');
            const calendar = new FullCalendar.Calendar(calendarEl, {
                locale: 'es',
                hiddenDays: [0],
                titleFormat: {
                    month: 'long',
                    day: 'numeric',
                    weekday: 'long'
                },
                dayHeaderFormat: {
                    weekday: 'long',
                    day: 'numeric',
                },

                buttonText: {
                    today: 'Volver al día de hoy',
                },
                slotMinTime: '07:00',
                slotMaxTime: '17:00',
                initialView: 'timeGridWeek',
                slotDuration: '00:15:00',
                slotLabelInterval: '00:15:00',
                slotLabelFormat: {
                    hour: 'numeric',
                    minute: '2-digit',
                    omitZeroMinute: false
                },
                events: @json($citas),
                eventContent: function(info) {

                    const title = info.event.title;
                    const subject = info.event.extendedProps.subject;
                    const url = info.event.extendedProps.url;

                    const element = document.createElement('div');
                    element.classList.add('event-container');

                    const titleElement = document.createElement('span');
                    titleElement.classList.add('event-title');
                    titleElement.textContent = title + ' : ' + subject;

                    element.appendChild(titleElement);

                    return {
                        html: element.outerHTML
                    };
                },

                eventClick: function(info) {
                    if (info.event.extendedProps && info.event.extendedProps.url) {
                        const url = window.location.origin + '/' + info.event.extendedProps.url;
                        window.open(url, '_blank');
                    } else {
                        console.warn("El evento no tiene una propiedad de URL");
                    }
                }
            });

            calendar.today();
            calendar.render();
        });
    </script>

@endsection
