<?php
try{
    $bdd = new PDO('mysql:host=localhost; dbname=users; charset=utf8', 'root', 'maislol123');
}
catch (Exception $e){
    die('Erreur : ' .$e->getMessage());
}
?>
<!DOCTYPE html>
<html>
<title>Franky Pi</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <body>
		<header class="w3-display-container w3-wide bgimg w3-grayscale-mine" id="home">
			<div class="w3-display-middle w3-text-white w3-center">
				<h1 class="w3-jumbo"></h1>
                <?php

                if(!isset($_SESSION['login'])) {
                    ?>
                    <form action="index.php" method="post">
                        <input type="text" id="login" name="logInfo" placeholder="Login..."/>
                        <input type="text" id="password" name="passwordInfo" placeholder="Password..."/>
                        <input type="submit" name="connexion" value="Connexion"/>
                    </form>
                    <?php
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
                    ?>
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
                        session_start();
                        $_SESSION['id'] = $row['id'];
                        $_SESSION['login'] = $row['login'];
                        header('location: index.php');
                        ?>
                        <?php
                    }
                    $ret->closeCursor();
                }
                ?>
                <h2><b>nothing here matters...</b></h2>
                <p><?php echo date('d/m h:i'); ?>
            </div>
		</header>
		<footer class="w3-center w3-black w3-padding-16">
			<p>Powered by Lamahxx</p>
		</footer>
	</body>
</html>