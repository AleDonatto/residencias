<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">{{ __('Datos Socioeconomicos') }}</h2>
  </x-slot>

  <div class="container mx-auto px-4 mt-4">

    @if (session()->has('message'))
      <div class="w-full mt-5 h-12 flex justify-center bg-green-300 text-base rounded-lg border-green-200 shadow-2xl">
        <div class="space-y-1 text-center">
          <p></p>
          <p></p>
          <p class="align-middle">{{ session('message') }}</p>
        </div>
      </div>
    @endif
    
    <h2 class="font-sans text-2xl text-gray-800 mx-4 my-4">
      {{ __('Curso: ') }} {{ $curso->nombreCurso }}
    </h2>
    
    <div class="max-w-4xl mx-auto">
      <div class="bg-white shadow overflow-hidden sm:rounded-lg">
        <div class="px-4 py-5 border-b border-gray-200 sm:px-6">
          <h3 class="text-lg leading-6 font-medium text-gray-900">Informacion de la Materia </h3>
          <p class="mt-1 max-w-2xl text-sm leading-5 text-gray-500"></p>
        </div>
        <div>
          <dl>
            @foreach($materia as $item)
            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
              <dt class="text-sm leading-5 font-medium text-gray-500">Nombre de la Materia</dt>
              <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">{{ $item->nombreMateria }}</dd>
            </div>
            <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
              <dt class="text-sm leading-5 font-medium text-gray-500">Semestre</dt>
              <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">{{ $item->semestre }}</dd>
            </div>
            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
              <dt class="text-sm leading-5 font-medium text-gray-500">Carrera</dt>
              <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">{{ $item->academia }}</dd>
            </div>
            <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
              <dt class="text-sm leading-5 font-medium text-gray-500">Clave de Materia</dt>
              <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">{{ $item->claveMateria }}</dd>
            </div>
            
            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
              <dt class="text-sm leading-5 font-medium text-gray-500">Plan de Estudio</dt>
                <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                <ul class="border border-gray-200 rounded-md">
                  <li class="pl-3 pr-4 py-3 flex items-center justify-between text-sm leading-5">
                    <div class="w-0 flex-1 flex items-center">
                      <!-- Heroicon name: paper-clip -->
                      <svg class="flex-shrink-0 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z" clip-rule="evenodd" />
                      </svg>
                      <span class="ml-2 flex-1 w-0 truncate">plan_de_estudio.pdf </span>
                    </div>
                    <div class="ml-4 flex-shrink-0">
                      <a href="https://acapulco.tecnm.mx/" target="_blank" class="font-medium text-indigo-600 hover:text-indigo-500 transition duration-150 ease-in-out">Descargar</a>
                    </div>
                  </li>
                </ul>
              </dd>
            </div>
            @endforeach
          </dl>
        </div>
      </div>
    </div>

    <h2 class="font-sans text-2xl text-gray-800 mx-4 my-4">
      {{ __('Contenido del curso') }}
    </h2>
    
    <div class="form-task">
      @foreach($materia as $item)
        <livewire:docentes.temas-curso :idMateria="$item->idMateria" :idCurso="$curso->idCurso" />
      @endforeach
    </div>
    
    <h2 class="font-sans text-2xl text-gray-800 mx-4 my-4">
      {{ __('Alumnos Inscritos al Curso') }}
    </h2>

    <div class="">
      <livewire:docentes.alumnos-inscritos :idCurso="$curso->idCurso" />
    </div>

  </div>

</x-app-layout>