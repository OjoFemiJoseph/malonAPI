<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\job_categories;

class JobCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = ['Tech','Health Care','Hospitality','Customer Service','Marketing'];

        foreach ($types as $type)
        {
            job_categories::create([
            
                'name'=> $type,
            ]
            );
        }
    }
}
