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
			$res=mysql_query("select * from student where username='$user' and password='$pass'");
			if(mysql_fetch_array($res))
			{
				echo "<center>You Have Logged In Successfully</center>";
				$_SESSION['username'] = $user
				//add update page
			}
		}
?>
<html>
<body bgcolor="skyblue">
<div class="container">
<h1 align="center">STUDENT LOGIN</h1>
<form action="s.php" method="post">
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
