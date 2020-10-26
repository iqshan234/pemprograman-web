<!DOCTYPE html>
<html>
<body>

<h2>HTML Forms</h2>

<form action="/action_page.php">
  <label for="namadepan">Nama Depan</label><br>
  <input type="text" id="namadepan" name="namabelakang" value=""><br>
  <label for="namabelakang">Nama Belakang</label><br>
  <input type="text" id="namabelakang" name="namabelakang" value=""><br>
  <label for="lname">Email:</label><br>
  <input type="text" id="email" name="email" value=""><br><br>
  <input type="submit" value="Submit">

<?php
include_once "koneksi.php";
	if (iseet($_POST['Submit'])) {
	$namadepan = $_POST['namadepan'];
	$namabelakang = $_POST['namabelakang'];
	$email = $_POST['email'];


$sql = "INSERT INTO latihan1 (namadepan,namabelakang,email)  VALUES ('$namadepan','$namabelakang','$email')";
         
         $runSQL = mysqli_query($conn,$strsql);        
         if ($runSQL) {
             $status = 1; //sukses
         }  
         else {
             $status = 0; //tidak sukses;
         }       
    }            
    ?>"

</form> 
</body>
</html>