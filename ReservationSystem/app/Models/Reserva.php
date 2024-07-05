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
 * @property $typeLab
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
     * Los atributos que se pueden asignar.
     *
     * @var array<int, string>
     */
    protected $fillable = ['name', 'numIdenti', 'userType', 'typeLab', 'area', 'dateSolicitud', 'dateInicio', 'dateFin', 'observacion'];

}


// Este es el modelo que utiliza el controller para indicar que campos son de ingreso.