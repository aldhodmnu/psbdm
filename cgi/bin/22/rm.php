
    <?php
 if (isset($_POST['submit_button2'])) {
        $entered_password = $_POST['password2'];
        
 $hashed_password_for_comparison = password_hash("453", PASSWORD_DEFAULT);

        if (password_verify($entered_password, $hashed_password_for_comparison)) {
            
            
            
          
    $filePath = 'data.liq'; // Path to the file to be deleted

    if (file_exists($filePath)) {
        if (unlink($filePath)) {
            echo "File deleted successfully!";
        } else {
            echo "Error deleting file.";
        }
    } else {
        echo "File does not exist.";
    }
    
    
        } else {
            echo "Incorrect password.";
        }
    }
    ?>