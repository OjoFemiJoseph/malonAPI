<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\job_type;


class JobTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = ['Full Time','Temporary','Contract','Permanent','Internship','Volunteer'];

        foreach ($types as $type)
        {
            job_type::create([
            
                'name'=> $type
            ]
            );
        }
    }
}
