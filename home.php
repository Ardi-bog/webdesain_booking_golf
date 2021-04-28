<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=0.1">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="css/product.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

  <title>GOLFJKT</title>
</head>

<body>
  <div class="container-fluid" style="padding: 0; margin: 0;">
    <div class="bg-utama" style="padding: 10px;">
      <div class="container">
        <div class="container">
          <ul class="nav justify-content-center">
            <li class="nav-item">
              <h1>GOLFJKT</h1>
              <hr style="border-radius:10px;background:#fff;height: 10px;width: 600px;margin-left: 70px;">
            </li>
          </ul>
          <div class="home">
            <ul class="nav justify-content-center">
              <li class="nav-item">
                <a class="nav-link" role="button" href="index.php?page=home">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="main/jadwal.php?page=jadwal&&konten=jadwal">Jadwal</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="main/jadwal.php?page=jadwal&&konten=transaksi">Transaksi</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="main/jadwal.php?page=jadwal&&konten=klasemen">Klasemen</a>
              </li>
            </ul>
          </div>
        </div>
        <!--konten-->
        <div class="konten">
          <div class="container">
            <h1 class="display-4" style="text-align: center;"> BEST PLACE TO PLAY </h1>
            <h2 style="text-align: center;">GOLF</h2>
            <hr style="border-radius:10px;background:#fff;height: 5px; width: 100px;margin-top: -30px; margin-left: 46%;">
            <a href="main/form_login.php" class="btn btn-light tombol "><i>Join Us</i> </a>
            <img src="img/giphy.gif" />
          </div>

        </div>

      </div>
    </div>
    <div class="container-fluid">
      <?php
      // include 'main/kontent.php';
      ?>
      <!-- <div class="container">
        <ul class="nav justify-content-center">
          <li class="nav-item">
            <h1 style="color: black;">GOLFJKT</h1>
            <hr style="border-radius:10px;background:#fff;height: 10px;width: 600px;margin-left: 70px;">
          </li>
        </ul>
      </div> -->
      <!-- <div class="sticky-top" style="position: sticky;"> -->
      <div class="container-fluid h-25" data-toggle="sticky-onscroll" style="z-index:1500;background-color: white; padding: 1%; position: sticky; top: 0;">
        <ul class="nav justify-content-end">
          <li class="nav-item" style="padding: 0;">
            <a class="nav-link" style="color: black;" href="index.php?page=home">Home</a>
          </li>
          <li class="nav-item" style="padding: 0;">
            <a class="nav-link" style="color: black;" href="main/jadwal.php?page=jadwal&&konten=jadwal">Jadwal</a>
          </li>
          <li class="nav-item" style="padding: 0;">
            <a class="nav-link" style="color: black;" href="main/jadwal.php?page=jadwal&&konten=transaksi">Transaksi</a>
            <!-- <hr style="margin-top: -7px; width: 50%; text-align: center;" /> -->
          </li>
          <li class="nav-item" style="padding: 0;">
            <a class="nav-link" style="color: black;" href="main/jadwal.php?page=jadwal&&konten=klasemen">Klasemen</a>
          </li>
        </ul>
      </div>
      <!-- </nav> -->
      <!-- </div> -->

      <div class="container-fluid">
        <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
          <div class="col-md-5 p-lg-5 mx-auto my-5">
            <h1 class="display-4 font-weight-normal">Tempat Terbaik Bermain Golf</h1>
            <p class="lead font-weight-normal">And an even wittier subheading to boot. Jumpstart your marketing efforts with this example based on Apple's marketing pages.</p>
            
          </div>
        </div>
        <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
          <div class="bg-success mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
            <div class="my-3 py-3">
              <h2 class="display-5">Fasilitas Berkualitas</h2>
              <p class="lead">Bola, Stick, Lapangan yang berkualitas dan terawat</p>
            </div>

            <img style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;" src="img/3.jpeg" style="background-size: cover;" />

          </div>
          <div class="bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
            <div class="my-3 p-3">
              <h2 class="display-5">Jadwal Teratur</h2>
              <p class="lead">And an even wittier subheading.</p>
            </div>

            <img style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;" src="img/bg.jpg" style="background-size: cover;" />

          </div>
        </div>

        <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
          <div class="bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
            <div class="my-3 p-3">
              <h2 class="display-5">Lapangan Indah</h2>
              <p class="lead">And an even wittier subheading.</p>
            </div>

            <img style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;" src="img/6.jpeg" style="background-size: cover;" />
          </div>
          <div class="bg-success mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
            <div class="my-3 py-3">
              <h2 class="display-5">Tempat Pemain Profesional</h2>
              <p class="lead">And an even wittier subheading.</p>
            </div>

            <img style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;" src="img/5.jpeg" style="background-size: cover;" />
          </div>
        </div>

      </div>
      <div class="container-fluid">
        <div id="parallax-world-of-ugg">

          <section>
            <div class="title">
              <h3>Best place to play</h3>
              <h1>GOLF</h1>
            </div>
          </section>

          <section>
            <div class="parallax-one">
              <h2>JAKARTA GOLF</h2>
              <h2><a class="btn btn-light" style="border-radius: 20px;" href="main/form_login.php">Gabung Sekarang</a></h2>
            </div>
          </section>

          <!-- <section>
            <div class="block">
              <p><span class="first-character sc">I</span>n 1978, Brian Smith landed in Southern California with a bag of sheepskin boots and hope. He fell in love with the sheepskin experience and was convinced the world would one day share this love. The beaches of Southern California had long been an epicenter of a relaxed, casual lifestyle, a lifestyle that Brian felt was a perfect fit for his brand. So he founded the UGG brand, began selling his sheepskin boots and they were an immediate sensation. By the mid 1980's, the UGG brand became a symbol of relaxed southern California culture, gaining momentum through surf shops and other shops up and down the coast of California, from San Diego to Santa Cruz. UGG boots reached beyond the beach, popping up in big cities and small towns all over, and in every level of society. Girls wore their surfer boyfriend's pair of UGG boots like a letterman jacket. When winter came along, UGG boots were in ski shops and were seen in lodges from Mammoth to Aspen.</p>
              <p class="line-break margin-top-10"></p>
              <p class="margin-top-10">The UGG brand began to symbolize those who embraced sport and a relaxed, active lifestyle. More than that, an emotional connection and a true feeling of love began to grow for UGG boots, just as Brian had envisioned. People didn't just like wearing UGG boots, they fell in love with them and literally could not take them off. By the end of the 90's, celebrities and those in the fashion world took notice of the UGG brand. A cultural shift occurred as well - people were embracing, and feeling empowered, by living a more casual lifestyle and UGG became one of the symbols of this lifestyle. By 2000, a love that began on the beaches had become an icon of casual style. It was at this time that the love for UGG grew in the east, over the Rockies and in Chicago. In 2000, UGG Sheepskin boots were first featured on Oprah's Favorite Things® and Oprah emphatically declared that she "LOOOOOVES her UGG boots." From that point on, the world began to notice.</p>
            </div>
          </section> -->

          <section>
            <div class="title">
            </div>
          </section>
        </div>
      </div>
      <!-- <div class="container-fluid">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="img/bg.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="img/fix.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="img/4.jpg" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div> -->

    </div>
  </div>


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
<footer class="container py-5">
  <div class="row">
    <div class="col-12 col-md">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="d-block mb-2">
        <circle cx="12" cy="12" r="10"></circle>
        <line x1="14.31" y1="8" x2="20.05" y2="17.94"></line>
        <line x1="9.69" y1="8" x2="21.17" y2="8"></line>
        <line x1="7.38" y1="12" x2="13.12" y2="2.06"></line>
        <line x1="9.69" y1="16" x2="3.95" y2="6.06"></line>
        <line x1="14.31" y1="16" x2="2.83" y2="16"></line>
        <line x1="16.62" y1="12" x2="10.88" y2="21.94"></line>
      </svg>
      <small class="d-block mb-3 text-muted">&copy; 2020-TEXT</small>
    </div>
    <div class="col-6 col-md">
      <h5>TEXT</h5>
      <ul class="list-unstyled text-small">
        <li><a class="text-muted" href="#">TEXT</a></li>
        <li><a class="text-muted" href="#">TEXT</a></li>
        <li><a class="text-muted" href="#">TEXT</a></li>
        <li><a class="text-muted" href="#">TEXT</a></li>
        <li><a class="text-muted" href="#">TEXT</a></li>
        <li><a class="text-muted" href="#">TEXT</a></li>
      </ul>
    </div>
    <div class="col-6 col-md">
      <h5>TEXT</h5>
      <ul class="list-unstyled text-small">
        <li><a class="text-muted" href="#">TEXT</a></li>
        <li><a class="text-muted" href="#">TEXT</a></li>
        <li><a class="text-muted" href="#">TEXT</a></li>
        <li><a class="text-muted" href="#">TEXT</a></li>
        <li><a class="text-muted" href="#">TEXT</a></li>
        <li><a class="text-muted" href="#">TEXT</a></li>
      </ul>
    </div>
    <div class="col-6 col-md">
      <h5>TEXT</h5>
      <ul class="list-unstyled text-small">
        <li><a class="text-muted" href="#">TEXT</a></li>
        <li><a class="text-muted" href="#">TEXT</a></li>
        <li><a class="text-muted" href="#">TEXT</a></li>
        <li><a class="text-muted" href="#">TEXT</a></li>
        <li><a class="text-muted" href="#">TEXT</a></li>
        <li><a class="text-muted" href="#">TEXT</a></li>
      </ul>
    </div>
    <div class="col-6 col-md">
      <h5>TEXT</h5>
      <ul class="list-unstyled text-small">
        <li><a class="text-muted" href="#">TEXT</a></li>
        <li><a class="text-muted" href="#">TEXT</a></li>
        <li><a class="text-muted" href="#">TEXT</a></li>
        <li><a class="text-muted" href="#">TEXT</a></li>
        <li><a class="text-muted" href="#">TEXT</a></li>
        <li><a class="text-muted" href="#">TEXT</a></li>
      </ul>
    </div>
    
  </div>
</footer>

</html>