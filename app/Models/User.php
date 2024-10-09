<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use Notifiable;
    use TwoFactorAuthenticatable;

    protected $fillable = [
        'role',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function admin()
    {
        return $this->hasOne(Admin::class);
    }

    public function candidate()
    {
        return $this->hasOne(Candidate::class);
    }

    public function employee()
    {
        return $this->hasOne(Employee::class);
    }

    public function organization()
    {
        return $this->hasOne(Organization::class);
    }

    public function details()
    {
        switch ($this->role) {
            case 'admin':
                return $this->admin;
                break;
            case 'candidate':
                return $this->candidate;
                break;
            case 'employee':
                return $this->employee;
                break;
            case 'organization':
                return $this->organization;
                break;
            default:
                return null;
                break;
        }
    }
}
