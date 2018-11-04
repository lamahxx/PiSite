<?php
/**
 * Created by PhpStorm.
 * User: prosk
 * Date: 04/11/2018
 * Time: 02:55
 */
$login =  $_POST['logInfo'];
$password = $_POST['passwordInfo'];

$res = $bdd->query('SELECT * FROM users WHERE login = $login');
$row = $res->fetch($res);
if (!$row){
    header('location: index.php');
}
else{
    header('location: index.php');
}
    ?>