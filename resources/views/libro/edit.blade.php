<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
<form action="/libros/{{$libro->id}}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label class="form-label">Titulo</label>
                <input name="titulo" type="text" class="form-control" wire:model="titulo" value="{{$libro->titulo}}">
            </div>
            <div class="mb-3">
            <label class="form-label">Autor</label>
                    <select aria-describedby="autor_id" class="form-select" name="autor_id">
                    @if (!$libro->autor)
                        <option value="" selected disabled>Selecciona un autor</option>
                        @foreach ($autors as $autor)
                        <option value="{{ $autor->id }}">
                            {{ $autor->nombre }}</option>
                        @endforeach
                        @else
                        @foreach ($autors as $autor)
                        <option value="{{ $autor->id }}" @if($libro->autor->id === $autor->id)
                            selected='selected'
                            @endif>
                            {{ $autor->nombre }}</option>
                        @endforeach
                        @endif
                    </select>
                    @error('autor_id')
                    <div id="autor_id" class="form-text text-danger">*{{$message}}</div>
                    @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Pais</label>
                <input name="pais" type="text" class="form-control" wire:model="pais" value="{{$libro->pais}}"></textarea>
            </div>
            <div class="mb-3">
                <label class="form-label">Paginas</label>
                <input name="paginas" type="number" class="form-control" wire:model="paginas" value="{{$libro->paginas}}"></textarea>
            </div>
            <div class="mb-3">
                <label class="form-label">Genero</label>
                <input name="generos" type="text" class="form-control" wire:model="generos" value="{{$libro->generos}}"></textarea>
            </div>
            <div class="mb-3 col-4">
            <label class="form-label">Estado</label>
            <select aria-describedby="estado" class="form-select" name="estado">
            @if (!$libro)
                        <option value="" selected disabled>Selecciona un estado</option>
                        @else
                        <option value="1" @if($libro->estado == '1') selected
                            @endif>Activo</option>
                        <option value="2" @if($libro->estado == '2') selected
                            @endif>Inactivo</option>
                        @endif
            </select>
            @error('estado')
            <div id="estado" class="form-text text-danger">*{{$message}}</div>
            @enderror
            </div>
            <div class="float-end">
                <a href="/libros" class="me-2 btn btn-danger">Cerrar</a>
                <input type="submit" id="update-route" class="btn btn-success" value="Update"/>
            </div>
        </form>
</x-app-layout>