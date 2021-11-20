<?php

// require_once 'PHPMailer.php';
// require_once 'Exception.php';
// require_once 'SMTP.php';
require_once 'link.php';

if(isset($_POST['orderId'])){
    
    $data = array();

    
    $orderId = $_POST['orderId'];

    // $id = 0;

    // $result = mysqli_query($link, "SELECT max(id) FROM `orders`");

    // while ($row = mysqli_fetch_array($result)) {
    //     $id = $row[0];  
    // }
    // $id = $id + 1;
    $id= 5243;

    $query = "SELECT * FROM `orders` WHERE `id` = $orderId ";

    $result = mysqli_query($link, $query);

    while ($row = mysqli_fetch_array($result)) {
        $dataResult = $row;  
    }
    

    // echo $query;
    
    if($result = mysqli_query($link, $query))  
    {  
        $data['status'] = 'ok';
        $data['result'] = $dataResult;
        echo json_encode($data);
    }  
    else  
    {  
        $data['status'] = 601;
        $data['error'] = $link -> error;
        echo json_encode($data);
    } 

}

?>
   