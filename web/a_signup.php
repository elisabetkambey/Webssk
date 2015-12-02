<!DOCTYPE html>
<?php
session_start();
	$koneksi = mysqli_connect('localhost','root','', 'webssk') or die("Koneksi Gagal !" . mysqli_error());
	
	$u_name=$_POST['u_name'];
	$name=$_POST['name'];
	$password=$_POST['password'];
	$repassword=$_POST['repassword'];
	$email=$_POST['email'];
	$brithday=$_POST['brithday']; 
	$address=$_POST['address']; 
	$no_hp=$_POST['no_hp'];
	
	$query ="SELECT id, nama FROM webssk.akun where u_name='$u_name' or email='$email'";
	$sql = "INSERT INTO akun (u_name, name, password, email, brithday, address, no_hp)
			VALUES ('$u_name', '$name', '$password', '$email', '$brithday','$address', '$no_hp')";
	$query2 ="SELECT `id` FROM webssk.akun where u_name='$u_name' and password='$password'";
	
	if($u_name !="" && $name != "" && $password != "" && $email !="" && $brithday !="" && $address !="" && $no_hp !="" && $password==$repassword){
		if(mysqli_num_rows(mysqli_query($koneksi, $query)) == 0){
				if (mysqli_query($koneksi, $sql)) {
					$last_id = mysqli_insert_id($koneksi);
					$_SESSION['now_user']=$last_id;
					$_SESSION['u_name']=$u_name;
					header("Location: index.php");
					echo $last_id;
				} else {
					echo "gagal";
				}}
		else {
			echo "nama atau email sudah digunakan";
		}} else 
		{
			echo "ada data yang kosong atau password salah";
		}
		

mysqli_close($koneksi);
?>

