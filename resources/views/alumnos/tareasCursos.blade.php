<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">{{ __('tareas cursos') }}</h2>
  </x-slot>
    
  <div class="container mx-auto px-4 mt-5">
    <div class="md:container md:mx-auto bg-indigo-200 bg-opacity-50 rounded-lg border-dashed shadow-2xl">
      <div class="flex">
        <div class="w-1/3">
          <img src="https://images.unsplash.com/photo-1556740738-b6a63e27c4df?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=448&q=80" alt="Sunset in the mountains" 
          class="p-5 max-w-xs">
        </div>
        <div class="w-2/3 text-left mt-5">
          @foreach($curso as $item)
            <h1 class="font-sans text-2xl font-bold text-blue-700">Curso: {{ $item->nombreCurso }} </h1>
            <h2 class="font-sans text-xl font-bold">Descripcion:</h2>
            <p class="font-sans text-base">{{ $item->descripcion }}</p>
            <h2 class="font-sans text-xl font-bold">Periodo: </h2>
            <p class="font-sans text-base">{{ $item->periodo.' - '.$item->year  }}</p>
          @endforeach
        </div>
      </div>
    </div>
  </div>

  <div class="container mx-auto px-4 mt-5">
    <div class="flex flex-col">
      <livewire:alumnos.actividad-tema :cursoid="$idCurso" />
      <!--<div class="md:container md:mx-auto bg-gray-50 rounded-lg border-dashed shadow-md">1</div>
      <div>2</div>
      <div>3</div>-->
    </div>
  </div>
</x-app-layout>