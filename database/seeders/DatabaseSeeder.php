<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\Severity;
use App\Models\OrgaGroup as ModelsOrgaGroup;

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

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Severity::truncate();
            
        for($i = 1; $i <=15; $i++){

            Severity::create([
                'level' => $i,
                'label' => 'Severity ' .$i
            ]);
        }

        
        $init_grps = [
            'JUH LV HH',
            'JUH RV HH',
            'JUH OG Osdf',
            'JUH OG Alst',
            'JUH OG Bgdf',
            'DRK LV HH',
            'DRK KV 10',
            'DRK KV 20',
            'DRK KV 30',
            'DRK KV 40',
            'DRK KV 50',
            'DRK KV 60',
            'MHD Hmbg',
            'ASB Hmbg',
            'DLRG',
            'misc',
        ];

        foreach($init_grps as $grp){
            $att = [
                'name' => $grp,
            ];
            ModelsOrgaGroup::create($att);
        }
    }
}
