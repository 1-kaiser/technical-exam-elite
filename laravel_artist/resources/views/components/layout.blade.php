<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>{{ $title ?? 'Laravel' }}</title>
    @vite('resources/css/app.css')
    @stack('styles')
</head>

<body class="bg-gray-100 min-h-screen flex flex-col">

    {{-- <header class="bg-white shadow-md p-4">
        <div class="container mx-auto">
            <h1 class="text-2xl font-bold text-gray-800">My Tailwind App</h1>
        </div>
    </header> --}}

    <main class="flex-grow container mx-auto p-6">
        {{ $slot }}
    </main>

    {{-- <footer class="bg-white border-t mt-8 p-4 text-center text-gray-500 text-sm">

    </footer> --}}

    @stack('scripts')
</body>

</html>
