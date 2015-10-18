<div class="div  animated fadeInRight">
<div class="row">
    <div class="col-md-2">
        @include('assets::partials.form.select', [
        'name' => 'tag',
        'label' => 'Tag:',
        'params' => [
            'class' => 'form-control',
            'placeholder' => 'Heading',
        ],
        'suggest' => 'h1',
        'items' => array(
           'h1' =>'h1',
           'h2' =>'h2',
           'h3' =>'h3',
           'h4' =>'h4',
           'h5' =>'h5',
           'h6' =>'h6',
            )
        ])

    </div>
    <div class="col-md-10">
        @include('assets::partials.form.text', [
            'name' => 'title',
            'label' => 'Heading:',
            'params' => [
            'class' => 'form-control',
            'placeholder' => ''
            ]])
    </div>
</div>

@include('assets::partials.layouts.classid')

</div>


