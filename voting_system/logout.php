<?php
session_start();
session_destroy();
session_unset();
$user=$_SESSION['user'];
if(empty($_SESSION['user']))
{
	
	header('Location:signin.php');
}	

echo'<script>
alert("you have successfully Logout");
window.location="signin.php";
</script>';


?>