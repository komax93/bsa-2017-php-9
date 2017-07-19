<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'cars';

    /**
     * These fields can be filled by user
     *
     * @var array
     */
    protected $fillable = ['color', 'model', 'registration_number', 'year', 'mileage', 'price', 'user_id'];

    /**
     * These fields can't be filled by user
     *
     * @var array
     */
    protected $guarded = ['id'];

    /**
     * This method return belongsTo relationship from cars to users table
     *
     * @return mixed
     */
    public function user()
    {
        return $this->belongTo('App\Entity\User');
    }
}