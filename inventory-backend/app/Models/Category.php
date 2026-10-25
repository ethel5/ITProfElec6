<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Corncerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasUuids;
    protected  $fillable = [
        'name',
    ];
}
