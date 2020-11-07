<div>
    <h4 class="font-sans text-gray-600 font-bold text-2xl my-2">Cursos Recientes</h4>

    <div class="grid grid-cols-4 gap-4">
        @foreach ($cursos as $item)
        <div class="max-w-xs rounded overflow-hidden shadow-lg bg-white">
            <img class="w-full" src="https://images.unsplash.com/photo-1556740738-b6a63e27c4df?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=448&q=80" alt="Sunset in the mountains">
            <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2">
                    <a href="{{ route('cursos_docentes.show', $item->idCurso ) }}">{{ $item->nombreCurso }}</a>
                </div>
                <p class="text-gray-700 text-base">
                    {{ $item->descripcion }}
                </p>
            </div>
            <div class="px-6 pt-4 pb-2">
                <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>
                <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
                <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#winter</span>
            </div>
        </div>
        @endforeach
    </div>

</div>
