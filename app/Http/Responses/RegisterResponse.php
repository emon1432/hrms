<?php

namespace App\Http\Responses;

use Illuminate\Http\JsonResponse;
use Laravel\Fortify\Contracts\RegisterResponse as Response;

class RegisterResponse implements Response
{
    public function toResponse($request)
    {
        // return $request->wantsJson()
        //     ? new JsonResponse('', 201)
        //     : ($request->user()->role == 'candidate'
        //         ? redirect()->route('candidate.dashboard')
        //         : redirect()->route('home.index'));
        if ($request->wantsJson()) {
            return new JsonResponse('', 201);
        } else {
            if ($request->user()->role == 'candidate') {
                return redirect()->route('candidate.dashboard');
            } else {
                notify()->success('Registration successful! Please wait for admin approval.');
                return redirect()->route('home.index');
            }
        }
    }
}
