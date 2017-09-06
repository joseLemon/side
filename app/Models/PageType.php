<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PageType extends Model {

    /*
     *
     * REFERENCE TO TABLE NAME
     *
     */

    protected $table = 'page_types';

    /*
     *
     * REFERENCE TO TABLE PRIMARY ID
     *
     */
    protected $primaryKey = 'page_type_id';
}