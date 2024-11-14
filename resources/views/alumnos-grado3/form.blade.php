
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('nombre_alumno') }}</label>
    <div>
        {{ Form::text('nombre_alumno', $alumnosGrado3->nombre_alumno, ['class' => 'form-control' .
        ($errors->has('nombre_alumno') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Alumno']) }}
        {!! $errors->first('nombre_alumno', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">alumnosGrado3 <b>nombre_alumno</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('nombre_tutor_1') }}</label>
    <div>
        {{ Form::text('nombre_tutor_1', $alumnosGrado3->nombre_tutor_1, ['class' => 'form-control' .
        ($errors->has('nombre_tutor_1') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Tutor 1']) }}
        {!! $errors->first('nombre_tutor_1', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">alumnosGrado3 <b>nombre_tutor_1</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('telefono_tutor_1') }}</label>
    <div>
        {{ Form::text('telefono_tutor_1', $alumnosGrado3->telefono_tutor_1, ['class' => 'form-control' .
        ($errors->has('telefono_tutor_1') ? ' is-invalid' : ''), 'placeholder' => 'Telefono Tutor 1']) }}
        {!! $errors->first('telefono_tutor_1', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">alumnosGrado3 <b>telefono_tutor_1</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('nombre_tutor_2') }}</label>
    <div>
        {{ Form::text('nombre_tutor_2', $alumnosGrado3->nombre_tutor_2, ['class' => 'form-control' .
        ($errors->has('nombre_tutor_2') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Tutor 2']) }}
        {!! $errors->first('nombre_tutor_2', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">alumnosGrado3 <b>nombre_tutor_2</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('telefono_tutor_2') }}</label>
    <div>
        {{ Form::text('telefono_tutor_2', $alumnosGrado3->telefono_tutor_2, ['class' => 'form-control' .
        ($errors->has('telefono_tutor_2') ? ' is-invalid' : ''), 'placeholder' => 'Telefono Tutor 2']) }}
        {!! $errors->first('telefono_tutor_2', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">alumnosGrado3 <b>telefono_tutor_2</b> instruction.</small>
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
