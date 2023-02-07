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
                        <h2 class="content-header-title float-left mb-0">Médicos</h2>
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
                        <a href="{{ url('doctors/create') }}" class="btn-icon btn btn-success btn-round btn-sm dropdown-toggle" aria-haspopup="true" aria-expanded="false">Nuevo Médico</a>
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
                            <div class="card-header border-bottom">
                                <h4 class="card-title">Responsive Datatable</h4>
                            </div>
                            <div class="card-datatable">
                                <table class="dt-responsive table">
                                    <thead>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>EMail</th>
                                            <th>Identidad</th>
                                            <th>Opciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($doctors as $doctor)
                                        <tr>
                                            <th scope="row">
                                                {{ $doctor->name }}
                                            </th>
                                            <td>
                                                {{ $doctor->email }}
                                            </td>
                                            <td>
                                                {{ $doctor->dni }}
                                            </td>
                                            <td>
                                                <form action="{{ url('/doctors/'.$doctor->idº) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <a href="{{ url('/doctors/'.$doctor->id.'/edit') }}" class="btn btn-sm btn-primary">Editar</a>
                                                    <button class="btn btn-sm btn-danger type="submit">Eliminar</button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
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
