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

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
    
    <!-- Title -->
    <title>Penerimaan Santri Baru Pontren Darul Ma'arif Kaplongan-Indramayu<?php echo $header ;?></title>
    <!-- Favicon -->
    
    <link rel="icon" type="image/x-icon" href="https://daftar.darulmaarif.net/assets/img/logo.png" />
</head>

<!-- body fa-swatchbook-->

<body>
    
    <!-- header  <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-5"028352>--> 
<!--<nav class="navbar navbar-light bg-lignt"> --> 

<div class="card-header  o-hidden border-0 shadow-lg text-white" style="background-color: #116646;"  >
  <!-- <div class="card my-14 o-hidden border-0 shadow-lg">--> 
 <nav class="navbar navbar-expand-lg navbar-light bg-lignt px-0">
        
        <a class="navbar-brand" href="index.php"><i class="fa fa-home" color="#569608"></i><font color="white"> Home</font> </font> </a>
        
    
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <!-- menu navigasi -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            
            <ul class="navbar-nav mr-auto">
                <?php

                // fungsi pengecekan level akun login
                if(empty($_SESSION['sesi'])){
                    echo "";
                } elseif($_SESSION['type'] == 'admin') {
                    echo '
                    <li class="nav-item">
                     <a class="nav-link" href="dashboard.php"><i class="fas fa-desktop" color="#569608"></i><font color="white">  Dasboard <span class="sr-only">(current)</span></font></a>
                    </li>
                    <li class="nav-item">
                     <a class="nav-link" href="biayadu.php"><i class="far fa-calendar-check" color="#569608"></i><font color="white">  Biaya Daftar Ulang <span class="sr-only">(current)</span></font></a>
                    </li>
                    
                        <a class="nav-link" href="pengguna.php"><i class="fas fa-user-friends" color="#569608"></i><font color="white">  Akun <span class="sr-only">(current)</span></font></a>
                    </li>

<li class="nav-item dropdown ">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user-edit" color="#569608"></i><font color="white"> 
                        Download
                        </font></a>
                        <div class="dropdown-menu" color-white aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="download_index_all.php"><i class="fas fa-user-cog"></i> SEMUA </a>
                            <a class="dropdown-item" href="download_index.php"><i class="fas fa-user-check"></i> DITERIMA GEL 1 </a>
							<a class="dropdown-item" href="download_index_gel2.php"><i class="fas fa-user-check"></i> DITERIMA GEL 2 </a>
                           <a class="dropdown-item" href="download_index_gel3.php"><i class="fas fa-user-check"></i> DITERIMA GEL 3
						   </a>
						   <a class="dropdown-item" href="download_index_gel4.php"><i class="fas fa-user-check"></i> DITERIMA GEL 4 </a>
                            <a class="dropdown-item" href="download_index_tolak.php"><i class="fas fa-user-times"></i> DITOLAK</a>
                        </div>
                    
                    </li>



                    <li class="nav-item dropdown ">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user-edit" color="#569608"></i><font color="white"> 
                        Data Peserta
                        </font></a>
                        <div class="dropdown-menu" color-white aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="siswa_seleksi.php"><i class="fas fa-user-cog"></i> Seleksi</a>
                            <a class="dropdown-item" href="siswa_diterima.php"><i class="fas fa-user-check"></i> Diterima</a>
                           
                            <a class="dropdown-item" href="siswa_ditolak.php"><i class="fas fa-user-times"></i> Tidak Diterima</a>
                        </div>
                    
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="logout.php"><i class="fas fa-sign-out-alt" color="#569608"></i><font color="white"> Logout</font></a>
                </li>
                    
                    ';

                } 
                  
                else {
                    echo '
                    <li class="nav-item">
                    <a class="nav-link" href="pernyataan.php"><i class="far fa-file-alt" color="#569608"></i><font color="white">  Surat Pernyataan</font></a>
                </li>
                    
                    <li class="nav-item">
                    <a class="nav-link" href="pendaftaran.php"><i class="far fa-edit" color="#569608"></i><font color="white">  Pendaftaran<span class="sr-only">(current)</span></font></a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="status.php"><i class="fas fa-user-clock" color="#569608"></i><font color="white">  Status</font></a>
                </li>
                                    <li class="nav-item">
                     <a class="nav-link" href="biayadu.php"><i class="far fa-calendar-check" color="#569608"></i><font color="white">  Biaya Daftar Ulang <span class="sr-only">(current)</span></font></a>
                    </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php"><i class="fas fa-sign-out-alt" color="#569608"></i><font color="white"> Logout</font></a>
                </li>';
                
                }

                ?>
                
            </ul>
 </div>
            <!-- tombol logout -->
           
        </div>
        


    