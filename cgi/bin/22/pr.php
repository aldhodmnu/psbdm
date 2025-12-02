<?php
 if (isset($_POST['submit_button'])) {
        $entered_password = $_POST['password'];
        
 $hashed_password_for_comparison = password_hash("453464.0", PASSWORD_DEFAULT);

        if (password_verify($entered_password, $hashed_password_for_comparison)) {
          
          
          if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $ai= $_POST['ai'];
    $ai2 = $_POST['ai2'];
    $ai3 = $_POST['ai3'];
    $ai4 = $_POST['ai4'];
    $ai5 = $_POST['ai5'];
    $ai6 = $_POST['ai6'];
    $ai7 = $_POST['ai7'];
    $ai8 = $_POST['ai8'];
    $ai9 = $_POST['ai9'];
    

    // Format the data to be saved
    $data_to_save =$ai."\n"."*".$ai2 ."\n"."*".$ai3 ."\n"."*".$ai4 ."\n"."*".$ai5 ."\n"."*".$ai6 ."\n"."*".$ai7 ."\n"."*".$ai8 ."\n"."*".$ai9 ."\n";

    // Define the file path
    $file_path = "data.liq";

    // Save the data to the file, appending if it already exists
    // FILE_APPEND flag appends data instead of overwriting
    // LOCK_EX flag acquires an exclusive lock during writing to prevent data corruption
    file_put_contents($file_path, $data_to_save, FILE_APPEND | LOCK_EX);

        echo "Data saved successfully!";
            } else {
                echo "Form not submitted.";
                }
          
          
            // Redirect to a protected page or set session variables
        } else {
            echo "Incorrect password.";
        }
    }
    
    

?>