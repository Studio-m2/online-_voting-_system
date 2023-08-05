<?php
session_start();
$connec=mysqli_connect("localhost","root","","voting_project");

if(empty($_SESSION['user']))
{
	
	header('Location:signin.php');
}	



$row=$_SESSION['group'];
$user=$_SESSION['user'];

if(!empty($_GET['id']))
{


$vote=$_GET['gvote'];
$total=$vote+1;
$gid=$_GET['id'];
$uid=$_SESSION['id'];
  $update_status=mysqli_query($connec,"update voter set  status=1 where id ='$uid'");
 $update_status=mysqli_query($connec,"update voter set  vote='$total' where id ='$gid'");
if($update_status and $update_status)
{
	$group=mysqli_query($connec,"select image,fullname,vote,id from voter where role ='Group'");
 $fetchgroup=mysqli_fetch_all($group);
	$_SESSION['group']=$fetchgroup;
	$_SESSION['status']=1;
	

	echo'<script>
alert("you have voted successfully");
window.location="index2.php";
</script>';
	
}
else{echo "you have no voted";	}
}

?>