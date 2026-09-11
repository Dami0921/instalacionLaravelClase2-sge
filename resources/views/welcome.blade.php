<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AgroInsumos El Cultivador - ERP</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700&display=swap" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-green-50 text-gray-800">

    <header class="bg-white shadow-sm">
        <div class="max-w-6xl mx-auto px-6 py-4 flex items-center justify-between">
            <div class="flex items-center gap-2">
                <x-application-logo class="w-10 h-10" />
                <span class="font-semibold text-green-800">AgroInsumos El Cultivador</span>
            </div>

            <div class="flex gap-4">
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/dashboard') }}" class="px-4 py-2 bg-green-700 text-white rounded-md text-sm font-medium hover:bg-green-800">
                            Ir al panel
                        </a>
                    @else
                        <a href="{{ route('login') }}" class="px-4 py-2 text-sm font-medium text-green-800 hover:underline">
                            Iniciar sesión
                        </a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="px-4 py-2 bg-green-700 text-white rounded-md text-sm font-medium hover:bg-green-800">
                                Registrarse
                            </a>
                        @endif
                    @endauth
                @endif
            </div>
        </div>
    </header>

    <section class="max-w-6xl mx-auto px-6 py-20 text-center">
        <h1 class="text-4xl font-bold text-green-900 mb-4">
            Gestión inteligente para tu almacén agrícola
        </h1>
        <p class="text-lg text-gray-600 max-w-2xl mx-auto mb-8">
            Controla semillas, fertilizantes, agroquímicos y equipos de riego, con trazabilidad por lote y alertas de vencimiento.
        </p>
        <div class="flex justify-center gap-4">
            <a href="{{ route('register') }}" class="px-6 py-3 bg-green-700 text-white rounded-md font-medium hover:bg-green-800">
                Crear cuenta
            </a>
            <a href="{{ route('login') }}" class="px-6 py-3 bg-white text-green-800 border border-green-700 rounded-md font-medium hover:bg-green-50">
                Iniciar sesión
            </a>
        </div>
    </section>

    <section class="max-w-6xl mx-auto px-6 pb-20">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-white p-6 rounded-lg shadow-sm">
                <h3 class="font-semibold text-green-800 mb-2">Control por lotes</h3>
                <p class="text-sm text-gray-600">Cada remesa recibida se identifica con fecha de vencimiento y costo, aplicando FEFO en cada venta.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-sm">
                <h3 class="font-semibold text-green-800 mb-2">Alertas de vencimiento</h3>
                <p class="text-sm text-gray-600">Recibe avisos automáticos antes de que un lote expire y evita pérdidas.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-sm">
                <h3 class="font-semibold text-green-800 mb-2">Precios por temporada</h3>
                <p class="text-sm text-gray-600">Define precios distintos según la época del año y el sistema aplica el vigente automáticamente.</p>
            </div>
        </div>
    </section>

    <footer class="bg-white border-t py-6">
        <div class="max-w-6xl mx-auto px-6 text-center text-sm text-gray-500">
            &copy; {{ date('Y') }} AgroInsumos El Cultivador S.A.S. — Todos los derechos reservados.
        </div>
    </footer>

</body>
</html>