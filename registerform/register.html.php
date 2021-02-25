<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Register for raccess for triatlons</title>
        <link rel="stylesheet" href="../template/styles/template.css">
    <link href='https://fonts.googleapis.com/css?family=Cinzel' rel='stylesheet' type='text/css'>
    <link href="../styles/reset.css" rel="stylesheet" type="text/css">
    <link href="../styles/helper.css" rel="stylesheet" type="text/css">
    <link href="../styles/grid.css" rel="stylesheet" type="text/css">
    <link href="../styles/styles.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    </head>
    <body>
        <header>
            <h1>Register for up coming events</h1>
        </header>
        <main>
            <p>Please fill out to register for an event.</p><br>
			<div class="list">
            <form method="post" action="index.php">
                <label for="name">*Full name:</label>
                <input type="text" name="name" id="name" required><br>
                <label for="age">Age:</label>
                <input type="text" name="age" id="age"><br>
                <label for="role">Athlete or Volunteer?</label>
                <input type="text" name="role" id="role"><br>
                <label for="phonenumber">Phone Number:</label>
                <input type="text" name="phonenumber" id="phonenumber" placeholder="XXX-XXX-XXXX"><br>
				<label for="email">E-mail Address:</label>
                <input type="text" name="email" id="email" placeholder="XXXX@XXXX.XXX"><br>
				<label for="emergency">Emergency Contact Name:</label>
                <input type="text" name="emergency" id="emergency"><br>
				<label for="enumber">Emergency Contact phone Number</label>
                <input type="text" name="enumber" id="enumber" placeholder="XXX-XXX-XXXX"><br>
				<label for="gender">Gender Identification:</label>
                <input type="text" name="gender" id="gender" placeholder="Female,Male,Non-binary,Other"><br>
				<label for="shirt">T-shirt Size:</label>
                <input type="text" name="shirt" id="shirt"><br>
				<label for="saterday">Saterday Events Registering for:</label>
                <input type="text" name="saterday" id="saterday" placeholder="Events name"><br>
				<label for="sunday">Sunday Events Resgistering for:</label>
                <input type="text" name="sunday" id="sunday" placeholder="Events name"><br>
				
                <input type="submit">
				
            </form>
				</div>
        </main>
        <footer>
            &copy; <?php echo date('Y'); ?>
        </footer>
    </body>
</html>