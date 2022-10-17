<?php 

@include 'config.php';

if(isset($_POST['submit'])){
    
    $name = mysqli_real_escape_string($conn ,$_POST['name']);
    $email = mysqli_real_escape_string($conn ,$_POST['email']);
    $pass = md5($_POST['password']);
    $cpass = md5($_POST['cpassword']);
    $user_type = $_POST['user_type'];



    $select = "SELECT * FROM user WHERE email = '$email' && password = '$pass' ";

    $result = mysqli_query($conn, $select);

    if(mysqli_num_rows($result) > 0){

    	  $error[] = 'user already exist!';


    }else
    {

    	if($pass != $cpass)
    	{
    		$error[] = 'passwords do not match';

    	}else
    	{
    		$insert = "INSERT INTO user(username, email, password,user_type) VALUES('$name','$email','$pass','$user_type')";
    		mysqli_query($conn, $insert);
    		header('location:index.php');

    	}
    }

};









session_start();



if(isset($_POST['lsubmit'])){
    
    $name = mysqli_real_escape_string($conn ,$_POST['lname']);
    
    $pass = md5($_POST['lpassword']);
   
    $user_type = $_POST['user_type'];



    $select = "SELECT * FROM user WHERE username = '$name' && password = '$pass' ";

    $result = mysqli_query($conn, $select);

    if(mysqli_num_rows($result) > 0){

    	$row = mysqli-fetch_array($result);


    	if($row['user_type'] == 'admin')
    	{

    		$_SESSION['admin_name'] = $row['lname'];
    		header('location:adminpage.php');


    	}elseif($row['user_type'] == 'user')
    	{

    		$_SESSION['user_name'] = $row['lname'];
    		header('location:tequila.php');

    	}else
    	{
    		$error[] = 'incorrect email or password!';
    	}
    }

};



?>


<html>
   <head>
       <title>Don Julio</title>
	   <link rel="stylesheet" href="style.css">
<link rel="icon" href="images/icon.png">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<meta name="viewport" content="width =device-width, initial-scale=1">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Smooch&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
<link  rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
   
   
   
   </head>
   
   <body>
   <div class="banner3">
      <div class="navbar">
	      <img src="images/logo.png" width="100" height="50" class="logo">
		  <ul>
		       <li><a href="index.php">Home</a></li>
			   <li><a href="log.php">Founder</a></li>
			   <li><a href="process.php">process</a></li>
			   <li><a href="tequila.php">tequila</a></li>
			   <li><a href="recipe.php">recipe</a></li>
			   <li><a href="newsletter.php">Newsletter</a></li>
		  </ul>
		  
	  </div>
	  <div class="hero">
	      <div class="form-box">
		       <div class="button-box">
			        <div id="btn">
					</div>
					<button type="button" class="toggle-btn" onclick="register()">Sign Up</button>
					
					
			   
					</div>
			    <div class="social-icons">
				    <img src="images/fb.png" >
					<img src="images/twitter-logo-vector-png-clipart-1.png">
					<img src="images/729f7798561be2cb67f39e916a22eb6a.png">
				</div>
				<form action="" method="post" id="register"class="input-group1">
					<?php
					if(isset($error))
					{

						foreach($error as $error)
						{
							echo '<span class="error-msg">'.$error.'</span>';
						};
					};


					?>
			   <input type="text" name="name" class="input-field" placeholder="User Id" required>
			   <input type="email" name="email" class="input-field" placeholder="Email ID" required>
			   <input type="password" name="password" class="input-field" placeholder="Enter Password" required>
			    <input type="password" name="cpassword" class="input-field" placeholder="Confirm Password" required>
			    <select name="user_type">
			    	 <option value="user">User</option>
			    	 <option value="admin">Admin</option>
			    </select>
			   <input type="checkbox" class="check-box"><span>I Agree to the Terms & Conditions</span>
			   <button type="submit" name="submit"  class="submit-btn">Sign Up</button>
			   </form>






			   
			   
		  
		  
	  </div>
   </div> /*
  <script>
          var x = document.getElementById('login');
		  var y = document.getElementById('register');
		  var z = document.getElementById('btn');
		function login(){
		   x.style.left="50px";
		   y.style.left="450px";
		   z.style.left="0px";
		}
		function register(){
		   x.style.left="-400px";
		   y.style.left="50px";
		   z.style.left="110px";
		}
		
		</script>
   */
   </body>
</html>