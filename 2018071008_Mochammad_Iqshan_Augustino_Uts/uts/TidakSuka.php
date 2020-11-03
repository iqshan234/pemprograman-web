<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tidak Suka</title>
    <style>
        body{
            background-color: dimgray;
        }
        #pong{
            border: 2px solid #FFF;
            position: absolute;
            margin :auto;
            top:0;
            right:0;
            left:0;
            bottom:0;
        }
    </style>
</head>
<body>
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
      background-image:url(anjay24.jpg);
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


  if($_SESSION['level']==""){
    header("location:index.php?pesan=gagal");
  }

  ?>

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



  if($_SESSION['level']==""){
    header("location:index.php?pesan=gagal");
  }

  ?>
 <b><?php echo $_SESSION['username']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></b>.</p>
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
<font face=arial size=3 color=red >
<H1  color=red >List Game2x Yang Tidak Saya Sukai</H1>
</font>
<br>
                    <h2>Amnesia Rebirth </a></h2>
                        </h4>
                              <p>Saya tidak suka game  Amnesia: Rebirth,karena terlalu banyak tempat2x yg kudu di exprot serta sedikitnya jumcare di game ini tapi keturunan baru game ini menuju kegelapan dari pencipta seri Amnesia yang ikonik. Sebuah perjalanan yang mengerikan melalui kesedihan dan keputusasaan, menjelajahi batas-batas ketahanan manusia.
                          <br>
                          <br> 
MINIMUM:<br>
Requires a 64-bit processor and operating system<br>
OS: Windows 7 / 8 / 10, 64-bits<br>
Processor: Core i3 / AMD FX 2.4Ghz<br>
Memory: 4 GB RAM<br>
Genre: Horor<br>
Graphics: OpenGL 4.0, Nvidia GTX 460 / AMD Radeon HD 5750 / Intel HD 630<br>
Storage: 4 GB available space<br>

                         </p>
                  <hr>
                 <h2> Tonton bro video gameplay Amnesia Rebirth saya dijamin seru dan serem !subcribe!</h2>
                  <hr>
                    <div class = "media">
                       <a class = "pull-left" href = "#">
                         <img src="anjay4.jpg" width="300px" alt="..." style="float:left;padding:1px 1px 20px 1px;">
                       </a>
                       <a class = "pull-left" href = "#">
                         <img src="anjay3,1.jpg" width="300px" alt="..." style="float:left;padding:1px 1px 20px 1px;">
                       </a>
                       <a class = "pull-left" href = "#">
                         <img src="anjay3,2.jpg" width="300px" alt="..." style="float:left;padding:1px 1px 20px 1px;">
                       </a>
                       <a class = "pull-left" href = "#">
                         <img src="anjay3,4.jpg" width="300px" alt="..." style="float:left;padding:1px 1px 20px 1px;">
                       </a>
                       <div class = "media-body">
                             <p> <iframe width="560" height="315" src="https://www.youtube.com/embed/RiXb-QVR0Ls" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                         </p>
                       </div>
                         <p style="text-align:right;">
                        </p>
                    </div>

                          
                          <h2>WWE 2K BATTLEGROUNDS</a></h2>
                        </h4>
                              <p>Saya tidak suka game Game pertarungan yang bernama WWE 2K Battlegrounds karena terlalu kecil serta char2x dalam game tersebut sangat lah sedikit tapi

Game yang dikembangkan oleh Saber Interactive ini menyuguhkan permainan lewat aksi cepat, berbagai kekuatan tambahan (power-up), gerakan spesial, senjata unik, dan medan pertarungan interaktif.

Dalam game ini, pemain dapat menerima tantangan untuk diri sendiri atau bertarung bersama teman dan keluarga di rumah dan secara online dalam beragam mode co-op maupun kompetisi.

David Ismailer selaku President 2K mengungkapkan bahwa pihaknya sangat senang bisa menambahkan WWE 2K Battlegrounds ke portofolio WWE dan properti olahraga berlisensi milik 2K serta menawarkan pilihan lain game untuk menikmati aksi video game WWE.

“Pertarungan gaya arcade ini sangat berbeda, namun menjadi pelengkap bagi franchise simulasi WWE 2K dan game pertarungan koleksi kartu WWE SuperCard,” ujarnya kepada tim Gadgetren melalui keterangan tertulis.
                          <br>
                          <br> 
                          MINIMUM:<br>
Requires a 64-bit processor and operating system<br>
OS: Windows 7 64-bit<br>
Processor: Intel Core i3-540 3.06GHz<br>
Memory: 4 GB RAM<br>
Graphics: NVIDIA GeForce GT 710<br>
DirectX: Version 11<br>
Genre:Fighting<br>
Storage: 9 GB available space<br>
Sound Card: DirectX 9.0c Compatible sound card<br>

                         </p>
                  <hr>
                  <h2>Tonton bro video gameplay WWE 2K BATTLEGROUNDS saya dijamin seru. !subcribe!</h2>
                  <hr>
                    <div class = "media">
                       <a class = "pull-left" href = "#">
                         <img src="anjay6.jpg" width="300px" alt="..." style="float:left;padding:1px 1px 20px 1px;">
                       </a>
                       <a class = "pull-left" href = "#">
                         <img src="anjay13.jpg" width="300px" alt="..." style="float:left;padding:1px 1px 20px 1px;">
                       </a>
                       <a class = "pull-left" href = "#">
                         <img src="anjay14.jpg" width="300px" alt="..." style="float:left;padding:1px 1px 20px 1px;">
                       </a>
                       <a class = "pull-left" href = "#">
                         <img src="anjay15.jpg" width="300px" alt="..." style="float:left;padding:1px 1px 20px 1px;">
                       </a>
                       <div class = "media-body">
                             <p> <iframe width="560" height="315" src="https://www.youtube.com/embed/Eo-_R3OFAuQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                         </p>
                       </div>
                         <p style="text-align:right;">
                        </p>
                    </div>

