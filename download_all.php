

<table border="1">
    <style>
      table,
      th,
      td {
        padding: 1px;
        border: 1px solid grey;
        border-collapse: collapse;
      }
    </style>
    
    <tr bgcolor="#e5e5e5">
        <td>No</td>
        <td>NO DAFTAR</td>
        <td>NAMA</td>
        <td>NISN</td>
        <td>NIK</td>
        <td>TMPT LAHIR</td>
        <td>TGL LAHIR</td>
        <td>JENIS KELAMIN</td>
        <td>ANAK KE</td>
        
         <td>JML SAUDARA</td>
        <td>PENYAKIT</td>
        <td>NO HP</td>
        <td>NO WHATSAPP</td>
        <td>INSTAGRAM</td>
        <td>FACEBOOK</td>
        <td>MASUK SEBAGAI</td>
        
         <td>BERAT/TINGGI</td>
        <td>UKURAN BAJU</td>
        
        <td>RT/RW/DUSUN</td>
        <td>KEC</td>
        <td>KAB</td>
         <td>PROVINSI</td>
        <td>ALAMAT</td>
        <td>EKSKUL</td>
        <td>SEKOLAH ASAL</td>
         <td>PRESTASI</td>
        <td>JENJANG</td>
        <td>KESEDIAAN</td>
        <td>ALASAN</td>
        <td>KAISAR</td>
        <td>INFO DARI</td>
        
        <td>KET INFO</td>
     
         
        <td>AYAH/PEND/KERJA/PENGHASILAN</td>
        <td>IBU/PEND/KERJA/PENGHASILAN</td>
        <td>STATUS</td>
        <td>GELOMBANG</td>
        <td>BIAYA PENDAFTARAN</td>
        <td>BAYAR PENDAFTARAN</td>
         <td>BAYAR DAFTAR ULANG</td>
          <td>TAHUN</td>
           
    </tr>
    
     

    <?php
        include "koneksi.php";
date_default_timezone_set("Asia/Bangkok");   

error_reporting(E_ERROR | E_PARSE);
        $no=0;
        $gel="-";  
        $angka1 = 995000;
      mysqli_query($db,"delete from temp_laporan"); 
            
            
        $cari=mysqli_query($db,"SELECT * FROM pendaftaran where gelombang <>'$gel'");
	while($result=mysqli_fetch_array($cari)){
	                                 $angka2 =number_format($result['id']);
                            $jumlah = $angka1 + $angka2;
	$a1=$result["id"];    
	$a=$result["nama"];
	$b=$result["nisn"];
	$c=$result["nik"];
	$d=$result["tempat_lahir"];
	$e=$result["tanggal_lahir"];
	$f=$result["jenis_kelamin"];
	$g=$result["anak_ke"];
	$h=$result["jumlah_saudara"];
	$i=$result["penyakit"];
	$j=$result["no_hp"];
	$k=$result["no_whatsapp"];
	$l=$result["akun_instagram"];
	$m=$result["akun_facebook"];
	$n=$result["masuk_sebagai"];
	$o=$result["berat_tinggi"];
	$p=$result["ukuran_baju"];
	$q=$result["rt"].$result["rw"]."-".$result["dusun"]."-".$result["kelurahan"];
	
	$r=$result["kecamatan"];
	$r1=$result["kabupaten"];
	$r2=$result["provinsi"];
	$s=$result["alamat"];
	$t=$result["ekstrakurikuler"];
	$u=$result["sekolah_asal"];
	$v=$result["prestasi"];
	$w=$result["jenjang"];
	$x=$result["kesediaan"];
	$y=$result["alasan"];
	$z=$result["kaisar"];
	
	$aa=$result["informasi_dari"];
	$bb=$result["p_informasi"];
	
	$cc=$result["nama_ayah"]."-".$result["pendidikan_ayah"]."-".$result["pekerjaan_ayah"]."-".$result["penghasilan_ayah"];
	$dd=$result["nama_ibu"]."-".$result["pendidikan_ibu"]."-".$result["pekerjaan_ibu"]."-".$result["penghasilan_ibu"];
	$ee=$result["status"];
	$ff=$result["gelombang"];

	$gg=number_format($jumlah, 0, ',', '.');
	$hh=$result["bayardaftar"];
	$ii=$result["bayarulang"];
	$jj=$result["tahun"];
	$kk=$result["tanggal"];
 
	$simpan=mysqli_query($db,"insert into temp_laporan(a1,a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,r1,r2,s,t,u,v,w,x,y,z,aa,bb,cc,dd,ee,ff,gg,hh,ii,jj,kk)
                    Values('$a1','$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l','$m','$n','$o','$p','$q','$r','$r1','$r2','$s','$t',
                    '$u','$v','$w','$x','$y','$z','$aa','$bb','$cc','$dd','$ee','$ff','$gg','$hh','$ii','$jj','$kk')");
				
	}

	
      $data=mysqli_query($db,"SELECT * FROM temp_laporan order by a,c asc");

while($result=mysqli_fetch_array($data)){
      
        $no++
    ?>
   
    <tr>
        <td><?php echo $no?></td>
        <td><?php echo $result['a1']?></td>
        <td><?php echo $result['a']?></td>
        <td><?php echo $result['b']?></td>
        <td><?php echo $result['c']?></td>
        <td><?php echo $result['d']?></td>
        <td><?php echo $result['e']?></td>
        <td><?php echo $result['f']?></td>
        <td><?php echo $result['g']?></td>
                <td><?php echo $result['h']?></td>
        <td><?php echo $result['i']?></td>
        <td><?php echo $result['j']?></td>
        <td><?php echo $result['k']?></td>
        <td><?php echo $result['l']?></td>
        <td><?php echo $result['m']?></td>
        <td><?php echo $result['n']?></td>
        
        <td><?php echo $result['o']?></td>
        <td><?php echo $result['p']?></td>
        <td><?php echo $result['q']?></td>
        <td><?php echo $result['r']?></td>
        <td><?php echo $result['r1']?></td>
        <td><?php echo $result['r2']?></td>
        <td><?php echo $result['s']?></td>
        <td><?php echo $result['t']?></td>
        <td><?php echo $result['u']?></td>
        <td><?php echo $result['v']?></td>
        <td><?php echo $result['w']?></td>
        <td><?php echo $result['x']?></td>
        <td><?php echo $result['y']?></td>
        <td><?php echo $result['z']?></td>
        <td><?php echo $result['aa']?></td>
        <td><?php echo $result['bb']?></td>
        <td><?php echo $result['cc']?></td>
        <td><?php echo $result['dd']?></td>
        <td><?php echo $result['ee']?></td>
        <td><?php echo $result['ff']?></td>
        <td><?php echo $result['gg']?></td>
                <td><?php echo $result['hh']?></td>
        <td><?php echo $result['ii']?></td>
        <td><?php echo $result['jj']?></td>
        
        
    </tr>
   <?php
        }
        
       
    ?>
</table>
