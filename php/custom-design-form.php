<?php

require_once 'link.php';

if(isset($_POST['name'])){
    
    $data = array();  
    $from_ip = $_SERVER['REMOTE_ADDR'];
    $from_browser = $_SERVER['HTTP_USER_AGENT'];
    date_default_timezone_set("Asia/Calcutta");
    $date_now = date("r");

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $upload = $_FILES['image']['name'];
    $file_tmp =$_FILES['image']['tmp_name'];    
    $filetype = $_FILES["image"]["type"];
    $filesize = $_FILES["image"]["size"];
    $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "webp" => "image/webp", "png" => "image/png");
    $imageFileType = strtolower(pathinfo("../images/upload/",PATHINFO_EXTENSION));
    $uploadOk = 1;
    $error="";
    $productName = "";
    if(isset($_POST['productNameForm'])){
    $productName =$_POST['productNameForm'];
    }
    // Verify file extension
    $ext = pathinfo($upload, PATHINFO_EXTENSION);
    if(!array_key_exists($ext, $allowed)){
        $error= "Please select a valid file format.";
    }
    // Verify file size - 5MB maximum
    $maxsize = 5 * 1024 * 1024;
    if($filesize > $maxsize) {
        $error = "File size is larger than the allowed limit.";
    }
    // Verify MYME type of the file
    if(in_array($filetype, $allowed)){
        // Check whether file exists before uploading it
        if(file_exists("upload/" . $upload)){
            echo $upload . " is already exists.";
        }else
            {
                $result = mysqli_query($link, "SELECT max(id) FROM `custom-design`");

                while ($row = mysqli_fetch_array($result)) {
                    $id = $row[0];  
                }
                    $id = $id + 1;
            
                $query = "INSERT INTO `custom-design` (id,`name`, `phone`, `email`, `upload`, `time`, `from_ip`, `from_browser`,`product_name`) VALUES ($id, '$name', '$phone', '$email', '$upload', '$date_now','$from_ip', '$from_browser','$productName')";
            
                $result=mysqli_query($link,$query);
                
                move_uploaded_file($_FILES["image"]["tmp_name"], "../images/upload/" . $upload);
            
                $error= "Your file was uploaded successfully.";
                $data['status'] = 'ok';
                $data['id'] = $id;
                $data['error'] = $error;
                echo json_encode($data);
            }
    }else  
        {  
            $data['status'] = 'not ok';
            $data['error'] = $error;
            echo json_encode($data);

        } 
    }
?>   