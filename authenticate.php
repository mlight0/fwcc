<?php
    include 'includes/configuration.php';

    $email = $_POST["email"];

if ($email != "") {

    $conn = new mysqli($server, $username, $password, $db);
    
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
    
        date_default_timezone_set('US/Eastern');
    
        
        $email_datetime = date(DATE_ATOM);
    
        $sql = "INSERT INTO tbl_wifi_emails ( email_address, email_datetime ) VALUES( '" . $email . "','" . $email_datetime . "');";
        $conn->query($sql);
        $conn->close();

        $email = "";
}

header('Location: welcome.php');

?>
