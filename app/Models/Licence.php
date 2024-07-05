<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Licence
 *
 * @property $id
 * @property $name
 * @property $Section
 * @property $ufr
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Licence extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['name', 'Section', 'ufr'];


}
