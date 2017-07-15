

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
		<h1><font color="yellow">Update Data</font></h1><br><br>
            <form method="POST">
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
                <td><input type="Submit" value="Submit" name="update"></td>               
            </tr>
                 </table>    
            </form>
        </center> 
</body>
</html>

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
