<?php

namespace App\Repositories;

use App\Models\Agenda;
use App\Repositories\BaseRepository;

/**
 * Class AgendaRepository
 * @package App\Repositories
 * @version September 10, 2022, 1:24 am UTC
*/

class AgendaRepository extends BaseRepository
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
        return Agenda::class;
    }
}
