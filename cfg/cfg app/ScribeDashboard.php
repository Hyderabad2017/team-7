<<<<<<< HEAD


 <?php  
		session_start();
		echo $_SESSION['user'];
		include 'CodeToUpdateVolTable.php'
?>

=======
<?php  
						session_start();
						echo $_SESSION['user'];
						?>
>>>>>>> 9c9a4123e4986effea2bdb202be62d2329bbf0d6

<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script>
  function viewRequest() {}
</script>

 <?php 
		$con=mysql_connect("localhost","root","");
		mysql_select_db('iandeye',$con);
		if(isset($_POST['update']))
		{
			$name=($_POST['name']);
			$email=($_POST['email']);
			$contact=($_POST['contact']);
			$altcont=($_POST['contact1']);
			$dob=($_POST['dob']);
			$qual=($_POST['qual']);
			$gender=($_POST['gender']);
			$city=($_POST['city']);
			$state=($_POST['state']);
			$street=($_POST['street']);
			$uname = ($_SESSION['user']);
			$res=mysql_query("update scribe set email='$email',contact=$contact,alternatecontact=$altcont,dob=$dob,qualification='$qual',
			gender='$gender',city='$city',street='$street',state='$state' where username='$uname';");
			echo $res;
			if(mysql_affected_rows($res))
			{
				echo "Updated Successfully";
			}
		}
		mysql_close($con);
		
?>
</head>
<body>

<div class="container">
	<div class="row">
		<div class="col-sm-6">
				<form name="bmiForm" class="form-inline" role="form">
					<div class="form-group">
						<ul class="nav nav-tabs">
							<li class="active"><a data-toggle="tab" href="#requestScribe">Request a Scribe</a></li>

							<li><a data-toggle="tab" href="#updateProfile">Update profile</a></li>
						</ul>
					

						<div class="tab-content">
							<div id="requestScribe" class="tab-pane fade in active">
                <div class="container">
                  <center>
                    List of active requests

                    <button type="button" class="btn btn-primary" onclick="viewRequest" data-toggle="modal" data-target="#myModal">Some Request</button>
                  </center>
                </div>
							</div>
              <div id="myModal" class="modal fade" role="dialog">
                <div class="modal-dialog">

                  <!-- Modal content-->
                  <div class="modal-content">
                    <div class="modal-header">
<<<<<<< HEAD
                      <button type="button" class="close" data-dismiss="modal">Request</button>

                      <button type="button" name="btn" class="close" data-dismiss="modal">Reques&times;</button>

=======
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
>>>>>>> 9c9a4123e4986effea2bdb202be62d2329bbf0d6
                      <h4 class="modal-title">Modal Header</h4>
                    </div>
                    <div class="modal-body">
                      <p><?php
					  include(request.php)?></p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default">Ignore</button>
                      <button type="button" class="btn btn-primary" onclick="acceptRequest">Accept</button>
                    </div>
                  </div>

                </div>
              </div>

							<div id="updateProfile" class="tab-pane fade">
                <div class="container">
                 <center>
		<font size="5" color="green">You have not registered in our website.. please register your details..!</font><br/>
		<h1><font color="yellow">Update Data</font></h1><br><br>
            <form method="POST" name="update">
                 <table>
            <tr>
                <td><font size="5"color="cyan">UserName:</td>
                <td><input type="text" name="name" placeholder="UserName"></td>
            </tr>
            <tr>
                <td><font size="5"color="cyan">Email ID:</td>
                <td><input type="text" name="email" placeholder="abc@mail.com"></td>
            </tr>
			<tr>
                <td><font size="5"color="cyan">Contact:</td>
                <td><input type="number" name="contact"></td>
            </tr>
			<tr>
                <td><font size="5"color="cyan">Alternate Contact</td>
                <td><input type="number" name="contact1"></td>
            </tr>
			<tr>
                <td><font size="5"color="cyan">DOB</td>
                <td><input type="date" name="dob"></td>
            </tr>
			<tr>
                <td><font size="5"color="cyan">Qualification:</td>
                <td><input type="text" name="qual"></td>
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
                <td><font size="5" color="cyan">Streetname</td>
                <td><input type="text" name="street"/>
                </td>
            </tr>
            <tr>
                <td><input type="Submit" value="Submit"></td>               
            </tr>
                 </table>    
            </form>
        </center>				
				  </div>
                </div>
							</div>
						</div>
				</div>
				</form>
		</div>
	</div>  <!-- Row Ends here -->
</div>

</body>
</html>