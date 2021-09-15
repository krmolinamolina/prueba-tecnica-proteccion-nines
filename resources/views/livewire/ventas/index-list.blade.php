<div>
    <div class="grid grid-cols-12">
        <div class="col-start-5 text-left col-span-1 mr-1 px-2 py-2">
         
            <input type="text" wire:model.lazy="buscar" name="buscar" id="buscar" placeholder="buscar..." class="w-full px-3 py-2  borde border-gray-400 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300">
        </div>
        <div class="mt-2">
            <a href="{{ route('ventas.create') }}" class=" text-blue-900 font-bold py-2 px-4 rounded border-2 border-blue-800 ml-2 " >
                Crear venta {{$ano}}
            </a>
          
        </div>
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
                        Productos
                    </th>
                    <th  class="px-6 py-3 text-left text-xs text-blue-800 font-bold uppercase ">
                        Cliente
                    </th>
                    <th  class="px-6 py-3 text-left text-xs text-blue-800 font-bold uppercase ">
                        Fecha
                    </th>
                  
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @forelse ($ventas as $key => $venta )
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                @foreach ($venta->detalle  as $detalle)
                                {{$detalle->producto->nombre}} - {{$detalle->cantidad}}
                                <br>
                                @endforeach
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                {{$venta->cliente->pri_nombre}}   {{$venta->cliente->pri_apellido}}  {{$venta->cliente->seg_apellido}} 
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                {{$venta->created_at}} 
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
