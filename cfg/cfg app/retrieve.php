<?php 
		$conn=mysql_connect("localhost","root","");
		mysql_select_db("userlogin",$conn);
		if(isset($_POST['sub']))
		{
			$user=($_POST['uname']);
			$pass=($_POST['pwd']);
			$res=mysql_query("select * from scribe where username='$user' and password='$pass'");			
			if(mysql_fetch_array($res))
			{
				echo "<center>You Have Logged In Successfully</center>";
				//add update page
			}			
		}		
?>