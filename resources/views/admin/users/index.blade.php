@extends('admin.master')


@section('title', $user->name)
@section('subheading', 'Overview')


@section('content')

    <div class="col-lg-12">
        <div class="row">
            <div class="col-md-2 col-md-offset-2 text-right">
                Name:
            </div>
            <div class="col-md-6">
                {{$user->name}}
            </div>
        </div>

        <div class="row">
            <div class="col-md-2 col-md-offset-2 text-right">
                Email:
            </div>
            <div class="col-md-6">
                {{$user->email}}
            </div>
        </div>

        </div>
    </div>
@endsection