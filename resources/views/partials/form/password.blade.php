<div class="form-group">
    {!! Form::label('password', $label) !!}
    {!! Form::password('password', $params) !!}
    @if(isset($confirmed) ? $confirmed : false)
        {!! Form::password('password_confirmation', $params) !!}
    @endif
</div>