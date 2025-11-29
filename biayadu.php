<?php

// sesi
session_start();

// import koneksi.php
include 'koneksi.php';

// fungsi pengecekan sesi
if(isset($_SESSION['sesi'])){

    
    $header = "- Pernyataan";
    // import header.php
    include 'header.php';
}
?>

<!-- Container -->
<div class="container py-3">
<form class="card m-4 p-4 o-hidden border-0 shadow-lg">

        <!-- Card Header -->
        <div class="text-secondary text-center"><img src="Registrasi-PSB.png" alt="" style="width:900px;height:600px;"> <p></p></div> 
       
       
        
<p></p>
        
        <!-- Card Body -->
        

            </div>
 </form>
</div>

                    


<?php

    include 'footer.php';


    

