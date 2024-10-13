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
        'created_by',
        'updated_by',
        'view_count',
    ];


    public function jobCategory()
    {
        return $this->belongsTo(JobCategory::class);
    }

    public function organization()
    {
        return $this->belongsTo(Organization::class);

    }

    public function createdBy()
    {
        return $this->belongsTo(Organization::class, 'created_by');
    }

    public function updatedBy()
    {
        return $this->belongsTo(Organization::class, 'updated_by');
    }


}
