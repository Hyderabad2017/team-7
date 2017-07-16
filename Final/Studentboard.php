<?php
						session_start();
						echo $_SESSION['user'];

						?>


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
			$res=mysql_query("insert into requests exam='b.tech' ,doe='20-07-17', location='hyderabad'");
			
			//$res=mysql_query("insert into update name='$name' email='$email',contact=$contact,alternatecontact=$altcont,dob=$dob,qualification='$qual',
			//gender='$gender',city='$city',street='$street',state='$state';");
			//echo $res;
			//if(mysql_affected_rows($res))
			//{
				//echo "Updated Successfully";
			//}
		}
		//ysql_close($con);

?>
</head>
<body>

<div class="container">
	<div class="row">
		<div class="col-sm-6">
				<form name="bmiForm" class="form-inline" role="form">
					<div class="form-group">
						<ul class="nav nav-tabs">
							<li class="active"><a data-toggle="tab" href="#requestScribe">Request Scribe</a></li>

							<li><a data-toggle="tab" href="#updateProfile">Update profile</a></li>
							
						</ul>


						<div class="tab-content">
							<div id="requestScribe" class="tab-pane fade in active">
								<div class="container">
								  <center>
									Make a request
										<table>
										<tr>
										<div class="dropdown">
										  <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Exams
										  <span class="caret"></span></button>
										  <ul class="dropdown-menu">
											<li><a href="#">SSC</a></li>
											<li><a href="#">Inter 1</a></li>
											<li><a href="#">Inter 2</a></li>
											<li><a href="#">BTech</a></li>
											<li><a href="#">CA</a></li>
											<li><a href="#">Inter</a></li>
										  
										  </ul>
										</div>
										</tr>
										<tr>
										  <div class="form-group">
											<td>Date of the Exam</td>
											<td><input type="date" name="name" class="form-control"placeholder="UserName"></td>
										  </div>
										</tr>
										<tr>
										  <div class="form-group">
											<td>Exam center</td>
											<td><input type="text" name="name" class="form-control"placeholder="UserName"></td>
										  </div>
										</tr>
										
										</table>
										<td><button type="Submit" class="btn btn-primary" name="update">Request</button></td>
									</center>
								</div>
							</div>
							<div id="updateProfile" class="tab-pane fade in active">
								<div class="container">
								  <center>
									Update details
									<form method="POST">
                 <table>
            <tr>
              <div class="form-group">
                <td>UserName:</td>
                <td><input type="text" name="name" class="form-control"placeholder="UserName"></td>
              </div>
            </tr>
            <tr>
              <div class="form-group">
                <td>Email ID:</td>
                <td><input type="text" name="email" placeholder="abc@mail.com" class="form-control"></td>
              </div>
            </tr>
			<tr>
        <div class = "form-group">
                <td>Contact:</td>
                <td><input type="number" name="contact" class="form-control"></td>
              </div>
            </tr>
			<tr>
        <div class = "form-group">
                <td>Alternate Contact</td>
                <td><input type="number" name="contact1" class="form-control"></td>
              </div>
            </tr>
			<tr>
        <div class = "form-group">
                <td>DOB</td>
                <td><input type="date" name="dob" class="form-control"></td>
              </div>
            </tr>
			<tr>
        <div class = "form-group">
                <td>Qualification:</td>
                <td><input type="text" name="qual" class="form-control"></td>
          </div>
          </tr>

		  <div class = "form-group">
            <tr>

                <td>Gender:</td>
                <td>Male:<input type="radio" value="male" name="gender" checked/>
                       Female:<input type="radio" value="female" name="gender">
                </td>
            </tr>
			</div>
			<div class = "form-group">
            <tr>
                <td>City:</td>
                <td><select name="city" class="form-control">
                   <option value="choose" selected>choose</option>
                   <option value="hyderabad">Hyderabad</option>
                   <option value="chennai">Chennai</option>
					<option value="mumbai">Mumbai</option>
					<option value="bangalore">Bangalore</option>
                </td>
            </tr>
			</div>
			<div class = "form-group">
            <tr>
                <td>State:</td>
                <td><select name="state" class="form-control">
                   <option value=""selected>choose</option>
                   <option value="AndhraPradesh">AndhraPradesh</option>
                   <option value="TamilNadu">TamilNadu</option>
                   <option value="Maharashtra">Maharashtra</option>
                   <option value="Karnataka">Karnataka</option>
                </td>
            </tr>
			</div>
			<div class = "form-group">
            <tr>
                <td>Streetname</td>
                <td><input type="text"  class="form-control" name="street"/>
                </td>
            </tr>
			</div>
            <tr>
                <td><button type="Submit" class="btn btn-primary" name="update">Submit</button></td>

            </tr>
                 </table>
            </form>
									</center>
								</div>
							</div>
						</div>
				</div>
				</div>
				</div>
</div>

</body>
</html>