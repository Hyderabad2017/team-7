<html>
<body bgcolor="skyblue">
<h1 align="center">USER VALIDATION</h1>
<form action="loginpage.php" method="post">
<center>EnterName:<input type="text" name="username"/></center><br>
<center>Password:<input type="password" name="pwd"/></center><br>
<center><input type="submit" name="sub" value="submit"/></center>
</form>
<?php
		$conn=mysql_connect("localhost","root","")or die("couldn't connect");
		mysql_select_db("userlogin",$conn);
		if(isset($_POST['sub']))
		{
			$user=($_POST['username']);
			$pass=($_POST['pwd']);

			$res=mysql_query("select *from loginpagedet where uname='$user' and pwd='$pass'");			
			if(mysql_num_rows($res))
			{
				echo "<center>You Have Logged In Successfully</center>";
			}
			else
			{
				echo "<center>Invalid Username or Password Please Try Again</center>";
			}			
		}		
		?>
</body>		
</html>