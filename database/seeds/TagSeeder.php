<?php

use Illuminate\Database\Seeder;
use Faker\Generator;
use Illuminate\Support\Facades\DB;
class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Generator $generator)
    {
        DB::table('tags')->truncate();
        for($i=0;$i<50;$i++){
            DB::table('tags')->insert([
                'article_id' => mt_rand(1,20),
                'title' => $generator->title,
                'created_at' => $generator->dateTime,
                'updated_at' => $generator->dateTime
            ]);
        }
    }
}
