<?php
/**
 * Created by PhpStorm.
 * User: prosk
 * Date: 04/11/2018
 * Time: 02:55
 */
$login =  $_POST['logInfo'];
$password = $_POST['passwordInfo'];

$res = $bdd->query('SELECT id, password FROM users WHERE login = $login AND  password = $password');
$row = $res->fetch($res);
if (!$row){
    echo "<p>";
    echo "Nothing found";
    echo "</p>";
}
    else{
        echo "<p>";
        echo "Ok it worked";
        echo "</p>";
    }
    ?>