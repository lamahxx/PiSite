<!DOCTYPE html>
<html>

<title>Franky Pi</title>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" href="https://googleapis.com/css?family=Lato">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="style.css">
    <body>
        <?php include "trigger.php"; ?>
    
		<header class="w3-display-container w3-wide bgimg w3-grayscale-mine" id="home">
			<div class="w3-display-middle w3-text-white w3-center">
				<h1 class="w3-jumbo"></h1>
                    <form>
                        <input type="submit" class="w3-button w3-yellow" name="btn_submit" value="On"/>
                        <input type="submit" class="w3-button w3-yellow" name="btn_submit2" value="Off"/>
                    </form>
				<h2><b>nothing here matters...</b></h2>
				<p><?php echo date('d/m h:i'); ?>
			</div>
		</header>
		<footer class="w3-center w3-black w3-padding-16">
			<p>Powered by Lamahxx</p>
		</footer>
	</body>
</html>