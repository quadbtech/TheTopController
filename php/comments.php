<?php


require_once 'link.php';

if(isset($_POST['type'])){

    if($_POST['type'] == 'post-comment'){
        $data = array();  
        $from_ip = $_SERVER['REMOTE_ADDR'];
        $from_browser = $_SERVER['HTTP_USER_AGENT'];
        date_default_timezone_set("Asia/Calcutta");
        $date_now = date("r");

        $product_name = $_POST['product_name'];
        if(!isset($_POST['name'])){
            $name="";
        }else{
            $name = $_POST['name'];
        }
        if(!isset($_POST['email'])){
            $email="";
        }else{
            $email = $_POST['email'];
        }
        if(!isset($_POST['subject'])){
            $subject="";
        }else{
            $subject = $_POST['subject'];
        }
        if(!isset($_POST['message'])){
            $message="";
        }else{
            $message = $_POST['message'];
        }

        $rating = $_POST['rating'];
        
        $query = "INSERT INTO `comments` (`product_name`, `name`, `email`, `subject`, `message`, `rating`, `time`, `from_ip`, `from_browser`) VALUES ('$product_name','$name', '$email', '$subject', '$message', $rating , '$date_now','$from_ip', '$from_browser')";

        if($result = mysqli_query($link, $query))  
        { 
            $data['status'] = 'ok';
            echo json_encode($data);
        }  
        else  
        {  
            echo $link->error;
        } 
    }

    if($_POST['type'] == 'get-comment'){
        $data = array(); 
        $product_name = $_POST['product_name'];

        $query = "SELECT * FROM `comments` WHERE `product_name` = '$product_name' ";

        if($result = mysqli_query($link, $query))  
        {
            $comments = array();
            $i = 0; 
            while ($row = mysqli_fetch_assoc($result)) {
                $comments[$i] = $row; 
                $i = $i+1;
            } 
            $data['status'] = 'ok';
            $data['comments'] = $comments;
            echo json_encode($data);
        }  
        else  
        {  
        echo "<script>console.log('error','problem with query after signup1')</script>"; 
        } 

    }

    

}

?>
   