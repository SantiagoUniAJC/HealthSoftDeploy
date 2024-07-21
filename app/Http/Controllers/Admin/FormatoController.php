<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class FormatoController extends Controller
{
    public function download() 
    {
        return view('admin.formatos.download');
    }
}
