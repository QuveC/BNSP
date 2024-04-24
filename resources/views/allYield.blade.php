@extends('layout.app')
@section('content')

<div class="p-20 h-screen relative overflow-x-auto shadow-md sm:rounded-lg">
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
            @foreach($daftar as $item)
            <tr>
                <th scope="col" class="px-6 py-3">
                {{$item->nama}}

                </th>
                <th scope="col" class="px-6 py-3">
                {{$item->email}}

                </th>
                <th scope="col" class="px-6 py-3">
                {{$item->nomor_hp}}
                </th>
                <th scope="col" class="px-6 py-3">
                {{$item->semester}}

                </th>
                <th scope="col" class="px-6 py-3">
                {{$item->ipk}}

                </th>
                <th scope="col" class="px-6 py-3">
                {{$item->pilihan_beasiswa}}

                </th>
                <th scope="col" class="px-6 py-3">                

                @if($item->upload_berkas != 'Tidak Masuk Kreteria')
                        <a href="{{ asset($item->upload_berkas) }}" download target="_blank">Download Berkas</a>
                    @else
                        <p>{{ $item->upload_berkas }}</p>
                    @endif
                </th>
                <th scope="col" class="px-6 py-3">
                {{$item->ststus_ujian}}
                </th>
            </tr>
        </thead>
        <tbody>
            @endforeach           
        </tbody>
    </table>
</div>

</div>

@stop
