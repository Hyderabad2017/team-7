<html>
<head>
        <title>Update</title>
</head>
<body bgcolor="FF5733">
<?php 
		$con=mysql_connect("localhost","root","");
		mysql_select_db('sravani',$con);
		if(isset($_POST['submit']))
		{
			$name=($_POST['name']);
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
		<h1><font color="yellow">Update Data</font></h1><br><br>
            <form method="POST">
                 <table>
            <tr>
                <td><font size="5"color="cyan">UserName:</td>
                <td><input type="text" name="name" placeholder="UserName"></td>
            </tr>
            <tr>
                <td><font size="5"color="cyan">Email ID:</td>
                <td><input type="text" name="email"placeholder="abc@mail.com"></td>
            </tr>
            <tr>
                <td><font size="5"color="cyan">Gender:</td>
                <td><font size="3" color="pink">Male:<input type="radio" value="male" name="gender" checked/>
                       <font size="3" color="pink">Female:<input type="radio" value="female" name="gender">
                </td>
            </tr>
            <tr>
                <td><font size="5" color="cyan">City:</td>
                <td><select name="city">
                   <option value="choose" selected>choose</option>    
                   <option value="hyderabad">Hyderabad</option>
                   <option value="chennai">Chennai</option>
					<option value="mumbai">Mumbai</option>
					<option value="bangalore">Bangalore</option>
                </td>
            </tr>
            <tr>
                <td><font size="5" color="cyan">State:</td>
                <td><select name="state">
                   <option value=""selected>choose</option>
                   <option value="AndhraPradesh">AndhraPradesh</option>
                   <option value="TamilNadu">TamilNadu</option>
                   <option value="Maharashtra">Maharashtra</option>
                   <option value="Karnataka">Karnataka</option>
                </td>
            </tr>
            <tr>
                <td><font size="5" color="cyan">Country:</td>
                <td><select name="country">
                   <option value=""selected>choose</option>
                   <option value="NorthAmerica">NorthAmerica</option>
                   <option value="Australia">Australia</option>
                   <option value="UnitedKingdom">UnitedKingdom</option>
                   <option value="India">India</option>
                   <option value="Indonesia">Indonesia</option>
                </td>
            </tr>
            <tr>
                <td><input type="Submit" value="Submit" name="update"></td>               
            </tr>
                 </table>    
            </form>
        </center> 
</body>
</html>
