<!DOCTYPE html>
<html lang="id">
	
<!-- Favicon -->
    
    <link rel="icon" type="image/x-icon" href="https://daftar.darulmaarif.net/assets/img/logo.png" />
<!-- head -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <title>
    Login Pendaftaran Santri Baru</title>

    <!-- Css Bootstrap -->
    <link rel="stylesheet" href="styles/bootstrap/css/bootstrap.min.css">

    <!-- Css Login -->
<link rel="stylesheet" href="styles/login.css">
</head>

<!-- body -->
<body>

    <!-- container -->
   <div class="container justify-content-center">

        
       
			        
        
        
        <div class="card o-hidden border-0 color-green shadow-lg my-4" >
            <div class="row justify-content-center color-green p-5">
                
               
       
        
                    
                    <!-- form login -->
                    <form method="POST" action="cek_login.php" class="user">
						
						<h2 class="text-secondary text-center"><img src="dmlogo.png" alt="" style="width:80;height:80px;"> </h2>
                         
						<p></p>
						<h3 class="text-center mb-0">Login Santri Baru</h3>
                         <p class=" text-center "><font color="grey" size="2">Pondok Pesantren Darul Ma'arif Kaplongan-Indramayu</font></p>
                        <!-- input username -->
                                               
                        <div class="mb-3">
                            <input type="text" class="form-control form-control-user" id="name" name="name"
                                placeholder="Username">
                        
                        </div>
                        <!-- input password -->
                        <div class="mb-3">
                            <input type="password" class="form-control form-control-user" id="pass" name="pass"
                                placeholder="Password">
                        </div>

                        <!-- tombol login -->
                        <div class="mb-3 text-center d-grid gap-md-2 mx-auto">
                            <button type="submit" class="btn btn-success btn-user" name="submit">Log In</button>
                        </div>
                        <hr/>

                        <!-- register -->

							
                        <p class=" text-center ">Pendaftaran Santri Baru. Silahkan Klik <a class="text-decoration-none" href="register.php"><font color="green"><b> DAFTAR </b></font>
													
							
                        <a class="text-decoration-none text-center" href="https://wa.me/6282219699610?text=REQUEST USER DAN PASSWORD PENDAFTARAN AKAN DIKIRIM KE NO WALI SAAT PENDAFTARAN, SILAHKAN INFOKAN NAMA WALI DAN CALON SANTRINYA"><font color="grey" size="2"><i class="fab fa-whatsapp"></i>  LUPA User/Password Login?klik disini</font></a></p>
							
                        </p>
                    </form>
                </div>
			
            </div>
       <?php

include 'footer.php';

?>     
        </div>
  
 
        

