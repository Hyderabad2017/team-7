

<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<?php
		$con=mysql_connect("localhost","root","");
		mysql_select_db('iandeye',$con);
		if(isset($_POST['update']))
		{
			$name=($_POST['name']);
			$contact=($_POST['contact']);
			$gender=($_POST['gender']);
			$city=($_POST['city']);
			$state=($_POST['state']);
			$street=($_POST['street']);
			$res=mysql_query("insert into student (username,contact,gender,city,state,street) values ('$name','$contact','$gender','$city','$state','$street')");
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
                    <form>
                  		<h2><i>Request for scribe</i></h2>
                      <div class="form-group">
                        <label for="usr">Exam name</label>
                        <input type="text" class="form-control" id="usr">
                      </div>
                  	<div class="form-group">
                        <label for="usr">Medium</label>
                        <input type="text" class="form-control" id="usr" name="med">
                      </div>
                  	<div class="form-group">
                        <label for="usr">Qualification</label>
                        <input type="text" class="form-control" id="usr" name="qual">
                      </div>
                  	<div class="form-group">
                        <label for="usr">Dateofexam</label>
                        <input type="text" class="form-control" id="usr" name="doe">
                      </div>
                  	<div class="form-group">
                  	<button type="button" class="btn btn-primary" name="request">Request</button>
                  	</div>

                    </form>
                  </center>
                </div>
							</div>

							<div id="updateProfile" class="tab-pane fade">
                <div class="container">
                 <center>
		<br/>
		<h1><font size = 5>Update Data</font></h1><br><br>
            <form method="POST">
                 <table>
            <tr>
              <div class = "form-group">
                <td><font size="5">UserName:</td>
                <td><input type="text" class="form-control" name="name" placeholder="UserName"></td>
              </div>
            </tr>
            <tr>
              <div class ="form-group">
                <td><font size="5"color=>Email ID:</td>
                <td><input type="text" class="form-control" name="email" placeholder="abc@mail.com"></td>
              </div>
            </tr>
			<tr>
        <div class = "form-group">
                <td><font size="5"color=>Contact:</td>
                <td><input type="number" class="form-control" name="contact"></td>
              </div>
            </tr>
            <tr>
              <div class= "form-group">
                <td><font size="5">Gender:</td>
                <td><font size="3">Male:<input type="radio" value="male" name="gender" checked/>
                       <font size="3">Female:<input type="radio" value="female" name="gender">
                </td>
              </div>
            </tr>
            <tr>
                <td><font size="5">City:</td>
                <td><select name="city">
                   <option value="choose" selected>choose</option>
                   <option value="hyderabad">Hyderabad</option>
                   <option value="chennai">Chennai</option>
					<option value="mumbai">Mumbai</option>
					<option value="bangalore">Bangalore</option>
                </td>
            </tr>
            <tr>
                <td><font size="5">State:</td>
                <td><select name="state">
                   <option value=""selected>choose</option>
                   <option value="AndhraPradesh">AndhraPradesh</option>
                   <option value="TamilNadu">TamilNadu</option>
                   <option value="Maharashtra">Maharashtra</option>
                   <option value="Karnataka">Karnataka</option>
                </td>
            </tr>
            <tr>
                <td><font size="5">Streetname</td>
                <td><input type="text" name="street"/>
                </td>
            </tr>
            <tr>
                <td><input type="Submit" value="Submit" name="update"></td>
            </tr>
                 </table>
            </form>
        </center>
<<<<<<< HEAD
</body>
</html>
=======
>>>>>>> 620991ef04d9d991f52e4d1aeb576953c61fc588

                </div>
							</div>
						</div>
				</div>
				</form>
		</div>
	</div>  
</div>

</body>
</html>
