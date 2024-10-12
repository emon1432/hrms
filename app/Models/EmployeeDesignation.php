<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeDesignation extends Model
{
    use HasFactory;

    protected $fillable = [
        'organization_id',
        'job_category_id',
        'designation_name',
        'slug',
        'status',
        'image',
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
