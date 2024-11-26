@extends('layouts.admin')
@section('content')
<div class="container grid px-6 mx-auto">
   




 








<h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
    Data Siswa
</h4>
<button> <a href="{{ route('admin.siswa.create') }}">
    <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
        Tambah Siswa</a> </button>




<div class="w-full overflow-hidden rounded-lg shadow-xs">
    <div class="w-full overflow-x-auto">
        <table class="w-full whitespace-no-wrap">
            <thead>
                <tr
                    class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                    <th class="px-4 py-3">No</th>
                    <th class="px-4 py-3">Nama Depan</th>
                    <th class="px-4 py-3">Nama Belakang</th>
                    <th class="px-4 py-3">Nis</th>
                    <th class="px-4 py-3">Jenis Kelamin</th>
                    <th class="px-4 py-3">Tempat Tanggal Lahir</th>
                    <th class="px-4 py-3">Alamat</th>
                    <th class="px-4 py-3">Agama</th>
                    <th class="px-4 py-3">Kelas</th>
                    <th class="px-4 py-3">Hobi</th>
                    <th class="px-4 py-3">Email</th>
                    <th class="px-4 py-3">Gambar</th>
                    <th class="px-4 py-3">Actions</th>




                </tr>
            </thead>
            <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">


                @foreach ($siswa as $i=> $item)


                <tr class="text-gray-700 dark:text-gray-400">
                   
                    <td class="px-4 py-3">
                       {{$i + 1}}
                    </td>
                    <td class="px-4 py-3 text-sm">
                        {{$item->nama_depan}}
                    </td>
                    <td class="px-4 py-3 text-sm">
                        {{$item->nama_belakang}}
                    </td>
                    <td class="px-4 py-3 text-sm">
                        {{$item->nis}}
                    </td>
                    <td class="px-4 py-3 text-sm">
                        {{$item->jenis_kelamin}}
                    </td>
                    <td class="px-4 py-3 text-sm">
                        {{$item->tempat_tanggal_lahir}}
                    </td>
                    <td class="px-4 py-3 text-sm">
                        {!! $item->alamat !!}
                    </td>
                    <td class="px-4 py-3 text-sm">
                        {{$item->agama}}
                    </td>
                    <td class="px-4 py-3 text-sm">
                        {{ $item->kelas }}
                    </td>
                    <td class="px-4 py-3 text-sm">
                        {{$item->hobi}}
                    </td>
                    <td class="px-4 py-3 text-sm">
                        {{$item->email}}
                    </td>
                    <td class="px-4 py-3 text-sm">
                        <img src="{{ $item->picture }}" alt="" width="100">
                    </td>
                    <td class="px-4 py-3">
                   
                </tr>


                @endforeach
               
            </tbody>
        </table>
    </div>
   




</div>
@endsection









