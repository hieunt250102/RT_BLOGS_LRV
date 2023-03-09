<?php

namespace App\Services;

use App\Interfaces\UserServiceInterface;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserService implements UserServiceInterface
{
    public function getAll()
    {
        return User::all();
    }

    public function createUser($request)
    {
        return User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'token_verify' => bin2hex(random_bytes(30)),
        ]);
    }


    public function findUserWithConditions($column, $operator = null, $value = null)
    {
        return  User::where($column, $operator, $value)->first();
    }

    public function findUsersWithConditions($column, $operator = null, $value = null)
    {
        return  User::where($column, $operator, $value)->get();
    }

    public function updateUser($id, $request)
    {
        $user = $this->findUserWithConditions('id', $id);
        if ($user) {
            $user->update($request);
            return $user;
        }

        return false;
    }
}
