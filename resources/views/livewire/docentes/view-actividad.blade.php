<div>
    {{-- The Master doesn't talk, he acts. --}}

    @if (session()->has('message'))
    <div class="w-full mt-5 h-12 flex justify-center bg-green-300 text-base rounded-lg border-green-200 shadow-2xl">
        <div class="space-y-1 text-center">
            <p></p>
            <p></p>
            <p class="align-middle">{{ session('message') }}</p>
        </div>
      </div>
    @endif

    <div class="shadow bg-white p-4 my-5 rounded-lg">
        @foreach($actividad as $item)
            <h4 class="font-sans text-2xl text-gray-600">{{ $item->nombreActividad }}</h4>
            <p class="font-sans text-sm text-gray-400">Fecha de inicio: {{ $item->fechainicio}} Fecha Limite: {{ $item->fechalimite }}</p>


            <div class="mt-11">
                <h4 class="font-sans text-xl text-gray-600">Descripcion Actividad:</h4>
                <p class="font-sans text-base text-gray-500">
                    {{ $item->descripcionActividad }}
                </p>
            </div>

            @if($item->recursos == '' )
            <div class="">
                No se agrego ningun recurso a esta activdad
            </div>
            @else
            <div class="mt-11">
                <h4 class="font-sans text-xl text-gray-600">Material de Apoyo</h4> 
                <div class="border-2 border-blue-300 rounded-md bg-blue-600 py-2 px-2 w-60">
                    <a href="" class=""></a>
                    <button type="button" wire:click="getURLRecurso( '{{ $item->recursos  }}' )" class="flex items-start text-lg text-white hover:text-gray-300">
                        <p>Ver Materia de Apoyo</p>
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                        </svg>
                    </button>
                </div>
            </div>
            @endif
        @endforeach

        <div class="mt-11">
            <div x-data="{ open: false }">
                <button @click="open = true" class="flex items-start text-blue-700 hover:text-blue-900">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                    </svg> 
                    <p>Editar Actividad</p>
                </button>

                <div class="mt-5" x-show="open" @click.away="open = false">
                    <form action="" method="post" wire:submit.prevent="updatedActividad" enctype="multipart/form-data">
                        <div class="shadow sm:rounded-md sm:overflow-hidden">
                            <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                                <div>
                                    <label for="semana" class="block font-medium text-gray-700">Semana de la Actividad</label>
                                    <div class="inline-block relative w-full">
                                        <select name="genero" class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline"
                                        wire:model="semanaEdt">
                                          <option value="" selected>Seleccione</option>
                                          @foreach($listSemanas as $item)
                                          <option value="{{ $item->idSemanas }}">{{ 'Del '.$item->fechainicio.' - '.$item->fechafinal  }}</option>
                                          @endforeach
                                        </select>
                                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                          <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <label for="name" class="block font-medium text-gray-700">Nombre/Titulo Actividad</label>
                                    <input type="text" name="name" id="name" class="shadow focus:outline-none focus:shadow-outline appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight @error('nombreActividad') border-red-600 @enderror"
                                    wire:model.defer="nombreActividad" maxlength="50">
                                    @error('nombreActividad')
                                        <span class="text-red-500 font-sans text-sm">{{ $message }}</span>
                                    @enderror
                                </div>
            
                                <div class="flex ">
                                    <div class="flex-auto">
                                        <label for="fechainicio" class="block font-medium text-gray-700">Fecha Inicio</label>
                                        <input type="date" name="fechainicio" id="fechainicio" class="shadow focus:outline-none focus:shadow-outline appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight @error('fechaInicio') border-red-600 @enderror"
                                        wire:model.defer="fechainicio">
                                        @error('fechainicio')
                                            <span class="text-red-500 font-sans text-sm">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="flex-auto">
                                        <label for="fechalimite" class="block font-medium text-gray-700">Fecha Limite</label>
                                        <input type="date" name="fechalimite" id="fechalimite" class="shadow focus:outline-none focus:shadow-outline appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight @error('fechaLimite') border-red-600 @enderror"
                                        wire:model.defer="fechafin">
                                        @error('fechafin')
                                            <span class="text-red-500 font-sans text-sm">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
            
                                <div>
                                    <label for="recurso" class="block font-medium text-gray-700">Descripcion Actividad</label>
                                    <div class="mt-1">
                                        <textarea name="recurso" id="recurso" rows="3" class="shadow focus:outline-none focus:shadow-outline appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight @error('descripcionActividad') border-red-600 @enderror"
                                        wire:model.defer="descripcion" maxlength="200"></textarea>
                                    </div>
                                    <p class="mt-2 text-sm text-gray-500">Breve descripción de la actividad. Las URL tienen hipervínculos.</p>
                                    @error('descripcion')
                                        <span class="text-red-500 font-sans text-sm">{{ $message }}</span>
                                    @enderror
                                </div>
            
                                <div>
                                    <label class="block font-medium text-gray-700">
                                      Material para la Actividad (Agregar un nuevo sustituira el anterior)
                                    </label>
                                    <div wire:loading wire:target="recursoNew" >
                                        <div class="flex flex-auto">
                                            <svg class="animate-spin w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path></svg>
                                            <p class="">Cargando...</p> 
                                        </div> 
                                    </div>
                                    <div class="mt-2 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                                        <div class="space-y-1 text-center">
                                            <!--<input type="file" name="" id="" wire:model="recurso">-->
                                            <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                                <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                            <div class="flex text-sm text-gray-600">
                                                <label for="file-upload" class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                                    <span>Agregar Archivo</span>
                                                    <input id="file-upload" name="file-upload" type="file" class="" wire:model="recursoNew" accept=".pdf,.docx,.pptx">
                                                </label>
                                                <!--<p class="pl-1">or drag and drop</p>-->
                                            </div>
                                            <p class="text-xs text-gray-500">
                                                PNG, JPG, PDF, DOCX, PPTX up to 25MB
                                            </p>
                                        </div>
                                    </div>
                                    @error('recursoNew')
                                        <span class="text-red-500 font-sans text-sm">{{ $message }}</span>
                                    @enderror
                                </div>
                                <button type="submit" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                                    Guardar Cambios 
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
