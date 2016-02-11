<?php
namespace models;

use Illuminate\Database\Eloquent\Model;
/**
 * Created by PhpStorm.
 * User: Bruno
 * Date: 11/02/2016
 * Time: 10:44
 */
class Prestation extends Model
{
    protected $table = "prestation";
    protected $primaryKey="id";
    public $timestamps = false;

    function type(){
        return $this->belongsTo("type");
    }
}