<div class="form-group {{$errors->has($name) ? 'has-error' : ''}}">
    @include('partials.form.label')
    {!! Form::text($name,  isset($suggest) ? $suggest : null, $params) !!}
</div>
@include('partials.form.error')
