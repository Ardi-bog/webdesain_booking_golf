  <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <title>GOLFJKT</title>
  </head>
  <body>
   <nav class="navbar navbar-expand-lg navbar-light bg-success">
        <div class="container">
        <a class="navbar-brand" href="../index.php" style="color: white;font-family: Monument;">GOLFJKT</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ml-auto" >
            <a class="nav-item nav-link " href="../index.php" style="color: white;">Home <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="jadwal.php?page=jadwal&&konten=jadwal"style="color: white;">Jadwal</a>
            <a class="nav-item nav-link" href="jadwal.php?page=jadwal&&konten=transaksi"style="color: white;">Transaksi</a>
            <a class="nav-item nav-link " href="jadwal.php?page=jadwal&&konten=klasemen"style="color: white;">Klasemen</a>
            <a class="nav-item nav-link " href="jadwal.php?page=jadwal&&konten=scanqr"style="color: white;">Scan QR</a>
          </div>
          </div>
        </div>
    </div>
      </nav>

      <?php 
        $page = $_GET['page'];
        $konten = $_GET['konten'];
        if (isset($page)) {
            if ($page == 'jadwal') {
                switch ($konten) {
                    case 'jadwal':
                        include 'kontent.php';
                        break;
                    case 'transaksi':
                        include 'pesan_lapangan.php';
                        break;
                    case 'klasemen':
                        include 'klasemen.php';
                        break;
                    case 'scanqr':
                        include 'scanqr.php';
                        break;

                    case 'struk':
                        include 'transaksi.php';
                        break;
                    case 'proses':
                      include 'proses.php';
                    break;
                    default:
                        include 'kontent.php';
                        break;
                }
            }else{
                include '../home.php';
            }
        }
        ?>
</body>
</html>