<div class="form-group {{$errors->has($name) ? 'has-error' : ''}}">
    @include('partials.form.label')
    {!! Form::textarea($name,  $select or null, $param) !!}
</div>
@include('partials.form.error')
