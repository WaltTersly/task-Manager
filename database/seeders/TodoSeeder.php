<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Todos;

class TodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Todos::factory()->count(10)->create();


    }
}
