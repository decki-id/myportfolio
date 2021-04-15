<?php

namespace App\Repositories;

use App\Models\SisdeckClassAssigning;
use App\Repositories\BaseRepository;

/**
 * Class SisdeckClassAssigningRepository
 * @package App\Repositories
 * @version April 15, 2021, 8:37 am WIB
*/

class SisdeckClassAssigningRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'course_id',
        'level_id',
        'shift_id',
        'classroom_id',
        'batch_id',
        'day_id',
        'time_id'
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
        return SisdeckClassAssigning::class;
    }
}
