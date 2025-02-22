@extends('layouts.structure.web')
@section('title')
    Listado de Usuarios -
@endsection
@push('css')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
@endpush

@section('content')
    <div class="bg-white dark:bg-gray-800">
        <div class="mx-auto bg-white dark:bg-gray-800 rounded" style="max-width: 500px">
            <div class="xl:w-full border-b border-gray-300 dark:border-gray-700 py-5 bg-white dark:bg-gray-800">
                <div class="flex w-11/12 mx-auto xl:w-full xl:mx-0 items-center">
                    <p class="text-lg text-gray-800 dark:text-gray-100 font-bold">Editar usuario: {{ $user->name }}
                    </p>
                </div>
            </div>
            <div class="mx-auto">
                <form class="my-6 w-11/12 mx-auto xl:w-full xl:mx-0" action="{{ route('users.update') }}" method="POST">
                    @csrf
                    <x-jet-validation-errors class="mb-4" />
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
                            <x-select-input-type-identifications name="id_type_identification"
                                value="{{ $user->type_identify_id }}" readonly />
                        </div>
                        <div class="mt-4 flex flex-col xl:w-2/6 lg:w-1/2 md:w-1/2 w-full">
                            <x-jet-label for="identify_number" value="Numero de identificacion" />
                            <x-jet-input id="identify_number" class="block mt-1 w-full" type="number" name="identify_number"
                                value="{{ $user->identify_number }}" readonly />
                        </div>
                        <div class="mt-4 flex flex-col xl:w-2/6 lg:w-1/2 md:w-1/2 w-full">
                            <x-jet-label for="number_phone" value="Telefono" />
                            @if (count($phones) == 0)
                                <x-jet-input id="number_phone" class="block mt-1 w-full" type="number" name="number_phone"
                                    required />
                            @else
                                <x-jet-input id="number_phone" class="block mt-1 w-full" type="number" name="number_phone"
                                    value="{{ $phones['0']->number }}" required />
                                <input type="hidden" value="{{ $phones['0']->id }}" name="idPhone1">
                            @endif
                        </div>
                        <div class="mt-4 flex flex-col xl:w-2/6 lg:w-1/2 md:w-1/2 w-full">
                            <x-jet-label for="number_phone2" value="Telefono 2" />
                            @if (empty($phones['1']) == 1)
                                <x-jet-input id="number_phone2" class="block mt-1 w-full" type="number"
                                    name="number_phone2" />
                            @else
                                <x-jet-input id="number_phone2" class="block mt-1 w-full" type="number" name="number_phone2"
                                    value="{{ $phones['1']->number }}" />
                                <input type="hidden" value="{{ $phones['1']->id }}" name="idPhone2">
                            @endif

                        </div>
                        <div class="mt-4 flex flex-col xl:w-2/6 lg:w-1/2 md:w-1/2 w-full">
                            <x-jet-label for="email" value="Email" />
                            <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email"
                                value="{{ $user->email }}" readonly />
                        </div>
                        <div class="mt-4 flex flex-col xl:w-2/6 lg:w-1/2 md:w-1/2 w-full">
                            <x-jet-label for="rol_id" value="Rol" />
                            <x-select-input-roles name="id_type_rol" required />
                        </div>
                    </div>
                    <input type="hidden" value="{{ $user->id }}" name="id">
                    <div class="flex items-center justify-end mt-4">
                        <button type="submit">Actualizar</button>
                    </div>
                </form>
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
                                <p class="text-sm text-gray-800 dark:text-gray-100 pb-1">{{ $permission->name }}
                                </p>
                                <p id="cb1" class="text-sm text-gray-600 dark:text-gray-400">
                                    {{ $permission->description }}</p>
                            </div>
                            <div class="cursor-pointer rounded-full bg-gray-200 relative shadow-sm">
                                <?php
                                        $searchPermission = App\Models\UserPermissions::where('user_id', '=', $user->id)
                                            ->where('permission_id', '=', $permission->id)
                                            ->get();
                                        if($searchPermission->count()){
                                    ?>
                                <label class="switch">
                                    <input id="permission" data-permission="{{ $permission->id }}" class="mi_checkbox"
                                        type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle"
                                        data-on="Active" data-off="InActive" data-user="{{ $user->id }}"
                                        {{ $searchPermission[0]->state ? 'checked' : '' }}>
                                    <span class="slider round"></span>
                                </label>
                                <?php }else{
                                        ?>
                                <label class="switch">
                                    <input id="permission" data-permission="{{ $permission->id }}" class="mi_checkbox"
                                        type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle"
                                        data-on="Active" data-off="InActive" data-user="{{ $user->id }}">
                                    <span class="slider round"></span>
                                </label>
                                <?php } ?>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
    @push('js')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"
                integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script>
            $('.mi_checkbox').change(function() {
                //Verifico el estado del checkbox, si esta seleccionado sera igual a 1 de lo contrario sera igual a 0
                var state = $(this).prop('checked') == true ? 1 : 0;
                var idp = $(this).data('permission');
                var idu = $(this).data('user');
                console.log("Estado" + state);
                console.log("User" + idu);
                console.log("Permiso id" + idp);
                $.ajax({
                    type: "GET",
                    dataType: "json",
                    url: '{{ route('users.edit_permissions') }}',
                    data: {
                        'state': state,
                        'idu': idu,
                        'idp': idp
                    },
                    success: function(data) {
                        console.log(data.var);
                        if (data.var == 1) {
                            toastr.success('Permiso activado');
                        } else {
                            toastr.warning('Permiso desactivado');
                        }
                        $('#resp').html(data.var);

                    }
                });
            })
        </script>
    @endpush
@endsection
