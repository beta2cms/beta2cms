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

    {{--<div class="col-lg-12">--}}
        {{--<ul class="list">--}}
            {{--<li class="list-item list-head">--}}
                {{--<span class="head">#</span>--}}
                {{--<span class="head title">Site Name</span>--}}
                {{--<span class="head admin">Admin</span>--}}
            {{--</li>--}}
            {{--@foreach($main->children()->notDeleted()->get()  as $key=>$node)--}}
                {{--<li class="{{ !$node->active ? 'text-muted' : ''}} list-item">--}}
                    {{--<span class="head">{{ ++$key}}</span>--}}
                    {{--<span class="title">{{ $node->name }}</span>--}}
                    {{--<span class="admin">--}}
                        {{--<a href="{{route('admin.node.active', $node->id )}}" class="btn btn-xs btn-default"><i class="fa {{ $node->active? 'fa-eye' : 'fa-eye-slash' }}"></i></a>&nbsp;--}}
                        {{--<a href="{{route('admin.node.edit', [ 'parent' => $node->id ])}}" class="btn btn-xs btn-primary"><i class="fa fa-edit"></i></a>&nbsp;--}}
                        {{--<a href="{{route('admin.node.create', [ 'parent' => $node->id ])}}" class="btn btn-xs btn-success"><i class="fa fa-caret-square-o-right"></i></a>&nbsp;--}}
                        {{--<a href="{{route('admin.node.create', [ 'parent' => $main->id ])}}" class="btn btn-xs btn-success"><i class="fa fa-caret-square-o-down"></i></a>&nbsp;--}}
                    {{--</span>--}}
                {{--</li>--}}
            {{--<li>--}}
                {{--<ul class="list">--}}
                    {{--@foreach($main->children()->notDeleted()->get()  as $key=>$node)--}}
                        {{--<li class="{{ !$node->active ? 'text-muted' : ''}} list-item">--}}
                            {{--<span class="head">{{ ++$key}}</span>--}}
                            {{--<span class="title">{{ $node->name }}</span>--}}
                    {{--<span class="admin">--}}
                        {{--<a href="{{route('admin.node.active', $node->id )}}" class="btn btn-xs btn-default"><i class="fa {{ $node->active? 'fa-eye' : 'fa-eye-slash' }}"></i></a>&nbsp;--}}
                        {{--<a href="{{route('admin.node.edit', [ 'parent' => $node->id ])}}" class="btn btn-xs btn-primary"><i class="fa fa-edit"></i></a>&nbsp;--}}
                        {{--<a href="{{route('admin.node.create', [ 'parent' => $node->id ])}}" class="btn btn-xs btn-success"><i class="fa fa-caret-square-o-right"></i></a>&nbsp;--}}
                        {{--<a href="{{route('admin.node.create', [ 'parent' => $main->id ])}}" class="btn btn-xs btn-success"><i class="fa fa-caret-square-o-down"></i></a>&nbsp;--}}
                    {{--</span>--}}
                        {{--</li>--}}
                    {{--@endforeach--}}
                {{--</ul>--}}
            {{--</li>--}}
            {{--@endforeach--}}
        {{--</ul>--}}
    {{--</div>--}}
@endsection