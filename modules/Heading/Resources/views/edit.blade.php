<<<<<<< HEAD
<div class="row">
    <div class="col-md-2">
@include('assets::partials.form.select', [
'name' => 'tag',
'label' => 'Tag:',
'params' => [
    'class' => 'form-control',
    'placeholder' => 'Heading',
],
'suggest' => $item->tag,
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
        'suggest' => $item->title,
        'params' => [
            'class' => 'form-control',
            'placeholder' => ''
        ]])
</div>
</div>

@include('assets::partials.layouts.classid',[
     'suggest_id' => $item->css_id,
     'suggest_class' => $item->css_class
     ])


=======
<?php
/**
 * Created by IntelliJ IDEA.
 * User: simongyimah
 * Date: 16/10/15
 * Time: 00:33
 */
>>>>>>> User-profile
