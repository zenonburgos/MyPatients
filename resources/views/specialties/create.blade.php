@extends('layouts.panel')

@section('content')
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">Nueva Especialidad</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a>
                                </li>
                                
                                <li class="breadcrumb-item active">Especialidades
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                <div class="form-group breadcrumb-right">
                    <div class="dropdown">
                        <a href="{{ url('specialties') }}" class="btn-icon btn btn-secondary btn-round btn-sm dropdown-toggle" type="button" aria-haspopup="true" aria-expanded="false">Cancelar y volver</a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="content-body">
            <!-- Responsive Datatable -->
            <section id="responsive-datatable">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                            @if ($errors->any())
                                <div class="alert alert-danger" role="alert">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form action="{{ url('specialties') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="name">Nombre de la Especialidad</label>
                                    <input type="text" name="name" class="form-control" value="{{ old('name') }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="description">Descripción</label>
                                    <input type="text" name="description" class="form-control" value="{{ old('description') }}">
                                </div>
                                <button type="submit" class="btn btn-primary">
                                    Guardar
                                </button>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--/ Responsive Datatable -->
        </div>
    </div>
</div>

@endsection
