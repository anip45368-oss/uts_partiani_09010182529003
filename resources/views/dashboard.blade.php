<x-app-layout>

<div class="mx-auto max-w-[1200px]">

    <!-- WELCOME -->
    <div class="relative overflow-hidden rounded-[28px] bg-[#17182d] px-7 py-9 text-white shadow-xl sm:px-10">

        <div class="relative z-10 max-w-2xl">

            <span class="rounded-full bg-white/10 px-4 py-2 text-xs font-semibold text-indigo-200">
                DASHBOARD
            </span>

            <h1 class="mt-5 text-3xl font-black leading-tight sm:text-4xl">
                Selamat Datang,
                <span class="text-[#8b83ff]">{{ Auth::user()->name }}!</span>
            </h1>

            <p class="mt-4 max-w-xl text-sm leading-7 text-slate-400">
                Kelola data buku perpustakaan dengan lebih mudah,
                teratur, dan cepat melalui sistem perpustakaan digital.
            </p>

            <a href="{{ route('books.index') }}"
               class="mt-7 inline-flex rounded-xl bg-[#6c63ff] px-5 py-3 text-sm font-bold text-white shadow-lg shadow-indigo-900/30 transition hover:bg-[#5b52ed]">
                Kelola Buku →
            </a>

        </div>

        <div class="absolute -right-16 -top-24 h-72 w-72 rounded-full bg-[#6c63ff]/20"></div>
        <div class="absolute -bottom-32 right-32 h-72 w-72 rounded-full bg-purple-500/10"></div>

    </div>


    <!-- STAT CARDS -->
    <div class="mt-7 grid gap-5 md:grid-cols-3">

        <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
            <div class="flex items-center justify-between">

                <div>
                    <p class="text-sm font-medium text-slate-400">
                        Total Buku
                    </p>

                    <p class="mt-2 text-3xl font-black text-[#17182d]">
                        {{ \App\Models\Book::count() }}
                    </p>

                    <p class="mt-2 text-xs text-emerald-500">
                        Koleksi buku
                    </p>
                </div>

                <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-[#eeecff] text-xl font-black text-[#6c63ff]">
                    B
                </div>

            </div>
        </div>


        <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
            <div class="flex items-center justify-between">

                <div>
                    <p class="text-sm font-medium text-slate-400">
                        Kategori
                    </p>

                    <p class="mt-2 text-3xl font-black text-[#17182d]">
                        {{ \App\Models\Category::count() }}
                    </p>

                    <p class="mt-2 text-xs text-blue-500">
                        Kategori tersedia
                    </p>
                </div>

                <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-blue-50 text-xl font-black text-blue-500">
                    K
                </div>

            </div>
        </div>


        <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
            <div class="flex items-center justify-between">

                <div>
                    <p class="text-sm font-medium text-slate-400">
                        Total Stok
                    </p>

                    <p class="mt-2 text-3xl font-black text-[#17182d]">
                        {{ \App\Models\Book::sum('stock') }}
                    </p>

                    <p class="mt-2 text-xs text-purple-500">
                        Buku tersedia
                    </p>
                </div>

                <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-purple-50 text-xl font-black text-purple-500">
                    S
                </div>

            </div>
        </div>

    </div>


    <!-- INFO -->
    <div class="mt-7 grid gap-5 lg:grid-cols-3">

        <div class="rounded-2xl border border-slate-200 bg-white p-7 shadow-sm lg:col-span-2">

            <div class="flex items-center justify-between">

                <div>
                    <h2 class="text-lg font-black text-[#17182d]">
                        Sistem Perpustakaan
                    </h2>

                    <p class="mt-1 text-sm text-slate-400">
                        Informasi aplikasi
                    </p>
                </div>

                <span class="rounded-full bg-emerald-50 px-3 py-1 text-xs font-bold text-emerald-600">
                    Aktif
                </span>

            </div>

            <p class="mt-6 text-sm leading-7 text-slate-500">
                Aplikasi ini digunakan untuk mengelola data buku perpustakaan.
                Pengguna dapat melihat daftar buku, menambahkan data baru,
                mengubah informasi buku, melihat detail, serta menghapus data.
            </p>

        </div>


        <div class="rounded-2xl bg-[#6c63ff] p-7 text-white shadow-lg">

            <p class="text-xs font-bold uppercase tracking-[2px] text-indigo-200">
                Quick Access
            </p>

            <h3 class="mt-4 text-xl font-black">
                Kelola koleksi buku
            </h3>

            <p class="mt-3 text-sm leading-6 text-indigo-100">
                Tambahkan atau perbarui data buku perpustakaan.
            </p>

            <a href="{{ route('books.create') }}"
               class="mt-6 block rounded-xl bg-white px-4 py-3 text-center text-sm font-bold text-[#6c63ff] hover:bg-indigo-50">
                + Tambah Buku
            </a>

        </div>

    </div>

</div>

</x-app-layout>