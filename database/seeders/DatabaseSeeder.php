<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\InfluencerClassification;
use Database\Seeders\ClassificationSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $array = ['Fake','Hijab','openMind','hasAny','Add New','share Post'];
        foreach($array as $arr){
         InfluencerClassification::create([
             'name'=>$arr,
             'status'=>1,
         ]);
        }
    }
}
