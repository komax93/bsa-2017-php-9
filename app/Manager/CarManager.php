<?php

namespace App\Manager;


use App\Entity\Car;
use App\Manager\Contract\CarManager as CarManagerContract;
use App\Request\Contract\SaveCarRequest;
use Illuminate\Support\Collection;

class CarManager implements CarManagerContract
{
    public function findAll(): Collection
    {
        // TODO: Implement findAll() method.
    }

    public function findById(int $id)
    {
        // TODO: Implement findById() method.
    }

    public function findCarsFromActiveUsers(): Collection
    {
        // TODO: Implement findCarsFromActiveUsers() method.
    }

    public function saveCar(SaveCarRequest $request): Car
    {
        // TODO: Implement saveCar() method.
    }

    public function deleteCar(int $carId)
    {
        // TODO: Implement deleteCar() method.
    }

}