<?php

namespace App\Repositories;

use App\Models\Doctor;
use App\Repositories\BaseRepository;

/**
 * Class DoctorRepository
 * @package App\Repositories
 * @version October 28, 2021, 12:36 am UTC
*/

class DoctorRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'ape_nom',
        'dni',
        'especialidad'
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
        return Doctor::class;
    }
}
