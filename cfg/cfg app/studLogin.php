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
				echo "$_SESSION['$user']"
				//add update page
			}
		}
?>
<html>
<body bgcolor="skyblue">
<h1 align="center">STUDENT LOGIN</h1>
<form action="s.php" method="post">
<center>EnterName:<input type="text" name="uname"/></center><br>
<center>Password:<input type="password" name="pwd"/></center><br>
<center><input type="submit" name="sub" value="submit"/></center>
</form>
</body>
</html>
