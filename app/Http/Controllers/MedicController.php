<?php

namespace App\Http\Controllers;

use App\Models\Nurse;
use App\Models\Doctor;
use App\Enums\JenisKelamin;
use Illuminate\Http\Request;
use App\Enums\DoctorSpecialist;

class MedicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.home');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function storeDoc(Request $request)
    {
        Doctor::create([
            'name' => $request->name,
            'salary' => $request->salary,
            'specialist' => DoctorSpecialist::from($request->specialist),
        ]);

        return redirect()->route('admin.home');
    }

    public function storeNurse(Request $request)
    {
        Nurse::create([
            'name' => $request->name,
            'salary' => $request->salary,
            'jenis_kelamin' => JenisKelamin::from($request->jenis_kelamin),
        ]);

        return redirect()->route('admin.home');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
