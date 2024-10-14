<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'organization_id',
        'category_name',
        'slug',
        'status',
        'image',
        'created_by',
        'updated_by',
    ];

    public function organization()
    {
        return $this->belongsTo(Organization::class);
    }

    //has many designation
    public function employeeDesignation()
    {
        return $this->hasMany(EmployeeDesignation::class);
    }

    public function job()
    {
        return $this->hasMany(Job::class);
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

