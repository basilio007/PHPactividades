<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\pokemon;
use App\Models\User;

class pokmonseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    User::factory()->count(10)->create();   //
    }
}