<?php
if(isset($_POST['logInfo']) AND isset($_POST['passwordInfo'])){
    //Code here user validation
    $logind = $_POST['logInfo'];
    $pw = $_POST['passwordInfo'];
    $ret = $bdd->query('SELECT * FROM logInfo WHERE login ="'.$logind.'" AND password = "'.$pw.'"');
    $row = $ret->fetch();
    if(!$row){
        echo "<p>";
        echo "Failure";
        echo "</p>";
    }
    else{
      ?>
    <form>
    <input type="submit" name="btn_ledOn" value="On"/>
    <input type="submit" name="btn_ledOff" value="Off"/>
    <?php include "trigger.php"; ?>
    </form>
    <?php
    }
    $ret->closeCursor();
}
?>