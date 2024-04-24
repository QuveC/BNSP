<?php

namespace App\Http\Controllers;

use App\Models\daftar;
use Illuminate\Http\Request;

class hasilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $daftar = daftar::get();
        return view('allYield',compact('daftar'));
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
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $daftar = daftar::where("id", $id)->first();
        return view('yield',compact('daftar'));
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
