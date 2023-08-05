<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"><h3>Digital Voter</h3></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul  class="navbar-nav mr-auto">
     


      
    </ul>
	      <h3 style="margin-right:25%;"><span class="voting">Online Voting System</span></h3>
    <form style="margin-right:10px;" class=" my-2 my-lg-0 ">
	<span style="margin-left:-4px;"><img src="../images/<?php echo  $_SESSION['user']['image'];?>"  style="width:30px;border-radius:50%;" alt="card-img-top" alt="..." ></span>

	
<p ><?php echo $_SESSION['user']['fullname']; ?></p>

    </form>
	

	
	
	<button class="buttons button1"> <a  class="dropdown-item" href="logout.php">Logout</a></button>

	
	
	
  </div>
</nav>