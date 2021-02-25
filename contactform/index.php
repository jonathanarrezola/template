<?php
try
{
  $pdo = new PDO('mysql:host=localhost;dbname=jonath12_contactform', 'jonath12_ame_user', 'z^8Y-$df7@w6');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $pdo->exec('SET NAMES "utf8"');
}
catch (PDOException $e)
{
  $error = 'Unable to connect to the database server.';
  include '../contactform/error.html.php';
  exit();
}

if (isset($_POST['name']))
{
	   try {
      $sql = 'INSERT INTO Register SET
	  	  name = :name,
		  email = :email,
          role = :role,
		  question = :question';
    $s = $pdo->prepare($sql);
		$s->bindValue(':name', $_POST['name']);
		$s->bindValue(':email', $_POST['email']);
		$s->bindValue(':role', $_POST['role']);
		$s->bindValue(':question', $_POST['question']);
		 
      $s->execute();
    }
    catch (PDOException $e)
    {
      $error = 'Error adding submitted info: ' . $e->getMessage();
      include '../contactform/error.html.php';
      exit();
    }
include 'success.html.php';
}
else {
	include 'contactform.html.php';
}
?>