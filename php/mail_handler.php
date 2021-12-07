<?php 
if(isset($_POST['submit'])){
    $to = "elbadri.abdelhamid@gmail.com"; 
    $from = $_POST['email']; 
    $first_name = $_POST['name'];
    
    $message = $first_name . " wrote the following:" . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    mail($to,'protfolio contact',$message,$headers);
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    }

    ?>