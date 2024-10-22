<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quickwin;

class QuickwinController extends Controller
{
    public function index()
    {
        return view('admin.quickwin.home');
    }

    public function create()
    {
        return view('admin.quickwin.create');
    }
}
