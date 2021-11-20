<?php

require_once 'link.php';
// echo 'here';

if(isset($_POST['token'])){
    
    $data = array();  
    $from_ip = $_SERVER['REMOTE_ADDR'];
    $from_browser = $_SERVER['HTTP_USER_AGENT'];
    date_default_timezone_set("Asia/Calcutta");
    $date_now = date("r");

    $token = $_POST['token'];

    $query = "INSERT INTO `saved_token` (`token`,`created_on`,`from_ip`, `from_browser`) VALUES ('$token','$date_now','$from_ip' , '$from_browser')";

    // echo $query;
    
    if($result = mysqli_query($link, $query))  
    {  
        $data['status'] = 'ok';
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