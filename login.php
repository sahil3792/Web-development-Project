<?php 
    $username = $_POST['lname'];
    $password = $_POST['lpassword'];



    $con = new mysqli('localhost','root','812003@$Ss','project',4306);
    if($con->connect_error){
    	die("Failed to connect:".$con->connect_error);

    }else{
    	$stmt = $con->prepare("select * from info where username = ?");
    	$stmt->bind_param("s",$username);
    	$stmt->execute();
    	$stmt_result = $stmt->get_result();
    	if($stmt_result->num_rows > 0){
    		$data = $stmt_result->fetch_assoc();
    		if($data['password']== $password ){
    			echo "<h2>login Successful</h2>";
    		}else{
    			echo "<h2> invalid email or password</h2>";
    		}

    	}else{
    		echo "<h2>invalid email or password</h2>";
    	}
    }
?>








if($row['user_type'] == 'admin')
    	{

    		$_SESSION['admin_name'] = $row['lname'];
    		header('location:adminpage.php');


    	}elseif($row['user_type'] == 'user')
    	{

    		$_SESSION['username'] = $row['lname'];
    		header('location:tequila.php');

    	}else
    	{
    		$error[] = 'incorrect email or password!';
    	}