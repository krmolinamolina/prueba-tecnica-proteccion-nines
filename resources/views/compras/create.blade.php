<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Registrar compra') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <form class="w-full max-w-lg" action="{{ route("compra.store") }}" method="POST" >
                    @csrf
                    <div class="flex flex-wrap -mx-3 mb-6">
                      <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                          Proveedor
                        </label>
                        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" name="proveedor" type="text" placeholder="proveedor" >
                        @error('proveedor')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                        
                      </div>
                    </div>
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                           PRODUCTO
                          </label>
                          <select class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" name="producto" id="producto">
                            <option selected value="">Seleccionar producto</option> 
                            @foreach ($productos as $producto)
                              <option value="{{$producto->id_producto}}" {{(old('producto')==$producto->id_producto)? 'selected':''}}>{{$producto->nombre}}</option> 
                            @endforeach
                          </select>                           
                           @error('producto')
                              <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                          
                        </div>
                      </div>
                      <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                            Cantidad
                          </label>
                          <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" name="cantidad" type="number"  >
                          @error('cantidad')
                              <p class="text-red-500 text-xs italic">{{ $message }}</p>
                          @enderror
                          
                        </div>
                      </div>
                      <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                            PRECIO COMPRA / UNIDAD
                          </label>
                          <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" name="precio_compra" type="number"  >
                          @error('precio_compra')
                              <p class="text-red-500 text-xs italic">{{ $message }}</p>
                          @enderror
                          
                        </div>
                      </div>
                      <button class=" text-black rounded border-2 ml-3 my-3" type="submit">
                        Guardar
                      </button>
                  </form>
            </div>
        </div>
    </div>
</x-app-layout>
