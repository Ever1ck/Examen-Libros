<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <a href="libros/create" class="btn btn-success">Agregar Libro</a>
    <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Código</th>
                    <th scope="col">Titulo</th>
                    <th scope="col">Autor</th>
                    <th scope="col">Pais</th>
                    <th scope="col">Paginas</th>
                    <th scope="col">Genero</th>
                    <th scope="col">Estado</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($libros as $libro)
                <tr>
                    <th scope="row">{{$libro->id}}</th>
                    <td>{{$libro->titulo}}</td>
                    @if ($libro->autor_id)
                    <td><a href="">({{$libro->autor_id}}) {{$libro->autor->nombre}}</a></td>
                    @else
                    <td>Autor Desconocido</td>
                    @endif
                    <td>{{$libro->pais}}</td>
                    <td>{{$libro->paginas}}</td>
                    <td>{{$libro->generos}}</td>
                    <td>
                    @if ($libro->estado === '1')
                    <i class="fas fa-circle text-success">Activo</i>
                    @else
                    <i class="fas fa-circle text-danger">Inactivo</i>
                    @endif
                </td>
                    <td>
                        <a class="btn btn-warning" href="/libros/{{$libro->id}}/edit">Editar</a>
                    </td>
                    <td>
                        <form action="{{route('libros.destroy', $libro->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit"  class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div>{{$libros->links()}}</div>
</x-app-layout>