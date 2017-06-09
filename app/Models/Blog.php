<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model {

    use SoftDeletes;

    protected $table = 'posts';
    protected $primaryKey = 'post_id';

}