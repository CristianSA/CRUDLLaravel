@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <h4 class="text-center display-4">
                        CRUDLLaravel App
                    </h4>
                    <div class="row">
                        <div class="col-12 col-md-12">
                            <a href="{{ route('user.create') }}" class="btn btn-success btn-sm">
                                Crear
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-12 text-center mt-2">
                            <table class="table table-responsive">
                                <thead>
                                    <tr>
                                        <th>
                                            #
                                        </th>
                                        <th>
                                            Nombre
                                        </th>
                                        <th>
                                            Email
                                        </th>
                                        <th>
                                            Acciones
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Iteraremos sobre el array que nos enviará el controllador a esta vista y mostraremos el listado de usuarios registrados -->
                                    @forelse($usuarios as $usuario)
                                        <tr>
                                            <th>
                                                {{ $usuario->id }}
                                            </th>
                                            <th>
                                                {{ $usuario->name }}
                                            </th>
                                            <th>
                                                {{ $usuario->email }}
                                            </th>
                                            <th>
                                                <a href="{{ route('user.edit', $usuario->id) }}" class="btn btn-primary btn-sm">
                                                    Editar
                                                </a>
                                                <form action="{{ route('user.delete', $usuario->id) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="btn btn-danger btn-sm">
                                                        Eliminar
                                                    </button>
                                                </form>
                                                <a href="{{ route('user.show', $usuario->id) }}" class="btn btn-warning btn-sm">
                                                    Mostrar
                                                </a>
                                            </th>
                                        </tr>
                                    @empty
                                        No se han encontrado usuarios registrados en la base de datos
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection