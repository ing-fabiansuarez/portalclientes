<div>
    <a wire:click="$set('open',true)" style="cursor: pointer;" class="ml-2">
        <i class="fas fa-edit">Permisos</i>
    </a>
    <x-jet-dialog-modal wire:model="open">
        <x-slot name="title" class="text-center">
            Editar permisos usuario
        </x-slot>
        <x-slot name="content">
            <div class="mx-auto mt-10 rounded bg-gray-100 dark:bg-gray-700 w-11/12 xl:w-full" style="max-width: 550px">
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
                                            $searchPermission = App\Models\UserPermissions::where('user_id', '=', $user)
                                                ->where('permission_id', '=', $permission->id)
                                                ->get();
                                            if($searchPermission->count()){
                                        ?>
                                    <label class="switch">
                                        <input id="permission" data-permission="{{ $permission->id }}"
                                            class="mi_checkbox" type="checkbox" data-onstyle="success"
                                            data-offstyle="danger" data-toggle="toggle" data-on="Active"
                                            data-off="InActive" data-user="{{ $user }}"
                                            {{ $searchPermission[0]->state ? 'checked' : '' }}>
                                        <span class="slider round"></span>
                                    </label>
                                    <?php }else{
                                            ?>
                                    <label class="switch">
                                        <input id="permission" data-permission="{{ $permission->id }}"
                                            class="mi_checkbox" type="checkbox" data-onstyle="success"
                                            data-offstyle="danger" data-toggle="toggle" data-on="Active"
                                            data-off="InActive" data-user="{{ $user }}">
                                        <span class="slider round"></span>
                                    </label>
                                    <?php } ?>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </x-slot>
        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$set('open',false)">
                Salir
            </x-jet-secondary-button>
        </x-slot>
    </x-jet-dialog-modal>
</div>
