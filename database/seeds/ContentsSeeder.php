<?php

use Illuminate\Database\Seeder;

class ContentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('contents')->insert([
            'node_id' => 4,
            'element_id' => 1,
            'order' => 1,
            'active' => true,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('contents')->insert([
            'node_id' => 4,
            'element_id' => 2,
            'order' => 2,
            'active' => true,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('contents')->insert([
            'node_id' => 4,
            'element_id' => 3,
            'order' => 3,
            'active' => true,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('contents')->insert([
            'node_id' => 4,
            'element_id' => 4,
            'order' => 4,
            'active' => true,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
    }
}
