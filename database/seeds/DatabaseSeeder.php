<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();


        $this->call(NodesSeeder::class);
        $this->call(ModuleSeeder::class);
        $this->call(ElementsSeeder::class);
        $this->call(ContentsSeeder::class);

        // $this->call(UserTableSeeder::class);

        Model::reguard();
    }
}
