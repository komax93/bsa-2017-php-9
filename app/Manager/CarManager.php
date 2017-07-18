<?php

namespace App\Manager;


use App\Entity\Car;
use App\Manager\Contract\CarManager as CarManagerContract;
use App\Request\Contract\SaveCarRequest;
use Illuminate\Support\Collection;

class CarManager implements CarManagerContract
{
    /**
     * Find all Cars
     *
     * @return Collection
     */
    public function findAll(): Collection
    {
        // TODO: Implement findAll() method.
    }

    /**
     * Find Car by ID
     *
     * @param int $id
     * @return Car|null
     */
    public function findById(int $id)
    {
        // TODO: Implement findById() method.
    }

    /**
     * Find Cars that belongs only to active users
     *
     * @return Collection
     */
    public function findCarsFromActiveUsers(): Collection
    {
        // TODO: Implement findCarsFromActiveUsers() method.
    }

    /**
     * Create or Update Car
     *
     * @param SaveCarRequest $request
     * @return Car
     */
    public function saveCar(SaveCarRequest $request): Car
    {
        // TODO: Implement saveCar() method.
    }

    /**
     * Delete Car by ID
     *
     * @param int $carId
     * @return void
     */
    public function deleteCar(int $carId)
    {
        // TODO: Implement deleteCar() method.
    }
}