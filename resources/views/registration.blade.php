@extends('layout.app')
{{-- @section('title', 'Beasiswa') --}}
@section('content')

<div class="flex justify-center items-center h-screen">
    <div class="w-full max-w-4xl p-6 bg-white border border-gray-200 rounded-lg shadow sm:p-6 md:p-8 bg-gray-600 border-gray-800">

        <form class="space-y-6" action="{{route('daftar.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
                     <h5 class="text-xl font-medium text-gray-900 text-white">Registrasi beasiswa</h5>

            <div class="grid grid-cols-2 gap-4">
                <div class="relative z-0 w-full mb-5 group">
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 text-white">Masukan Nama</label>
                    <input name="nama" type="text" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500" placeholder="Masukan Nama" required />
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 text-white">Masukan Email</label>
                    <input name="email" type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500" placeholder="Masukan Email" required />
                </div>

                <div class="relative z-0 w-full mb-5 group">
                    <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 text-white">Nomor HP</label>
                    <input name="nomor_hp" type="number" id="phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500" placeholder="Masukan Nomor HP" required />
                </div>

                <div class="relative z-0 w-full mb-5 group">
                    <label for="semester" class="block mb-2 text-sm font-medium text-gray-900 text-white">Semester Saat Ini</label>
                    <select name="semester" id="semester" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500">
                        <option value="1"> 1</option>
                        <option value="2"> 2</option>
                        <option value="3"> 3</option>
                        <option value="4"> 4</option>
                        <option value="5"> 5</option>
                        <option value="6"> 6</option>
                        <option value="7"> 7</option>
                        <option value="8"> 8</option>
                    </select>
                </div>

                <div class="relative z-0 w-full mb-5 group">
                    <label for="ipk" class="block mb-2 text-sm font-medium text-gray-900 text-white">IPK</label>
                    <input name="ipk" id="ipk" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500" value="{{$randomIpk}}" required  readonly/>
                </div>

                <div class="relative z-0 w-full mb-5 group">
                    <label for="text" class="block mb-2 text-sm font-medium text-gray-900 text-white">Pilihan Beasiswa</label>
                    <select  name="pilihan_beasiswa" id="pilihan_beasiswa" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500">
                        @foreach($beasiswa_pilihan as $item)
                        <option value="{{$item->nama_beasiswa}}">{{$item->nama_beasiswa}}</option>
                        @endforeach
                 </select>
                </div>

                <div class="relative z-0 w-full mb-5 group">
                    <label class="block mb-2 text-sm font-medium text-gray-900 text-white" for="user_avatar">Upload File</label>
                    <input id="upload_berkas" name="upload_berkas" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 text-gray-400 focus:outline-none bg-gray-700 border-gray-600 placeholder-gray-400" aria-describedby="user_avatar_help" id="user_avatar" type="file" disabled>
                </div>
            </div>
            <button type="submit"  id="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center bg-blue-600 hover:bg-blue-700 focus:ring-blue-800">Submit</button>
            <a href="/daftar" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center bg-blue-600 hover:bg-blue-700 focus:ring-blue-800">cancel</a>
        </form>
    </div>
</div>

<script>
   document.addEventListener("DOMContentLoaded", function() {
    const ipkSelect = document.getElementById("ipk");
    const semesterSelect  = document.getElementById("semester")
    const BeasiswaSelect = document.getElementById("pilihan_beasiswa");
    const submitSelect = document.getElementById("submit")
    const uploadSelect = document.getElementById("upload_berkas")

    let randomIpk = {{$randomIpk}};

        const ipk = parseFloat(ipkSelect.value);
        if (ipk < 3.00) {
            submitSelect.disabled = true;
            uploadSelect.disabled = true;
          BeasiswaSelect.disabled = true;

        } else {
            submitSelect.disabled = false;
            uploadSelect.disabled = false;
          BeasiswaSelect.disabled = false;
        }

        semesterSelect.addEventListener("change", function() {
            const randomIpk = {{$randomIpk}};
            ipkSelect.value = randomIpk;
        });

});

</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
@stop
