@extends('layouts.structure.web')
@section('title')
    Listado de usuarios -
@endsection
@push('css')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
    <style>
        thead,
        th {
            background-color: #D290F4;
            font-style: italic;
            color: white;
        }

        table tbody tr:nth-child(odd) {
            background-color: #fff;
            color: black
        }

        table tbody tr:nth-child(even) {
            background-color: #e9bdff;
            color: rgb(0, 0, 0)
        }
    </style>
@endpush

@section('content')
    @if ($users->count())
        <x-table>
            <table class="min-w-full divide-y divide-gray-200" id="Usuarios">
                <thead>
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider"
                            wire:click="order('name')">
                            Nombre
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider"
                            wire:click="order('identify_number')">
                            N° Documento
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider"
                            wire:click="order('rol_id')">
                            Rol
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">
                            N° Telefono 1
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">
                            N° Telefono 2
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">
                            Accion
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($users as $user)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-10 w-10">
                                        <img class="h-10 w-10 rounded-full"
                                            src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60"
                                            alt="">
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-black">
                                            {{ $user->name }} {{ $user->surname }}
                                        </div>
                                        <div class="text-sm text-gray-700">
                                            {{ $user->email }}
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                {{ $user->identify_number }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $user->rol }}
                            </td>
                            @php
                                $phones = App\Models\Phones::NumberPhones($user->id);
                            @endphp
                            <td class="px-6 py-4">
                                @if (count($phones) == 0)
                                    No registrado
                                @else
                                    {{ $phones['0']->number }}
                                @endif
                            </td>
                            <td class="px-6 py-4">
                                @if (empty($phones['1']) == 1 or $phones['1']->number == '')
                                    No registrado
                                @else
                                    {{ $phones['1']->number }}
                                @endif
                            </td>
                            <td class="px-6 py-4 text-sm font-medium">
                                <a href="{{ route('users.edit', $user->id) }}" class="button">Editar</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <div class="px-6 py-4">
                No existe ningun usuario coincidiente
            </div>
    @endif
    </x-table>
@endsection
@section('scripts')
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready(function() {
            $('#Usuarios').DataTable();
        });
    </script>
@endsection
