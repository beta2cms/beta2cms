@extends('admin.master')

@section('title', 'Site Structure')

@section('breadcrumbs')
    {!! Breadcrumbs::render('node') !!}
@endsection


@section('content')

    <div class="col-lg-12">
        <table class="table table-hover">
            <thead>
            <tr>
                <th>#</th>
                <th>Site Name</th>
                <th></th>
                <th>Admin</th>
            </tr>
            </thead>
            <tbody>
              @include('admin.node.partials.table')
            </tbody>
        </table>

    </div>
@endsection