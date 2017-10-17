<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Month extends Model {

    /*
     *
     * REFERENCE TO TABLE NAME
     *
     */

    protected $table = 'months';

    /*
     *
     * REFERENCE TO TABLE PRIMARY ID
     *
     */
    protected $primaryKey = 'month_id';
}