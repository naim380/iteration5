<?php

function connect (){
    try
{
$bdd = new PDO('mysql:host=localhost;dbname=newbdd2021;charset=utf8', 'root', 'root');
}
    catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}
 return $bdd;   
}
?>