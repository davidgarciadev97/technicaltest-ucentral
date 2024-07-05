<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Reserva
 *
 * @property $id
 * @property $name
 * @property $numIdenti
 * @property $userType
 * @property $area
 * @property $dateSolicitud
 * @property $dateInicio
 * @property $dateFin
 * @property $observacion
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Reserva extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['name', 'numIdenti', 'userType', 'area', 'dateSolicitud', 'dateInicio', 'dateFin', 'observacion'];


}
