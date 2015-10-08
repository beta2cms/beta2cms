@extends('admin.master')

@section('class', 'wrapper-form')

@section('title', 'Sign In!')

@section('content')

@include('partials.form.open', [
    'route' => 'admin.signin'
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
    'params' => [
        'placeholder' => 'password..',
        'class' => 'form-control'
    ]
])

@include('partials.form.checkbox', [
    'label' => 'Remeber me:',
    'name' => 'remember',
    'select' =>  false
])

@include('partials.form.submit', [
    'label' => 'Sign in',
    'params' => [
        'class' => 'btn btn-default'
    ]
])

@include('partials.form.close')

@endsection