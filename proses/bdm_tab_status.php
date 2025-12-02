<?php
include "koneksi.php";

date_default_timezone_set("Asia/Bangkok");
$id= $_GET['id'];
$novalid="TABUNGAN";
$idtrans="TAB000";
$status="Menunggu Pembayaran";
$status2="LUNAS";
$notrans=$idtrans."-".$id;
	
 //$data=mysqli_query($koneksi,"select * from t_t_bayar where kode_transaksi like '%$idtrans%' and novalid='$novalid'");  
 
 $data=mysqli_query($koneksi,"select * from t_t_bayar where nik='$id' and novalid='$novalid' and status='$status'"); 
while ($result=mysqli_fetch_array($data))
{
//echo $result["kode_transaksi"],"<br>";
echo "Total Tagihan* ";
echo number_format($result["masuk"]),"<br>";
echo "Kode Bayar* ";
echo $result["kode_bayar"],"<br>";
echo "  Chanel* ";
echo $result["metode"],"<br>";
echo "  Expired* ";
echo $result["expired"],"<br>";
echo $result["status"];
ECHO "||";
}
?>