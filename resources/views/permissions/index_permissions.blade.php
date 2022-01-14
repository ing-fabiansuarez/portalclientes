@extends('layouts.structure.web')
@section('title')
    Listado de Usuarios -
@endsection

@section('content')
    @livewire('create-permission')
    @if ($permissions->count())
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th scope="col"
                        class="cursor-pointer px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                        wire:click="order('name')">
                        Id
                    </th>
                    <th scope="col"
                        class="cursor-pointer px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                        wire:click="order('identify_number')">
                        Nombre
                    </th>
                    <th scope="col"
                        class="cursor-pointerpx-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                        wire:click="order('rol_id')">
                        Descripcion
                    </th>
                    <th scope="col" class="relative px-6 py-3">
                        <span class="sr-only">Editar</span>
                    </th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach ($permissions as $permission)
                    <tr>
                        <td class="px-6 py-4">
                            {{ $permission->id }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $permission->name }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $permission->description }}
                        </td>
                        <td class="px-6 py-4">
                            <a href="#">Editar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <div class="px-6 py-4">
            No existe ningun permiso
        </div>
    @endif
@endsection
