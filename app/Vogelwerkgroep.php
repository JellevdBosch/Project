<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vogelwerkgroep extends Model
{
    protected $connection = 'mysql';
    protected $primaryKey = 'id';
    protected $table = 'vogelwerkgroep';
    protected $fillable = array(
        'name',
        'text'
    );

    public $timestamps = true;
}
