<div class="row">
    <div class="col-md-6">
        @include('assets::partials.form.text', [
            'name' => 'css_id',
            'label' => 'CSS Id:',
            'params' => [
                'class' => 'form-control'
            ]
        ])
    </div>
    <div class="col-md-6">
        @include('assets::partials.form.text', [
            'name' => 'css_class',
            'label' => 'CSS Class:',
            'params' => [
                'class' => 'form-control'
            ]
        ])
    </div>
</div>