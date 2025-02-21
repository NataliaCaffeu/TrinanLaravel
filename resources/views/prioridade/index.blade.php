@extends('layouts.app')

@section('template_title')
    Prioridades
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Prioridades') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('prioridades.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left" style="background-color: #C0C0C0; color:black; border:#A0A0A0">
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
                                        
									<th >Nombre</th>
									<th >Color</th>
									<th >Nivel Prioridad</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($prioridades as $prioridade)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td >{{ $prioridade->nombre }}</td>
										<td >{{ $prioridade->color }}</td>
										<td >{{ $prioridade->nivel_prioridad }}</td>

                                            <td>
                                                <form action="{{ route('prioridades.destroy', $prioridade->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('prioridades.show', $prioridade->id) }}" style="background-color: #A0A0A0; color:black; border:#A0A0A0"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('prioridades.edit', $prioridade->id) }}" style="background-color: #C0C0C0; color:black; border:#A0A0A0"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $prioridades->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
