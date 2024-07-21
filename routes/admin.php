<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\PacienteController;
use App\Http\Controllers\Admin\EspecialistaController;
use App\Http\Controllers\Admin\ClienteController;
use App\Http\Controllers\Admin\OrdenDeServicioController;
use App\Http\Controllers\Admin\TarifarioController;
use App\Http\Controllers\Admin\AgendaController;
use App\Http\Controllers\Admin\HistoriaClinicaController;
use App\Http\Controllers\Admin\NotaMedicaController;
use App\Http\Controllers\Admin\FormatoController;
use App\Http\Controllers\Admin\ConceptoMedicoController;
use App\Http\Controllers\Admin\AuditoriaController;
use App\Http\Controllers\Admin\EnviosController;
use App\Http\Controllers\Admin\ProfesiogramaController;

Route::resource('users', UserController::class)->middleware('can:admin.users.index')->only(['index', 'create', 'edit', 'update'])->names('admin.users');

Route::get('pacientes/{id}/consentimiento-informado', [PacienteController::class, 'consentimientoInformado'])->name('admin.pacientes.consentimiento-informado');
Route::get('pacientes/{id}/firma-pacientes', [PacienteController::class, 'crearfirmaPacientes'])->name('admin.pacientes.firma-pacientes');
Route::post('pacientes/{id}/guardarfirmaPacientes', [PacienteController::class, 'guardarfirmaPacientes'])->name('admin.pacientes.guardarfirmaPacientes');
Route::get('pacientes/{id}/foto-pacientes', [PacienteController::class, 'crearfotoPacientes'])->name('admin.pacientes.foto-pacientes');
Route::get('pacientes/{id}/huella-pacientes', [PacienteController::class, 'crearhuellaPacientes'])->name('admin.pacientes.huella-pacientes');
Route::post('pacientes/{id}/adjuntar-documentos', [PacienteController::class, 'adjuntarDocumentos'])->name('admin.pacientes.adjuntar-documentos');
Route::get('pacientes/{id}/descargar-documento', [PacienteController::class, 'descargarDocumento'])->name('admin.pacientes.descargar-documento');
Route::resource('pacientes', PacienteController::class)->names('admin.paciente.pacientes');

Route::get('especialistas/{id}/firma-especialista', [EspecialistaController::class, 'crearfirmaEspecialista'])->name('admin.especialistas.firma-especialista');
Route::post('especialistas/{id}/guardarfirmaEspecialista', [EspecialistaController::class, 'guardarfirmaEspecialista'])->name('admin.especialistas.guardarfirmaEspecialista');
Route::resource('especialistas', EspecialistaController::class)->names('admin.especialista.especialistas');

Route::resource('clientes', ClienteController::class)->names('admin.cliente.clientes');

Route::get('ordendeservicios/{id}/generar-pdf', [OrdenDeServicioController::class, 'generatePDF'])->name('admin.ordendeservicios.generar-pdf');
Route::resource('ordendeservicios', OrdenDeServicioController::class)->names('admin.ordendeservicios');

Route::get('tarifarios/{id}/create', [TarifarioController::class, 'create'])->name('admin.tarifario.create');
Route::get('tarifarios/{id}/pdf', [TarifarioController::class, 'generatePDF'])->name('admin.tarifario.pdf');
Route::resource('tarifarios', TarifarioController::class)->names('admin.tarifarios')->except(['create']);

Route::get('agendas/asistencia-citas', [AgendaController::class, 'asistenciaCitas'])->name('admin.agendas.asistencia-citas');
Route::get('agendas/citas-pendientes', [AgendaController::class, 'citasPendientes'])->name('admin.agendas.citas-pendientes');
Route::resource('agendas', AgendaController::class)->names('admin.agendas');

Route::get('notasmedicas/{id}/create', [NotaMedicaController::class, 'create'])->name('admin.notas-medicas.create');
Route::resource('notasmedicas', NotaMedicaController::class)->names('admin.notas-medicas')->except(['create']);

