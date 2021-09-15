<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Usuarios') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="flex flex-col">
                        <div class="mt-2">
                            <a href="{{ route('user.create') }}" class=" text-blue-900 font-bold py-2 px-4 rounded border-2 border-blue-800 ml-2 " >
                                Crear usuario
                            </a>
                            
                        </div>
                    <br>
                    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                            <table class="min-w-full table-auto divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                <th  class="px-6 py-3 text-left text-xs text-blue-800 font-bold uppercase ">
                                    Nombre
                                </th>
                                <th  class="px-6 py-3 text-left text-xs text-blue-800 font-bold uppercase ">
                                    Correo
                                </th>
                                <th  class="px-6 py-3 text-left text-xs text-blue-800 font-bold uppercase ">
                                    Rol
                                </th>
                                <th  class="px-6 py-3 text-left text-xs text-blue-800 font-bold uppercase ">
                                    Fecha
                                </th>
                              
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @forelse ($users as $key => $user )
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            {{$user->name}}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            {{$user->email}} 
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            {{$user->rol->nombre}} 
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            {{$user->created_at}} 
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
        </div>
    </div>
</x-app-layout>
