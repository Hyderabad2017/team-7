<?php 
		$conn=mysql_connect("localhost","root","");
		mysql_select_db("sravani",$conn);
		if(isset($_POST['sub']))
		{
			$user=($_POST['uname']);
			$pass=($_POST['pwd']);
			$res=mysql_query("select *from info where name='$user' and pwd='$pass'");			
			if(mysql_fetch_array($res))
			{
				echo "<center>You Have Logged In Successfully</center>";


			}
			else
			{
					ob_start();
					header('Location:data.php');
					ob_end_flush();
					die();			
				
			}			
		}		
?>	
<html>
<body bgcolor="skyblue">
<h1 align="center">USER VALIDATION</h1>
<form action="usrreg.php" method="post">
<center>EnterName:<input type="text" name="uname"/></center><br>
<center>Password:<input type="password" name="pwd"/></center><br>
<center><input type="submit" name="sub" value="submit"/></center>
</form>
</body>
</html>
