@extends('layouts.app')

@section('template_title')
    {{ $prioridade->name ?? __('Show') . " " . __('Prioridade') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Prioridade</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('prioridades.index') }}" style="background-color: #C0C0C0; color:black; border:#A0A0A0"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Nombre:</strong>
                                    {{ $prioridade->nombre }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Color:</strong>
                                    {{ $prioridade->color }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Nivel Prioridad:</strong>
                                    {{ $prioridade->nivel_prioridad }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
