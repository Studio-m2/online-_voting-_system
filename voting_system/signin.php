

<?php
session_start();
$connec=mysqli_connect("localhost","root","","voting_project");
//if($connec==true)
//{echo"<br>connection true";
//}
//else{echo"<br> connection not true";}
?>
<!DOCTYPE html>
<html>
<head>

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
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

<title>Page Title</title>
</head>
<body>


<?php

 if(!empty($_POST['signin']))
 {
$fullname=$_POST['fullname'];
$phone=$_POST['phone'];
$password=md5($_POST['password']);
$roles=$_POST['role'];
							
$query="select* from voter where  fullname='$fullname' AND phone='$phone' AND password='$password'   AND  role='$roles'  ";
$run=mysqli_query($connec,$query);
if(mysqli_num_rows($run)>0)
{
	
		$user=mysqli_fetch_array($run);
		
		 
		 $_SESSION['fullname']=$user['fullname'];
		 $_SESSION['status']=$user['status'];
		 $_SESSION['image']=$user['image'];
		  $_SESSION['id']=$user['id'];
		  $_SESSION['user']=$user;
	
	
	
	
	$run2=mysqli_query($connec,"select image,fullname,vote,id from voter where role='Group'");
	WHILE($row=mysqli_fetch_all($run2))
	{
		 $group_id=$row['id'];
		 $group_fullname=$row['fullname'];
		 $group_vote=$row['vote'];
		 $group_image=$row['image'];

		 //$_SESSION['id']=$group_id;
		 //$_SESSION['name']=$group_fullname;
		 //$_SESSION['vote']=$group_vote;
		 //$_SESSION['image']=$group_image;
		  $_SESSION['group']=$row;
	}        

		
		
		
		
header("Location:index2.php");
}
 else{
	 
	 echo'<script>
alert("error in credentials");

</script>';
	 
	// echo "error in credentials ";
	}	} 
		?>




<section class="vh-100  " style="background-color: 	#9F2B68;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign in</p>

                <form class="mx-1 mx-md-4" method="post">

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
<input type="text" class="form-control" placeholder="" name="fullname">
                      <label class="form-label" for="form3Example1c">Your Name</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-phone fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
<input type="text" class="form-control" placeholder="" name="phone">
                      <label class="form-label" for="form3Example3c">Your Phone</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
<input type="text" class="form-control" placeholder="" name="password">
                      <label class="form-label" for="form3Example4c">Password</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
<select id="role" class="form-control " name="role" >
  <option value="Voter">Voter</option>
  <option value="Group">Group</option>
</select>
                    </div>
                  </div>

     

                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
  
					<input type="submit" value="Signin" class="btn btn-success btn-lg" name="signin"/>
                  </div>

                </form>

              </div>
              <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                <img src="images/vote.jpg"
                  class="img-fluid" alt="Sample image">

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



</body>
</html>


