<?php

namespace App\Repositories;

use App\Models\Announcement;
use App\Repositories\BaseRepository;

/**
 * Class AnnouncementRepository
 * @package App\Repositories
 * @version September 11, 2022, 3:11 am UTC
*/

class AnnouncementRepository extends BaseRepository
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
        return Announcement::class;
    }
}
