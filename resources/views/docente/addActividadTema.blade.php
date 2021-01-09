<x-app-layout>
    <x-slot name="header">
        <h2>formulario para agregar actividades de los temas</h2>
    </x-slot>

    <div class="container mx-auto px-4">
       <livewire:docentes.form-actividades :curso="$curso" :tema="$tema" /> 
    </div>
</x-app-layout>