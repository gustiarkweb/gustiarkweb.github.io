@extends('layouts.admin')




@section('content')
<div class="container px-6 mx-auto grid">
    <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
        Formulir
    </h2>




    <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
        Siswa
    </h4>
   
    <form action="{{ route('admin.daftarsiswa.store') }}" method="POST" enctype="multipart/form-data">
    @csrf




    <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
        <!-- Judul -->
        <label class="block text-sm">
            <span class="text-gray-700 dark:text-gray-400">Nis</span>
            <input
                class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                placeholder="Masukkan Nis"
                type="text" name="nis"
            />
        </label>


        <label class="block text-sm">
            <span class="text-gray-700 dark:text-gray-400">Nomor Pendaftaran</span>
            <input
                class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                placeholder="Masukkan Nomor Pendaftaran"
                type="text" name="nomor_pendaftaran"
            />
        </label>


        <label class="block text-sm">
            <span class="text-gray-700 dark:text-gray-400">Nama Peserta Didik</span>
            <input
                class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                placeholder="Masukkan Nama Peserta Didik"
                type="text" name="nama_peserta_didik"
            />
        </label>


        <label class="block text-sm">
            <span class="text-gray-700 dark:text-gray-400">Jenis Kelamin</span>
            <input
                class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                placeholder="Masukkan Jenis Kelamin Siswa"
                type="text" name="jenis_kelamin"
            />
        </label>


        <label class="block text-sm">
            <span class="text-gray-700 dark:text-gray-400">Asal Sekolah</span>
            <input
                class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                placeholder="Masukkan Asal Sekolah"
                type="text" name="asal_sekolah"
            />
        </label>


          <!-- Editor -->
          <label class="block mt-4 text-sm">
            <span class="text-gray-700 dark:text-gray-400">Ket</span>
            <div class="mt-2">
                <textarea id="editor" name="ket"></textarea>
            </div>
        </label>
    </div>


       
     <!-- Tombol Simpan -->
    <label class="block text-sm">
        <button
            class="w-full px-10 py-4 font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
            Kirim
        </button>
    </label>
    </form>
</div>
</div>




<!-- CKEditor 5 -->
<script src="https://cdn.ckeditor.com/ckeditor5/39.0.0/classic/ckeditor.js"></script>
<script>
    // Initialize CKEditor 5
    ClassicEditor
        .create(document.querySelector('#editor'))
        .then(editor => {
            console.log('Editor was initialized successfully', editor);
        })
        .catch(error => {
            console.error('There was a problem initializing the editor:', error);
        });
</script>




<!-- Optional Tailwind Overrides -->
<style>
    /* Editor Container Style */
    .ck-editor__editable_inline {
        min-height: 300px;
        border: 1px solid #e5e7eb; /* Tailwind's gray-300 */
        padding: 0.5rem; /* Tailwind spacing */
        border-radius: 0.375rem; /* Tailwind rounded-md */
        background-color: #ffffff; /* White background */
    }
</style>
@endsection





















