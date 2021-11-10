<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <form action="/autors/{{$autor->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">Nombre</label>
            <input name="nombre" type="text" class="form-control" wire:model="titulo" value="{{$autor->nombre}}">
        </div>
        <div class="mb-3">
            <label class="form-label">Apellido Paterno</label>
            <input name="ape_paterno" type="text" class="form-control" wire:model="ape_paterno" value="{{$autor->ape_paterno}}">
        </div>
        <div class="mb-3">
            <label class="form-label">Apellido Materno</label>
            <input name="ape_materno" type="text" class="form-control" wire:model="ape_materno" value="{{$autor->ape_materno}}">
        </div>
        <div class="mb-3">
            <label class="form-label">Edad</label>
            <input name="edad" type="number" class="form-control" wire:model="edad" value="{{$autor->edad}}">
        </div>
        
        <div class="float-end">
            <a href="/autors" class="me-2 btn btn-danger">Cerrar</a>
            <input type="submit" id="update-route" class="btn btn-success" value="Update"/>
        </div>
    </form>
</x-app-layout>