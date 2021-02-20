<div>
    {{-- The best athlete wants his opponent at his best. --}}
    
    <div class="mt-5">
        <select name="actividad" id="actividad" class="bg-grey-lighter border border-grey-lighter text-grey-darker py-3 px-4 pr-8 rounded" wire:model.defer="idActividad">
            <option value="" selected>Seleccione</option>
            @foreach($listTareas as $item)
            <option class="font-sans" value="{{ $item->idActividadTemas }}">
                {{ $item->nombreActividad.' Tema: '.$item->indice.'.-'.$item->nombreTema }}
            </option>
            @endforeach
        </select>

        <button type="button" wire:click="getAlumnos()" class="inline-block mx-4 px-6 py-2 text-xs font-medium leading-6 text-center text-white uppercase transition bg-blue-700 rounded-full shadow ripple hover:shadow-lg hover:bg-blue-800 focus:outline-none">
            Consultar
        </button>
    </div>
</div>
