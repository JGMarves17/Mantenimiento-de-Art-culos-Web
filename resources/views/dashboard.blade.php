<x-admin-layout>
    <div class="bg-white rounded-lg shadow">
        <div class="px-6 py-8">
            <h1 class="text-2xl font-semibold text-gray-800">Bienvenido al panel de USAP</h1>
            <p class="mt-2 text-gray-600">Has iniciado sesión correctamente. Desde aquí puedes administrar los artículos del sitio.</p>
            <a href="{{ route('posts.index') }}"
               class="inline-flex items-center gap-2 mt-6 px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white text-sm font-medium rounded-lg shadow">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m-7 4h8a2 2 0 002-2V6a2 2 0 00-2-2H8a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                Ir a Artículos
            </a>
        </div>
    </div>
</x-admin-layout>