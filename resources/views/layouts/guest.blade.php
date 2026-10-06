<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ config('app.name', 'Libra') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen bg-[#f6f7fb]">

    <div class="min-h-screen flex items-center justify-center">

        <div class="w-[380px] max-w-[calc(100vw-32px)]">

            <!-- CARD -->
            <div class="w-full rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">

                {{ $slot }}

            </div>

            <!-- FOOTER -->
            <p class="mt-4 text-center text-[11px] text-slate-400">
                © {{ date('Y') }} Libra Library Management
            </p>

        </div>

    </div>

</body>

</html>