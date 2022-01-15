@extends('layouts.structure.web')
@section('title')
    Listado de Usuarios -
@endsection

@section('content')

    <form id="login">
        <div class="bg-white dark:bg-gray-800">
            <div class="mx-auto bg-white dark:bg-gray-800 rounded" style="max-width: 500px">
                <div class="xl:w-full border-b border-gray-300 dark:border-gray-700 py-5 bg-white dark:bg-gray-800">
                    <div class="flex w-11/12 mx-auto xl:w-full xl:mx-0 items-center">
                        <p class="text-lg text-gray-800 dark:text-gray-100 font-bold">Editar usuario: {{ $user->name }}</p>
                    </div>
                </div>
                <div class="mx-auto">
                    <form class="my-6 w-11/12 mx-auto xl:w-full xl:mx-0">
                        <div class="xl:w-9/12 w-11/12 mx-auto xl:mx-0">
                            <div class="mt-4 flex flex-col xl:w-2/6 lg:w-1/2 md:w-1/2 w-full">
                                <x-jet-label for="name" value="Nombre" />
                                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name"
                                    value="{{ $user->name }}" readonly />
                            </div>
                            <div class="mt-4 flex flex-col xl:w-2/6 lg:w-1/2 md:w-1/2 w-full">
                                <x-jet-label for="surname" value="Apellido" />
                                <x-jet-input id="surname" class="block mt-1 w-full" type="text" name="surname"
                                    value="{{ $user->surname }}" readonly />
                            </div>
                            <div class="mt-4 flex flex-col xl:w-2/6 lg:w-1/2 md:w-1/2 w-full">
                                <x-jet-label for="id_type_identification" value="Tipo de identificacion" />
                                <x-select-input-type-identifications />
                            </div>
                            <div class="mt-4 flex flex-col xl:w-2/6 lg:w-1/2 md:w-1/2 w-full">
                                <x-jet-label for="identify_number" value="Numero de identificacion" />
                                <x-jet-input id="identify_number" class="block mt-1 w-full" type="number"
                                    name="identify_number" value="{{ $user->identify_number }}" readonly />
                            </div>
                            <div class="mt-4 flex flex-col xl:w-2/6 lg:w-1/2 md:w-1/2 w-full">
                                <x-jet-label for="email" value="Email" />
                                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email"
                                    value="{{ $user->email }}" readonly />
                            </div>
                            <div class="mt-4 flex flex-col xl:w-2/6 lg:w-1/2 md:w-1/2 w-full">
                                <x-jet-label for="rol_id" value="Rol" />
                                <x-select-input-roles />
                            </div>
                        </div>
                </div>
            </div>
            <div class="mx-auto mt-10 rounded bg-gray-100 dark:bg-gray-700 w-11/12 xl:w-full" style="max-width: 550px">
                <div class="xl:w-full py-2 px-8">
                    <div class="flex items-center mx-auto">
                        <p class="text-lg text-gray-800 dark:text-gray-100 font-bold">Permisos</p>
                    </div>
                </div>
                <div class="container mx-auto pb-2">
                    <div class="px-8">
                        @foreach ($permissions as $permission)
                            <div class="flex justify-between items-center mb-2 mt-4">
                                <div class="w-9/12">
                                    <p class="text-sm text-gray-800 dark:text-gray-100 pb-1">{{ $permission->name }}</p>
                                    <p id="cb1" class="text-sm text-gray-600 dark:text-gray-400">
                                        {{ $permission->description }}</p>
                                </div>

                                <div class="cursor-pointer rounded-full bg-gray-200 relative shadow-sm">
                                    @php
                                        $searchPermission = App\Models\UserPermissions::where('user_id', '=', $user->id)
                                            ->where('permission_id', '=', $permission->id)
                                            ->get();
                                        /* dump($searchPermission); */
                                    @endphp
                                    <input tabindex="0" aria-labelledby="cb1" type="checkbox" name="state_permission"
                                        id="toggle1"
                                        class="focus:outline-none checkbox w-6 h-6 rounded-full bg-white dark:bg-gray-400 absolute shadow-sm appearance-none cursor-pointer border border-transparent top-0 bottom-0 m-auto"
                                        {{ $searchPermission[0]->state ? 'checked' : '' }} />
                                    <label
                                        class="toggle-label block w-12 h-4 overflow-hidden rounded-full bg-gray-300 dark:bg-gray-800 cursor-pointer"></label>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </form>
    <style>
        .checkbox:checked {
            right: 0;
        }

        .checkbox:checked+.toggle-label {
            background-color: #4e5eb9;
        }

    </style>
@endsection
