@extends('admin.master')


@section('title', 'Modules')

@section('breadcrumbs')
    {!! Breadcrumbs::render('module') !!}
@endsection


@section('content')


    <div class="col-lg-12">
        <table class="table table-hover">
            <thead>
            <tr>
                <th>#</th>
                <th>Module Name</th>
                <th></th>
                <th>Active</th>
            </tr>
            </thead>
            <tbody>
            @foreach($modules as $key=>$module)
                <tr class="{{ !$module->active ? 'text-muted' : ''}}">
                    <th scope="row">{{ ++$key}}</th>
                    <td colspan="2" >{{ $module->name }}</td>
                    {{--<td>{{$node->deleted_at}}</td>--}}
                    <td>
                        {{--<a href="{{route('admin.module.undo', $node->id)}}" class="btn btn-xs btn-info"><i class="fa fa-refresh"></i></a>&nbsp;--}}
                        {{--<a href=""><i class="fa fa-trash"></i></a>--}}
                        @include('admin.partials.toggle',[
                            'route' => 'admin.module.toggle',
                            'element' => $module
                        ])
                    </td>
                </tr>
        @endforeach
    </div>


@endsection