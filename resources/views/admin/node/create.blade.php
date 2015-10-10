@extends('admin.master')


@section('title', 'Site Structure')
@section('subtitle', 'Create')


@section('content')

    <div class="col-lg-12">
        @include('admin.node.partials.form', [
            'route' => 'admin.node.store',
            'model' => null,
            'parent' => $parent,
            'btn' => 'Create new node'
        ])
    </div>
@endsection