<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <style type="text/css">
   .right   { text-align: right;}
</style>
    <style>
    body{
      background-image:url(anjay255.jpg);
      background-size:cover;
      background-attachment: fixed;
    }
    p{
      color:white;
    }
  </style>
<style>
<body>
<?php 
  session_start();
 
  // cek apakah yang mengakses halaman ini sudah login
  if($_SESSION['level']==""){
    header("location:index.php?pesan=gagal");
  }
 
  ?>
  <h1>Halaman Pegawai</h1>
 
  <p>Halo <b><?php echo $_SESSION['username']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></b>.</p>
  <a href="logout.php">LOGOUT</a>
 
  <br/>
  <br/>
 

* {box-sizing:border-box}
body {font-family: Verdana,sans-serif;}
.mySlides {display:none}

.slideshow-container {
  max-width: 10px;
  position: relative;
  margin: auto;
}

.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: left;
}

.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

.dot {
  height: 5px;
  width: 13px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 100%;
  display: inline-block;
  transition: background-color 0.6s ease;
}
.active {
  background-color: #717171;
}

.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}
@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}
@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@media only screen and (max-width: 200px) {
  .text {font-size: 15px}
}
</style>
</head>
<body>
<font face=arial size=3 color=green>

  <div id="clock"></div>
    <script type="text/javascript">

    function showTime() {
        var a_p = "";
        var today = new Date();
        var curr_hour = today.getHours();
        var curr_minute = today.getMinutes();
        var curr_second = today.getSeconds();
        if (curr_hour < 12) {
            a_p = "AM";
        } else {
            a_p = "PM";
        }
        if (curr_hour == 0) {
            curr_hour = 12;
        }
        if (curr_hour > 12) {
            curr_hour = curr_hour - 12;
        }
        curr_hour = checkTime(curr_hour);
        curr_minute = checkTime(curr_minute);
        curr_second = checkTime(curr_second);
     document.getElementById('clock').innerHTML=curr_hour + ":" + curr_minute + ":" + curr_second + " " + a_p;
        }
 
    function checkTime(i) {
        if (i < 10) {
            i = "0" + i;
        }
        return i;
    }
    setInterval(showTime, 500);

    </script>
    <script type='text/javascript'>

      var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
      var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum&#39;at', 'Sabtu'];
      var date = new Date();
      var day = date.getDate();
      var month = date.getMonth();
      var thisDay = date.getDay(),
          thisDay = myDays[thisDay];
      var yy = date.getYear();
      var year = (yy < 1000) ? yy + 1900 : yy;
      document.write(thisDay + ', ' + day + ' ' + months[month] + ' ' + year);

    </script>


 <h1 class="right">MY Protofolio</h1>
</font>

  <hr>
  <font face=arial size=3 color=yellow>


      <font face=calibri size=5>
<i><marquee scrollamount=15>WELLCOME</marquee></i> 

<style>
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}


.slideshow-container {
  max-width: 10000px;
  position: relative;
  margin: auto;
}


.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}


.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}


.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}


.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}


@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>
</head>
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}
</style>
</head>
<body>
<?php 
 
  // cek apakah yang mengakses halaman ini sudah login
  if($_SESSION['level']==""){
    header("location:index.php?pesan=gagal");
  }
  ?>
  <p>Halo <b><?php echo $_SESSION['username']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></b>.</p>

<nav class="navbar navbar-expand-lg navbar-drack bg-light" >
 
    <a class="navbar-brand" href="https://www.youtube.com/channel/UCEfdKbD-NnCbehXOe3np-7w">AUTOGAME DX69</a>
 
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
 
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
 
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="halaman_user.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="list.php">LIST</a>
    

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Menu Saya
          </a>
             <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="suka.php">Suka</a>
            <a class="dropdown-item" href="TidakSuka.php">Tidak Suka</a>
            <div class="dropdown-divider"></div>
          </div>
        </li>
        <li class="nav-item">
          <a class="ndropdown-item" href="tetris.php" tabindex="-1" aria-disabled="false">pong game</a>
        </li>
              <li class="nav-item">
          <a class="nav-link" href="hasil.php">Hasil Review</a>
        </li>
      </ul>
     <span class="navbar-text mr-3">
     
      </span>
          </li>
          <li class="nav-item">
         <a href="halaman_admin.php"class="btn btn-outline-success mr-2">Admin</a>
        </li>
      <font face=arial size=3 color=green>

  <a href="logout.php"class="btn btn-outline-success mr-2">LOGOUT</a>
    </div>
 </font>
