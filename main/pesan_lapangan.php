<?php
    include "koneksi.php";
?>
    <div class="container">
        <div class="row">
            <div class="">
                <div class="card card-signin flex-row my-5">
                    <div class="card-img-left d-none d-md-flex" style="margin: 0%;padding: 0%; ">
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <div class="card mt100 tab-card">
                                    <div class="card-header tab-card-header">
                                        <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link" id="one-tab" data-toggle="tab" href="#one" role="tab" aria-controls="One" aria-selected="true"><span style="color: black;">Pesan</span></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="two-tab" data-toggle="tab" href="#one" role="tab" aria-controls="Two" aria-selected="false"><span style="color: black;">Pesan Sebagai TNI</span></a>
                                            </li>
                                             <li class="nav-item">
                                                <a class="nav-link" id="two-tab" data-toggle="tab" href="#one" role="tab" aria-controls="Two" aria-selected="false"><span style="color: black;">Pesan Sebagai Member</span></a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active p-3" id="one" role="tabpanel" aria-labelledby="one-tab">
                                            <div class="row">

                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb30">
                                                    <form>
                                                        <div class="row">

                                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                                <h4 class="tour-form-title">Pemesanan Lapangan</h4>
                                                            </div>
                                                            <form method="post" action ="proses.php">
                                                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">

                                                                <div class="form-group">
                                                                    
                                                                    <label class="control-label" for="inputNama">Nama Lengkap</label>
                                                                    <input type="text" id="inputNama" name="nama" class="form-control" placeholder="Nama Lengkap" required>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                                                <div class="form-group">
                                                                    <label class="control-label" for="datepicker">Check in</label>
                                                                    <div class="input-group">
                                                                        <input id="datepicker" name="tanggal" type="date" placeholder="Date" class="form-control" required>
                                                                        <!-- <input type="date" name="" id=""> -->
                                                                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span> </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                                                <div class="form-group">
                                                                    <label for="pilihWaktu">Pilih Waktu</label>
                                                                    <input type="time" id="pilihWaktu" name="jam" class="form-control" placeholder="Select time">

                                                                </div>
                                                            </div>
                                                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                                                <div class="form-group">
                                                                    <label class="control-label" for="phone"> Phone</label>
                                                                    <input id="phone" type="text" name="hp"placeholder="Phone" class="form-control" required>
                                                                </div>
                                                            </div>

                                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                                <a href="proses.php" role="button" type="submit" name="kirim" class="btn btn-success" >PESAN</a>
                                                            </div>
                                                        </div>
                                                    </form>

                                                </div>
                                            </div>
                                        </div>
                                       <?php
                                                    if(isset($_GET['pesan'])){
                                                        $pesan = $_GET['pesan'];
                                                        if($pesan == "input"){
                                                            echo "Data berhasil di input.";
                                                        }else if($pesan == "update"){
                                                            echo "Data berhasil di update.";
                                                        }else if($pesan == "hapus"){
                                                            echo "Data berhasil di hapus.";
                                                        }
                                                    }
                                                    ?>
                                      
                                        <!-- Proses -->


                                        <div class="tab-pane fade p-3" id="two" role="tabpanel" aria-labelledby="two-tab">
                                            <div class="row">

                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb30">
                                                    <form>
                                                        <div class="row">

                                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                                <h4 class="tour-form-title">Pemesanan Lapangan</h4>
                                                            </div>
                                                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                                                <div class="form-group">
                                                                    <label class="control-label" for="inputNama">Nama Lengkap</label>
                                                                    <input type="text" id="inputNama" class="form-control" placeholder="Nama Lengkap" required>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                                                <div class="form-group">
                                                                    <label class="control-label" for="datepicker">Check in</label>
                                                                    <div class="input-group">
                                                                        <input id="datepicker" name="datepicker" type="date" placeholder="Date" class="form-control" required>
                                                                        <!-- <input type="date" name="" id=""> -->
                                                                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span> </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                                                <div class="form-group">
                                                                    <label for="pilihWaktu">Pilih Waktu</label>
                                                                    <input type="time" id="pilihWaktu" class="form-control" placeholder="Select time">

                                                                </div>
                                                            </div>
                                                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                                                <div class="form-group">
                                                                    <label class="control-label" for="phone"> Phone</label>
                                                                    <input id="phone" type="text" placeholder="Phone" class="form-control" required>
                                                                </div>
                                                            </div>

                                                            
                                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                                <button type="submit" name="singlebutton" class="btn btn-success">Pesan</button>
                                                            </div>
                                                        </div>
                                                    </form>

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
       $page = $_GET['page'];
        $konten = $_GET['konten'];
        if (isset($page)) {
            if ($page == 'jadwal') {
                switch ($konten) {
                    case 'struk':
                        include 'transaksi.php';
                        break;
                }
            }else{
                include '../home.php';
            }
        }  
    ?>