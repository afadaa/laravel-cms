<?php

namespace App\Repositories;

use App\Models\Slide;
use App\Repositories\BaseRepository;

/**
 * Class SlideRepository
 * @package App\Repositories
 * @version September 11, 2022, 3:11 am UTC
*/

class SlideRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'tittle',
        'thumbnail',
        'status'
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
        return Slide::class;
    }
}
