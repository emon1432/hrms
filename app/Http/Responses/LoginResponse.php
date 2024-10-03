<?php

namespace App\Http\Responses;

use App\Providers\RouteServiceProvider;
use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;

class LoginResponse implements LoginResponseContract
{
    public function toResponse($request)
    {
        $home = RouteServiceProvider::HOME;
        switch (auth()->user()->role) {
            case 'super-admin':
                $home = '/super-admin/dashboard';
                break;
            case 'organization':
                $home = '/organization/dashboard';
                break;
            case 'employee':
                $home = '/employee/dashboard';
                break;
            case 'job-seeker':
                $home = '/job-seeker/dashboard';
                break;
            default:
                $home = RouteServiceProvider::HOME;
                break;
        }
        return redirect()->intended($home);
    }
}
