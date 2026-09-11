<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            ¡Bienvenido, {{ auth()->user()->name }}!
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-6">
                <div class="p-6 text-gray-900">
                    AgroInsumos El Cultivador S.A.S. - Panel de control
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                <div class="bg-white p-4 rounded-lg shadow-sm">
                    <p class="text-sm text-gray-500">Total de productos</p>
                    <p class="text-2xl font-bold text-green-700">128</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow-sm">
                    <p class="text-sm text-gray-500">Total de clientes</p>
                    <p class="text-2xl font-bold text-green-700">54</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow-sm">
                    <p class="text-sm text-gray-500">Ventas del día</p>
                    <p class="text-2xl font-bold text-green-700">$0</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow-sm">
                    <p class="text-sm text-gray-500">Bajo stock</p>
                    <p class="text-2xl font-bold text-red-600">3</p>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
