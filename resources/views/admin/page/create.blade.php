@extends('admin.master')


@section('title', 'Site Structure')
@section('subtitle', 'Create')


@section('content')

    <div class="col-lg-12">
        @include('admin.page.partials.form', [
            'route' => 'admin.page.store',
            'model' => null,
            'parent' => $parent,
            'btn' => 'Create new page'
        ])
    </div>
@endsection