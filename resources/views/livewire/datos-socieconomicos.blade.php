<x-jet-form-section submit="update">
    <x-slot name="title">
        {{ __('Datos Socio Economicos') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Update the socioeconomic data information for your account.') }}
    </x-slot>

    <x-slot name="form">
        <div class="col-span-6 sm:col-span-4">
            <div class="w-full max-w-lg">
                <div class="flex flex-wrap">
                    <div class="w-full md:w-1/2 ">
                        <x-jet-label for="_direccion" value="{{ __('Direccion') }}" />
                        <x-jet-input id="_direccion"  type="text" class="mt-1 block w-full" wire:model.defer="direccion" />
                        <!--<input type="hidden" name="idDatos" wire:model="idDatos">-->
                        <x-jet-input-error for="_direccion" class="mt-2" />
                    </div>
    
                    <div class="w-full md:w-1/2">
                        <x-jet-label for="_colonia" value="{{ __('Colonia') }}" />
                        <x-jet-input id="_colonia" type="text" class="mt-1 my-1 block w-full" wire:model.defer="colonia" />
                        <x-jet-input-error for="_colonia" class="mt-2" />
                    </div>
                </div>
            </div>
        </div>

        <div class="col-span-6 sm:col-span-4">
            <div class="w-full max-w-lg">
                <div class="flex flex-wrap">
                    <div class="w-full md:w-1/2 ">
                        <x-jet-label for="ciudad" value="{{ __('Ciudad') }}" />
                        <x-jet-input id="ciudad" name="ciudad" type="text" class="mt-1 block w-full" wire:model.defer="ciudad" />
                        <x-jet-input-error for="ciudad" class="mt-2" />
                    </div>
    
                    <div class="w-full md:w-1/2">
                        <x-jet-label for="telefono" value="{{ __('Telefono') }}" />
                        <x-jet-input id="telefono" name="telefono" type="text" class="mt-1 my-1 block w-full" wire:model.defer="telefono" />
                        <x-jet-input-error for="telefono" class="mt-2" />
                    </div>
                </div>
            </div>
        </div>

        <div class="col-span-6 sm:col-span-4">
            <div class="w-full max-w-lg">
                <div class="flex flex-wrap">
                    <div class="w-full md:w-1/2 ">
                        <x-jet-label for="cp" value="{{ __('Codigo Postal') }}" />
                        <x-jet-input id="cp" name="cp" type="text" class="mt-1 block w-full" wire:model.defer="cp" />
                        <x-jet-input-error for="cp" class="mt-2" />
                    </div>
                </div>
            </div>
        </div>

        <div class="col-span-6 sm:col-span-4">
            <div class="w-full max-w-lg">
                <div class="flex flex-wrap">
                    <div class="w-full md:w-1/2 ">
                        <x-jet-label for="curp" value="{{ __('CURP') }}" />
                        <x-jet-input id="curp" name="curp" type="text" class="mt-1 block w-full" wire:model.defer="curp" />
                        <x-jet-input-error for="curp" class="mt-2" />
                    </div>
    
                    <div class="w-full md:w-1/2">
                        <x-jet-label for="numSeguro" value="{{ __('SSN') }}" />
                        <x-jet-input id="numSeguro" name="numSeguro" type="text" class="mt-1 my-1 block w-full" wire:model.defer="numSeguro" />
                        <x-jet-input-error for="numSeguro" class="mt-2" />
                    </div>
                </div>
            </div>
        </div>

        <div class="col-span-6 sm:col-span-4">
            <div class="w-full max-w-lg">
                <div class="flex flex-wrap">
                    <div class="w-full md:w-1/2 ">
                        <x-jet-label for="tipo_sangre" value="{{ __('Tipo Sangre') }}" />
                        <x-jet-input id="tipo_sangre" name="tipo_sangre" type="text" class="mt-1 block w-full" wire:model.defer="tipo_sangre" />
                        <x-jet-input-error for="tipo_sangre" class="mt-2" />
                    </div>
    
                    <div class="w-full md:w-1/2">
                        <x-jet-label for="alergias" value="{{ __('Alergias') }}" />
                        <x-jet-input id="alergias" name="alergias" type="text" class="mt-1 my-1 block w-full" wire:model.defer="alergias" />
                        <x-jet-input-error for="alergias" class="mt-2" />
                    </div>
                </div>
            </div>
        </div>

        <div class="col-span-6 sm:col-span-4">
            <div class="w-full max-w-lg">
                <div class="flex flex-wrap">
                    <div class="w-full md:w-1/2 ">
                        <x-jet-label for="alergia_medicamentos" value="{{ __('Alergia a Medicamentos') }}" />
                        <x-jet-input id="alergia_medicamentos" name="alergia_medicamentos" type="text" class="mt-1 block w-full" wire:model.defer="medAlergias" />
                        <x-jet-input-error for="alergia_medicamentos" class="mt-2" />
                    </div>
    
                    <div class="w-full md:w-1/2">
                        <x-jet-label for="complicaciones_medicas" value="{{ __('Complicaciones Medicas') }}" />
                        <x-jet-input id="complicaciones_medicas" name="complicaciones_medicas" type="text" class="mt-1 my-1 block w-full" wire:model.defer="compliMedicas" />
                        <x-jet-input-error for="complicaciones_medicas" class="mt-2" />
                    </div>
                </div>
            </div>
        </div>

        <div class="col-span-6 sm:col-span-4">
            <div class="w-full max-w-lg">
                <div class="flex flex-wrap">
                    <div class="w-full md:w-1/2 ">
                        <x-jet-label for="contacto_emergencia" value="{{ __('Contacto Emergencia') }}" />
                        <x-jet-input id="contacto_emergencia" name="contacto_emergencia" type="text" class="mt-1 block w-full" wire:model.defer="contacto" />
                        <x-jet-input-error for="contacto_emergencia" class="mt-2" />
                    </div>
    
                    <div class="w-full md:w-1/2">
                        <x-jet-label for="parentesco" value="{{ __('Parentesco') }}" />
                        <x-jet-input id="parentesco" class="parentesco" type="text" class="mt-1 my-1 block w-full" wire:model.defer="parentesco" />
                        <x-jet-input-error for="parentesco" class="mt-2" />
                    </div>
                </div>
            </div>
        </div>

        <div class="col-span-6 sm:col-span-4">
            <div class="w-full max-w-lg">
                <div class="flex flex-wrap">
                    <div class="w-full md:w-1/2 ">
                        <x-jet-label for="telefono_1" value="{{ __('Telefono 1') }}" />
                        <x-jet-input id="telefono_1" name="telefono_1" type="text" class="mt-1 block w-full" wire:model.defer="tel1" />
                        <x-jet-input-error for="telefono_1" class="mt-2" />
                    </div>
    
                    <div class="w-full md:w-1/2">
                        <x-jet-label for="telefono_2" value="{{ __('Telefono 2') }}" />
                        <x-jet-input id="telefono_2" name="telefono_2" type="text" class="mt-1 my-1 block w-full" wire:model.defer="tel2" />
                        <x-jet-input-error for="telefono_2" class="mt-2" />
                    </div>
                </div>
            </div>
        </div>
    </x-slot>

    <x-slot name="actions">
        <!--<x-jet-action-message class="mr-3" on="saved">
            
        </x-jet-action-message>-->
        <p class="text-gray-600 m-4">
            <svg class="animate-spin h-5 w-5 mr-3 ..." viewBox="0 0 24 24">
            </svg>
            {{ $message }}
        </p>

        <x-jet-button>
            {{ __('Save') }}
        </x-jet-button>         
    </x-slot>
</x-jet-form-section> 
