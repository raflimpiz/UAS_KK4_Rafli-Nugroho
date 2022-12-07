<?php

namespace Database\Seeders;

use App\Models\Shoe;
use Illuminate\Database\Seeder;

class ShoeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (Shoe::count() == 0) {
            Shoe::factory(10)->create();
        }
    }
}
