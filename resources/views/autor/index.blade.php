<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <a href="autors/create" class="btn btn-success">Agregar Autor</a>
    <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Código</th>
                    <th scope="col">Nombres y apellidos</th>
                    <th scope="col">Edad</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($autors as $autor)
                <tr>
                    <th scope="row">{{$autor->id}}</th>
                    <td>{{$autor->nombre}} {{$autor->ape_paterno}} {{$autor->ape_materno}}</td>
                    <td>{{$autor->edad}}</td>
                    <td>
                        <a class="btn btn-warning" href="/autors/{{$autor->id}}/edit">Editar</a>
                    </td>
                    <td>
                        <form action="{{route('autors.destroy', $autor->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit"  class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
</x-app-layout>