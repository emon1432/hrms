<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    public function create(array $input): User
    {
        if ($input['role'] == 'candidate') {
            Validator::make($input, [
                'first_name' => ['required', 'string', 'max:255'],
                'last_name' => ['required', 'string', 'max:255'],
                'phone' => ['required', 'string', 'max:255'],
            ])->validate();
        } else if ($input['role'] == 'organization') {
            Validator::make($input, [
                'organization_name' => ['required', 'string', 'max:255'],
                'organization_type' => ['required', 'string', 'max:255'],
                'phone' => ['required', 'string', 'max:255'],
            ])->validate();
        }

        Validator::make($input, [
            'role' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'terms' => ['required', 'accepted'],
        ])->validate();

        $user = User::create([
            'role' => $input['role'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
        ]);

        //store data in respective tables
        if ($input['role'] == 'candidate') {
            $user->candidate()->create([
                'first_name' => $input['first_name'],
                'last_name' => $input['last_name'],
                'email' => $input['email'],
                'phone' => $input['phone'],
            ]);
        } else if ($input['role'] == 'organization') {
            $user->organization()->create([
                'name' => $input['organization_name'],
                'slug' => $input['organization_name'],
                'type' => $input['organization_type'],
                'email' => $input['email'],
                'phone' => $input['phone'],
            ]);
        }


        return $user;
    }
}
