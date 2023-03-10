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
                        <h2 class="content-header-title float-left mb-0">Editar Médico</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Inicio</a>
                                </li>
                                
                                <li class="breadcrumb-item active">Médicos
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                <div class="form-group breadcrumb-right">
                    <div class="dropdown">
                        <a href="{{ url('doctors') }}" class="btn-icon btn btn-secondary btn-round btn-sm dropdown-toggle" type="button" aria-haspopup="true" aria-expanded="false">Cancelar y volver</a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="content-body">
            <!-- Responsive Datatable -->
            <section id="responsive-datatable">
                <div class="row">
                    <div class="col-12">
                        @if ($errors->any())
                                <div class="alert alert-danger" role="alert">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        <div class="card">
                            <div class="card-body">
                            
                            <form action="{{ url('doctors/'.$doctor->id) }}" method="post">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="name">Nombre del médico</label>
                                    <input type="text" name="name" class="form-control" value="{{ old('name', $doctor->name) }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" name="email" class="form-control" value="{{ old('email', $doctor->email) }}">
                                </div>
                                <div class="form-group">
                                    <label for="dni">Doc. de Identidad</label>
                                    <input type="text" name="dni" class="form-control" value="{{ old('dni', $doctor->dni) }}">
                                </div>
                                <div class="form-group">
                                    <label for="address">Dirección</label>
                                    <input type="text" name="address" class="form-control" value="{{ old('address', $doctor->address) }}">
                                </div>
                                <div class="form-group">
                                    <label for="phone">Teléfono / móvil</label>
                                    <input type="text" name="phone" class="form-control" value="{{ old('phone', $doctor->phone) }}">
                                </div>
                                <div class="form-group">
                                    <label for="password">Contraseña</label>
                                    <input type="text" name="password" class="form-control" value="">
                                    <p>Ingrese un valor solo si desea modificar la contraseña.</p>
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
