<html>
<head>
        <title>Registration</title>
</head>
<body bgcolor="FF5733">
<?php 
		$con=mysql_connect("localhost","root","");
		mysql_select_db('userlogin',$con);
		if(isset($_POST['submit']))
		{
			$name=($_POST['uname']);
			$pwd=($_POST['pwd']);
			$res=mysql_query("insert into loginpagedet (uname,pwd) values ('$name','$pwd')");
			$res=mysql_query("select * from loginpagedet");			
			if(mysql_fetch_array($res))
			{
				echo "<h1>Data inserted successfully</h1>";
			}
		}
		mysql_close($con);
		
?>
        <center>
		<font size="5" color="green">You have not registered in our website.. please register your details..!</font><br/>
		<h1><font color="yellow">USER REGISTRATION</font></h1><br><br>
            <form method="POST" action="data1.php">
                 <table>
            <tr>
                <td><font size="5"color="cyan">UserName:</td>
                <td><input type="text" name="uname" placeholder="Full Name"></td>
            </tr>
            <tr>
                <td><font size="5"color="cyan">Password:</td>
                <td><input type="password" name="pwd" placeholder="Password"></td>
            </tr>
			<tr>
                <td><input type="Submit" value="Submit" name="submit"></td>
                            
            </tr>
                 </table>    
            </form>
        </center> 
</body>
</html>
