<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * These fields can be filled by user
     *
     * @var array
     */
    protected $fillable = ['first_name', 'last_name', 'is_active'];

    /**
     * Convert is_active field to boolean type
     *
     * @var array
     */
    protected $casts = [
        'is_active' => 'boolean'
    ];

    /**
     * This method return hasMany relationship from users to cars table
     *
     * @return mixed
     */
    public function car()
    {
        return $this->hasMany('App\Entity\Car');
    }
}
