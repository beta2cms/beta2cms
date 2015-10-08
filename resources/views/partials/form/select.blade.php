<div class="form-group">
        {!!  Form::label($name, $label) !!}
        {!! Form::select($name, $items, isset($suggest) ? $suggest : null, $params) !!}
</div>