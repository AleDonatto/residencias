<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Datos Socioeconomicos') }}
    </h2>
  </x-slot>

  @if( !Auth::user()->perfil_completo  )
  <div class="container mx-auto px-4 py-10 max-w-6xl">
    <x-jet-validation-errors class="mb-4" />

    <div class="">
      <form action="{{ route('datos_alumno.store') }}" method="post" class="">
        @csrf
        <div class="flex flex-wrap -mx-3 mb-6">
          <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="Direccion">
              Direccion
            </label>
            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" 
              id="direccion" name="direccion" type="text" placeholder="Direccion">
          </div>

          <div class="w-full md:w-1/3 px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="colonia">
              Colonia
            </label>
            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-500 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" 
            id="colonia" name="colonia" type="text" placeholder="Colonia">
          </div>

          <div class="w-full md:w-1/3 px-3">
            <label for="ciudad" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Ciudad</label>
            <input type="text" name="ciudad" id="ciudad" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-500 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
            id="ciudad" placeholder="Ciudad">
          </div>
        </div>

        <div class="flex flex-wrap -mx-3 mb-6">
          <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="telefono">
              Telefono
            </label>
            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" 
            id="telefono" name="telefono" type="text" placeholder="Telefono">
          </div>

          <div class="w-full md:w-1/2 px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="cp">
              Codigo Postal
            </label>
            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-500 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" 
            id="codigo_postal" name="codigo_postal" type="text" placeholder="Codigo Postal">
          </div>
        </div>

        <hr class="divide-y divide-blue-300">
        <div class="divide-y divide-blue-300">
          <div class="text-center py-2">Nombre de los datos medicos</div>
        </div>

        <div class="flex flex-wrap -mx-3 mb-6">
          <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="curp">CURP</label>
            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" 
            id="curp" name="curp" type="text" placeholder="CURP">
          </div>

          <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
            <label for="ssn" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">SSN</label>
            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
            type="text" name="ssn" id="ssn" placeholder="SSN">
          </div>

          <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
            <label for="tipo_sangre" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Tipo Sangre</label>
            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
            type="text" name="tipo_sangre" id="tipo_sangre" placeholder="Tipo de sangre">    
          </div>
        </div>

        <div class="flex flex-wrap -mx-3 mb-6">
          <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="alergias">Alergias</label>
            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" 
            id="alergias" name="alergias" type="text" placeholder="Alergias">
          </div>

          <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
            <label for="alergias_medicamento" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Alergias a Medicamentos</label>
            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
            type="text" name="alergias_medicamento" id="alergias_medicamento" placeholder="Alergias a Medicamentos">
          </div>

          <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
            <label for="complicaciones_medicas" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Complicaciones Medicas</label>
            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
            type="text" name="complicaciones_medicas" id="complicaciones_medicas" placeholder="Complicaciones Medicas">    
          </div>
        </div>

        <hr class="divide-y divide-blue-300">
        <div class="divide-y divide-blue-300">
          <div class="text-center py-2">Contacto Externo</div>
        </div>

        <div class="flex flex-wrap -mx-3 mb-6">
          <div class="w-full md:w-1/4 px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="conEmergencia">
              Nombre del Contacto de Emergencia
            </label>
            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" 
            id="contacto_Emergencia" name="contacto_Emergencia" type="text" placeholder="Contacto de Emergencia">
          </div>
          <div class="w-full md:w-1/4 px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="telefono_contacto">
              Telefono 1 del Contacto
            </label>
            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" 
            id="telefono_contacto" name="telefono_contacto" type="text" placeholder="Telefono 1">
          </div>
          <div class="w-full md:w-1/4 px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="telefono_contacto2">
              Telefono 2 del Contacto
            </label>
            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" 
            id="telefono_contacto2" name="telefono_contacto2" type="text" placeholder="Telefono 2">
          </div>
          <div class="w-full md:w-1/4 px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="parentesco">
              Parentesco
            </label>
            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" 
            id="parentesco" name="parentesco" type="text" placeholder="Parentesco">
          </div>
        </div>

        <button type="submit" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
          Agregar Datos 
        </button>
      </form>
    </div>
  </div>
  @else
  <div class="flex justify-center mt-5">
    <div class="md:max-w-6xl sm:max-w-6xl lg:max-w-6xl bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md" role="alert">
      <div class="flex">
        <div class="py-1"><svg class="fill-current h-6 w-6 text-teal-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
        <div>
          <p class="font-bold">Importante</p>
          <p class="text-sm">Ya has completado tu perfil anteriormente</p>
        </div>
      </div>
    </div>
  </div>
  @endif

</x-app-layout>