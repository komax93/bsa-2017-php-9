<?php

namespace App\Manager;


use App\Entity\User;
use App\Manager\Contract\UserManager as UserManagerContract;
use App\Request\Contract\SaveUserRequest;
use Illuminate\Support\Collection;

class UserManager implements UserManagerContract
{
    /**
     * Find All Users
     *
     * @return Collection
     */
    public function findAll(): Collection
    {
        // TODO: Implement findAll() method.
    }

    /**
     * Get User model by ID
     *
     * @param int $id
     * @return User|null
     */
    public function findById(int $id)
    {
        // TODO: Implement findById() method.
    }

    /**
     * Find Users that has is_active flag true
     *
     * @return Collection
     */
    public function findActive(): Collection
    {
        // TODO: Implement findActive() method.
    }

    /**
     * Create or Update User
     *
     * @param SaveUserRequest $request
     * @return User
     */
    public function saveUser(SaveUserRequest $request): User
    {
        // TODO: Implement saveUser() method.
    }

    /**
     * Delete User By ID
     *
     * @param int $userId
     * @return void
     */
    public function deleteUser(int $userId)
    {
        // TODO: Implement deleteUser() method.
    }

}