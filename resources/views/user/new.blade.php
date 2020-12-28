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
                                Crear usuario
                            </h5>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="clear-fix"></div>
                        </div>
                    </div>
                    <div class="row">
                        <form action="{{ route('user.add') }}" autocomplete="off" method="POST">
                            @csrf
                            <div class="col-12 col-md-12 mt-2">
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label for="name">
                                                Nombre
                                            </label>
                                            <input type="text" name="name" id="name" value="" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label for="email">
                                                Email
                                            </label>
                                            <input type="email" name="email" id="email" value="" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-md-12">
                                        <div class="form-group">
                                            <label for="password">
                                                Contraseña
                                            </label>
                                            <input type="password" name="password" id="password" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-grid gap-2 mt-2">
                                <button type="submit" class="btn btn-success">
                                    Guardar
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection