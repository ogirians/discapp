<?php

use Illuminate\Database\Seeder;

class kode_room extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         DB::table('room')->insert([
            'kode' => 123,
        ]);
    }
}
