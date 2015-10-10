
<div class="form-group {{$errors->has(isset($name) ? $name : 'password') ? 'has-error' : ''}}">
    @include('partials.form.label', ['name' => isset($name) ? $name : 'password'])
    {!! Form::password(isset($name) ? $name : 'password', $params) !!}

</div>
@include('partials.form.error', ['name' => isset($name) ? $name : 'password'])



@if(isset($confirm) ? $confirm : false)

    @include('partials.form.password', [
        'name' => 'password_confirmation',
        'label' => isset($label_confirm) ? $label_confirm : 'Confirm Password:',
        'confirm' => false,
        'params' => [
            'class' => $params['class'],
            'placeholder' => isset($placeholder_confirm) ? $placeholder_confirm : 'Confirm Password'
        ]
    ])

@endif






