<?php namespace Modules\Heading\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class HeadingTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('heading')->insert([
            'tag' => 'h1',
            'title' => 'Test:  Heading 01',
            'css_id' => '',
            'css_class' => '',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('heading')->insert([
            'tag' => 'h2',
            'title' => 'Test: Heading 02',
            'css_id' => '',
            'css_class' => '',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('heading')->insert([
            'tag' => 'h4',
            'title' => 'Test: Heading 03',
            'css_id' => '',
            'css_class' => '',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
    }

}
