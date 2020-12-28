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
                        <div class="col-12 col-md-4">
                            <a href="{{ route('home') }}" class="btn btn-danger">
                                Volver
                            </a>
                        </div>
                        <div class="col-12 col-md-4">
                            <h5 class="text-center">
                                Datos del usuario
                            </h5>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="clear-fix"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-6 text-center">
                            <label for="name">Nombre</label>
                            <p>
                                {{ $usuario->name }}
                            </p>
                        </div>
                        <div class="col-12 col-md-6 text-center">
                            <label for="email">Email</label>
                            <p>
                                {{ $usuario->email }}
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-6 text-center">
                            <label for="created_at">Fecha de Alta</label>
                            <p>
                                {{ $usuario->created_at }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection