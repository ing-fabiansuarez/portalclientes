<div>
    @if ($users->count())
        <x-table>
            <table class="min-w-full divide-y divide-gray-200" id="Usuarios">
                <thead>
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">
                            Nombre
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">
                            N° Documento
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">
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
                                @livewire('users.edit-user',['user_id'=>$user->id],key($user->id))
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
</div>