</nav>
<hr>



 


<hr>


<h1>MY PICTURE</h1>

 <div class=" text-center ">
   <a href="kinjay11.JPG" > 
    <img src="kinjay11.jpg" height="180" width="250"/>
  <a href="kinjay.jpg">
    <img src="kinjay.jpg" height="180" width="250"/>
  <a href="kinjay2.jpg">
    <img src="kinjay2.jpg" height="180" width="250"/> 
      <a href="kinjay31.jpg">
    <img src="kinjay31.jpg" height="180" width="250"/> 
      <a href="kinjay4.jpg">
    <img src="kinjay4.jpg" height="180" width="250"/> 
      <a href="kinjay5.jpg">
    <img src="kinjay5.jpg" height="180" width="250"/>
      <a href="kinjay7.jpg">
    <img src="kinjay7.jpg" height="180" width="120"/> 
      <a href="kinjay6.jpg">
    <img src="kinjay6.jpg" height="180" width="150"/>
  </a>
</a>
</a>
</a>
</a>
</a>
</a>
</a>
</div>
  </a></a></a>

<br>
<h2>MY List Game Chanel Youtube Picture</h2>
<div class="slideshow-container">


<div class="mySlides fade">
  <div class="numbertext">1 / 8</div>
  <img src="anjay5.jpg" width="1900px">
  <div class="text">Dark Deception</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 8</div>
  <img src="anjay6.jpg" width="1900px">
  <div class="text">WWE 2K Battlegrounds</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 8</div>
  <img src="anjay3.jpg" width="1900px">
  <div class="text">Home Sweet Home</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">4 / 8</div>
  <img src="anjay2.jpg" width="1900px">
  <div class="text">Fall Guys: Ultimate Knockout</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">5 / 8</div>
  <img src="anjay1.jpg" width="1900px">
  <div class="text">Mortal Kombat 11 Aftermath</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">6 / 8</div>
  <img src="anjay4.jpg" width="1900px">
  <div class="text">Amnesia Rebirth</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">7 / 8</div>
  <img src="anjay1.1.jpg" width="1900px">
  <div class="text">Pamali</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">8 / 8</div>
  <img src="anjay2,5.jpg" width="1900px">
  <div class="text">Phasmobia</div>
</div>


</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
   <span class="dot"></span> 
  <span class="dot"></span> 
   <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); 
}
</script>


<br>
<h1>MY DATA</h1>

<table><tr>
    <td>  
<div class="text-center "> <font face=arial size=2 color=YELLOW >  <img src="nm.png" width="280px" height="200px"  >   <h4 >My Name</h4>  <p class="text-sm mb-1">Iqshan </div> </font></td>
  <td>  
<div class="text-center "> <font face=arial size=2 color=YELLOW >  <img src="20.png" width="260px" height="200px"  >   <h4 >My Age</h4>  <p class="text-sm mb-1">20TH </div> </font></td>
<td> <font face=arial size= 2 color=YELLOW > <div class=" text-center "> <img src="polisi.jpg" width="200px" >   <h4 >Police</h4> <p class="text-sm mb-0">MY FUTURE GOALS</p></div> </font></td> 
<td>  
<div class="text-center "> <font face=arial size=2 color=yellow >  <img src="tni.jpg" width="180px" height="200px" >   <h4 >TNI AD</h4>  <p class="text-sm mb-1">OTHER THAN MY FUTURE GOALS FIRST  </p></div> </font></td> 

<td>  
<div class="text-center "> <font face=arial size=2 color=YELLOW >  <img src="inf.png" width="160px" height="200px" >   <h4 >Informatika</h4>  <p class="text-sm2 mb-1">MY PRODI</p></div> </font></td>


   <td>  
