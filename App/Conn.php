<?php

namespace App;


class Conn
{
    public static function getDb()
    {
        return new \PDO("mysql:host=127.0.0.1;dbname=mvc", "root", "root");
    }

}