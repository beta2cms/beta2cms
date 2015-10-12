@extends('admin.master')


@section('title', 'Dashboard')

@section('breadcrumbs')
    {!! Breadcrumbs::render('dashboard') !!}
@endsection


@section('content')


    <div class="col-lg-12">
        <table class="table table-hover">
            <thead>
            <tr>
                <th>#</th>
                <th>Site Name</th>
                <th></th>
                <th>Deleted At</th>
                <th>Admin</th>
            </tr>
            </thead>
            <tbody>
            @foreach($nodes as $key=>$node)
                <tr class="{{ !$node->active ? 'text-muted' : ''}}">
                    <th scope="row">{{ ++$key}}</th>
                    <td colspan="2" >{{ $node->name }}</td>
                    <td>{{$node->deleted_at}}</td>
                    <td>
                        <a href="{{route('admin.node.undo', $node->id)}}" class="btn btn-xs btn-info"><i class="fa fa-refresh"></i></a>&nbsp;
                        {{--<a href=""><i class="fa fa-trash"></i></a>--}}
                    </td>
                </tr>
            @endforeach
        </table>
    </div>


@endsection