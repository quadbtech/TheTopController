<?php

require_once 'link.php';
if(isset($_POST['designName']) && (isset($_POST['productName']))){
    $data = array();  
    $from_ip = $_SERVER['REMOTE_ADDR'];
    $from_browser = $_SERVER['HTTP_USER_AGENT'];
    date_default_timezone_set("Asia/Calcutta");
    $date_now = date("r");
    $designName = mysqli_real_escape_string($link, $_POST['designName']) ; 
    $productName = mysqli_real_escape_string($link, $_POST['productName']) ;  
    $discountRequests = array();

    $result = mysqli_query($link, "SELECT * FROM `discount_price` WHERE `designName` = '$designName' AND `productName` ='$productName' AND `status` = 'active'");
    if (mysqli_num_rows($result) !=0 ) { 
        $i = 0;
        while ($row = mysqli_fetch_array($result)) {
            $discountRequests[$i]['id'] = $row['id']; 
            $discountRequests[$i]['designName'] = $row['designName']; 
            $discountRequests[$i]['productName'] = $row['productName'];  
            $discountRequests[$i]['discountPrice'] = $row['discountPrice'];
            $i = $i + 1;
        }

        $data['status'] = 101;
        $data['discountRequests'] = $discountRequests;
        echo json_encode($data);
    }else{
        $data['status'] = 401;
        $data['error'] = 'No details found';
        echo json_encode($data);
    }
    
}
else if(isset($_POST['designName'])){
    $data = array();  
    $from_ip = $_SERVER['REMOTE_ADDR'];
    $from_browser = $_SERVER['HTTP_USER_AGENT'];
    date_default_timezone_set("Asia/Calcutta");
    $date_now = date("r");
    $designName = mysqli_real_escape_string($link, $_POST['designName']) ;   
    $discountRequests = array();
    $soldOutRequests = array();

    $result = mysqli_query($link, "SELECT * FROM `discount_price` WHERE `designName` = '$designName' AND `status` = 'active'");
    if (mysqli_num_rows($result) !=0 ) { 
        $i = 0;
        while ($row = mysqli_fetch_array($result)) {
            $discountRequests[$i]['id'] = $row['id']; 
            $discountRequests[$i]['designName'] = $row['designName']; 
            $discountRequests[$i]['productName'] = $row['productName'];  
            $discountRequests[$i]['discountPrice'] = $row['discountPrice'];
            $i = $i + 1;
        }
    }
    // sold out
    $result1 = mysqli_query($link, "SELECT * FROM `inventory` WHERE `designName` = '$designName' AND `status` = 'active'");
        if (mysqli_num_rows($result) !=0 ) { 
            $i = 0;
            while ($row = mysqli_fetch_array($result1)) {
                $soldOutRequests[$i]['id'] = $row['id']; 
                $soldOutRequests[$i]['designName'] = $row['designName']; 
                $soldOutRequests[$i]['productName'] = $row['productName'];  
                $soldOutRequests[$i]['soldOut'] = $row['soldOut'];
                $i = $i + 1;
            }
        
        $data['status'] = 101;
        $data['discountRequests'] = $discountRequests;
        $data['soldOutRequests']  = $soldOutRequests;
        echo json_encode($data);
        }else{
            $data['status'] = 401;
            $data['error'] = 'No details found';
            echo json_encode($data);
        }
}else if(isset($_POST['productNameEditted'])){
    $data = array();  
    $from_ip = $_SERVER['REMOTE_ADDR'];
    $from_browser = $_SERVER['HTTP_USER_AGENT'];
    date_default_timezone_set("Asia/Calcutta");
    $date_now = date("r");
    $productNameEditted = mysqli_real_escape_string($link, $_POST['productNameEditted']) ;
    $productNameEdittedElite = mysqli_real_escape_string($link, $_POST['productNameEdittedElite']) ;
    $productNameController =$productNameEditted."controller";
    $productNameConsole =$productNameEdittedElite."console";
    $productNameBundle =$productNameEdittedElite."bundle";
    $discountRequests = array();
    $soldOutRequests =array();

    $result = mysqli_query($link, "SELECT * FROM `discount_price` WHERE `productName` = '$productNameController' OR `productName` = '$productNameConsole' OR `productName` = '$productNameBundle'   AND `status` = 'active'");
    if (mysqli_num_rows($result) !=0 ) { 
        $i = 0;
        while ($row = mysqli_fetch_array($result)) {
            $discountRequests[$i]['id'] = $row['id']; 
            $discountRequests[$i]['designName'] = $row['designName']; 
            $discountRequests[$i]['productName'] = $row['productName'];  
            $discountRequests[$i]['discountPrice'] = $row['discountPrice'];
            $i = $i + 1;
        }
    // soldout
    $result1 = mysqli_query($link, "SELECT * FROM `inventory` WHERE `productName` = '$productNameController' OR `productName` = '$productNameConsole' OR `productName` = '$productNameBundle'   AND `status` = 'active'");
        if (mysqli_num_rows($result) !=0 ) { 
            $i = 0;
            while ($row = mysqli_fetch_array($result1)) {
                $soldOutRequests[$i]['id'] = $row['id']; 
                $soldOutRequests[$i]['designName'] = $row['designName']; 
                $soldOutRequests[$i]['productName'] = $row['productName'];  
                $soldOutRequests[$i]['soldOut'] = $row['soldOut'];
                $i = $i + 1;
            }
        }

        $data['status'] = 101;
        $data['discountRequests'] = $discountRequests;
        $data['soldOutRequests'] =  $soldOutRequests;
        echo json_encode($data);
        }else{
            $data['status'] = 401;
            $data['error'] = 'No details found';
            echo json_encode($data);
    }
}
?>