<div class="text-center "> <font face=arial size=2 color=YELLOW >  <img src="shan.png" width="260px" height="200px"  >   <h4 >My Yt</h4>  <p class="text-sm mb-1">AUTOGAME DX69 </div> </font></td>
   <td>  
<div class="text-center "> <font face=arial size=2 color=YELLOW >  <img src="mancing.png" width="260px" height="200px"  >   <h4 >My Hoby</h4>  <p class="text-sm mb-1">FISHING IS MY HOBBY</div> </font></td>
   <td>  
<div class="text-center "> <font face=arial size=2 color=YELLOW >  <img src="gm.png" width="260px" height="200px"  >   <h4 >My Hoby</h4>  <p class="text-sm mb-1">AND GAME</div> </font></td>
  </tr></table>

<table><tr>
<td> <font face=arial size= 2 color=YELLOW > <div class=" text-center "> <img src="gym.png" width="200px" >   <h4 >GYM</h4> <p class="text-sm mb-0">MY AKTIVITAS</p></div> </font></td> 
<td>  
<div class="text-center "> <font face=arial size=2 color=yellow >  <img src="coding.png" width="280px" height="200px" >   <h4 >Coding</h4>  <p class="text-sm mb-1">MY SKILL </p></div> </font></td> 

<td>  
<div class="text-center "> <font face=arial size=2 color=YELLOW >  <img src="PT.png" width="160px" height="200px" >   <h4 >PhotoShop</h4>  <p class="text-sm2 mb-1">MY SKILL</p></div> </font></td>

<td>  
<div class="text-center "> <font face=arial size=2 color=YELLOW >  <img src="pr.png" width="220px" height="200px"  >   <h4 >Premiere Pro</h4>  <p class="text-sm mb-1">MY SKILL </div> </font></td>
  <td>  
<div class="text-center "> <font face=arial size=2 color=YELLOW >  <img src="silat.png" width="200px" height="200px"  >   <h4 >Silat</h4>  <p class="text-sm mb-1">MY Self-Defense </div> </font></td>
  <td>  
<div class="text-center "> <font face=arial size=2 color=YELLOW >  <img src="tkj2.png" width="250px" height="200px"  >   <h4 >TKJ</h4>  <p class="text-sm mb-1">MY EXPERTISE </div> </font></td> 
   <td>  
<div class="text-center "> <font face=arial size=2 color=YELLOW >  <img src="islam.png" width="300px" height="200px"  >   <h4 >Islam</h4>  <p class="text-sm mb-1">My Agama</div> </font></td>
   <td>  
<div class="text-center "> <font face=arial size=2 color=YELLOW >  <img src="upj.png" width="200px" height="200px"  >   <h4 >UPJ</h4>  <p class="text-sm mb-1">My Universitas</div> </font></td>
  </tr></table>
<br>
<br>
<br>
<h1>My 3 Video Youtube</h1>
<table><tr>
  <td><iframe width="560" height="315" src="https://www.youtube.com/embed/l8A5Dz7P6gM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> </td>
  <td><iframe width="560" height="315" src="https://www.youtube.com/embed/Gh3475Vx0eI" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></td>
  <td><iframe width="560" height="315" src="https://www.youtube.com/embed/fR3uRXoZTx8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></td>






      <script src="https://cdn.rawgit.com/bungfrangki/efeksalju/2a7805c7/green-bintang-jatuh.js" type="text/javascript"></script>
<script src="https://cdn.rawgit.com/bungfrangki/efeksalju/2a7805c7/efek-salju-2.js" type="text/javascript"></script>
      <style type="text/css">* {cursor: url(https://cur.cursors-4u.net/user/use-1/use174.ani), url(http://cur.cursors-4u.net/user/use-1/use174.png), auto !important;}</style><a href="http://www.cursors-4u.com/cursor/2011/02/06/animated-sonic.html" target="_blank" title="Animated Sonic"><img src="http://cur.cursors-4u.net/cursor.png" border="0" alt="Animated Sonic" style="position:absolute; top: 0px; right: 0px;" /></a>

</body>
</html> 