@extends('layouts.structure.web')
@section('title')
    Crear usuario
@endsection
@push('css')
    <style type="text/css">
        #number_phone2l,
        #number_phone2i,
        #Icono2 {
            display: none;
        }

    </style>
@endpush

@section('content')
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>
        <x-jet-validation-errors class="mb-4" />
        <form method="POST" action="{{ route('user.store') }}" class="px-4">
            @csrf
            <div>
                <x-jet-label for="name" value="Nombre" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                    autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="sur_name" value="Apellido" />
                <x-jet-input id="sur_name" class="block mt-1 w-full" type="text" name="sur_name" :value="old('sur_name')"
                    required autofocus autocomplete="surname" />
            </div>

            <div class="mt-4">
                <x-jet-label for="type_identify_id" value="Tipo de identificacion" />
                <x-select-input-type-identifications name="id_type_identification" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="identify_number" value="Numero de identificacion" />
                <x-jet-input id="identify_number" class="block mt-1 w-full" type="number" name="identify_number"
                    :value="old('identify_number')" required />
            </div>
            <div class="mt-4">
                <x-jet-label for="number_phone" value="Telefono" />

                <div class="flex justify-start items-center">
                    <x-jet-input id="number_phone" class="mt-1 w-full" type="number" name="number_phone"
                        :value="old('number_phone')" required />
                    <a onclick="AddTelefonoExtra()">
                        <i class="far fa-plus-square ml-2 w-px fa-2x" id="Icono1"></i>
                    </a>
                </div>
                <x-jet-label class="mt-4" for="number_phone" value="Telefono 2" id="number_phone2l" />

                <div class="flex justify-start items-center">
                    <x-jet-input id="number_phone2i" class="mt-1 w-full" type="number" name="number_phone2i"
                        :value="old('number_phone2i')" />
                    <a onclick="DeleteCampoExtra()">
                        <i class="fas fa-backward ml-2 w-px fa-2x" id="Icono2"></i>
                    </a>
                </div>
            </div>
            
            <div class="mt-4">
                <x-jet-label for="email" value="Email" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                    required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="Contraseña" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="Confirmar contraseña" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password"
                    name="password_confirmation" required autocomplete="new-password" />
            </div>
            <div class="mt-4">
                <x-jet-label for="rol_id" />
                <x-select-input-roles name="id_type_rol" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-jet-button class="ml-4">
                    Registrar
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
    @push('js')
        <script>
            function AddTelefonoExtra() {
                document.getElementById('number_phone2l').style.display = 'block';
                document.getElementById('number_phone2i').style.display = 'block';
                document.getElementById('Icono1').style.display = 'none';
                document.getElementById('Icono2').style.display = 'block';

            }
            function DeleteCampoExtra() {
                document.getElementById('number_phone2l').style.display = 'none';
                document.getElementById('number_phone2i').style.display = 'none';
                document.getElementById('Icono1').style.display = 'block';
                document.getElementById('Icono2').style.display = 'none';

            }
        </script>
    @endpush
@endsection
