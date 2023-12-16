<?php

require_once 'pembayaran.php';

$data = new pembayaran;
// var_dump($data->show());


// Update barang
if(isset($_POST['update'])){
  $no_bayar = $_POST['no_bayar'];
  $jumlah_bayar = $_POST['jumlah_bayar'];
  $tgl_bayar = $_POST['tgl_bayar'];

  $data->update($no_bayar, $tgl_bayar, $jumlah_bayar);
  
  header("Location: tabel-pembayaran.php");
}

// Tambah barang
if(isset($_POST['add'])){
  $no_bayar = $_POST['no_bayar'];
  $ctgl_bayar = $_POST['tgl_bayar'];
  $jumlah_bayar= $_POST['jumlah_bayar'];
  $noinduk_siswa= $_POST['noinduk_siswa'];
  $id_jenis= $_POST['id_jenis'];

  $data->store($no_bayar, $tgl_bayar, $jumlah_bayar, $noinduk_siswa, $id_jenis);
  header("Location: tabel-pembayaran.php");
}



// Delete data
if(isset($_POST['delete'])){
  $no_bayar = $_POST['no_bayar'];

  $data->delete($no_bayar);

  header("Location: tabel-pembayaran.php");
}
?>

?>

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.4.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">Tadika Mesra</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-bell"></i>
            <span class="badge bg-primary badge-number">4</span>
          </a><!-- End Notification Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
            <li class="dropdown-header">
              You have 4 new notifications
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-exclamation-circle text-warning"></i>
              <div>
                <h4>Lorem Ipsum</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>30 min. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-x-circle text-danger"></i>
              <div>
                <h4>Atque rerum nesciunt</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>1 hr. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-check-circle text-success"></i>
              <div>
                <h4>Sit rerum fuga</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>2 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-info-circle text-primary"></i>
              <div>
                <h4>Dicta reprehenderit</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>4 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>
            <li class="dropdown-footer">
              <a href="#">Show all notifications</a>
            </li>

          </ul><!-- End Notification Dropdown Items -->

        </li><!-- End Notification Nav -->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-chat-left-text"></i>
            <span class="badge bg-success badge-number">3</span>
          </a><!-- End Messages Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
            <li class="dropdown-header">
              You have 3 new messages
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-1.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Maria Hudson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>4 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-2.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Anna Nelson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>6 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-3.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>David Muldon</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>8 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="dropdown-footer">
              <a href="#">Show all messages</a>
            </li>

          </ul><!-- End Messages Dropdown Items -->

        </li><!-- End Messages Nav -->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">K. Anderson</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Kevin Anderson</h6>
              <span>Web Designer</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="tabel-siswa.php">
          <i class="bi bi-grid"></i>
          <span>Siswa</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="tabel-rapot.php">
          <i class="bi bi-person"></i>
          <span>Rapot</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="tabel-pembayaran.php">
          <i class="bi bi-question-circle"></i>
          <span>Pembayaran</span>
        </a>
      </li><!-- End F.A.Q Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="tabel-prakarya.php">
          <i class="bi bi-envelope"></i>
          <span>Prakarya</span>
        </a>
      </li><!-- End Contact Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="tabel-nilai.php">
          <i class="bi bi-card-list"></i>
          <span>Nilai Harian</span>
        </a>
      </li><!-- End Register Page Nav -->


    </ul>

  </aside><!-- End Sidebar-->


  <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="container">
          <div class="row">

            <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Pembayaran</h5>
                  
                  <button  class="btn btn-success" data-bs-toggle="modal" data-bs-target="#tambah">Tambah</button>



                
               
                <!-- Table with stripped rows -->
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th scope="col">no_bayar</th>
                      <th scope="col">tgl_bayar</th>
                      <th scope="col">jumlah_bayar</th>
                      <th scope="col">noinduk_siswa</th>
                      <th scope="col">id_jenis</th>
                  
                    </tr>
                  </thead>
                  <tbody>
                    
                  <?php foreach($data->show() as $value){
                    echo'
                    <tr>
                      <td>'.$value['no_bayar'].'</td>
                      <td>'.$value['tgl_bayar'].'</td>
                      <td>'.$value['jumlah_bayar'].'</td>
                      <td>'.$value['noinduk_siswa'].'</td>
                      <td>'.$value['id_jenis'].'</td>
                      <td>
                      <button  class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete'.$value['no_bayar'].'">Hapus</button>
                      <button  class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#update'.$value['no_bayar'].'">Edit</button>
                      </td>
                    </tr>';
                  }?>
                  </tbody>
                </table>



          </div>
          <!-- <div class="card-footer">
            {{-- {{ $jadwal->links() }} --}}
          </div> -->
        </div><!-- End Left side columns -->

      </div>
    </section>


    <!-- Modal Update-->
    <?php foreach ($data->show() as $value){
        echo '
            <div class="modal fade bd-example-modal-lg" id="update'.$value['no_bayar'].'" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Ubah Pembayaran</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">

                            <form action="" method="post">
                                <input type="hidden" name="no_bayar" value="'.$value['no_bayar'].'" class="form-control col-6">


                                <div class="mb-3 mt-3">
                                    <label for="Tanggal Bayar" class="form-label">Tanggal Bayar</label>
                                    <input type="text" name="tgl_bayar" value="'.$value['tgl_bayar'].'" class="form-control">
                                </div>

                                                        
                                <div class="mb-3 mt-3">
                                    <label for="Jumlah Bayar" class="form-label">Jumlah Bayar</label>
                                    <input type="text" name="jumlah_bayar" value="'.$value['jumlah_bayar'].'" class="form-control">
                                </div>


                          

                                <div class="submit mt-4">
                                    <button type="submit" name="update" class="btn btn-primary">
                                        Simpan
                                    </button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>';
    }?>    

            <!-- Modal Delete-->
            <?php foreach ($data->show() as $value){
        echo'
            <div id="delete'.$value['no_bayar'].'" class="modal fade" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-confirm">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="text-end">
                                <button type="button" class="btn-close text-end" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="mt-1">
                                <h4>Yakin untuk menghapus?</h4>	
                                <p>Apakah benar anda ingin menghapus data '.$value['no_bayar'].'?</p>
                            </div>
                            <div class="d-flex flex-row-reverse mt-3">
                                <form action="" method="post">
                                    <input type="hidden" name="id_rapor" value="'.$value['no_bayar'].'" class="form-control col-6">
                                    <button class="btn btn-danger" type="submit" name="delete">Hapus</button>
                                </form>
                                <button class="btn btn-secondary me-2" data-bs-dismiss="modal">Batal</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>';
    }?>

            <!-- Modal Tambah Suku Cadang -->
            <div class="modal fade bd-example-modal-lg" id="tambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Pembayaran</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">

                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="mb-3">
                                    <label for="noinduk_siswa" class="form-label">Id Raport</label>
                                    <input type="text" name="noinduk_siswa" class="form-control col-6">
                                </div>
                                <div class="mb-3 mt-3">
                                    <label for="NIK_walmur" class="form-label">NIK Walimurid</label>
                                    <input type="text" name="NIK_walmur" class="form-control">
                                </div>
                                
                                <div class="mb-3 mt-3">
                                    <label for="nama_siswa" class="form-label">Nama Siswa</label>
                                    <input type="text" name="nama_siswa" class="form-control">
                                </div>
  
                                <div class="mb-3 mt-3">
                                    <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                                    <input type="text" name="jenis_kelamin" class="form-control">
                                </div>
  
                                <div class="mb-3 mt-3">
                                    <label for="tgllahir" class="form-label">Tanggal Lahir</label>
                                    <input type="text" name="tgllahir" class="form-control">
                                </div>
                                <div class="mb-3 mt-3">
                                    <label for="tgl_masuk" class="form-label">Tanggal Masuk</label>
                                    <input type="text" name="tgllahir" class="form-control">
                                </div>
  
                                <div class="mb-3 mt-3">
                                    <label for="tgl_lulus" class="form-label">Tanggal Lulus</label>
                                    <input type="text" name="tgl_lulus" class="form-control">
                                </div>
                                <div class="mb-3 mt-3">
                                    <label for="alamat" class="form-label">Alamat</label>
                                    <input type="text" name="alamat" class="form-control">
                                </div>
                                <div class="mb-3 mt-3">
                                    <label for="anakke" class="form-label">Anak Ke</label>
                                    <input type="text" name="anakke" class="form-control">
                                </div>
  


                                <div class="submit mt-4">
                                    <button type="submit" name="add" class="btn btn-primary">
                                        Simpan
                                    </button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>

     <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>