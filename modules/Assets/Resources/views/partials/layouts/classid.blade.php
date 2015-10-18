<div class="row">
    <div class="col-md-6">
        @include('assets::partials.form.text', [
            'name' => 'css_id',
            'label' => 'CSS Id:',
            'params' => [
                'class' => 'form-control'
            ],
            'suggest' => isset($suggest_id) ? $suggest_id : null
        ])
    </div>
    <div class="col-md-6">
        @include('assets::partials.form.text', [
            'name' => 'css_class',
            'label' => 'CSS Class:',
            'params' => [
                'class' => 'form-control'
            ],
            'suggest' => isset($suggest_class) ? $suggest_class : null
        ])
    </div>
</div>