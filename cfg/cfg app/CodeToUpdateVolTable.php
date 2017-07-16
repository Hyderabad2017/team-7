<html>
<head>
 <script type="text/javscript">
 </script>
<?php

fuction acceptrequest()
{
if(isset($_POST['retbtn'])
{
	$res= "'update table tablename set checked='1' where checked='0' and id='$res1(id)'";
	if(mysql_rows()!=0)
	{
		echo '<script type="text/javascript"> alert("conformed request")</script>';
	
	}
	else
	{
		echo '<script type="text/javascript"> alert("declined request")</script>';
	
	}

}

}
?>
</html>