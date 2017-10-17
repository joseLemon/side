<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Year extends Model {

    use SoftDeletes;

    /*
     *
     * REFERENCE TO TABLE NAME
     *
     */

    protected $table = 'years';

    /*
     *
     * REFERENCE TO TABLE PRIMARY ID
     *
     */
    protected $primaryKey = 'year_id';

    /**
     * Get the months for the year.
     */
    public function products() {
        return $this->hasMany('App\Models\Months','year_id','year_id');
    }
}