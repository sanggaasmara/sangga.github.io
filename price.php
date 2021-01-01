<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Persewaan</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <link rel="stylesheet" href="style.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <title>Document</title>

    <div class="jumbotron">
        <div class="container">
          <h1 class="display-4"> SEGERA BOOKING</h1>
          <p class="lead">Selamat Datang ! Nikmati permainan anda sepuasnya</p>
          <p>Semoga layanan ini membantu dan menyenangkan</p>
        </div>
</div>
</head>
<style>
body {background-image: url("");
      background-size: cover;}

      .jumbotron {
    background-color: rgb(20, 123, 207);
    width: 100%;
    height: 250px;}

        footer{
      background-color: blue;
      padding: 80px 0;
  }

  footer .brand{
      display: flex;
  }

  footer .brand img{
      width: 70px;
      height: 70px;
      margin-right: 20px;
  }

  footer .brand h1{
      font-size: 25px;
      font-weight: 600;
      line-height: 25px;
      text-transform: uppercase;
  }
  </style>
<body>  
<nav class="navbar navbar-expand-lg navbar-light bg-primary mb-3">
 
 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
   <span class="navbar-toggler-icon"></span>
 </button>
 <div class="collapse navbar-collapse" id="navbarNav">
   <ul class="navbar-nav">
   <li class="nav-item">
       <a class="nav-link" href="jenis.php">< Back</a>
     </li>
   </ul>
 </div>
</nav>
<body>
<div class="container page-top">
    <?php
            $name = $_POST['name'];
            $alamat = $_POST['alamat'];
            $hp = $_POST['hp'];
            $email = $_POST['email'];
            $jenis = $_POST['jenis'];
            $url = 'price.php';
            if ($jenis == 1) {
                $harga = 50000;
            } else if ($jenis == 2) {
                $harga = 100000;
            } else if ($jenis == 3) {
                $harga = 200000;
            } 
            
            $total= $harga;
        ?>
            <div class="count">
                <h2 class="judul">PERSEWAAN</h2><br>
                <p id="p1" style="letter-spacing: 5px;">Nama Lengkap <h6><?php echo "$name"; ?></p><br></h6>
                <p id="p2" style="letter-spacing: 4px;">Alamat Lengkap <h6><?php echo "$alamat"; ?></p><br></h6>
                <p id="p3" style="letter-spacing: 4px;">Nomor Telepon <h6><?php echo "$hp"; ?></p><br></h6>
                <p id="p4" style="letter-spacing: 6px;">Email <h6><?php echo "$email"; ?></p><br></h6>
                <p id="p5" style="letter-spacing: 3px;">Harga Sewa<h6><?php echo " Rp $harga"; ?></p><br></h6> 
                <p id="p7" style="letter-spacing: 3px;" ><h5>TOTAL BAYAR      = Rp <?php echo "$total"; ?></p> </h5>  
                <br>
                
                <h5>Terimakasih telah melakukan pemesanan.</h5>
                <p> Silahkan lakukan screenshoot untuk bukti pemesanan, sebagai tanda bukti.</p>
                    <br> <br>
                    <a href="index.php">kembali halaman home</a>
                    <br> <br> <br>
                    <a href="Logout.php" class="btn btn-primary">Logout</a>
                    
                </p>
            </div>
            <br> <br> <br>  
</div>
</body>
</html>