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
        'designation_id',
        'first_name',
        'last_name',
        'email',
        'phone',
        'join_date',
        'salary',
        'image',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function organization()
    {
        return $this->belongsTo(Organization::class);
    }

    public function designation()
    {
        return $this->belongsTo(Designation::class);
    }
}
