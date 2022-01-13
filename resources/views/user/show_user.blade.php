<x-app-layout>
    <h1>Editar usuario {{$user->name}}</h1>
    <h2>Doc: {{$user->identify_number}}</h2>
    <a href="{{route('users.edit',[$user,$permissionsU])}}">Editar usuario</a>
    <br>
    <a href="{{route('users.index')}}">Volver a listado de usuarios</a>
</x-app-layout>