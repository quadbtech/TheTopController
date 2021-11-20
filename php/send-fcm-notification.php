<?php
    require_once 'link.php';

    define('server_key','AIzaSyCyUZVxj3Lo0W7oH16p0igg7t4GTmH-T9k');


    $query = "SELECT * FROM `saved_token`";

    if($result = mysqli_query($link, $query))  
    {  
        while($data = mysqli_fetch_array($result)){
            $token[] = $data['token'];
        }

        $header = [
            'Authorization: key=' . server_key,
            'Content-Type: application/json'
        ];
    
        $msg = [
            'title' => 'The Top Controller Notification',
            'body' => 'Notification from the top controller',
            'icon' => 'https://www.thetopcontroller.com/images/loader.png',
            'image' => 'https://www.thetopcontroller.com/images/controller.png',
            'click_action' => 'https://www.thetopcontroller.com/#designs-mobile'
    
        ];
    
        $payload = [
            'registration_ids' => $token,
            'data' => $msg
        ];
    
        $curl = curl_init();
    
        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://fcm.googleapis.com/fcm/send",
            CURLOPT_RETURNTRANSFER => true,
            // CURLOPT_ENCODING => "",
            // CURLOPT_MAXREDIRS => 10,
            // CURLOPT_TIMEOUT => 0,
            // CURLOPT_FOLLOWLOCATION => true,
            // CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS =>json_encode($payload),
            CURLOPT_HTTPHEADER =>$header
        ));
    
        $response = curl_exec($curl);
        $err = curl_error($curl);
    
        curl_close($curl);
        if($err){
            echo 'error : ' . $err;
        }else{
            echo $response;
        }
        
    }  
    else  
    {  
        $data['status'] = 601;
        $data['error'] = $link -> error;
        echo json_encode($data);
    } 

    
    
?>