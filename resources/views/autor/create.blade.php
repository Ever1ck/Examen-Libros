<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <form action="/autors" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">Nombre</label>
            <input name="nombre" type="text" class="form-control" wire:model="nombre">
        </div>
        <div class="mb-3">
            <label class="form-label">Apellido Paterno</label>
            <input name="ape_paterno" type="text" class="form-control" wire:model="ape_paterno">
        </div>
        <div class="mb-3">
            <label class="form-label">Apellido Materno</label>
            <input name="ape_materno" type="text" class="form-control" wire:model="ape_materno">
        </div>
        <div class="mb-3">
            <label class="form-label">Edad</label>
            <input name="edad" type="number" class="form-control" wire:model="edad">
        </div>
        
        <div class="float-end">
            <a href="/autors" class="me-2 btn btn-danger">Cerrar</a>
            <button  type="submit" class="btn btn-success">Guardar</button>
        </div>
    </form>
</x-app-layout>