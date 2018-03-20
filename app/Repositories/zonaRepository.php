<?php

namespace App\Repositories;

use App\Models\zona;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class zonaRepository
 * @package App\Repositories
 * @version March 19, 2018, 8:12 pm UTC
 *
 * @method zona findWithoutFail($id, $columns = ['*'])
 * @method zona find($id, $columns = ['*'])
 * @method zona first($columns = ['*'])
*/
class zonaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'zona',
        'descripcion'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return zona::class;
    }
}
