<?php

//Sangloton

final class Staff
{
    private static $instance;

    public $employees;

    public static function getinstance(): Staff
    {

        if (!self::$instance) {
            self::$instance = new self();
        }

        return self::$instance;
    }
}
