<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{
    use SoftDeletes;

    protected $table = 'customers';

    protected $hidden = ['created_at','updated_at','deleted_at'];

    protected $fillable = ['ssn','first_name','last_name','phone','email','gender'];
}
