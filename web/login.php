<?php

session_start();

if(!isset($_SESSION['now_user'])) { //jika tidak login
	if(isset($_POST['submit'])) {	//jika submit form		
		$u_name = $_POST['u_name'];
		$password = $_POST['password'];
		$koneksi = mysqli_connect('localhost','root','', 'webssk') or die("Koneksi Gagal !" . mysqli_error());
		$query ="SELECT `id`, `u_name`, `password` FROM webssk.akun where u_name='$u_name' and password='$password'";
		if($u_name != "" && $password != ""){
			if(mysqli_num_rows(mysqli_query($koneksi, $query)) == 0){
					echo "user name atau password salah";
					echo '										
						<div style="background-color:#10577A">
						<div class="form">
						<div class="header"><h2>Log In</h2></div>
						<div class="login">
							<form action="login.php" method="post">
						<ul>
						<li>
							<span class="un"><i class="fa fa-user"></i></span><input type="text" required class="text" placeholder="Username" name="u_name"/></li>
						<li>
							<span class="un"><i class="fa fa-lock"></i></span><input type="password" required class="text" placeholder="Password" name="password"/></li>
						<li>
							<input type="submit" name="submit" value="LOGIN" class="butn">
						</li>
						<!--<li><div class="span"><span class="ch"><a href="#">Forgot Password?</a></span></div></li>-->
						</ul>
						</form>
						</div><br>
							<div class="sign">
							<div class="need">Dont have an account?</div>
							<div class="up"><a href="#" onclick="getpages(\'signup.php\',\'screen\')">Sign Up</a></div>
						</div>
						</div>
					</div>';

			} else {
				$data = mysqli_fetch_assoc(mysqli_query($koneksi,$query));
				//echo $data['id'];
				//echo $data['u_name']; 
				$_SESSION['now_user'] = $data['id'];
				$_SESSION['u_name'] = $data['u_name'];
				//store session
				//header("Refresh:0"); //refresh
				echo "login berhasil..!!";
				//redirect ke halaman lain untuk lebih memastikan
				header( "Location: index.php");	
			}; 
		}else {
				echo "ada data yang kosong";
				echo '
					<div style="background-color:#10577A">
						<div class="form">
						<div class="header"><h2>Log In</h2></div>
						<div class="login">
							<form action="login.php" method="post">
						<ul>
						<li>
							<span class="un"><i class="fa fa-user"></i></span><input type="text" required class="text" placeholder="Username" name="u_name"/></li>
						<li>
							<span class="un"><i class="fa fa-lock"></i></span><input type="password" required class="text" placeholder="Password" name="password"/></li>
						<li>
							<input type="submit" name="submit" value="LOGIN" class="butn">
						</li>
						<!--<li><div class="span"><span class="ch"><a href="#">Forgot Password?</a></span></div></li>-->
						</ul>
						</form>
						</div><br>
							<div class="sign">
							<div class="need">Dont have an account?</div>
							<div class="up"><a href="#" onclick="getpages(\'signup.php\',\'screen\')">Sign Up</a></div>
						</div>
						</div>
					</div> 
						';
		}
		mysqli_close($koneksi);
		}
	 else {	//jika tidak submit form
		echo '
		<div style="background-color:#10577A">
						<div class="form">
						<div class="header"><h2>Log In</h2></div>
						<div class="login">
							<form action="login.php" method="post">
						<ul>
						<li>
							<span class="un"><i class="fa fa-user"></i></span><input type="text" required class="text" placeholder="Username" name="u_name"/></li>
						<li>
							<span class="un"><i class="fa fa-lock"></i></span><input type="password" required class="text" placeholder="Password" name="password"/></li>
						<li>
							<input type="submit" name="submit" value="LOGIN" class="butn">
						</li>
						<!--<li><div class="span"><span class="ch"><a href="#">Forgot Password?</a></span></div></li>-->
						</ul>
						</form>
						</div><br>
							<div class="sign">
							<div class="need">Dont have an account?</div>
							<div class="up"><a href="#" onclick="getpages(\'signup.php\',\'screen\')">Sign Up</a></div>
						</div>
						</div>
					</div>
		';
	}
}	else { //jika login
	echo '<h1>Halo  '.$_SESSION['u_name'].' </h1>';
	echo $_SESSION['now_user'] .'<a> Kamu sudah Login. </a><br>';
	
	echo '<a href="logout.php">Keluar</a>';
}

?>