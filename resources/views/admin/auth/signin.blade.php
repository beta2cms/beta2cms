@extends('admin.master' , [
    'wrapper' => 'wrapper-form',
    'nav' => false
])

@section('title', 'Sign In!')

@section('content')

<div class="col-lg-12">
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
        'label' => 'Remeber me',
        'name' => 'remember',
        'select' =>  false
    ])

    <div class="row">
        <div class="col-sm-3">
            @include('partials.form.submit', [
                'label' => 'Sign in',
                'params' => [
                    'class' => 'btn btn-default'
                ]
            ])
        </div>
        {{--<div class="col-sm-4">--}}
            {{--<a href="{{route('admin.signup')}}" class="btn btn-warning">Forgot Password</a>--}}
        {{--</div>--}}
        {{--<div class="col-sm-4">--}}
            {{--<a href="{{route('admin.signup')}}" class="btn btn-info">Sign Up!</a>--}}
        {{--</div>--}}
    </div>


    @include('partials.form.close')

</div>
@endsection