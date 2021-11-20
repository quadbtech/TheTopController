<?php
    $con=mysqli_connect("localhost", "root", "", "thetopcontroller");
    if (mysqli_connect_errno($con)) {
        echo("coonection not establish");
    }

    // Check if file was uploaded without errors
    if(isset($_POST['name'])) {
        $data= array();
        $from_ip = $_SERVER['REMOTE_ADDR'];
        $from_browser = $_SERVER['HTTP_USER_AGENT'];
        date_default_timezone_set("Asia/Calcutta");
        $date_now = date("r");
        $name=$_POST['name'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $upload = $_FILES['image']['name'];
        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "webp" => "image/webp", "png" => "image/png");
        $filename = $_FILES["image"]["name"];
        $filetype = $_FILES["image"]["type"];
        $filesize = $_FILES["image"]["size"];
    
        // Verify file extension
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");
    
        // Verify file size - 5MB maximum
        $maxsize = 5 * 1024 * 1024;
        if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");
    
        // Verify MYME type of the file
        if(in_array($filetype, $allowed)){
            // Check whether file exists before uploading it
            if(file_exists("upload/" . $filename)){
                echo $filename . " is already exists.";
            } else{
                $result = mysqli_query($con, "SELECT max(id) FROM `custom-design`");

                while ($row = mysqli_fetch_array($result)) {
                    $id = $row[0];  
                }
                    $id = $id + 1;
                
                $query = "INSERT INTO `custom-design` (id,`name`, `phone`, `email`, `upload`, `time`, `from_ip`, `from_browser`) VALUES ($id, '$name', '$phone', '$email', '$upload', '$date_now','$from_ip', '$from_browser')";
                
                $result=mysqli_query($con,$query);
                
                move_uploaded_file($_FILES["image"]["tmp_name"], "../images/upload/" . $filename);
                $error= "Your file was uploaded successfully.";
                $data['status'] = 'ok';
                $data['id'] = $id;
                echo json_encode($data);
            } 
        } else{
            echo "Error: There was a problem uploading your file. Please try again."; 
        }
    } 
?>
<html>
    <body>
        <form id="custom" action="" method="POST" enctype="multipart/form-data">
            <input type="text" class="text-center w-100 mb-3 font-poppins-regular" style="color: black;border:1px black solid; border-radius: 10px;font-size: 21px;" name="name" class="form-control" placeholder="Your Name">
            <input type="number" class="text-center w-100 mb-3 font-poppins-regular" style="color: black;border: 1px black solid; border-radius: 10px;font-size: 21px;" name="phone" class="form-control" placeholder="Your Phone Number">
            <input type="email" class="text-center w-100 mb-3 font-poppins-regular" style="color: black;border: 1px black solid; border-radius: 10px;font-size: 21px;" name="email" class="form-control" placeholder="Your Email ID">
            <div  class="d-flex justify-content-center align-items-center">
                <input type="file" class="text-center w-100 mb-3 font-poppins-regular" style="color: black;border: 1px black solid; border-radius: 10px;font-size: 21px;" name="image" class="form-control">
            </div>
            <div class="d-flex justify-content-center align-items-center">
                <button type="submit" class="btn py-1 px-3 mb-3 shadow-buy-now-button-1 font-poppins-regular" id="submitdesk" style="border-radius: 10px; border: 1px black solid; font-size: 29px;">Submit</button>
            </div>
        </form>       
   </body>
</html>