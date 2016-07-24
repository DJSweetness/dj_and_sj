<?php

use Illuminate\Database\Seeder;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->insert([
            'name' => 'elephant',
            'path' => 'images/elephant.jpg',
            'price' => '20.00'
        ]);
    }
}
