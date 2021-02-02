<div>
    {{-- Do your work, then step back. --}}

    @if(count($actividadTema) == 0)
        <p class="font-sans text-xl text-black text-center">No hay actividades Agregadas</p>
    @else
    <div class="mb-5">
        @php 
            $fechaAnterior = '';
        @endphp
        @foreach($actividadTema as $item)

        @if($fechaAnterior != $item->fechainicio )
            @php
                $formato = $item->fechainicio;
                $date = strtotime($formato);
                    
                setlocale(LC_ALL,"spanish");
                $fechaespanol = strftime("%A %d de %B del %Y", $date);
            @endphp
            <p class="font-sans text-lg mt-2 capitalize">Fecha: {{ $fechaespanol }}</p>
        @endif

        @php
            $fechaAnterior = $item->fechainicio;
        @endphp

        @if($item->tipo == 1 )       
        <div class="md:container md:mx-auto bg-gray-50 rounded-lg border-dashed shadow-md mt-2 px-15">
            <div class="flex">
                <div class="flex-none h-16 content-center">
                    <!--<i class="far fa-square my-6 mr-5 transform scale-150"></i>-->
                    @if($item->actEntregada == 0)
                    <svg class="w-10 h-10 my-4 mr-5 border-dashed border-4 border-light-blue-500 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                    </svg>
                    @else                    
                    <svg class="w-10 h-10 my-4 mr-5 border-dashed border-4 border-light-blue-500 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path>
                    </svg>
                    @endif
                    <!--<i class="fas fa-chalkboard fa-fw mr-3"></i>-->
                </div>
                <div class="flex-grow h-18">
                    <a href="{{ route('viewActividadAlumno', $item->idActividadTemas ) }}">
                        <h1 class="font-sans text-xl text-black text-left">{{ $item->indice.'.- '.$item->nombreTema }}</h1>
                        <h3 class="font-sans text-base text-gray-800 text-right">Actividad: {{ $item->nombreActividad }}</h3>
                        <h4 class="font-sans text-base text-gray-800 text-right">Fecha de inicio: {{ $item->fechainicio }} Fecha final: {{ $item->fechalimite }}</h4>
                    </a>
                </div>
            </div>
        </div>
        @elseif($item->tipo == 2 )
        <div class="w-11/12 bg-gray-50 rounded-lg border-dashed shadow-md mt-1 ml-15 px-15">
            <div class="flex">
                <div class="flex-none h-12 content-center">
                    @if($item->actEntregada == 0)
                    <svg class="w-6 h-6 my-4 mr-5 border-dashed border-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                    </svg>
                    @else
                    <svg class="w-6 h-6 my-4 mr-5 border-dashed border-4 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path>
                    </svg>
                    @endif
                </div>
                <div class="flex-grow h-16">
                    <a href="{{ route('viewActividadAlumno', $item->idActividadTemas ) }}">
                        <h1 class="font-sans text-base text-black text-left">{{ $item->indice.'.- '.$item->nombreTema }}</h1>
                        <h3 class="font-sans text-sm text-gray-800 text-right">Actividad: {{ $item->nombreActividad }}</h3>
                        <h4 class="font-sans text-sm text-gray-800 text-right">Fecha de Inicio: {{ $item->fechainicio }} Fecha Limite: {{$item->fechalimite}}</h4>
                    </a>
                </div>
            </div>
        </div>
        @endif
        @endforeach
    </div>
    @endif
    
      
</div>
