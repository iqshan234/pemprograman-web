<?php



if ( isset($_GET['password']) ) {
echo $_GET['password'];
  }
  ?>

  <form action="MetodeGet.php" method="get">
  		<input type="text" name="nama">
  		<input type="password" name="password">
  		<input type="submit" name="submit">
  </form>