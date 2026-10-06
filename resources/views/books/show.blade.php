<x-app-layout>

<div class="mx-auto max-w-[950px]">

    <div class="mb-8">

        <a href="{{ route('books.index') }}"
           class="text-sm font-bold text-[#6c63ff]">
            ← Kembali ke Daftar Buku
        </a>

        <h1 class="mt-5 text-3xl font-black text-[#17182d]">
            Detail Buku
        </h1>

        <p class="mt-2 text-sm text-slate-400">
            Informasi lengkap mengenai buku yang dipilih.
        </p>

    </div>


    <div class="overflow-hidden rounded-3xl border border-slate-200 bg-white shadow-sm">

        <div class="bg-gradient-to-br from-[#17182d] to-[#292a4a] px-7 py-9 text-white sm:px-10">

            <span class="rounded-full bg-[#6c63ff] px-4 py-2 text-xs font-bold">
                {{ $book->category->name }}
            </span>

            <h2 class="mt-5 max-w-2xl text-3xl font-black">
                {{ $book->title }}
            </h2>

            <p class="mt-3 text-sm text-slate-300">
                Ditulis oleh {{ $book->author }}
            </p>

        </div>


        <div class="grid gap-4 p-7 sm:grid-cols-2 sm:p-10">

            <div class="rounded-2xl bg-slate-50 p-5">
                <p class="text-xs font-bold uppercase tracking-wider text-slate-400">
                    Penulis
                </p>

                <p class="mt-2 font-bold text-[#17182d]">
                    {{ $book->author }}
                </p>
            </div>


            <div class="rounded-2xl bg-slate-50 p-5">
                <p class="text-xs font-bold uppercase tracking-wider text-slate-400">
                    Penerbit
                </p>

                <p class="mt-2 font-bold text-[#17182d]">
                    {{ $book->publisher }}
                </p>
            </div>


            <div class="rounded-2xl bg-slate-50 p-5">
                <p class="text-xs font-bold uppercase tracking-wider text-slate-400">
                    Tahun Terbit
                </p>

                <p class="mt-2 font-bold text-[#17182d]">
                    {{ $book->year }}
                </p>
            </div>


            <div class="rounded-2xl bg-emerald-50 p-5">
                <p class="text-xs font-bold uppercase tracking-wider text-emerald-500">
                    Stok Buku
                </p>

                <p class="mt-2 font-bold text-emerald-700">
                    {{ $book->stock }} buku tersedia
                </p>
            </div>

        </div>


        <div class="flex flex-col-reverse gap-3 border-t border-slate-100 px-7 py-6 sm:flex-row sm:justify-end sm:px-10">

            <a href="{{ route('books.index') }}"
               class="rounded-xl bg-slate-100 px-6 py-3 text-center text-sm font-bold text-slate-600 hover:bg-slate-200">
                Kembali
            </a>

            <a href="{{ route('books.edit', $book) }}"
               class="rounded-xl bg-[#6c63ff] px-6 py-3 text-center text-sm font-bold text-white shadow-lg shadow-indigo-200 hover:bg-[#5b52ed]">
                Edit Buku
            </a>

        </div>

    </div>

</div>

</x-app-layout>