<h2>PHASMOBIA </a></h2>
                        </h4>
                              <p>Saya tidak suka game Phasmophobia karena game berburu hantu yang menyenangkan dan sekaligus menakutkan. Sebelum Anda keluar dan memeriksa lokasi untuk mencari bukti adanya hantu, Anda harus bersiap-siap, karena hantu ini dapat dan akan membunuh Anda. sering sekali sy terkena jumpcare ketika memainkan game tersebut kecuali yg di video wkwkwkwk tidak ketemu jumscare
                          <br>
                          <br> 
MINIMUM:<br>
OS: Windows 7 / 8 / 8.1 / 10<br>
Processor: Intel Core i3<br>
Memory: 4 GB RAM<br>
Genre:Horor<br>
Graphics: NVIDIA® GeForce® GTX 560 or better<br>
Storage: 11 GB available space<br>
                         </p>
                  <hr>
                  <h2>Tonton bro video gameplay Phasmophobia saya dijamin seru dan serem. !subcribe!</h2>
                  <hr>
                    <div class = "media">
                       <a class = "pull-left" href = "#">
                         <img src="anjay2,5.jpg" width="300px" alt="..." style="float:left;padding:1px 1px 20px 1px;">
                       </a>
                       <a class = "pull-left" href = "#">
                         <img src="anjay2,6.jpg" width="300px" alt="..." style="float:left;padding:1px 1px 20px 1px;">
                       </a>
                       <a class = "pull-left" href = "#">
                         <img src="anjay2,7.jpg" width="300px" alt="..." style="float:left;padding:1px 1px 20px 1px;">
                       </a>
                       <a class = "pull-left" href = "#">
                         <img src="anjay2,8.jpg" width="300px" alt="..." style="float:left;padding:1px 1px 20px 1px;">
                       </a>
                       <div class = "media-body">
                             <p> <iframe width="560" height="315" src="https://www.youtube.com/embed/Gh3475Vx0eI" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                         </p>
                       </div>
                         <p style="text-align:right;">
                        </p>
                    </div>

                         <h2>Mortal Kombat 11: Aftermath</a></h2>
                        </h4>
                              <p>saya sangat tidak suka game ini karena game Mortal Kombat Aftermath menampilkan kisah sinematik baru yang berpusat di sekitar kepercayaan dan penipuan. Dewa Api Liu Kang, penjaga baru waktu dan pelindung Earthrealm, berusaha mengamankan masa depan yang dia impikan. Untuk melakukannya, dia dipaksa untuk meminta bantuan dari sekutu yang tidak terduga dan musuh yang akrab. Pemain harus memutuskan siapa yang bisa mereka percayai dan siapa yang harus mereka kalahkan dengan nasib dipertaruhkan. Menempa sejarah baru.
                          <br>
                          <br> 
MINIMUM:<br>  
CPU: Intel Core i3-2100, 3.10 GHz / AMD FX-6300, 3.5 GHz or AMD Ryzen™ 5 1400, 3.2 GHz.<br>
OS: 64-bit Windows 7 / Windows 10.<br>
VIDEO CARD: NVIDIA® GeForce™ GTX 780 or NVIDIA® GeForce™ GTX 1060-6GB / AMD® Radeon™ R9 290 or RX 570<br>
Memory: 4 GB RAM<br>
Genre:Fighting<br>
Storage: 108 GB available space<br>
                         </p>
                  <hr>
                  <h2>Tonton bro video gameplay Mortal Kombat 11: Aftermath dijamin seru dan ngakak !subcribe!</h2>
                  <hr>
                    <div class = "media">
                       <a class = "pull-left" href = "#">
                         <img src="anjay1.jpg" width="300px" alt="..." style="float:left;padding:1px 1px 20px 1px;">
                       </a>
                       <a class = "pull-left" href = "#">
                         <img src="anjay21.jpg" width="300px" alt="..." style="float:left;padding:1px 1px 20px 1px;">
                       </a>
                       <a class = "pull-left" href = "#">
                         <img src="anjay22.jpg" width="300px" alt="..." style="float:left;padding:1px 1px 20px 1px;">
                       </a>
                       <a class = "pull-left" href = "#">
                         <img src="anjay23.jpg" width="300px" alt="..." style="float:left;padding:1px 1px 20px 1px;">
                       </a>
                       <div class = "media-body">
                             <p> <iframe width="560" height="315" src="https://www.youtube.com/embed/adB3NbuIdTE" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                         </p>
                       </div>
                         <p style="text-align:right;">
                        </p>
                    </div>

            

               </div>
            </div>
         </div> 
<br>
<br>
<img src="anjay11.jpg" alt="Girl in a jacket" width="2000" height="1000">
      <script src="https://cdn.rawgit.com/bungfrangki/efeksalju/2a7805c7/green-bintang-jatuh.js" type="text/javascript"></script>
<script src="https://cdn.rawgit.com/bungfrangki/efeksalju/2a7805c7/efek-salju-2.js" type="text/javascript"></script>
      <style type="text/css">* {cursor: url(https://cur.cursors-4u.net/user/use-1/use174.ani), url(http://cur.cursors-4u.net/user/use-1/use174.png), auto !important;}</style><a href="http://www.cursors-4u.com/cursor/2011/02/06/animated-sonic.html" target="_blank" title="Animated Sonic"><img src="http://cur.cursors-4u.net/cursor.png" border="0" alt="Animated Sonic" style="position:absolute; top: 0px; right: 0px;" /></a>

</body>
</html> 