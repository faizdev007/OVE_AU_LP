<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RequestQuery extends Model
{
    // use SoftDeletes;
    //
    protected $fillable = [
        'name',
        'email',
        'phone',
        'project_brief',
        'lp_url',
        'ip_address',
    ];
}
