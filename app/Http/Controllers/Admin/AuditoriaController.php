<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuditoriaController extends Controller
{
    public function auditarOrdenServicio()
    {
        return view('admin.auditorias.auditar-orden-de-servicio');
    }
}
