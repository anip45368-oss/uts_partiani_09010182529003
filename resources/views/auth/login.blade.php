<x-guest-layout>

<div class="min-h-[620px]">

    <div class="mb-8 text-center">

        <div class="mx-auto flex h-16 w-16 items-center justify-center rounded-2xl bg-[#6c63ff] text-2xl shadow-lg shadow-indigo-200">
            📚
        </div>

        <h1 class="mt-5 text-2xl font-black text-[#17182d]">
            Selamat Datang
        </h1>

        <p class="mt-2 text-sm text-slate-400">
            Masuk ke Perpustakaan Digital
        </p>

    </div>


    <form method="POST" action="{{ route('login') }}" class="space-y-5">

        @csrf

        <div>
            <label for="email" class="text-sm font-bold text-slate-700">
                Email
            </label>

            <input id="email"
                   type="email"
                   name="email"
                   value="{{ old('email') }}"
                   required
                   autofocus
                   autocomplete="username"
                   placeholder="Masukkan email"
                   class="mt-2 w-full rounded-xl border-slate-200 px-4 py-3.5 text-sm shadow-sm focus:border-[#6c63ff] focus:ring-[#6c63ff]">

            @error('email')
                <p class="mt-2 text-xs text-red-500">{{ $message }}</p>
            @enderror
        </div>


        <div>
            <label for="password" class="text-sm font-bold text-slate-700">
                Password
            </label>

            <input id="password"
                   type="password"
                   name="password"
                   required
                   autocomplete="current-password"
                   placeholder="Masukkan password"
                   class="mt-2 w-full rounded-xl border-slate-200 px-4 py-3.5 text-sm shadow-sm focus:border-[#6c63ff] focus:ring-[#6c63ff]">

            @error('password')
                <p class="mt-2 text-xs text-red-500">{{ $message }}</p>
            @enderror
        </div>


        <div class="flex items-center justify-between">

            <label class="flex items-center gap-2 text-sm text-slate-500">
                <input type="checkbox"
                       name="remember"
                       class="rounded border-slate-300 text-[#6c63ff] focus:ring-[#6c63ff]">

                Ingat saya
            </label>

            @if (Route::has('password.request'))

                <a href="{{ route('password.request') }}"
                   class="text-xs font-bold text-[#6c63ff] hover:text-[#5148e8]">
                    Lupa password?
                </a>

            @endif

        </div>


        <button type="submit"
                class="w-full rounded-xl bg-[#6c63ff] py-3.5 text-sm font-bold text-white shadow-lg shadow-indigo-200 transition hover:bg-[#5b52ed]">
            Masuk ke Sistem
        </button>

    </form>


    @if (Route::has('register'))

        <p class="mt-7 text-center text-sm text-slate-400">

            Belum memiliki akun?

            <a href="{{ route('register') }}"
               class="font-bold text-[#6c63ff]">
                Daftar sekarang
            </a>

        </p>

    @endif

</div>

</x-guest-layout>