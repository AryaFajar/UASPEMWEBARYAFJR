<!DOCTYPE html>
<html>
<head>
	<title>UAS PEMWEB ARYA</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<!-- Ini Navbar -->
	<nav>
		<div class="wrapper">
			<div class="logo"><a href=" ">InformasiPenilaian</a></div>
			<div class="menu">
				<ul>
					<li><a href="home.php">HOME</a></li>
					<li><a href="data_nilai.php">DATA NILAI</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- End Navbar -->

	<!-- Home -->
	<div class="column-2">
 		<form action="percabangan.php" target="1" method="GET">
        <h2>MASUKKAN NILAI ANDA
        </h2><br><br>
       	<input type="text" name="nilai"><br><br>
        <iframe name="1" width="500px" height="100px"></iframe><br>
        <br><input type="submit">
        </form>
    </div>
      <div class="column-2">
      	<form action="perulangan.php" target="2" method="GET">
        <h2>MASUKKAN UKURAN BADAN ANDA
        </h2><br><br>
       	<input type="text" name="baju"><br><br>
        <iframe name="2" width="500px" height="100px"></iframe><br>
        <br><input type="submit">
        </form>
  	  </div>
</body>
</html>