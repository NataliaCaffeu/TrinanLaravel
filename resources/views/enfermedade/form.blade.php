<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            {{--<label for="prioridades_id" class="form-label">{{ __('Prioridades Id') }}</label>
            <input type="text" name="prioridades_id" class="form-control @error('prioridades_id') is-invalid @enderror" value="{{ old('prioridades_id', $enfermedade?->prioridades_id) }}" id="prioridades_id" placeholder="Prioridades Id">
            {!! $errors->first('prioridades_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
            --}}
            {{ Form::label('prioridades')}}
            {{ Form::select('prioridades_id',$prioridades, $enfermedade->prioridades_id,['class' => 'form-control' . ($errors->has('prioridades_id') ? ' is-invalid' : ''), 'placeholder' => 'Prioridad'])}}
            {!! $errors->first('prioridades_id', '<div class="invalid-feedback">message</div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="nombre" class="form-label">{{ __('Nombre') }}</label>
            <input type="text" name="nombre" class="form-control @error('nombre') is-invalid @enderror" value="{{ old('nombre', $enfermedade?->nombre) }}" id="nombre" placeholder="Nombre">
            {!! $errors->first('nombre', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="descripcion" class="form-label">{{ __('Descripcion') }}</label>
            <input type="text" name="descripcion" class="form-control @error('descripcion') is-invalid @enderror" value="{{ old('descripcion', $enfermedade?->descripcion) }}" id="descripcion" placeholder="Descripcion">
            {!! $errors->first('descripcion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="sintomas" class="form-label">{{ __('Sintomas') }}</label>
            <input type="text" name="sintomas" class="form-control @error('sintomas') is-invalid @enderror" value="{{ old('sintomas', $enfermedade?->sintomas) }}" id="sintomas" placeholder="Sintomas">
            {!! $errors->first('sintomas', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="especialidad" class="form-label">{{ __('Especialidad') }}</label>
            <input type="text" name="especialidad" class="form-control @error('especialidad') is-invalid @enderror" value="{{ old('especialidad', $enfermedade?->especialidad) }}" id="especialidad" placeholder="Especialidad">
            {!! $errors->first('especialidad', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>