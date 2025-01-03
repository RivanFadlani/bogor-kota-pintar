<?php

namespace App\Http\Controllers;

use App\Models\Navigasi;
use App\Models\Programimp;
use Illuminate\Http\Request;

class ProgramPage extends Controller
{
    public function program()
    {
        $getProgram = Programimp::where('status', 'publish')->get();
        $navigasis = Navigasi::all();

        return view('programimp', compact('getProgram', 'navigasis'));
    }
}
