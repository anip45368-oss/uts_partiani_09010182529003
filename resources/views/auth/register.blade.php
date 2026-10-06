<x-guest-layout>

    <div class="text-center">

        <!-- ICON -->
        <div class="mx-auto flex h-14 w-14 items-center justify-center rounded-2xl bg-[#6c63ff] text-2xl shadow-lg shadow-indigo-200">
            📚
        </div>

        <h1 class="mt-4 text-2xl font-black text-[#17182d]">
            Buat Akun
        </h1>

        <p class="mt-2 text-sm text-slate-400">
            Daftar untuk menggunakan Perpustakaan Digital
        </p>

    </div>


    <form method="POST"
          action="{{ route('register') }}"
          class="mt-6">

        @csrf

        <!-- NAMA -->
        <div>
            <label for="name"
                   class="text-sm font-bold text-slate-700">
                Nama Lengkap
            </label>

            <input
                id="name"
                type="text"
                name="name"
                value="{{ old('name') }}"
                required
                autofocus
                autocomplete="name"
                placeholder="Masukkan nama lengkap"
                class="mt-2 block w-full rounded-xl border-slate-200 px-4 py-3 text-sm shadow-sm focus:border-[#6c63ff] focus:ring-[#6c63ff]"
            >

            @error('name')
                <p class="mt-1 text-xs text-red-500">
                    {{ $message }}
                </p>
            @enderror
        </div>


        <!-- EMAIL -->
        <div class="mt-4">
            <label for="email"
                   class="text-sm font-bold text-slate-700">
                Email
            </label>

            <input
                id="email"
                type="email"
                name="email"
                value="{{ old('email') }}"
                required
                autocomplete="username"
                placeholder="Masukkan email"
                class="mt-2 block w-full rounded-xl border-slate-200 px-4 py-3 text-sm shadow-sm focus:border-[#6c63ff] focus:ring-[#6c63ff]"
            >

            @error('email')
                <p class="mt-1 text-xs text-red-500">
                    {{ $message }}
                </p>
            @enderror
        </div>


        <!-- PASSWORD -->
        <div class="mt-4">
            <label for="password"
                   class="text-sm font-bold text-slate-700">
                Password
            </label>

            <input
                id="password"
                type="password"
                name="password"
                required
                autocomplete="new-password"
                placeholder="Masukkan password"
                class="mt-2 block w-full rounded-xl border-slate-200 px-4 py-3 text-sm shadow-sm focus:border-[#6c63ff] focus:ring-[#6c63ff]"
            >

            @error('password')
                <p class="mt-1 text-xs text-red-500">
                    {{ $message }}
                </p>
            @enderror
        </div>


        <!-- KONFIRMASI -->
        <div class="mt-4">
            <label for="password_confirmation"
                   class="text-sm font-bold text-slate-700">
                Konfirmasi Password
            </label>

            <input
                id="password_confirmation"
                type="password"
                name="password_confirmation"
                required
                autocomplete="new-password"
                placeholder="Ulangi password"
                class="mt-2 block w-full rounded-xl border-slate-200 px-4 py-3 text-sm shadow-sm focus:border-[#6c63ff] focus:ring-[#6c63ff]"
            >

            @error('password_confirmation')
                <p class="mt-1 text-xs text-red-500">
                    {{ $message }}
                </p>
            @enderror
        </div>


        <!-- BUTTON -->
        <button
            type="submit"
            class="mt-6 w-full rounded-xl bg-[#6c63ff] py-3.5 text-sm font-bold text-white shadow-lg shadow-indigo-200 transition hover:bg-[#5b52ed]"
        >
            Buat Akun
        </button>

    </form>


    <!-- LOGIN -->
    <div class="mt-6 text-center">

        <p class="text-sm text-slate-400">
            Sudah memiliki akun?

            <a href="{{ route('login') }}"
               class="font-bold text-[#6c63ff] hover:text-[#5148e8]">
                Masuk sekarang
            </a>
        </p>

    </div>

</x-guest-layout>