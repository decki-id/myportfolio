<?php

namespace App\Repositories;

use App\Models\SisdeckClassScheduling;
use App\Repositories\BaseRepository;

/**
 * Class SisdeckClassSchedulingRepository
 * @package App\Repositories
 * @version April 15, 2021, 9:53 am WIB
*/

class SisdeckClassSchedulingRepository extends BaseRepository
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
        'time_id',
        'teacher_id',
        'start_time',
        'end_time',
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
        return SisdeckClassScheduling::class;
    }
}
