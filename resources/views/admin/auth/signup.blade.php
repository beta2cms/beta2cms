@extends('admin.master')

@section('class', 'wrapper-form')
@section('title', 'Sign Up!')

@section('content')


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
        'label' => 'Email',
        'params' => [
            'placeholder' => 'info@example.com',
            'class' => 'form-control'
        ]
    ])

    @include('partials.form.password', [
        'label' => 'Password',
        'confirmed' => true,
        'params' => [
            'placeholder' => 'password',
            'class' => 'form-control'
        ]
    ])

    @include('partials.form.checkbox', [
        'label' => 'Remeber me:',
        'name' => 'remember',
        'select' =>  false
    ])

    @include('partials.form.submit', [
        'label' => 'Sign Up!',
        'params' => [
            'class' => 'btn btn-primary'
        ]
    ])

    @include('partials.form.close')

@endsection