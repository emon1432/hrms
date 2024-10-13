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
            case 'admin':
                $home = '/admin/dashboard';
                break;
            case 'organization':
                $home = '/organization/dashboard';
                break;
            case 'employee':
                $home = '/employee/dashboard';
                break;
            case 'candidate':
                $home = '/my-dashboard';
                break;
            default:
                $home = RouteServiceProvider::HOME;
                break;
        }
        return redirect()->intended($home);
    }
}
