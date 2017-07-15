<?php 
		$conn=mysql_connect("localhost","root","");
		mysql_select_db("iandeye",$conn);
		if(isset($_POST['butn']))
		{
			
			
			echo "<table>
				<tr>
				<td>exam name</td>
				<td>medium</td>
				<td>dateofexam</td>
				</tr>
					$res=mysql_query("select * from requests where qual=(select qualification from scribe where $_SESSION['$user'])");
					while($row = mysql_fetch_array($result))
					{
						echo "<tr>";
						echo "<td>",.$row['examname']"</td><td>"
						echo "<td>",.$row['medium']"</td><td>"
						echo "<td>$",.row['doe']"</td><td>"
					}
					
				</table>"	
		}		
?>