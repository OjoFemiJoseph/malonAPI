<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jobs extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','job_title','job_type','work_conditions','job_categories','job_descriptions'];

    public function job_type()
    {
        $this->hasOne(job_type::class);
    }

    public function work_conditions()
    {
        $this->hasOne(work_conditions::class);
    }

    public function job_categories()
    {
        $this->hasOne(job_categories::class);
    }

}
