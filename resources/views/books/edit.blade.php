<x-app-layout>

<div class="mx-auto max-w-[950px]">

    <div class="mb-8">

        <a href="{{ route('books.index') }}"
           class="text-sm font-bold text-[#6c63ff]">
            ← Kembali ke Daftar Buku
        </a>

        <div class="mt-5">
            <p class="text-xs font-bold uppercase tracking-[2px] text-[#6c63ff]">
                Manajemen Buku
            </p>

            <h1 class="mt-2 text-3xl font-black text-[#17182d]">
                Edit Buku
            </h1>

            <p class="mt-2 text-sm text-slate-400">
                Perbarui informasi buku yang dipilih.
            </p>
        </div>

    </div>


    <div class="overflow-hidden rounded-3xl border border-slate-200 bg-white shadow-sm">

        <div class="bg-[#17182d] px-7 py-6 text-white sm:px-9">

            <p class="text-xs font-bold uppercase tracking-[2px] text-indigo-300">
                Edit Data
            </p>

            <h2 class="mt-2 text-xl font-black">
                {{ $book->title }}
            </h2>

        </div>


        <form action="{{ route('books.update', $book) }}" method="POST" class="p-7 sm:p-9">

            @csrf
            @method('PUT')

            <div class="grid gap-6 md:grid-cols-2">

                <div class="md:col-span-2">
                    <label class="text-sm font-bold text-slate-700">
                        Judul Buku
                    </label>

                    <input type="text"
                           name="title"
                           value="{{ old('title', $book->title) }}"
                           class="mt-2 w-full rounded-xl border-slate-200 px-4 py-3.5 text-sm shadow-sm focus:border-[#6c63ff] focus:ring-[#6c63ff]">

                    @error('title')
                        <p class="mt-2 text-xs text-red-500">{{ $message }}</p>
                    @enderror
                </div>


                <div>
                    <label class="text-sm font-bold text-slate-700">Penulis</label>

                    <input type="text"
                           name="author"
                           value="{{ old('author', $book->author) }}"
                           class="mt-2 w-full rounded-xl border-slate-200 px-4 py-3.5 text-sm shadow-sm focus:border-[#6c63ff] focus:ring-[#6c63ff]">
                </div>


                <div>
                    <label class="text-sm font-bold text-slate-700">Penerbit</label>

                    <input type="text"
                           name="publisher"
                           value="{{ old('publisher', $book->publisher) }}"
                           class="mt-2 w-full rounded-xl border-slate-200 px-4 py-3.5 text-sm shadow-sm focus:border-[#6c63ff] focus:ring-[#6c63ff]">
                </div>


                <div>
                    <label class="text-sm font-bold text-slate-700">Tahun Terbit</label>

                    <input type="number"
                           name="year"
                           value="{{ old('year', $book->year) }}"
                           class="mt-2 w-full rounded-xl border-slate-200 px-4 py-3.5 text-sm shadow-sm focus:border-[#6c63ff] focus:ring-[#6c63ff]">
                </div>


                <div>
                    <label class="text-sm font-bold text-slate-700">Stok</label>

                    <input type="number"
                           name="stock"
                           value="{{ old('stock', $book->stock) }}"
                           class="mt-2 w-full rounded-xl border-slate-200 px-4 py-3.5 text-sm shadow-sm focus:border-[#6c63ff] focus:ring-[#6c63ff]">
                </div>


                <div class="md:col-span-2">

                    <label class="text-sm font-bold text-slate-700">
                        Kategori
                    </label>

                    <select name="category_id"
                            class="mt-2 w-full rounded-xl border-slate-200 px-4 py-3.5 text-sm shadow-sm focus:border-[#6c63ff] focus:ring-[#6c63ff]">

                        @foreach($categories as $category)

                            <option value="{{ $category->id }}"
                                {{ old('category_id', $book->category_id) == $category->id ? 'selected' : '' }}>
                                {{ $category->name }}
                            </option>

                        @endforeach

                    </select>

                </div>

            </div>


            <div class="mt-9 flex flex-col-reverse justify-end gap-3 border-t border-slate-100 pt-7 sm:flex-row">

                <a href="{{ route('books.index') }}"
                   class="rounded-xl bg-slate-100 px-6 py-3 text-center text-sm font-bold text-slate-600">
                    Batal
                </a>

                <button type="submit"
                        class="rounded-xl bg-[#6c63ff] px-7 py-3 text-sm font-bold text-white shadow-lg shadow-indigo-200 hover:bg-[#5b52ed]">
                    Simpan Perubahan
                </button>

            </div>

        </form>

    </div>

</div>

</x-app-layout>