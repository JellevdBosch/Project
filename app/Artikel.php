<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    protected $table = 'vogelwerkgroep';

    protected $fillable = ['title','text'];
}
