<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PassengerSeeder extends Seeder
{
    public function run()
    {
        DB::table('passengers')->insert([
            ['name' => 'Juan', 'lastname' => 'Perez', 'date_of_birth' => '1990-05-15', 'ci' => '12345678', 'phone_number' => '789123456'],
            ['name' => 'Maria', 'lastname' => 'Gomez', 'date_of_birth' => '1985-08-20', 'ci' => '87654321', 'phone_number' => '987654321'],
        ]);
    }
}
