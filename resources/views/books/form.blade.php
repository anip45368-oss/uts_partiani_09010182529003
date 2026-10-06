<div class="space-y-5">

    {{-- Judul --}}
    <div>
        <label class="block font-medium text-sm text-gray-700">
            Judul Buku
        </label>

        <input type="text"
               name="title"
               value="{{ old('title', $book->title ?? '') }}"
               class="mt-1 block w-full rounded-lg border-gray-300"
               required>

        @error('title')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
    </div>


    {{-- Penulis --}}
    <div>
        <label class="block font-medium text-sm text-gray-700">
            Penulis
        </label>

        <input type="text"
               name="author"
               value="{{ old('author', $book->author ?? '') }}"
               class="mt-1 block w-full rounded-lg border-gray-300"
               required>

        @error('author')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
    </div>


    {{-- Penerbit --}}
    <div>
        <label class="block font-medium text-sm text-gray-700">
            Penerbit
        </label>

        <input type="text"
               name="publisher"
               value="{{ old('publisher', $book->publisher ?? '') }}"
               class="mt-1 block w-full rounded-lg border-gray-300"
               required>

        @error('publisher')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
    </div>


    {{-- Tahun --}}
    <div>
        <label class="block font-medium text-sm text-gray-700">
            Tahun
        </label>

        <input type="number"
               name="year"
               value="{{ old('year', $book->year ?? '') }}"
               min="1900"
               max="2100"
               class="mt-1 block w-full rounded-lg border-gray-300"
               required>

        @error('year')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
    </div>


    {{-- Stok --}}
    <div>
        <label class="block font-medium text-sm text-gray-700">
            Stok
        </label>

        <input type="number"
               name="stock"
               value="{{ old('stock', $book->stock ?? 0) }}"
               min="0"
               class="mt-1 block w-full rounded-lg border-gray-300"
               required>

        @error('stock')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
    </div>


    {{-- Kategori --}}
    <div>
        <label class="block font-medium text-sm text-gray-700">
            Kategori
        </label>

        <select name="category_id"
                class="mt-1 block w-full rounded-lg border-gray-300"
                required>

            <option value="">-- Pilih Kategori --</option>

            @foreach($categories as $category)

                <option value="{{ $category->id }}"
                    @selected(old('category_id', $book->category_id ?? '') == $category->id)>
                    {{ $category->name }}
                </option>

            @endforeach

        </select>

        @error('category_id')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
    </div>

</div>