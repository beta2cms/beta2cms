<div class="form-group">
    {!! Form::label('email', $label) !!}
    {!! Form::email('email', isset($value) ? $value : null, $params) !!}
</div>