
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<meta name="description" content="">
<title>RETTRO INK</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="style1.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="js/validation.js"></script>

</head>
<body>
<div class="topmenu">
	<div class="menubar" >
		
		<h2>Welcome <?php 
        session_start();
        echo  $_SESSION['username'];  

?> </h2>
	<div class ="logout">
	    <a href="logout.php"><i class=""></i> Logout</a>
	</div>
		
	  	
	</div>
</div>
</body>
</html>




