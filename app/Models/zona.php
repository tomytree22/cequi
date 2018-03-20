<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class zona
 * @package App\Models
 * @version March 19, 2018, 8:12 pm UTC
 *
 * @property string zona
 * @property string descripcion
 */
class zona extends Model
{
    use SoftDeletes;

    public $table = 'zonas';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'zona',
        'descripcion'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'zona' => 'string',
        'descripcion' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'zona' => 'required',
        'descripcion' => 'required'
    ];

    
}
