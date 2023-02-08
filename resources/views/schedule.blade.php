@extends('layouts.panel')

@section('content')
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <form action="{{ url('/schedule') }}" method="POST">
            @csrf
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">Gestionar Horario</h2>
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
                        <button type="submit" class="btn-icon btn btn-success btn-round btn-sm dropdown-toggle" aria-haspopup="true" aria-expanded="false">Guardar cambios</button>
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
                            @if (session('notification'))
                            <div class="alert alert-success" role="alert">
                                {{ session('notification') }}
                            </div>
                            @endif
                            <div class="card-header border-bottom">
                                <h4 class="card-title">Horarios</h4>
                            </div>
                            <div class="card-datatable">
                                <table class="dt-responsive table">
                                    <thead>
                                        <tr>
                                            <th>Día</th>
                                            <th>Activo</th>
                                            <th>Turno Mañana</th>
                                            <th>Turno Tarde</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($days as $key => $day)
                                        <tr>
                                            <th>{{ $day }}</th>
                                            <td>
                                                <div class="custom-control custom-switch custom-switch-primary">
                                                    <input type="checkbox" class="custom-control-input" name="active[]" value="{{ $key }}" id="customSwitch{{ $key }}">
                                                    <label class="custom-control-label" for="customSwitch{{ $key }}">
                                                        <span class="switch-icon-left"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check"><polyline points="20 6 9 17 4 12"></polyline></svg></span>
                                                        <span class="switch-icon-right"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></span>
                                                    </label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="row">
                                                    <div class="col">
                                                        <select class="form-control" name="morning_start[]">
                                                            @for ($i=5; $i<=11; $i++)
                                                            <option value="{{ $i }}:00">{{ $i }}:00 am</option>
                                                            <option value="{{ $i }}:30">{{ $i }}:30 am</option>
                                                            @endfor
                                                        </select>
                                                    </div>
                                                    <div class="col">
                                                        <select class="form-control" name="morning_end[]">
                                                            @for ($i=5; $i<=11; $i++)
                                                            <option value="{{ $i }}:00">{{ $i }}:00 am</option>
                                                            <option value="{{ $i }}:30">{{ $i }}:30 am</option>
                                                            @endfor
                                                        </select>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="row">
                                                    <div class="col">
                                                        <select class="form-control" name="afternoon_start[]">
                                                            @for ($i=1; $i<=11; $i++)
                                                            <option value="{{ $i+12 }}:00">{{ $i }}:00 pm</option>
                                                            <option value="{{ $i+12 }}:30">{{ $i }}:30 pm</option>
                                                            @endfor
                                                        </select>
                                                    </div>
                                                    <div class="col">
                                                        <select class="form-control" name="afternoon_end[]">
                                                            @for ($i=1; $i<=11; $i++)
                                                            <option value="{{ $i+12 }}:00">{{ $i }}:00 pm</option>
                                                            <option value="{{ $i+12 }}:30">{{ $i }}:30 pm</option>
                                                            @endfor
                                                        </select>
                                                    </div>
                                                </div>
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
    </form>
    </div>
</div>

@endsection
