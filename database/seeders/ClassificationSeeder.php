<?php

namespace Database\Seeders;

use App\Models\InfluencerClassification;
use Illuminate\Database\Seeder;

class ClassificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
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
