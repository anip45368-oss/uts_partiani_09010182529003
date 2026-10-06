<x-app-layout>

<div class="mx-auto max-w-[950px]">

    <div class="mb-8">

        <a href="{{ route('books.index') }}"
           class="text-sm font-bold text-[#6c63ff] hover:text-[#5148e8]">
            ← Kembali ke Daftar Buku
        </a>

        <div class="mt-5">
            <p class="text-xs font-bold uppercase tracking-[2px] text-[#6c63ff]">
                Manajemen Buku
            </p>

            <h1 class="mt-2 text-3xl font-black text-[#17182d]">
                Tambah Buku
            </h1>

            <p class="mt-2 text-sm text-slate-400">
                Lengkapi informasi buku untuk menambahkannya ke perpustakaan.
            </p>
        </div>

    </div>


    <div class="overflow-hidden rounded-3xl border border-slate-200 bg-white shadow-sm">

        <div class="bg-[#17182d] px-7 py-6 text-white sm:px-9">

            <p class="text-xs font-bold uppercase tracking-[2px] text-indigo-300">
                Informasi Buku
            </p>

            <h2 class="mt-2 text-xl font-black">
                Data buku baru
            </h2>

        </div>


        <form action="{{ route('books.store') }}" method="POST" class="p-7 sm:p-9">

            @csrf

            <div class="grid gap-6 md:grid-cols-2">

                <div class="md:col-span-2">
                    <label class="text-sm font-bold text-slate-700">
                        Judul Buku
                    </label>

                    <input type="text"
                           name="title"
                           value="{{ old('title') }}"
                           placeholder="Contoh: Belajar Laravel untuk Pemula"
                           class="mt-2 w-full rounded-xl border-slate-200 px-4 py-3.5 text-sm shadow-sm focus:border-[#6c63ff] focus:ring-[#6c63ff]">

                    @error('title')
                        <p class="mt-2 text-xs font-medium text-red-500">{{ $message }}</p>
                    @enderror
                </div>


                <div>
                    <label class="text-sm font-bold text-slate-700">
                        Penulis
                    </label>

                    <input type="text"
                           name="author"
                           value="{{ old('author') }}"
                           placeholder="Nama penulis"
                           class="mt-2 w-full rounded-xl border-slate-200 px-4 py-3.5 text-sm shadow-sm focus:border-[#6c63ff] focus:ring-[#6c63ff]">

                    @error('author')
                        <p class="mt-2 text-xs font-medium text-red-500">{{ $message }}</p>
                    @enderror
                </div>


                <div>
                    <label class="text-sm font-bold text-slate-700">
                        Penerbit
                    </label>

                    <input type="text"
                           name="publisher"
                           value="{{ old('publisher') }}"
                           placeholder="Nama penerbit"
                           class="mt-2 w-full rounded-xl border-slate-200 px-4 py-3.5 text-sm shadow-sm focus:border-[#6c63ff] focus:ring-[#6c63ff]">

                    @error('publisher')
                        <p class="mt-2 text-xs font-medium text-red-500">{{ $message }}</p>
                    @enderror
                </div>


                <div>
                    <label class="text-sm font-bold text-slate-700">
                        Tahun Terbit
                    </label>

                    <input type="number"
                           name="year"
                           value="{{ old('year') }}"
                           placeholder="2026"
                           class="mt-2 w-full rounded-xl border-slate-200 px-4 py-3.5 text-sm shadow-sm focus:border-[#6c63ff] focus:ring-[#6c63ff]">

                    @error('year')
                        <p class="mt-2 text-xs font-medium text-red-500">{{ $message }}</p>
                    @enderror
                </div>


                <div>
                    <label class="text-sm font-bold text-slate-700">
                        Stok
                    </label>

                    <input type="number"
                           name="stock"
                           value="{{ old('stock') }}"
                           placeholder="0"
                           class="mt-2 w-full rounded-xl border-slate-200 px-4 py-3.5 text-sm shadow-sm focus:border-[#6c63ff] focus:ring-[#6c63ff]">

                    @error('stock')
                        <p class="mt-2 text-xs font-medium text-red-500">{{ $message }}</p>
                    @enderror
                </div>


                <div class="md:col-span-2">

                    <label class="text-sm font-bold text-slate-700">
                        Kategori
                    </label>

                    <select name="category_id"
                            class="mt-2 w-full rounded-xl border-slate-200 px-4 py-3.5 text-sm shadow-sm focus:border-[#6c63ff] focus:ring-[#6c63ff]">

                        <option value="">Pilih kategori buku</option>

                        @foreach($categories as $category)

                            <option value="{{ $category->id }}"
                                {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                {{ $category->name }}
                            </option>

                        @endforeach

                    </select>

                    @error('category_id')
                        <p class="mt-2 text-xs font-medium text-red-500">{{ $message }}</p>
                    @enderror

                </div>

            </div>


            <div class="mt-9 flex flex-col-reverse justify-end gap-3 border-t border-slate-100 pt-7 sm:flex-row">

                <a href="{{ route('books.index') }}"
                   class="rounded-xl bg-slate-100 px-6 py-3 text-center text-sm font-bold text-slate-600 hover:bg-slate-200">
                    Batal
                </a>

                <button type="submit"
                        class="rounded-xl bg-[#6c63ff] px-7 py-3 text-sm font-bold text-white shadow-lg shadow-indigo-200 hover:bg-[#5b52ed]">
                    Simpan Buku
                </button>

            </div>

        </form>

    </div>

</div>

</x-app-layout>