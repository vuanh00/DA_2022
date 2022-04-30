<?php

namespace SRC\Config;

use PDO;

class Database
{
    private static $bdd = null;

    private function __construct()
    {
    }

    public static function getBdd()
    {
        if (is_null(self::$bdd)) {
            self::$bdd = new PDO("mysql:host=localhost;dbname=project_vuanh", 'root');
            self::$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        return self::$bdd;
    }
}