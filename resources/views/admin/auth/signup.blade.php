@extends('admin.master' , [
    'wrapper' => 'wrapper-form',
    'nav' => false
])

@section('title', 'Sign Up!')

@section('content')
<div class="col-lg-12">

    @include('partials.form.open', [
        'route' => 'admin.signup'
    ])

    @include('partials.form.text', [
        'label' => 'User name:',
        'name' => 'name',
        'params' => [
            'placeholder' => 'User name',
            'class' => 'form-control'
        ]
    ])

    @include('partials.form.email', [
        'label' => 'Email:',
        'params' => [
            'placeholder' => 'info@example.com',
            'class' => 'form-control'
        ]
    ])

    @include('partials.form.password', [
        'label' => 'Password:',
        'confirm' => 'true',
        'params' => [
            'placeholder' => 'password',
            'class' => 'form-control'
        ]
    ])

    {{--@include('partials.form.password', [--}}
        {{--'label' => 'Confirm password:',--}}
        {{--'name' => 'password_confirmed',--}}
        {{--'params' => [--}}
            {{--'placeholder' => 'confirm password',--}}
            {{--'class' => 'form-control'--}}
        {{--]--}}
    {{--])--}}

    @include('partials.form.submit', [
        'label' => 'Sign Up!',
        'params' => [
            'class' => 'btn btn-primary'
        ]
    ])

    @include('partials.form.close')

</div>
@endsection