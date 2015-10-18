
@extends('admin.master')

@section('title', 'Create Element')
@section('subheading', '')

@section('breadcrumbs')
    {!! Breadcrumbs::render('element-create') !!}
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
            'route' => array('admin.element.store', $id),
            'items' => $modules,
            'btn' => 'Create Item',
            'model' => null
        ])
    </div>

@endsection

@section('script')
    {{--TODO: Refactor,--}}
    <script>
        $(function() {

            loadModule();

            @if($errors->any())
                displayErrors( {!!   $errors->toJSON() !!} );
            @endif

            $("#module").on('change', function() {
                loadModule();
            });

            $.ajaxSetup({
                headers: {
                    'X-CSRF-Token' : '{{ csrf_token() }}'
                }
            });

            function loadModule()
            {
                var value = $("#module").val();

                $.ajax({
                    url: "{{ url('/admin/module/partial') }}/" + value + "/create" ,
                    type: "get",
                    cache: false,
                    success: function(data){

                        $('.page-header small').html(data.name);

                        $('#partial').html(data.partial);

                    },error: function(e){
                        console.log(e);
                    }
                }, 'html');
            }

            function displayErrors(errors)
            {
                console.log(errors);
            }
        });



    </script>


@endsection