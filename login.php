<!DOCTYPE html>
<html lang="id">
	
<!-- Favicon -->
    
    <link rel="icon" type="image/x-icon" href="https://daftar.darulmaarif.net/assets/img/logo.png" />
<!-- head -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <title>Login Pendaftaran Santri Baru</title>

    <!-- Css Bootstrap -->
    <link rel="stylesheet" href="styles/bootstrap/css/bootstrap.min.css">
    <!-- Modern UI -->
    <link rel="stylesheet" href="styles/modern_ui.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    
    <style>
        body {
            background-color: var(--bg-light);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .login-card {
            max-width: 450px;
            width: 100%;
            border-radius: 16px;
            overflow: hidden;
        }
        .login-header {
            background-color: white;
            padding: 2rem 2rem 0;
            text-align: center;
        }
        .login-body {
            padding: 2rem;
            background-color: white;
        }
        .logo-img {
            width: 80px;
            height: 80px;
            margin-bottom: 1rem;
        }
        .btn-wa {
            background-color: #25D366;
            color: white;
            border: none;
        }
        .btn-wa:hover {
            background-color: #128C7E;
            color: white;
        }
    </style>
</head>

<!-- body -->
<body>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-5">
                
                <div class="card login-card shadow-lg border-0">
                    <div class="login-header">
                        <img src="dmlogo.png" alt="Logo Darul Ma'arif" class="logo-img">
                        <h4 class="mb-1 font-weight-bold text-dark">Login Santri Baru</h4>
                        <p class="text-muted small">Pondok Pesantren Darul Ma'arif<br>Kaplongan-Indramayu</p>
                    </div>
                    
                    <div class="login-body">
                        <!-- form login -->
                        <form method="POST" action="cek_login.php" class="user">
                            
                            <!-- input username -->
                            <div class="form-group mb-3">
                                <label for="name" class="form-label small text-uppercase text-muted">Username</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-light border-right-0"><i class="fas fa-user text-muted"></i></span>
                                    </div>
                                    <input type="text" class="form-control border-left-0" id="name" name="name" placeholder="Masukkan Username" required style="height: 50px;">
                                </div>
                            </div>
                            
                            <!-- input password -->
                            <div class="form-group mb-4">
                                <label for="pass" class="form-label small text-uppercase text-muted">Password</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-light border-right-0"><i class="fas fa-lock text-muted"></i></span>
                                    </div>
                                    <input type="password" class="form-control border-left-0" id="pass" name="pass" placeholder="Masukkan Password" required style="height: 50px;">
                                </div>
                            </div>

                            <!-- tombol login -->
                            <button type="submit" class="btn btn-success btn-block btn-lg font-weight-bold shadow-sm mb-3" name="submit">
                                MASUK
                            </button>
                            
                            <div class="text-center my-3">
                                <span class="text-muted small">Belum punya akun?</span>
                            </div>
                            
                            <!-- register button -->
                            <a href="register.php" class="btn btn-outline-success btn-block font-weight-bold">
                                DAFTAR SEKARANG
                            </a>
                            
                            <hr class="my-4">
                            
                            <div class="text-center">
                                <a href="https://wa.me/6282219699610?text=REQUEST USER DAN PASSWORD PENDAFTARAN AKAN DIKIRIM KE NO WALI SAAT PENDAFTARAN, SILAHKAN INFOKAN NAMA WALI DAN CALON SANTRINYA" target="_blank" class="text-decoration-none text-muted small">
                                    <i class="fab fa-whatsapp text-success fa-lg mr-1"></i> Lupa User/Password? Hubungi Admin
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
                
                <div class="text-center mt-3 text-muted small">
                    &copy; <?php echo date('Y'); ?> PSB Darul Ma'arif
                </div>
                
            </div>
        </div>
    </div>

</body>
</html>
