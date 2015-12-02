<?php
session_start();
if(isset($_SESSION['now_user'])){
header("Location:profil.php");
}
?>
<!DOCTYPE html>
<html lang="en">
	
	<!-- http://www.bootply.com/sY7gQy6XF7 -->
    <div class="container">
    <h1>Sign Up</h1>
  	<hr>
	<div class="row">
      <!-- left column -->
	  <!-- edit form column -->
        <h3>Personal Info<i class="fa fa-user"></i></h3>
        
        <form action="a_signup.php" method="post" class="form-horizontal" role="form">
		
          <div class="form-group">
            <label class="col-lg-3 control-label">Username</label>
            <div class="col-lg-8">
              <input class="form-control" value="" type="text" name="u_name">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Name</label>
            <div class="col-lg-8">
              <input class="form-control" value="" type="text" name="name">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Email</label>
            <div class="col-lg-8">
              <input class="form-control" value="" type="text" name="email">
            </div>
          </div>
          <div class="form-group">
            <i class="fa fa-lock"></i><label class="col-lg-3 control-label">Password</label>
            <div class="col-lg-8">
              <input class="form-control" value="" type="Password" name="password">
            </div>
          </div>
          <div class="form-group">
            <i class="fa fa-lock"></i><label class="col-md-3 control-label">Confirm password</label>
            <div class="col-md-8">
              <input class="form-control" value="" type="Password" name="repassword">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Date of Birth</label>
            <div class="col-md-8">
              <input class="form-control" value="" type="text" name="brithday">
            </div>
          </div>
		  <div class="form-group">
            <label class="col-md-3 control-label">Phone Number</label>
            <div class="col-md-8">
              <input class="form-control" value="" type="text" name="no_hp">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Address</label>
            <div class="col-md-8">
              <input class="form-control" value="" type="text" name="address">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <input class="btn btn-primary" value="Save" type="submit">
              <span></span>
            </div>
          </div>
        </form>
      </div>
	</div>
</html>