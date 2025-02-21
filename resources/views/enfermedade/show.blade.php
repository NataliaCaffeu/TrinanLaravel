@extends('layouts.app')

@section('template_title')
    {{ $enfermedade->name ?? __('Show') . " " . __('Enfermedade') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Enfermedade</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('enfermedades.index') }}" style="background-color: #C0C0C0; color:black; border:#A0A0A0"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Prioridade:</strong>
                                    {{ $enfermedade->prioridade->nombre }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Nombre:</strong>
                                    {{ $enfermedade->nombre }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Descripcion:</strong>
                                    {{ $enfermedade->descripcion }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Sintomas:</strong>
                                    {{ $enfermedade->sintomas }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Especialidad:</strong>
                                    {{ $enfermedade->especialidad }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
