@extends('admin.master')


@section('title', 'Site Structure')
@section('subtitle', 'Edit')


@section('content')

    <div class="col-lg-12">
        @include('admin.node.partials.form', [
            'route' => 'admin.element.update',
            'model' => $node,
            'parent' => null,
            'btn' => 'Update Node'
        ])
    </div>
@endsection