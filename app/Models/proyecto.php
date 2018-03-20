<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class proyecto
 * @package App\Models
 * @version March 20, 2018, 4:18 pm UTC
 *
 * @property string nombre
 * @property integer idZona
 * @property string descripcion
 * @property string presupuesto
 * @property date fechaInicio
 * @property date fechaFin
 */
class proyecto extends Model
{
    use SoftDeletes;

    public $table = 'proyectos';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'nombre',
        'idZona',
        'descripcion',
        'presupuesto',
        'fechaInicio',
        'fechaFin'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nombre' => 'string',
        'idZona' => 'integer',
        'descripcion' => 'string',
        'presupuesto' => 'string',
        'fechaInicio' => 'date',
        'fechaFin' => 'date'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required',
        'idZona' => 'required',
        'descripcion' => 'required',
        'presupuesto' => 'required',
        'fechaInicio' => 'required',
        'fechaFin' => 'required'
    ];

    
}
