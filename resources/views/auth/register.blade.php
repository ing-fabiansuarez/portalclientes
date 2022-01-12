<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div>
                <x-jet-label for="name" value="Nombre" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                    autofocus autocomplete="name" />
            </div>
            <div>
                <x-jet-label for="sur_name" value="Apellido" />
                <x-jet-input id="sur_name" class="block mt-1 w-full" type="text" name="sur_name" :value="old('sur_name')"
                    required autofocus autocomplete="surname" />
            </div>
            <div>
                <x-jet-label for="type_identify_id" value="Tipo de identificacion" />
                <x-jet-input id="type_identify_id" class="block mt-1 w-full" type="text" name="type_identify_id"
                    :value="old('type_identify_id')" {{-- required autofocus autocomplete="type_identify_id"  --}}/>
            </div>
            <div>
                <x-jet-label for="identify_number" value="Numero de identificacion" />
                <x-jet-input id="identify_number" class="block mt-1 w-full" type="number"
                    name="identify_number" :value="old('identify_number')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="Email" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                    required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="Contraseña" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="Confirmar contraseña" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password"
                    name="password_confirmation" required autocomplete="new-password" />
            </div>
            {{-- Hablar con Fabian --}}
            <div>
                <x-jet-label for="rol_id" value="Rol" />
                <x-jet-input id="rol_id" class="block mt-1 w-full" type="number"
                    name="rol_id" :value="old('rol_id')" {{-- required  --}}/>
            </div>

            {{-- @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif --}}

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    Registrar
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
