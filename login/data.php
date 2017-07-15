<html>
<head>
        <title>Registration</title>
</head>
<body bgcolor="FF5733">
<?php 
		$con=mysql_connect("localhost","root","");
		mysql_select_db('sravani',$con);
		if(isset($_POST['submit']))
		{
		
			$name=($_POST['name']);
			$pwd=($_POST['pwd']);
			$conpwd=($_POST['conpwd']);
			$email=($_POST['email']);
			$gender=($_POST['gender']);
			$city=($_POST['city']);
			$state=($_POST['state']);
			$country=($_POST['country']);
			$res=mysql_query("insert into info (name,pwd,conpwd,email,gender,city,state,country) values ('$name','$pwd','$conpwd','$email','$gender','$city','$state','$country')");
			$res=mysql_query("select * from info");			
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
            <form method="POST" action="data.php">
                 <table>
            <tr>
                <td><font size="5"color="cyan">UserName:</td>
                <td><input type="text" name="name" placeholder="Full Name"></td>
            </tr>
			<tr>
                <td><font size="5"color="cyan">FirstName:</td>
                <td><input type="password" name="pwd" placeholder="FirstName"></td>
            </tr>
			<tr>
                <td><font size="5"color="cyan">LastName:</td>
                <td><input type="password" name="pwd" placeholder="LastName"></td>
            </tr>
            
            <tr>
                <td><font size="5"color="cyan">Password:</td>
                <td><input type="password" name="pwd" placeholder="Password"></td>
            </tr>
                <td><input type="Submit" value="Submit" name="submit"></td>
                <td><input type="Reset" value="Reset"></td>               
            </tr>
                 </table>    
            </form>
        </center> 
</body>
</html>
