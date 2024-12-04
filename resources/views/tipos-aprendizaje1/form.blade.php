<div class="form-group mb-3">
    <label class="form-label">{{ Form::label('alumno_id', 'Alumno') }}</label>
    <div>
        {{ Form::select('alumno_id', $alumnos, $tiposAprendizaje1->alumno_id ?? null, [
            'class' => 'form-control' . ($errors->has('alumno_id') ? ' is-invalid' : ''),
            'placeholder' => 'Seleccione un alumno'
        ]) }}
        {!! $errors->first('alumno_id', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">Seleccione el <b>nombre</b> del alumno.</small>
    </div>
</div>

<div class="form-group mb-3">
    <label class="form-label">{{ Form::label('estilo', 'Estilo de Aprendizaje') }}</label>
    <div>
        {{ Form::select('estilo', 
            ['visual' => 'Visual', 'auditivo' => 'Auditivo', 'kinestesico' => 'Kinestésico'], 
            $tiposAprendizaje1->estilo ?? null, 
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
    <label class="form-label">{{ Form::label('ritmo', 'Ritmo de Aprendizaje') }}</label>
    <div>
        {{ Form::select('ritmo', 
            ['rapido' => 'Rápido', 'moderado' => 'Moderado', 'lento' => 'Lento'], 
            $tiposAprendizaje1->ritmo ?? null, 
            [
                'class' => 'form-control' . ($errors->has('ritmo') ? ' is-invalid' : ''),
                'placeholder' => 'Seleccione un ritmo'
            ]
        ) }}
        {!! $errors->first('ritmo', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">Seleccione el <b>ritmo</b> de aprendizaje.</small>
    </div>
</div>

<div class="form-footer">
    <div class="text-end">
        <div class="d-flex">
            <a href="{{ route('tipos-aprendizaje1s.index') }}" class="btn btn-danger">Cancelar</a>
            <button type="submit" class="btn btn-primary ms-auto ajax-submit">Guardar</button>
        </div>
    </div>
</div>

<script src="{{ asset('js/script.js') }}"></script>
