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
</head>
<style>

        table {
            border-collapse: collapse;
            border-spacing: 0;
            width: 100%;
            border: 1 px solid #ddd;
            background-color: #f2f2f2
        }

        th, td {
            text-align: left;
            padding: 16px;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

body {background-image: url("img/b.jpg");
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

  #name, #hp, #address, #email, #jenis {
        border: 1px solid #5A9AD4;
        width: 10cm;
        height: 30px;
    }
#name, #hp {
        margin-left: 100px;
    }

#address {
        margin-left: 95px;
    }

#email {
        margin-left: 165px;
    }

#jenis {
        margin-left: 145px;
    }

</style>
<body>   
    <div class="jumbotron">
        <div class="container">
          <h1 class="display-4"> SEGERA BOOKING</h1>
          <p class="lead">Selamat Datang ! Nikmati permainan anda sepuasnya</p>
          <p>Semoga layanan ini membantu dan menyenangkan</p>
        </div>
</div>

<!--navbar-->
<nav class="navbar navbar-expand-lg navbar-light bg-primary mb-3">
 
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
        <a class="nav-link" href="pesan.php">Pesan</a>
      </li>   
    </ul> 
  </div>
</nav>

<div class="container page-top">
            <div class="row">
                <div class="col text-left">
                    <br> <br>
                    <h3>DAFTAR HARGA RENTAL PS</h3>
                    <br>
                </div>
            </div>

        <table>
            <tr>
                <th> id </th>
                <th> jenis </th>
                <th> harga </th>
                <th> keterangan </th>
            </tr>
            <?php
                include "koneksi2.php";

                $query = "SELECT * FROM persewaan";
                $result = mysqli_query($connect, $query);

                if (mysqli_num_rows($result)>0) {
                    while ($row = mysqli_fetch_array($result)) {
            ?>
            <tr>
                <td> <?php echo $row["id"] ?> </td>
                <td> <?php echo $row["jenis"] ?> </td>
                <td> <?php echo $row["harga"] ?> </td>
                <td> <?php echo $row["keterangan"] ?> </td>
            <?php 
                }
            }
            else {
                echo "0 result";
            }
            ?>
            </tr>
        </table>
        <br> <br>
        <br> <br>
        <?php
        echo "Silahkan Klik --> "
        ?>
        <a href="booking.php" class="btn btn-primary">Book Now</a>
        <?php
        echo "Untuk Pemesanan Paket."
        ?>
    </div>
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
                        kami akan memberikan harga yang paling menarik untuk anda. </p>
                        </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
</html>