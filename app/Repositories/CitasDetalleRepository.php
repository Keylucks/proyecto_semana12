<?php

namespace App\Repositories;

use App\Models\CitasDetalle;
use App\Repositories\BaseRepository;

/**
 * Class CitasDetalleRepository
 * @package App\Repositories
 * @version October 28, 2021, 12:35 am UTC
*/

class CitasDetalleRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id_cita'
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
        return CitasDetalle::class;
    }
}
