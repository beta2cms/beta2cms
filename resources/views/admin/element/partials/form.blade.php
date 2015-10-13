
@include('partials.form.open', [
    'route' => $route,
    'model' => $model
])

@include('partials.form.select', [
    'label' => 'Module: ',
    'name' => 'module',
    'items' => $items,
    'params' => [
        'placeholder' => 'Choose a Module..',
        'class' => 'form-control'
    ]
])


{{--@include('partials.form.hidden', [--}}
    {{--'name' => 'node_id',--}}
    {{--'value' => $node--}}
{{--])--}}

<hr>
<div id="partial"></div>
<hr>


@include('partials.form.checkbox', [
    'label' => 'Active',
    'name' => 'active',
    'select' =>  false
])

@include('partials.form.submit', [
    'label' => $btn,
    'params' => [
        'class' => 'btn btn-default'
    ]
])

@include('partials.form.close')

