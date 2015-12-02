<?php
session_start();
if(!isset($_SESSION['now_user']) && !isset($_SESSION['u_name'])) {
	echo '<h1>Harus login dulu<h1>';
	echo '<a href="#" onclick="getpages(\'login.php\',\'screen\')">Login</a>';
	
} else {
echo'

<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">

   <h1 style="text-align:center"> ORDER HERE</h1>
  <div class="container">         
  <div class="row">
	<div class="col-md-4">
        <img src="images/slider/avatar1.png" alt="Pulpit Rock"class="img-responsive">
    </div>
	<div class="col-md-4">
	<div class="container">
  <h4>Size and Price list</h4>                   
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Size</th>
        <th>Price</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>S</td>
        <td>Rp 30.000</td>
      </tr>
      <tr>
        <td>M</td>
        <td>Rp 35.000</td>
      </tr>
      <tr>
        <td>L</td>
        <td>Rp 40.000</td>
      </tr>
	  <tr>
        <td>XL</td>
        <td>Rp 45.000</td>
      </tr>
	  <tr>
        <td>XXL</td>
        <td>Rp 50.000</td>
      </tr>
	  <tr>
        <td>XXXL</td>
        <td>Rp 55.000</td>
      </tr>
    </tbody>
  </table>
</div>
</div>

	<div class="col-md-2">
	  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Size</th>
        <th>Pcs</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>S</td>
        <td><input id="formulir" class="form-control" value="" type="text" placeholder="pcs"></td>
      </tr>
      <tr>
        <td>M</td>
        <td><input id="formulir" class="form-control" value="" type="text"placeholder="pcs"></td>
      </tr>
      <tr>
        <td>L</td>
        <td><input id="formulir" class="form-control" value="" type="text"placeholder="pcs"></td>
      </tr>
	  <tr>
        <td>XL</td>
        <td><input id="formulir" class="form-control" value="" type="text"placeholder="pcs"></td>
      </tr>
	  <tr>
        <td>XXL</td>
        <td><input id="formulir" class="form-control" value="" type="text"placeholder="pcs"></td>
      </tr>
	  <tr>
        <td>XXXL</td>
        <td><input id="formulir" class="form-control" value="" type="text"placeholder="pcs"></td>
      </tr>
    </tbody>
  </table>
</div>
</div>
<div class="container">
<div class="row">
            <div class="col-md-12">
                <h4>Insert your data</h4>
                <div class="status alert alert-success" style="display: none"></div>
                <form id="formulir" class="contact-form" name="contact-form" method="post" action="sendemail.php" role="form">
                    <div class="row">
                        <div class="col-sm-7">
                            <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Address"></textarea>
                        </div>
						<div class="col-sm-5">
                            <div class="form-group">
                                <input type="text" class="form-control" required="required" placeholder="Contact Person">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" required="required" placeholder="Phone Number">
                            </div>
                            <div class="form-group">
                                <button id="but "type="button" onclick="next();">Next!</button>
									<a href="#" onclick="getpages(\'profil.php\',\'screen\')"><button type="button" class="btn btn-danger btn-md">View my Profile</button></a>
									<br>
								  
								  <div id="group-check"><input id="check" disabled type="checkbox" name="agree" value="yes"> Agree</div>
								  <br>
								  <input id="sub" type="submit" disabled>
								  
                            </div>
                        </div>
                    </div>
                </form>
            </div><!--/.col-sm-8-->
    </div>
	</div>
	</div>
	</div>
</div>
</div>';
}
?>
