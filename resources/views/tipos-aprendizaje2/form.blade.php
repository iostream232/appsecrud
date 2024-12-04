
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('nombre') }}</label>
    <div>
        {{ Form::text('nombre', $tiposAprendizaje2->nombre, ['class' => 'form-control' .
        ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
        {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">tiposAprendizaje2 <b>nombre</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('estilo') }}</label>
    <div>
        {{ Form::text('estilo', $tiposAprendizaje2->estilo, ['class' => 'form-control' .
        ($errors->has('estilo') ? ' is-invalid' : ''), 'placeholder' => 'Estilo']) }}
        {!! $errors->first('estilo', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">tiposAprendizaje2 <b>estilo</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('ritmo') }}</label>
    <div>
        {{ Form::text('ritmo', $tiposAprendizaje2->ritmo, ['class' => 'form-control' .
        ($errors->has('ritmo') ? ' is-invalid' : ''), 'placeholder' => 'Ritmo']) }}
        {!! $errors->first('ritmo', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">tiposAprendizaje2 <b>ritmo</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('alumno_id') }}</label>
    <div>
        {{ Form::text('alumno_id', $tiposAprendizaje2->alumno_id, ['class' => 'form-control' .
        ($errors->has('alumno_id') ? ' is-invalid' : ''), 'placeholder' => 'Alumno Id']) }}
        {!! $errors->first('alumno_id', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">tiposAprendizaje2 <b>alumno_id</b> instruction.</small>
    </div>
</div>

    <div class="form-footer">
        <div class="text-end">
            <div class="d-flex">
                <a href="#" class="btn btn-danger">Cancel</a>
                <button type="submit" class="btn btn-primary ms-auto ajax-submit">Submit</button>
            </div>
        </div>
    </div>
