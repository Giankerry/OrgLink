<?php
class database
{
    protected function connect_db()
    {
        try {
            $username = "root";
            $password = "";
            $db_connection = new PDO("mysql:host=localhost;dbname=OrglinkDB;charset=utf8", $username, $password);
            return $db_connection;
        } catch (PDOException $e) {
            print "Database Connection Failed." . $e->getMessage() . "<br>";
            die();
        }
    }
}
