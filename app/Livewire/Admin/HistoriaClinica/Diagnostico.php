<?php

namespace App\Livewire\Admin\HistoriaClinica;

use App\Models\HC\Diagnostico as HCDiagnostico;
use App\Models\Paciente;
use App\Models\Cita;
use Livewire\Component;

class Diagnostico extends Component
{
    public $paciente;
    public $cita;

    // Diagnostico
    public $diagnostico_principal;
    public $tipo_diagnostico;
    public $CIE10;
    public $descripcion_cie10;

    // Recomendaciones Medicas
    public $recomendaciones_medicas;
    public $recomendaciones_laborales_x_meses;

    // Recomendaciones para mejorar la salud
    public $recomendacion1;
    public $recomendacion2;
    public $recomendacion3;
    public $recomendacion4;
    public $recomendacion5;
    public $recomendacion6;
    public $recomendacion7;
    public $recomendacion8;
    public $recomendacion9;
    public $recomendacion10;
    public $recomendacion11;
    public $recomendacion12;
    public $recomendacion13;
    public $recomendacion14;
    public function render()
    {
        return view('livewire.admin.historia-clinica.diagnostico');
    }

    public function mount(Paciente $paciente, Cita $cita)
    {
        $this->paciente = $paciente;
        $this->cita = $cita;
    }

    public function diagnostico()
    {
        $paciente = $this->paciente;
        $cita = $this->cita;

        $this->validate([
            'diagnostico_principal' => 'required',
            'tipo_diagnostico' => 'required',
            'CIE10' => 'required',
            'descripcion_cie10' => 'required',
            'recomendaciones_medicas' => 'required',
            'recomendaciones_laborales_x_meses' => 'required',

        ]);

        $recomendacion1 = $this->recomendacion1 ? 'Beber al menos 8 vasos de agua al día' : 'Ninguna';
        $recomendacion2 = $this->recomendacion2 ? 'Incorporar a la dieta diaria, alimentos de todos los grupos' : 'Ninguna';
        $recomendacion3 = $this->recomendacion3 ? 'Consumir diariamente leche u otro producto lácteo' : 'Ninguna';
        $recomendacion4 = $this->recomendacion4 ? 'Aumentar la ingesta de frutas y verduras' : 'Ninguna';
        $recomendacion5 = $this->recomendacion5 ? 'Aumentar ingesta de proteínas' : 'Ninguna';
        $recomendacion6 = $this->recomendacion6 ? 'Limitar el consumo de bebidas azucaradas' : 'Ninguna';
        $recomendacion7 = $this->recomendacion7 ? 'Reducir el consumo de sal, embutidos, enlatados y productos de paquete' : 'Ninguna';
        $recomendacion8 = $this->recomendacion8 ? 'Evitar alimentos con elevado contenido de grasa' : 'Ninguna';
        $recomendacion9 = $this->recomendacion9 ? 'Realizar ejercicio, mínimo 3 veces a la semana' : 'Ninguna';
        $recomendacion10 = $this->recomendacion10 ? 'Bajar de peso' : 'Ninguna';
        $recomendacion11 = $this->recomendacion11 ? 'Evitar el consumo de tabaco' : 'Ninguna';
        $recomendacion12 = $this->recomendacion12 ? 'Evitar el consumo de alcohol' : 'Ninguna';
        $recomendacion13 = $this->recomendacion13 ? 'Procurar una adecuada higiene del sueño' : 'Ninguna';
        $recomendacion14 = $this->recomendacion14 ? 'Lavar las manos frecuentemente usando agua y jabón y frotando de 20 a 30 segundos' : 'Ninguna';

        $diagnostico = new HCDiagnostico([
            'paciente_id' => $paciente->id,
            'diagnostico_principal' => $this->diagnostico_principal,
            'tipo_diagnostico' => $this->tipo_diagnostico,
            'CIE10' => $this->CIE10,
            'descripcion_cie10' => $this->descripcion_cie10,
            'recomendaciones_medicas' => $this->recomendaciones_medicas,
            'recomendaciones_laborales_x_meses' => $this->recomendaciones_laborales_x_meses,
            'recomendacion1' => $recomendacion1,
            'recomendacion2' => $recomendacion2,
            'recomendacion3' => $recomendacion3,
            'recomendacion4' => $recomendacion4,
            'recomendacion5' => $recomendacion5,
            'recomendacion6' => $recomendacion6,
            'recomendacion7' => $recomendacion7,
            'recomendacion8' => $recomendacion8,
            'recomendacion9' => $recomendacion9,
            'recomendacion10' => $recomendacion10,
            'recomendacion11' => $recomendacion11,
            'recomendacion12' => $recomendacion12,
            'recomendacion13' => $recomendacion13,
            'recomendacion14' => $recomendacion14,
            'paciente_id' => $paciente->id,
        ]);

        $diagnostico->save();

        return redirect()->route('admin.historiasclinicas.sistema-vigilancia-epidemiologica', ['paciente_id' => $paciente->id, 'cita_id' => $cita->id])->with('success', 'Diagnostico guardado con exito');
    }
}
