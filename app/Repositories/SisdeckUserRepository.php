<?php

namespace App\Repositories;

use App\Models\SisdeckUser;
use App\Repositories\BaseRepository;

/**
 * Class SisdeckUserRepository
 * @package App\Repositories
 * @version April 15, 2021, 11:48 am WIB
*/

class SisdeckUserRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'role_id',
        'username',
        'fullname',
        'email',
        'email_verified_at',
        'password',
        'remember_token'
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
        return SisdeckUser::class;
    }
}
