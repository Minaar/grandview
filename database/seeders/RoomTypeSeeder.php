<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('room_types')->insert([
            'name' => 'Delux',
            'description' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('room_types')->insert([
            'name' => 'Couple',
            'description' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('room_types')->insert([
            'name' => 'Single',
            'description' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
