<<<<<<< HEAD
<?php 
$title = "tester1 page";
?>



<!doctype html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="css/site.css" />
    
    <title><?php echo $title ?></title>
  </head>

  <body>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #8e00b5;">

    <div class="container">
      <a class="navbar-brand" href="page_for_test2.php">I . KH</a>
      
      <div class="collapse navbar-collapse">
        <div class="navbar-nav mr-auto">
          <a class="nav-item nav-link" href="page_for_test2.php">Home </a>
        </div>
        <div class="navbar-nav ml-auto">
          <?php 
              if(!isset($_SESSION['userid'])){
          ?>
            <a class="nav-item nav-link" href="logout.php">Logout</a>
          <?php } ?>
            
        </div>
      </div>
    </nav>
    <div class="container">

<style type="text/css">
   body { background: lightseagreen !important; }
</style>

    
        
    
    <br/>

<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html>
<head>
	<title>My website</title>
</head>
<body>
  <style> 
    #button {
      color: maroon;

      }
    </style>


	<h1>Welcome, <?php echo $user_data['user_name'];?></h1>
  
  <a id="button" href="survey_for_test2.php" id="btn">Answer or Edit UR Answers</a>
  
</body>
</html>


<?php
    $sql = 'SELECT * FROM survey_for_2 ORDER BY id DESC LIMIT 1';
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($result);
        
?>

<style> 
        #card{
            width: 60%;
            margin: 0 auto;
            float: none;
            background-color: wheat;
        }
    </style>

<div id="card" class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?php echo $row['first_name'] . ' ' . $row['last_name']?></h5>
    <h6 class="card-subtitle mb-2 text-muted">Email: <?php echo $row['email']?></h6>
    <h6 class="card-subtitle mb-2 text-muted">Favorite programing Language: <?php echo $row['fav_lan']?></h6>
    <h6 class="card-subtitle mb-2 text-muted">Favorite Operation System: <?php echo $row['fav_os']?></h6>
    <a href="survey_for_test1.php" class="card-link">Click here to edit your info</a>
  </div>
</div>
=======
<?php 
$title = "tester1 page";
?>



<!doctype html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="css/site.css" />
    
    <title><?php echo $title ?></title>
  </head>

  <body>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #8e00b5;">

    <div class="container">
      <a class="navbar-brand" href="page_for_test2.php">I . KH</a>
      
      <div class="collapse navbar-collapse">
        <div class="navbar-nav mr-auto">
          <a class="nav-item nav-link" href="page_for_test2.php">Home </a>
        </div>
        <div class="navbar-nav ml-auto">
          <?php 
              if(!isset($_SESSION['userid'])){
          ?>
            <a class="nav-item nav-link" href="logout.php">Logout</a>
          <?php } ?>
            
        </div>
      </div>
    </nav>
    <div class="container">

<style type="text/css">
   body { background: lightseagreen !important; }
</style>

    
        
    
    <br/>

<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html>
<head>
	<title>My website</title>
</head>
<body>
  <style> 
    #button {
      color: maroon;

      }
    </style>


	<h1>Welcome, <?php echo $user_data['user_name'];?></h1>
  
  <a id="button" href="survey_for_test2.php" id="btn">Answer or Edit UR Answers</a>
  
</body>
</html>


<?php
    $sql = 'SELECT * FROM survey_for_2 ORDER BY id DESC LIMIT 1';
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($result);
        
?>

<style> 
        #card{
            width: 60%;
            margin: 0 auto;
            float: none;
            background-color: wheat;
        }
    </style>

<div id="card" class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?php echo $row['first_name'] . ' ' . $row['last_name']?></h5>
    <h6 class="card-subtitle mb-2 text-muted">Email: <?php echo $row['email']?></h6>
    <h6 class="card-subtitle mb-2 text-muted">Favorite programing Language: <?php echo $row['fav_lan']?></h6>
    <h6 class="card-subtitle mb-2 text-muted">Favorite Operation System: <?php echo $row['fav_os']?></h6>
    <a href="survey_for_test1.php" class="card-link">Click here to edit your info</a>
  </div>
</div>
>>>>>>> ad119aafd87ed183b1e67a34d328d43d46a6d296
