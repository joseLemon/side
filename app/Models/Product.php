<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {

    /*
     *
     * REFERENCE TO TABLE NAME
     *
     */

    protected $table = 'products';

    /*
     *
     * REFERENCE TO TABLE PRIMARY ID
     *
     */
    protected $primaryKey = 'product_id';
}