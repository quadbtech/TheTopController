<?php

require_once 'PHPMailer.php';
require_once 'Exception.php';
require_once 'SMTP.php';

require_once 'link.php';

if(isset($_POST['items'])){
    
    $data = array();

    $coupon = "";
    if(isset($_POST['coupon'])){
        $coupon = $_POST['coupon'];
    }
    $from_ip = $_SERVER['REMOTE_ADDR'];
    $from_browser = $_SERVER['HTTP_USER_AGENT'];
    date_default_timezone_set("Asia/Calcutta");
    $date_now = date("r");

    $items = $_POST['items'];
    $paypalPayId = $_POST['paypalPayId'];
    $payerInfo = $_POST['payerInfo'];
    $shippingAddress = $_POST['shippingAddress'];
    $amount = $_POST['amount'];
    $object = $_POST['object'];

    $id = 0;

    $result = mysqli_query($link, "SELECT max(id) FROM `orders`");

    while ($row = mysqli_fetch_array($result)) {
        $id = $row[0];  
    }
    $id = $id + 1;
    $items1 = $items;
    $payerInfo1 = $payerInfo;
    $object1 = $object;
    $items = mysqli_real_escape_string($link, $items);
    $paypalPayId = mysqli_real_escape_string($link, $paypalPayId);
    $payerInfo = mysqli_real_escape_string($link, $payerInfo);
    $shippingAddress = mysqli_real_escape_string($link, $shippingAddress);
    $amount = mysqli_real_escape_string($link, $amount);
    $object = mysqli_real_escape_string($link, $object);

    $query = "INSERT INTO `orders` (`id`, `items`, `paypalPayId`, `payerInfo`, `shippingAddress`, `amount`, `coupon`, `object`, `time`, `from_ip`, `from_browser`) VALUES ($id,'$items', '$paypalPayId', '$payerInfo', '$shippingAddress', '$amount', '$coupon', '$object','$date_now','$from_ip', '$from_browser')";

    // echo $query;
    // echo $query;
    
    if($result = mysqli_query($link, $query))  
    {  
        $data['status'] = 'ok';
        $data['id'] = $id;
        // $data['payer'] = json_encode($payerInfo1);
        $items2 = json_decode($items1);
        $payerInfo2 = json_decode($payerInfo1);
        $object2 = json_decode($object1);
        $data['email'] = $payerInfo2->email; 
        // print_r($items2);

        $itemsString = "";
        for($i=0; $i< sizeof($items2); $i++){
            $itemsString  = $itemsString.'
                    <tr style="margin-top: 10px;">
                        <td class="font-poppins-regular" style="font-size: 15px;">
                            '.$items2[$i]->productName.' Skin<br><span class="font-poppins-bold">'.$items2[$i]->designName.'</span>
                        </td>
                        <td class="font-poppins-bold" style="font-size: 15px; text-align: right;" width="60">
                        '.$items2[$i]->priceDollar.'.'.$items2[$i]->priceCents.'$
                        </td>
                        <td class="font-poppins-bold" style="font-size: 15px; text-align: center;" width="60">
                            X'.$items2[$i]->quantity.'
                        </td>
                    </tr>';
        }

        $err = array();

        $mail = new PHPMailer\PHPMailer\PHPMailer();
        
        $mail->isSMTP();  // the mailer is set to use SMTP
        // $mail->Host = "smtp.zoho.in";  // specify main and backup server
        // $mail->SMTPAuth = true; // SMTP authentication is turned on
        // $mail->Username = "support@thetopcontroller.com";  // SMTP username
        // $mail->Password = "#Rajabeta420"; // SMTP password
        // $mail->SMTPSecure = 'ssl';
        // $mail->Port = 465;

        $mail->isSMTP();
        $mail->Host = 'localhost';
        $mail->SMTPAuth = false;
        $mail->SMTPAutoTLS = false; 
        $mail->Port = 25; 
        
        $mail->From = "support@thetopcontroller.com";
        $mail->FromName = "The Top Controller";	 // name is optional
        $mail->AddAddress($payerInfo2->email);
        $mail->AddReplyTo("support@thetopcontroller.com", "Support | The Top Controller");
        
        $mail->WordWrap = 50;  // set word wrap to 50 characters
        $mail->IsHTML(true); // set email format to HTML
        
        $body = '<!DOCTYPE html
        PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">
    
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <!--[if !mso]><!-->
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!--<![endif]-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="x-apple-disable-message-reformatting">
        <title>Email Tempalte</title>
        <style type="text/css">
            @import url(https://fonts.googleapis.com/css?family=Nunito:200,300,400,600,700,800,900|Raleway:200,300,400,500,600,700,800,900);
    
            html {
                width: 100%
            }
    
            body {
                -webkit-text-size-adjust: none;
                -ms-text-size-adjust: none;
                margin: 0;
                padding: 0;
                font-family: \'Open Sans\', Arial, Sans-serif !important
            }
    
            .font-poppins-regular{
                font-family: "Poppins", sans-serif;
            }
    
            .font-poppins-bold{
                font-family: "Poppins", sans-serif;
                font-weight: bold;
            }
    
            table {
                border-spacing: 0;
                table-layout: auto;
                margin: 0 auto
            }
    
            img {
                display: block !important;
                overflow: hidden !important
            }
    
            a {
                text-decoration: none;
                color: unset
            }
    
            .ReadMsgBody {
                width: 100%;
                background-color: #fff
            }
    
            .ExternalClass {
                width: 100%;
                background-color: #fff
            }
    
            .ExternalClass,
            .ExternalClass p,
            .ExternalClass span,
            .ExternalClass font,
            .ExternalClass td,
            .ExternalClass div {
                line-height: 100%
            }
    
            .yshortcuts a {
                border-bottom: none !important
            }
    
            .full {
                width: 100%
            }
    
            .pad {
                width: 92%
            }
    
            @media only screen and (max-width: 650px) {
                .res-pad {
                    width: 92%;
                    max-width: 92%
                }
    
                .res-full {
                    width: 100%;
                    max-width: 100%
                }
    
                .res-left {
                    text-align: left !important
                }
    
                .res-right {
                    text-align: right !important
                }
    
                .res-center {
                    text-align: center !important
                }
            }
    
            @media only screen and (max-width: 750px) {
                .margin-full {
                    width: 100%;
                    max-width: 100%
                }
    
                .margin-pad {
                    width: 92%;
                    max-width: 92%;
                    max-width: 600px
                }
            }
        </style>
    </head>
    
    <body>
        <!-- ====== Module : Header ====== -->
        <!-- f5f5f5 -->
        <table bgcolor="#2e3192" align="center" class="full" border="0" cellpadding="0" cellspacing="0">
            <tr>
                <td>
                    <table bgcolor="#2e3192" width="750" align="center" class="margin-full" border="0" cellpadding="0"
                        cellspacing="0">
                        <tr>
                            <td>
                                <table width="600" align="center" class="margin-pad" border="0" cellpadding="0"
                                    cellspacing="0">
                                    <tr>
                                        <td height="30" style="font-size:0px">&nbsp;</td>
                                    </tr>
                                    <!-- column x2 -->
                                    <tr>
                                        <td valign="top">
                                            <table>
                                                <tr>
                                                    
                                                    <td style="display: flex; color: #ffea00; font-size: 25px; " class="font-poppins-bold">
                                                        <img src="https://www.thetopcontroller.com/icons/yellow_logo.png" style="margin-right: 5px; width: 50px;">
                                                        <p style="margin: 0px; ">The Top Controller</p>
                                                        
                                                    </td>
                                                    
                                                </tr>
                                            </table>
                                        </td>
                                        
                                        
                                    </tr>
                                    <!-- column x2 end -->
                                    <tr>
                                        <td height="30" style="font-size:0px">&nbsp;</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
        <!-- ====== Module : Intro ====== -->
        <table bgcolor="#2e3192" align="center" class="full" border="0" cellpadding="0" cellspacing="0">
            <tr>
                <td>
                    <!-- #304050 -->
                    <table bgcolor="white" align="center" width="750" class="margin-full"
                        style="background-size:cover; background-position:center;" border="0" cellpadding="0"
                        cellspacing="0" >
                        <tr>
                            <td>
                                <table width="600" align="center" class="margin-pad" border="0" cellpadding="0"
                                    cellspacing="0">
                                    <tr>
                                        <td height="40" style="font-size:0px">&nbsp;</td>
                                    </tr>
                                    <!-- title -->
                                    <tr>
                                        <td class="res-center font-poppins-regular"
                                            style="text-align: center; color: black; font-size: 28px; letter-spacing: 0.7px; word-break: break-word;">
                                            YOUR RECIEPT
                                        </td>
                                    </tr>
                                    <!-- title end -->
                                   
                                    <!-- subtitle -->
                                    <tr>
                                        <td class="res-center "
                                            style="text-align: center; color: black; font-family: \'Poppins\', sans-serif; font-size: 15px; word-break: break-word;">
                                            HERE IS WHAT YOU HAVE PURCHASED
                                        </td>
                                    </tr>
                                    <!-- subtitle end -->
                                    
                                    
                                    <tr>
                                        <td height="20" style="font-size:0px">&nbsp;</td>
                                    </tr>
                                    <!-- dash -->
                                    <tr>
                                        <td>
                                            <table align="center" class="res-full" border="0" cellpadding="0"
                                                cellspacing="0">
                                                <tr>
                                                    <td>
                                                        <table bgcolor="black" align="center" style="border-radius: 10px;"
                                                            border="0" cellpadding="0" cellspacing="0">
                                                            <tr>
                                                                <td width="60" height="3" style="font-size:0px">&nbsp;</td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <!-- dash end -->
                                    <tr>
                                        <td height="21" style="font-size:0px">&nbsp;</td>
                                    </tr>
                                    <!-- paragraph -->
                                    <tr>
                                        <td class="res-center font-poppins-regular"
                                            style="text-align: center; color: black; font-size: 17px;  line-height: 23px; word-break: break-word">
                                            Thank you <span style="font-weight: bold;">'.$payerInfo2->first_name.'</span> for ordering from top controller, your Order ID is:
                                            
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="font-size: 30px; font-weight :bold; width: 100%; text-align: center; color: black; padding-top: 10px; padding-bottom: 10px;" class="font-poppins-bold">
                                           #'.$id.'
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="res-center font-poppins-regular"
                                            style="text-align: center; color: black; font-size: 17px;  line-height: 23px; word-break: break-word">
                                            Please Use this order Id to refer to for any communication regarding your Order<br>
                                            You have placed the following order:
                                            
                                        </td>
                                    </tr>
                                    <tr>
                                        <td valign="top">
                                            <table style=" padding-top: 30px;">
                                                <tbody>
                                                    <tr>
                                                        <td style="font-size: 18px; font-weight :bold; width: 100%; text-align: center; color: black; padding-top: 10px; padding-bottom: 10px;" class="font-poppins-bold">
                                                            Items You Have Ordered
                                                        </td>
                                                        
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <table>
                                                                '.$itemsString.'
                                                            </table>
                                                        </td>
                                                        
                                                    </tr>
                                                    
                                                </tbody>
                                            </table>
                                            <table width="300" style=" padding: 10px; margin-top: 20px;    -webkit-box-shadow: 0px 0.3px 1px 0px rgba(0,0,0,0.75);
                                            -moz-box-shadow: 0px 0.3px 1px 0px rgba(0,0,0,0.75);
                                            box-shadow: 0px 0.3px 1px 0px rgba(0,0,0,0.75); border-radius: 20px;">
                                                <tbody>
                                                    <tr>
                                                        <td style="font-size: 30px; font-weight :bold; width: 100%; text-align: center; color: black;" class="font-poppins-bold">
                                                            Your Total
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="font-size: 15px; width: 100%; text-align: center; color: black;" class="font-poppins-regular">
                                                            Lets see what you got
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <table style="width: 100%;">
                                                                <tr>
                                                                    <td style="font-size: 18px; text-align: left; width: 50%;" class="font-poppins-regular">
                                                                        Your Total
                                                                    </td>
                                                                    <td style="border: 1px black solid; border-radius: 10px; font-size: 18px; text-align: center;" class="font-poppins-regular" >
                                                                        '.$amount.'
                                                                    </td>
                                                                </tr>
                                                                <tr height="5"></tr>
                                                                <tr>
                                                                    <td style="font-size: 18px; text-align: left; width: 50%;" class="font-poppins-regular">
                                                                        TAX
                                                                    </td>
                                                                    <td style="border: 1px black solid; border-radius: 10px; font-size: 18px; text-align: center;" class="font-poppins-regular" >
                                                                        0.00$
                                                                    </td>
                                                                </tr>
                                                                <tr height="5"></tr>
                                                                <tr>
                                                                    <td style="font-size: 18px; text-align: left; width: 50%;" class="font-poppins-regular">
                                                                        Shipping
                                                                    </td>
                                                                    <td style="border: 1px black solid; border-radius: 10px; font-size: 18px; text-align: center;" class="font-poppins-regular" >
                                                                        0.00$
                                                                    </td>
                                                                </tr>
                                                                <tr height="5"></tr>
                                                                <tr>
                                                                    <td style="font-size: 18px; text-align: left; width: 50%;" class="font-poppins-regular">
                                                                        Final Total
                                                                    </td>
                                                                    <td style="border: 1px black solid; border-radius: 10px; font-size: 18px; text-align: center; color: #ff0000; background-color: #ffea00;" class="font-poppins-regular" >
                                                                    '.$amount.'
                                                                    </td>
                                                                </tr>
                                                                <tr height="5"></tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr height="20"></tr>
                                    <tr>
                                        <td class="res-center font-poppins-regular"
                                            style="text-align: left; color: black; font-size: 17px; letter-spacing: 0.4px; line-height: 23px; word-break: break-word">
                                            A more detailed invoice will be mailed through <span class="font-poppins-bold">Paypal</span> to your submitted mail ID.<br>
                                            The Package will be Shipped to your Shipping address using the currently<br>
                                            available Standard Delivery of <span class="font-poppins-bold">6-7 Working Days</span>, <br>
                                            Please use the service links attached below in the emails below to<br>
                                            1. Submit a Feedback<br>
                                            2. Request Refund<br>
                                            3. Track Shipment<br><br>
    
                                            Thank you for your purchase,<br><br>
    
                                            Please use the coupon Code below to Get 5$  on your next purchase<br>
    
     
                                            
                                        </td>
                                    </tr>
                                    <!-- paragraph end -->
                                    <tr>
                                        <td style="font-size: 30px; font-weight :bold; width: 100%; text-align: center; color: black; padding-top: 10px; padding-bottom: 10px;">
                                           XC/123-34-CU/1
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="res-center font-poppins-regular"
                                            style="text-align: left; color: black; font-size: 17px; letter-spacing: 0.4px; line-height: 23px; word-break: break-word">
                                            This coupon code is applicable on all products of The Top Controller,<br>
                                            To Check them out <a href="https://www.thetopcontroller.com/" style="font-weight: bold;" >Click Here</a><br><br>
    
                                            Thank you<br>
                                            <span style="font-weight: bold;">Ryan Miller</span><br>
                                            The Top Controller<br>
                                            
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height="24" style="font-size:0px">&nbsp;</td>
                                    </tr>
                                    
                                    <tr>
                                        <td height="80" style="font-size:0px">&nbsp;</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
        <table bgcolor="#2e3192" align="center" class="full" border="0" cellpadding="0" cellspacing="0">
            <tr>
                <td>
                    <table bgcolor="#2e3192" width="750" align="center" class="margin-full" border="0" cellpadding="0"
                        cellspacing="0">
                        <tr>
                            <td>
                                <table width="600" align="center" class="margin-pad" border="0" cellpadding="0"
                                    cellspacing="0">
                                    <tr>
                                        <td height="30" style="font-size:0px">&nbsp;</td>
                                    </tr>
                                    <!-- column x2 -->
                                    <tr>
                                        <td valign="top">
                                            <table>
                                                <tr>
                                                    
                                                    <td height="60">
                                                        
                                                        
                                                    </td>
                                                    
                                                </tr>
                                            </table>
                                        </td>
                                        
                                        
                                    </tr>
                                    <!-- column x2 end -->
                                    <tr>
                                        <td height="30" style="font-size:0px">&nbsp;</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
        
    </body>
    
    </html>';
        $mail->Subject = "Thankyou for Shopping with Us | TheTopController";
        $mail->Body    = $body;
        $mail->AltBody = "This email contains returns";
        
        if(!$mail->Send()) {
            $data['mail'] = $mail->ErrorInfo;
            //    echo '<div class="status-icon invalid"><i class="fa fa-close"></i></div>';
        }
        else{
            // echo '<div class="status-icon valid"><i class="fa fa-check"></i></div>';
        }

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
   