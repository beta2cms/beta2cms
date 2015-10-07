<?php

use Illuminate\Database\Seeder;

class PagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pages')->insert([
            'name' => 'Header',
            'slug' => 'header',
            'parent_id' => null,
            'order' => 1,
            'visible' => true,
            'css_id' => '',
            'css_class' => '',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('pages')->insert([
            'name' => 'Main',
            'slug' => 'main',
            'parent_id' => null,
            'order' => 2,
            'visible' => true,
            'css_id' => '',
            'css_class' => '',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('pages')->insert([
            'name' => 'Footer',
            'slug' => 'footer',
            'parent_id' => null,
            'order' => 3,
            'visible' => true,
            'css_id' => '',
            'css_class' => '',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        // ------------

        DB::table('pages')->insert([
            'name' => 'Home',
            'slug' => 'home',
            'parent_id' => 2,
            'order' => 1,
            'visible' => true,
            'css_id' => '',
            'css_class' => '',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('pages')->insert([
            'name' => 'About',
            'slug' => 'about',
            'parent_id' => 2,
            'order' => 2,
            'visible' => true,
            'css_id' => '',
            'css_class' => '',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);


    }
}
