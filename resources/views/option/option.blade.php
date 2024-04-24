@extends('layout.app')
{{-- @section('title', 'Beasiswa') --}}
@section('content')

<div class="flex justify-center items-center h-screen">
    <a href="/BeasiswaAkademik" class="block max-w-sm p-6 mr-10 bg-gray-900 border border-gray-200 rounded-lg shadow hover:bg-gray-100 bg-gray9 border-gray-700 hover:bg-gray-700">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 text-white">beasiswa Akademik</h5>
     </a> 
    <a href="/BeasiswaNonAkademik" class="block max-w-sm p-6 bg-gray-900 border border-gray-200 rounded-lg shadow hover:bg-gray-100 bg-gray-800 border-gray-700 hover:bg-gray-700">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 text-white">beasiswa Non akademik</h5>
     </a>    
</div>

@stop