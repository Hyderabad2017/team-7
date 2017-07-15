<?php
	session_start();
	include 'dbconfig/config.php';
	try
	{
		if(isset($_POST['sub']))
		{

		   include(retrieve.php);
			if($select->rowCount()!=0)
			{
				//echo '<script type="text/javascript"> alert("Records found for the given criteria.. donars found")</script>';
				echo '<table width="70%" broder="1" cellpadding="5" cellspacing="5">
					<tr>
						<th>Username</th>
						<th>Firstname</th>
						<th>LastName</th>
						<th>Password</th>
					</tr>';
				foreach($select as $row)
				{
					echo '<tr>
							<td>'.$row["Username"].'</td>
							<td>'.$row["Firstname"].'</td>
							<td>'.$row["LastName"].'</td>
							<td>'.$row["Password"].'</td>
						</tr>';
				}

			//echo "<tr>"."<td>".$data[name']."</td>"."<td>".$data['lastname']."</td>"."<td>".$data['lastname']."</td>"."<td>".$data['bloodgroup']."</td>"."<td>".$data['email']."</td>"."<td>".$data['gender']."</td>"."<td>".$data['datelastdonated']."</td>"."</tr>";
			}

			else
			{
				echo '<script type="text/javascript"> alert("No records found for the given criteria.. donars not found")</script>';
			}
		}
	}
	catch(PDOException $e)
	{
		echo "error".$e->getMessage();
	}
?>

   <input type="button" name="logout" value="logout"/>

</html>-->
