<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Libra') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-[#f6f7fb] text-slate-800">

<div class="min-h-screen">

    <!-- SIDEBAR -->
    <aside class="fixed left-0 top-0 hidden h-screen w-[250px] bg-[#17182d] text-white lg:block">

        <div class="flex h-full flex-col">

            <div class="px-7 py-7">
                <div class="flex items-center gap-3">
                    <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-[#6c63ff] text-xl">
                        📚
                    </div>

                    <div>
                        <h1 class="text-lg font-bold">Libra</h1>
                        <p class="text-xs text-slate-400">Library Management</p>
                    </div>
                </div>
            </div>

            <div class="px-4">

                <p class="mb-3 px-3 text-[11px] font-bold uppercase tracking-[2px] text-slate-500">
                    Menu
                </p>

                <a href="{{ route('dashboard') }}"
                   class="mb-2 flex items-center gap-3 rounded-xl px-4 py-3 text-sm font-semibold
                   {{ request()->routeIs('dashboard') ? 'bg-[#6c63ff] text-white shadow-lg shadow-indigo-900/30' : 'text-slate-400 hover:bg-white/5 hover:text-white' }}">
                    <span class="text-lg">⌂</span>
                    Dashboard
                </a>

                <a href="{{ route('books.index') }}"
                   class="flex items-center gap-3 rounded-xl px-4 py-3 text-sm font-semibold
                   {{ request()->routeIs('books.*') ? 'bg-[#6c63ff] text-white shadow-lg shadow-indigo-900/30' : 'text-slate-400 hover:bg-white/5 hover:text-white' }}">
                    <span class="text-lg">▤</span>
                    Daftar Buku
                </a>

            </div>

            <div class="mt-auto border-t border-white/10 p-5">

                <div class="mb-4 flex items-center gap-3 rounded-xl bg-white/5 p-3">
                    <div class="flex h-9 w-9 items-center justify-center rounded-full bg-[#6c63ff] text-sm font-bold">
                        {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                    </div>

                    <div class="min-w-0">
                        <p class="truncate text-sm font-semibold">
                            {{ Auth::user()->name }}
                        </p>
                        <p class="text-xs text-slate-500">User</p>
                    </div>
                </div>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button class="w-full rounded-xl px-4 py-3 text-left text-sm text-slate-400 hover:bg-red-500/10 hover:text-red-400">
                        ↪ &nbsp; Keluar
                    </button>
                </form>

            </div>

        </div>

    </aside>


    <!-- CONTENT -->
    <div class="lg:ml-[250px]">

        <!-- TOPBAR -->
        <header class="sticky top-0 z-30 border-b border-slate-200 bg-white/90 backdrop-blur">

            <div class="flex h-[78px] items-center justify-between px-6 sm:px-9">

                <div>
                    <p class="text-xs font-semibold uppercase tracking-[2px] text-[#6c63ff]">
                        Sistem Perpustakaan
                    </p>

                    <h2 class="mt-1 text-xl font-bold text-[#17182d]">
                        {{ request()->routeIs('dashboard') ? 'Dashboard' : 'Manajemen Buku' }}
                    </h2>
                </div>

                <div class="flex items-center gap-3">

                    <div class="hidden text-right sm:block">
                        <p class="text-sm font-bold text-slate-800">
                            {{ Auth::user()->name }}
                        </p>
                        <p class="text-xs text-slate-400">
                            Pengguna
                        </p>
                    </div>

                    <div class="flex h-10 w-10 items-center justify-center rounded-full bg-[#eeecff] font-bold text-[#6c63ff]">
                        {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                    </div>

                </div>

            </div>

        </header>


        <main class="min-h-[calc(100vh-78px)] p-6 sm:p-9">
            {{ $slot }}
        </main>

    </div>

</div>

</body>
</html>