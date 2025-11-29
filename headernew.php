<!DOCTYPE html>
<html lang="id">

<!-- heading -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- import file css bootstrap -->
    <link rel="stylesheet" href="styles/bootstrap/css/bootstrap.min.css">
    
    <!-- import file css DataTables -->
    <link rel="stylesheet" href="styles/DataTables/datatables.min.css">
    
    <!-- Custom Modern UI -->
    <link rel="stylesheet" href="styles/modern_ui.css">

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
    
    <!-- Title -->
    <title>Formulir Pendaftaran <?php echo $header ;?></title>
    <link rel="icon" type="image/x-icon" href="https://daftar.darulmaarif.net/assets/img/logo.png" />
</head>

<!-- body -->
<body>
    
<nav class="navbar navbar-expand-lg navbar-dark bg-primary-custom sticky-top shadow">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="index.php">
            <i class="fa fa-home mr-2"></i> PSB Darul Ma'arif
        </a>
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <!-- menu navigasi -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            
            <ul class="navbar-nav ml-auto">
                <?php

                // fungsi pengecekan level akun login
                if(empty($_SESSION['sesi'])){
                    echo "";
                } elseif($_SESSION['type'] == 'admin') {
                    echo ""; // Admin menu handled in header.php usually

                } else {
                    echo '
                    <li class="nav-item">
                        <a class="nav-link text-white" href="pernyataan.php"><i class="far fa-file-alt mr-1"></i> Pernyataan</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link text-white" href="pendaftaran.php"><i class="far fa-edit mr-1"></i> Pendaftaran</a>
                    </li>
                
                    <li class="nav-item">
                        <a class="nav-link text-white" href="status.php"><i class="fas fa-user-clock mr-1"></i> Status</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="biayadu.php"><i class="far fa-calendar-check mr-1"></i> Biaya Daftar Ulang</a>
                    </li>
                    <li class="nav-item ml-md-3">
                        <a class="nav-link btn btn-outline-light px-3 btn-sm mt-1 mt-md-0" href="logout.php"><i class="fas fa-sign-out-alt mr-1"></i> Logout</a>
                    </li>';
                   
                }

                ?>
                
            </ul>
        </div>
    </div>
</nav>

    