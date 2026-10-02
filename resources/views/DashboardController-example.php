<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard', [
            'totalExporter' => 101,
            'thisWeek'      => 20,
            'thisMonth'     => 10,
            'due'           => 10,
            'advance'       => 10,
        ]);
    }
}
