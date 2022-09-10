<?php

namespace App\Repositories;

use App\Models\Pengumuman;
use App\Repositories\BaseRepository;

/**
 * Class PengumumanRepository
 * @package App\Repositories
 * @version September 10, 2022, 1:25 am UTC
*/

class PengumumanRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'tittle',
        'desc'
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
        return Pengumuman::class;
    }
}
