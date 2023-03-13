<?php

namespace App\Services;

use App\Interfaces\UserServiceInterface;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserService implements UserServiceInterface
{
    public function getAll()
    {
        try {
            return User::select('id', 'name', 'email', 'password', 'avatar', 'token_verify', 'role', 'status')
                ->orderBy('updated_at', 'DESC')
                ->paginate(5);
        } catch (\Exception $e) {
            throw new \Exception('Unable to insert user to database', 500);
        }
    }

    public function createUser($request)
    {
        try {
            return User::create([
                'name' => $request['name'],
                'email' => $request['email'],
                'password' => Hash::make($request['password']),
                'token_verify' => bin2hex(random_bytes(30)),
            ]);
        } catch (\Exception $e) {
            throw new \Exception('Unable to insert user to database', 500);
        }
    }


    public function findUserWithConditions($column, $operator = null, $value = null)
    {
        try {
            return  User::where($column, $operator, $value)->first();
        } catch (\Exception $e) {
            throw new \Exception('Cannot find user', 500);
        }
    }

    public function findUsersWithConditions($column, $operator = null, $value = null)
    {
        try {
            return User::where($column, $operator, $value)->get();
        } catch (\Exception $e) {
            throw new \Exception('Cannot find user', 500);
        }
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
