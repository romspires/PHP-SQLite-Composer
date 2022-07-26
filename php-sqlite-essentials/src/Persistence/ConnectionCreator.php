<?php
namespace Roms\Persistence;
use PDO;

class ConnectionCreator
{
    public static function createConnection():PDO
    {
        return new PDO('mysql:host=localhost;dbname=phpdb','root','131755mysql');

    }
}