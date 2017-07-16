<html>
<head>
 <script type="text/javscript">
 function info($id)
 {
    <?php
	 $res1 = mysql_query("select * from requests where id=$id");
		echo $res1['examname'];
		echo $res1['doe'];
		echo $res1['medium'];
	?>
 }
  </script>
</head>
<?php 
		$conn=mysql_connect("localhost","root","");
		mysql_select_db("iandeye",$conn);
		if(isset($_POST['butn']))	
		{	$usr = $_SESSION['$user'];
			echo "<table>
					$res=mysql_query('select * from requests where qualification=(select qualification from scribe where username=$usr)');
					while($row = mysql_fetch_array($result))
					{
						echo "<tr>";
						$id = $row['id'];
						echo "<button name="btn"  onclick=info($id) data-toggle="modal" data-target="#myModal">".$row['examname']"</button></td>"
						echo "</tr>"
					}
				</table>"	
		}		
?>