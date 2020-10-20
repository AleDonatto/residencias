<div>
    {{-- Be like water. --}}
    <div class="container mx-auto px-4 py-10 max-w-6xl">
        <x-jet-validation-errors class="mb-4" />
        <div class="">
              <form action="" method="" class="" wire:submit.prevent="store">
                  @csrf
                  <div class="flex flex-wrap -mx-3 mb-6">
                      <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="Direccion">
                          Direccion
                        </label>
                        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" 
                        wire:model="direccion" id="direccion" name="direccion" type="text" placeholder="Direccion">
                      </div>
  
                      <div class="w-full md:w-1/2 px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="colonia">
                          Colonia
                        </label>
                        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-500 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" 
                        wire:model="colonia" id="colonia" name="colonia" type="text" placeholder="Colonia">
                      </div>
  
                  </div>
  
                  <div class="flex flex-wrap -mx-3 mb-6">
                      <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="telefono">
                          Telefono
                        </label>
                        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" 
                        wire:model="telefono" id="telefono" name="telefono" type="text" placeholder="Telefono">
                      </div>
  
                      <div class="w-full md:w-1/2 px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="cp">
                          Codigo Postal
                        </label>
                        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-500 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" 
                        wire:model="cp" id="codigo_postal" name="codigo_postal" type="text" placeholder="Codigo Postal">
                      </div>
                  </div>
  
                  <div class="flex flex-wrap -mx-3 mb-6">
                      <div class="w-full px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="conEmergencia">
                          Contacto de Emergencia
                        </label>
                        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" 
                        wire:model="contacto" id="contacto_Emergencia" name="contacto_Emergencia" type="text" placeholder="Contacto de Emergencia">
                      </div>
                  </div>
  
                  <button type="submit" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                      Agregar Datos 
                  </button>
  
              </form>

              <p>{{ $direccion.', '.$colonia }}</p>
          </div>
      </div>  
</div>
