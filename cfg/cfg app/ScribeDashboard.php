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
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title">Modal Header</h4>
                    </div>
                    <div class="modal-body">
                      <p>Some text in the modal.</p>
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
                  	<button type="button" class="btn btn-primary">Update</button>
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
