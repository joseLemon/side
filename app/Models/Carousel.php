<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Carousel extends Model {

    /*
     *
     * REFERENCE TO TABLE NAME
     *
     */

    protected $table = 'carousels';

    /*
     *
     * REFERENCE TO TABLE PRIMARY ID
     *
     */
    protected $primaryKey = 'carousel_id';

    /**
     * Get the products for the carousel.
     */
    public function products() {
        return $this->hasMany('App\Models\Product','carousel_id','carousel_id');
    }
}