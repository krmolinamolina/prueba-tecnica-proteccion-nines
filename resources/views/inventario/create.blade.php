<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Inventario crear producto') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <form class="w-full max-w-lg" action="{{ route("inventario.store") }}" method="POST" >
                    @csrf
                    <div class="flex flex-wrap -mx-3 mb-6">
                      <div class="w-full  px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                          Nombre del producto
                        </label>
                        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border  py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" name="nombre" type="text" placeholder="Nombre" >
                        @error('nombre')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                        
                      </div>
                    </div>
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3 mb-6 md:mb-0">
                          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                           Descripcion
                          </label>
                          <input class="appearance-none block w-full bg-gray-200 text-gray-700 border  py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" name="descripcion" type="text" placeholder="descripcion">
                          @error('descripcion')
                              <p class="text-red-500 text-xs italic">{{ $message }}</p>
                          @enderror
                          
                        </div>
                      </div>
                      <button class=" text-blue-900 font-bold py-2 px-4 rounded border-2 border-blue-800 ml-2" type="submit">
                        Guardar
                      </button>
                  </form>
            </div>
        </div>
    </div>
</x-app-layout>
