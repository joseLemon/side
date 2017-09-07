<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PageExternal extends Model {

    /*
     *
     * REFERENCE TO TABLE NAME
     *
     */

    protected $table = 'pages_external';

    /*
     *
     * REFERENCE TO TABLE PRIMARY ID
     *
     */
    protected $primaryKey = 'page_external_id';
}