<?php

require_once 'link.php';

if(isset($_POST['productName']) == 'productName'){

    $data = array();  
    $from_ip = $_SERVER['REMOTE_ADDR'];
    $from_browser = $_SERVER['HTTP_USER_AGENT'];
    date_default_timezone_set("Asia/Calcutta");
    $date_now = date("r");

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $country = $_POST['country'];
    $address = $_POST['address'];
    $state = $_POST['state'];
    $postcode = $_POST['postcode'];
    $other_details = $_POST['other_details'];
    $productName = $_POST['productName'];
    $amount = $_POST['amount'];

    if($phone == ""){
        $phone = 0;
    }
    if($amount == ""){
        $amount = 0;
    }
    if($postcode == ""){
        $postcode = 0;
    }

    $id = 0;

    $result = mysqli_query($link, "SELECT max(id) FROM `orders_razorpay`");

    while ($row = mysqli_fetch_array($result)) {
        $id = $row[0];  
    }
    $id = $id + 1;

    $query = "INSERT INTO `orders_razorpay` (`id`, `name`, `phone`, `email`, `country`, `address`, `state`, `postcode`, `other_details`, `productName`, `amount`, `date_now`, `from_ip`, `from_browser`, `status`) VALUES ('$id','$name', '$phone', '$email', '$country', '$address', '$state', '$postcode' , '$other_details', '$productName', '$amount','$date_now','$from_ip', '$from_browser','processing')";

    // echo $query;
    
    if($result = mysqli_query($link, $query))  
    {  
        $data['status'] = 201;
        $data['id'] = $id;
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
