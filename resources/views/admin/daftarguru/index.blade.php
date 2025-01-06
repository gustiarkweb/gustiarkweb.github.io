@extends('layouts.admin')
@section('content')
<div class="container grid px-6 mx-auto">
   




 








<h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
    Data Guru
</h4>
<button>
    <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
        <a href="{{ route('admin.daftarguru.create') }}">Tambah Guru</a> </button>




<div class="w-full overflow-hidden rounded-lg shadow-xs">
    <div class="w-full overflow-x-auto">
        <table class="w-full whitespace-no-wrap">
            <thead>
                <tr
                    class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                    <th class="px-4 py-3">No</th>
                    <th class="px-4 py-3">Nama</th>
                    <th class="px-4 py-3">Nomor Induk</th>
                    <th class="px-4 py-3">Jabatan</th>
                    <th class="px-4 py-3">Alamat</th>
                    <th class="px-4 py-3">Telp</th>
                    <th class="px-4 py-3">Jk</th>
                    <th class="px-4 py-3">Golongan</th>
                    <th class="px-4 py-3">Pendidikan Terakhir</th>
                    <th class="px-4 py-3">User Id</th>
                    <th class="px-4 py-3">Actions</th>




                </tr>
            </thead>
            <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">


                @foreach ($daftarguru as $i=> $item)


                <tr class="text-gray-700 dark:text-gray-400">
                   
                    <td class="px-4 py-3">
                       {{$i + 1}}
                    </td>
                    <td class="px-4 py-3 text-sm">
                        {{$item->nama}}
                    </td>
                    <td class="px-4 py-3 text-sm">
                        {{$item->nomorinduk}}
                    </td>
                    <td class="px-4 py-3 text-sm">
                        {{$item->jabatan}}
                    </td>
                    <td class="px-4 py-3 text-sm">
                        {!! $item->alamat !!}
                    </td>
                    <td class="px-4 py-3 text-sm">
                        {{$item->telp}}
                    </td>
                    <td class="px-4 py-3 text-sm">
                        {!!$item->jk!!}
                    </td>
                    <td class="px-4 py-3 text-sm">
                        {{$item->golongan}}
                    </td>
                    <td class="px-4 py-3 text-sm">
                        {{$item->pendidikanterakhir}}
                    <td class="px-4 py-3">
                        {{$item->users_id}}
                    </td>

                    <td class="px-4 py-3">
                        <div class="flex items-center space-x-4 text-sm">
                       <!-- Edit Button -->
                       <a href="{{ route('admin.daftarguru.edit', $item->id) }}"
                        class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                        aria-label="Edit">
                         <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                             <path
                                 d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                             </path>
                         </svg>
                     </a>
                     <!-- Delete Button -->
                     <form action="{{ route('admin.daftarguru.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Are you sure?')">
                         @csrf
                         @method('DELETE')
                         <button
                             class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                             aria-label="Delete">
                             <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                 <path fill-rule="evenodd"
                                     d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                     clip-rule="evenodd"></path>
                             </svg>
                         </button>
                     </form>
                 </div>
             </td>
                   
                   
                </tr>


                @endforeach
               
            </tbody>
        </table>
    <div
        class="grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800">
        <span class="flex items-center col-span-3">
        Showing {{ $daftarguru->firstItem() }}-{{ $daftarguru->lastItem() }} of {{ $daftarguru->total() }}
        </span>
         <span class="col-span-2"></span>
          <!-- Pagination -->
        <span class="flex col-span-4 mt-2 sm:mt-auto sm:justify-end">
        {{ $daftarguru->links() }}
        </span>
</div>
   
   




</div>
@endsection









