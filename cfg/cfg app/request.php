<html>
<head>
 <script type="text/javscript">
 function info($id)
 {
    <?php
	 $res1 = mysql_query("select * from requests where id=$id");
		echo $result['examname'];
		echo $row['doe'];
		echo $row['medium'];
	  echo "<table>
	   <tr><td>
	   </td></tr>"
	?>
 }
  </script>
</head>
<?php 
		$conn=mysql_connect("localhost","root","");
		mysql_select_db("iandeye",$conn);
		if(isset($_POST['butn']))
		{
			
			
			echo "<table>
					$res=mysql_query("select * from requests where qual=(select qualification from scribe where $_SESSION['$user'])");
					while($row = mysql_fetch_array($result))
					{
						echo "<tr>";
						$id = $row['id'];
						echo "<button name="btn" value=.$row['examname'] onclick=info($id)>","</td>"
						echo "</tr>"
					}
				</table>"	
		}		
?>