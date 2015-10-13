

@extends('admin.master')

@section('title', 'Create Element')
@section('subheading', '')

@section('breadcrumbs')
    {!! Breadcrumbs::render('element-create') !!}
@endsection


@section('content')


    <div class="col-lg-12">
        @include('admin.element.partials.form', [
            'route' => array('admin.element.store', $id),
            'items' => $modules,
            'btn' => 'Create Item',
            'model' => null
        ])
    </div>

@endsection

@section('script')
    <script>
        $(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-Token' : '{{ csrf_token() }}'
                }
            });

            $.ajax({
                url: "{{route('admin.module.create', 1) }}",
                type: "get",
                cache: false,
                {{--data: { '_token': "{{ csrf_token() }}" },--}}
                success:function(data){
                    $('.page-header small').html(data.name);

                    $('#partial').html(data.partial);

                    console.log(data.partial);

                },error:function(e){
                   console.log(e);
                }
            }, 'html'); //end of ajax

            });

    </script>


@endsection