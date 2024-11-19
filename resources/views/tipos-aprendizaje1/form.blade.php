
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('nombre') }}</label>
    <div>
        {{ Form::text('nombre', $tiposAprendizaje1->nombre, ['class' => 'form-control' .
        ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
        {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">tiposAprendizaje1 <b>nombre</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('estilo') }}</label>
    <div>
    {{ Form::label('estilo', 'Estilo de Aprendizaje:', ['class' => 'form-label']) }}
    {{ Form::select(
        'estilo', 
        ['visual' => 'Visual', 'auditivo' => 'Auditivo', 'kinestesico' => 'Kinestésico'], // Opciones del dropdown
        $tiposAprendizaje1->estilo, // Valor seleccionado
        [
            'class' => 'form-control' . ($errors->has('estilo') ? ' is-invalid' : ''), 
            'placeholder' => 'Seleccione un estilo'
        ]
    ) }}
    {!! $errors->first('estilo', '<div class="invalid-feedback">:message</div>') !!}
    <small class="form-hint">Seleccione el <b>estilo</b> de aprendizaje.</small>
</div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('ritmo') }}</label>
    <div>
    <div>
    {{ Form::label('ritmo', 'Ritmo de Aprendizaje:', ['class' => 'form-label']) }}
    {{ Form::select(
        'ritmo', 
        ['rapido' => 'Rápido', 'moderado' => 'Moderado', 'lento' => 'Lento'], // Opciones del dropdown
        $tiposAprendizaje1->ritmo, // Valor seleccionado
        [
            'class' => 'form-control' . ($errors->has('ritmo') ? ' is-invalid' : ''), 
            'id' => 'ritmo-select', // Agregamos un id único
            'placeholder' => 'Seleccione un ritmo'
        ]
    ) }}
    {!! $errors->first('ritmo', '<div class="invalid-feedback">:message</div>') !!}
</div>

    <small class="form-hint">Seleccione el <b>ritmo</b> de aprendizaje.</small>
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
    <script src="{{ asset('js/script.js') }}"></script>
