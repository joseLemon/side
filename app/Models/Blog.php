<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model {

    use SoftDeletes;

    /*
     *
     * REFERENCE TO TABLE NAME
     *
     */
    protected $table = 'posts';

    /*
     *
     * REFERENCE TO TABLE PRIMARY ID
     *
     */
    protected $primaryKey = 'post_id';

}