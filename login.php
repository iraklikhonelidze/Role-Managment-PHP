<?php 
$title = "Log In";
include_once 'includes/header.php' 
?>

<?php 

session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];
		$new_password = md5($password.$user_name);

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//read from database
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $new_password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						switch( $user_name ){
							case 'qqq':
								header("location:page_for_test1.php");
								exit();
							case 'III':
								header("location:page_for_test2.php");
								exit();
							default:
								header("location:index.php");	
						die;
							}						
					}
				}
			}
			
			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
		}
	}

?>

<?php
include_once 'html/login.html'
?>

