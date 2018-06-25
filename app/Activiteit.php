<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activiteit extends Model
{
    protected $table = 'activities';

    protected $fillable = ['title','activity','date'];
}
