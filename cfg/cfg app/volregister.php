<html>
<head>
        <title>Registration</title>
		
</head>
<?php
// Start the session
session_start();
?>

<body bgcolor="FF5733">
<?php 
		$con=mysql_connect("localhost","root","");
		mysql_select_db('iandeye',$con);
		if(isset($_POST['submit']))
		{
			$username=($_POST['username']);
			$fname=($_POST['firstname']);
			$lname=($_POST['lastname']);
			$pwd=($_POST['pwd']);
			$res=mysql_query("insert into scribe (firstname,lastname,username,password) values ('$fname','$lname','$username','$pwd')");
			$res=mysql_query("select * from scribe where username='$username' AND password='$pwd'");			
			if(mysql_fetch_array($res))
			{
				echo "<h1>Data inserted successfully</h1>";
				$_session['user']=$username;
				//header('Location:Updatevol.php');
			}
		}
		mysql_close($con);
		
?>
        <center>
		<font size="5" color="green">You have not registered in our website.. please register your details..!</font><br/>
		<h1><font color="yellow">VOLUNTEER REGISTRATION</font></h1><br><br>
            <form method="POST" action="volregister.php">
                 <table>
            <tr>
                <td><font size="5"color="cyan">UserName:</td>
                <td><input type="text" name="username" placeholder="username"></td>
            </tr>
			<tr>
                <td><font size="5"color="cyan">FirstName:</td>
                <td><input type="text" name="firstname" placeholder="FirstName"></td>
            </tr>
			<tr>
                <td><font size="5"color="cyan">LastName:</td>
                <td><input type="text" name="lastname" placeholder="LastName"></td>
            </tr>
            
            <tr>
                <td><font size="5"color="cyan">Password:</td>
                <td><input type="password" name="pwd" placeholder="Password"></td>
            </tr>
			<tr>
                <td><input type="Submit" value="Submit" name="submit"></td>
                <td><input type="Reset" value="Reset"></td>               
            </tr>
                 </table>    
            </form>
        </center> 
</body>
</html>