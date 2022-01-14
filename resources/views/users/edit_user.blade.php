@extends('layouts.structure.web')
@section('title')
    Listado de Usuarios -
@endsection

@section('content')
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />
        <form method="POST" {{-- action="{{ route('users.update',$userJ['0']) }}" --}}>
            @csrf
            @method('put')
            <div>
                <x-jet-label for="name" value="Nombre" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{ $user->name }}"
                    readonly />
            </div>
            <div>
                <x-jet-label for="sur_name" value="Apellido" />
                <x-jet-input id="sur_name" class="block mt-1 w-full" type="text" name="sur_name"
                    value="{{ $user->surname }}" readonly />
            </div>
            <div>
                <x-jet-label for="id_type_identification" value="Tipo de identificacion" />
                <x-select-input-type-identifications />
            </div>
            <div>
                <x-jet-label for="identify_number" value="Numero de identificacion" />
                <x-jet-input id="identify_number" class="block mt-1 w-full" type="number" name="identify_number"
                    value="{{ $user->identify_number }}" readonly />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="Email" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" value="{{ $user->email }}"
                    readonly />
            </div>
            <div>
                <x-jet-label for="rol_id" value="Rol" />
                <x-select-input-roles />
                
            </div>
            @livewire('edit-permissions',['user_id'=>$user->id],key($user->id))
            <div class="flex items-center justify-end mt-4">
                <x-jet-button class="ml-4">
                    Registrar
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>

@endsection
