<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function index()
    {
       $patient = \App\Models\Patient::latest()->paginate(10);
       return view('patient.index', compact('patient'));
    }
}
