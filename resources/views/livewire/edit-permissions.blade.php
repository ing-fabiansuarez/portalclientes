<div>
    <a href="#" class="text-indigo-600 hover:text-indigo-900" wire:click="$set('open',true)">Edit</a>
    <x-jet-dialog-modal wire:model="open">
        <x-slot name="title" class="text-center">
            Permisos usuario: {{ $user->name }} {{ $user->surname }} CC: {{ $user->identify_number }}
        </x-slot>
        <x-slot name="content">
            <div>
                <x-jet-label value="Permisos" />
            </div>
            <div class="w-full">
                
                <table class="table-auto">
                    <thead>
                        <tr>
                            <th>Estado</th>
                            <th>Nombre</th>
                            <th>Descripcion</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        @foreach ($permissions as $permission)
                            <tr>
                                <td>
                                    
                                    <input type="checkbox" />
                                </td>
                                {{-- <td>{{$permission->user_id}}</td> --}}
                                {{-- <td>{{$permission->id}}</td> --}}
                                <td>{{$permission->name}}</td>
                                <td>{{$permission->description}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </x-slot>
        <x-slot name="footer">

        </x-slot>
    </x-jet-dialog-modal>
</div>
