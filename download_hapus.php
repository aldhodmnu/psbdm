<?php
include "koneksi.php";

date_default_timezone_set("Asia/Bangkok");

mysqli_query($db,"delete from temp_laporan");    


?>