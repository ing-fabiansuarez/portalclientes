@extends('layouts.structure.web')
@section('title')
Listado de Usuarios -
@endsection


@section('content')

<a href="{{route('create_user')}}">Crear usuario</a>
@if($users->count())
<table class="min-w-full divide-y divide-gray-200">
    <thead class="bg-gray-50">
        <tr>
            <th scope="col" class="cursor-pointer px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider" wire:click="order('name')">
                Nombre
            </th>
            <th scope="col" class="cursor-pointer px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider" wire:click="order('identify_number')">
                N° Documento
            </th>
            <th scope="col" class="cursor-pointerpx-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider" wire:click="order('rol_id')">
                Rol
            </th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                N° Telefono
            </th>
            <th scope="col" class="relative px-6 py-3">
                <span class="sr-only">Edit</span>
            </th>
        </tr>
    </thead>
    <tbody class="bg-white divide-y divide-gray-200">
        @foreach ($users as $user)
        <tr>
            <td class="px-6 py-4 whitespace-nowrap">
                <div class="flex items-center">
                    <div class="flex-shrink-0 h-10 w-10">
                        <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60" alt="">
                    </div>
                    <div class="ml-4">
                        <div class="text-sm font-medium text-gray-900">
                            {{ $user->name }} {{$user->surname}}
                        </div>
                        <div class="text-sm text-gray-500">
                            {{ $user->email }}
                        </div>
                    </div>
                </div>
            </td>
            <td class="px-6 py-4">
                {{$user->identify_number}}
            </td>
            <td class="px-6 py-4">
                {{$user->rol_id}}
            </td>
            <td class="px-6 py-4">
                Telefono
            </td>
            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                <a href="{{route('users.edit',$user)}}">Editar</a>
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
@endsection