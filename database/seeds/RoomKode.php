<?php

use Illuminate\Database\Seeder;

class RoomKode extends Seeder
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
            'kode' => 1223,
        ]);
    }
}
