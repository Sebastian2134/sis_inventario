<?php

namespace App\Repositories;

use App\Models\categorias;
use App\Repositories\BaseRepository;

/**
 * Class categoriasRepository
 * @package App\Repositories
 * @version June 15, 2020, 5:58 pm UTC
*/

class categoriasRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'descripcion'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return categorias::class;
    }
}
