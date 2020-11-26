<div>
    @if(empty($temas))
        <h4 class="text-xl mx-3 text-blue-800">No hay temas agregados</h4>
    @else
        @foreach($temas as $item)
            <h4 class="text-xl mx-3 text-blue-800">{{ $item->indice.' .- '.$item->nombreTema  }}</h4>
            <livewire:subtemas :idTema="$item->idTema" ></livewire:subtemas>
        @endforeach
    @endif
</div>
