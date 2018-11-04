<?php
if(isset($_POST['logInfo']) AND isset($_POST['passwordInfo'])){
    //Code here user validation
    $login = $_POST['logInfo'];
    $pw = $_POST['passwordInfo'];
    $ret = $bdd->query('SELECT * FROM logInfo WHERE login = $login');
    $row = $ret->fetch($ret);
    if(!$row){
        echo "<p>";
        echo "Failure";
        echo "</p>";
    }
    else{
        echo "<p>";
        echo "Success";
        echo "</p>";
    }
}
