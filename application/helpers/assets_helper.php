<?php
/**
 * Created by PhpStorm.
 * User: Michael
 * Date: 16/02/2015
 * Time: 19:42
 */

function stylesheet($file){
    return base_url().'assets/stylesheet/'.$file;
}

function javascript($file){
    return base_url().'assets/js/'.$file;
}

function image($file){
    return base_url().'assets/img/'.$file;
}
