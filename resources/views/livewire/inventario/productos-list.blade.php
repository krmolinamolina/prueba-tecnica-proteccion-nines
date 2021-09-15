<div>
    <div class="grid grid-cols-12">
        <div class="col-start-5 text-left col-span-6 mr-1 px-2 py-2">
         
            <input type="text" wire:model.lazy="buscar" name="buscar" id="buscar" placeholder="buscar..." class="w-full px-3 py-2  borde border-gray-400 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300">
        </div>
        
    </div>
   <div class="mt-2">
            <a href="{{ route('inventario.create') }}" class=" text-blue-900 font-bold py-2 px-4 rounded border-2 border-blue-800 ml-2 " >
                Crear producto
            </a>
            <a href="{{ route('compra.create') }}" class=" text-blue-900 font-bold py-2 px-4 rounded border-2 border-blue-800 ml-2 " >
                Registrar Ingreso
            </a>
        </div>
    <br>
    <div class="flex flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                <table class="min-w-full table-auto divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                    <th  class="px-6 py-3 text-left text-xs text-blue-800 font-bold uppercase ">
                        Producto
                    </th>
                    <th  class="px-6 py-3 text-left text-xs text-blue-800 font-bold uppercase ">
                        Descripcion
                    </th>
                    <th  class="px-6 py-3 text-left text-xs text-blue-800 font-bold uppercase ">
                        Stock
                    </th>
                    <th  class="px-6 py-3 text-left text-xs text-blue-800 font-bold uppercase ">
                        Editar
                    </th>
                  
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @forelse ($productos as $key => $producto )
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                {{$producto->nombre}} 
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                {{$producto->descripcion}} 
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                {{$producto->stock}} 
                            </td>
                            <td class="border-b p-2">
                                <div class="grid justify-center items-center ">
                                        <a class="flex items-center mx-auto text-theme-9 py-1 hover:text-blue-600"
                                            href="{{ route('inventario.edit', ['id'=>$producto->id_producto]) }}" >
                                            <i class="w-4 h-4 mr-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4" />
                                                </svg>
                                            </i>
                                            Editar
                                        </a>
                                
                                        <form action="{{ route("inventario.destroy", $producto->id_producto) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <input type="submit" value="Eliminar" class=" bg-red-200 text-red-600" onclick="return confirm('¿Desea eliminar?')">
                                        </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td>
                            <center>
                                <p>No hay registros</p>
                            </center>
                            </td>
                            
                        </tr>
                    @endforelse
                    <!-- More items... -->
                </tbody>
                </table>
                <div>
                {{-- @if ($listaDefecto)
                {{$listaDefecto->links()}}
                @endif --}}
                
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
