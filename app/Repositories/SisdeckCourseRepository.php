<?php

namespace App\Repositories;

use App\Models\SisdeckCourse;
use App\Repositories\BaseRepository;

/**
 * Class SisdeckCourseRepository
 * @package App\Repositories
 * @version January 6, 2021, 1:25 pm WIB
*/

class SisdeckCourseRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'code',
        'description',
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
        return SisdeckCourse::class;
    }
}
