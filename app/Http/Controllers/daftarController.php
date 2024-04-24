<?php

namespace App\Http\Controllers;

use App\Models\beasiswa;
use Illuminate\Http\Request;
use App\Models\Daftar; 

class daftarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $randomIpk = rand(20,40)/10;
        $beasiswa_pilihan = beasiswa::get();
        return view('registration',compact('randomIpk','beasiswa_pilihan'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $daftar = new daftar();
        $daftar->nama = $request->nama;
        $daftar->email = $request->email;
        $daftar->nomor_hp = $request->nomor_hp;
        $daftar->semester = $request->semester;
        $daftar->ipk = $request->ipk;
        $daftar->pilihan_beasiswa = $request->pilihan_beasiswa;
        $daftar->ststus_ujian = "belum diverifikasi";
        // $daftar->upload_berkas = $request->upload_berkas;
        if ($request->hasFile('upload_berkas')) {
            $file = $request->file('upload_berkas');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('upload_berkas'), $filename);
            $daftar->upload_berkas = 'upload_berkas/' . $filename;
        } else {
            $daftar->upload_berkas = 'Tidak Masuk Kreteria';
        }
        
        $daftar->save();
        return redirect()->route('hasil.show', ['id' => $daftar->id]);
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
