<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\work_conditions;

class WorkConditionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = ['Remote','Part Remote','On-Premises'];

        foreach ($types as $type)
        {
            work_conditions::create([
            
                'name'=> $type,
            ]
            );
        }
    }
}
