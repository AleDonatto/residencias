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
          <div class="text-center py-2">Informacion de Familiares</div>
        </div>

        <div class="flex flex-wrap -mx-3 mb-6">
          <div class="w-full md:w-1/4 px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="nombre_madre">
              Nombre Completo Madre
            </label>
            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" 
            id="nombre_madre" name="nombre_madre" type="text" placeholder="Nombre Madre">
          </div>
          <div class="w-full md:w-1/4 px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="domicilio_madre">
              Domicilio
            </label>
            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" 
            id="domicilio_madre" name="domicilio_madre" type="text" placeholder="Domicilio">
          </div>
          <div class="w-full md:w-1/4 px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="colonia_madre">
              Colonia
            </label>
            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" 
            id="colonia_madre" name="colonia_madre" type="text" placeholder="Colonia">
          </div>
          <div class="w-full md:w-1/4 px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="telefono_madre">
              Telefono
            </label>
            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" 
            id="telefono_madre" name="telefono_madre" type="text" placeholder="Telefono">
          </div>
        </div>

        <div class="flex flex-wrap -mx-3 mb-6">
          <div class="w-full md:w-1/4 px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="nombre_padre">
              Nombre Completo Padre
            </label>
            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" 
            id="nombre_padre" name="nombre_padre" type="text" placeholder="Nombre Padre">
          </div>
          <div class="w-full md:w-1/4 px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="domicilio_padre">
              Domicilio
            </label>
            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" 
            id="domicilio_padre" name="domicilio_padre" type="text" placeholder="Domicilio">
          </div>
          <div class="w-full md:w-1/4 px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="colonia_padre">
              Colonia
            </label>
            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" 
            id="colonia_padre" name="colonia_padre" type="text" placeholder="Colonia">
          </div>
          <div class="w-full md:w-1/4 px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="telefono_padre">
              Telefono
            </label>
            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" 
            id="telefono_padre" name="telefono_padre" type="text" placeholder="Telefono">
          </div>
        </div>

        <hr class="divide-y divide-blue-300">
        <div class="divide-y divide-blue-300">
          <div class="text-center py-2">Informacion del Trabajo</div>
        </div>

        <div class="flex flex-wrap -mx-3 mb-6">
          <div class="w-full md:w-1/4 px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="empresa">
              Empresa
            </label>
            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" 
            id="empresa" name="empresa" type="text" placeholder="Empresa">
          </div>
          <div class="w-full md:w-1/4 px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="domicilio_empresa">
              Domicilio Empresa
            </label>
            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" 
            id="domicilio_empresa" name="domicilio_empresa" type="text" placeholder="Domicilio Empresa">
          </div>
          <div class="w-full md:w-1/4 px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="colonia_empresa">
              Colonia Empresa
            </label>
            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" 
            id="colonia_empresa" name="colonia_empresa" type="text" placeholder="Colonia Empresa">
          </div>
          <div class="w-full md:w-1/4 px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="ciudad_empresa">
              Ciudad Empresa
            </label>
            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" 
            id="ciudad_empresa" name="ciudad_empresa" type="text" placeholder="Ciudad Empresa">
          </div>
          <div class="w-full md:w-1/4 px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="puesto_empresa">
              Puesto
            </label>
            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" 
            id="puesto_empresa" name="puesto_empresa" type="text" placeholder="Puesto Empresa">
          </div>
          <div class="w-full md:w-1/4 px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="antiguedad">
              Antiguedad
            </label>
            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" 
            id="antiguedad" name="antiguedad" type="text" placeholder="Antiguedad">
          </div>
          <div class="w-full md:w-1/4 px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="jefe_inmediato">
              Jefe Inmediato
            </label>
            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" 
            id="jefe_inmediato" name="jefe_inmediato" type="text" placeholder="Jefe Inmediato">
          </div>
          <div class="w-full md:w-1/4 px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="antiguedad">
              Turno
            </label>
            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" 
            id="turno" name="turno" type="text" placeholder="Turno">
          </div>
          <div class="w-full md:w-1/4 px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="telefono_padre">
              Telefono
            </label>
            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" 
            id="telefono_padre" name="telefono_padre" type="text" placeholder="Telefono">
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