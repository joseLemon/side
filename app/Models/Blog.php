<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model {

    protected $table = 'posts';
    protected $primaryKey = 'post_id';

}