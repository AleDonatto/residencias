<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form class="w-full max-w-lg" method="post" action="{{ route('app_register') }}">
            @csrf
            <div class="flex flex-wrap -mx-3 mb-6">
              <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <x-jet-label value="{{ __('Nombre') }}" />
                <x-jet-input class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
              </div>
              <div class="w-full md:w-1/2 px-3">
                <x-jet-label value="{{ __('Apellidos') }}"></x-jet-label>
                <x-jet-input class="block mt-1 w-full" type="text" name="lastname" :value="old('lastname')" required autocomplete="lastname"></x-jet-input>
              </div>
            </div>
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <x-jet-label value="{{ __('Password') }}" />
                    <x-jet-input class="block mt-1" type="password" name="password" required autocomplete="new-password" />
                </div>
                <div class="w-full md:w-1/2 px-3">
                    <x-jet-label value="{{ __('Confirm Password') }}" />
                    <x-jet-input class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                </div>
            </div>
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <x-jet-label value="{{ __('Numero de Control') }}"></x-jet-label>
                    <x-jet-input class="block mt-1 w-full" type="text" name="matricula" :value="old('matricula')" required autocomplete="matricula"></x-jet-input>
                </div>
                <div class="w-full md:w-1/2 px-3">
                    <x-jet-label value="{{ __('Email') }}" />
                    <x-jet-input class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                </div>
            </div>
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <x-jet-label value="{{ __('Carrera') }}" />
                    <select name="carrera" class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                        <option value="" selected>Seleccione Opcion</option>
                        <option value="ISC">ISC</option>
                        <option value="IBQ">IBQ</option>
                        <option value="IGE">IGE</option>
                        <option value="CP">CP</option>
                        <option value="LA">LA</option>
                    </select>
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                    </div>
                </div>
                <div class="w-full md:w-1/2 px-3 w-64">
                    <x-jet-label value="{{ __('Semestre') }}" />
                    <select name="semestre" class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                        <option value="" selected>Seleccione Opcion</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                    </select>
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                    </div>
                </div>
            </div>
            
            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Ya estoy registrado?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Registrarme') }}
                </x-jet-button>
            </div>
        </form>

        <!--<form method="POST" action="{{ route('app_register') }}">
            @csrf

            <div>
                <x-jet-label value="{{ __('Nombre') }}" />
                <x-jet-input class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div>
                <x-jet-label value="{{ __('Apellidos') }}"></x-jet-label>
                <x-jet-input class="block mt-1 w-full" type="text" name="lastname" :value="old('lastname')" required autocomplete="lastname"></x-jet-input>
            </div>

            <div>
                <x-jet-label value="{{ __('Numero de Control') }}"></x-jet-label>
                <x-jet-input class="block mt-1 w-full" type="text" name="matricula" :value="old('matricula')" required autocomplete="matricula"></x-jet-input>
            </div>

            <div class="mt-4">
                <x-jet-label value="{{ __('Email') }}" />
                <x-jet-input class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label value="{{ __('Password') }}" />
                <x-jet-input class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label value="{{ __('Confirm Password') }}" />
                <x-jet-input class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Ya estoy registrado?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Registrarme') }}
                </x-jet-button>
            </div>
        </form>-->
    </x-jet-authentication-card>
</x-guest-layout>
