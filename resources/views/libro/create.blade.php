<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
<form action="/libros" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Titulo</label>
                <input name="titulo" type="text" class="form-control" wire:model="titulo">
            </div>
            <div class="mb-3">
            <label class="form-label">Autor</label>
                    <select aria-describedby="autor_id" class="form-select" name="autor_id">
                        <option value="" selected disabled>Selecciona un autor</option>
                        @foreach ($autors as $autor)
                        <option value="{{$autor->id}}">{{$autor->nombre}}</option>
                        @endforeach
                    </select>
                    @error('autor_id')
                    <div id="autor_id" class="form-text text-danger">*{{$message}}</div>
                    @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Pais</label>
                <input name="pais" type="text" class="form-control" wire:model="pais"></textarea>
            </div>
            <div class="mb-3">
                <label class="form-label">Paginas</label>
                <input name="paginas" type="number" class="form-control" wire:model="paginas"></textarea>
            </div>
            <div class="mb-3">
                <label class="form-label">Genero</label>
                <input name="generos" type="text" class="form-control" wire:model="generos"></textarea>
            </div>
            <div class="mb-3 col-4">
            <label class="form-label">Estado</label>
            <select aria-describedby="estado" class="form-select" name="estado">
                <option value="" selected disabled>Selecciona un estado</option>
                <option value="1">Activo</option>
                <option value="2">Inactivo</option>
            </select>
            @error('estado')
            <div id="estado" class="form-text text-danger">*{{$message}}</div>
            @enderror
            </div>
            <div class="float-end">
                <x-jet-secondary-button href="/libros" class="me-2">Cerrar</x-jet-secondary-button>
                <x-jet-danger-button type="submit">Guardar</x-jet-danger-button>
            </div>
        </form>
</x-app-layout>