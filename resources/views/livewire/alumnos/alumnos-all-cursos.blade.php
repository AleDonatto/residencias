<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    
    <div class="grid grid-cols-4 gap-4">
        @if(count($cursos) == 0 )
            <p class="font-sans ">No hay cursos hasta el momento</p>
        @elseif(count($cursos) > 0)
            @foreach($cursos as $item)
                <div class="max-w-xs rounded overflow-hidden shadow-lg bg-white">
                    <img class="w-full" src="https://images.unsplash.com/photo-1556740738-b6a63e27c4df?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=448&q=80" alt="Sunset in the mountains">
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">
                            <a href="{{ route('descripcionCurso', $item->idCurso ) }}">{{ $item->nombreCurso }}</a>
                        </div>
                        <p class="text-gray-700 text-base">
                            {{ $item->descripcion }}
                        </p>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
</div>
