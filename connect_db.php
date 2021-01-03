<?php
    try{
        $db = new PDO('mysql:host=localhost;dbname=duniamusik','root','');
    }
    catch(PDOException $e){
        echo 'Error: '.$e->getMessage();
        exit();
    }
?>