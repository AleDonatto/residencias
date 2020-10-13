<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Datos Socioeconomicos') }}
        </h2>
    </x-slot>

    <div class="container mx-auto px-4 py-10 max-w-6xl">
      <x-jet-validation-errors class="mb-4" />
      <div class="">
            <form action="{{ route('datos_alumno.store') }}" method="post" class="">
                @csrf
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="Direccion">
                        Direccion
                      </label>
                      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" 
                      id="direccion" name="direccion" type="text" placeholder="Direccion">
                    </div>

                    <div class="w-full md:w-1/2 px-3">
                      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="colonia">
                        Colonia
                      </label>
                      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-500 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" 
                      id="colonia" name="colonia" type="text" placeholder="Colonia">
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

                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full px-3">
                      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="conEmergencia">
                        Contacto de Emergencia
                      </label>
                      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" 
                      id="contacto_Emergencia" name="contacto_Emergencia" type="text" placeholder="Contacto de Emergencia">
                    </div>
                </div>

                <button type="submit" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                    Agregar Datos 
                </button>

            </form>
        </div>
    </div>

    <div class="py-10 grid grid-flow-row auto-rows-max md:auto-rows-min ">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 bg-white overflow-hidden shadow-xl sm:rounded-lg">
        </div>
    </div>

</x-app-layout>