<?php
// require_once('model/Manager.php');

class UserManager {
    private $login;
    private $pass;
    private $dbh;
    public function __construct($_login, $_pass) {
        global $login, $pass, $dbh;
        $login = $_login;
        $pass = $_pass;
        $dbh = new PDO('mysql:dbname=mvc;host=localhost;charset=utf8', 'root', '');
    }
    public function login(){
        global $login, $pass, $dbh;
        $sth = $dbh->prepare('SELECT COUNT(*) FROM users WHERE userLogin == ? AND userPass == ?');
        $sth->execute(array($login, $pass));
        $dbh = null;
        return $sth->fetch()!=0 ? TRUE : FALSE;
    }
    public function suscribe(){
        global $login, $pass, $dbh;
        $sth = $dbh->prepare('INSERT INTO users(userLogin, userPass) VALUES(?, ?)');
        $sth->execute(array($login, $pass));
        $dbh = null;
        return $sth->fetch()!=0 ? TRUE : FALSE;
    }
    // protected function pdoConnect(){
    //     $dns = 'mysql:dbname=mvc;host=localhost;charset=utf8';
    //     $user = 'root';
    //     $password = '';
    //     $dbh = new PDO($dns, $user, $password);
    //     return $dbh;
    // }
    // protected function close(){
    //     $dbh.closeCursor();
    // }
}