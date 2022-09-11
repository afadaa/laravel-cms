<?php

namespace App\Repositories;

use App\Models\Galeri;
use App\Repositories\BaseRepository;

/**
 * Class GaleriRepository
 * @package App\Repositories
 * @version September 10, 2022, 4:39 am UTC
*/

class GaleriRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'tittle',
        'photo'
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
        return Galeri::class;
    }
}
