<?php 
		$conn=mysql_connect("localhost","root","");
		mysql_select_db("iandeye",$conn);
		if(isset($_POST['request']))
		{
			$medium=($_POST['med']);
			$qual=($_POST['qual']);
			$doe =($_POST['doe']);
			$res=mysql_query("select * from requests'");			
			if(mysql_fetch_array($res))
			{
				echo "<center>You Have Logged In Successfully</center>";
				//add update page
			}			
		}		
?>