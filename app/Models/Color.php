<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Color extends Model {

    /*
     *
     * REFERENCE TO TABLE NAME
     */

    protected $table = 'colors';

    /*
     *
     * REFERENCE TO TABLE PRIMARY ID
     *
     */
    protected $primaryKey = 'color_id';
}