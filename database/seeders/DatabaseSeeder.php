<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('investors')->insert([
            'investor_name'=>"The Cool Company",
            'investor_description'=>"We give money to the coolest businesses around",
            'investor_email'=>"coolco@coolcool.com",
            'investor_link'=>"https://platform.gotechnica.org/project",
        ]);

        DB::table('investors')->insert([
            'investor_name'=>"Generous Money Peeps",
            'investor_description'=>"Please take our money if you have a great business idea",
            'investor_email'=>"moneymoneymoney@hotmail.com",
            'investor_link'=>"https://github.com/anatron/wib",
        ]);

        DB::table('investors')->insert([
            'investor_name'=>"Dragon Theo Pafetus",
            'investor_description'=>"I'm that dude form Dragons Den, I want to see your business to see if it is worth investing.",
            'investor_email'=>"fetus@gmail.com",
            'investor_link'=>"https://laravel.com/docs/8.x/seeding",
        ]);
    }
}
