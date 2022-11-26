<?php

namespace Database\Seeders;

use App\Models\Severity as ModelsSeverity;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Severity extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i<15; $i++){
            $att = [
                'level'=> $i,
                'label'=> "Severity ". $i
            ];
            ModelsSeverity::create($att);
            
        }
        
    }
}
