<?php

namespace App\Interfaces;

interface UserServiceInterface
{

    public function getAll();

    public function createUser($request);

    public function updateUser($user, $request);

    public function findUserWithConditions($column, $operator = null, $value = null);

    public function findUsersWithConditions($column, $operator = null, $value = null);
}
