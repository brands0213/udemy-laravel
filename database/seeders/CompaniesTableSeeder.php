<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;


class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies')->truncate();
        
        $companies = [];
        $Faker = Faker::create();

        foreach (range(1, 10) as $index)
        {
            $companies[] = [
                    'name' => $Faker->company(),
                    'address' => $Faker->address(),
                    'Website' => $Faker->domainName(),
                    'email' => $Faker->email(),
                    'created_at' => now(),
                    'updated_at' => now()
            ];


        }

        DB::table('companies')->insert(($companies));
    }
}
