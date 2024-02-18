<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
class Restaurant extends Model
{
    use HasFactory;

    protected $fillable = ['restaurant_name','slug','image', 'street', 'time_open', 'time_close', 'piva_user'];

}