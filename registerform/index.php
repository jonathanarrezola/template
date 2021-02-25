<?php
try
{
  $pdo = new PDO('mysql:host=localhost;dbname=jonath12_ame_register', 'jonath12_ame_user', 'z^8Y-$df7@w6');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $pdo->exec('SET NAMES "utf8"');
}
catch (PDOException $e)
{
  $error = 'Unable to connect to the database server.';
  include '../registerform/error.html.php';
  exit();
}

if (isset($_POST['name']))
{
	   try {
      $sql = 'INSERT INTO Register SET
	  	  name = :name,
          age = :age,
          role = :role,
		  phonenumber = :phonenumber,
		  email = :email,
		  emergency = :emergency,
		  enumber = :enumber,
		  gender = :gender,
		  shirt = :shirt,
		  saterday = :saterday,
		  sunday = :sunday,
		  request = :request';
    $s = $pdo->prepare($sql);
		$s->bindValue(':name', $_POST['name']);
    	$s->bindValue(':age', $_POST['age']);
		$s->bindValue(':role', $_POST['role']);
		$s->bindValue(':phonenumber', $_POST['phonenumber']);
		$s->bindValue(':email', $_POST['email']);
		$s->bindValue(':emergency', $_POST['emergency']);
		$s->bindValue(':enumber', $_POST['enumber']);
		$s->bindValue(':gender', $_POST['gender']);
		$s->bindValue(':shirt', $_POST['shirt']);
		$s->bindValue(':saterday', $_POST['saterday']);
		$s->bindValue(':sunday', $_POST['sunday']);
		$s->bindValue(':request', $_POST['request']);
		 
      $s->execute();
    }
    catch (PDOException $e)
    {
      $error = 'Error adding submitted info: ' . $e->getMessage();
      include '../registerfrom/error.html.php';
      exit();
    }
include 'success.html.php';
}
else {
	include 'register.html.php';
}
?>