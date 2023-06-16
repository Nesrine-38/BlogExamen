<?php

namespace App\repository;
use PDO;


class DataBase {

    public static function getConnection() {
        return new PDO("mysql:host=localhost;dbname=blogexamen", "root", "1234");
    }
}