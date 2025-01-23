<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('nombre') }}</label>
    <div>
        {{ Form::text('nombre', $maestro->nombre, ['class' => 'form-control' .
        ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
        {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">Maestro <b>nombre</b> instruction.</small>
    </div>
</div>

<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('maestros') }}</label>
    <div>
        {{-- Select para elegir el grado --}}
        {{ Form::select('maestros', $maestros, $maestro->maestros, [
            'class' => 'form-control' . ($errors->has('maestros') ? ' is-invalid' : ''),
            'placeholder' => 'Selecciona un grado'
        ]) }}
        {!! $errors->first('maestro_id', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">Asignar un <b>grado</b> al maestro.</small>
    </div>
</div>

<div class="form-footer">
    <div class="text-end">
        <div class="d-flex">
            <a href="#" class="btn btn-danger">Cancelar</a>
            <button type="submit" class="btn btn-primary ms-auto ajax-submit">Guardar</button>
        </div>
    </div>
</div>
