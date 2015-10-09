
@include('partials.form.open', [
    'route' => $route,
    'model' => $model
])

@include('partials.form.text', [
    'label' => 'Name: ',
    'name' => 'name',
    'params' => [
        'placeholder' => 'Page Name..',
        'class' => 'form-control'
    ]
])

@include('partials.form.text', [
    'label' => 'Slug:',
    'name' => 'slug',
    'params' => [
        'placeholder' => 'Page Name..',
        'class' => 'form-control'
    ]
])

@include('partials.form.hidden', [
    'name' => 'parent',
    'value' => $parent
])

<hr>
<div class="row">
    <div class="col-md-6">
        @include('partials.form.text', [
            'label' => 'CSS ID:',
            'name' => 'css_id',
            'params' => [
                'class' => 'form-control'
            ]
        ])
    </div>
    <div class="col-md-6">
        @include('partials.form.text', [
            'label' => 'CSS Class:',
            'name' => 'css_class',
            'params' => [
                'class' => 'form-control'
            ]
        ])
    </div>
</div>

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

