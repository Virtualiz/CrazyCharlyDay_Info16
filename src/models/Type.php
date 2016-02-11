<?php
/**
 * Created by PhpStorm.
 * User: Bruno
 * Date: 11/02/2016
 * Time: 10:54
 */

namespace models;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $table = "type";
    protected $timestamps = false;

    function prestations(){
        return $this->hasMany("prestation");
    }
}