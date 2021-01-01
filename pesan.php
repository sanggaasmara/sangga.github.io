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
body {background-image: url("img/ps.jpg");
      background-size: cover;}

      .jumbotron {
    background-color: rgb(20, 123, 207);
    width: 100%;
    height: 250px;}

        footer{
      background-color: rgb(20, 123, 207);
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

 
<!--navbar-->
<nav class="navbar navbar-expand-lg navbar-light bg-primary mb-3">
  <a class="navbar-brand" href="#">Sewa yuk</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
  <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="daftarpaket.php">Daftar Paket</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="kontak.php">Contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="jenis.php">Pesan</a>
      </li>   
    </ul>
    </ul>
  </div>
  <a href="Logout.php" class="btn btn-primary">Logout</a>
</nav>
<body>

     <!--Section menu-->
            <div class="container page-top">
                <div class="row">
                    <div class="col" >
                        <div class="card" style="width: 21rem;">
                            <img src="img/paketwisata.jpg" class="card-img-top" alt="">
                                <div class="card-body">
                                    <h3 class="card-title"><b>Paket PS3</b></h3>
                                    <p class="card-text"> Rental PS3 dengan harga Rp.50.000. Kamu bisa bermain seharian.
                                        Jika ingin memesan, silahkan klik tombol booking.
                                    </p>
                                    <a href="booking.php" class="btn btn-primary">Book Now</a>
                                </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card" style="width: 21rem;">
                            <img src="img/mobil1.jpg" class="card-img-top" alt="">
                                <div class="card-body">
                                    <h3 class="card-title"><b>Paket PS4</b></h3>
                                    <p class="card-text">Rental PS4 dengan harga Rp.100.000. Kamu bisa bermain seharian.
                                        Jika ingin memesan, silahkan klik tombol booking.</p>
                                    <a href="paketmobil.php" class="btn btn-primary">Book Now</a>
                                </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card" style="width: 21rem;">
                            <img src="img/bus1.jpg" class="card-img-top" alt="">
                                <div class="card-body">
                                    <h3 class="card-title"><b>Paket PS5</b></h3></b>
                                    <p class="card-text">Rental PS5 dengan harga Rp.200.000. Kamu bisa bermain seharian.
                                        Jika ingin memesan, silahkan klik tombol booking.</p>
                                    <a href="paketbus.php" class="btn btn-primary">Book Now</a>
                                </div>
                        </div>
                    </div>
                </div>
            </div>   
<br>
<br>
</body>
<footer>
<div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="foooter-col">
                <div class="brand">
                    <img src="img/d.jpg" alt="logo" width="75px">
                    <h1>PERSEWAAN</h1>
                </div>
                <br>
                <p>Kami siap melayani anda</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="foooter-col">
                    <h2>Kontak</h2>
                    <p class="alamat">Jl.Kebangsaan Barat, Jawa Timur, Kota Malang,
                    Kel.Arjosari Kec.Bilmbing 65125</p>
                    <li>Whatsapp : 08123456789</li>
                    <li>Email : sewayuk@gmail.com</li>
                    
                </div>
            </div>
            <div class="col-md-4">
                <div class="foooter-col">
                        <h2>Info Persewaan</h2>
                        <p>Banyak tempat persewaan ps di Malang, dengan kreatifitas
                        kami akan memberikan harga yang paling menarik untuk anda.
                        </p>
                        </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
</html>