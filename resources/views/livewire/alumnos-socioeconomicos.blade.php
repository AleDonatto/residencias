@if(Auth::user()->perfil_completo)
<x-jet-action-section>
    <x-slot name="title">
        {{ __('Datos Socio Economicos') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Update the socioeconomic data information for your account.') }}
    </x-slot>

    <x-slot name="content">
        <div class="">
            <form wire:submit.prevent="update">
                <div class="flex felx-wrap -mx-3 mb-1">
                    <div class="w-full md:w-1/4 px-3 mb-1 md:mb-0">
                        <x-jet-label for="lugar_nacimiento" value="{{ __('Lugar Nacimiento') }}" />
                        <x-jet-input id="lugar_nacimiento" class="mt-1 block w-full" type="text" wire:model.defer="lugNac" />
                        <x-jet-input-error for="lugar_nacimiento" class="mt-2" />
                    </div>
                    <div class="w-full md:w-1/4 px-3 mb-1 md:mb-0">
                        <x-jet-label for="fecha_nacimiento" value="{{ __('Fecha Nacimiento') }}" />
                        <x-jet-input id="fecha_nacimiento" class="mt-1 block w-full" type="date" wire:model.defer="fechaNac" />
                        <x-jet-input-error for="fecha_nacimiento" class="mt-2" />
                    </div>
                    <div class="w-full md:w-1/4 px-3 mb-6 md:mb-0">
                        <x-jet-label for="genero" value="{{ __('Genero') }}" />
                        <div class="inline-block relative w-full">
                            <select name="genero" wire:model.defer="genero" class="mt-1 bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                                <option value="femenino">Femenino</option>
                                <option value="masculino">Masculino</option>
                            </select>
                        </div>
                        <x-jet-input-error for="genero" class="mt-2" />
                    </div>
                    <div class="w-full md:w-1/4 px-3 mb-6 md:mb-0">
                        <x-jet-label for="estado_civil" value="{{ __('Estado Civil') }}" />
                        <div class="inline-block relative w-full">
                            <select name="estado_civil" wire:model.defer="estado_civil" class="mt-1 bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                                <option value="divorciado">Divorciado</option>
                                <option value="soltero">Soltero</option>
                                <option value="casado">Casado</option>
                            </select>
                        </div>
                        <x-jet-input-error for="estado_civil" class="mt-2" />
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3 mb-1">
                    <div class="w-full md:w-1/5 px-3 mb-6 md:mb-0">
                        <x-jet-label for="_direccion" value="{{ __('Direccion') }}" />
                        <x-jet-input id="_direccion"  type="text" class="mt-1 block w-full" wire:model.defer="direccion" />
                        <!--<input type="hidden" name="idDatos" wire:model="idDatos">-->
                        <x-jet-input-error for="_direccion" class="mt-2" />
                    </div>
        
                    <div class="w-full md:w-1/5 px-3">
                        <x-jet-label for="_colonia" value="{{ __('Colonia') }}" />
                        <x-jet-input id="_colonia" type="text" class="mt-1 my-1 block w-full" wire:model.defer="colonia" />
                        <x-jet-input-error for="_colonia" class="mt-2" />
                    </div>
        
                    <div class="w-full md:w-1/5 px-3">
                        <x-jet-label for="ciudad" value="{{ __('Ciudad') }}" />
                        <x-jet-input id="ciudad" name="ciudad" type="text" class="mt-1 block w-full" wire:model.defer="ciudad" />
                        <x-jet-input-error for="ciudad" class="mt-2" />
                    </div>

                    <div class="w-full md:w-1/5 px-3 mb-6 md:mb-0">
                        <x-jet-label for="telefono" value="{{ __('Telefono') }}" />
                        <x-jet-input id="telefono" name="telefono" type="text" class="mt-1 my-1 block w-full" wire:model.defer="telefono" />
                        <x-jet-input-error for="telefono" class="mt-2" />
                    </div>

                    <div class="w-full md:w-1/5 px-3">
                        <x-jet-label for="cp" value="{{ __('Codigo Postal') }}" />
                        <x-jet-input id="cp" name="cp" type="text" class="mt-1 block w-full" wire:model.defer="cp" />
                        <x-jet-input-error for="cp" class="mt-2" />
                    </div>
                </div>

                <hr class="divide-y divide-blue-300 my-2">

                <div class="flex flex-wrap -mx-3 mb-1">
                    <div class="w-full md:w-1/4 px-3 mb-6 md:mb-0">
                        <x-jet-label for="curp" value="{{ __('CURP') }}" />
                        <x-jet-input id="curp" name="curp" type="text" class="mt-1 block w-full" wire:model.defer="curp" />
                        <x-jet-input-error for="curp" class="mt-2" />
                    </div>

                    <div class="w-full md:w-1/4 px-3">
                        <x-jet-label for="numSeguro" value="{{ __('SSN') }}" />
                        <x-jet-input id="numSeguro" name="numSeguro" type="text" class="mt-1 my-1 block w-full" wire:model.defer="num_seguro" />
                        <x-jet-input-error for="numSeguro" class="mt-2" />
                    </div>

                    <div class="w-full md:w-1/4 px-3">
                        <x-jet-label for="tipo_sangre" value="{{ __('Tipo Sangre') }}" />
                        <x-jet-input id="tipo_sangre" name="tipo_sangre" type="text" class="mt-1 block w-full" wire:model.defer="tipo_sangre" />
                        <x-jet-input-error for="tipo_sangre" class="mt-2" />
                    </div>

                    <div class="w-full md:w-1/4 px-3">
                        <x-jet-label for="alergias" value="{{ __('Alergias') }}" />
                        <x-jet-input id="alergias" name="alergias" type="text" class="mt-1 my-1 block w-full" wire:model.defer="alergias" />
                        <x-jet-input-error for="alergias" class="mt-2" />
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3 mb-1">
                    <div class="w-full md:w-1/2 px-3">
                        <x-jet-label for="alergia_medicamentos" value="{{ __('Alergia a Medicamentos') }}" />
                        <x-jet-input id="alergia_medicamentos" name="alergia_medicamentos" type="text" class="mt-1 block w-full" wire:model.defer="medicamentos_alergicos" />
                        <x-jet-input-error for="alergia_medicamentos" class="mt-2" />
                    </div>

                    <div class="w-full md:w-1/2 px-3">
                        <x-jet-label for="complicaciones_medicas" value="{{ __('Complicaciones Medicas') }}" />
                        <x-jet-input id="complicaciones_medicas" name="complicaciones_medicas" type="text" class="mt-1 my-1 block w-full" wire:model.defer="complicaciones_medicas" />
                        <x-jet-input-error for="complicaciones_medicas" class="mt-2" />
                    </div>
                </div>

                <hr class="divide-y divide-blue-300 my-2">

                <div class="flex flex-wrap -mx-3 mb-1">
                    <div class="w-full md:w-1/4 px-3">
                        <x-jet-label for="nombre_madre" value="{{ __('Nombre Madre') }}" />
                        <x-jet-input id="nombre_madre" type="text" class="mt-1 block w-full" wire:model.defer="nom_madre" />
                        <x-jet-input-error for="nombre_madre" class="mt-2" />
                    </div>

                    <div class="w-full md:w-1/4 px-3">
                        <x-jet-label for="direccion_madre" value="{{ __('Direccion') }}" />
                        <x-jet-input id="durireccion_madre" class="mt-1 block w-full" type="text" wire:model.defer="direccion_madre" />
                        <x-jet-input-error for="direccion_madre" class="mt-2" />
                    </div>

                    <div class="w-full md:w-1/4 px-3">
                        <x-jet-label for="colonia_madre" value="{{ __('Colonia ') }}" />
                        <x-jet-input id="colonia_madre" name="colonia_madre" type="text" class="mt-1 block w-full" wire:model.defer="colonia_madre" />
                        <x-jet-input-error for="colonia_madre" class="mt-2" />
                    </div>

                    <div class="w-full md:w-1/4 px-3">
                        <x-jet-label for="telefono_madre" value="{{ __('Telefono ') }}" />
                        <x-jet-input id="telefono_madre" name="telefono_madre" type="text" class="mt-1 my-1 block w-full" wire:model.defer="tel_madre" />
                        <x-jet-input-error for="telefono_madre" class="mt-2" />
                    </div>
                </div>

                <div class="flex flex-wrap -mx-3 mb-1">
                    <div class="w-full md:w-1/4 px-3">
                        <x-jet-label for="nombre_padre" value="{{ __('Nombre Padre') }}" />
                        <x-jet-input id="nombre_padre" type="text" class="mt-1 block w-full" wire:model.defer="nom_padre" />
                        <x-jet-input-error for="nombre_apdre" class="mt-2" />
                    </div>

                    <div class="w-full md:w-1/4 px-3">
                        <x-jet-label for="direccion_padre" value="{{ __('Direccion') }}" />
                        <x-jet-input id="durireccion_padre" class="mt-1 block w-full" type="text" wire:model.defer="direccion_padre" />
                        <x-jet-input-error for="direccion_padre" class="mt-2" />
                    </div>

                    <div class="w-full md:w-1/4 px-3">
                        <x-jet-label for="colonia_padre" value="{{ __('Colonia ') }}" />
                        <x-jet-input id="colonia_padre" name="colonia_padre" type="text" class="mt-1 block w-full" wire:model.defer="colonia_padre" />
                        <x-jet-input-error for="colonia_padre" class="mt-2" />
                    </div>

                    <div class="w-full md:w-1/4 px-3">
                        <x-jet-label for="telefono_padre" value="{{ __('Telefono ') }}" />
                        <x-jet-input id="telefono_padre" name="telefono_padre" type="text" class="mt-1 my-1 block w-full" wire:model.defer="tel_padre" />
                        <x-jet-input-error for="telefono_padre" class="mt-2" />
                    </div>
                </div>

                <hr class="divide-y divide-blue-300 my-2">

                <div class="flex flex-wrap -mx-3 mb-1">
                    <div class="w-full md:w-1/3 px-3">
                        <x-jet-label for="contacto" value="{{ __('Contacto de Emergencia') }}" />
                        <x-jet-input id="contacto" type="text" class="mt-1 block w-full" wire:model.defer="contacto" />
                        <x-jet-input-error for="contacto" class="mt-2" />
                    </div>

                    <div class="w-full md:w-1/3 px-3">
                        <x-jet-label for="telefono_contacto" value="{{ __('Telefono') }}" />
                        <x-jet-input id="telefono_contacto" class="mt-1 block w-full" type="text" wire:model.defer="telefono_contacto" />
                        <x-jet-input-error for="telefono_contacto" class="mt-2" />
                    </div>

                    <div class="w-full md:w-1/3 px-3">
                        <x-jet-label for="parentesco_contacto" value="{{ __('Parentesco') }}" />
                        <x-jet-input id="parentesco_contacto" name="parentesco_contacto" type="text" class="mt-1 block w-full" wire:model.defer="parentesco_contacto" />
                        <x-jet-input-error for="parentesco_contacto" class="mt-2" />
                    </div>

                    <div class="w-full md:w-1/3 px-3">
                        <x-jet-label for="contacto" value="{{ __('Contacto de Emergencia') }}" />
                        <x-jet-input id="contacto" type="text" class="mt-1 block w-full" wire:model.defer="contacto2" />
                        <x-jet-input-error for="contacto" class="mt-2" />
                    </div>

                    <div class="w-full md:w-1/3 px-3">
                        <x-jet-label for="telefono_contacto" value="{{ __('Telefono') }}" />
                        <x-jet-input id="telefono_contacto" class="mt-1 block w-full" type="text" wire:model.defer="telefono_contacto2" />
                        <x-jet-input-error for="telefono_contacto" class="mt-2" />
                    </div>

                    <div class="w-full md:w-1/3 px-3">
                        <x-jet-label for="parentesco_contacto" value="{{ __('Parentesco') }}" />
                        <x-jet-input id="parentesco_contacto" name="parentesco_contacto" type="text" class="mt-1 block w-full" wire:model.defer="parentesco_contacto2" />
                        <x-jet-input-error for="parentesco_contacto" class="mt-2" />
                    </div>
                </div>

                <hr class="divide-y divide-blue-300 my-2">

                <div class="flex flex-wrap -mx-3 mb-1">
                    <div class="w-full md:w-1/4 px-3">
                        <x-jet-label for="empresa" value="{{ __('Empresa') }}" />
                        <x-jet-input id="empresa" type="text" class="mt-1 block w-full" wire:model.defer="empresa" />
                        <x-jet-input-error for="empresa" class="mt-2" />
                    </div>

                    <div class="w-full md:w-1/4 px-3">
                        <x-jet-label for="direccion_empresa" value="{{ __('Direccion Empresa') }}" />
                        <x-jet-input id="durireccion_empresa" class="mt-1 block w-full" type="text" wire:model.defer="domicilio_empresa" />
                        <x-jet-input-error for="direccion_empresa" class="mt-2" />
                    </div>

                    <div class="w-full md:w-1/4 px-3">
                        <x-jet-label for="colonia_empresa" value="{{ __('Colonia Empresa') }}" />
                        <x-jet-input id="colonia_ampresa" name="colonia_empresa" type="text" class="mt-1 block w-full" wire:model.defer="colonia_empresa" />
                        <x-jet-input-error for="colonia_empresa" class="mt-2" />
                    </div>

                    <div class="w-full md:w-1/4 px-3">
                        <x-jet-label for="puesto" value="{{ __('Puesto') }}" />
                        <x-jet-input id="puestp" name="puesto" type="text" class="mt-1 my-1 block w-full" wire:model.defer="puesto" />
                        <x-jet-input-error for="puesto" class="mt-2" />
                    </div>
                </div>

                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full md:w-1/4 px-3">
                        <x-jet-label for="antiguedad" value="{{ __('Antiguedad') }}" />
                        <x-jet-input id="antiguedad" type="text" class="mt-1 block w-full" wire:model.defer="antiguedad" />
                        <x-jet-input-error for="antiguedad" class="mt-2" />
                    </div>

                    <div class="w-full md:w-1/4 px-3">
                        <x-jet-label for="jefe" value="{{ __('Nombre Jefe Inmediato') }}" />
                        <x-jet-input id="jefe" class="mt-1 block w-full" type="text" wire:model.defer="nombre_jefe" />
                        <x-jet-input-error for="jefe" class="mt-2" />
                    </div>

                    <div class="w-full md:w-1/4 px-3">
                        <x-jet-label for="turno" value="{{ __('Turno') }}" />
                        <x-jet-input id="turno" name="turno" type="text" class="mt-1 block w-full" wire:model.defer="turno" />
                        <x-jet-input-error for="turno" class="mt-2" />
                    </div>

                    <div class="w-full md:w-1/4 px-3">
                        <x-jet-label for="ciudad_empresa" value="{{ __('Ciudad Empresa') }}" />
                        <x-jet-input id="ciudad_empresa" name="ciudad_empresa" type="text" class="mt-1 block w-full" wire:model.defer="ciudad_empresa" />
                        <x-jet-input-error for="ciudad_empresa" class="mt-2" />
                    </div>
                </div>


                <div class="flex justify-end">
                    <p class="animate-pulse text-gray-400 mx-8" id="mensajeSave">
                        {{ $message }}
                    </p>
                    <x-jet-button id="save">
                        {{ __('Save') }}
                    </x-jet-button>  
                </div>
            </form>
        </div>
    </x-slot>
</x-jet-action-section>
@else
<x-jet-action-section>
    <x-slot name="title">
        {{ __('Datos Socio Economicos') }}
    </x-slot>
  
    <x-slot name="description">
        {{ __('Update the socioeconomic data information for your account.') }}
    </x-slot>
  
    <x-slot name="content">
      <div class="">
          <p class="text">Completa tu perfil primero</p>
        </div>
    </x-slot>
  </x-jet-action-section>  
@endif