Route::get('historiasclinicas/generate-PDF/{paciente_id}/{cita_id}', [HistoriaClinicaController::class, 'generatePDF'])->name('admin.historiasclinicas.generate-PDF');
Route::get('historiasclinicas/recomendaciones-medicas/{paciente_id}/{cita_id}', [HistoriaClinicaController::class, 'recomendacionesMedicas'])->name('admin.historiasclinicas.recomendaciones-medicas');
Route::get('historiasclinicas/sistema-vigilancia-epidemiologica/{paciente_id}/{cita_id}', [HistoriaClinicaController::class, 'sistemaVigilanciaEpidemiologica'])->name('admin.historiasclinicas.sistema-vigilancia-epidemiologica');
Route::get('historiasclinicas/diagnostico/{paciente_id}/{cita_id}', [HistoriaClinicaController::class, 'diagnostico'])->name('admin.historiasclinicas.diagnostico');
Route::get('historiasclinicas/examenes-complementarios/{paciente_id}/{cita_id}', [HistoriaClinicaController::class, 'examenesComplementarios'])->name('admin.historiasclinicas.examenes-complementarios');
Route::get('historiasclinicas/pruebas-neurologicas/{paciente_id}/{cita_id}', [HistoriaClinicaController::class, 'pruebasNeurologicas'])->name('admin.historiasclinicas.pruebas-neurologicas');
Route::get('historiasclinicas/examen-fisico/{paciente_id}/{cita_id}', [HistoriaClinicaController::class, 'examenFisico'])->name('admin.historiasclinicas.examen-fisico');
Route::get('historiasclinicas/revision-por-sistemas/{paciente_id}/{cita_id}', [HistoriaClinicaController::class, 'revisionPorSistemas'])->name('admin.historiasclinicas.revision-por-sistemas');
Route::get('historiasclinicas/habitos-extralaborales/{paciente_id}/{cita_id}', [HistoriaClinicaController::class, 'habitosExtralaborales'])->name('admin.historiasclinicas.habitos-extralaborales');
Route::get('historiasclinicas/antecedentes-personales/{paciente_id}/{cita_id}', [HistoriaClinicaController::class, 'antecedentesPersonales'])->name('admin.historiasclinicas.antecedentes-personales');
Route::get('historiasclinicas/antecedentes-familiares/{paciente_id}/{cita_id}', [HistoriaClinicaController::class, 'antecedentesFamiliares'])->name('admin.historiasclinicas.antecedentes-familiares');
Route::get('historiasclinicas/motivo-consulta/{paciente_id}/{cita_id}', [HistoriaClinicaController::class, 'motivoConsulta'])->name('admin.historias-clinicas.motivo-consulta');
Route::get('historiasclinicas/info-laboral-actual/{paciente_id}/{cita_id}', [HistoriaClinicaController::class, 'InfoLaboralActual'])->name('admin.historias-clinicas.info-laboral-actual');
Route::get('historiasclinicas/create/{paciente_id}/{cita_id}', [HistoriaClinicaController::class, 'create'])->name('admin.historias-clinicas.create');
Route::resource('historiasclinicas', HistoriaClinicaController::class)->names('admin.historias-clinicas')->except(['create']);

Route::get('conceptosmedicos/conceptos-abiertos', [ConceptoMedicoController::class, 'conceptosAbiertos'])->name('admin.conceptosmedicos.conceptos-abiertos');
Route::get('conceptosmedicos/{id}/certificado-medico-pdf', [ConceptoMedicoController::class, 'certificadoMedicoPDF'])->name('admin.conceptosmedicos.certificado-medico-pdf');
Route::resource('conceptosmedicos', ConceptoMedicoController::class)->names('admin.conceptosmedicos');

Route::get('formatos/download', [FormatoController::class, 'download'])->name('admin.formatos.download');

Route::get('auditorias/auditar-orden-de-servicio', [AuditoriaController::class, 'auditarOrdenServicio'])->name('admin.auditorias.auditar-orden-de-servicio');

Route::get('envios/form-modificar-app', [EnviosController::class, 'formularioModificacionApp'])->name('admin.envio.form-modificar-app');
Route::resource('envios', EnviosController::class)->names('admin.envios');

Route::resource('profesiogramas', ProfesiogramaController::class)->names('admin.profesiogramas');