@extends('admin.master')


@section('title', $user->name)
@section('subheading', 'Edit')


@section('content')

    <div class="col-lg-12">

    @include('partials.form.open', [
        'route' => 'admin.user.update',
        'model' => $user
    ])


    @include('partials.form.text', [
        'label' => 'Name: ',
        'name' => 'name',
        'params' => [
            'class' => 'form-control'
        ]
    ])

    @include('partials.form.email', [
    'label' => 'Email: ',
    'name' => 'email',
    'params' => [
        'class' => 'form-control'
    ]
    ])
        <div class="row">
            <div class="col-md-6">
            @include('partials.form.text', [
               'label' => 'First Name: ',
               'name' => 'first-name',
               'params' => [
                   'class' => 'form-control'
               ]
           ])
            </div>
            <div class="col-md-6">
                @include('partials.form.text', [
                   'label' => 'Last Name: ',
                   'name' => 'last-name',
                   'params' => [
                       'class' => 'form-control'
                   ]
               ])
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                @include('partials.form.password', [
                   'label' => 'Password: ',
                   'name' => 'passowrd',
                   'params' => [
                       'class' => 'form-control',
                       'placeholder' => 'please confirm changes..'
                   ]
                   ])
            </div>
        </div>

        @include('partials.form.submit', [
            'label' => 'Save',
            'params' => [
                'class' => 'btn btn-default'
            ]
        ])

        @include('partials.form.close')


    </div>
@endsection