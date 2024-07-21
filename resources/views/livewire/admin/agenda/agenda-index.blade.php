<div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-secondary card-outline mt-3">
                    <div class="card-header bg-primary text-center text-white ">
                        <h2 class="card-title">Agendamiento</h2>
                    </div>
                    <div class="card-body">
                        <div id='calendar'></div>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <a href="{{ route('dashboard') }}" class="btn btn-outline-primary col-md-4"><i
                                    class="fas fa-arrow-left"> </i> Volver
                            </a>
                            <p class="col-md-4"></p>
                            <a href="{{ route('admin.ordendeservicios.index') }}" class="btn btn-outline-success col-md-4"><i
                                class="fas fa-plus"> </i> Nueva Agenda
                        </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
