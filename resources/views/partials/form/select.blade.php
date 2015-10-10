<div class="form-group {{$errors->has($name) ? 'has-error' : ''}}">
        {!!  Form::label($name, $label) !!}
        {!! Form::select($name, $items, isset($suggest) ? $suggest : null, $params) !!}
</div>