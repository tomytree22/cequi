<?php

namespace App\Repositories;

use App\Models\proyecto;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class proyectoRepository
 * @package App\Repositories
 * @version March 20, 2018, 4:18 pm UTC
 *
 * @method proyecto findWithoutFail($id, $columns = ['*'])
 * @method proyecto find($id, $columns = ['*'])
 * @method proyecto first($columns = ['*'])
*/
class proyectoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'idZona',
        'descripcion',
        'presupuesto',
        'fechaInicio',
        'fechaFin'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return proyecto::class;
    }
}
