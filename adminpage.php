<?phpcredits()

   @include 'config.php';

   session_start();

   if(!isset($_SESSION['admin_name'])){

   	 header('location:log.php');
   }
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
  <div class="banner8">
      <div class="navbar">
	      <img src="images/logo.png" width="100" height="50" class="logo">
		  <ul>
		       <li><a href="index.php">Home</a></li>
			   <li><a href="founder.php">Founder</a></li>
			   <li><a href="process.php">process</a></li>
			   <li><a href="tequila.php">tequila</a></li>
			   <li><a href="recipe.php">recipe</a></li>
			   <li><a href="newsletter.php">Newsletter</a></li>
			   <li><a href="clientdetail.php">Client Contact</a></li>
		  </ul>
		  
	  </div>
	     
	        
  </div>
</body>
</html>