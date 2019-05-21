<?php
class Manager {
    private $dbh;
    protected function pdoConnect(){
        $dns = 'mysql:dbname=mvc;host=localhost;charset=utf8';
        $user = 'root';
        $password = '';
        $dbh = new PDO($dns, $user, $password);
        return $dbh;
    }
    protected function close(){
        $this->$dbh.closeCursor();
    }
}
