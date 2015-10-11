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