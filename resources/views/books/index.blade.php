<x-app-layout>

<div class="mx-auto max-w-[1200px]">

    <div class="mb-8 flex flex-col justify-between gap-5 sm:flex-row sm:items-end">

        <div>
            <p class="text-xs font-bold uppercase tracking-[2px] text-[#6c63ff]">
                Koleksi Perpustakaan
            </p>

            <h1 class="mt-2 text-3xl font-black text-[#17182d]">
                Daftar Buku
            </h1>

            <p class="mt-2 text-sm text-slate-400">
                Kelola seluruh data buku yang tersedia.
            </p>
        </div>

        <a href="{{ route('books.create') }}"
           class="inline-flex items-center justify-center rounded-xl bg-[#6c63ff] px-5 py-3 text-sm font-bold text-white shadow-lg shadow-indigo-200 transition hover:-translate-y-0.5 hover:bg-[#5b52ed]">
            + Tambah Buku
        </a>

    </div>


    @if(session('success'))
        <div class="mb-6 flex items-center gap-3 rounded-xl border border-emerald-100 bg-emerald-50 px-5 py-4 text-sm font-semibold text-emerald-600">
            <span class="flex h-7 w-7 items-center justify-center rounded-full bg-emerald-500 text-white">
                ✓
            </span>

            {{ session('success') }}
        </div>
    @endif


    <div class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">

        <div class="flex flex-col justify-between gap-3 border-b border-slate-100 px-6 py-5 sm:flex-row sm:items-center">

            <div>
                <h2 class="font-black text-[#17182d]">
                    Data Buku
                </h2>

                <p class="mt-1 text-xs text-slate-400">
                    {{ $books->count() }} buku terdaftar dalam sistem
                </p>
            </div>

            <div class="rounded-lg bg-slate-50 px-3 py-2 text-xs font-semibold text-slate-500">
                Semua Buku
            </div>

        </div>


        <div class="overflow-x-auto">

            <table class="w-full">

                <thead>
                    <tr class="border-b border-slate-100 bg-slate-50/70">

                        <th class="px-6 py-4 text-left text-[11px] font-bold uppercase tracking-wider text-slate-400">
                            #
                        </th>

                        <th class="px-6 py-4 text-left text-[11px] font-bold uppercase tracking-wider text-slate-400">
                            Buku
                        </th>

                        <th class="px-6 py-4 text-left text-[11px] font-bold uppercase tracking-wider text-slate-400">
                            Penulis
                        </th>

                        <th class="px-6 py-4 text-left text-[11px] font-bold uppercase tracking-wider text-slate-400">
                            Kategori
                        </th>

                        <th class="px-6 py-4 text-left text-[11px] font-bold uppercase tracking-wider text-slate-400">
                            Tahun
                        </th>

                        <th class="px-6 py-4 text-left text-[11px] font-bold uppercase tracking-wider text-slate-400">
                            Stok
                        </th>

                        <th class="px-6 py-4 text-right text-[11px] font-bold uppercase tracking-wider text-slate-400">
                            Aksi
                        </th>

                    </tr>
                </thead>


                <tbody class="divide-y divide-slate-100">

                @forelse($books as $book)

                    <tr class="group transition hover:bg-[#fafaff]">

                        <td class="px-6 py-5 text-sm font-semibold text-slate-400">
                            {{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}
                        </td>


                        <td class="px-6 py-5">

                            <div class="flex items-center gap-3">

                                <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-[#eeecff] font-black text-[#6c63ff]">
                                    {{ strtoupper(substr($book->title, 0, 1)) }}
                                </div>

                                <div class="min-w-[180px]">
                                    <p class="font-bold text-[#17182d]">
                                        {{ $book->title }}
                                    </p>

                                    <p class="mt-1 text-xs text-slate-400">
                                        {{ $book->publisher }}
                                    </p>
                                </div>

                            </div>

                        </td>


                        <td class="px-6 py-5 text-sm text-slate-600">
                            {{ $book->author }}
                        </td>


                        <td class="px-6 py-5">

                            <span class="rounded-full bg-[#eeecff] px-3 py-1.5 text-xs font-bold text-[#6c63ff]">
                                {{ $book->category->name }}
                            </span>

                        </td>


                        <td class="px-6 py-5 text-sm font-semibold text-slate-600">
                            {{ $book->year }}
                        </td>


                        <td class="px-6 py-5">

                            <span class="rounded-lg bg-emerald-50 px-3 py-1.5 text-xs font-bold text-emerald-600">
                                {{ $book->stock }} tersedia
                            </span>

                        </td>


                        <td class="px-6 py-5">

                            <div class="flex justify-end gap-2">

                                <a href="{{ route('books.show', $book) }}"
                                   class="rounded-lg border border-slate-200 px-3 py-2 text-xs font-bold text-slate-500 transition hover:border-[#6c63ff] hover:text-[#6c63ff]">
                                    Detail
                                </a>

                                <a href="{{ route('books.edit', $book) }}"
                                   class="rounded-lg bg-amber-50 px-3 py-2 text-xs font-bold text-amber-600 transition hover:bg-amber-100">
                                    Edit
                                </a>

                                <form action="{{ route('books.destroy', $book) }}" method="POST"
                                      onsubmit="return confirm('Yakin ingin menghapus buku ini?')">

                                    @csrf
                                    @method('DELETE')

                                    <button type="submit"
                                            class="rounded-lg bg-red-50 px-3 py-2 text-xs font-bold text-red-500 transition hover:bg-red-100">
                                        Hapus
                                    </button>

                                </form>

                            </div>

                        </td>

                    </tr>

                @empty

                    <tr>
                        <td colspan="7" class="px-6 py-16 text-center">

                            <div class="mx-auto flex h-14 w-14 items-center justify-center rounded-2xl bg-slate-100 text-xl text-slate-400">
                                B
                            </div>

                            <h3 class="mt-4 font-bold text-slate-700">
                                Belum ada buku
                            </h3>

                            <p class="mt-1 text-sm text-slate-400">
                                Tambahkan buku pertama ke dalam sistem.
                            </p>

                        </td>
                    </tr>

                @endforelse

                </tbody>

            </table>

        </div>

    </div>

</div>

</x-app-layout>