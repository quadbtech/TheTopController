<?php

require_once 'link.php';

if(isset($_POST['coupon_code'])){
    
    $data = array();  
    $coupon_code = $_POST['coupon_code'];
    
    $query = "SELECT * FROM `coupon_codes` WHERE UPPER(`coupon_code`) = UPPER('$coupon_code')";
    
    if($result = mysqli_query($link, $query))  
    {  
        $queryResultArray = mysqli_fetch_array($result);
        if(!isset($queryResultArray['value'])){
            $data['status'] = 'invalid';
        } else {
            $data['status'] = $queryResultArray;
        }
        echo json_encode($data);
    }  
    else  
    {  
       echo "<script>console.log('error','problem with query after signup1')</script>";
       echo $link -> error; 
    } 

}


?>
   