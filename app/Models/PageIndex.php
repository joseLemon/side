<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PageIndex extends Model {

    /*
     *
     * REFERENCE TO TABLE NAME
     *
     */

    protected $table = 'page_index';

    /*
     *
     * REFERENCE TO TABLE PRIMARY ID
     *
     */
    protected $primaryKey = 'page_id';
}