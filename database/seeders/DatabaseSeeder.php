<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**

     *
     * @return void
     */
    public function run()
    {
        $this->call([
            ComicsTableSeeder::class
        ]);
    }
}
