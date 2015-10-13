
<div class="form-group {{$errors->has($name) ? 'has-error' : ''}}">
    @include('partials.form.label')
    {!!  Form::file( $name ) !!}
</div>
@include('partials.form.error')
