<x-admin-layout>
    <div class="bg-white rounded-lg shadow max-w-5xl">
        <div class="px-6 py-4 border-b border-gray-100">
            <h1 class="text-2xl font-semibold text-gray-800">Crear articulo</h1>
        </div>

        <form method="POST" action="{{ route('posts.store') }}">
            @csrf
            <div class="px-6 py-6 space-y-6">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-2 md:items-start">
                    <label for="titulo" class="text-sm font-semibold text-gray-700 md:pt-2">Nombre del articulo <span class="text-red-500">*</span></label>
                    <div class="md:col-span-2">
                        <input type="text" name="titulo" id="titulo" value="{{ old('titulo') }}" required
                               class="w-full px-3 py-2 bg-gray-50 border border-gray-200 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        @error('titulo') <p class="mt-1 text-xs text-red-500">{{ $message }}</p> @enderror
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-2 md:items-start">
                    <label for="contenido" class="text-sm font-semibold text-gray-700 md:pt-2">Contenido <span class="text-red-500">*</span></label>
                    <div class="md:col-span-2">
                        <textarea name="contenido" id="contenido" rows="4" required
                                  class="w-full px-3 py-2 bg-gray-50 border border-gray-200 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">{{ old('contenido') }}</textarea>
                        @error('contenido') <p class="mt-1 text-xs text-red-500">{{ $message }}</p> @enderror
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-2 md:items-start">
                    <label for="autor" class="text-sm font-semibold text-gray-700 md:pt-2">Autor <span class="text-red-500">*</span></label>
                    <div class="md:col-span-2">
                        <input type="text" name="autor" id="autor" value="{{ old('autor') }}" required
                               class="w-full px-3 py-2 bg-gray-50 border border-gray-200 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        @error('autor') <p class="mt-1 text-xs text-red-500">{{ $message }}</p> @enderror
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-2 md:items-start">
                    <label for="categoria" class="text-sm font-semibold text-gray-700 md:pt-2">Categoria <span class="text-red-500">*</span></label>
                    <div class="md:col-span-2">
                        <input type="text" name="categoria" id="categoria" value="{{ old('categoria') }}" required
                               class="w-full px-3 py-2 bg-gray-50 border border-gray-200 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        @error('categoria') <p class="mt-1 text-xs text-red-500">{{ $message }}</p> @enderror
                    </div>
                </div>
            </div>

            <div class="flex items-center justify-between px-6 py-4 border-t border-gray-100 bg-gray-50 rounded-b-lg">
                <p class="text-sm text-gray-400">Recuerda siempre guardar los cambios.</p>
                <div class="flex gap-2">
                    <a href="{{ route('posts.index') }}" class="px-4 py-2 text-sm text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-gray-50">Cancelar</a>
                    <button type="submit" class="px-4 py-2 text-sm font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-700">Crear</button>
                </div>
            </div>
        </form>
    </div>
</x-admin-layout>