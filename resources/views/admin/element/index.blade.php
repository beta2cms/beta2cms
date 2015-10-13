{{--@inject('modules','App\Providers\ModuleServiceProvider' )--}}

@extends('admin.master')

@section('title', 'Site Elements')
@section('subheading', $node->name)

@section('breadcrumbs')
    {!! Breadcrumbs::render('element') !!}
@endsection


@section('content')


    <div class="col-lg-12">
        <table class="table table-hover">
            <thead>
            <tr>
                <th>#</th>
                <th>Element Name</th>
                <th></th>
                <th>Admin</th>
            </tr>
            </thead>
            <tbody>
            @foreach($node->content as $key=>$item)
                <tr class="{{ !$item->active ? 'text-muted' : ''}}">
                    <th scope="row">{{ ++$key}}</th>
                    <td colspan="2">{{ $item->element->module->name }}</td>
                    {{--<td>{{$node->deleted_at}}</td>--}}
                    <td>
                        todo: admin modules
                        {{--<a href="{{route('admin.module.undo', $node->id)}}" class="btn btn-xs btn-info"><i class="fa fa-refresh"></i></a>&nbsp;--}}
                        {{--<a href=""><i class="fa fa-trash"></i></a>--}}
                        {{--@include('admin.partials.toggle',[--}}
                            {{--'route' => 'admin.module.toggle',--}}
                            {{--'element' => $--}}
                        {{--])--}}
                    </td>
                </tr>
            <tr class="{{ !$item->active ? 'text-muted' : ''}}">
                <th></th>
                <td colspan="3">
                    @if($item->element->module->active)
                        {!!  $render->preview($item->element->module_id, $item->element->row)  !!}
                    @else
                        <b>No preview Specified.</b>
                    @endif
                </td>
            </tr>
        @endforeach
    </div>


@endsection