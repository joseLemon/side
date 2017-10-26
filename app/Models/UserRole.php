<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserRole extends Model {

    use SoftDeletes;

    /*
     *
     * REFERENCE TO TABLE NAME
     *
     */
    protected $table = 'user_roles';

    /*
     *
     * REFERENCE TO TABLE PRIMARY ID
     *
     */
    protected $primaryKey = 'user_role_id';

}