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
    public function create()
    {
        return view('patient.create');
    }

    public function store(Request $request)
{
    $requestData = $request->validate([
        'no' => 'required|unique:patient,no',
        'name' => 'required',
        'age' => 'required|numeric',
        'gender' => 'required|in:laki-laki,perempuan',
        'address' => 'nullable',
        //foto' => 'required|image|mimes:jpeg,png,jpg|max:5000',
    ]);
    $patient = new \App\Models\Pasien(); //membuat objek kosong
    $patient->fill($requestData); //mengisi objek dengan data yang sudah divalidasi requestData
    //$patient->foto = $request->file('foto')->store('public'); //mengisi objek dengan pathFoto
    $patient->save();
    return redirect()->route('patients.index')->with('pesan', 'Data pasien berhasil disimpan');
}
}
