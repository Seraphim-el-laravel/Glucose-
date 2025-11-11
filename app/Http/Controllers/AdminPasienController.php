<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pasien;

class AdminPasienController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = [
            'title' => 'Data Pasien',
            'pasien' => Pasien::get(),
            'content' => 'admin/pasien/index'
        ];

        return view('admin.layouts.wrapper', $data);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $data = [
            'title' => 'Tambah Pasien',
            'content' => 'admin/pasien/create'
        ];
        
        return view('admin.layouts.wrapper', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $data = $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email',
            'jeniskelamin' => 'required',
            'tanggalkonsultasi' => 'required|date',

        ]);
        Pasien::create($data);
        return redirect('/admin/pasien');
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
        $data = [
            'title' => 'Edit Pasien',
            'pasien' => Pasien::find($id),
            'content' => 'admin/pasien/create'
        ];
        
        return view('admin.layouts.wrapper', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $pasien = Pasien::find($id);
        $data = $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email',
            'jeniskelamin' => 'required',
            'tanggalkonsultasi' => 'required|date',
        ]);

        
        $pasien->update($data);
        return redirect('/admin/pasien');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $pasien = Pasien::find($id);
        $pasien->delete();
        return redirect('/admin/pasien');
    }
}
