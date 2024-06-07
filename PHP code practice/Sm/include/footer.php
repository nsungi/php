
<div class="footer">
	Developed by group 24.
</div>
<?php
//close connection
$connect = mysqli_connect("localhost","root","","supermarket");	
if(isset($connect))
mysqli_close($connect);
?>

<!--body closes-->
</div>
</body>
</html>
