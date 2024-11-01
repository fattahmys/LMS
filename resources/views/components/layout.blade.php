<!DOCTYPE html>
<html class="h-full bg-gray-100" lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <title>{{$title}}</title>
</head>
<body class="h-full">
    <div class="min-h-full">
        <x-navbar></x-navbar>
        @if (!request()->is('kelas*'))
            <x-header>{{$title}}</x-header>
        @endif
        
        <div class="flex h-screen">
                @if (request()->is('kelas*'))
                <x-sidebar>{{$title}}</x-sidebar>
                @endif  

                <!-- Mengatur main sebagai flex container dan menambahkan lebar -->
                <main class="flex-1 p-6 overflow-y-auto"> <!-- flex-1 untuk mengisi ruang yang tersisa -->
                    {{$slot}}
                </main>
            </div>
    </div>

    <x-alert></x-alert>
</body>
</html>
