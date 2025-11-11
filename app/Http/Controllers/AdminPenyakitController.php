<?php

namespace App\Http\Controllers;

use App\Models\Penyakit;
use Illuminate\Http\Request;

class AdminPenyakitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = [
            'title' => 'Data Kategori',
            'penyakit' => Penyakit::get(),
            'content' => 'admin/penyakit/index'
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
            'title' => 'Tambah Kategori',
            'content' => 'admin/penyakit/create'
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
            'name' => 'required',
            'desc' => 'required',
            'penanganan' => 'required'
        ]);
        Penyakit::create($data);
        return redirect('/admin/penyakit');
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
            'title' => 'Edit Kategori',
            'penyakit' => Penyakit::find($id),
            'content' => 'admin/penyakit/create'
        ];
        
        return view('admin.layouts.wrapper', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $penyakit = Penyakit::find($id);
        $data = $request->validate([
            'name' => 'required',
            'desc' => 'required',
            'penanganan' => 'required'
        ]);

        
        $penyakit->update($data);
        return redirect('/admin/penyakit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $penyakit = Penyakit::find($id);
        $penyakit->delete();
        return redirect('/admin/penyakit');
    }
}
