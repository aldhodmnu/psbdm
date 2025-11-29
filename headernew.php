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
    <title>Formulir Pendaftaran <?php echo $header ;?></title>
    <link rel="icon" type="image/x-icon" href="https://daftar.darulmaarif.net/assets/img/logo.png" />
</head>

<!-- body -->
<body>
    
    <!--   <nav class="navbar navbar-expand-lg navbar-light bg-light px-1"> header -->
 
          <div class="card my-14 o-hidden border-0 shadow-lg">
   </div>
        <!-- menu navigasi -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <?php

                // fungsi pengecekan level akun login
                if(empty($_SESSION['sesi'])){
                    echo "";
                } elseif($_SESSION['type'] == 'admin') {
                    echo "";

                } else {
                   
                }

                ?>
                
            </ul>

            <!-- tombol logout -->
            <form class="form-inline my-0 my-lg-0">
               
            </form>
        </div>
    

    