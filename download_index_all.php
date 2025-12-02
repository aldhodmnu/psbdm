<html>
    <style>
.button {
  background-color: #04AA6D;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
</style>
<head>
    <title>Data Calon Santri</title>
</head>
<body>
    
    <?php 
        include 'koneksidm.php';
        $query = mysqli_query($dm, "SELECT gelombang FROM m_semester ");
    $data = mysqli_fetch_array($query);
    //<h3>Laporan Calon Santri GELOMBANG <?php echo $data['gelombang'];
    ?>
    
    <h3>Laporan Calon Santri SEMUA GELOMBANG</h3>
        <p><a href="download_export_all.php"><button class="button">Export ke Excel</button></a></p>
 
    <?php 
        include 'download_all.php';
    ?>
</body>
</html>