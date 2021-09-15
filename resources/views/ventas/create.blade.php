<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Registrar venta') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <form class="w-full max-w-lg" action="{{ route("ventas.store") }}" method="POST" >
                    @csrf
                    <div class="flex flex-wrap -mx-3 mb-6">
                      <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                         CLIENTE
                        </label>
                        <select class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" name="cliente" id="cliente">
                          <option selected value="">Seleccionar cliente</option> 
                          @foreach ($clientes as $cliente)
                            <option value="{{$cliente->id_cliente}}" {{(old('cliente')==$cliente->id_cliente)? 'selected':''}}>{{$cliente->pri_nombre}} {{$cliente->pri_apellido}}</option> 
                          @endforeach
                        </select>                           
                         @error('cliente')
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
                      
                      <button class=" text-black rounded border-2 ml-3 my-3" type="submit">
                        Guardar
                      </button>
                  </form>
            </div>
        </div>
    </div>
</x-app-layout>
