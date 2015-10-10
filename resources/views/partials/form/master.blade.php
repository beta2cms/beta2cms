<div class="form-group {{$errors->has($name) ? 'has-error' : ''}}">
    @include('partials.form.label')
    {{--{!! Form::label($name, $label, [ 'class' => 'control-label']) !!}--}}

   @section('content')
        {{var_dump($params)}}
   @show

</div>
@include('partials.form.error')
