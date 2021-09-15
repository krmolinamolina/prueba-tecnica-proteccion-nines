<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Crear Usuario') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-12 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-4">
              <form method="POST" action="{{ route('user.store') }}">
                @csrf
    
                <div>
                    <x-jet-label for="nombre" value="{{ __('nombre') }}" />
                    <x-jet-input id="nombre" class="block mt-1 w-full" type="text" name="nombre" :value="old('nombre')" required autofocus autocomplete="nombre" />
                </div>
    
                <div class="mt-4">
                    <x-jet-label for="email" value="{{ __('Email') }}" />
                    <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                </div>
    
                <div class="mt-4">
                    <x-jet-label for="password" value="{{ __('Password') }}" />
                    <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                </div>
    
                <div class="mt-4">
                    <x-jet-label for="password_confirmar" value="{{ __('Confirm Password') }}" />
                    <x-jet-input id="password_confirmar" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                </div>
    
                <div class="mt-4">
               
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                     Tipo de usuario
                    </label>
                    <select class="block mt-1 w-full" name="rol" id="rol">
                      <option selected value="">Seleccionar </option> 
                      @foreach ($roles as $rol)
                        <option value="{{$rol->rol_id}}" {{(old('rol')==$rol->id_rol)? 'selected':''}}>{{$rol->nombre}}</option> 
                      @endforeach
                    </select>                           
                     @error('rol')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                      @enderror
                    
                </div>
    
                <div class="flex items-center justify-end mt-4">
           
                    <x-jet-button class="ml-4">
                        {{ __('Guardar') }}
                    </x-jet-button>
                </div>
            </form>
            </div>
        </div>
    </div>
</x-app-layout>
