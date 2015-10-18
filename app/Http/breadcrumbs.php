<?php


// Dashboard
Breadcrumbs::register('dashboard', function($breadcrumbs)
{
    $breadcrumbs->push('Dashboard', route('admin.index'), ['icon' => 'dashboard']);
});


// Dashboard > Site structure
Breadcrumbs::register('node', function($breadcrumbs)
{
    $breadcrumbs->parent('dashboard');
    $breadcrumbs->push('Site Structure', route('admin.node.index'), ['icon' => 'indent']);
});


// Dashboard > Module
Breadcrumbs::register('module', function($breadcrumbs)
{
    $breadcrumbs->parent('dashboard');
    $breadcrumbs->push('Modules', route('admin.module.index'), ['icon' => 'cubes']);
});


// Dashboard > Element
Breadcrumbs::register('element', function($breadcrumbs)
{
    $breadcrumbs->parent('dashboard');
    $breadcrumbs->push('Element', route('admin.element.index'), ['icon' => 'puzzle-piece']);
});


// Dashboard > Element > Create
Breadcrumbs::register('element-create', function($breadcrumbs)
{
    $breadcrumbs->parent('element');
    $breadcrumbs->push('Create Element', route('admin.element.create'), ['icon' => 'plus-circle']);
});


// Dashboard > Element > Edit
Breadcrumbs::register('element-edit', function($breadcrumbs)
{
    $breadcrumbs->parent('element');
    $breadcrumbs->push('Edit Element', route('admin.element.edit'), ['icon' => 'edit']);
});



