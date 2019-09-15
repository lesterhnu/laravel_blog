<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\DB;
class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        DB::table('articles')->truncate();
        for ($i=0;$i<20;$i++){
            DB::table('articles')->insert([
                'title' => $faker->name,
                'author' => $faker->name,
                'sub_title' => $faker->address,
                'content' => $faker->year,
                'created_at' => $faker->dateTime,
                'updated_at' => $faker->dateTime
            ]);
        }
    }
}
