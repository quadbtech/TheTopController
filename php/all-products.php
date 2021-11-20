<?php
if(!empty($_POST['get_data']))
	{
    	$data = array();
	
		class product {  
		 
			public $productName = "Xbox one Controller";
			public $productNameHtml = "Xbox<br>one";
			public $productName3 = "Xbox one Controller";
			public $product1 ="Controller";
			public $specification ="-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One Controller<br>-DIMENSIONS: 6.00 x 4.00 x 1.70";
			public $productUrl = "custom-design-page?productName=Xbox-one-controller";

			// Constructor is being implemented. 
			public function __construct($productName,$productNameHtml,$productName3,$product1,$specification,$productUrl) { 
				 
				$this->productName = $productName; 
				$this->productNameHtml = $productNameHtml;
				$this->productName3 = $productName3;
				$this->product1 = $product1;
				$this->specification = $specification; 
				$this->productUrl = $productUrl;  
			} 
		} 

		// now constructor is called automatically  
		// because we have initialized the object 
		// or class Bird. 

		$Xbox_one_controller['xbox-one-controller'] = new product (
			//product name
			"Xbox one Controller",
			//product name html
			"Xbox<br>one",
			// product name 3
			"Xbox one Controller",
			// product
			"Controller",
			//Specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One Controller<br>-DIMENSIONS: 6.00 x 4.00 x 1.70",			
			//url
			"design-page?productName=Xbox-one-controller"
		);
		$Xbox_one_s_controller['xbox-one-s-controller'] = new product (
			//product name
			"Xbox One S Controller",
			//product name html
			"Xbox<br>one s",
			// product name 3
			"Xbox One S Controller",
			// product
			"Controller",
			//Specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One S Controller<br>-DIMENSIONS: 6.00 x 4.00 x 1.70",			
			//url
			"design-page?productName=xbox-one-s-controller"
        );
        $Xbox_one_x_controller['xbox-one-x-controller'] = new product (
			//product name
			"Xbox One x Controller",
			//product name html
			"Xbox<br>one x",
			// product name 3
			"Xbox One X Controller",
			// product
			"Controller",
			//Specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One X Controller<br>-DIMENSIONS: 6.00 x 4.00 x 1.70",			
			//url
			"design-page?productName=xbox-one-x-controller"
        );
		$Xbox_one_elite_controller['xbox-one-elite-controller'] = new product (
			//product name
			"Xbox One<br>elite Controller",
			//product name html
			"Xbox<br>one elite",
			// product name 3
			"Xbox One elite Controller",
			// product
			"Controller",
			//Specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One elite Controller<br>-DIMENSIONS: 6.00 x 4.00 x 1.70",			
			//url
			"design-page?productName=xbox-one-elite-controller"
		);
		$Xbox_one_elite_wireless_controller['xbox-one-elite-wireless-controller'] = new product (
			//product name
			"Xbox One<br>elite wireless<br>Controller",
			//product name html
			"Xbox<br>one elite<br>wireless",
			// product name 3
			"Xbox One elite wireless Controller",
			// product
			"Controller",
			//Specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One elite wireless Controller<br>-DIMENSIONS: 6.00 x 4.00 x 1.70",			
			//url
			"design-page?productName=xbox-one-elite-controller"
		);
		$Xbox_one_console['xbox-one-console'] = new product (
			//product name
			"Xbox one console",
			//product name html
			"Xbox<br>one",
			// product name 3
			"Xbox one console",
			// product
			"console",
			//Specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One console<br>-DIMENSIONS: 12.00 x 0.01 x 29.00",			
			//url
			"design-page?productName=Xbox-one-console"
		);
		$Xbox_one_s_console['xbox-one-s-console'] = new product (
			//product name
			"Xbox One S console",
			//product name html
			"Xbox<br>one s",
			// product name 3
			"Xbox One S console",
			// product
			"console",
			//Specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One S console<br>-DIMENSIONS: 12.00 x 0.01 x 29.00",			
			//url
			"design-page?productName=xbox-one-s-console"
        );
        $Xbox_one_x_console['xbox-one-x-console'] = new product (
			//product name
			"Xbox One x console",
			//product name html
			"Xbox<br>one x",
			// product name 3
			"Xbox One X console",
			// product
			"console",
			//Specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One X console<br>-DIMENSIONS: 12.00 x 0.01 x 29.00",			
			//url
			"design-page?productName=xbox-one-x-console"
        );
		$Xbox_one_bundle['xbox-one-bundle'] = new product (
			//product name
			"Xbox one bundle",
			//product name html
			"Xbox<br>one",
			// product name 3
			"Xbox one bundle",
			// product
			"bundle",
			//Specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One console & Controller <br>-DIMENSIONS: Console: 12.00 x 0.01 x 29.00<br>Controller: 6.00 x 4.00 x 1.70",			
			//url
			"design-page?productName=Xbox-one-bundle"
		);
		$Xbox_one_s_bundle['xbox-one-s-bundle'] = new product (
			//product name
			"Xbox One S bundle",
			//product name html
			"Xbox<br>one s",
			// product name 3
			"Xbox One S bundle",
			// product
			"bundle",
			//Specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One S console & Controller <br>-DIMENSIONS: Console: 12.00 x 0.01 x 29.00<br>Controller: 6.00 x 4.00 x 1.70",			
			//url
			"design-page?productName=xbox-one-s-bundle"
        );
        $Xbox_one_x_bundle['xbox-one-x-bundle'] = new product (
			//product name
			"Xbox One x bundle",
			//product name html
			"Xbox<br>one x",
			// product name 3
			"Xbox One X bundle",
			// product
			"bundle",
			//Specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One X console & Controller <br>-DIMENSIONS: Console: 12.00 x 0.01 x 29.00<br>Controller: 6.00 x 4.00 x 1.70",			
			//url
			"design-page?productName=xbox-one-x-bundle"
		);
		$ps4_controller['ps4-controller'] = new product (
			//product name
			"PS4<br>Controller",
			//product name html
			"PS4",
			// product name 3
			"PS4 Controller",
			// product
			"Controller",
			//Specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off<br>-Residue will be non-existent on<br> your PS4 Controller<br>-DIMENSIONS: 6.24 x 2.00 x 3.90",			
			//url
			"design-page?productName=ps4-controller"
		);
		$ps4_console['ps4-console'] = new product (
			//product name
			"PS4<br>console",
			//product name html
			"PS4",
			// product name 3
			"PS4 console",
			// product
			"console",
			//Specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off<br>-Residue will be non-existent <br>on your PS4 Console<br>-DIMENSIONS: 12.00 x 0.01 x 29.00",			
			//url
			"design-page?productName=ps4-console"
		);
		$ps4_slim_console['ps4-slim-console'] = new product (
			//product name
			"PS4 Slim<br>console",
			//product name html
			"PS4<br>Slim",
			// product name 3
			"PS4 Slim console",
			// product
			"console",
			//Specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off<br>-Residue will be non-existent <br>on your PS4 Slim Console<br>-DIMENSIONS: 13.00 x 0.01 x 25.00",			
			//url
			"design-page?productName=ps4-slim-console"
		);
		$ps4_pro_console['ps4-pro-console'] = new product (
			//product name
			"PS4 pro<br>console",
			//product name html
			"PS4<br>pro",
			// product name 3
			"PS4 pro console",
			// product
			"console",
			//Specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off<br>-Residue will be non-existent <br>on your PS4 pro Console<br>-DIMENSIONS: 13.00 x 0.01 x 25.00",			
			//url
			"design-page?productName=ps4-pro-console"
		);
		$ps4_bundle['ps4-bundle'] = new product (
			//product name
			"PS4<br>bundle",
			//product name html
			"PS4",
			// product name 3
			"PS4 bundle",
			// product
			"bundle",
			//Specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off<br>-Residue will be non-existent <br>on your PS4 bundle<br>-DIMENSIONS: Console: 12.00 x 0.01 x 29.00<br>Controller: 6.24 x 2.00 x 3.90",			
			//url
			"design-page?productName=ps4-bundle"
		);
		$ps4_slim_bundle['ps4-slim-bundle'] = new product (
			//product name
			"PS4 Slim<br>bundle",
			//product name html
			"PS4<br>Slim",
			// product name 3
			"PS4 Slim bundle",
			// product
			"bundle",
			//Specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off<br>-Residue will be non-existent <br>on your PS4 Slim bundle<br>-DIMENSIONS: Console: 13.00 x 0.01 x 25.00<br>Controller: 6.24 x 2.00 x 3.90",			
			//url
			"design-page?productName=ps4-slim-bundle"
		);
		$ps4_pro_bundle['ps4-pro-bundle'] = new product (
			//product name
			"PS4 pro<br>bundle",
			//product name html
			"PS4<br>pro",
			// product name 3
			"PS4 pro bundle",
			// product
			"bundle",
			//Specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off<br>-Residue will be non-existent <br>on your PS4 pro bundle<br>-DIMENSIONS: Console: 13.00 x 0.01 x 25.00<br>Controller: 6.24 x 2.00 x 3.90",			
			//url
			"design-page?productName=ps4-pro-bundle"
		);

		if($_POST['get_data'] == 'selectedProduct'){
			if (isset($_POST['productName'])){
				if($_POST['productName'] == 'xbox-one-controller'){
				    $data['status'] = 'ok';
				    $data['result'] = $Xbox_one_controller['xbox-one-controller'];
				    //returns data as JSON format
                    echo json_encode($data);
                }elseif($_POST['productName'] == 'xbox-one-s-controller'){
                    $data['status'] = 'ok';
                    $data['result'] = $Xbox_one_s_controller['xbox-one-s-controller'];
                    //returns data as JSON format
					echo json_encode($data);
				}elseif($_POST['productName'] == 'xbox-one-x-controller'){
                    $data['status'] = 'ok';
                    $data['result'] = $Xbox_one_x_controller['xbox-one-x-controller'];
                    //returns data as JSON format
                    echo json_encode($data);
                }elseif($_POST['productName'] == 'xbox-one-elite-controller'){
                    $data['status'] = 'ok';
                    $data['result'] = $Xbox_one_elite_controller['xbox-one-elite-controller'];
                    //returns data as JSON format
					echo json_encode($data);	
				}elseif($_POST['productName'] == 'xbox-one-elite-wireless-controller'){
                    $data['status'] = 'ok';
                    $data['result'] = $Xbox_one_elite_wireless_controller['xbox-one-elite-wireless-controller'];
                    //returns data as JSON format
					echo json_encode($data);	
				}elseif($_POST['productName'] == 'xbox-one-console'){
				    $data['status'] = 'ok';
				    $data['result'] = $Xbox_one_console['xbox-one-console'];
				    //returns data as JSON format
                    echo json_encode($data);
                }elseif($_POST['productName'] == 'xbox-one-s-console'){
                    $data['status'] = 'ok';
                    $data['result'] = $Xbox_one_s_console['xbox-one-s-console'];
                    //returns data as JSON format
					echo json_encode($data);
				}elseif($_POST['productName'] == 'xbox-one-x-console'){
                    $data['status'] = 'ok';
                    $data['result'] = $Xbox_one_x_console['xbox-one-x-console'];
                    //returns data as JSON format
                    echo json_encode($data);
                }elseif($_POST['productName'] == 'xbox-one-bundle'){
				    $data['status'] = 'ok';
				    $data['result'] = $Xbox_one_bundle['xbox-one-bundle'];
				    //returns data as JSON format
                    echo json_encode($data);
                }elseif($_POST['productName'] == 'xbox-one-s-bundle'){
                    $data['status'] = 'ok';
                    $data['result'] = $Xbox_one_s_bundle['xbox-one-s-bundle'];
                    //returns data as JSON format
					echo json_encode($data);
				}elseif($_POST['productName'] == 'xbox-one-x-bundle'){
                    $data['status'] = 'ok';
                    $data['result'] = $Xbox_one_x_bundle['xbox-one-x-bundle'];
                    //returns data as JSON format
					echo json_encode($data);
				}elseif($_POST['productName'] == 'ps4-controller'){
					$data['status'] = 'ok';
					$data['result'] = $ps4_controller['ps4-controller'];
					//returns data as JSON format
					echo json_encode($data);
				}elseif($_POST['productName'] == 'ps4-console'){
					$data['status'] = 'ok';
					$data['result'] = $ps4_console['ps4-console'];
					//returns data as JSON format
					echo json_encode($data);
				}elseif($_POST['productName'] == 'ps4-slim-console'){
					$data['status'] = 'ok';
					$data['result'] = $ps4_slim_console['ps4-slim-console'];
					//returns data as JSON format
					echo json_encode($data);
				}elseif($_POST['productName'] == 'ps4-pro-console'){
					$data['status'] = 'ok';
					$data['result'] = $ps4_pro_console['ps4-pro-console'];
					//returns data as JSON format
					echo json_encode($data);
				}elseif($_POST['productName'] == 'ps4-bundle'){
					$data['status'] = 'ok';
					$data['result'] = $ps4_bundle['ps4-bundle'];
					//returns data as JSON format
					echo json_encode($data);
				}elseif($_POST['productName'] == 'ps4-slim-bundle'){
					$data['status'] = 'ok';
					$data['result'] = $ps4_slim_bundle['ps4-slim-bundle'];
					//returns data as JSON format
					echo json_encode($data);
				}elseif($_POST['productName'] == 'ps4-pro-bundle'){
					$data['status'] = 'ok';
					$data['result'] = $ps4_pro_bundle['ps4-pro-bundle'];
					//returns data as JSON format
					echo json_encode($data);		
				}else{
                    echo 'error with product name';
                }
            }
		}
    }
?>