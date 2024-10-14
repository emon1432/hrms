<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'organization_id',
        'first_name',
        'last_name',
        'email',
        'phone',
        'image',
        'salary',
        'designation',
        'join_date',
        'created_by',
        'updated_by',
        'view_count',
    ];

    public function employeeDesignation()
    {
        return $this->belongsTo(EmployeeDesignation::class);
    }


}
