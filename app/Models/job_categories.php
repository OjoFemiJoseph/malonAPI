<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class job_categories extends Model
{
    use HasFactory;

    protected $fillable = ['name'];
    
    public $timestamps = false;


    public function jobs()
    {
        $this->belongsTo(jobs::class);
    }

}
