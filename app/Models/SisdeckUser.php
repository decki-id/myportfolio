<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class SisdeckUser
 * @package App\Models
 * @version April 15, 2021, 11:48 am WIB
 *
 * @property integer $role_id
 * @property string $username
 * @property string $fullname
 * @property string $email
 * @property string|\Carbon\Carbon $email_verified_at
 * @property string $password
 * @property string $remember_token
 */
class SisdeckUser extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'users';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'role_id',
        'username',
        'fullname',
        'email',
        'email_verified_at',
        'password',
        'remember_token'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'role_id' => 'integer',
        'username' => 'string',
        'fullname' => 'string',
        'email' => 'string',
        'email_verified_at' => 'datetime',
        'password' => 'string',
        'remember_token' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'role_id' => 'required|integer',
        'username' => 'required|string|max:191',
        'fullname' => 'required|string|max:191',
        'email' => 'required|string|max:191',
        'email_verified_at' => 'nullable',
        'password' => 'required|string|max:191',
        'remember_token' => 'nullable|string|max:191',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
