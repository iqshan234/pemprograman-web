<?php
session_start()

$user = 'hilman';
$password = '123';

if ( isset($_POST['submit']) ) {

if ( $_POST['nama'] == $user &&
	 $_POST['password' == $password]) {

	setcookie('nama_user', $_POST['nama'], time()+120);

$_SESSION['nama_user'] = $_POST['nama'];
	header('Location: profile.php?nama' );

}else{
	echo 'login gagal!';
}
}

  
  ?>

  <form action="profile.php" method="post">
  		<input type="text" name="nama">
  		<input type="password" name="password">
  		<input type="submit" name="submit">
  </form>