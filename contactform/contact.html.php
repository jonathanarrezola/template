<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Contact form</title>
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
            <h1>Contact us.</h1>
        </header>
        <main>
            <p>Please fill out to contact us about future events or inqueries.</p><br>
			<div class="list">
            <form method="post" action="index.php">
                <label for="name">*Full name:</label>
                <input type="text" name="name" id="name" required><br>
				<label for="email">E-mail Address:</label>
                <input type="text" name="email" id="email" placeholder="XXXX@XXXX.XXX"><br>
				<label for="question">Question or Comment</label>
                <input type="text" name="question" id="question"><br>
                <label for="role">Athlete or Volunteer?</label>
                <input type="text" name="role" id="role"><br>

                <input type="submit">
				
            </form>
				</div>
        </main>
        <footer>
            &copy; <?php echo date('Y'); ?>
        </footer>
    </body>
</html>