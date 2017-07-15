<?php
		$con=mysql_connect("localhost","root","");
		mysql_select_db('iandeye',$con);
		if(isset($_POST['makeRequest']))
		{
			$examName=($_POST['examName']);
			$medium=($_POST['medium']);
			$qualification=($_POST['qualification']);
			$doe=($_POST['dateofexam']);
			$res=mysql_query("insert into requests (examname,medium,qualification,doe) values ('$examname','$medium','$qualification','$doe', '$_SESSION['$username']')");
			// $res=mysql_query("select * from student where username='$username' AND password='$pwd'");
			if(mysql_fetch_array($res))
			{
				echo "<h1>Data inserted successfully</h1>";
				//header('Location:Updatevol.php');
			}
		}
		mysql_close($con);

?>
<!DOCTYPE html>

<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
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
                        <input name="examName" type="text" class="form-control" id="usr">
                      </div>
                  	<div class="form-group">
                        <label for="usr">Medium</label>
                        <input name="medium" type="text" class="form-control" id="usr">
                      </div>
                  	<div class="form-group">
                        <label for="usr">Qualification</label>
                        <input name="qualification" type="text" class="form-control" id="usr">
                      </div>
                  	<div class="form-group">
                        <label for="usr">Dateofexam</label>
                        <input name="dateofexam" type="text" class="form-control" id="usr">
                      </div>
                  	<div class="form-group">
                  	<button name="makeRequest" type="button" class="btn btn-primary">Request</button>
                  	</div>

                    </form>
                  </center>
                </div>
							</div>

							<div id="updateProfile" class="tab-pane fade">
                <div class="container">
                  <center>
                    <form>
                  		<h2><i>Update Profile</i></h2>
                      <div class="form-group">
                        <label for="usr">Age</label>
                        <input type="number" class="form-control" id="usr">
                      </div>
                      <br/>
                  	<div class="form-group">
                        <label for="usr">Qualification</label>
                        <input type="text" class="form-control" id="usr">
                      </div>
                      <br/>
                  	<button name="updateStudentDetails" type="button" class="btn btn-primary" >Update</button>
                  	</div>
                    </form>
                  </center>
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
