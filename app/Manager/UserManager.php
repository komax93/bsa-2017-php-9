<?php

namespace App\Manager;


use App\Entity\User;
use App\Manager\Contract\UserManager as UserManagerContract;
use App\Request\Contract\SaveUserRequest;
use Illuminate\Support\Collection;

class UserManager implements UserManagerContract
{
    public function findAll(): Collection
    {
        // TODO: Implement findAll() method.
    }

    public function findById(int $id)
    {
        // TODO: Implement findById() method.
    }

    public function findActive(): Collection
    {
        // TODO: Implement findActive() method.
    }

    public function saveUser(SaveUserRequest $request): User
    {
        // TODO: Implement saveUser() method.
    }

    public function deleteUser(int $userId)
    {
        // TODO: Implement deleteUser() method.
    }

}