<div class="form-group">
    <div class="input-group">
    <span class="input-group-addon">
       {!! Form::checkbox($name, null) !!}
    </span>
        <label class="form-control" for="{{$name}}">{{$label}}</label>
    </div>
</div>
@include('partials.form.error')


