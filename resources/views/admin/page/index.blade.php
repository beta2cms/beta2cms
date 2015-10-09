@extends('admin.master')


@section('title', 'Site Structure')


@section('content')

    <div class="col-lg-12">
        <table class="table table-condensed  table-hover">
            <thead>
            <tr>
                <th>#</th>
                <th>Site Name</th>
                <th></th>
                <th>Admin</th>
            </tr>
            </thead>
            <tbody>
            @foreach($pages as $key=>$page)
                <tr>
                    <th scope="row">{{ ++$key }}</th>
                    <td colspan="2"><a href=""><i class="fa fa-caret-right"></i></a> {{ $page->name }}</td>
                    <td>@include('admin.page.partials.admin')</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection