<?php
class Entrance
{ 
    public function authentication($login, $db) {
        $sth = $db->prepare("SELECT * FROM `userInfo` WHERE `login` = :login");
        $sth->execute(array('login' => $login));
        $array = $sth->fetch(PDO::FETCH_ASSOC);
        return $array->role;
    }
}