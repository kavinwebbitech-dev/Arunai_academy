<?php

namespace App\Models;

use App\Http\Controllers\BannerController;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    //
    protected $fillable = ['image', 'status'];
};
