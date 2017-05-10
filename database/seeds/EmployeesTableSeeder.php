<?php

use Illuminate\Database\Seeder;

class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('employees')->insert([
            'first_name' => str_random(10),
            'last_name' => str_random(10),
            'email' => str_random(10),
            'job' => str_random(10)
        ]);
    }
}
