<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Designation extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
    ];

    public function employees()
    {
        //where organization_id is the foreign key of the organization table
        return $this->hasMany(Employee::class, 'designation_id', 'id')->where('organization_id', auth()->user()->organization->id);
    }



}
