<div>
    {{-- The best athlete wants his opponent at his best. --}}
    <div class="container">
        <div class="max-w-2xl mx-auto">
            <ul class="flex border-b">
                <li class="-mb-px mr-1">
                    <button wire:click="methodCursosActules" class="bg-white inline-block border-l border-t border-r rounded-t py-2 px-4 text-blue-700 font-semibold">Cursos Actuales</button>
                </li>
                <li class="mr-1">
                    <button wire:click="methodAllCursos" class="bg-white inline-block py-2 px-4 text-blue-500 hover:text-blue-800 font-semibold" >Todo los Cursos</button>
                </li>
            </ul>
        </div>

        <div class="mt-5">
            @if($cursosActules)
                <p>cursos actuales</p>
                @if(count($cursos) == 0 )
                    <p class="font-sans ">No hay cursos hasta el momento</p>
                @elseif(count($cursos) > 0)
                    @foreach($cursos as $item)
                        <div class="max-w-xs rounded overflow-hidden shadow-lg bg-white">
                            <img class="w-full" src="https://images.unsplash.com/photo-1556740738-b6a63e27c4df?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=448&q=80" alt="Sunset in the mountains">
                            <div class="px-6 py-4">
                                <div class="font-bold text-xl mb-2">
                                    <a href="{{ route('cursos_alumnos.show', $item->idCurso ) }}">{{ $item->nombreCurso }}</a>
                                </div>
                                <p class="text-gray-700 text-base">
                                    {{ $item->descripcion }}
                                </p>
                            </div>
                        </div>
                    @endforeach
                @endif
            @elseif($allCursos)
                <p>todos los cursos</p>
                @if(count($cursos) == 0 )
                    <p class="font-sans ">No hay cursos hasta el momento</p>
                @elseif(count($cursos) > 0)
                    @foreach($cursos as $item)
                        <div class="max-w-xs rounded overflow-hidden shadow-lg bg-white">
                            <img class="w-full" src="https://images.unsplash.com/photo-1556740738-b6a63e27c4df?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=448&q=80" alt="Sunset in the mountains">
                            <div class="px-6 py-4">
                                <div class="font-bold text-xl mb-2">
                                    <a href="{{ route('cursos_alumnos.show', $item->idCurso ) }}">{{ $item->nombreCurso }}</a>
                                </div>
                                <p class="text-gray-700 text-base">
                                    {{ $item->descripcion }}
                                </p>
                            </div>
                        </div>
                    @endforeach
                @endif
            @endif
        </div>
    </div>

</div>
