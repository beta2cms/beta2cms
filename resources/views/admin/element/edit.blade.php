
@extends('admin.master')

@section('title', 'Edit Element')
@section('subheading', '')

@section('breadcrumbs')
    {!! Breadcrumbs::render('element-edit') !!}
@endsection


@section('content')

    <div class="col-lg-12">
        @if($errors->any())

            <ul>
                @foreach($errors as $error)
                    <li>{{$error->first()}}</li>
                @endforeach
            </ul>
        @endif
    </div>

    <div class="col-lg-12">
        @include('admin.element.partials.form', [
            'route' => 'admin.element.update',
            'items' => $modules,
            'btn' => 'Update Item',
            'model' => $model,
            'select_disabled' => true
        ])
    </div>

@endsection
