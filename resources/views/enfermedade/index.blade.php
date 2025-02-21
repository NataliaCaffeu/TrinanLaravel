@extends('layouts.app')

@section('template_title')
    Enfermedades
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Enfermedades') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('enfermedades.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left" style="background-color: #C0C0C0; color:black; border:#A0A0A0">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success m-4">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body bg-white">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>Cod</th>
                                        
									<th >Prioridade</th>
									<th >Nombre</th>
									<th >Descripcion</th>
									<th >Sintomas</th>
									<th >Especialidad</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($enfermedades as $enfermedade)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td >{{ $enfermedade->prioridade->nombre }}</td>
										<td >{{ $enfermedade->nombre }}</td>
										<td >{{ $enfermedade->descripcion }}</td>
										<td >{{ $enfermedade->sintomas }}</td>
										<td >{{ $enfermedade->especialidad }}</td>

                                            <td>
                                                <form action="{{ route('enfermedades.destroy', $enfermedade->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('enfermedades.show', $enfermedade->id) }}" style="background-color: #A0A0A0; color:black; border:#A0A0A0"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('enfermedades.edit', $enfermedade->id) }}" style="background-color: #C0C0C0; color:black; border:#A0A0A0"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="event.preventDefault(); confirm('Are you sure to delete?') ? this.closest('form').submit() : false;" style="background-color: #A0A0A0; color:black; border:#A0A0A0"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $enfermedades->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
