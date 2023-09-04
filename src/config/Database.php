<?php
// src/config/Database.php

class Database
{
    private static $connection;

    public static function getConnection()
    {
        if (!self::$connection) {
            $host = Config::DB_HOST;
            $dbname = Config::DB_NAME;
            $user = Config::DB_USER;
            $password = Config::DB_PASSWORD;

            self::$connection = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $password);
            self::$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }

        return self::$connection;
    }
}
