<?php

$connec=mysqli_connect("localhost","root","","voting_project");
//if($connec==true)
//{
	
	//echo"<br>connection true";
	
//}
//else
	//{
	
	//echo"<br> connection not true";
	
//}






?>






<!DOCTYPE html>
<html>
<head>
<style>
.gradient-custom {
/* fallback for old browsers */
background: #f093fb;

/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-linear-gradient(to bottom right, rgba(240, 147, 251, 1), rgba(245, 87, 108, 1));

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background: linear-gradient(to bottom right, rgba(240, 147, 251, 1), rgba(245, 87, 108, 1))
}

.card-registration .select-input.form-control[readonly]:not([disabled]) {
font-size: 1rem;
line-height: 2.15;
padding-left: .75em;
padding-right: .75em;
}
.card-registration .select-arrow {
top: 13px;
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
<body>


<?php if(!empty($_POST['signup']))
{
$fullname=$_POST['fullname'];
$phone=$_POST['phone'];

$email=$_POST['email'];

$password=$_POST['password'];
$repeatpassword=$_POST['repeatpassword'];
$image=$_FILES['image']['name'];
$tmp=$_FILES['image']['tmp_name'];
$roles=$_POST['role'];
$status=$_POST['status'];
$vote=$_POST['vote'];
if(($password==$repeatpassword)&&(!empty($_POST['fullname'])&&(!empty($_POST['phone'])&&(!empty($_POST['email'])))))
{	move_uploaded_file($tmp,"../images/".$image);
     $password=md5($password);	
		
									
$query="insert into voter(fullname,phone,email,password,image,role,status,vote) values('$fullname','$phone','$email','$password','$image','$roles',0,0)";
$result=mysqli_query($connec,$query);
//echo $query;
if($result)
{
	echo'<script>
	alert("successfully registered");
 </script>';
	//echo"successfully registered";
	header("Location:signin.php");
}
else
	{
		echo'<script>
	alert("not successfully registered");
 </script>';
	
}

							
}

else{
	
	
		echo'<script>
alert("check your password or email");

</script>';
	

}

}
?>



<section class="vh-120 " style="background-color: 	#9F2B68;">
  <div class="container py-5 h-100">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-12 col-lg-9 col-xl-7">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Registration Form</h3>
            <form  method="post" enctype='multipart/form-data'>

              <div class="row">
                <div class="col-md-6 mb-4">

                  <div class="form-outline">

					<input type="text" class="form-control form-control-lg" placeholder=""  name="fullname" required>
                    <label class="form-label" for="firstName">Full Name</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
				  <input type="text" class="form-control form-control-lg" placeholder="" name="phone" required>

                    <label class="form-label" for="lastName">Phone.No</label>
                  </div>

                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-4 d-flex align-items-center">

                  <div class="form-outline datepicker w-100">
				  
				  
				  
				  
				  
				  <input type="text" class="form-control form-control-lg" placeholder="" name="email" required>
				  
				  
				  

                    <label for="email" class="form-label">Email</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4">

         <div class="form-outline datepicker w-100">
				  
				  
				  
				  
				  

				  
				  
				  <input type="text" class="form-control form-control-lg" placeholder="" name="password">

                    <label for="email" class="form-label">Password</label>
                  </div>

        

     

                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
				  <input type="text" class="form-control form-control-lg" placeholder="" name="repeatpassword">
             
                    <label class="form-label" for="emailAddress">Repeat Password</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
				  <input type="file" class="form-control form-control-lg" placeholder="enter product images" name="image" required>
 
                    <label class="form-label" for="phoneNumber">Product Image</label>
                  </div>

                </div>
              </div>

              <div class="row">
                <div class="col-12">

                  <select id="role" class="form-control " name="role"  required>
	<option value="">--- Choose voter or group ---</option>
  <option value="Voter">Voter</option>
  <option value="Group">Group</option>
 
 
</select>
                  <label class="form-label select-label">Choose option</label>

                </div>
              </div>

              <div class="mt-4 pt-2">

				<input type="submit" value="Registered" class="btn btn-success btn-lg" name="signup"/>
              </div>

<input type="hidden" class="form-control" placeholder="enter status" name="status">


<input type="hidden" class="form-control" placeholder="enter vote" name="vote">


            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>







</body>
</html>










