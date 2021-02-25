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
			E-mail Address: <?php echo htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8'); ?><br>
			Role: <?php echo htmlspecialchars($_POST['role'], ENT_QUOTES, 'UTF-8'); ?><br>
			Question or Comment: <?php echo htmlspecialchars($_POST['question'], ENT_QUOTES, 'UTF-8'); ?><br>
			</p>
        </main>
        <footer> 
            &copy; <?php echo date('Y'); ?>
        </footer>
    </body>
</html>