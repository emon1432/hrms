<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'organization_id',
        'category_id',
        'location',
        'vacancy',
        'experience',
        'gender',
        'salary_from',
        'salary_to',
        'deadline',
        'type',
        'status',
        'description',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function organization()
    {
        return $this->belongsTo(Organization::class);
    }
}
