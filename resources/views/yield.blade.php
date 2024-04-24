@extends('layout.app')
@section('content')

<div class="p-20 h-screen relative overflow-x-auto shadow-md sm:rounded-lg">

    
    <div class="flex justify-center daftars-center mb-10">
        <a href="#">
            <h5 class="text-xl font-semibold tracking-tight text-gray-900 text-white">Berhasil Melakukan Pendaftaran ✔</h5>
        </a>
</div>


    <table class="w-full text-sm text-left rtl:text-right text-gray-500 text-gray-400">
    <thead class="text-xs text-gray-700 uppercase bg-gray-50 bg-gray-700 text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    nama
                </th>
                <th scope="col" class="px-6 py-3">
                    email
                </th>
                <th scope="col" class="px-6 py-3">
                    nomor hp
                </th>
                <th scope="col" class="px-6 py-3">
                    semester
                </th>
                <th scope="col" class="px-6 py-3">
                    ipk
                </th>
                <th scope="col" class="px-6 py-3">
                    pilihan beasiswa
                </th>
                <th scope="col" class="px-6 py-3">
                     Berkas
                </th>
                <th scope="col" class="px-6 py-3">
                    status ujian
                </th>
            </tr>
        </thead>
            <tr>
                <th scope="col" class="px-6 py-3">
                {{$daftar->nama}}

                </th>
                <th scope="col" class="px-6 py-3">
                {{$daftar->email}}

                </th>
                <th scope="col" class="px-6 py-3">
                {{$daftar->nomor_hp}}
                </th>
                <th scope="col" class="px-6 py-3">
                {{$daftar->semester}}

                </th>
                <th scope="col" class="px-6 py-3">
                {{$daftar->ipk}}

                </th>
                <th scope="col" class="px-6 py-3">
                {{$daftar->pilihan_beasiswa}}

                </th>
                <th scope="col" class="px-6 py-3">
              
                    @if($daftar->upload_berkas != 'Tidak Masuk Kreteria')
                    <a href="{{ asset($daftar->upload_berkas) }}" download target="_blank">Download Berkas</a>
                @else
                    <p>{{ $daftar->upload_berkas }}</p>
                @endif                </th>
                <th scope="col" class="px-6 py-3">
               {{$daftar->ststus_ujian}}
                </th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>

</div>

@stop
