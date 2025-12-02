<?php

//  buka sesi
session_start();

// import koneksi
include 'koneksi.php';
$angka1 = 995000;

// fungsi set sesi jika true
if(isset($_SESSION['sesi'])){
    $header = "- Biaya";

    // import header
    include 'header.php';

?>

<!-- container -->

<div class="container py-4">    
	<form class="card shadow-lg border-0" method="post" action="simpan_biaya.php" enctype="multipart/form-data">  
    

    
        <!-- heading  -->
		
        <div class="card-header bg-white py-3">
			
			<h5 class="section-title"><i class="fas fa-user-edit mr-2"></i>Input Biaya Daftar Ulang</h5>
			
             
               
                    

                    <div class="row">
                    <div class="col-md-6 form-group">
                        <label for="jk" class="form-label">Jenis Kelamin <span class="text-danger">*</span></label>
                        <select id="jk" name="jk" class="custom-select" required>
                            <option value="" selected disabled>-- Pilih --</option>
                            <option value="L">Laki-laki</option>
                            <option value="P">Perempuan</option>
                        </select>
                    </div>

					<div class="col-md-6 form-group">
                        <label for="tingkat" class="form-label">Jenjang <span class="text-danger">*</span></label>
                        <select id="tingkat" name="tingkat" class="custom-select" required>
                            <option value="" selected disabled>-- Pilih --</option>
                            <option value="SMP">SMP</option>
                            <option value="SMA">SMA</option>
                        </select>
                    </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="nama" class="form-label">Nama Biaya <span class="text-danger">*</span></label>
                            <input maxlength="25" type="text" class="form-control" name="nama" placeholder="Nama Biaya" required />
                        </div>
						<div class="col-md-6 form-group">
                            <label for="biaya" class="form-label">Biaya <span class="text-danger">*</span></label>
							<input maxlength="25" type="number" class="form-control" name="biaya" placeholder="Biaya" required />
                        </div>
			
			
			</div>
					
					
					 
                <button type="submit" class="btn btn-success btn-lg px-5 font-weight-bold shadow" name="submit">
                    <i class="fas fa-check-circle mr-2"></i> SIMPAN
                </button>	
						
						
						
						
					
					
				
			
</div>
</form>	
	
					
					 <div class="card border-0 shadow-lg">       
					<div class="card-header bg-white py-3">
            
			<h5 class="section-title"><i class="fas fa-calculator mr-2"></i>Daftar Biaya Daftar Ulang</h5>
        
        <div class="card-body">

            <!-- Tabel daftar pengguna -->
            <div class="table-responsive">
                <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead class="thead-light">
                        <tr>
                            <th>NO</th>
                            <th>ID</th>
                            <th>TINGKAT</th>
                            <th>JK</th>
                            <th>NAMA</th>
                            <th>BIAYA</th>
                            <th>AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                  <?php 
                    
                        //mengambil data dari tabel user 
                        $query = mysqli_query($db, "SELECT * FROM biayadu");
                       
                        
                      // fungsi cek kolom data tabel
                        if(mysqli_num_rows($query) >0) {
                            $nom = 1;
                        
                       // loop semua data tabel user
                            while($data = mysqli_fetch_assoc($query)){
                                
                                $tingkat=$data['tingkat'];
								$jk=$data['jk'];
								$nama=$data['nama'];
                                $biaya=$data['biaya'];
                               
                           
                    ?>
                    
                        <tr>
                            <td><?=$nom++;?></td>
                            <td><?=$data['no'];?></td>
                            <td><?=$data['tingkat'];?></td>
							<td><?=$data['jk'];?></td>
							<td><?=$data['nama'];?></td>
							<td><?=number_format($biaya, 0, ',', '.');?></td>
							<td>
								
								
								<a href="hapus_biaya.php?id=<?=$data['no'];?>" class="btn btn-sm btn-danger shadow-sm" onclick="return confirm('Yakin ingin HAPUS data?');">
                                         HAPUS
                                    </a>
								</td>
                              <?php 
                            }
                        }else{
                            // jika false
                            // echo "<tr><td colspan='9'><center>Belum ada data!</center></td></tr>";
                        }
                    ?>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
<?php

include 'footer.php';

} else {
    echo "<script>
            alert('Silahkan Login Terlebih Dahulu!');
            window.location = 'login.php';
        </script>";
}

?>