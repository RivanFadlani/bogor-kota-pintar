<?php

namespace App\Http\Controllers;

use App\Models\Programimp;
use Illuminate\Http\Request;

class ProgramPage extends Controller
{
    public function program()
    {
        $getProgram = Programimp::all();

        return view('programimp', compact('getProgram'));
    }
}
