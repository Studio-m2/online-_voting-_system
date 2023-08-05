
</style>
<?php


$connec=mysqli_connect("localhost","root","","voting_project");
session_start();

$row=$_SESSION['group'];
$user=$_SESSION['user'];
if(!empty($_SESSION['user'])){
if($_SESSION['status']==1)
{
	
$statuss='<stong style="background-color:green;color:white">Voted</strong>';	
	//echo $statuss;	
}

else
	{
	
$statuss='<stong style="background-color:red;">Not Voted</strong>';	
//echo $statuss;	
}
}
?>
<!DOCTYPE html>
<html>
<head>
<style>

@media only screen and (max-width: 600px) {
  
 .voting{
	margin-right:-42%; 
	 
 }
  .navbar-collapse{
	
padding:15px;
background:dark;	
	text-align:center;
}

}


.buttons {
  border: none;
 font-family: "Times New Roman", Times, serif;
 

  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 20px;

 
}



h5{
	
margin-right:22px;
	
	
}
.header {
		font-family: "Times New Roman", Times, serif;
   box-shadow: 28px  #000;
  padding: 30px;
  text-align: center;
  
  background:white;
  color: black;
  font-size: 30px;
 
}
.c1{ 
align-items: center;
	
   box-shadow: 8px 8px #000;
 
  float:right;
  width: 50%;
  border: 3px solid green;
  padding: 10px;
  bottom:60%;
margin-top:30px;
 font-family: "Times New Roman", Times, serif;

}


.c2{ 
  margin: auto;
	margin-top:40px;
   box-shadow: 8px 8px #000;

  border: 3px solid green;
 font-family: "Times New Roman", Times, serif;
}
</style>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>


<title>Page Title</title>
</head>

<?php include 'header.php';?>


<body style="background-color:#9F2B68;">



<?php


foreach( $_SESSION['group'] as $value)
{
	
	
//echo "<pre>";

//print_r($value);

//echo "<pre>";
	


?>






<div class="card c2" style="width: 250px;" >

    <div class="card-body text-center">
	    <img src="../images/<?php echo $value[0];?>"  style="width:50px;height:50px;" alt="card-img-top" alt="..." >
        <h5 class="card-title">Group_Name:<?php echo $value[1];?></h5>
        <p class="card-text">vote:<strong><?php echo $value[2];?></strong></p>
		<?php if($_SESSION['status']==0){?>
        <button class="btn btn-dark"  ><a  href="updatevote.php?id=<?php echo $value[3];?>&gvote=<?php echo $value[2];?> ">Vote</a></button><br><br>
		<?php } else {
			
			?>
		<button class="btn btn-dark"><a disabled >Voted</a></button><br><br>
		<?php 
		
		
		
		} ?>
    
	
	
	</div>
	
</div>
<hr style=" border-bottom-style: solid;">
<?php
}

?>













</body>
</html>
<div class="card c1" style="width: 250px;" >
    <img src="../images/<?php echo $user['image'];?>"  style="width:50px;height:50px;" alt="card-img-top" alt="...">
    <div class="card-body text-center">
        <h5 class="card-title">User_Name:<?php echo $user['fullname'];?></h5>
        <p class="card-text">status:<Strong><?php echo $statuss;?><Strong></p>

    </div>
</div>











