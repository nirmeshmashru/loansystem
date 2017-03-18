<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Partner extends Model
{
    use SoftDeletes;

    protected $table = 'partners';

    protected $hidden = ['updated_at','deleted_at'];

    protected $fillable = ['status','apikey'];
}
