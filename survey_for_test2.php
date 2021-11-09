<!doctype html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="css/site.css" />
    
    <title><?php echo "Survey"?></title>
  </head>

  <body>
    <nav id="nav" class="navbar navbar-expand-lg navbar-dark"  style="background-color: #8e00b5;">
      <div class="container">
        <a class="navbar-brand" href="page_for_test2.php">I . KH</a>
          <div class="collapse navbar-collapse">
            <div class="navbar-nav mr-auto">
            <a class="nav-item nav-link" href="page_for_test2.php">Home </a>
            </div>
            <div class="navbar-nav ml-auto">
            <a class="nav-item nav-link" href="page_for_test1.php">Back</a>
            </div>
          </div>
      </div>
    </nav>
  



<style type="text/css">
   body { background: lightseagreen !important; }
</style>

    
        
    
    <br/>
    <br/>
    <br/>
    <br/>

<!DOCTYPE html>
<html>
<head>
	<title>My website</title>
</head>
<body>
    <style> 
        #form{
            width: 60%;
            margin: 0 auto;
            float: none;
        }
    </style>
	
<form id="form" method="post">
        <div class="form-group">
            <label for="firstname">First Name</label>
            <input required type="text" class="form-control" id="firstname" name="firstname">
        </div>
        <div class="form-group">
            <label for="lastname">Last Name</label>
            <input required type="text" class="form-control" id="lastname" name="lastname">
        </div>
        <div class="form-group">
            <label for="favlan">Which is ur favorite programing language ?</label>
            <input required type="text" class="form-control" id="favlan" name="favlan">
        </div>
        <div class="form-group">
            <label for="favos">Which OS is ur favorite ?</label>
            <input required type="text" class="form-control" id="favos" name="favos">
        </div>
        <div class="form-group">
            <label for="email">Email address</label>
            <input required type="email" class="form-control" id="email"  name="email" aria-describedby="emailHelp" >
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <br/>
        </br>
        <button type="submit" name="submit" class="btn btn-primary btn-block">Save</button>
    </form>
</body>
</html>



<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $favlan = $_POST['favlan'];
    $favos = $_POST['favos'];
    $email = $_POST['email'];
		

		if(!empty($firstname) && !empty($lastname) && !is_numeric($favlan) && !empty($favos)  && !empty($email))
		{

			//save to database
      
			$query = "insert into survey_for_2 (first_name,last_name,fav_lan,fav_os,email) values ('$firstname','$lastname','$favlan','$favos','$email')";
      
			mysqli_query($con, $query);

			header("Location: page_for_test2.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>