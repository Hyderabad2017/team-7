<?php
// Start the session
session_start();
?>

<?php 
		$conn=mysql_connect("localhost","root","");
		mysql_select_db("iandeye",$conn);
		if(isset($_POST['sub']))
		{
			$user=($_POST['uname']);
			$pass=($_POST['pwd']);
			$res=mysql_query("select * from scribe where username='$user' AND password='$pass'");			
			if(mysql_fetch_array($res))
			{
				
				$_SESSION['user']=$user;
				echo $_SESSION['user'];
				header('location:Scribeboard.php');
				//add update page
			}			
		}		
?>	
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  </head>
<body>
<div class="container">
<h1 align="center">Volunteer LOGIN</h1>
<form action="vollogin.php" method="post">
<div class = "form-group">
<center>EnterName:<input type="text" name="uname" class="form-control" /></center><br>
</div>
<div class = "form-group">
<center>Password:<input type="password" name="pwd" class="form-control" /></center><br>
</div>
<div class = "form-group">
<center><button type="submit" name="sub" class="btn btn-primary" >Submit</button></center>
</div>
</form>
</div>
</body>
</html>

