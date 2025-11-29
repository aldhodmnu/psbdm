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
    
    <!-- Meta Pixel Code -->
    <script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '1148520784061950');
    fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=1148520784061950&ev=PageView&noscript=1"
    /></noscript>
    <!-- End Meta Pixel Code -->

    <!-- Title -->
    <title>Penerimaan Santri Baru Pontren Darul Ma'arif Kaplongan-Indramayu<?php echo $header ;?></title>
    <!-- Favicon -->
    
    <link rel="icon" type="image/x-icon" href="https://daftar.darulmaarif.net/assets/img/logo.png" />
</head>

<!-- body fa-swatchbook-->

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
                    echo '
                    <li class="nav-item">
                     <a class="nav-link text-white" href="dashboard.php"><i class="fas fa-desktop mr-1"></i> Dashboard</a>
                    </li>
                    <li class="nav-item">
                     <a class="nav-link text-white" href="biayadu.php"><i class="far fa-calendar-check mr-1"></i> Biaya DU</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="pengguna.php"><i class="fas fa-user-friends mr-1"></i> Akun</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-download mr-1"></i> Download
                        </a>
                        <div class="dropdown-menu shadow-sm border-0" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="download_index_all.php"><i class="fas fa-user-cog mr-2 text-muted"></i> SEMUA</a>
                            <a class="dropdown-item" href="download_index.php"><i class="fas fa-user-check mr-2 text-muted"></i> DITERIMA GEL 1</a>
							<a class="dropdown-item" href="download_index_gel2.php"><i class="fas fa-user-check mr-2 text-muted"></i> DITERIMA GEL 2</a>
                           <a class="dropdown-item" href="download_index_gel3.php"><i class="fas fa-user-check mr-2 text-muted"></i> DITERIMA GEL 3</a>
						   <a class="dropdown-item" href="download_index_gel4.php"><i class="fas fa-user-check mr-2 text-muted"></i> DITERIMA GEL 4</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item text-danger" href="download_index_tolak.php"><i class="fas fa-user-times mr-2"></i> DITOLAK</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-users mr-1"></i> Data Peserta
                        </a>
                        <div class="dropdown-menu shadow-sm border-0" aria-labelledby="navbarDropdown2">
                            <a class="dropdown-item" href="siswa_seleksi.php"><i class="fas fa-user-cog mr-2 text-muted"></i> Seleksi</a>
                            <a class="dropdown-item" href="siswa_diterima.php"><i class="fas fa-user-check mr-2 text-muted"></i> Diterima</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item text-danger" href="siswa_ditolak.php"><i class="fas fa-user-times mr-2"></i> Tidak Diterima</a>
                        </div>
                    </li>
                    <li class="nav-item ml-md-3">
                        <a class="nav-link btn btn-outline-light px-3 btn-sm mt-1 mt-md-0" href="logout.php"><i class="fas fa-sign-out-alt mr-1"></i> Logout</a>
                    </li>
                    ';

                } 
                  
                else {
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


    