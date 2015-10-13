

<div class="form-group {{$errors->has(isset($name) ? $name : 'email') ? 'has-error' : ''}}">
    @include('partials.form.label', ['name' => isset($name) ? $name : 'email'])
    {!! Form::email(
            isset($name) ? $name : 'email' ,
            isset($value) ? $value : null, isset($params) ? $params : []
            ) !!}

</div>
@include('partials.form.error', ['name' => isset($name) ? $name : 'email'])
