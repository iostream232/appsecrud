
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('nombre_alumno') }}</label>
    <div>
        {{ Form::text('nombre_alumno', $alumnosGrado1->nombre_alumno, ['class' => 'form-control' .
        ($errors->has('nombre_alumno') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Alumno']) }}
        {!! $errors->first('nombre_alumno', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">Agrega <b>nombre del alumno</b></small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('nombre_tutor_1') }}</label>
    <div>
        {{ Form::text('nombre_tutor_1', $alumnosGrado1->nombre_tutor_1, ['class' => 'form-control' .
        ($errors->has('nombre_tutor_1') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Tutor 1']) }}
        {!! $errors->first('nombre_tutor_1', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">Agrega <b>Nombre del primer tutor</b></small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('telefono_tutor_1') }}</label>
    <div>
        {{ Form::text('telefono_tutor_1', $alumnosGrado1->telefono_tutor_1, ['class' => 'form-control' .
        ($errors->has('telefono_tutor_1') ? ' is-invalid' : ''), 'placeholder' => 'Telefono Tutor 1']) }}
        {!! $errors->first('telefono_tutor_1', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">Agrega <b>telefono del primer tutor a 10 digitos</b></small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('nombre_tutor_2') }}</label>
    <div>
        {{ Form::text('nombre_tutor_2', $alumnosGrado1->nombre_tutor_2, ['class' => 'form-control' .
        ($errors->has('nombre_tutor_2') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Tutor 2']) }}
        {!! $errors->first('nombre_tutor_2', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">Agrega <b>Nombre del segundo tutor</b></small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('telefono_tutor_2') }}</label>
    <div>
        {{ Form::text('telefono_tutor_2', $alumnosGrado1->telefono_tutor_2, ['class' => 'form-control' .
        ($errors->has('telefono_tutor_2') ? ' is-invalid' : ''), 'placeholder' => 'Telefono Tutor 2']) }}
        {!! $errors->first('telefono_tutor_2', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">Agrega <b>telefono del segundo tutor a 10 digitos</b></small>
    </div>
</div>

    <div class="form-footer">
        <div class="text-end">
            <div class="d-flex">
                <a href="{{ route('alumnos-grado1s.index') }}" class="btn btn-danger">Cancelar</a>
                <button type="submit" class="btn btn-primary ms-auto ajax-submit">Agregar registro</button>
            </div>
        </div>
    </div>
