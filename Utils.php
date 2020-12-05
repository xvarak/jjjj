<?php

namespace models;


class UtilsJosefVarak
{
    
    public static $getPinJosefVarak;
    private static $minJosefVarak = 1000;
    private static $maxJosefVarak = 9999;
    public static function getPinJosefVarak()
    { 
        $getPinJosefVarak = random_int($min = 1000,$max = 9999);
    return $getPinJosefVarak;
    }

}