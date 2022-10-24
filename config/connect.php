<?php
    try {
        $db = new PDO('mysql:dbname=testShop;host=localhost', 'admin', 'admin');
    } catch (PDOException $e) {
        die($e->getMessage());
    }
?>