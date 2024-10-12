<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'job_category_id',
        'organization_id',
        'location',
        'vacancy',
        'experience',
        'gender',
        'salary_from',
        'salary_to',
        'deadline',
        'type',
        'status',
        'slug',
        'description',
    ];


    public function jobCategory()
    {
        return $this->belongsTo(JobCategory::class);
    }

    public function organization()
    {
        return $this->belongsTo(Organization::class);

    }



}
