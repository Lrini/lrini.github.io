<?php
session_start ();
//if(!isset($_SESSION['user'])){
  //<script type="text/javascript">
    //alert('login dulu');window.location='../login.php';
  //</script>-->
include "function.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="./assets/img/favicon.png">
  <title>
    Cafe Rumah Selingkuhan
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="./assets/css/material-dashboard.css?v=3.0.2" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="jquery.dataTables.min.css">
</head>

<body class="g-sidenav-show  bg-gray-200">
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard " target="_blank">
        <img src="./assets/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold text-white">Cafe Rumah Selingkuhan</span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto  max-height-vh-100" id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white " href="index.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white  " href="menu.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Menu</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white active bg-gradient-primary " href="catering.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Catering</span>
          </a>
        </li>
      </ul>
    </div>
    <div class="sidenav-footer position-absolute w-100 bottom-0 ">
      <div class="mx-3">
        <a class="btn bg-gradient-primary mt-4 w-100"href="../index.php" type="button">Log Out</a>
      </div>
    </div>
  </aside>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Catering</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">Catering</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
          </div>
          <ul class="navbar-nav  justify-content-end">
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </a>
            </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
        <?php if(isset($_GET['r'])): ?>
                    <?php
                        $r = $_GET['r'];
                        if($r=='sukses'){
                            $class='success';
                        }else if($r=='updated'){
                            $class='info';   
                        }else if($r=='gagal'){
                            $class='danger';   
                        }else if($r=='added an account'){
                            $class='success';   
                        }else{
                            $class='hide';
                        }
                    ?>
                   <div role="alert" class="alert alert-<?php  echo $class?> ">
                        
                        <strong> <?php echo $r; ?>!</strong>    
                    </div>
                <?php endif; ?>
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Input paket cetering</h6>
              </div>
            </div>
            <div class="card-body">
            <?php
                $koneksi = new mysqli("localhost", "root", "", "cafe");
                $id = $_GET['id_catering'];
                $data = mysqli_query($koneksi,"select * from catering where id_catering='$id'");
                while($d = mysqli_fetch_array($data)){
            ?>
            <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                    <label>ID Catering</label>
                    <input type="text" class="form-control"  id="id_catering" name="id_catering" value="<?php echo $d ['id_catering'] ?> ">
                  </div>
                  <div class="form-group">
                    <label>Nama paket catering</label>
                    <input type="text" class="form-control"  id="nama_paket" name="nama_paket" value="<?php echo $d ['nama_paket'] ?> ">
                  </div>
                  <div class="form-group">
                    <label> Keterangan catering </label>
                    <input type="text" class="form-control" id="isi" name="isi" value="<?php echo $d ['isi'] ?> ">
                  </div>
                  <div class="form-group">
                    <label> Harga catering </label>
                    <input type="text" class="form-control" id="harga" name="harga" value="<?php echo $d ['harga'] ?> ">
                  </div>
            </div>
            <div class="card-footer">
            <div class="card-footer">
                  <button type="submit" name="simpan" value="simpan" class="btn btn-primary">Submit</button>
            </div>
          </div> 
          <?php 
                 if(isset($_POST['simpan'])){
                    if(editcatering ($_POST) > 0){
                        echo " 
                             <script>
                                document.location.href = 'catering.php?r=sukses';
                            </script>";
                            }else{
                              
                                echo " 
                                    <script>
                                        document.location.href = 'catering.php?r=gagal';
                                     </script>";
                                }
                    }
                }
	        ?> 
        </form>
        </div>
      </div>
          </div>
  </main>
  <script>
  	$(document).ready(function() {
		$('#dataTables').DataTable();
	} );
	</script>
  <script src="jquery.dataTables.min.js"></script>
  <!--   Core JS Files   -->
  <script src="./assets/js/core/popper.min.js"></script>
  <script src="./assets/js/core/bootstrap.min.js"></script>
  <script src="./assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="./assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="./assets/js/plugins/chartjs.min.js"></script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="./assets/js/material-dashboard.min.js?v=3.0.2"></script>
</body>

</html>