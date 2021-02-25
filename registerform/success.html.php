<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Register</title>
    </head>
    <body>
        <header>
            <h1>Registration</h1>
        </header>
        <main>
            <h2>Success!</h2>
            <p>You successfully Registered.</p>
            <p>name: <?php echo htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8'); ?><br>
			Age: <?php echo htmlspecialchars($_POST['Age'], ENT_QUOTES, 'UTF-8'); ?><br>
			Role: <?php echo htmlspecialchars($_POST['role'], ENT_QUOTES, 'UTF-8'); ?><br>
			Phone Number: <?php echo htmlspecialchars($_POST['phonenumber'], ENT_QUOTES, 'UTF-8'); ?><br>
			E-mail Address: <?php echo htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8'); ?><br>
			Emergency Contact Name: <?php echo htmlspecialchars($_POST['emergency'], ENT_QUOTES, 'UTF-8'); ?><br>
			Emergency Contact Phone Number: <?php echo htmlspecialchars($_POST['enumber'], ENT_QUOTES, 'UTF-8'); ?><br>
			Gender: <?php echo htmlspecialchars($_POST['gender'], ENT_QUOTES, 'UTF-8'); ?><br>
			T-shirt Size: <?php echo htmlspecialchars($_POST['shirt'], ENT_QUOTES, 'UTF-8'); ?><br>
			Saterday Events Registered for: <?php echo htmlspecialchars($_POST['saterday'], ENT_QUOTES, 'UTF-8'); ?><br>
			Sunday Events Registered for: <?php echo htmlspecialchars($_POST['sunday'], ENT_QUOTES, 'UTF-8'); ?><br>
			Special Request: <?php echo htmlspecialchars($_POST['request'], ENT_QUOTES, 'UTF-8'); ?><br>
			</p>
        </main>
        <footer> 
            &copy; <?php echo date('Y'); ?>
        </footer>
    </body>
</html>