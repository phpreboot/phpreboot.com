<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminLteController extends Controller
{
    public function blank()
    {
        return view('adminlte/blank');
    }
}
