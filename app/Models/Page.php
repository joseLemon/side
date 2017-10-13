<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Page extends Model {

    use SoftDeletes;

    /*
     *
     * REFERENCE TO TABLE NAME
     */

    protected $table = 'pages';

    /*
     *
     * REFERENCE TO TABLE PRIMARY ID
     *
     */
    protected $primaryKey = 'page_id';

    /*
     * Get the micro page that owns this page
     */
    public function micro () {
        return $this->hasMany('App\Models\PageMicro','page_id','page_id');
    }

    /*
     * Get the micro page that owns this page
     */
    public function external () {
        return $this->hasMany('App\Models\PageExternal','page_id','page_id');
    }

    /*
     * Get the micro page that owns this page
     */
    public function carousel () {
        return $this->hasMany('App\Models\PageCarousel','page_id','page_id');
    }

    /*
     * Get the micro page that owns this page
     */
    public function sliderInfo () {
        return $this->hasMany('App\Models\Carousel','page_id','page_id');
    }
}