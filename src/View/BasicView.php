<?php
namespace src\view;
/**
 * Created by PhpStorm.
 * User: Bruno
 * Date: 11/02/2016
 * Time: 10:59
 */
abstract class BasicView
{

    function renderAll(){
        renderHead();
        render();
        renderFoot();
    }

    abstract function render();

    function renderHead(){

    }

    function renderFoot(){

    }
}