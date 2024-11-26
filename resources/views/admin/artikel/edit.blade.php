@extends('layouts.admin')

@section('content')
<div class="container px-6 mx-auto grid">
    <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
        Forms
    </h2>

    <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
        Elements
    </h4>

    <form action="{{ route('admin.artikel.update', $artikel->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
   @method('PUT')

    <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
        <!-- Judul -->
        <label class="block text-sm">
            <span class="text-gray-700 dark:text-gray-400">Judul</span>
            <input
                class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                value="{{ $artikel->judul }}"
                type="text" name="judul"
            />
        </label>

        <label class="block mt-4 text-sm">
            <span class="text-gray-700 dark:text-gray-400">
              Requested Limit (Kategori)
            </span>
           
                
            
            <select name="kategori[]"
                        class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                        multiple>
                        @foreach ($kategori as $item)
                            <option value="{{ $item->id }}">{{ $item->judul }}</option>
                        @endforeach
                    </select>

                    <label class="block mt-4 text-sm">
                        <span class="text-gray-700 dark:text-gray-400">
                          Requested Limit (Tag)
                        </span>
                       

                    <select name="tag[]"
                    class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                    multiple>
                    @foreach ($tag as $item)
                        <option value="{{ $item->id }}">{{ $item->judul }}</option>
                    @endforeach
                </select>

                    
            
          </label>

        <!-- Gambar -->
        <label class="block text-sm mt-4">
            <span class="text-gray-700 dark:text-gray-400">Image</span>
            <input
                class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                type="file" name="image"
            />
        </label>

        <!-- Editor -->
        <label class="block mt-4 text-sm">
            <span class="text-gray-700 dark:text-gray-400">Konten</span>
            <div class="mt-2">
                <textarea id="editor" name=des ></textarea>
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



