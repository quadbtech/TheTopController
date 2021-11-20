<?php
if(!empty($_POST['get_data']))
	{
    	$data = array();
	
		class product {  
		
			public $productImageLoc1 = "../images/products/black-wall/ps4-controller/560X460/Front.jpg"; 
			public $productImageLoc2 = "../images/products/black-wall/ps4-controller/560X460/Back.jpg"; 
			public $productImageLoc3 = "../images/products/black-wall/ps4-controller/560X460/Side.jpg"; 
			public $productImageLoc4 = "../images/products/black-wall/ps4-controller/560X460/Zoom.jpg"; 
			public $productImageThumbLoc1 = "../images/products/black-wall/ps4-controller/187X140/Front.jpg"; 
			public $productImageThumbLoc2 = "../images/products/black-wall/ps4-controller/187X140/Back.jpg"; 
			public $productImageThumbLoc3 = "../images/products/black-wall/ps4-controller/187X140/Side.jpg"; 
			public $productImageThumbLoc4 = "../images/products/black-wall/ps4-controller/187X140/Zoom.jpg"; 
			public $designName = "Black Wall";
			public $designNameHtml = "black<br>wall";
			public $designImage = "../images/products/black-wall/design.jpg";
			public $productName = "ps4-controller";
			public $productImage = "../images/products/black-wall/ps4-controller/controller.png";
			public $priceDollar = "15";	
			public $priceCents = "99";
			public $shortDescription ="Another Brick Wall inspired design<br> from industry expert Robert W. Chambers,<br> Identify yourself as the best in Pop Culture";
			public $longDescription ="Another Brick Wall inspired design<br> from industry expert Robert W. Chambers,<br> Identify yourself as the best in Pop Culture";
			public $author = "You";
			public $specification ="-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>PS4<br>-DIMENSIONS: 6.00 x 4.00 x 1.70";
			public $productUrl = "single-product-page?designName=black-wall&productName=ps4-controller";

			// Constructor is being implemented. 
			public function __construct($productImageLoc1, $productImageLoc2, $productImageLoc3, $productImageLoc4, $productImageThumbLoc1, $productImageThumbLoc2, $productImageThumbLoc3, $productImageThumbLoc4, $designName, $designNameHtml, $designImage, $productName, $productImage, $priceDollar, $priceCents, $shortDescription , $longDescription, $author,  $specification, $productUrl) { 
				$this->productImageLoc1 = $productImageLoc1; 
				$this->productImageLoc2 = $productImageLoc2; 
				$this->productImageLoc3 = $productImageLoc3; 
				$this->productImageLoc4 = $productImageLoc4; 
				$this->productImageThumbLoc1 = $productImageThumbLoc1; 
				$this->productImageThumbLoc2 = $productImageThumbLoc2; 
				$this->productImageThumbLoc3 = $productImageThumbLoc3; 
				$this->productImageThumbLoc4 = $productImageThumbLoc4; 
				$this->designName = $designName; 
				$this->designNameHtml = $designNameHtml;
				$this->designImage = $designImage;
				$this->productName = $productName;
				$this->productImage = $productImage;
				$this->priceDollar = $priceDollar; 
				$this->priceCents = $priceCents; 
				$this->shortDescription = $shortDescription; 
				$this->longDescription = $longDescription; 
				$this->author = $author; 
				$this->specification = $specification;
				$this->productUrl = $productUrl;  
			} 
		} 

		// now constructor is called automatically  
		// because we have initialized the object 
		// or class Bird. 

		$black_wall['ps4-controller'] = new product (
			//four images of size 589x591
			"../images/products/black-wall/ps4-controller/560X460/Front.jpg",
			"../images/products/black-wall/ps4-controller/560X460/Back.jpg",
			"../images/products/black-wall/ps4-controller/560X460/Side.jpg",
			"../images/products/black-wall/ps4-controller/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/black-wall/ps4-controller/187X140/Front.jpg",
			"../images/products/black-wall/ps4-controller/187X140/Back.jpg",
			"../images/products/black-wall/ps4-controller/187X140/Side.jpg",
			"../images/products/black-wall/ps4-controller/187X140/Zoom.jpg",
			//design name
			"black wall" ,
			//design name html
			"black<br>wall",
			//design image
			"../images/products/black-wall/design.jpg",
			//product name
			"PS4 controller",
			//product Image
			"../images/products/black-wall/ps4-controller/controller.png",
			//price dollars
			"15",
			//price cents
			"99",
			//short description
			"Another Brick Wall inspired design<br> from industry expert Robert W. Chambers,<br> Identify yourself as the best in Pop Culture",
			//long description
			"Another Brick Wall inspired design<br> from industry expert Robert W. Chambers,<br> Identify yourself as the best in Pop Culture",
			//author
			"Robert W. Chambers",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off<br>-Residue will be non-existent on<br> your PS4 Controller<br>-DIMENSIONS: 6.24 x 2.00 x 3.90",
			//url
			"single-product-page?designName=black-wall&productName=ps4-controller"
		);
		$black_wall['ps4-console'] = new product (
			//four images of size 589x591
			"../images/products/black-wall/ps4-console/560X460/Front.jpg",
			"../images/products/black-wall/ps4-console/560X460/Back.jpg",
			"../images/products/black-wall/ps4-console/560X460/Side.jpg",
			"../images/products/black-wall/ps4-console/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/black-wall/ps4-console/187X140/Front.jpg",
			"../images/products/black-wall/ps4-console/187X140/Back.jpg",
			"../images/products/black-wall/ps4-console/187X140/Side.jpg",
			"../images/products/black-wall/ps4-console/187X140/Zoom.jpg",
			//design name
			"black wall" ,
			//design name html
			"black<br>wall",
			//design image
			"../images/products/black-wall/design.jpg",
			//product name
			"PS4 console",
			//product Image
			"../images/products/black-wall/ps4-console/console.png",
			//price dollars
			"20",
			//price cents
			"99",
			//short description
			"Another Brick Wall inspired design<br> from industry expert Robert W. Chambers,<br> Identify yourself as the best in Pop Culture",
			//long description
			"Another Brick Wall inspired design<br> from industry expert Robert W. Chambers,<br> Identify yourself as the best in Pop Culture",
			//author
			"Robert W. Chambers",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off<br>-Residue will be non-existent <br>on your PS4 Console<br>-DIMENSIONS: 12.00 x 0.01 x 29.00",
			//url
			"single-product-page?designName=black-wall&productName=ps4-console"
		);
		$black_wall['ps4-slim-console'] = new product (
			//four images of size 589x591
			"../images/products/black-wall/ps4-slim-console/560X460/Front.jpg",
			"../images/products/black-wall/ps4-slim-console/560X460/Back.jpg",
			"../images/products/black-wall/ps4-slim-console/560X460/Side.jpg",
			"../images/products/black-wall/ps4-slim-console/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/black-wall/ps4-slim-console/187X140/Front.jpg",
			"../images/products/black-wall/ps4-slim-console/187X140/Back.jpg",
			"../images/products/black-wall/ps4-slim-console/187X140/Side.jpg",
			"../images/products/black-wall/ps4-slim-console/187X140/Zoom.jpg",
			//design name
			"black wall" ,
			//design name html
			"black<br>wall",
			//design image
			"../images/products/black-wall/design.jpg",
			//product name
			"PS4 Slim Console",
			//product Image
			"../images/products/black-wall/ps4-slim-console/console.png",
			//price dollars
			"20",
			//price cents
			"99",
			//short description
			"Another Brick Wall inspired design<br> from industry expert Robert W. Chambers,<br> Identify yourself as the best in Pop Culture",
			//long description
			"Another Brick Wall inspired design<br> from industry expert Robert W. Chambers,<br> Identify yourself as the best in Pop Culture",
			//author
			"Robert W. Chambers",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off<br>-Residue will be non-existent<br>on your PS4 Slim Console<br>-DIMENSIONS: 13.00 x 0.01 x 25.00",
			//url
			"single-product-page?designName=black-wall&productName=ps4-slim-console"
		);
		$black_wall['ps4-pro-console'] = new product (
			//four images of size 589x591
			"../images/products/black-wall/ps4-pro-console/560X460/Front.jpg",
			"../images/products/black-wall/ps4-pro-console/560X460/Back.jpg",
			"../images/products/black-wall/ps4-pro-console/560X460/Side.jpg",
			"../images/products/black-wall/ps4-pro-console/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/black-wall/ps4-pro-console/187X140/Front.jpg",
			"../images/products/black-wall/ps4-pro-console/187X140/Back.jpg",
			"../images/products/black-wall/ps4-pro-console/187X140/Side.jpg",
			"../images/products/black-wall/ps4-pro-console/187X140/Zoom.jpg",
			//design name
			"black wall" ,
			//design name html
			"black<br>wall",
			//design image
			"../images/products/black-wall/design.jpg",
			//product name
			"PS4 Pro Console",
			//product Image
			"../images/products/black-wall/ps4-pro-console/console.png",
			//price dollars
			"20",
			//price cents
			"99",
			//short description
			"Another Brick Wall inspired design<br> from industry expert Robert W. Chambers,<br> Identify yourself as the best in Pop Culture",
			//long description
			"Another Brick Wall inspired design<br> from industry expert Robert W. Chambers,<br> Identify yourself as the best in Pop Culture",
			//author
			"Robert W. Chambers",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off<br>-Residue will be non-existent<br>on your PS4 Pro Console<br>-DIMENSIONS: 13.00 x 0.01 x 25.00",
			//url
			"single-product-page?designName=black-wall&productName=ps4-pro-console"
		);
		$black_wall['ps4-bundle'] = new product (
			//four images of size 589x591
			"../images/products/black-wall/ps4-bundle/560X460/Front.jpg",
			"../images/products/black-wall/ps4-bundle/560X460/Back.jpg",
			"../images/products/black-wall/ps4-bundle/560X460/Side.jpg",
			"../images/products/black-wall/ps4-bundle/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/black-wall/ps4-bundle/187X140/Front.jpg",
			"../images/products/black-wall/ps4-bundle/187X140/Back.jpg",
			"../images/products/black-wall/ps4-bundle/187X140/Side.jpg",
			"../images/products/black-wall/ps4-bundle/187X140/Zoom.jpg",
			//design name
			"black wall" ,
			//design name html
			"black<br>wall",
			//design image
			"../images/products/black-wall/design.jpg",
			//product name
			"PS4 bundle",
			//product Image
			"../images/products/black-wall/ps4-bundle/bundle.png",
			//price dollars
			"23",
			//price cents
			"99",
			//short description
			"Another Brick Wall inspired design<br> from industry expert Robert W. Chambers,<br> Identify yourself as the best in Pop Culture",
			//long description
			"Another Brick Wall inspired design<br> from industry expert Robert W. Chambers,<br> Identify yourself as the best in Pop Culture",
			//author
			"Robert W. Chambers",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off<br>-Residue will be non-existent <br>on your PS4 bundle<br>-DIMENSIONS:12.00 x 0.01 x 29.00<br>Controller:6.24 x 2.00 x 3.90",
			//url
			"single-product-page?designName=black-wall&productName=ps4-bundle"
		);
		$black_wall['ps4-slim-bundle'] = new product (
			//four images of size 589x591
			"../images/products/black-wall/ps4-slim-bundle/560X460/Front.jpg",
			"../images/products/black-wall/ps4-slim-bundle/560X460/Back.jpg",
			"../images/products/black-wall/ps4-slim-bundle/560X460/Side.jpg",
			"../images/products/black-wall/ps4-slim-bundle/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/black-wall/ps4-slim-bundle/187X140/Front.jpg",
			"../images/products/black-wall/ps4-slim-bundle/187X140/Back.jpg",
			"../images/products/black-wall/ps4-slim-bundle/187X140/Side.jpg",
			"../images/products/black-wall/ps4-slim-bundle/187X140/Zoom.jpg",
			//design name
			"black wall" ,
			//design name html
			"black<br>wall",
			//design image
			"../images/products/black-wall/design.jpg",
			//product name
			"PS4 Slim bundle",
			//product Image
			"../images/products/black-wall/ps4-slim-bundle/bundle.png",
			//price dollars
			"23",
			//price cents
			"99",
			//short description
			"Another Brick Wall inspired design<br> from industry expert Robert W. Chambers,<br> Identify yourself as the best in Pop Culture",
			//long description
			"Another Brick Wall inspired design<br> from industry expert Robert W. Chambers,<br> Identify yourself as the best in Pop Culture",
			//author
			"Robert W. Chambers",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off<br>-Residue will be non-existent<br>on your PS4 Slim bundle<br>-DIMENSIONS: 13.00 x 0.01 x 25.00<br>Controller:6.24 x 2.00 x 3.90",
			//url
			"single-product-page?designName=black-wall&productName=ps4-slim-bundle"
		);
		$black_wall['ps4-pro-bundle'] = new product (
			//four images of size 589x591
			"../images/products/black-wall/ps4-pro-bundle/560X460/Front.jpg",
			"../images/products/black-wall/ps4-pro-bundle/560X460/Back.jpg",
			"../images/products/black-wall/ps4-pro-bundle/560X460/Side.jpg", 
			"../images/products/black-wall/ps4-pro-bundle/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/black-wall/ps4-pro-bundle/187X140/Front.jpg",
			"../images/products/black-wall/ps4-pro-bundle/187X140/Back.jpg",
			"../images/products/black-wall/ps4-pro-bundle/187X140/Side.jpg",
			"../images/products/black-wall/ps4-pro-bundle/187X140/Zoom.jpg",
			//design name
			"black wall" ,
			//design name html
			"black<br>wall",
			//design image
			"../images/products/black-wall/design.jpg",
			//product name
			"PS4 Pro bundle",
			//product Image
			"../images/products/black-wall/ps4-pro-bundle/bundle.png",
			//price dollars
			"23",
			//price cents
			"99",
			//short description
			"Another Brick Wall inspired design<br> from industry expert Robert W. Chambers,<br> Identify yourself as the best in Pop Culture",
			//long description
			"Another Brick Wall inspired design<br> from industry expert Robert W. Chambers,<br> Identify yourself as the best in Pop Culture",
			//author
			"Robert W. Chambers",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off<br>-Residue will be non-existent<br>on your PS4 Pro bundle<br>-DIMENSIONS: 13.00 x 0.01 x 25.00<br>Controller:6.24 x 2.00 x 3.90",
			//url
			"single-product-page?designName=black-wall&productName=ps4-pro-bundle"
		);
		// controller
		$blue_kaleidoscope['ps4-controller'] = new product (
			//four images of size 589x591
			"../images/products/blue-kaleidoscope/ps4-controller/560X460/Front.jpg",
			"../images/products/blue-kaleidoscope/ps4-controller/560X460/Back.jpg",
			"../images/products/blue-kaleidoscope/ps4-controller/560X460/Side.jpg",
			"../images/products/blue-kaleidoscope/ps4-controller/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/blue-kaleidoscope/ps4-controller/187X140/Front.jpg",
			"../images/products/blue-kaleidoscope/ps4-controller/187X140/Back.jpg",
			"../images/products/blue-kaleidoscope/ps4-controller/187X140/Side.jpg",
			"../images/products/blue-kaleidoscope/ps4-controller/187X140/Zoom.jpg",
			//design name
			"blue kaleidoscope" ,
			//design name html
			"blue<br>kaleidoscope",
			//design image
			"../images/products/blue-kaleidoscope/design.jpg",
			//product name
			"PS4 controller",
			//product Image
			"../images/products/blue-kaleidoscope/ps4-controller/controller.png",
			//price dollars
			"15",
			//price cents
			"99",
			//short description
			"Blue Kaliedoscope inspired design<br> from industry expert Tsujita Masujiro, <br>Identify Tsujita Masujirorself as the best in Pop Culturee",
			//long description
			"Blue Kaliedoscope inspired design<br> from industry expert Tsujita Masujiro, <br>Identify Tsujita Masujirorself as the best in Pop Culturee",
			//author
			"Tsujita Masujiro",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off<br>-Residue will be non-existent on<br> your PS4 Controller<br>-DIMENSIONS: 6.24 x 2.00 x 3.90",
			//url
			"single-product-page?designName=blue-kaleidoscope&productName=ps4-controller"
		);
		$blue_kaleidoscope['ps4-console'] = new product (
			//four images of size 589x591
			"../images/products/blue-kaleidoscope/ps4-console/560X460/Front.jpg",
			"../images/products/blue-kaleidoscope/ps4-console/560X460/Back.jpg",
			"../images/products/blue-kaleidoscope/ps4-console/560X460/Side.jpg",
			"../images/products/blue-kaleidoscope/ps4-console/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/blue-kaleidoscope/ps4-console/187X140/Front.jpg",
			"../images/products/blue-kaleidoscope/ps4-console/187X140/Back.jpg",
			"../images/products/blue-kaleidoscope/ps4-console/187X140/Side.jpg",
			"../images/products/blue-kaleidoscope/ps4-console/187X140/Zoom.jpg",
			//design name
			"blue kaleidoscope" ,
			//design name html
			"blue<br>kaleidoscope",
			//design image
			"../images/products/blue-kaleidoscope/design.jpg",
			//product name
			"PS4 Console",
			//product Image
			"../images/products/blue-kaleidoscope/ps4-console/console.png",
			//price dollars
			"20",
			//price cents
			"99",
			//short description
			"Blue Kaliedoscope inspired design<br> from industry expert Tsujita Masujiro, <br>Identify Tsujita Masujirorself as the best in Pop Culturee",
			//long description
			"Blue Kaliedoscope inspired design<br> from industry expert Tsujita Masujiro, <br>Identify Tsujita Masujirorself as the best in Pop Culturee",
			//author
			"Tsujita Masujiro",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off<br>-Residue will be non-existent <br>on your PS4 Console<br>-DIMENSIONS: 12.00 x 0.01 x 29.00",
			//url
			"single-product-page?designName=blue-kaleidoscope&productName=ps4-console"
		);
		$blue_kaleidoscope['ps4-slim-console'] = new product (
			//four images of size 589x591
			"../images/products/blue-kaleidoscope/ps4-slim-console/560X460/Front.jpg",
			"../images/products/blue-kaleidoscope/ps4-slim-console/560X460/Back.jpg",
			"../images/products/blue-kaleidoscope/ps4-slim-console/560X460/Side.jpg",
			"../images/products/blue-kaleidoscope/ps4-slim-console/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/blue-kaleidoscope/ps4-slim-console/187X140/Front.jpg",
			"../images/products/blue-kaleidoscope/ps4-slim-console/187X140/Back.jpg",
			"../images/products/blue-kaleidoscope/ps4-slim-console/187X140/Side.jpg",
			"../images/products/blue-kaleidoscope/ps4-slim-console/187X140/Zoom.jpg",
			//design name
			"blue kaleidoscope" ,
			//design name html
			"blue<br>kaleidoscope",
			//design image
			"../images/products/blue-kaleidoscope/design.jpg",
			//product name
			"PS4 Slim Console",
			//product Image
			"../images/products/blue-kaleidoscope/ps4-slim-console/console.png",
			//price dollars
			"20",
			//price cents
			"99",
			//short description
			"Blue Kaliedoscope inspired design<br> from industry expert Tsujita Masujiro, <br>Identify Tsujita Masujirorself as the best in Pop Culturee",
			//long description
			"Blue Kaliedoscope inspired design<br> from industry expert Tsujita Masujiro, <br>Identify Tsujita Masujirorself as the best in Pop Culturee",
			//author
			"Tsujita Masujiro",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off<br>-Residue will be non-existent<br>on your PS4 Slim Console<br>-DIMENSIONS: 13.00 x 0.01 x 25.00",
			//url
			"single-product-page?designName=blue-kaleidoscope&productName=ps4-slim-console"
		);
		$blue_kaleidoscope['ps4-pro-console'] = new product (
			//four images of size 589x591
			"../images/products/blue-kaleidoscope/ps4-pro-console/560X460/Front.jpg",
			"../images/products/blue-kaleidoscope/ps4-pro-console/560X460/Back.jpg",
			"../images/products/blue-kaleidoscope/ps4-pro-console/560X460/Side.jpg",
			"../images/products/blue-kaleidoscope/ps4-pro-console/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/blue-kaleidoscope/ps4-pro-console/187X140/Front.jpg",
			"../images/products/blue-kaleidoscope/ps4-pro-console/187X140/Back.jpg",
			"../images/products/blue-kaleidoscope/ps4-pro-console/187X140/Side.jpg",
			"../images/products/blue-kaleidoscope/ps4-pro-console/187X140/Zoom.jpg",
			//design name
			"blue kaleidoscope" ,
			//design name html
			"blue<br>kaleidoscope",
			//design image
			"../images/products/blue-kaleidoscope/design.jpg",
			//product name
			"PS4 Pro Console",
			//product Image
			"../images/products/blue-kaleidoscope/ps4-pro-console/console.png",
			//price dollars
			"20",
			//price cents
			"99",
			//short description
			"Blue Kaliedoscope inspired design<br> from industry expert Tsujita Masujiro, <br>Identify Tsujita Masujirorself as the best in Pop Culturee",
			//long description
			"Blue Kaliedoscope inspired design<br> from industry expert Tsujita Masujiro, <br>Identify Tsujita Masujirorself as the best in Pop Culturee",
			//author
			"Tsujita Masujiro",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off<br>-Residue will be non-existent<br>on your PS4 Pro Console<br>-DIMENSIONS: 13.00 x 0.01 x 25.00",
			//url
			"single-product-page?designName=blue-kaleidoscope&productName=ps4-pro-console"
		);
		$blue_kaleidoscope['ps4-bundle'] = new product (
			//four images of size 589x591
			"../images/products/blue-kaleidoscope/ps4-bundle/560X460/Front.jpg",
			"../images/products/blue-kaleidoscope/ps4-bundle/560X460/Back.jpg",
			"../images/products/blue-kaleidoscope/ps4-bundle/560X460/Side.jpg",
			"../images/products/blue-kaleidoscope/ps4-bundle/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/blue-kaleidoscope/ps4-bundle/187X140/Front.jpg",
			"../images/products/blue-kaleidoscope/ps4-bundle/187X140/Back.jpg",
			"../images/products/blue-kaleidoscope/ps4-bundle/187X140/Side.jpg",
			"../images/products/blue-kaleidoscope/ps4-bundle/187X140/Zoom.jpg",
			//design name
			"blue kaleidoscope" ,
			//design name html
			"blue<br>kaleidoscope",
			//design image
			"../images/products/blue-kaleidoscope/design.jpg",
			//product name
			"PS4 bundle",
			//product Image
			"../images/products/blue-kaleidoscope/ps4-bundle/bundle.png",
			//price dollars
			"23",
			//price cents
			"99",
			//short description
			"Blue Kaliedoscope inspired design<br> from industry expert Tsujita Masujiro, <br>Identify Tsujita Masujirorself as the best in Pop Culturee",
			//long description
			"Blue Kaliedoscope inspired design<br> from industry expert Tsujita Masujiro, <br>Identify Tsujita Masujirorself as the best in Pop Culturee",
			//author
			"Tsujita Masujiro",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off<br>-Residue will be non-existent <br>on your PS4 bundle<br>-DIMENSIONS: 12.00 x 0.01 x 29.00<br>Controller:  6.24 x 2.00 x 3.90",
			//url
			"single-product-page?designName=blue-kaleidoscope&productName=ps4-bundle"
		);
		$blue_kaleidoscope['ps4-slim-bundle'] = new product (
			//four images of size 589x591
			"../images/products/blue-kaleidoscope/ps4-slim-bundle/560X460/Front.jpg",
			"../images/products/blue-kaleidoscope/ps4-slim-bundle/560X460/Back.jpg",
			"../images/products/blue-kaleidoscope/ps4-slim-bundle/560X460/Side.jpg",
			"../images/products/blue-kaleidoscope/ps4-slim-bundle/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/blue-kaleidoscope/ps4-slim-bundle/187X140/Front.jpg",
			"../images/products/blue-kaleidoscope/ps4-slim-bundle/187X140/Back.jpg",
			"../images/products/blue-kaleidoscope/ps4-slim-bundle/187X140/Side.jpg",
			"../images/products/blue-kaleidoscope/ps4-slim-bundle/187X140/Zoom.jpg",
			//design name
			"blue kaleidoscope" ,
			//design name html
			"blue<br>kaleidoscope",
			//design image
			"../images/products/blue-kaleidoscope/design.jpg",
			//product name
			"PS4 Slim bundle",
			//product Image
			"../images/products/blue-kaleidoscope/ps4-slim-bundle/bundle.png",
			//price dollars
			"23",
			//price cents
			"99",
			//short description
			"Blue Kaliedoscope inspired design<br> from industry expert Tsujita Masujiro, <br>Identify Tsujita Masujirorself as the best in Pop Culturee",
			//long description
			"Blue Kaliedoscope inspired design<br> from industry expert Tsujita Masujiro, <br>Identify Tsujita Masujirorself as the best in Pop Culturee",
			//author
			"Tsujita Masujiro",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off<br>-Residue will be non-existent<br>on your PS4 Slim bundle<br>-DIMENSIONS: 13.00 x 0.01 x 25.00<br>Controller:  6.24 x 2.00 x 3.90",
			//url
			"single-product-page?designName=blue-kaleidoscope&productName=ps4-slim-bundle"
		);
		$blue_kaleidoscope['ps4-pro-bundle'] = new product (
			//four images of size 589x591
			"../images/products/blue-kaleidoscope/ps4-pro-bundle/560X460/Front.jpg",
			"../images/products/blue-kaleidoscope/ps4-pro-bundle/560X460/Back.jpg",
			"../images/products/blue-kaleidoscope/ps4-pro-bundle/560X460/Side.jpg",
			"../images/products/blue-kaleidoscope/ps4-pro-bundle/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/blue-kaleidoscope/ps4-pro-bundle/187X140/Front.jpg",
			"../images/products/blue-kaleidoscope/ps4-pro-bundle/187X140/Back.jpg",
			"../images/products/blue-kaleidoscope/ps4-pro-bundle/187X140/Side.jpg",
			"../images/products/blue-kaleidoscope/ps4-pro-bundle/187X140/Zoom.jpg",
			//design name
			"blue kaleidoscope" ,
			//design name html
			"blue<br>kaleidoscope",
			//design image
			"../images/products/blue-kaleidoscope/design.jpg",
			//product name
			"PS4 Pro bundle",
			//product Image
			"../images/products/blue-kaleidoscope/ps4-pro-bundle/bundle.png",
			//price dollars
			"23",
			//price cents
			"99",
			//short description
			"Blue Kaliedoscope inspired design<br> from industry expert Tsujita Masujiro, <br>Identify Tsujita Masujirorself as the best in Pop Culturee",
			//long description
			"Blue Kaliedoscope inspired design<br> from industry expert Tsujita Masujiro, <br>Identify Tsujita Masujirorself as the best in Pop Culturee",
			//author
			"Tsujita Masujiro",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off<br>-Residue will be non-existent<br>on your PS4 Pro bundle<br>-DIMENSIONS: 13.00 x 0.01 x 25.00<br>Controller:  6.24 x 2.00 x 3.90",
			//url
			"single-product-page?designName=blue-kaleidoscope&productName=ps4-pro-bundle"
		);
		// controller
		$call_of_duty['ps4-controller'] = new product (
			//four images of size 589x591
			"../images/products/call-of-duty/ps4-controller/560X460/Front.jpg",
			"../images/products/call-of-duty/ps4-controller/560X460/Back.jpg",
			"../images/products/call-of-duty/ps4-controller/560X460/Side.jpg",
			"../images/products/call-of-duty/ps4-controller/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/call-of-duty/ps4-controller/187X140/Front.jpg",
			"../images/products/call-of-duty/ps4-controller/187X140/Back.jpg",
			"../images/products/call-of-duty/ps4-controller/187X140/Side.jpg",
			"../images/products/call-of-duty/ps4-controller/187X140/Zoom.jpg",
			//design name
			"call of duty" ,
			//design name html
			"call<br>of duty",
			//design image
			"../images/products/call-of-duty/design.jpg",
			//product name
			"PS4 controller",
			//product Image
			"../images/products/call-of-duty/ps4-controller/controller.png",
			//price dollars
			"15",
			//price cents
			"99",
			//short description
			"Call Of Duty inspired design from<br> industry expert Richard Eveland,<br> Identify yourself as the best in gaming,<br> OfficalMerch from Activision",
			//long description
			"Call Of Duty inspired design from<br> industry expert Richard Eveland,<br> Identify yourself as the best in gaming,<br> OfficalMerch from Activision",
			//author
			"Richard Eveland",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>PS4 console<br>-DIMENSIONS: 6.00 x 4.00 x 1.70",
			//url
			"single-product-page?designName=call-of-duty&productName=ps4-controller",
			//sku
			"CUS/CONTR/TOP/20210002"
		);
		$call_of_duty['ps4-console'] = new product (
			//four images of size 589x591
			"../images/products/call-of-duty/ps4-console/560X460/Front.jpg",
			"../images/products/call-of-duty/ps4-console/560X460/Back.jpg",
			"../images/products/call-of-duty/ps4-console/560X460/Side.jpg",
			"../images/products/call-of-duty/ps4-console/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/call-of-duty/ps4-console/187X140/Front.jpg",
			"../images/products/call-of-duty/ps4-console/187X140/Back.jpg",
			"../images/products/call-of-duty/ps4-console/187X140/Side.jpg",
			"../images/products/call-of-duty/ps4-console/187X140/Zoom.jpg",
			//design name
			"call of duty" ,
			//design name html
			"call<br>of duty",
			//design image
			"../images/products/call-of-duty/design.jpg",
			//product name
			"PS4 console",
			//product Image
			"../images/products/call-of-duty/ps4-console/console.png",
			//price dollars
			"20",
			//price cents
			"99",
			//short description
			"Call Of Duty inspired design from<br> industry expert Richard Eveland,<br> Identify yourself as the best in gaming,<br> OfficalMerch from Activision",
			//long description
			"Call Of Duty inspired design from<br> industry expert Richard Eveland,<br> Identify yourself as the best in gaming,<br> OfficalMerch from Activision",
			//author
			"Richard Eveland",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off<br>-Residue will be non-existent <br>on your PS4 Console<br>-DIMENSIONS: 12.00 x 0.01 x 29.00",
			//url
			"single-product-page?designName=call-of-duty&productName=ps4-console",
			//sku
			"CUS/CONTR/TOP/20210002"
		);
		$call_of_duty['ps4-slim-console'] = new product (
			//four images of size 589x591
			"../images/products/call-of-duty/ps4-slim-console/560X460/Front.jpg",
			"../images/products/call-of-duty/ps4-slim-console/560X460/Back.jpg",
			"../images/products/call-of-duty/ps4-slim-console/560X460/Side.jpg",
			"../images/products/call-of-duty/ps4-slim-console/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/call-of-duty/ps4-slim-console/187X140/Front.jpg",
			"../images/products/call-of-duty/ps4-slim-console/187X140/Back.jpg",
			"../images/products/call-of-duty/ps4-slim-console/187X140/Side.jpg",
			"../images/products/call-of-duty/ps4-slim-console/187X140/Zoom.jpg",
			//design name
			"call of duty" ,
			//design name html
			"call<br>of duty",
			//design image
			"../images/products/call-of-duty/design.jpg",
			//product name
			"PS4 Slim Console",
			//product Image
			"../images/products/call-of-duty/ps4-slim-console/console.png",
			//price dollars
			"20",
			//price cents
			"99",
			//short description
			"Call Of Duty inspired design from<br> industry expert Richard Eveland,<br> Identify yourself as the best in gaming,<br> OfficalMerch from Activision",
			//long description
			"Call Of Duty inspired design from<br> industry expert Richard Eveland,<br> Identify yourself as the best in gaming,<br> OfficalMerch from Activision",
			//author
			"Richard Eveland",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off<br>-Residue will be non-existent<br>on your PS4 Slim Console<br>-DIMENSIONS: 13.00 x 0.01 x 25.00",
			//url
			"single-product-page?designName=call-of-duty&productName=ps4-slim-console",
			//sku
			"CUS/CONTR/TOP/20210002"
		);
		$call_of_duty['ps4-pro-console'] = new product (
			//four images of size 589x591
			"../images/products/call-of-duty/ps4-pro-console/560X460/Front.jpg",
			"../images/products/call-of-duty/ps4-pro-console/560X460/Back.jpg",
			"../images/products/call-of-duty/ps4-pro-console/560X460/Side.jpg",
			"../images/products/call-of-duty/ps4-pro-console/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/call-of-duty/ps4-pro-console/187X140/Front.jpg",
			"../images/products/call-of-duty/ps4-pro-console/187X140/Back.jpg",
			"../images/products/call-of-duty/ps4-pro-console/187X140/Side.jpg",
			"../images/products/call-of-duty/ps4-pro-console/187X140/Zoom.jpg",
			//design name
			"call of duty" ,
			//design name html
			"call<br>of duty",
			//design image
			"../images/products/call-of-duty/design.jpg",
			//product name
			"PS4 Pro Console",
			//product Image
			"../images/products/call-of-duty/ps4-pro-console/console.png",
			//price dollars
			"20",
			//price cents
			"99",
			//short description
			"Call Of Duty inspired design from<br> industry expert Richard Eveland,<br> Identify yourself as the best in gaming,<br> OfficalMerch from Activision",
			//long description
			"Call Of Duty inspired design from<br> industry expert Richard Eveland,<br> Identify yourself as the best in gaming,<br> OfficalMerch from Activision",
			//author
			"Richard Eveland",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off<br>-Residue will be non-existent<br>on your PS4 Pro Console<br>-DIMENSIONS: 13.00 x 0.01 x 25.00",
			//url
			"single-product-page?designName=call-of-duty&productName=ps4-pro-console",
			//sku
			"CUS/CONTR/TOP/20210002"
		);
		$call_of_duty['ps4-bundle'] = new product (
			//four images of size 589x591
			"../images/products/call-of-duty/ps4-bundle/560X460/Front.jpg",
			"../images/products/call-of-duty/ps4-bundle/560X460/Back.jpg",
			"../images/products/call-of-duty/ps4-bundle/560X460/Side.jpg",
			"../images/products/call-of-duty/ps4-bundle/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/call-of-duty/ps4-bundle/187X140/Front.jpg",
			"../images/products/call-of-duty/ps4-bundle/187X140/Back.jpg",
			"../images/products/call-of-duty/ps4-bundle/187X140/Side.jpg",
			"../images/products/call-of-duty/ps4-bundle/187X140/Zoom.jpg",
			//design name
			"call of duty" ,
			//design name html
			"call<br>of duty",
			//design image
			"../images/products/call-of-duty/design.jpg",
			//product name
			"PS4 bundle",
			//product Image
			"../images/products/call-of-duty/ps4-bundle/bundle.png",
			//price dollars
			"23",
			//price cents
			"99",
			//short description
			"Call Of Duty inspired design from<br> industry expert Richard Eveland,<br> Identify yourself as the best in gaming,<br> OfficalMerch from Activision",
			//long description
			"Call Of Duty inspired design from<br> industry expert Richard Eveland,<br> Identify yourself as the best in gaming,<br> OfficalMerch from Activision",
			//author
			"Richard Eveland",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off<br>-Residue will be non-existent <br>on your PS4 bundle<br>-DIMENSIONS: 12.00 x 0.01 x 29.00<br>Controller:  6.24 x 2.00 x 3.90",
			//url
			"single-product-page?designName=call-of-duty&productName=ps4-bundle",
			//sku
			"CUS/CONTR/TOP/20210002"
		);
		$call_of_duty['ps4-slim-bundle'] = new product (
			//four images of size 589x591
			"../images/products/call-of-duty/ps4-slim-bundle/560X460/Front.jpg",
			"../images/products/call-of-duty/ps4-slim-bundle/560X460/Back.jpg",
			"../images/products/call-of-duty/ps4-slim-bundle/560X460/Side.jpg",
			"../images/products/call-of-duty/ps4-slim-bundle/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/call-of-duty/ps4-slim-bundle/187X140/Front.jpg",
			"../images/products/call-of-duty/ps4-slim-bundle/187X140/Back.jpg",
			"../images/products/call-of-duty/ps4-slim-bundle/187X140/Side.jpg",
			"../images/products/call-of-duty/ps4-slim-bundle/187X140/Zoom.jpg",
			//design name
			"call of duty" ,
			//design name html
			"call<br>of duty",
			//design image
			"../images/products/call-of-duty/design.jpg",
			//product name
			"PS4 Slim bundle",
			//product Image
			"../images/products/call-of-duty/ps4-slim-bundle/bundle.png",
			//price dollars
			"23",
			//price cents
			"99",
			//short description
			"Call Of Duty inspired design from<br> industry expert Richard Eveland,<br> Identify yourself as the best in gaming,<br> OfficalMerch from Activision",
			//long description
			"Call Of Duty inspired design from<br> industry expert Richard Eveland,<br> Identify yourself as the best in gaming,<br> OfficalMerch from Activision",
			//author
			"Richard Eveland",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off<br>-Residue will be non-existent<br>on your PS4 Slim bundle<br>-DIMENSIONS: 13.00 x 0.01 x 25.00<br>Controller:  6.24 x 2.00 x 3.90",
			//url
			"single-product-page?designName=call-of-duty&productName=ps4-slim-bundle",
			//sku
			"CUS/CONTR/TOP/20210002"
		);
		$call_of_duty['ps4-pro-bundle'] = new product (
			//four images of size 589x591
			"../images/products/call-of-duty/ps4-pro-bundle/560X460/Front.jpg",
			"../images/products/call-of-duty/ps4-pro-bundle/560X460/Back.jpg",
			"../images/products/call-of-duty/ps4-pro-bundle/560X460/Side.jpg",
			"../images/products/call-of-duty/ps4-pro-bundle/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/call-of-duty/ps4-pro-bundle/187X140/Front.jpg",
			"../images/products/call-of-duty/ps4-pro-bundle/187X140/Back.jpg",
			"../images/products/call-of-duty/ps4-pro-bundle/187X140/Side.jpg",
			"../images/products/call-of-duty/ps4-pro-bundle/187X140/Zoom.jpg",
			//design name
			"call of duty" ,
			//design name html
			"call<br>of duty",
			//design image
			"../images/products/call-of-duty/design.jpg",
			//product name
			"PS4 Pro bundle",
			//product Image
			"../images/products/call-of-duty/ps4-pro-bundle/bundle.png",
			//price dollars
			"23",
			//price cents
			"99",
			//short description
			"Call Of Duty inspired design from<br> industry expert Richard Eveland,<br> Identify yourself as the best in gaming,<br> OfficalMerch from Activision",
			//long description
			"Call Of Duty inspired design from<br> industry expert Richard Eveland,<br> Identify yourself as the best in gaming,<br> OfficalMerch from Activision",
			//author
			"Richard Eveland",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off<br>-Residue will be non-existent<br>on your PS4 Pro bundle<br>-DIMENSIONS: 13.00 x 0.01 x 25.00<br>Controller:  6.24 x 2.00 x 3.90",
			//url
			"single-product-page?designName=call-of-duty&productName=ps4-pro-bundle",
			//sku
			"CUS/CONTR/TOP/20210002"
		);
		$doodle_Lines['ps4-controller'] = new product (
			//four images of size 589x591
			"../images/products/doodle-lines/ps4-controller/560X460/Front.jpg",
			"../images/products/doodle-lines/ps4-controller/560X460/Back.jpg",
			"../images/products/doodle-lines/ps4-controller/560X460/Side.jpg",
			"../images/products/doodle-lines/ps4-controller/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/doodle-lines/ps4-controller/187X140/Front.jpg",
			"../images/products/doodle-lines/ps4-controller/187X140/Back.jpg",
			"../images/products/doodle-lines/ps4-controller/187X140/Side.jpg",
			"../images/products/doodle-lines/ps4-controller/187X140/Zoom.jpg",
			//design name
			"doodle Lines" ,
			//design name html
			"doodle<br>lines",
			//design image
			"../images/products/doodle-lines/design.jpg",
			//product name
			"PS4 controller",
			//product Image
			"../images/products/doodle-lines/ps4-controller/controller.png",
			//price dollars
			"15",
			//price cents
			"99",
			//short description
			"Doodle Lines inspired design from<br> industry expert Robert W. Chambers,<br> Identify yourself as the<br> best in Pop Culture",
			//long description
			"Doodle Lines inspired design from<br> industry expert Robert W. Chambers,<br> Identify yourself as the<br> best in Pop Culture",
			//author
			"Robert W. Chambers",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off<br>-Residue will be non-existent on<br> your PS4 Controller<br>-DIMENSIONS: 6.24 x 2.00 x 3.90",
			//url
			"single-product-page?designName=doodle-lines&productName=ps4-controller"
		);
		$doodle_Lines['ps4-console'] = new product (
			//four images of size 589x591
			"../images/products/doodle-lines/ps4-console/560X460/Front.jpg",
			"../images/products/doodle-lines/ps4-console/560X460/Back.jpg",
			"../images/products/doodle-lines/ps4-console/560X460/Side.jpg",
			"../images/products/doodle-lines/ps4-console/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/doodle-lines/ps4-console/187X140/Front.jpg",
			"../images/products/doodle-lines/ps4-console/187X140/Back.jpg",
			"../images/products/doodle-lines/ps4-console/187X140/Side.jpg",
			"../images/products/doodle-lines/ps4-console/187X140/Zoom.jpg",
			//design name
			"doodle Lines" ,
			//design name html
			"doodle<br>lines",
			//design image
			"../images/products/doodle-lines/design.jpg",
			//product name
			"PS4 console",
			//product Image
			"../images/products/doodle-lines/ps4-console/console.png",
			//price dollars
			"20",
			//price cents
			"99",
			//short description
			"Doodle Lines inspired design from<br> industry expert Robert W. Chambers,<br> Identify yourself as the<br> best in Pop Culture",
			//long description
			"Doodle Lines inspired design from<br> industry expert Robert W. Chambers,<br> Identify yourself as the<br> best in Pop Culture",
			//author
			"Tsujita Masujiro",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off<br>-Residue will be non-existent <br>on your PS4 Console<br>-DIMENSIONS: 12.00 x 0.01 x 29.00",
			//url
			"single-product-page?designName=doodle-lines&productName=ps4-console"
		);
		$doodle_Lines['ps4-slim-console'] = new product (
			//four images of size 589x591
			"../images/products/doodle-lines/ps4-slim-console/560X460/Front.jpg",
			"../images/products/doodle-lines/ps4-slim-console/560X460/Back.jpg",
			"../images/products/doodle-lines/ps4-slim-console/560X460/Side.jpg",
			"../images/products/doodle-lines/ps4-slim-console/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/doodle-lines/ps4-slim-console/187X140/Front.jpg",
			"../images/products/doodle-lines/ps4-slim-console/187X140/Back.jpg",
			"../images/products/doodle-lines/ps4-slim-console/187X140/Side.jpg",
			"../images/products/doodle-lines/ps4-slim-console/187X140/Zoom.jpg",
			//design name
			"doodle Lines" ,
			//design name html
			"doodle<br>lines",
			//design image
			"../images/products/doodle-lines/design.jpg",
			//product name
			"PS4 Slim Console",
			//product Image
			"../images/products/doodle-lines/ps4-slim-console/console.png",
			//price dollars
			"20",
			//price cents
			"99",
			//short description
			"Doodle Lines inspired design from<br> industry expert Robert W. Chambers,<br> Identify yourself as the<br> best in Pop Culture",
			//long description
			"Doodle Lines inspired design from<br> industry expert Robert W. Chambers,<br> Identify yourself as the<br> best in Pop Culture",
			//author
			"Robert W. Chambers",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off<br>-Residue will be non-existent<br>on your PS4 Slim Console<br>-DIMENSIONS: 13.00 x 0.01 x 25.00",
			//url
			"single-product-page?designName=doodle-lines&productName=ps4-slim-console"
		);
		$doodle_Lines['ps4-pro-console'] = new product (
			//four images of size 589x591
			"../images/products/doodle-lines/ps4-pro-console/560X460/Front.jpg",
			"../images/products/doodle-lines/ps4-pro-console/560X460/Back.jpg",
			"../images/products/doodle-lines/ps4-pro-console/560X460/Side.jpg",
			"../images/products/doodle-lines/ps4-pro-console/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/doodle-lines/ps4-pro-console/187X140/Front.jpg",
			"../images/products/doodle-lines/ps4-pro-console/187X140/Back.jpg",
			"../images/products/doodle-lines/ps4-pro-console/187X140/Side.jpg",
			"../images/products/doodle-lines/ps4-pro-console/187X140/Zoom.jpg",
			//design name
			"doodle Lines" ,
			//design name html
			"doodle<br>lines",
			//design image
			"../images/products/doodle-lines/design.jpg",
			//product name
			"PS4 Pro Console",
			//product Image
			"../images/products/doodle-lines/ps4-pro-console/console.png",
			//price dollars
			"20",
			//price cents
			"99",
			//short description
			"Doodle Lines inspired design from<br> industry expert Robert W. Chambers,<br> Identify yourself as the<br> best in Pop Culture",
			//long description
			"Doodle Lines inspired design from<br> industry expert Robert W. Chambers,<br> Identify yourself as the<br> best in Pop Culture",
			//author
			"Tsujita Masujiro",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off<br>-Residue will be non-existent<br>on your PS4 Pro Console<br>-DIMENSIONS: 13.00 x 0.01 x 25.00",
			//url
			"single-product-page?designName=doodle-lines&productName=ps4-pro-console"
		);
		$doodle_Lines['ps4-bundle'] = new product (
			//four images of size 589x591
			"../images/products/doodle-lines/ps4-bundle/560X460/Front.jpg",
			"../images/products/doodle-lines/ps4-bundle/560X460/Back.jpg",
			"../images/products/doodle-lines/ps4-bundle/560X460/Side.jpg",
			"../images/products/doodle-lines/ps4-bundle/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/doodle-lines/ps4-bundle/187X140/Front.jpg",
			"../images/products/doodle-lines/ps4-bundle/187X140/Back.jpg",
			"../images/products/doodle-lines/ps4-bundle/187X140/Side.jpg",
			"../images/products/doodle-lines/ps4-bundle/187X140/Zoom.jpg",
			//design name
			"doodle Lines" ,
			//design name html
			"doodle<br>lines",
			//design image
			"../images/products/doodle-lines/design.jpg",
			//product name
			"PS4 bundle",
			//product Image
			"../images/products/doodle-lines/ps4-bundle/bundle.png",
			//price dollars
			"23",
			//price cents
			"99",
			//short description
			"Doodle Lines inspired design from<br> industry expert Robert W. Chambers,<br> Identify yourself as the<br> best in Pop Culture",
			//long description
			"Doodle Lines inspired design from<br> industry expert Robert W. Chambers,<br> Identify yourself as the<br> best in Pop Culture",
			//author
			"Tsujita Masujiro",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off<br>-Residue will be non-existent <br>on your PS4 bundle<br>-DIMENSIONS: 12.00 x 0.01 x 29.00<br>Controller:  6.24 x 2.00 x 3.90",
			//url
			"single-product-page?designName=doodle-lines&productName=ps4-bundle"
		);
		$doodle_Lines['ps4-slim-bundle'] = new product (
			//four images of size 589x591
			"../images/products/doodle-lines/ps4-slim-bundle/560X460/Front.jpg",
			"../images/products/doodle-lines/ps4-slim-bundle/560X460/Back.jpg",
			"../images/products/doodle-lines/ps4-slim-bundle/560X460/Side.jpg",
			"../images/products/doodle-lines/ps4-slim-bundle/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/doodle-lines/ps4-slim-bundle/187X140/Front.jpg",
			"../images/products/doodle-lines/ps4-slim-bundle/187X140/Back.jpg",
			"../images/products/doodle-lines/ps4-slim-bundle/187X140/Side.jpg",
			"../images/products/doodle-lines/ps4-slim-bundle/187X140/Zoom.jpg",
			//design name
			"doodle Lines" ,
			//design name html
			"doodle<br>lines",
			//design image
			"../images/products/doodle-lines/design.jpg",
			//product name
			"PS4 Slim bundle",
			//product Image
			"../images/products/doodle-lines/ps4-slim-bundle/bundle.png",
			//price dollars
			"23",
			//price cents
			"99",
			//short description
			"Doodle Lines inspired design from<br> industry expert Robert W. Chambers,<br> Identify yourself as the<br> best in Pop Culture",
			//long description
			"Doodle Lines inspired design from<br> industry expert Robert W. Chambers,<br> Identify yourself as the<br> best in Pop Culture",
			//author
			"Robert W. Chambers",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off<br>-Residue will be non-existent<br>on your PS4 Slim bundle<br>-DIMENSIONS: 13.00 x 0.01 x 25.00<br>Controller:  6.24 x 2.00 x 3.90",
			//url
			"single-product-page?designName=doodle-lines&productName=ps4-slim-bundle"
		);
		$doodle_Lines['ps4-pro-bundle'] = new product (
			//four images of size 589x591
			"../images/products/doodle-lines/ps4-pro-bundle/560X460/Front.jpg",
			"../images/products/doodle-lines/ps4-pro-bundle/560X460/Back.jpg",
			"../images/products/doodle-lines/ps4-pro-bundle/560X460/Side.jpg",
			"../images/products/doodle-lines/ps4-pro-bundle/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/doodle-lines/ps4-pro-bundle/187X140/Front.jpg",
			"../images/products/doodle-lines/ps4-pro-bundle/187X140/Back.jpg",
			"../images/products/doodle-lines/ps4-pro-bundle/187X140/Side.jpg",
			"../images/products/doodle-lines/ps4-pro-bundle/187X140/Zoom.jpg",
			//design name
			"doodle Lines" ,
			//design name html
			"doodle<br>lines",
			//design image
			"../images/products/doodle-lines/design.jpg",
			//product name
			"PS4 Pro bundle",
			//product Image
			"../images/products/doodle-lines/ps4-pro-bundle/bundle.png",
			//price dollars
			"23",
			//price cents
			"99",
			//short description
			"Doodle Lines inspired design from<br> industry expert Robert W. Chambers,<br> Identify yourself as the<br> best in Pop Culture",
			//long description
			"Doodle Lines inspired design from<br> industry expert Robert W. Chambers,<br> Identify yourself as the<br> best in Pop Culture",
			//author
			"Tsujita Masujiro",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off<br>-Residue will be non-existent<br>on your PS4 Pro bundle<br>-DIMENSIONS: 13.00 x 0.01 x 25.00<br>Controller:  6.24 x 2.00 x 3.90",
			//url
			"single-product-page?designName=doodle-lines&productName=ps4-pro-bundle"
		);
		// controller
		$dragon_ball_z['ps4-controller'] = new product (
			//four images of size 589x591
			"../images/products/dragon-ball-z/ps4-controller/560X460/Front.jpg",
			"../images/products/dragon-ball-z/ps4-controller/560X460/Back.jpg",
			"../images/products/dragon-ball-z/ps4-controller/560X460/Side.jpg",
			"../images/products/dragon-ball-z/ps4-controller/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/dragon-ball-z/ps4-controller/187X140/Front.jpg",
			"../images/products/dragon-ball-z/ps4-controller/187X140/Back.jpg",
			"../images/products/dragon-ball-z/ps4-controller/187X140/Side.jpg",
			"../images/products/dragon-ball-z/ps4-controller/187X140/Zoom.jpg",
			//design name
			"dragon ball z" ,
			//design name html
			"dragon<br>ball z",
			//design image
			"../images/products/dragon-ball-z/design.jpg",
			//product name
			"PS4 controller",
			//product Image
			"../images/products/dragon-ball-z/ps4-controller/controller.png",
			//price dollars
			"15",
			//price cents
			"99",
			//short description
			"Dragon Ball Z Inspired Design by Edward Niro,<br> USA's Top Designers, If you are into anime<br> you cannot be living without this design.<br> The design represents the core ideology of<br> Dragon Ball Z",
			//long description
			"Dragon Ball Z Inspired Design by Edward Niro,<br> USA's Top Designers, If you are into anime<br> you cannot be living without this design.<br> The design represents the core ideology of<br> Dragon Ball Z",
			//author
			"Edward Niro",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off<br>-Residue will be non-existent on<br> your PS4 Controller<br>-DIMENSIONS: 6.24 x 2.00 x 3.90",
			//url
			"single-product-page?designName=dragon-ball-z&productName=ps4-controller"
		);
		$dragon_ball_z['ps4-console'] = new product (
			//four images of size 589x591
			"../images/products/dragon-ball-z/ps4-console/560X460/Front.jpg",
			"../images/products/dragon-ball-z/ps4-console/560X460/Back.jpg",
			"../images/products/dragon-ball-z/ps4-console/560X460/Side.jpg",
			"../images/products/dragon-ball-z/ps4-console/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/dragon-ball-z/ps4-console/187X140/Front.jpg",
			"../images/products/dragon-ball-z/ps4-console/187X140/Back.jpg",
			"../images/products/dragon-ball-z/ps4-console/187X140/Side.jpg",
			"../images/products/dragon-ball-z/ps4-console/187X140/Zoom.jpg",
			//design name
			"dragon ball z" ,
			//design name html
			"dragon<br>ball z",
			//design image
			"../images/products/dragon-ball-z/design.jpg",
			//product name
			"PS4 console",
			//product Image
			"../images/products/dragon-ball-z/ps4-console/console.png",
			//price dollars
			"20",
			//price cents
			"99",
			//short description
			"Dragon Ball Z Inspired Design by Edward Niro,<br> USA's Top Designers, If you are into anime<br> you cannot be living without this design.<br> The design represents the core ideology of<br> Dragon Ball Z",
			//long description
			"Dragon Ball Z Inspired Design by Edward Niro,<br> USA's Top Designers, If you are into anime<br> you cannot be living without this design.<br> The design represents the core ideology of<br> Dragon Ball Z",
			//author
			"Edward Niro",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off<br>-Residue will be non-existent <br>on your PS4 Console<br>-DIMENSIONS: 12.00 x 0.01 x 29.00",
			//url
			"single-product-page?designName=dragon-ball-z&productName=ps4-console"
		);
		$dragon_ball_z['ps4-slim-console'] = new product (
			//four images of size 589x591
			"../images/products/dragon-ball-z/ps4-slim-console/560X460/Front.jpg",
			"../images/products/dragon-ball-z/ps4-slim-console/560X460/Back.jpg",
			"../images/products/dragon-ball-z/ps4-slim-console/560X460/Side.jpg",
			"../images/products/dragon-ball-z/ps4-slim-console/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/dragon-ball-z/ps4-slim-console/187X140/Front.jpg",
			"../images/products/dragon-ball-z/ps4-slim-console/187X140/Back.jpg",
			"../images/products/dragon-ball-z/ps4-slim-console/187X140/Side.jpg",
			"../images/products/dragon-ball-z/ps4-slim-console/187X140/Zoom.jpg",
			//design name
			"dragon ball z" ,
			//design name html
			"dragon<br>ball z",
			//design image
			"../images/products/dragon-ball-z/design.jpg",
			//product name
			"PS4 Slim Console",
			//product Image
			"../images/products/dragon-ball-z/ps4-slim-console/console.png",
			//price dollars
			"20",
			//price cents
			"99",
			//short description
			"Dragon Ball Z Inspired Design by Edward Niro,<br> USA's Top Designers, If you are into anime<br> you cannot be living without this design.<br> The design represents the core ideology of<br> Dragon Ball Z",
			//long description
			"Dragon Ball Z Inspired Design by Edward Niro,<br> USA's Top Designers, If you are into anime<br> you cannot be living without this design.<br> The design represents the core ideology of<br> Dragon Ball Z",
			//author
			"Edward Niro",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off<br>-Residue will be non-existent<br>on your PS4 Slim Console<br>-DIMENSIONS: 13.00 x 0.01 x 25.00",
			//url
			"single-product-page?designName=dragon-ball-z&productName=ps4-slim-console"
		);
		$dragon_ball_z['ps4-pro-console'] = new product (
			//four images of size 589x591
			"../images/products/dragon-ball-z/ps4-pro-console/560X460/Front.jpg",
			"../images/products/dragon-ball-z/ps4-pro-console/560X460/Back.jpg",
			"../images/products/dragon-ball-z/ps4-pro-console/560X460/Side.jpg",
			"../images/products/dragon-ball-z/ps4-pro-console/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/dragon-ball-z/ps4-pro-console/187X140/Front.jpg",
			"../images/products/dragon-ball-z/ps4-pro-console/187X140/Back.jpg",
			"../images/products/dragon-ball-z/ps4-pro-console/187X140/Side.jpg",
			"../images/products/dragon-ball-z/ps4-pro-console/187X140/Zoom.jpg",
			//design name
			"dragon ball z" ,
			//design name html
			"dragon<br>ball z",
			//design image
			"../images/products/dragon-ball-z/design.jpg",
			//product name
			"PS4 Pro Console",
			//product Image
			"../images/products/dragon-ball-z/ps4-pro-console/console.png",
			//price dollars
			"20",
			//price cents
			"99",
			//short description
			"Dragon Ball Z Inspired Design by Edward Niro,<br> USA's Top Designers, If you are into anime<br> you cannot be living without this design.<br> The design represents the core ideology of<br> Dragon Ball Z",
			//long description
			"Dragon Ball Z Inspired Design by Edward Niro,<br> USA's Top Designers, If you are into anime<br> you cannot be living without this design.<br> The design represents the core ideology of<br> Dragon Ball Z",
			//author
			"Edward Niro",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off<br>-Residue will be non-existent<br>on your PS4 Pro Console<br>-DIMENSIONS: 13.00 x 0.01 x 25.00",
			//url
			"single-product-page?designName=dragon-ball-z&productName=ps4-pro-console"
		);
		$dragon_ball_z['ps4-bundle'] = new product (
			//four images of size 589x591
			"../images/products/dragon-ball-z/ps4-bundle/560X460/Front.jpg",
			"../images/products/dragon-ball-z/ps4-bundle/560X460/Back.jpg",
			"../images/products/dragon-ball-z/ps4-bundle/560X460/Side.jpg",
			"../images/products/dragon-ball-z/ps4-bundle/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/dragon-ball-z/ps4-bundle/187X140/Front.jpg",
			"../images/products/dragon-ball-z/ps4-bundle/187X140/Back.jpg",
			"../images/products/dragon-ball-z/ps4-bundle/187X140/Side.jpg",
			"../images/products/dragon-ball-z/ps4-bundle/187X140/Zoom.jpg",
			//design name
			"dragon ball z" ,
			//design name html
			"dragon<br>ball z",
			//design image
			"../images/products/dragon-ball-z/design.jpg",
			//product name
			"PS4 bundle",
			//product Image
			"../images/products/dragon-ball-z/ps4-bundle/bundle.png",
			//price dollars
			"23",
			//price cents
			"99",
			//short description
			"Dragon Ball Z Inspired Design by Edward Niro,<br> USA's Top Designers, If you are into anime<br> you cannot be living without this design.<br> The design represents the core ideology of<br> Dragon Ball Z",
			//long description
			"Dragon Ball Z Inspired Design by Edward Niro,<br> USA's Top Designers, If you are into anime<br> you cannot be living without this design.<br> The design represents the core ideology of<br> Dragon Ball Z",
			//author
			"Edward Niro",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off<br>-Residue will be non-existent <br>on your PS4 bundle<br>-DIMENSIONS: 12.00 x 0.01 x 29.00<br>Controller:  6.24 x 2.00 x 3.90",
			//url
			"single-product-page?designName=dragon-ball-z&productName=ps4-bundle"
		);
		$dragon_ball_z['ps4-slim-bundle'] = new product (
			//four images of size 589x591
			"../images/products/dragon-ball-z/ps4-slim-bundle/560X460/Front.jpg",
			"../images/products/dragon-ball-z/ps4-slim-bundle/560X460/Back.jpg",
			"../images/products/dragon-ball-z/ps4-slim-bundle/560X460/Side.jpg",
			"../images/products/dragon-ball-z/ps4-slim-bundle/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/dragon-ball-z/ps4-slim-bundle/187X140/Front.jpg",
			"../images/products/dragon-ball-z/ps4-slim-bundle/187X140/Back.jpg",
			"../images/products/dragon-ball-z/ps4-slim-bundle/187X140/Side.jpg",
			"../images/products/dragon-ball-z/ps4-slim-bundle/187X140/Zoom.jpg",
			//design name
			"dragon ball z" ,
			//design name html
			"dragon<br>ball z",
			//design image
			"../images/products/dragon-ball-z/design.jpg",
			//product name
			"PS4 Slim bundle",
			//product Image
			"../images/products/dragon-ball-z/ps4-slim-bundle/bundle.png",
			//price dollars
			"23",
			//price cents
			"99",
			//short description
			"Dragon Ball Z Inspired Design by Edward Niro,<br> USA's Top Designers, If you are into anime<br> you cannot be living without this design.<br> The design represents the core ideology of<br> Dragon Ball Z",
			//long description
			"Dragon Ball Z Inspired Design by Edward Niro,<br> USA's Top Designers, If you are into anime<br> you cannot be living without this design.<br> The design represents the core ideology of<br> Dragon Ball Z",
			//author
			"Edward Niro",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off<br>-Residue will be non-existent<br>on your PS4 Slim bundle<br>-DIMENSIONS: 13.00 x 0.01 x 25.00<br>Controller:  6.24 x 2.00 x 3.90",
			//url
			"single-product-page?designName=dragon-ball-z&productName=ps4-slim-bundle"
		);
		$dragon_ball_z['ps4-pro-bundle'] = new product (
			//four images of size 589x591
			"../images/products/dragon-ball-z/ps4-pro-bundle/560X460/Front.jpg",
			"../images/products/dragon-ball-z/ps4-pro-bundle/560X460/Back.jpg",
			"../images/products/dragon-ball-z/ps4-pro-bundle/560X460/Side.jpg",
			"../images/products/dragon-ball-z/ps4-pro-bundle/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/dragon-ball-z/ps4-pro-bundle/187X140/Front.jpg",
			"../images/products/dragon-ball-z/ps4-pro-bundle/187X140/Back.jpg",
			"../images/products/dragon-ball-z/ps4-pro-bundle/187X140/Side.jpg",
			"../images/products/dragon-ball-z/ps4-pro-bundle/187X140/Zoom.jpg",
			//design name
			"dragon ball z" ,
			//design name html
			"dragon<br>ball z",
			//design image
			"../images/products/dragon-ball-z/design.jpg",
			//product name
			"PS4 Pro bundle",
			//product Image
			"../images/products/dragon-ball-z/ps4-pro-bundle/bundle.png",
			//price dollars
			"23",
			//price cents
			"99",
			//short description
			"Dragon Ball Z Inspired Design by Edward Niro,<br> USA's Top Designers, If you are into anime<br> you cannot be living without this design.<br> The design represents the core ideology of<br> Dragon Ball Z",
			//long description
			"Dragon Ball Z Inspired Design by Edward Niro,<br> USA's Top Designers, If you are into anime<br> you cannot be living without this design.<br> The design represents the core ideology of<br> Dragon Ball Z",
			//author
			"Edward Niro",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off<br>-Residue will be non-existent<br>on your PS4 Pro bundle<br>-DIMENSIONS: 13.00 x 0.01 x 25.00<br>Controller:  6.24 x 2.00 x 3.90",
			//url
			"single-product-page?designName=dragon-ball-z&productName=ps4-pro-bundle"
		);
		// controller
		$funky_ghost['ps4-controller'] = new product (
			//four images of size 589x591
			"../images/products/funky-ghost/ps4-controller/560X460/Front.jpg",
			"../images/products/funky-ghost/ps4-controller/560X460/Back.jpg",
			"../images/products/funky-ghost/ps4-controller/560X460/Side.jpg",
			"../images/products/funky-ghost/ps4-controller/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/funky-ghost/ps4-controller/187X140/Front.jpg",
			"../images/products/funky-ghost/ps4-controller/187X140/Back.jpg",
			"../images/products/funky-ghost/ps4-controller/187X140/Side.jpg",
			"../images/products/funky-ghost/ps4-controller/187X140/Zoom.jpg",
			//design name
			"funky ghost" ,
			//design name html
			"funky<br>ghost",
			//design image
			"../images/products/funky-ghost/design.jpg",
			//product name
			"PS4 controller",
			//product Image
			"../images/products/funky-ghost/ps4-controller/controller.png",
			//price dollars
			"15",
			//price cents
			"99",
			//short description
			"Funky Ghost inspired design from<br> industry expert Tsujita Masujiro,<br> Identify yourself as the best in Pop Culture",
			//long description
			"Funky Ghost inspired design from<br> industry expert Tsujita Masujiro,<br> Identify yourself as the best in Pop Culture",
			//author
			"Tsujita Masujiro",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off<br>-Residue will be non-existent on<br> your PS4 Controller<br>-DIMENSIONS: 6.24 x 2.00 x 3.90",
			//url
			"single-product-page?designName=funky-ghost&productName=ps4-controller"
		);
		$funky_ghost['ps4-console'] = new product (
			//four images of size 589x591
			"../images/products/funky-ghost/ps4-console/560X460/Front.jpg",
			"../images/products/funky-ghost/ps4-console/560X460/Back.jpg",
			"../images/products/funky-ghost/ps4-console/560X460/Side.jpg",
			"../images/products/funky-ghost/ps4-console/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/funky-ghost/ps4-console/187X140/Front.jpg",
			"../images/products/funky-ghost/ps4-console/187X140/Back.jpg",
			"../images/products/funky-ghost/ps4-console/187X140/Side.jpg",
			"../images/products/funky-ghost/ps4-console/187X140/Zoom.jpg",
			//design name
			"funky ghost" ,
			//design name html
			"funky<br>ghost",
			//design image
			"../images/products/funky-ghost/design.jpg",
			//product name
			"PS4 console",
			//product Image
			"../images/products/funky-ghost/ps4-console/console.png",
			//price dollars
			"20",
			//price cents
			"99",
			//short description
			"Funky Ghost inspired design from<br> industry expert Tsujita Masujiro,<br> Identify yourself as the best in Pop Culture",
			//long description
			"Funky Ghost inspired design from<br> industry expert Tsujita Masujiro,<br> Identify yourself as the best in Pop Culture",
			//author
			"Tsujita Masujiro",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off<br>-Residue will be non-existent <br>on your PS4 Console<br>-DIMENSIONS: 12.00 x 0.01 x 29.00",
			//url
			"single-product-page?designName=funky-ghost&productName=ps4-console"
		);
		$funky_ghost['ps4-slim-console'] = new product (
			//four images of size 589x591
			"../images/products/funky-ghost/ps4-slim-console/560X460/Front.jpg",
			"../images/products/funky-ghost/ps4-slim-console/560X460/Back.jpg",
			"../images/products/funky-ghost/ps4-slim-console/560X460/Side.jpg",
			"../images/products/funky-ghost/ps4-slim-console/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/funky-ghost/ps4-slim-console/187X140/Front.jpg",
			"../images/products/funky-ghost/ps4-slim-console/187X140/Back.jpg",
			"../images/products/funky-ghost/ps4-slim-console/187X140/Side.jpg",
			"../images/products/funky-ghost/ps4-slim-console/187X140/Zoom.jpg",
			//design name
			"funky ghost" ,
			//design name html
			"funky<br>ghost",
			//design image
			"../images/products/funky-ghost/design.jpg",
			//product name
			"PS4 Slim Console",
			//product Image
			"../images/products/funky-ghost/ps4-slim-console/console.png",
			//price dollars
			"20",
			//price cents
			"99",
			//short description
			"Funky Ghost inspired design from<br> industry expert Tsujita Masujiro,<br> Identify yourself as the best in Pop Culture",
			//long description
			"Funky Ghost inspired design from<br> industry expert Tsujita Masujiro,<br> Identify yourself as the best in Pop Culture",
			//author
			"Tsujita Masujiro",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off<br>-Residue will be non-existent on<br> your PS4 Slim Console<br>-DIMENSIONS: 13.00 x 0.01 x 25.00",
			//url
			"single-product-page?designName=funky-ghost&productName=ps4-slim-console"
		);
		$funky_ghost['ps4-pro-console'] = new product (
			//four images of size 589x591
			"../images/products/funky-ghost/ps4-pro-console/560X460/Front.jpg",
			"../images/products/funky-ghost/ps4-pro-console/560X460/Back.jpg",
			"../images/products/funky-ghost/ps4-pro-console/560X460/Side.jpg",
			"../images/products/funky-ghost/ps4-pro-console/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/funky-ghost/ps4-pro-console/187X140/Front.jpg",
			"../images/products/funky-ghost/ps4-pro-console/187X140/Back.jpg",
			"../images/products/funky-ghost/ps4-pro-console/187X140/Side.jpg",
			"../images/products/funky-ghost/ps4-pro-console/187X140/Zoom.jpg",
			//design name
			"funky ghost" ,
			//design name html
			"funky<br>ghost",
			//design image
			"../images/products/funky-ghost/design.jpg",
			//product name
			"PS4 Pro Console",
			//product Image
			"../images/products/funky-ghost/ps4-pro-console/console.png",
			//price dollars
			"20",
			//price cents
			"99",
			//short description
			"Funky Ghost inspired design from<br> industry expert Tsujita Masujiro,<br> Identify yourself as the best in Pop Culture",
			//long description
			"Funky Ghost inspired design from<br> industry expert Tsujita Masujiro,<br> Identify yourself as the best in Pop Culture",
			//author
			"Tsujita Masujiro",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off<br>-Residue will be non-existent <br>on your PS4 Console<br>-DIMENSIONS: 13.00 x 0.01 x 25.00",
			//url
			"single-product-page?designName=funky-ghost&productName=ps4-pro-console"
		);
		$funky_ghost['ps4-bundle'] = new product (
			//four images of size 589x591
			"../images/products/funky-ghost/ps4-bundle/560X460/Front.jpg",
			"../images/products/funky-ghost/ps4-bundle/560X460/Back.jpg",
			"../images/products/funky-ghost/ps4-bundle/560X460/Side.jpg",
			"../images/products/funky-ghost/ps4-bundle/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/funky-ghost/ps4-bundle/187X140/Front.jpg",
			"../images/products/funky-ghost/ps4-bundle/187X140/Back.jpg",
			"../images/products/funky-ghost/ps4-bundle/187X140/Side.jpg",
			"../images/products/funky-ghost/ps4-bundle/187X140/Zoom.jpg",
			//design name
			"funky ghost" ,
			//design name html
			"funky<br>ghost",
			//design image
			"../images/products/funky-ghost/design.jpg",
			//product name
			"PS4 bundle",
			//product Image
			"../images/products/funky-ghost/ps4-bundle/bundle.png",
			//price dollars
			"23",
			//price cents
			"99",
			//short description
			"Funky Ghost inspired design from<br> industry expert Tsujita Masujiro,<br> Identify yourself as the best in Pop Culture",
			//long description
			"Funky Ghost inspired design from<br> industry expert Tsujita Masujiro,<br> Identify yourself as the best in Pop Culture",
			//author
			"Tsujita Masujiro",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off<br>-Residue will be non-existent <br>on your PS4 bundle<br>-DIMENSIONS: 12.00 x 0.01 x 29.00<br>Controller:  6.24 x 2.00 x 3.90",
			//url
			"single-product-page?designName=funky-ghost&productName=ps4-bundle"
		);
		$funky_ghost['ps4-slim-bundle'] = new product (
			//four images of size 589x591
			"../images/products/funky-ghost/ps4-slim-bundle/560X460/Front.jpg",
			"../images/products/funky-ghost/ps4-slim-bundle/560X460/Back.jpg",
			"../images/products/funky-ghost/ps4-slim-bundle/560X460/Side.jpg",
			"../images/products/funky-ghost/ps4-slim-bundle/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/funky-ghost/ps4-slim-bundle/187X140/Front.jpg",
			"../images/products/funky-ghost/ps4-slim-bundle/187X140/Back.jpg",
			"../images/products/funky-ghost/ps4-slim-bundle/187X140/Side.jpg",
			"../images/products/funky-ghost/ps4-slim-bundle/187X140/Zoom.jpg",
			//design name
			"funky ghost" ,
			//design name html
			"funky<br>ghost",
			//design image
			"../images/products/funky-ghost/design.jpg",
			//product name
			"PS4 Slim bundle",
			//product Image
			"../images/products/funky-ghost/ps4-slim-bundle/bundle.png",
			//price dollars
			"23",
			//price cents
			"99",
			//short description
			"Funky Ghost inspired design from<br> industry expert Tsujita Masujiro,<br> Identify yourself as the best in Pop Culture",
			//long description
			"Funky Ghost inspired design from<br> industry expert Tsujita Masujiro,<br> Identify yourself as the best in Pop Culture",
			//author
			"Tsujita Masujiro",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off<br>-Residue will be non-existent on<br> your PS4 Slim bundle<br>-DIMENSIONS: 13.00 x 0.01 x 25.00<br>Controller:  6.24 x 2.00 x 3.90",
			//url
			"single-product-page?designName=funky-ghost&productName=ps4-slim-bundle"
		);
		$funky_ghost['ps4-pro-bundle'] = new product (
			//four images of size 589x591
			"../images/products/funky-ghost/ps4-pro-bundle/560X460/Front.jpg",
			"../images/products/funky-ghost/ps4-pro-bundle/560X460/Back.jpg",
			"../images/products/funky-ghost/ps4-pro-bundle/560X460/Side.jpg",
			"../images/products/funky-ghost/ps4-pro-bundle/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/funky-ghost/ps4-pro-bundle/187X140/Front.jpg",
			"../images/products/funky-ghost/ps4-pro-bundle/187X140/Back.jpg",
			"../images/products/funky-ghost/ps4-pro-bundle/187X140/Side.jpg",
			"../images/products/funky-ghost/ps4-pro-bundle/187X140/Zoom.jpg",
			//design name
			"funky ghost" ,
			//design name html
			"funky<br>ghost",
			//design image
			"../images/products/funky-ghost/design.jpg",
			//product name
			"PS4 Pro bundle",
			//product Image
			"../images/products/funky-ghost/ps4-pro-bundle/bundle.png",
			//price dollars
			"23",
			//price cents
			"99",
			//short description
			"Funky Ghost inspired design from<br> industry expert Tsujita Masujiro,<br> Identify yourself as the best in Pop Culture",
			//long description
			"Funky Ghost inspired design from<br> industry expert Tsujita Masujiro,<br> Identify yourself as the best in Pop Culture",
			//author
			"Tsujita Masujiro",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off<br>-Residue will be non-existent <br>on your PS4 bundle<br>-DIMENSIONS: 13.00 x 0.01 x 25.00<br>Controller:  6.24 x 2.00 x 3.90",
			//url
			"single-product-page?designName=funky-ghost&productName=ps4-pro-bundle"
		);
		// controller
		$funky_skulls['ps4-controller'] = new product (
			//four images of size 589x591
			"../images/products/funky-skulls/ps4-controller/560X460/Front.jpg",
			"../images/products/funky-skulls/ps4-controller/560X460/Back.jpg",
			"../images/products/funky-skulls/ps4-controller/560X460/Side.jpg",
			"../images/products/funky-skulls/ps4-controller/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/funky-skulls/ps4-controller/187X140/Front.jpg",
			"../images/products/funky-skulls/ps4-controller/187X140/Back.jpg",
			"../images/products/funky-skulls/ps4-controller/187X140/Side.jpg",
			"../images/products/funky-skulls/ps4-controller/187X140/Zoom.jpg",
			//design name
			"funky skulls" ,
			//design name html
			"funky<br> skulls",
			//design image
			"../images/products/funky-skulls/design.jpg",
			//product name
			"PS4 controller",
			//product Image
			"../images/products/funky-skulls/ps4-controller/controller.png",
			//price dollars
			"15",
			//price cents
			"99",
			//short description
			"Funky Skulls inspired design from<br> industry expert Robert W. Chambers,<br> Identify yourself as the best in Pop Culture",
			//long description
			"Funky Skulls inspired design from<br> industry expert Robert W. Chambers,<br> Identify yourself as the best in Pop Culture",
			//author
			"Robert W. Chambers",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off<br>-Residue will be non-existent on<br> your PS4 Controller<br>-DIMENSIONS: 6.24 x 2.00 x 3.90",
			//url
			"single-product-page?designName=funky-skulls&productName=ps4-controller"
		);
		$funky_skulls['ps4-console'] = new product (
			//four images of size 589x591
			"../images/products/funky-skulls/ps4-console/560X460/Front.jpg",
			"../images/products/funky-skulls/ps4-console/560X460/Back.jpg",
			"../images/products/funky-skulls/ps4-console/560X460/Side.jpg",
			"../images/products/funky-skulls/ps4-console/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/funky-skulls/ps4-console/187X140/Front.jpg",
			"../images/products/funky-skulls/ps4-console/187X140/Back.jpg",
			"../images/products/funky-skulls/ps4-console/187X140/Side.jpg",
			"../images/products/funky-skulls/ps4-console/187X140/Zoom.jpg",
			//design name
			"funky skulls" ,
			//design name html
			"funky<br> skulls",
			//design image
			"../images/products/funky-skulls/design.jpg",
			//product name
			"PS4 console",
			//product Image
			"../images/products/funky-skulls/ps4-console/console.png",
			//price dollars
			"20",
			//price cents
			"99",
			//short description
			"Funky Skulls inspired design from<br> industry expert Robert W. Chambers,<br> Identify yourself as the best in Pop Culture",
			//long description
			"Funky Skulls inspired design from<br> industry expert Robert W. Chambers,<br> Identify yourself as the best in Pop Culture",
			//author
			"Robert W. Chambers",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off<br>-Residue will be non-existent <br>on your PS4 Console<br>-DIMENSIONS: 12.00 x 0.01 x 29.00",
			//url
			"single-product-page?designName=funky-skulls&productName=ps4-console"
		);
		$funky_skulls['ps4-slim-console'] = new product (
			//four images of size 589x591
			"../images/products/funky-skulls/ps4-slim-console/560X460/Front.jpg",
			"../images/products/funky-skulls/ps4-slim-console/560X460/Back.jpg",
			"../images/products/funky-skulls/ps4-slim-console/560X460/Side.jpg",
			"../images/products/funky-skulls/ps4-slim-console/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/funky-skulls/ps4-slim-console/187X140/Front.jpg",
			"../images/products/funky-skulls/ps4-slim-console/187X140/Back.jpg",
			"../images/products/funky-skulls/ps4-slim-console/187X140/Side.jpg",
			"../images/products/funky-skulls/ps4-slim-console/187X140/Zoom.jpg",
			//design name
			"funky skulls" ,
			//design name html
			"funky<br> skulls",
			//design image
			"../images/products/funky-skulls/design.jpg",
			//product name
			"PS4 Slim Console",
			//product Image
			"../images/products/funky-skulls/ps4-slim-console/console.png",
			//price dollars
			"20",
			//price cents
			"99",
			//short description
			"Funky Skulls inspired design from<br> industry expert Robert W. Chambers,<br> Identify yourself as the best in Pop Culture",
			//long description
			"Funky Skulls inspired design from<br> industry expert Robert W. Chambers,<br> Identify yourself as the best in Pop Culture",
			//author
			"Robert W. Chambers",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off<br>-Residue will be non-existent <br>on your PS4 Console<br>-DIMENSIONS: 13.00 x 0.01 x 25.00",
			//url
			"single-product-page?designName=funky-skulls&productName=ps4-slim-console"
		);
		$funky_skulls['ps4-pro-console'] = new product (
			//four images of size 589x591
			"../images/products/funky-skulls/ps4-pro-console/560X460/Front.jpg",
			"../images/products/funky-skulls/ps4-pro-console/560X460/Back.jpg",
			"../images/products/funky-skulls/ps4-pro-console/560X460/Side.jpg",
			"../images/products/funky-skulls/ps4-pro-console/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/funky-skulls/ps4-pro-console/187X140/Front.jpg",
			"../images/products/funky-skulls/ps4-pro-console/187X140/Back.jpg",
			"../images/products/funky-skulls/ps4-pro-console/187X140/Side.jpg",
			"../images/products/funky-skulls/ps4-pro-console/187X140/Zoom.jpg",
			//design name
			"funky skulls" ,
			//design name html
			"funky<br> skulls",
			//design image
			"../images/products/funky-skulls/design.jpg",
			//product name
			"PS4 console",
			//product Image
			"../images/products/funky-skulls/ps4-pro-console/console.png",
			//price dollars
			"20",
			//price cents
			"99",
			//short description
			"Funky Skulls inspired design from<br> industry expert Robert W. Chambers,<br> Identify yourself as the best in Pop Culture",
			//long description
			"Funky Skulls inspired design from<br> industry expert Robert W. Chambers,<br> Identify yourself as the best in Pop Culture",
			//author
			"Robert W. Chambers",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off<br>-Residue will be non-existent <br>on your PS4 Console<br>-DIMENSIONS: 13.00 x 0.01 x 25.00",
			//url
			"single-product-page?designName=funky-skulls&productName=ps4-pro-console"
		);
		$funky_skulls['ps4-bundle'] = new product (
			//four images of size 589x591
			"../images/products/funky-skulls/ps4-bundle/560X460/Front.jpg",
			"../images/products/funky-skulls/ps4-bundle/560X460/Back.jpg",
			"../images/products/funky-skulls/ps4-bundle/560X460/Side.jpg",
			"../images/products/funky-skulls/ps4-bundle/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/funky-skulls/ps4-bundle/187X140/Front.jpg",
			"../images/products/funky-skulls/ps4-bundle/187X140/Back.jpg",
			"../images/products/funky-skulls/ps4-bundle/187X140/Side.jpg",
			"../images/products/funky-skulls/ps4-bundle/187X140/Zoom.jpg",
			//design name
			"funky skulls" ,
			//design name html
			"funky<br> skulls",
			//design image
			"../images/products/funky-skulls/design.jpg",
			//product name
			"PS4 bundle",
			//product Image
			"../images/products/funky-skulls/ps4-bundle/bundle.png",
			//price dollars
			"23",
			//price cents
			"99",
			//short description
			"Funky Skulls inspired design from<br> industry expert Robert W. Chambers,<br> Identify yourself as the best in Pop Culture",
			//long description
			"Funky Skulls inspired design from<br> industry expert Robert W. Chambers,<br> Identify yourself as the best in Pop Culture",
			//author
			"Robert W. Chambers",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off<br>-Residue will be non-existent <br>on your PS4 bundle<br>-DIMENSIONS: 12.00 x 0.01 x 29.00<br>Controller:  6.24 x 2.00 x 3.90",
			//url
			"single-product-page?designName=funky-skulls&productName=ps4-bundle"
		);
		$funky_skulls['ps4-slim-bundle'] = new product (
			//four images of size 589x591
			"../images/products/funky-skulls/ps4-slim-bundle/560X460/Front.jpg",
			"../images/products/funky-skulls/ps4-slim-bundle/560X460/Back.jpg",
			"../images/products/funky-skulls/ps4-slim-bundle/560X460/Side.jpg",
			"../images/products/funky-skulls/ps4-slim-bundle/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/funky-skulls/ps4-slim-bundle/187X140/Front.jpg",
			"../images/products/funky-skulls/ps4-slim-bundle/187X140/Back.jpg",
			"../images/products/funky-skulls/ps4-slim-bundle/187X140/Side.jpg",
			"../images/products/funky-skulls/ps4-slim-bundle/187X140/Zoom.jpg",
			//design name
			"funky skulls" ,
			//design name html
			"funky<br> skulls",
			//design image
			"../images/products/funky-skulls/design.jpg",
			//product name
			"PS4 Slim bundle",
			//product Image
			"../images/products/funky-skulls/ps4-slim-bundle/bundle.png",
			//price dollars
			"23",
			//price cents
			"99",
			//short description
			"Funky Skulls inspired design from<br> industry expert Robert W. Chambers,<br> Identify yourself as the best in Pop Culture",
			//long description
			"Funky Skulls inspired design from<br> industry expert Robert W. Chambers,<br> Identify yourself as the best in Pop Culture",
			//author
			"Robert W. Chambers",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off<br>-Residue will be non-existent <br>on your PS4 bundle<br>-DIMENSIONS: 13.00 x 0.01 x 25.00<br>Controller:  6.24 x 2.00 x 3.90",
			//url
			"single-product-page?designName=funky-skulls&productName=ps4-slim-bundle"
		);
		$funky_skulls['ps4-pro-bundle'] = new product (
			//four images of size 589x591
			"../images/products/funky-skulls/ps4-pro-bundle/560X460/Front.jpg",
			"../images/products/funky-skulls/ps4-pro-bundle/560X460/Back.jpg",
			"../images/products/funky-skulls/ps4-pro-bundle/560X460/Side.jpg",
			"../images/products/funky-skulls/ps4-pro-bundle/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/funky-skulls/ps4-pro-bundle/187X140/Front.jpg",
			"../images/products/funky-skulls/ps4-pro-bundle/187X140/Back.jpg",
			"../images/products/funky-skulls/ps4-pro-bundle/187X140/Side.jpg",
			"../images/products/funky-skulls/ps4-pro-bundle/187X140/Zoom.jpg",
			//design name
			"funky skulls" ,
			//design name html
			"funky<br> skulls",
			//design image
			"../images/products/funky-skulls/design.jpg",
			//product name
			"PS4 bundle",
			//product Image
			"../images/products/funky-skulls/ps4-pro-bundle/bundle.png",
			//price dollars
			"23",
			//price cents
			"99",
			//short description
			"Funky Skulls inspired design from<br> industry expert Robert W. Chambers,<br> Identify yourself as the best in Pop Culture",
			//long description
			"Funky Skulls inspired design from<br> industry expert Robert W. Chambers,<br> Identify yourself as the best in Pop Culture",
			//author
			"Robert W. Chambers",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off<br>-Residue will be non-existent <br>on your PS4 bundle<br>-DIMENSIONS: 13.00 x 0.01 x 25.00<br>Controller:  6.24 x 2.00 x 3.90",
			//url
			"single-product-page?designName=funky-skulls&productName=ps4-pro-bundle"
		);
		// controller
		$game_freak['ps4-controller'] = new product (
			//four images of size 589x591
			"../images/products/game-freak/ps4-controller/560X460/Front.jpg",
			"../images/products/game-freak/ps4-controller/560X460/Back.jpg",
			"../images/products/game-freak/ps4-controller/560X460/Side.jpg",
			"../images/products/game-freak/ps4-controller/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/game-freak/ps4-controller/187X140/Front.jpg",
			"../images/products/game-freak/ps4-controller/187X140/Back.jpg",
			"../images/products/game-freak/ps4-controller/187X140/Side.jpg",
			"../images/products/game-freak/ps4-controller/187X140/Zoom.jpg",
			//design name
			"game freak" ,
			//design name html
			"game<br>freak",
			//design image
			"../images/products/game-freak/design.jpg",
			//product name
			"PS4 controller",
			//product Image
			"../images/products/game-freak/ps4-controller/controller.png",
			//price dollars
			"15",
			//price cents
			"99",
			//short description
			"Game Freak inspired design from<br> industry expert David E. Hunt,<br> Identify yourself as the best in Pop Culture",
			//long description
			"Game Freak inspired design from<br> industry expert David E. Hunt,<br> Identify yourself as the best in Pop Culture",
			//author
			"David E. Hunt",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off<br>-Residue will be non-existent on<br> your PS4 Controller<br>-DIMENSIONS: 6.24 x 2.00 x 3.90",
			//url
			"single-product-page?designName=game-freak&productName=ps4-controller"
		);
		$game_freak['ps4-console'] = new product (
			//four images of size 589x591
			"../images/products/game-freak/ps4-console/560X460/Front.jpg",
			"../images/products/game-freak/ps4-console/560X460/Back.jpg",
			"../images/products/game-freak/ps4-console/560X460/Side.jpg",
			"../images/products/game-freak/ps4-console/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/game-freak/ps4-console/187X140/Front.jpg",
			"../images/products/game-freak/ps4-console/187X140/Back.jpg",
			"../images/products/game-freak/ps4-console/187X140/Side.jpg",
			"../images/products/game-freak/ps4-console/187X140/Zoom.jpg",
			//design name
			"game freak" ,
			//design name html
			"game<br>freak",
			//design image
			"../images/products/game-freak/design.jpg",
			//product name
			"PS4 console",
			//product Image
			"../images/products/game-freak/ps4-console/console.png",
			//price dollars
			"20",
			//price cents
			"99",
			//short description
			"Game Freak inspired design from<br> industry expert David E. Hunt,<br> Identify yourself as the best in Pop Culture",
			//long description
			"Game Freak inspired design from<br> industry expert David E. Hunt,<br> Identify yourself as the best in Pop Culture",
			//author
			"David E. Hunt",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off<br>-Residue will be non-existent <br>on your PS4 Console<br>-DIMENSIONS: 12.00 x 0.01 x 29.00",
			//url
			"single-product-page?designName=game-freak&productName=ps4-console"
		);
		$game_freak['ps4-slim-console'] = new product (
			//four images of size 589x591
			"../images/products/game-freak/ps4-slim-console/560X460/Front.jpg",
			"../images/products/game-freak/ps4-slim-console/560X460/Back.jpg",
			"../images/products/game-freak/ps4-slim-console/560X460/Side.jpg",
			"../images/products/game-freak/ps4-slim-console/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/game-freak/ps4-slim-console/187X140/Front.jpg",
			"../images/products/game-freak/ps4-slim-console/187X140/Back.jpg",
			"../images/products/game-freak/ps4-slim-console/187X140/Side.jpg",
			"../images/products/game-freak/ps4-slim-console/187X140/Zoom.jpg",
			//design name
			"game freak" ,
			//design name html
			"game<br>freak",
			//design image
			"../images/products/game-freak/design.jpg",
			//product name
			"PS4 Slim Console",
			//product Image
			"../images/products/game-freak/ps4-slim-console/console.png",
			//price dollars
			"20",
			//price cents
			"99",
			//short description
			"Game Freak inspired design from<br> industry expert David E. Hunt,<br> Identify yourself as the best in Pop Culture",
			//long description
			"Game Freak inspired design from<br> industry expert David E. Hunt,<br> Identify yourself as the best in Pop Culture",
			//author
			"David E. Hunt",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off<br>-Residue will be non-existent on<br> your PS4 Controller<br>-DIMENSIONS: 13.00 x 0.01 x 25.00",
			//url
			"single-product-page?designName=game-freak&productName=ps4-slim-console"
		);
		$game_freak['ps4-pro-console'] = new product (
			//four images of size 589x591
			"../images/products/game-freak/ps4-pro-console/560X460/Front.jpg",
			"../images/products/game-freak/ps4-pro-console/560X460/Back.jpg",
			"../images/products/game-freak/ps4-pro-console/560X460/Side.jpg",
			"../images/products/game-freak/ps4-pro-console/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/game-freak/ps4-pro-console/187X140/Front.jpg",
			"../images/products/game-freak/ps4-pro-console/187X140/Back.jpg",
			"../images/products/game-freak/ps4-pro-console/187X140/Side.jpg",
			"../images/products/game-freak/ps4-pro-console/187X140/Zoom.jpg",
			//design name
			"game freak" ,
			//design name html
			"game<br>freak",
			//design image
			"../images/products/game-freak/design.jpg",
			//product name
			"PS4 Pro Console",
			//product Image
			"../images/products/game-freak/ps4-pro-console/console.png",
			//price dollars
			"20",
			//price cents
			"99",
			//short description
			"Game Freak inspired design from<br> industry expert David E. Hunt,<br> Identify yourself as the best in Pop Culture",
			//long description
			"Game Freak inspired design from<br> industry expert David E. Hunt,<br> Identify yourself as the best in Pop Culture",
			//author
			"David E. Hunt",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off<br>-Residue will be non-existent <br>on your PS4 Console<br>-DIMENSIONS: 13.00 x 0.01 x 25.00",
			//url
			"single-product-page?designName=game-freak&productName=ps4-pro-console"
		);
		$game_freak['ps4-bundle'] = new product (
			//four images of size 589x591
			"../images/products/game-freak/ps4-bundle/560X460/Front.jpg",
			"../images/products/game-freak/ps4-bundle/560X460/Back.jpg",
			"../images/products/game-freak/ps4-bundle/560X460/Side.jpg",
			"../images/products/game-freak/ps4-bundle/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/game-freak/ps4-bundle/187X140/Front.jpg",
			"../images/products/game-freak/ps4-bundle/187X140/Back.jpg",
			"../images/products/game-freak/ps4-bundle/187X140/Side.jpg",
			"../images/products/game-freak/ps4-bundle/187X140/Zoom.jpg",
			//design name
			"game freak" ,
			//design name html
			"game<br>freak",
			//design image
			"../images/products/game-freak/design.jpg",
			//product name
			"PS4 bundle",
			//product Image
			"../images/products/game-freak/ps4-bundle/bundle.png",
			//price dollars
			"23",
			//price cents
			"99",
			//short description
			"Game Freak inspired design from<br> industry expert David E. Hunt,<br> Identify yourself as the best in Pop Culture",
			//long description
			"Game Freak inspired design from<br> industry expert David E. Hunt,<br> Identify yourself as the best in Pop Culture",
			//author
			"David E. Hunt",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off<br>-Residue will be non-existent <br>on your PS4 bundle<br>-DIMENSIONS: 12.00 x 0.01 x 29.00<br>Controller:  6.24 x 2.00 x 3.90",
			//url
			"single-product-page?designName=game-freak&productName=ps4-bundle"
		);
		$game_freak['ps4-slim-bundle'] = new product (
			//four images of size 589x591
			"../images/products/game-freak/ps4-slim-bundle/560X460/Front.jpg",
			"../images/products/game-freak/ps4-slim-bundle/560X460/Back.jpg",
			"../images/products/game-freak/ps4-slim-bundle/560X460/Side.jpg",
			"../images/products/game-freak/ps4-slim-bundle/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/game-freak/ps4-slim-bundle/187X140/Front.jpg",
			"../images/products/game-freak/ps4-slim-bundle/187X140/Back.jpg",
			"../images/products/game-freak/ps4-slim-bundle/187X140/Side.jpg",
			"../images/products/game-freak/ps4-slim-bundle/187X140/Zoom.jpg",
			//design name
			"game freak" ,
			//design name html
			"game<br>freak",
			//design image
			"../images/products/game-freak/design.jpg",
			//product name
			"PS4 Slim bundle",
			//product Image
			"../images/products/game-freak/ps4-slim-bundle/bundle.png",
			//price dollars
			"23",
			//price cents
			"99",
			//short description
			"Game Freak inspired design from<br> industry expert David E. Hunt,<br> Identify yourself as the best in Pop Culture",
			//long description
			"Game Freak inspired design from<br> industry expert David E. Hunt,<br> Identify yourself as the best in Pop Culture",
			//author
			"David E. Hunt",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off<br>-Residue will be non-existent on<br> your PS4 Controller<br>-DIMENSIONS: 13.00 x 0.01 x 25.00<br>Controller:  6.24 x 2.00 x 3.90",
			//url
			"single-product-page?designName=game-freak&productName=ps4-slim-bundle"
		);
		$game_freak['ps4-pro-bundle'] = new product (
			//four images of size 589x591
			"../images/products/game-freak/ps4-pro-bundle/560X460/Front.jpg",
			"../images/products/game-freak/ps4-pro-bundle/560X460/Back.jpg",
			"../images/products/game-freak/ps4-pro-bundle/560X460/Side.jpg",
			"../images/products/game-freak/ps4-pro-bundle/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/game-freak/ps4-pro-bundle/187X140/Front.jpg",
			"../images/products/game-freak/ps4-pro-bundle/187X140/Back.jpg",
			"../images/products/game-freak/ps4-pro-bundle/187X140/Side.jpg",
			"../images/products/game-freak/ps4-pro-bundle/187X140/Zoom.jpg",
			//design name
			"game freak" ,
			//design name html
			"game<br>freak",
			//design image
			"../images/products/game-freak/design.jpg",
			//product name
			"PS4 Pro bundle",
			//product Image
			"../images/products/game-freak/ps4-pro-bundle/bundle.png",
			//price dollars
			"23",
			//price cents
			"99",
			//short description
			"Game Freak inspired design from<br> industry expert David E. Hunt,<br> Identify yourself as the best in Pop Culture",
			//long description
			"Game Freak inspired design from<br> industry expert David E. Hunt,<br> Identify yourself as the best in Pop Culture",
			//author
			"David E. Hunt",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off<br>-Residue will be non-existent <br>on your PS4 bundle<br>-DIMENSIONS: 13.00 x 0.01 x 25.00<br>Controller:  6.24 x 2.00 x 3.90",
			//url
			"single-product-page?designName=game-freak&productName=ps4-pro-bundle"
		);
		// controller
		$gears_of_war['ps4-controller'] = new product (
		//four images of size 589x591
			"../images/products/gears-of-war/ps4-controller/560X460/Front.jpg",
			"../images/products/gears-of-war/ps4-controller/560X460/Back.jpg",
			"../images/products/gears-of-war/ps4-controller/560X460/Side.jpg",
			"../images/products/gears-of-war/ps4-controller/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/gears-of-war/ps4-controller/187X140/Front.jpg",
			"../images/products/gears-of-war/ps4-controller/187X140/Back.jpg",
			"../images/products/gears-of-war/ps4-controller/187X140/Side.jpg",
			"../images/products/gears-of-war/ps4-controller/187X140/Zoom.jpg",
			//design name
			"gears of war" ,
			//design name html
			"gears<br>of war",
			//design image
			"../images/products/gears-of-war/design.jpg",
			//product name
			"PS4 controller",
			//product Image
			"../images/products/gears-of-war/ps4-controller/controller.png",
			//price dollars
			"15",
			//price cents
			"99",
			//short description
			"Gears of War inspired design from<br> industry expert David E. Hunt,<br> Identify yourself as the best in gaming,<br> OfficalMerch  from Epic Games",
			//long description
			"Gears of War inspired design from<br> industry expert David E. Hunt,<br> Identify yourself as the best in gaming,<br> OfficalMerch  from Epic Games",
			//author
			"David E. Hunt",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off<br>-Residue will be non-existent on<br> your PS4 Controller<br>-DIMENSIONS: 6.24 x 2.00 x 3.90",
			//url
			"single-product-page?designName=gears-of-war&productName=ps4-controller",
			//sku
			"CUS/CONTR/TOP/20209961"
		);
		$gears_of_war['ps4-console'] = new product (
			//four images of size 589x591
			"../images/products/gears-of-war/ps4-console/560X460/Front.jpg",
			"../images/products/gears-of-war/ps4-console/560X460/Back.jpg",
			"../images/products/gears-of-war/ps4-console/560X460/Side.jpg",
			"../images/products/gears-of-war/ps4-console/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/gears-of-war/ps4-console/187X140/Front.jpg",
			"../images/products/gears-of-war/ps4-console/187X140/Back.jpg",
			"../images/products/gears-of-war/ps4-console/187X140/Side.jpg",
			"../images/products/gears-of-war/ps4-console/187X140/Zoom.jpg",
			//design name
			"gears of war" ,
			//design name html
			"gears<br>of war",
			//design image
			"../images/products/gears-of-war/design.jpg",
			//product name
			"PS4 console",
			//product Image
			"../images/products/gears-of-war/ps4-console/console.png",
			//price dollars
			"20",
			//price cents
			"99",
			//short description
			"Gears of War inspired design from<br> industry expert David E. Hunt,<br> Identify yourself as the best in gaming,<br> OfficalMerch  from Epic Games",
			//long description
			"Gears of War inspired design from<br> industry expert David E. Hunt,<br> Identify yourself as the best in gaming,<br> OfficalMerch  from Epic Games",
			//author
			"David E. Hunt",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off<br>-Residue will be non-existent <br>on your PS4 Console<br>-DIMENSIONS: 12.00 x 0.01 x 29.00",
			//url
			"single-product-page?designName=gears-of-war&productName=ps4-console",
			//sku
			"CUS/CONTR/TOP/20209962"
		);	
		$gears_of_war['ps4-slim-console'] = new product (
		//four images of size 589x591
			"../images/products/gears-of-war/ps4-slim-console/560X460/Front.jpg",
			"../images/products/gears-of-war/ps4-slim-console/560X460/Back.jpg",
			"../images/products/gears-of-war/ps4-slim-console/560X460/Side.jpg",
			"../images/products/gears-of-war/ps4-slim-console/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/gears-of-war/ps4-slim-console/187X140/Front.jpg",
			"../images/products/gears-of-war/ps4-slim-console/187X140/Back.jpg",
			"../images/products/gears-of-war/ps4-slim-console/187X140/Side.jpg",
			"../images/products/gears-of-war/ps4-slim-console/187X140/Zoom.jpg",
			//design name
			"gears of war" ,
			//design name html
			"gears<br>of war",
			//design image
			"../images/products/gears-of-war/design.jpg",
			//product name
			"PS4 Slim Console",
			//product Image
			"../images/products/gears-of-war/ps4-slim-console/console.png",
			//price dollars
			"20",
			//price cents
			"99",
			//short description
			"Gears of War inspired design from<br> industry expert David E. Hunt,<br> Identify yourself as the best in gaming,<br> OfficalMerch  from Epic Games",
			//long description
			"Gears of War inspired design from<br> industry expert David E. Hunt,<br> Identify yourself as the best in gaming,<br> OfficalMerch  from Epic Games",
			//author
			"David E. Hunt",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off<br>-Residue will be non-existent on<br> your PS4 Slim Console<br>-DIMENSIONS: 13.00 x 0.01 x 25.00",
			//url
			"single-product-page?designName=gears-of-war&productName=ps4-slim-console",
			//sku
			"CUS/CONTR/TOP/20209961"
		);
		$gears_of_war['ps4-pro-console'] = new product (
			//four images of size 589x591
			"../images/products/gears-of-war/ps4-pro-console/560X460/Front.jpg",
			"../images/products/gears-of-war/ps4-pro-console/560X460/Back.jpg",
			"../images/products/gears-of-war/ps4-pro-console/560X460/Side.jpg",
			"../images/products/gears-of-war/ps4-pro-console/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/gears-of-war/ps4-pro-console/187X140/Front.jpg",
			"../images/products/gears-of-war/ps4-pro-console/187X140/Back.jpg",
			"../images/products/gears-of-war/ps4-pro-console/187X140/Side.jpg",
			"../images/products/gears-of-war/ps4-pro-console/187X140/Zoom.jpg",
			//design name
			"gears of war" ,
			//design name html
			"gears<br>of war",
			//design image
			"../images/products/gears-of-war/design.jpg",
			//product name
			"PS4 Pro Console",
			//product Image
			"../images/products/gears-of-war/ps4-pro-console/console.png",
			//price dollars
			"20",
			//price cents
			"99",
			//short description
			"Gears of War inspired design from<br> industry expert David E. Hunt,<br> Identify yourself as the best in gaming,<br> OfficalMerch  from Epic Games",
			//long description
			"Gears of War inspired design from<br> industry expert David E. Hunt,<br> Identify yourself as the best in gaming,<br> OfficalMerch  from Epic Games",
			//author
			"David E. Hunt",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off<br>-Residue will be non-existent <br>on your PS4 Pro Console<br>-DIMENSIONS: 13.00 x 0.01 x 25.00",
			//url
			"single-product-page?designName=gears-of-war&productName=ps4-pro-console",
			//sku
			"CUS/CONTR/TOP/20209962"
		);
		$gears_of_war['ps4-bundle'] = new product (
			//four images of size 589x591
			"../images/products/gears-of-war/ps4-bundle/560X460/Front.jpg",
			"../images/products/gears-of-war/ps4-bundle/560X460/Back.jpg",
			"../images/products/gears-of-war/ps4-bundle/560X460/Side.jpg",
			"../images/products/gears-of-war/ps4-bundle/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/gears-of-war/ps4-bundle/187X140/Front.jpg",
			"../images/products/gears-of-war/ps4-bundle/187X140/Back.jpg",
			"../images/products/gears-of-war/ps4-bundle/187X140/Side.jpg",
			"../images/products/gears-of-war/ps4-bundle/187X140/Zoom.jpg",
			//design name
			"gears of war" ,
			//design name html
			"gears<br>of war",
			//design image
			"../images/products/gears-of-war/design.jpg",
			//product name
			"PS4 bundle",
			//product Image
			"../images/products/gears-of-war/ps4-bundle/bundle.png",
			//price dollars
			"23",
			//price cents
			"99",
			//short description
			"Gears of War inspired design from<br> industry expert David E. Hunt,<br> Identify yourself as the best in gaming,<br> OfficalMerch  from Epic Games",
			//long description
			"Gears of War inspired design from<br> industry expert David E. Hunt,<br> Identify yourself as the best in gaming,<br> OfficalMerch  from Epic Games",
			//author
			"David E. Hunt",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off<br>-Residue will be non-existent <br>on your PS4 bundle<br>-DIMENSIONS: 12.00 x 0.01 x 29.00<br>Controller:  6.24 x 2.00 x 3.90",
			//url
			"single-product-page?designName=gears-of-war&productName=ps4-bundle",
			//sku
			"CUS/CONTR/TOP/20209962"
		);	
		$gears_of_war['ps4-slim-bundle'] = new product (
		//four images of size 589x591
			"../images/products/gears-of-war/ps4-slim-bundle/560X460/Front.jpg",
			"../images/products/gears-of-war/ps4-slim-bundle/560X460/Back.jpg",
			"../images/products/gears-of-war/ps4-slim-bundle/560X460/Side.jpg",
			"../images/products/gears-of-war/ps4-slim-bundle/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/gears-of-war/ps4-slim-bundle/187X140/Front.jpg",
			"../images/products/gears-of-war/ps4-slim-bundle/187X140/Back.jpg",
			"../images/products/gears-of-war/ps4-slim-bundle/187X140/Side.jpg",
			"../images/products/gears-of-war/ps4-slim-bundle/187X140/Zoom.jpg",
			//design name
			"gears of war" ,
			//design name html
			"gears<br>of war",
			//design image
			"../images/products/gears-of-war/design.jpg",
			//product name
			"PS4 Slim bundle",
			//product Image
			"../images/products/gears-of-war/ps4-slim-bundle/bundle.png",
			//price dollars
			"23",
			//price cents
			"99",
			//short description
			"Gears of War inspired design from<br> industry expert David E. Hunt,<br> Identify yourself as the best in gaming,<br> OfficalMerch  from Epic Games",
			//long description
			"Gears of War inspired design from<br> industry expert David E. Hunt,<br> Identify yourself as the best in gaming,<br> OfficalMerch  from Epic Games",
			//author
			"David E. Hunt",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off<br>-Residue will be non-existent on<br> your PS4 Slim bundle<br>-DIMENSIONS: 13.00 x 0.01 x 25.00<br>Controller:  6.24 x 2.00 x 3.90",
			//url
			"single-product-page?designName=gears-of-war&productName=ps4-slim-bundle",
			//sku
			"CUS/CONTR/TOP/20209961"
		);
		$gears_of_war['ps4-pro-bundle'] = new product (
			//four images of size 589x591
			"../images/products/gears-of-war/ps4-pro-bundle/560X460/Front.jpg",
			"../images/products/gears-of-war/ps4-pro-bundle/560X460/Back.jpg",
			"../images/products/gears-of-war/ps4-pro-bundle/560X460/Side.jpg",
			"../images/products/gears-of-war/ps4-pro-bundle/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/gears-of-war/ps4-pro-bundle/187X140/Front.jpg",
			"../images/products/gears-of-war/ps4-pro-bundle/187X140/Back.jpg",
			"../images/products/gears-of-war/ps4-pro-bundle/187X140/Side.jpg",
			"../images/products/gears-of-war/ps4-pro-bundle/187X140/Zoom.jpg",
			//design name
			"gears of war" ,
			//design name html
			"gears<br>of war",
			//design image
			"../images/products/gears-of-war/design.jpg",
			//product name
			"PS4 Pro bundle",
			//product Image
			"../images/products/gears-of-war/ps4-pro-bundle/bundle.png",
			//price dollars
			"23",
			//price cents
			"99",
			//short description
			"Gears of War inspired design from<br> industry expert David E. Hunt,<br> Identify yourself as the best in gaming,<br> OfficalMerch  from Epic Games",
			//long description
			"Gears of War inspired design from<br> industry expert David E. Hunt,<br> Identify yourself as the best in gaming,<br> OfficalMerch  from Epic Games",
			//author
			"David E. Hunt",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off<br>-Residue will be non-existent <br>on your PS4 Pro bundle<br>-DIMENSIONS: 13.00 x 0.01 x 25.00<br>Controller:  6.24 x 2.00 x 3.90",
			//url
			"single-product-page?designName=gears-of-war&productName=ps4-pro-bundle",
			//sku
			"CUS/CONTR/TOP/20209962"
		);
		// controller
		$iron_man['ps4-controller'] = new product (
			//four images of size 589x591
			"../images/products/iron-man/ps4-controller/560X460/Front.jpg",
			"../images/products/iron-man/ps4-controller/560X460/Back.jpg",
			"../images/products/iron-man/ps4-controller/560X460/Side.jpg",
			"../images/products/iron-man/ps4-controller/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/iron-man/ps4-controller/187X140/Front.jpg",
			"../images/products/iron-man/ps4-controller/187X140/Back.jpg",
			"../images/products/iron-man/ps4-controller/187X140/Side.jpg",
			"../images/products/iron-man/ps4-controller/187X140/Zoom.jpg",
			//design name
			"iron man" ,
			//design name html
			"iron<br>man",
			//design image
			"../images/products/iron-man/design.jpg",
			//product name
			"PS4 controller",
			//product Image
			"../images/products/iron-man/ps4-controller/controller.png",
			//price dollars
			"15",
			//price cents
			"99",
			//short description
			"Iron Man inspired design from<br> industry expert Richard Eveland,<br> Identify yourself as the best in Pop Culture,<br> Offical Design from Marvel",
			//long description
			"Iron Man inspired design from<br> industry expert Richard Eveland,<br> Identify yourself as the best in Pop Culture,<br> Offical Design from Marvel",
			//author
			"Richard Eveland",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off<br>-Residue will be non-existent on<br> your PS4 Controller<br>-DIMENSIONS: 6.24 x 2.00 x 3.90",
			//url
			"single-product-page?designName=iron-man&productName=ps4-controller"
		);
		$iron_man['ps4-console'] = new product (
			//four images of size 589x591
			"../images/products/iron-man/ps4-console/560X460/Front.jpg",
			"../images/products/iron-man/ps4-console/560X460/Back.jpg",
			"../images/products/iron-man/ps4-console/560X460/Side.jpg",
			"../images/products/iron-man/ps4-console/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/iron-man/ps4-console/187X140/Front.jpg",
			"../images/products/iron-man/ps4-console/187X140/Back.jpg",
			"../images/products/iron-man/ps4-console/187X140/Side.jpg",
			"../images/products/iron-man/ps4-console/187X140/Zoom.jpg",
			//design name
			"iron man" ,
			//design name html
			"iron<br>man",
			//design image
			"../images/products/iron-man/design.jpg",
			//product name
			"PS4 console",
			//product Image
			"../images/products/iron-man/ps4-console/console.png",
			//price dollars
			"20",
			//price cents
			"99",
			//short description
			"Iron Man inspired design from<br> industry expert Richard Eveland,<br> Identify yourself as the best in Pop Culture,<br> Offical Design from Marvel",
			//long description
			"Iron Man inspired design from<br> industry expert Richard Eveland,<br> Identify yourself as the best in Pop Culture,<br> Offical Design from Marvel",
			//author
			"Richard Eveland",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off<br>-Residue will be non-existent <br>on your PS4 Console<br>-DIMENSIONS: 12.00 x 0.01 x 29.00",
			//url
			"single-product-page?designName=iron-man&productName=ps4-console"
		);
		$iron_man['ps4-slim-console'] = new product (
			//four images of size 589x591
			"../images/products/iron-man/ps4-slim-console/560X460/Front.jpg",
			"../images/products/iron-man/ps4-slim-console/560X460/Back.jpg",
			"../images/products/iron-man/ps4-slim-console/560X460/Side.jpg",
			"../images/products/iron-man/ps4-slim-console/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/iron-man/ps4-slim-console/187X140/Front.jpg",
			"../images/products/iron-man/ps4-slim-console/187X140/Back.jpg",
			"../images/products/iron-man/ps4-slim-console/187X140/Side.jpg",
			"../images/products/iron-man/ps4-slim-console/187X140/Zoom.jpg",
			//design name
			"iron man" ,
			//design name html
			"iron<br>man",
			//design image
			"../images/products/iron-man/design.jpg",
			//product name
			"PS4 Slim Console",
			//product Image
			"../images/products/iron-man/ps4-slim-console/console.png",
			//price dollars
			"20",
			//price cents
			"99",
			//short description
			"Iron Man inspired design from<br> industry expert Richard Eveland,<br> Identify yourself as the best in Pop Culture,<br> Offical Design from Marvel",
			//long description
			"Iron Man inspired design from<br> industry expert Richard Eveland,<br> Identify yourself as the best in Pop Culture,<br> Offical Design from Marvel",
			//author
			"Richard Eveland",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off<br>-Residue will be non-existent on<br> your PS4 Slim Console<br>-DIMENSIONS: 13.00 x 0.01 x 25.00",
			//url
			"single-product-page?designName=iron-man&productName=ps4-slim-console"
		);
		$iron_man['ps4-pro-console'] = new product (
			//four images of size 589x591
			"../images/products/iron-man/ps4-pro-console/560X460/Front.jpg",
			"../images/products/iron-man/ps4-pro-console/560X460/Back.jpg",
			"../images/products/iron-man/ps4-pro-console/560X460/Side.jpg",
			"../images/products/iron-man/ps4-pro-console/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/iron-man/ps4-pro-console/187X140/Front.jpg",
			"../images/products/iron-man/ps4-pro-console/187X140/Back.jpg",
			"../images/products/iron-man/ps4-pro-console/187X140/Side.jpg",
			"../images/products/iron-man/ps4-pro-console/187X140/Zoom.jpg",
			//design name
			"iron man" ,
			//design name html
			"iron<br>man",
			//design image
			"../images/products/iron-man/design.jpg",
			//product name
			"PS4 Pro console",
			//product Image
			"../images/products/iron-man/ps4-pro-console/console.png",
			//price dollars
			"20",
			//price cents
			"99",
			//short description
			"Iron Man inspired design from<br> industry expert Richard Eveland,<br> Identify yourself as the best in Pop Culture,<br> Offical Design from Marvel",
			//long description
			"Iron Man inspired design from<br> industry expert Richard Eveland,<br> Identify yourself as the best in Pop Culture,<br> Offical Design from Marvel",
			//author
			"Richard Eveland",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off<br>-Residue will be non-existent <br>on your PS4 Pro Console<br>-DIMENSIONS: 13.00 x 0.01 x 25.00",
			//url
			"single-product-page?designName=iron-man&productName=ps4-pro-console"
		);
		$iron_man['ps4-bundle'] = new product (
			//four images of size 589x591
			"../images/products/iron-man/ps4-bundle/560X460/Front.jpg",
			"../images/products/iron-man/ps4-bundle/560X460/Back.jpg",
			"../images/products/iron-man/ps4-bundle/560X460/Side.jpg",
			"../images/products/iron-man/ps4-bundle/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/iron-man/ps4-bundle/187X140/Front.jpg",
			"../images/products/iron-man/ps4-bundle/187X140/Back.jpg",
			"../images/products/iron-man/ps4-bundle/187X140/Side.jpg",
			"../images/products/iron-man/ps4-bundle/187X140/Zoom.jpg",
			//design name
			"iron man" ,
			//design name html
			"iron<br>man",
			//design image
			"../images/products/iron-man/design.jpg",
			//product name
			"PS4 bundle",
			//product Image
			"../images/products/iron-man/ps4-bundle/bundle.png",
			//price dollars
			"23",
			//price cents
			"99",
			//short description
			"Iron Man inspired design from<br> industry expert Richard Eveland,<br> Identify yourself as the best in Pop Culture,<br> Offical Design from Marvel",
			//long description
			"Iron Man inspired design from<br> industry expert Richard Eveland,<br> Identify yourself as the best in Pop Culture,<br> Offical Design from Marvel",
			//author
			"Richard Eveland",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off<br>-Residue will be non-existent <br>on your PS4 bundle<br>-DIMENSIONS: 12.00 x 0.01 x 29.00<br>Controller:  6.24 x 2.00 x 3.90",
			//url
			"single-product-page?designName=iron-man&productName=ps4-bundle"
		);
		$iron_man['ps4-slim-bundle'] = new product (
			//four images of size 589x591
			"../images/products/iron-man/ps4-slim-bundle/560X460/Front.jpg",
			"../images/products/iron-man/ps4-slim-bundle/560X460/Back.jpg",
			"../images/products/iron-man/ps4-slim-bundle/560X460/Side.jpg",
			"../images/products/iron-man/ps4-slim-bundle/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/iron-man/ps4-slim-bundle/187X140/Front.jpg",
			"../images/products/iron-man/ps4-slim-bundle/187X140/Back.jpg",
			"../images/products/iron-man/ps4-slim-bundle/187X140/Side.jpg",
			"../images/products/iron-man/ps4-slim-bundle/187X140/Zoom.jpg",
			//design name
			"iron man" ,
			//design name html
			"iron<br>man",
			//design image
			"../images/products/iron-man/design.jpg",
			//product name
			"PS4 Slim bundle",
			//product Image
			"../images/products/iron-man/ps4-slim-bundle/bundle.png",
			//price dollars
			"23",
			//price cents
			"99",
			//short description
			"Iron Man inspired design from<br> industry expert Richard Eveland,<br> Identify yourself as the best in Pop Culture,<br> Offical Design from Marvel",
			//long description
			"Iron Man inspired design from<br> industry expert Richard Eveland,<br> Identify yourself as the best in Pop Culture,<br> Offical Design from Marvel",
			//author
			"Richard Eveland",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off<br>-Residue will be non-existent on<br> your PS4 Slim bundle<br>-DIMENSIONS: 13.00 x 0.01 x 25.00<br>Controller:  6.24 x 2.00 x 3.90",
			//url
			"single-product-page?designName=iron-man&productName=ps4-slim-bundle"
		);
		$iron_man['ps4-pro-bundle'] = new product (
			//four images of size 589x591
			"../images/products/iron-man/ps4-pro-bundle/560X460/Front.jpg",
			"../images/products/iron-man/ps4-pro-bundle/560X460/Back.jpg",
			"../images/products/iron-man/ps4-pro-bundle/560X460/Side.jpg",
			"../images/products/iron-man/ps4-pro-bundle/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/iron-man/ps4-pro-bundle/187X140/Front.jpg",
			"../images/products/iron-man/ps4-pro-bundle/187X140/Back.jpg",
			"../images/products/iron-man/ps4-pro-bundle/187X140/Side.jpg",
			"../images/products/iron-man/ps4-pro-bundle/187X140/Zoom.jpg",
			//design name
			"iron man" ,
			//design name html
			"iron<br>man",
			//design image
			"../images/products/iron-man/design.jpg",
			//product name
			"PS4 Pro bundle",
			//product Image
			"../images/products/iron-man/ps4-pro-bundle/bundle.png",
			//price dollars
			"23",
			//price cents
			"99",
			//short description
			"Iron Man inspired design from<br> industry expert Richard Eveland,<br> Identify yourself as the best in Pop Culture,<br> Offical Design from Marvel",
			//long description
			"Iron Man inspired design from<br> industry expert Richard Eveland,<br> Identify yourself as the best in Pop Culture,<br> Offical Design from Marvel",
			//author
			"Richard Eveland",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off<br>-Residue will be non-existent <br>on your PS4 Pro bundle<br>-DIMENSIONS: 13.00 x 0.01 x 25.00<br>Controller:  6.24 x 2.00 x 3.90",
			//url
			"single-product-page?designName=iron-man&productName=ps4-pro-bundle"
		);
		// controller
		$naruto_and_sasuke['ps4-controller'] = new product (
		//four images of size 589x591
			"../images/products/naruto-and-sasuke/ps4-controller/560X460/Front.jpg",
			"../images/products/naruto-and-sasuke/ps4-controller/560X460/Back.jpg",
			"../images/products/naruto-and-sasuke/ps4-controller/560X460/Side.jpg",
			"../images/products/naruto-and-sasuke/ps4-controller/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/naruto-and-sasuke/ps4-controller/187X140/Front.jpg",
			"../images/products/naruto-and-sasuke/ps4-controller/187X140/Back.jpg",
			"../images/products/naruto-and-sasuke/ps4-controller/187X140/Side.jpg",
			"../images/products/naruto-and-sasuke/ps4-controller/187X140/Zoom.jpg",
			//design name
			"naruto and sasuke" ,
			//design name html
			"naruto<br> and sasuke",
			//design image
			"../images/products/naruto-and-sasuke/design.jpg",
			//product name
			"PS4 controller",
			//product Image
			"../images/products/naruto-and-sasuke/ps4-controller/controller.png",
			//price dollars
			"15",
			//price cents
			"99",
			//short description
			"naruto and sasuke Inspired Design by <br>Yoshie Akina, Japan's Top Designers,<br> If you are into anime<br> you cannot be living without this design.<br> The design represents the Final Fight<br> between Naruto & Sasuke in the series finale",
			//long description
			"naruto and sasuke Inspired Design by <br>Yoshie Akina, Japan's Top Designers,<br> If you are into anime<br> you cannot be living without this design.<br> The design represents the Final Fight<br> between Naruto & Sasuke in the series finale",
			//author
			"Yoshie Akina",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off<br>-Residue will be non-existent on<br> your PS4 Controller<br>-DIMENSIONS: 6.24 x 2.00 x 3.90",
			//url
			"single-product-page?designName=naruto-and-sasuke&productName=ps4-controller",
			//sku
			"CUS/CONTR/TOP/20210001"
		);
		$naruto_and_sasuke['ps4-console'] = new product (
			//four images of size 589x591
			"../images/products/naruto-and-sasuke/ps4-console/560X460/Front.jpg",
			"../images/products/naruto-and-sasuke/ps4-console/560X460/Back.jpg",
			"../images/products/naruto-and-sasuke/ps4-console/560X460/Side.jpg",
			"../images/products/naruto-and-sasuke/ps4-console/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/naruto-and-sasuke/ps4-console/187X140/Front.jpg",
			"../images/products/naruto-and-sasuke/ps4-console/187X140/Back.jpg",
			"../images/products/naruto-and-sasuke/ps4-console/187X140/Side.jpg",
			"../images/products/naruto-and-sasuke/ps4-console/187X140/Zoom.jpg",
			//design name
			"naruto and sasuke" ,
			//design name html
			"naruto<br> and sasuke",
			//design image
			"../images/products/naruto-and-sasuke/design.jpg",
			//product name
			"PS4 console",
			//product Image
			"../images/products/naruto-and-sasuke/ps4-console/console.png",
			//price dollars
			"20",
			//price cents
			"99",
			//short description
			"naruto and sasuke Inspired Design by <br>Yoshie Akina, Japan's Top Designers,<br> If you are into anime<br> you cannot be living without this design.<br> The design represents the Final Fight<br> between Naruto & Sasuke in the series finale",
			//long description
			"naruto and sasuke Inspired Design by <br>Yoshie Akina, Japan's Top Designers,<br> If you are into anime<br> you cannot be living without this design.<br> The design represents the Final Fight<br> between Naruto & Sasuke in the series finale",
			//author
			"Yoshie Akina",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off<br>-Residue will be non-existent <br>on your PS4 Console<br>-DIMENSIONS: 12.00 x 0.01 x 29.00",
			//url
			"single-product-page?designName=naruto-and-sasuke&productName=ps4-console",
			//sku
			"CUS/CONTR/TOP/20210002"
		);
		$naruto_and_sasuke['ps4-slim-console'] = new product (
		//four images of size 589x591
			"../images/products/naruto-and-sasuke/ps4-slim-console/560X460/Front.jpg",
			"../images/products/naruto-and-sasuke/ps4-slim-console/560X460/Back.jpg",
			"../images/products/naruto-and-sasuke/ps4-slim-console/560X460/Side.jpg",
			"../images/products/naruto-and-sasuke/ps4-slim-console/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/naruto-and-sasuke/ps4-slim-console/187X140/Front.jpg",
			"../images/products/naruto-and-sasuke/ps4-slim-console/187X140/Back.jpg",
			"../images/products/naruto-and-sasuke/ps4-slim-console/187X140/Side.jpg",
			"../images/products/naruto-and-sasuke/ps4-slim-console/187X140/Zoom.jpg",
			//design name
			"naruto and sasuke" ,
			//design name html
			"naruto<br> and sasuke",
			//design image
			"../images/products/naruto-and-sasuke/design.jpg",
			//product name
			"PS4 Slim Console",
			//product Image
			"../images/products/naruto-and-sasuke/ps4-slim-console/console.png",
			//price dollars
			"20",
			//price cents
			"99",
			//short description
			"naruto and sasuke Inspired Design by <br>Yoshie Akina, Japan's Top Designers,<br> If you are into anime<br> you cannot be living without this design.<br> The design represents the Final Fight<br> between Naruto & Sasuke in the series finale",
			//long description
			"naruto and sasuke Inspired Design by <br>Yoshie Akina, Japan's Top Designers,<br> If you are into anime<br> you cannot be living without this design.<br> The design represents the Final Fight<br> between Naruto & Sasuke in the series finale",
			//author
			"Yoshie Akina",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off<br>-Residue will be non-existent on<br> your PS4 Slim Console<br>-DIMENSIONS: 13.00 x 0.01 x 25.00",
			//url
			"single-product-page?designName=naruto-and-sasuke&productName=ps4-slim-console",
			//sku
			"CUS/CONTR/TOP/20210003"
		);
		$naruto_and_sasuke['ps4-pro-console'] = new product (
			//four images of size 589x591
			"../images/products/naruto-and-sasuke/ps4-pro-console/560X460/Front.jpg",
			"../images/products/naruto-and-sasuke/ps4-pro-console/560X460/Back.jpg",
			"../images/products/naruto-and-sasuke/ps4-pro-console/560X460/Side.jpg",
			"../images/products/naruto-and-sasuke/ps4-pro-console/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/naruto-and-sasuke/ps4-pro-console/187X140/Front.jpg",
			"../images/products/naruto-and-sasuke/ps4-pro-console/187X140/Back.jpg",
			"../images/products/naruto-and-sasuke/ps4-pro-console/187X140/Side.jpg",
			"../images/products/naruto-and-sasuke/ps4-pro-console/187X140/Zoom.jpg",
			//design name
			"naruto and sasuke" ,
			//design name html
			"naruto<br> and sasuke",
			//design image
			"../images/products/naruto-and-sasuke/design.jpg",
			//product name
			"PS4 Pro Console",
			//product Image
			"../images/products/naruto-and-sasuke/ps4-pro-console/console.png",
			//price dollars
			"20",
			//price cents
			"99",
			//short description
			"naruto and sasuke Inspired Design by <br>Yoshie Akina, Japan's Top Designers,<br> If you are into anime<br> you cannot be living without this design.<br> The design represents the Final Fight<br> between Naruto & Sasuke in the series finale",
			//long description
			"naruto and sasuke Inspired Design by <br>Yoshie Akina, Japan's Top Designers,<br> If you are into anime<br> you cannot be living without this design.<br> The design represents the Final Fight<br> between Naruto & Sasuke in the series finale",
			//author
			"Yoshie Akina",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off<br>-Residue will be non-existent <br>on your PS4 Pro Console<br>-DIMENSIONS: 13.00 x 0.01 x 25.00",
			//url
			"single-product-page?designName=naruto-and-sasuke&productName=ps4-pro-console",
			//sku
			"CUS/CONTR/TOP/20210004"
		);
		$naruto_and_sasuke['ps4-bundle'] = new product (
			//four images of size 589x591
			"../images/products/naruto-and-sasuke/ps4-bundle/560X460/Front.jpg",
			"../images/products/naruto-and-sasuke/ps4-bundle/560X460/Back.jpg",
			"../images/products/naruto-and-sasuke/ps4-bundle/560X460/Side.jpg",
			"../images/products/naruto-and-sasuke/ps4-bundle/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/naruto-and-sasuke/ps4-bundle/187X140/Front.jpg",
			"../images/products/naruto-and-sasuke/ps4-bundle/187X140/Back.jpg",
			"../images/products/naruto-and-sasuke/ps4-bundle/187X140/Side.jpg",
			"../images/products/naruto-and-sasuke/ps4-bundle/187X140/Zoom.jpg",
			//design name
			"naruto and sasuke" ,
			//design name html
			"naruto<br> and sasuke",
			//design image
			"../images/products/naruto-and-sasuke/design.jpg",
			//product name
			"PS4 bundle",
			//product Image
			"../images/products/naruto-and-sasuke/ps4-bundle/bundle.png",
			//price dollars
			"23",
			//price cents
			"99",
			//short description
			"naruto and sasuke Inspired Design by <br>Yoshie Akina, Japan's Top Designers,<br> If you are into anime<br> you cannot be living without this design.<br> The design represents the Final Fight<br> between Naruto & Sasuke in the series finale",
			//long description
			"naruto and sasuke Inspired Design by <br>Yoshie Akina, Japan's Top Designers,<br> If you are into anime<br> you cannot be living without this design.<br> The design represents the Final Fight<br> between Naruto & Sasuke in the series finale",
			//author
			"Yoshie Akina",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off<br>-Residue will be non-existent <br>on your PS4 bundle<br>-DIMENSIONS: 12.00 x 0.01 x 29.00<br>Controller:  6.24 x 2.00 x 3.90",
			//url
			"single-product-page?designName=naruto-and-sasuke&productName=ps4-bundle",
			//sku
			"CUS/CONTR/TOP/20210002"
		);
		$naruto_and_sasuke['ps4-slim-bundle'] = new product (
		//four images of size 589x591
			"../images/products/naruto-and-sasuke/ps4-slim-bundle/560X460/Front.jpg",
			"../images/products/naruto-and-sasuke/ps4-slim-bundle/560X460/Back.jpg",
			"../images/products/naruto-and-sasuke/ps4-slim-bundle/560X460/Side.jpg",
			"../images/products/naruto-and-sasuke/ps4-slim-bundle/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/naruto-and-sasuke/ps4-slim-bundle/187X140/Front.jpg",
			"../images/products/naruto-and-sasuke/ps4-slim-bundle/187X140/Back.jpg",
			"../images/products/naruto-and-sasuke/ps4-slim-bundle/187X140/Side.jpg",
			"../images/products/naruto-and-sasuke/ps4-slim-bundle/187X140/Zoom.jpg",
			//design name
			"naruto and sasuke" ,
			//design name html
			"naruto<br> and sasuke",
			//design image
			"../images/products/naruto-and-sasuke/design.jpg",
			//product name
			"PS4 Slim bundle",
			//product Image
			"../images/products/naruto-and-sasuke/ps4-slim-bundle/bundle.png",
			//price dollars
			"23",
			//price cents
			"99",
			//short description
			"naruto and sasuke Inspired Design by <br>Yoshie Akina, Japan's Top Designers,<br> If you are into anime<br> you cannot be living without this design.<br> The design represents the Final Fight<br> between Naruto & Sasuke in the series finale",
			//long description
			"naruto and sasuke Inspired Design by <br>Yoshie Akina, Japan's Top Designers,<br> If you are into anime<br> you cannot be living without this design.<br> The design represents the Final Fight<br> between Naruto & Sasuke in the series finale",
			//author
			"Yoshie Akina",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off<br>-Residue will be non-existent on<br> your PS4 Slim bundle<br>-DIMENSIONS: 13.00 x 0.01 x 25.00<br>Controller:  6.24 x 2.00 x 3.90",
			//url
			"single-product-page?designName=naruto-and-sasuke&productName=ps4-slim-bundle",
			//sku
			"CUS/CONTR/TOP/20210003"
		);
		$naruto_and_sasuke['ps4-pro-bundle'] = new product (
			//four images of size 589x591
			"../images/products/naruto-and-sasuke/ps4-pro-bundle/560X460/Front.jpg",
			"../images/products/naruto-and-sasuke/ps4-pro-bundle/560X460/Back.jpg",
			"../images/products/naruto-and-sasuke/ps4-pro-bundle/560X460/Side.jpg",
			"../images/products/naruto-and-sasuke/ps4-pro-bundle/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/naruto-and-sasuke/ps4-pro-bundle/187X140/Front.jpg",
			"../images/products/naruto-and-sasuke/ps4-pro-bundle/187X140/Back.jpg",
			"../images/products/naruto-and-sasuke/ps4-pro-bundle/187X140/Side.jpg",
			"../images/products/naruto-and-sasuke/ps4-pro-bundle/187X140/Zoom.jpg",
			//design name
			"naruto and sasuke" ,
			//design name html
			"naruto<br> and sasuke",
			//design image
			"../images/products/naruto-and-sasuke/design.jpg",
			//product name
			"PS4 Pro bundle",
			//product Image
			"../images/products/naruto-and-sasuke/ps4-pro-bundle/bundle.png",
			//price dollars
			"23",
			//price cents
			"99",
			//short description
			"naruto and sasuke Inspired Design by <br>Yoshie Akina, Japan's Top Designers,<br> If you are into anime<br> you cannot be living without this design.<br> The design represents the Final Fight<br> between Naruto & Sasuke in the series finale",
			//long description
			"naruto and sasuke Inspired Design by <br>Yoshie Akina, Japan's Top Designers,<br> If you are into anime<br> you cannot be living without this design.<br> The design represents the Final Fight<br> between Naruto & Sasuke in the series finale",
			//author
			"Yoshie Akina",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off<br>-Residue will be non-existent <br>on your PS4 Pro bundle<br>-DIMENSIONS: 13.00 x 0.01 x 25.00<br>Controller:  6.24 x 2.00 x 3.90",
			//url
			"single-product-page?designName=naruto-and-sasuke&productName=ps4-pro-bundle",
			//sku
			"CUS/CONTR/TOP/20210004"
		);
		// controller
		$naruto_shippuden['ps4-controller'] = new product (
			//four images of size 589x591
			"../images/products/naruto-shippuden/ps4-controller/560X460/Front.jpg",
			"../images/products/naruto-shippuden/ps4-controller/560X460/Back.jpg",
			"../images/products/naruto-shippuden/ps4-controller/560X460/Side.jpg",
			"../images/products/naruto-shippuden/ps4-controller/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/naruto-shippuden/ps4-controller/187X140/Front.jpg",
			"../images/products/naruto-shippuden/ps4-controller/187X140/Back.jpg",
			"../images/products/naruto-shippuden/ps4-controller/187X140/Side.jpg",
			"../images/products/naruto-shippuden/ps4-controller/187X140/Zoom.jpg",
			//design name
			"naruto shippuden" ,
			//design name html
			"naruto<br>shippuden",
			//design image
			"../images/products/naruto-shippuden/design.jpg",
			//product name
			"PS4 controller",
			//product Image
			"../images/products/naruto-shippuden/ps4-controller/controller.png",
			//price dollars
			"15",
			//price cents
			"99",
			//short description
			"Naruto Shippuden Inspired Design<br> by Yoshie Akina, Japan's Top Designers, <br>If you are into anime <br>you cannot be living without this design.<br> The design represents the relationship<br> between Naruto and The 9 tails Kurama",
			//long description
			"Naruto Shippuden Inspired Design<br> by Yoshie Akina, Japan's Top Designers, <br>If you are into anime <br>you cannot be living without this design.<br> The design represents the relationship<br> between Naruto and The 9 tails Kurama",
			//author
			"Yoshie Akina",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off<br>-Residue will be non-existent on<br> your PS4 Controller<br>-DIMENSIONS: 6.24 x 2.00 x 3.90",
			//url
			"single-product-page?designName=naruto-shippuden&productName=ps4-controller"
		);
		$naruto_shippuden['ps4-console'] = new product (
			//four images of size 589x591
			"../images/products/naruto-shippuden/ps4-console/560X460/Front.jpg",
			"../images/products/naruto-shippuden/ps4-console/560X460/Back.jpg",
			"../images/products/naruto-shippuden/ps4-console/560X460/Side.jpg",
			"../images/products/naruto-shippuden/ps4-console/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/naruto-shippuden/ps4-console/187X140/Front.jpg",
			"../images/products/naruto-shippuden/ps4-console/187X140/Back.jpg",
			"../images/products/naruto-shippuden/ps4-console/187X140/Side.jpg",
			"../images/products/naruto-shippuden/ps4-console/187X140/Zoom.jpg",
			//design name
			"naruto shippuden" ,
			//design name html
			"naruto<br>shippuden",
			//design image
			"../images/products/naruto-shippuden/design.jpg",
			//product name
			"PS4 console",
			//product Image
			"../images/products/naruto-shippuden/ps4-console/console.png",
			//price dollars
			"20",
			//price cents
			"99",
			//short description
			"Naruto Shippuden Inspired Design<br> by Yoshie Akina, Japan's Top Designers, <br>If you are into anime <br>you cannot be living without this design.<br> The design represents the relationship<br> between Naruto and The 9 tails Kurama",
			//long description
			"Naruto Shippuden Inspired Design<br> by Yoshie Akina, Japan's Top Designers, <br>If you are into anime <br>you cannot be living without this design.<br> The design represents the relationship<br> between Naruto and The 9 tails Kurama",
			//author
			"Yoshie Akina",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off<br>-Residue will be non-existent <br>on your PS4 Console<br>-DIMENSIONS: 12.00 x 0.01 x 29.00",
			//url
			"single-product-page?designName=naruto-shippuden&productName=ps4-console"
		);
		$naruto_shippuden['ps4-slim-console'] = new product (
			//four images of size 589x591
			"../images/products/naruto-shippuden/ps4-slim-console/560X460/Front.jpg",
			"../images/products/naruto-shippuden/ps4-slim-console/560X460/Back.jpg",
			"../images/products/naruto-shippuden/ps4-slim-console/560X460/Side.jpg",
			"../images/products/naruto-shippuden/ps4-slim-console/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/naruto-shippuden/ps4-slim-console/187X140/Front.jpg",
			"../images/products/naruto-shippuden/ps4-slim-console/187X140/Back.jpg",
			"../images/products/naruto-shippuden/ps4-slim-console/187X140/Side.jpg",
			"../images/products/naruto-shippuden/ps4-slim-console/187X140/Zoom.jpg",
			//design name
			"naruto shippuden" ,
			//design name html
			"naruto<br>shippuden",
			//design image
			"../images/products/naruto-shippuden/design.jpg",
			//product name
			"PS4 Slim Console",
			//product Image
			"../images/products/naruto-shippuden/ps4-slim-console/console.png",
			//price dollars
			"20",
			//price cents
			"99",
			//short description
			"Naruto Shippuden Inspired Design<br> by Yoshie Akina, Japan's Top Designers, <br>If you are into anime <br>you cannot be living without this design.<br> The design represents the relationship<br> between Naruto and The 9 tails Kurama",
			//long description
			"Naruto Shippuden Inspired Design<br> by Yoshie Akina, Japan's Top Designers, <br>If you are into anime <br>you cannot be living without this design.<br> The design represents the relationship<br> between Naruto and The 9 tails Kurama",
			//author
			"Yoshie Akina",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off<br>-Residue will be non-existent on<br> your PS4 Slim Console<br>-DIMENSIONS: 13.00 x 0.01 x 25.00",
			//url
			"single-product-page?designName=naruto-shippuden&productName=ps4-slim-console"
		);
		$naruto_shippuden['ps4-pro-console'] = new product (
			//four images of size 589x591
			"../images/products/naruto-shippuden/ps4-pro-console/560X460/Front.jpg",
			"../images/products/naruto-shippuden/ps4-pro-console/560X460/Back.jpg",
			"../images/products/naruto-shippuden/ps4-pro-console/560X460/Side.jpg",
			"../images/products/naruto-shippuden/ps4-pro-console/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/naruto-shippuden/ps4-pro-console/187X140/Front.jpg",
			"../images/products/naruto-shippuden/ps4-pro-console/187X140/Back.jpg",
			"../images/products/naruto-shippuden/ps4-pro-console/187X140/Side.jpg",
			"../images/products/naruto-shippuden/ps4-pro-console/187X140/Zoom.jpg",
			//design name
			"naruto shippuden" ,
			//design name html
			"naruto<br>shippuden",
			//design image
			"../images/products/naruto-shippuden/design.jpg",
			//product name
			"PS4 Pro Console",
			//product Image
			"../images/products/naruto-shippuden/ps4-pro-console/console.png",
			//price dollars
			"20",
			//price cents
			"99",
			//short description
			"Naruto Shippuden Inspired Design<br> by Yoshie Akina, Japan's Top Designers, <br>If you are into anime <br>you cannot be living without this design.<br> The design represents the relationship<br> between Naruto and The 9 tails Kurama",
			//long description
			"Naruto Shippuden Inspired Design<br> by Yoshie Akina, Japan's Top Designers, <br>If you are into anime <br>you cannot be living without this design.<br> The design represents the relationship<br> between Naruto and The 9 tails Kurama",
			//author
			"Yoshie Akina",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off<br>-Residue will be non-existent <br>on your PS4 Pro Console<br>-DIMENSIONS: 13.00 x 0.01 x 25.00",
			//url
			"single-product-page?designName=naruto-shippuden&productName=ps4-pro-console"
		);
		$naruto_shippuden['ps4-bundle'] = new product (
			//four images of size 589x591
			"../images/products/naruto-shippuden/ps4-bundle/560X460/Front.jpg",
			"../images/products/naruto-shippuden/ps4-bundle/560X460/Back.jpg",
			"../images/products/naruto-shippuden/ps4-bundle/560X460/Side.jpg",
			"../images/products/naruto-shippuden/ps4-bundle/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/naruto-shippuden/ps4-bundle/187X140/Front.jpg",
			"../images/products/naruto-shippuden/ps4-bundle/187X140/Back.jpg",
			"../images/products/naruto-shippuden/ps4-bundle/187X140/Side.jpg",
			"../images/products/naruto-shippuden/ps4-bundle/187X140/Zoom.jpg",
			//design name
			"naruto shippuden" ,
			//design name html
			"naruto<br>shippuden",
			//design image
			"../images/products/naruto-shippuden/design.jpg",
			//product name
			"PS4 bundle",
			//product Image
			"../images/products/naruto-shippuden/ps4-bundle/bundle.png",
			//price dollars
			"23",
			//price cents
			"99",
			//short description
			"Naruto Shippuden Inspired Design<br> by Yoshie Akina, Japan's Top Designers, <br>If you are into anime <br>you cannot be living without this design.<br> The design represents the relationship<br> between Naruto and The 9 tails Kurama",
			//long description
			"Naruto Shippuden Inspired Design<br> by Yoshie Akina, Japan's Top Designers, <br>If you are into anime <br>you cannot be living without this design.<br> The design represents the relationship<br> between Naruto and The 9 tails Kurama",
			//author
			"Yoshie Akina",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off<br>-Residue will be non-existent <br>on your PS4 bundle<br>-DIMENSIONS: 12.00 x 0.01 x 29.00<br>Controller:  6.24 x 2.00 x 3.90",
			//url
			"single-product-page?designName=naruto-shippuden&productName=ps4-bundle"
		);
		$naruto_shippuden['ps4-slim-bundle'] = new product (
			//four images of size 589x591
			"../images/products/naruto-shippuden/ps4-slim-bundle/560X460/Front.jpg",
			"../images/products/naruto-shippuden/ps4-slim-bundle/560X460/Back.jpg",
			"../images/products/naruto-shippuden/ps4-slim-bundle/560X460/Side.jpg",
			"../images/products/naruto-shippuden/ps4-slim-bundle/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/naruto-shippuden/ps4-slim-bundle/187X140/Front.jpg",
			"../images/products/naruto-shippuden/ps4-slim-bundle/187X140/Back.jpg",
			"../images/products/naruto-shippuden/ps4-slim-bundle/187X140/Side.jpg",
			"../images/products/naruto-shippuden/ps4-slim-bundle/187X140/Zoom.jpg",
			//design name
			"naruto shippuden" ,
			//design name html
			"naruto<br>shippuden",
			//design image
			"../images/products/naruto-shippuden/design.jpg",
			//product name
			"PS4 Slim bundle",
			//product Image
			"../images/products/naruto-shippuden/ps4-slim-bundle/bundle.png",
			//price dollars
			"23",
			//price cents
			"99",
			//short description
			"Naruto Shippuden Inspired Design<br> by Yoshie Akina, Japan's Top Designers, <br>If you are into anime <br>you cannot be living without this design.<br> The design represents the relationship<br> between Naruto and The 9 tails Kurama",
			//long description
			"Naruto Shippuden Inspired Design<br> by Yoshie Akina, Japan's Top Designers, <br>If you are into anime <br>you cannot be living without this design.<br> The design represents the relationship<br> between Naruto and The 9 tails Kurama",
			//author
			"Yoshie Akina",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off<br>-Residue will be non-existent on<br> your PS4 Slim bundle<br>-DIMENSIONS: 13.00 x 0.01 x 25.00<br>Controller:  6.24 x 2.00 x 3.90",
			//url
			"single-product-page?designName=naruto-shippuden&productName=ps4-slim-bundle"
		);
		$naruto_shippuden['ps4-pro-bundle'] = new product (
			//four images of size 589x591
			"../images/products/naruto-shippuden/ps4-pro-bundle/560X460/Front.jpg",
			"../images/products/naruto-shippuden/ps4-pro-bundle/560X460/Back.jpg",
			"../images/products/naruto-shippuden/ps4-pro-bundle/560X460/Side.jpg",
			"../images/products/naruto-shippuden/ps4-pro-bundle/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/naruto-shippuden/ps4-pro-bundle/187X140/Front.jpg",
			"../images/products/naruto-shippuden/ps4-pro-bundle/187X140/Back.jpg",
			"../images/products/naruto-shippuden/ps4-pro-bundle/187X140/Side.jpg",
			"../images/products/naruto-shippuden/ps4-pro-bundle/187X140/Zoom.jpg",
			//design name
			"naruto shippuden" ,
			//design name html
			"naruto<br>shippuden",
			//design image
			"../images/products/naruto-shippuden/design.jpg",
			//product name
			"PS4 Pro bundle",
			//product Image
			"../images/products/naruto-shippuden/ps4-pro-bundle/bundle.png",
			//price dollars
			"23",
			//price cents
			"99",
			//short description
			"Naruto Shippuden Inspired Design<br> by Yoshie Akina, Japan's Top Designers, <br>If you are into anime <br>you cannot be living without this design.<br> The design represents the relationship<br> between Naruto and The 9 tails Kurama",
			//long description
			"Naruto Shippuden Inspired Design<br> by Yoshie Akina, Japan's Top Designers, <br>If you are into anime <br>you cannot be living without this design.<br> The design represents the relationship<br> between Naruto and The 9 tails Kurama",
			//author
			"Yoshie Akina",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off<br>-Residue will be non-existent <br>on your PS4 Pro bundle<br>-DIMENSIONS: 13.00 x 0.01 x 25.00<br>Controller:  6.24 x 2.00 x 3.90",
			//url
			"single-product-page?designName=naruto-shippuden&productName=ps4-pro-bundle"
		);
		// controller
		$patriot['ps4-controller'] = new product (
			//four images of size 589x591
			"../images/products/patriot/ps4-controller/560X460/Front.jpg",
			"../images/products/patriot/ps4-controller/560X460/Back.jpg",
			"../images/products/patriot/ps4-controller/560X460/Side.jpg",
			"../images/products/patriot/ps4-controller/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/patriot/ps4-controller/187X140/Front.jpg",
			"../images/products/patriot/ps4-controller/187X140/Back.jpg",
			"../images/products/patriot/ps4-controller/187X140/Side.jpg",
			"../images/products/patriot/ps4-controller/187X140/Zoom.jpg",
			//design name
			"patriot" ,
			//design name html
			"patriot",
			//design image
			"../images/products/patriot/design.jpg",
			//product name
			"PS4 controller",
			//product Image
			"../images/products/patriot/ps4-controller/controller.png",
			//price dollars
			"15",
			//price cents
			"99",
			//short description
			"America inspired design from<br> industry expert David E.Hunt,<br> Identify yourself as the best patriot,<br> OfficalMerch from America",
			//long description
			"America inspired design from<br> industry expert David E.Hunt,<br> Identify yourself as the best patriot,<br> OfficalMerch from America",
			//author
			"David E.Hunt",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off<br>-Residue will be non-existent on<br> your PS4 Controller<br>-DIMENSIONS: 6.24 x 2.00 x 3.90",
			//url
			"single-product-page?designName=patriot&productName=ps4-controller"
		);
		$patriot['ps4-console'] = new product (
			//four images of size 589x591
			"../images/products/patriot/ps4-console/560X460/Front.jpg",
			"../images/products/patriot/ps4-console/560X460/Back.jpg",
			"../images/products/patriot/ps4-console/560X460/Side.jpg",
			"../images/products/patriot/ps4-console/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/patriot/ps4-console/187X140/Front.jpg",
			"../images/products/patriot/ps4-console/187X140/Back.jpg",
			"../images/products/patriot/ps4-console/187X140/Side.jpg",
			"../images/products/patriot/ps4-console/187X140/Zoom.jpg",
			//design name
			"patriot" ,
			//design name html
			"patriot",
			//design image
			"../images/products/patriot/design.jpg",
			//product name
			"PS4 console",
			//product Image
			"../images/products/patriot/ps4-console/console.png",
			//price dollars
			"20",
			//price cents
			"99",
			//short description
			"America inspired design from<br> industry expert David E.Hunt,<br> Identify yourself as the best patriot,<br> OfficalMerch from America",
			//long description
			"America inspired design from<br> industry expert David E.Hunt,<br> Identify yourself as the best patriot,<br> OfficalMerch from America",
			//author
			"David E.Hunt",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off<br>-Residue will be non-existent <br>on your PS4 Console<br>-DIMENSIONS: 12.00 x 0.01 x 29.00",
			//url
			"single-product-page?designName=patriot&productName=ps4-console"
		);
		$patriot['ps4-slim-console'] = new product (
			//four images of size 589x591
			"../images/products/patriot/ps4-slim-console/560X460/Front.jpg",
			"../images/products/patriot/ps4-slim-console/560X460/Back.jpg",
			"../images/products/patriot/ps4-slim-console/560X460/Side.jpg",
			"../images/products/patriot/ps4-slim-console/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/patriot/ps4-slim-console/187X140/Front.jpg",
			"../images/products/patriot/ps4-slim-console/187X140/Back.jpg",
			"../images/products/patriot/ps4-slim-console/187X140/Side.jpg",
			"../images/products/patriot/ps4-slim-console/187X140/Zoom.jpg",
			//design name
			"patriot" ,
			//design name html
			"patriot",
			//design image
			"../images/products/patriot/design.jpg",
			//product name
			"PS4 Slim Console",
			//product Image
			"../images/products/patriot/ps4-slim-console/console.png",
			//price dollars
			"20",
			//price cents
			"99",
			//short description
			"America inspired design from<br> industry expert David E.Hunt,<br> Identify yourself as the best patriot,<br> OfficalMerch from America",
			//long description
			"America inspired design from<br> industry expert David E.Hunt,<br> Identify yourself as the best patriot,<br> OfficalMerch from America",
			//author
			"David E.Hunt",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off<br>-Residue will be non-existent on<br> your PS4 Slim Console<br>-DIMENSIONS: 13.00 x 0.01 x 25.00",
			//url
			"single-product-page?designName=patriot&productName=ps4-slim-console"
		);
		$patriot['ps4-pro-console'] = new product (
			//four images of size 589x591
			"../images/products/patriot/ps4-pro-console/560X460/Front.jpg",
			"../images/products/patriot/ps4-pro-console/560X460/Back.jpg",
			"../images/products/patriot/ps4-pro-console/560X460/Side.jpg",
			"../images/products/patriot/ps4-pro-console/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/patriot/ps4-pro-console/187X140/Front.jpg",
			"../images/products/patriot/ps4-pro-console/187X140/Back.jpg",
			"../images/products/patriot/ps4-pro-console/187X140/Side.jpg",
			"../images/products/patriot/ps4-pro-console/187X140/Zoom.jpg",
			//design name
			"patriot" ,
			//design name html
			"patriot",
			//design image
			"../images/products/patriot/design.jpg",
			//product name
			"PS4 Pro Console",
			//product Image
			"../images/products/patriot/ps4-pro-console/console.png",
			//price dollars
			"20",
			//price cents
			"99",
			//short description
			"America inspired design from<br> industry expert David E.Hunt,<br> Identify yourself as the best patriot,<br> OfficalMerch from America",
			//long description
			"America inspired design from<br> industry expert David E.Hunt,<br> Identify yourself as the best patriot,<br> OfficalMerch from America",
			//author
			"David E.Hunt",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off<br>-Residue will be non-existent <br>on your PS4 Pro Console<br>-DIMENSIONS: 13.00 x 0.01 x 25.00",
			//url
			"single-product-page?designName=patriot&productName=ps4-pro-console"
		);
		$patriot['ps4-bundle'] = new product (
			//four images of size 589x591
			"../images/products/patriot/ps4-bundle/560X460/Front.jpg",
			"../images/products/patriot/ps4-bundle/560X460/Back.jpg",
			"../images/products/patriot/ps4-bundle/560X460/Side.jpg",
			"../images/products/patriot/ps4-bundle/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/patriot/ps4-bundle/187X140/Front.jpg",
			"../images/products/patriot/ps4-bundle/187X140/Back.jpg",
			"../images/products/patriot/ps4-bundle/187X140/Side.jpg",
			"../images/products/patriot/ps4-bundle/187X140/Zoom.jpg",
			//design name
			"patriot" ,
			//design name html
			"patriot",
			//design image
			"../images/products/patriot/design.jpg",
			//product name
			"PS4 bundle",
			//product Image
			"../images/products/patriot/ps4-bundle/bundle.png",
			//price dollars
			"23",
			//price cents
			"99",
			//short description
			"America inspired design from<br> industry expert David E.Hunt,<br> Identify yourself as the best patriot,<br> OfficalMerch from America",
			//long description
			"America inspired design from<br> industry expert David E.Hunt,<br> Identify yourself as the best patriot,<br> OfficalMerch from America",
			//author
			"David E.Hunt",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off<br>-Residue will be non-existent <br>on your PS4 bundle<br>-DIMENSIONS: 12.00 x 0.01 x 29.00<br>Controller:  6.24 x 2.00 x 3.90",
			//url
			"single-product-page?designName=patriot&productName=ps4-bundle"
		);
		$patriot['ps4-slim-bundle'] = new product (
			//four images of size 589x591
			"../images/products/patriot/ps4-slim-bundle/560X460/Front.jpg",
			"../images/products/patriot/ps4-slim-bundle/560X460/Back.jpg",
			"../images/products/patriot/ps4-slim-bundle/560X460/Side.jpg",
			"../images/products/patriot/ps4-slim-bundle/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/patriot/ps4-slim-bundle/187X140/Front.jpg",
			"../images/products/patriot/ps4-slim-bundle/187X140/Back.jpg",
			"../images/products/patriot/ps4-slim-bundle/187X140/Side.jpg",
			"../images/products/patriot/ps4-slim-bundle/187X140/Zoom.jpg",
			//design name
			"patriot" ,
			//design name html
			"patriot",
			//design image
			"../images/products/patriot/design.jpg",
			//product name
			"PS4 Slim bundle",
			//product Image
			"../images/products/patriot/ps4-slim-bundle/bundle.png",
			//price dollars
			"23",
			//price cents
			"99",
			//short description
			"America inspired design from<br> industry expert David E.Hunt,<br> Identify yourself as the best patriot,<br> OfficalMerch from America",
			//long description
			"America inspired design from<br> industry expert David E.Hunt,<br> Identify yourself as the best patriot,<br> OfficalMerch from America",
			//author
			"David E.Hunt",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off<br>-Residue will be non-existent on<br> your PS4 Slim bundle<br>-DIMENSIONS: 13.00 x 0.01 x 25.00<br>Controller:  6.24 x 2.00 x 3.90",
			//url
			"single-product-page?designName=patriot&productName=ps4-slim-bundle"
		);
		$patriot['ps4-pro-bundle'] = new product (
			//four images of size 589x591
			"../images/products/patriot/ps4-pro-bundle/560X460/Front.jpg",
			"../images/products/patriot/ps4-pro-bundle/560X460/Back.jpg",
			"../images/products/patriot/ps4-pro-bundle/560X460/Side.jpg",
			"../images/products/patriot/ps4-pro-bundle/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/patriot/ps4-pro-bundle/187X140/Front.jpg",
			"../images/products/patriot/ps4-pro-bundle/187X140/Back.jpg",
			"../images/products/patriot/ps4-pro-bundle/187X140/Side.jpg",
			"../images/products/patriot/ps4-pro-bundle/187X140/Zoom.jpg",
			//design name
			"patriot" ,
			//design name html
			"patriot",
			//design image
			"../images/products/patriot/design.jpg",
			//product name
			"PS4 Pro bundle",
			//product Image
			"../images/products/patriot/ps4-pro-bundle/bundle.png",
			//price dollars
			"23",
			//price cents
			"99",
			//short description
			"America inspired design from<br> industry expert David E.Hunt,<br> Identify yourself as the best patriot,<br> OfficalMerch from America",
			//long description
			"America inspired design from<br> industry expert David E.Hunt,<br> Identify yourself as the best patriot,<br> OfficalMerch from America",
			//author
			"David E.Hunt",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off<br>-Residue will be non-existent <br>on your PS4 Pro bundle<br>-DIMENSIONS: 13.00 x 0.01 x 25.00<br>Controller:  6.24 x 2.00 x 3.90",
			//url
			"single-product-page?designName=patriot&productName=ps4-pro-bundle"
		);
		// controller
		$skull_kaleidoscope['ps4-controller'] = new product (
			//four images of size 589x591
			"../images/products/skull-kaleidoscope/ps4-controller/560X460/Front.jpg",
			"../images/products/skull-kaleidoscope/ps4-controller/560X460/Back.jpg",
			"../images/products/skull-kaleidoscope/ps4-controller/560X460/Side.jpg",
			"../images/products/skull-kaleidoscope/ps4-controller/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/skull-kaleidoscope/ps4-controller/187X140/Front.jpg",
			"../images/products/skull-kaleidoscope/ps4-controller/187X140/Back.jpg",
			"../images/products/skull-kaleidoscope/ps4-controller/187X140/Side.jpg",
			"../images/products/skull-kaleidoscope/ps4-controller/187X140/Zoom.jpg",
			//design name
			"skull kaleidoscope" ,
			//design name html
			"skull<br>kaleidoscope",
			//design image
			"../images/products/skull-kaleidoscope/design.jpg",
			//product name
			"PS4 controller",
			//product Image
			"../images/products/skull-kaleidoscope/ps4-controller/controller.png",
			//price dollars
			"15",
			//price cents
			"99",
			//short description
			"Skull Kaliedoscope inspired design from<br> industry expert Edward Niro,<br> Identify yourself as the best in Pop Culture",
			//long description
			"Skull Kaliedoscope inspired design from<br> industry expert Edward Niro,<br> Identify yourself as the best in Pop Culture",
			//author
			"Edward Niro",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off<br>-Residue will be non-existent on<br> your PS4 Controller<br>-DIMENSIONS: 6.24 x 2.00 x 3.90",
			//url
			"single-product-page?designName=skull-kaleidoscope&productName=ps4-controller"
		);
		$skull_kaleidoscope['ps4-console'] = new product (
			//four images of size 589x591
			"../images/products/skull-kaleidoscope/ps4-console/560X460/Front.jpg",
			"../images/products/skull-kaleidoscope/ps4-console/560X460/Back.jpg",
			"../images/products/skull-kaleidoscope/ps4-console/560X460/Side.jpg",
			"../images/products/skull-kaleidoscope/ps4-console/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/skull-kaleidoscope/ps4-console/187X140/Front.jpg",
			"../images/products/skull-kaleidoscope/ps4-console/187X140/Back.jpg",
			"../images/products/skull-kaleidoscope/ps4-console/187X140/Side.jpg",
			"../images/products/skull-kaleidoscope/ps4-console/187X140/Zoom.jpg",
			//design name
			"skull kaleidoscope" ,
			//design name html
			"skull<br>kaleidoscope",
			//design image
			"../images/products/skull-kaleidoscope/design.jpg",
			//product name
			"PS4 console",
			//product Image
			"../images/products/skull-kaleidoscope/ps4-console/console.png",
			//price dollars
			"20",
			//price cents
			"99",
			//short description
			"Skull Kaliedoscope inspired design from<br> industry expert Edward Niro,<br> Identify yourself as the best in Pop Culture",
			//long description
			"Skull Kaliedoscope inspired design from<br> industry expert Edward Niro,<br> Identify yourself as the best in Pop Culture",
			//author
			"Edward Niro",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off<br>-Residue will be non-existent <br>on your PS4 Console<br>-DIMENSIONS: 12.00 x 0.01 x 29.00",
			//url
			"single-product-page?designName=skull-kaleidoscope&productName=ps4-console"
		);
		$skull_kaleidoscope['ps4-slim-console'] = new product (
			//four images of size 589x591
			"../images/products/skull-kaleidoscope/ps4-slim-console/560X460/Front.jpg",
			"../images/products/skull-kaleidoscope/ps4-slim-console/560X460/Back.jpg",
			"../images/products/skull-kaleidoscope/ps4-slim-console/560X460/Side.jpg",
			"../images/products/skull-kaleidoscope/ps4-slim-console/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/skull-kaleidoscope/ps4-slim-console/187X140/Front.jpg",
			"../images/products/skull-kaleidoscope/ps4-slim-console/187X140/Back.jpg",
			"../images/products/skull-kaleidoscope/ps4-slim-console/187X140/Side.jpg",
			"../images/products/skull-kaleidoscope/ps4-slim-console/187X140/Zoom.jpg",
			//design name
			"skull kaleidoscope" ,
			//design name html
			"skull<br>kaleidoscope",
			//design image
			"../images/products/skull-kaleidoscope/design.jpg",
			//product name
			"PS4 Slim Console",
			//product Image
			"../images/products/skull-kaleidoscope/ps4-slim-console/console.png",
			//price dollars
			"20",
			//price cents
			"99",
			//short description
			"Skull Kaliedoscope inspired design from<br> industry expert Edward Niro,<br> Identify yourself as the best in Pop Culture",
			//long description
			"Skull Kaliedoscope inspired design from<br> industry expert Edward Niro,<br> Identify yourself as the best in Pop Culture",
			//author
			"Edward Niro",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off<br>-Residue will be non-existent on<br> your PS4 Slim Console<br>-DIMENSIONS: 13.00 x 0.01 x 25.00",
			//url
			"single-product-page?designName=skull-kaleidoscope&productName=ps4-slim-console"
		);
		$skull_kaleidoscope['ps4-pro-console'] = new product (
			//four images of size 589x591
			"../images/products/skull-kaleidoscope/ps4-pro-console/560X460/Front.jpg",
			"../images/products/skull-kaleidoscope/ps4-pro-console/560X460/Back.jpg",
			"../images/products/skull-kaleidoscope/ps4-pro-console/560X460/Side.jpg",
			"../images/products/skull-kaleidoscope/ps4-pro-console/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/skull-kaleidoscope/ps4-pro-console/187X140/Front.jpg",
			"../images/products/skull-kaleidoscope/ps4-pro-console/187X140/Back.jpg",
			"../images/products/skull-kaleidoscope/ps4-pro-console/187X140/Side.jpg",
			"../images/products/skull-kaleidoscope/ps4-pro-console/187X140/Zoom.jpg",
			//design name
			"skull kaleidoscope" ,
			//design name html
			"skull<br>kaleidoscope",
			//design image
			"../images/products/skull-kaleidoscope/design.jpg",
			//product name
			"PS4 Pro Console",
			//product Image
			"../images/products/skull-kaleidoscope/ps4-pro-console/console.png",
			//price dollars
			"20",
			//price cents
			"99",
			//short description
			"Skull Kaliedoscope inspired design from<br> industry expert Edward Niro,<br> Identify yourself as the best in Pop Culture",
			//long description
			"Skull Kaliedoscope inspired design from<br> industry expert Edward Niro,<br> Identify yourself as the best in Pop Culture",
			//author
			"Edward Niro",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off<br>-Residue will be non-existent <br>on your PS4 Pro Console<br>-DIMENSIONS: 13.00 x 0.01 x 25.00",
			//url
			"single-product-page?designName=skull-kaleidoscope&productName=ps4-pro-console"
		);
		$skull_kaleidoscope['ps4-bundle'] = new product (
			//four images of size 589x591
			"../images/products/skull-kaleidoscope/ps4-bundle/560X460/Front.jpg",
			"../images/products/skull-kaleidoscope/ps4-bundle/560X460/Back.jpg",
			"../images/products/skull-kaleidoscope/ps4-bundle/560X460/Side.jpg",
			"../images/products/skull-kaleidoscope/ps4-bundle/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/skull-kaleidoscope/ps4-bundle/187X140/Front.jpg",
			"../images/products/skull-kaleidoscope/ps4-bundle/187X140/Back.jpg",
			"../images/products/skull-kaleidoscope/ps4-bundle/187X140/Side.jpg",
			"../images/products/skull-kaleidoscope/ps4-bundle/187X140/Zoom.jpg",
			//design name
			"skull kaleidoscope" ,
			//design name html
			"skull<br>kaleidoscope",
			//design image
			"../images/products/skull-kaleidoscope/design.jpg",
			//product name
			"PS4 bundle",
			//product Image
			"../images/products/skull-kaleidoscope/ps4-bundle/bundle.png",
			//price dollars
			"23",
			//price cents
			"99",
			//short description
			"Skull Kaliedoscope inspired design from<br> industry expert Edward Niro,<br> Identify yourself as the best in Pop Culture",
			//long description
			"Skull Kaliedoscope inspired design from<br> industry expert Edward Niro,<br> Identify yourself as the best in Pop Culture",
			//author
			"Edward Niro",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off<br>-Residue will be non-existent <br>on your PS4 bundle<br>-DIMENSIONS: 12.00 x 0.01 x 29.00<br>Controller:  6.24 x 2.00 x 3.90",
			//url
			"single-product-page?designName=skull-kaleidoscope&productName=ps4-bundle"
		);
		$skull_kaleidoscope['ps4-slim-bundle'] = new product (
			//four images of size 589x591
			"../images/products/skull-kaleidoscope/ps4-slim-bundle/560X460/Front.jpg",
			"../images/products/skull-kaleidoscope/ps4-slim-bundle/560X460/Back.jpg",
			"../images/products/skull-kaleidoscope/ps4-slim-bundle/560X460/Side.jpg",
			"../images/products/skull-kaleidoscope/ps4-slim-bundle/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/skull-kaleidoscope/ps4-slim-bundle/187X140/Front.jpg",
			"../images/products/skull-kaleidoscope/ps4-slim-bundle/187X140/Back.jpg",
			"../images/products/skull-kaleidoscope/ps4-slim-bundle/187X140/Side.jpg",
			"../images/products/skull-kaleidoscope/ps4-slim-bundle/187X140/Zoom.jpg",
			//design name
			"skull kaleidoscope" ,
			//design name html
			"skull<br>kaleidoscope",
			//design image
			"../images/products/skull-kaleidoscope/design.jpg",
			//product name
			"PS4 Slim bundle",
			//product Image
			"../images/products/skull-kaleidoscope/ps4-slim-bundle/bundle.png",
			//price dollars
			"23",
			//price cents
			"99",
			//short description
			"Skull Kaliedoscope inspired design from<br> industry expert Edward Niro,<br> Identify yourself as the best in Pop Culture",
			//long description
			"Skull Kaliedoscope inspired design from<br> industry expert Edward Niro,<br> Identify yourself as the best in Pop Culture",
			//author
			"Edward Niro",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off<br>-Residue will be non-existent on<br> your PS4 Slim bundle<br>-DIMENSIONS: 13.00 x 0.01 x 25.00<br>Controller:  6.24 x 2.00 x 3.90",
			//url
			"single-product-page?designName=skull-kaleidoscope&productName=ps4-slim-bundle"
		);
		$skull_kaleidoscope['ps4-pro-bundle'] = new product (
			//four images of size 589x591
			"../images/products/skull-kaleidoscope/ps4-pro-bundle/560X460/Front.jpg",
			"../images/products/skull-kaleidoscope/ps4-pro-bundle/560X460/Back.jpg",
			"../images/products/skull-kaleidoscope/ps4-pro-bundle/560X460/Side.jpg",
			"../images/products/skull-kaleidoscope/ps4-pro-bundle/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/skull-kaleidoscope/ps4-pro-bundle/187X140/Front.jpg",
			"../images/products/skull-kaleidoscope/ps4-pro-bundle/187X140/Back.jpg",
			"../images/products/skull-kaleidoscope/ps4-pro-bundle/187X140/Side.jpg",
			"../images/products/skull-kaleidoscope/ps4-pro-bundle/187X140/Zoom.jpg",
			//design name
			"skull kaleidoscope" ,
			//design name html
			"skull<br>kaleidoscope",
			//design image
			"../images/products/skull-kaleidoscope/design.jpg",
			//product name
			"PS4 Pro bundle",
			//product Image
			"../images/products/skull-kaleidoscope/ps4-pro-bundle/bundle.png",
			//price dollars
			"23",
			//price cents
			"99",
			//short description
			"Skull Kaliedoscope inspired design from<br> industry expert Edward Niro,<br> Identify yourself as the best in Pop Culture",
			//long description
			"Skull Kaliedoscope inspired design from<br> industry expert Edward Niro,<br> Identify yourself as the best in Pop Culture",
			//author
			"Edward Niro",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off<br>-Residue will be non-existent <br>on your PS4 Pro bundle<br>-DIMENSIONS: 13.00 x 0.01 x 25.00<br>Controller:  6.24 x 2.00 x 3.90",
			//url
			"single-product-page?designName=skull-kaleidoscope&productName=ps4-pro-bundle"
		);
		// controller
		$tokyo_ghoul['ps4-controller'] = new product (
			//four images of size 589x591
			"../images/products/tokyo-ghoul/ps4-controller/560X460/Front.jpg",
			"../images/products/tokyo-ghoul/ps4-controller/560X460/Back.jpg",
			"../images/products/tokyo-ghoul/ps4-controller/560X460/Side.jpg",
			"../images/products/tokyo-ghoul/ps4-controller/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/tokyo-ghoul/ps4-controller/187X140/Front.jpg",
			"../images/products/tokyo-ghoul/ps4-controller/187X140/Back.jpg",
			"../images/products/tokyo-ghoul/ps4-controller/187X140/Side.jpg",
			"../images/products/tokyo-ghoul/ps4-controller/187X140/Zoom.jpg",
			//design name
			"tokyo ghoul" ,
			//design name html
			"tokyo<br>ghoul",
			//design image
			"../images/products/tokyo-ghoul/design.jpg",
			//product name
			"PS4 controller",
			//product Image
			"../images/products/tokyo-ghoul/ps4-controller/controller.png",
			//price dollars
			"15",
			//price cents
			"99",
			//short description
			"Tokyo Ghoul Inspired Design<br> by Tsujita Masujiro, Japan's Top Designers,<br> If you are into anime <br>you cannot be living without this design.<br> Tokyo Ghoul is one of <br>the most popuar anime in the world.",
			//long description
			"Tokyo Ghoul Inspired Design<br> by Tsujita Masujiro, Japan's Top Designers,<br> If you are into anime <br>you cannot be living without this design.<br> Tokyo Ghoul is one of <br>the most popuar anime in the world.",
			//author
			"Tsujita Masujiro",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off<br>-Residue will be non-existent on<br> your PS4 Controller<br>-DIMENSIONS: 6.24 x 2.00 x 3.90",
			//url
			"single-product-page?designName=tokyo-ghoul&productName=ps4-controller"
		);
		$tokyo_ghoul['ps4-console'] = new product (
			//four images of size 589x591
			"../images/products/tokyo-ghoul/ps4-console/560X460/Front.jpg",
			"../images/products/tokyo-ghoul/ps4-console/560X460/Back.jpg",
			"../images/products/tokyo-ghoul/ps4-console/560X460/Side.jpg",
			"../images/products/tokyo-ghoul/ps4-console/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/tokyo-ghoul/ps4-console/187X140/Front.jpg",
			"../images/products/tokyo-ghoul/ps4-console/187X140/Back.jpg",
			"../images/products/tokyo-ghoul/ps4-console/187X140/Side.jpg",
			"../images/products/tokyo-ghoul/ps4-console/187X140/Zoom.jpg",
			//design name
			"tokyo ghoul" ,
			//design name html
			"tokyo<br>ghoul",
			//design image
			"../images/products/tokyo-ghoul/design.jpg",
			//product name
			"PS4 console",
			//product Image
			"../images/products/tokyo-ghoul/ps4-console/console.png",
			//price dollars
			"20",
			//price cents
			"99",
			//short description
			"Tokyo Ghoul Inspired Design<br> by Tsujita Masujiro, Japan's Top Designers,<br> If you are into anime <br>you cannot be living without this design.<br> Tokyo Ghoul is one of <br>the most popuar anime in the world.",
			//long description
			"Tokyo Ghoul Inspired Design<br> by Tsujita Masujiro, Japan's Top Designers,<br> If you are into anime <br>you cannot be living without this design.<br> Tokyo Ghoul is one of <br>the most popuar anime in the world.",
			//author
			"Tsujita Masujiro",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off<br>-Residue will be non-existent <br>on your PS4 Console<br>-DIMENSIONS: 12.00 x 0.01 x 29.00",
			//url
			"single-product-page?designName=tokyo-ghoul&productName=ps4-console"
		);
		$tokyo_ghoul['ps4-slim-console'] = new product (
			//four images of size 589x591
			"../images/products/tokyo-ghoul/ps4-slim-console/560X460/Front.jpg",
			"../images/products/tokyo-ghoul/ps4-slim-console/560X460/Back.jpg",
			"../images/products/tokyo-ghoul/ps4-slim-console/560X460/Side.jpg",
			"../images/products/tokyo-ghoul/ps4-slim-console/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/tokyo-ghoul/ps4-slim-console/187X140/Front.jpg",
			"../images/products/tokyo-ghoul/ps4-slim-console/187X140/Back.jpg",
			"../images/products/tokyo-ghoul/ps4-slim-console/187X140/Side.jpg",
			"../images/products/tokyo-ghoul/ps4-slim-console/187X140/Zoom.jpg",
			//design name
			"tokyo ghoul" ,
			//design name html
			"tokyo<br>ghoul",
			//design image
			"../images/products/tokyo-ghoul/design.jpg",
			//product name
			"PS4 Slim Console",
			//product Image
			"../images/products/tokyo-ghoul/ps4-slim-console/console.png",
			//price dollars
			"20",
			//price cents
			"99",
			//short description
			"Tokyo Ghoul Inspired Design<br> by Tsujita Masujiro, Japan's Top Designers,<br> If you are into anime <br>you cannot be living without this design.<br> Tokyo Ghoul is one of <br>the most popuar anime in the world.",
			//long description
			"Tokyo Ghoul Inspired Design<br> by Tsujita Masujiro, Japan's Top Designers,<br> If you are into anime <br>you cannot be living without this design.<br> Tokyo Ghoul is one of <br>the most popuar anime in the world.",
			//author
			"Tsujita Masujiro",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off<br>-Residue will be non-existent on<br> your PS4 Slim Console<br>-DIMENSIONS: 13.00 x 0.01 x 25.00",
			//url
			"single-product-page?designName=tokyo-ghoul&productName=ps4-slim-console"
		);
		$tokyo_ghoul['ps4-pro-console'] = new product (
			//four images of size 589x591
			"../images/products/tokyo-ghoul/ps4-pro-console/560X460/Front.jpg",
			"../images/products/tokyo-ghoul/ps4-pro-console/560X460/Back.jpg",
			"../images/products/tokyo-ghoul/ps4-pro-console/560X460/Side.jpg",
			"../images/products/tokyo-ghoul/ps4-pro-console/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/tokyo-ghoul/ps4-pro-console/187X140/Front.jpg",
			"../images/products/tokyo-ghoul/ps4-pro-console/187X140/Back.jpg",
			"../images/products/tokyo-ghoul/ps4-pro-console/187X140/Side.jpg",
			"../images/products/tokyo-ghoul/ps4-pro-console/187X140/Zoom.jpg",
			//design name
			"tokyo ghoul" ,
			//design name html
			"tokyo<br>ghoul",
			//design image
			"../images/products/tokyo-ghoul/design.jpg",
			//product name
			"PS4 Pro Console",
			//product Image
			"../images/products/tokyo-ghoul/ps4-pro-console/console.png",
			//price dollars
			"20",
			//price cents
			"99",
			//short description
			"Tokyo Ghoul Inspired Design<br> by Tsujita Masujiro, Japan's Top Designers,<br> If you are into anime <br>you cannot be living without this design.<br> Tokyo Ghoul is one of <br>the most popuar anime in the world.",
			//long description
			"Tokyo Ghoul Inspired Design<br> by Tsujita Masujiro, Japan's Top Designers,<br> If you are into anime <br>you cannot be living without this design.<br> Tokyo Ghoul is one of <br>the most popuar anime in the world.",
			//author
			"Tsujita Masujiro",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off<br>-Residue will be non-existent <br>on your PS4 Pro Console<br>-DIMENSIONS: 13.00 x 0.01 x 25.00",
			//url
			"single-product-page?designName=tokyo-ghoul&productName=ps4-pro-console"
		);
		$tokyo_ghoul['ps4-bundle'] = new product (
			//four images of size 589x591
			"../images/products/tokyo-ghoul/ps4-bundle/560X460/Front.jpg",
			"../images/products/tokyo-ghoul/ps4-bundle/560X460/Back.jpg",
			"../images/products/tokyo-ghoul/ps4-bundle/560X460/Side.jpg",
			"../images/products/tokyo-ghoul/ps4-bundle/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/tokyo-ghoul/ps4-bundle/187X140/Front.jpg",
			"../images/products/tokyo-ghoul/ps4-bundle/187X140/Back.jpg",
			"../images/products/tokyo-ghoul/ps4-bundle/187X140/Side.jpg",
			"../images/products/tokyo-ghoul/ps4-bundle/187X140/Zoom.jpg",
			//design name
			"tokyo ghoul" ,
			//design name html
			"tokyo<br>ghoul",
			//design image
			"../images/products/tokyo-ghoul/design.jpg",
			//product name
			"PS4 bundle",
			//product Image
			"../images/products/tokyo-ghoul/ps4-bundle/bundle.png",
			//price dollars
			"23",
			//price cents
			"99",
			//short description
			"Tokyo Ghoul Inspired Design<br> by Tsujita Masujiro, Japan's Top Designers,<br> If you are into anime <br>you cannot be living without this design.<br> Tokyo Ghoul is one of <br>the most popuar anime in the world.",
			//long description
			"Tokyo Ghoul Inspired Design<br> by Tsujita Masujiro, Japan's Top Designers,<br> If you are into anime <br>you cannot be living without this design.<br> Tokyo Ghoul is one of <br>the most popuar anime in the world.",
			//author
			"Tsujita Masujiro",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off<br>-Residue will be non-existent <br>on your PS4 bundle<br>-DIMENSIONS: 12.00 x 0.01 x 29.00<br>Controller:  6.24 x 2.00 x 3.90",
			//url
			"single-product-page?designName=tokyo-ghoul&productName=ps4-bundle"
		);
		$tokyo_ghoul['ps4-slim-bundle'] = new product (
			//four images of size 589x591
			"../images/products/tokyo-ghoul/ps4-slim-bundle/560X460/Front.jpg",
			"../images/products/tokyo-ghoul/ps4-slim-bundle/560X460/Back.jpg",
			"../images/products/tokyo-ghoul/ps4-slim-bundle/560X460/Side.jpg",
			"../images/products/tokyo-ghoul/ps4-slim-bundle/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/tokyo-ghoul/ps4-slim-bundle/187X140/Front.jpg",
			"../images/products/tokyo-ghoul/ps4-slim-bundle/187X140/Back.jpg",
			"../images/products/tokyo-ghoul/ps4-slim-bundle/187X140/Side.jpg",
			"../images/products/tokyo-ghoul/ps4-slim-bundle/187X140/Zoom.jpg",
			//design name
			"tokyo ghoul" ,
			//design name html
			"tokyo<br>ghoul",
			//design image
			"../images/products/tokyo-ghoul/design.jpg",
			//product name
			"PS4 Slim bundle",
			//product Image
			"../images/products/tokyo-ghoul/ps4-slim-bundle/bundle.png",
			//price dollars
			"23",
			//price cents
			"99",
			//short description
			"Tokyo Ghoul Inspired Design<br> by Tsujita Masujiro, Japan's Top Designers,<br> If you are into anime <br>you cannot be living without this design.<br> Tokyo Ghoul is one of <br>the most popuar anime in the world.",
			//long description
			"Tokyo Ghoul Inspired Design<br> by Tsujita Masujiro, Japan's Top Designers,<br> If you are into anime <br>you cannot be living without this design.<br> Tokyo Ghoul is one of <br>the most popuar anime in the world.",
			//author
			"Tsujita Masujiro",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off<br>-Residue will be non-existent on<br> your PS4 Slim bundle<br>-DIMENSIONS: 13.00 x 0.01 x 25.00<br>Controller:  6.24 x 2.00 x 3.90",
			//url
			"single-product-page?designName=tokyo-ghoul&productName=ps4-slim-bundle"
		);
		$tokyo_ghoul['ps4-pro-bundle'] = new product (
			//four images of size 589x591
			"../images/products/tokyo-ghoul/ps4-pro-bundle/560X460/Front.jpg",
			"../images/products/tokyo-ghoul/ps4-pro-bundle/560X460/Back.jpg",
			"../images/products/tokyo-ghoul/ps4-pro-bundle/560X460/Side.jpg",
			"../images/products/tokyo-ghoul/ps4-pro-bundle/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/tokyo-ghoul/ps4-pro-bundle/187X140/Front.jpg",
			"../images/products/tokyo-ghoul/ps4-pro-bundle/187X140/Back.jpg",
			"../images/products/tokyo-ghoul/ps4-pro-bundle/187X140/Side.jpg",
			"../images/products/tokyo-ghoul/ps4-pro-bundle/187X140/Zoom.jpg",
			//design name
			"tokyo ghoul" ,
			//design name html
			"tokyo<br>ghoul",
			//design image
			"../images/products/tokyo-ghoul/design.jpg",
			//product name
			"PS4 Pro bundle",
			//product Image
			"../images/products/tokyo-ghoul/ps4-pro-bundle/bundle.png",
			//price dollars
			"23",
			//price cents
			"99",
			//short description
			"Tokyo Ghoul Inspired Design<br> by Tsujita Masujiro, Japan's Top Designers,<br> If you are into anime <br>you cannot be living without this design.<br> Tokyo Ghoul is one of <br>the most popuar anime in the world.",
			//long description
			"Tokyo Ghoul Inspired Design<br> by Tsujita Masujiro, Japan's Top Designers,<br> If you are into anime <br>you cannot be living without this design.<br> Tokyo Ghoul is one of <br>the most popuar anime in the world.",
			//author
			"Tsujita Masujiro",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off<br>-Residue will be non-existent <br>on your PS4 Pro bundle<br>-DIMENSIONS: 13.00 x 0.01 x 25.00<br>Controller:  6.24 x 2.00 x 3.90",
			//url
			"single-product-page?designName=tokyo-ghoul&productName=ps4-pro-bundle"
		);
		// controller
		$world_war['ps4-controller'] = new product (
			//four images of size 589x591
			"../images/products/world-war/ps4-controller/560X460/Front.jpg",
			"../images/products/world-war/ps4-controller/560X460/Back.jpg",
			"../images/products/world-war/ps4-controller/560X460/Side.jpg",
			"../images/products/world-war/ps4-controller/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/world-war/ps4-controller/187X140/Front.jpg",
			"../images/products/world-war/ps4-controller/187X140/Back.jpg",
			"../images/products/world-war/ps4-controller/187X140/Side.jpg",
			"../images/products/world-war/ps4-controller/187X140/Zoom.jpg",
			//design name
			"world war" ,
			//design name html
			"world<br>war",
			//design image
			"../images/products/world-war/design.jpg",
			//product name
			"PS4 controller",
			//product Image
			"../images/products/world-war/ps4-controller/controller.png",
			//price dollars
			"15",
			//price cents
			"99",
			//short description
			"World War inspired design from<br> industry expert Edward Niro,<br> Identify yourself as the best in<br> Mordern / Medieval Warfare Simulations like<br> Call of Duty, Battlefield, Age of Empires etc.",
			//long description
			"World War inspired design from<br> industry expert Edward Niro,<br> Identify yourself as the best in<br> Mordern / Medieval Warfare Simulations like<br> Call of Duty, Battlefield, Age of Empires etc.",
			//author
			"Edward Niro",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off<br>-Residue will be non-existent on<br> your PS4 Controller<br>-DIMENSIONS: 6.24 x 2.00 x 3.90",
			//url
			"single-product-page?designName=world-war&productName=ps4-controller"
		);
		$world_war['ps4-console'] = new product (
			//four images of size 589x591
			"../images/products/world-war/ps4-console/560X460/Front.jpg",
			"../images/products/world-war/ps4-console/560X460/Back.jpg",
			"../images/products/world-war/ps4-console/560X460/Side.jpg",
			"../images/products/world-war/ps4-console/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/world-war/ps4-console/187X140/Front.jpg",
			"../images/products/world-war/ps4-console/187X140/Back.jpg",
			"../images/products/world-war/ps4-console/187X140/Side.jpg",
			"../images/products/world-war/ps4-console/187X140/Zoom.jpg",
			//design name
			"world war" ,
			//design name html
			"world<br>war",
			//design image
			"../images/products/world-war/design.jpg",
			//product name
			"PS4 console",
			//product Image
			"../images/products/world-war/ps4-console/console.png",
			//price dollars
			"20",
			//price cents
			"99",
			//short description
			"World War inspired design from<br> industry expert Edward Niro,<br> Identify yourself as the best in<br> Mordern / Medieval Warfare Simulations like<br> Call of Duty, Battlefield, Age of Empires etc.",
			//long description
			"World War inspired design from<br> industry expert Edward Niro,<br> Identify yourself as the best in<br> Mordern / Medieval Warfare Simulations like<br> Call of Duty, Battlefield, Age of Empires etc.",
			//author
			"Edward Niro",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off<br>-Residue will be non-existent <br>on your PS4 Console<br>-DIMENSIONS: 12.00 x 0.01 x 29.00",
			//url
			"single-product-page?designName=world-war&productName=ps4-console"
		);
		$world_war['ps4-slim-console'] = new product (
			//four images of size 589x591
			"../images/products/world-war/ps4-slim-console/560X460/Front.jpg",
			"../images/products/world-war/ps4-slim-console/560X460/Back.jpg",
			"../images/products/world-war/ps4-slim-console/560X460/Side.jpg",
			"../images/products/world-war/ps4-slim-console/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/world-war/ps4-slim-console/187X140/Front.jpg",
			"../images/products/world-war/ps4-slim-console/187X140/Back.jpg",
			"../images/products/world-war/ps4-slim-console/187X140/Side.jpg",
			"../images/products/world-war/ps4-slim-console/187X140/Zoom.jpg",
			//design name
			"world war" ,
			//design name html
			"world<br>war",
			//design image
			"../images/products/world-war/design.jpg",
			//product name
			"PS4 Slim Console",
			//product Image
			"../images/products/world-war/ps4-slim-console/console.png",
			//price dollars
			"20",
			//price cents
			"99",
			//short description
			"World War inspired design from<br> industry expert Edward Niro,<br> Identify yourself as the best in<br> Mordern / Medieval Warfare Simulations like<br> Call of Duty, Battlefield, Age of Empires etc.",
			//long description
			"World War inspired design from<br> industry expert Edward Niro,<br> Identify yourself as the best in<br> Mordern / Medieval Warfare Simulations like<br> Call of Duty, Battlefield, Age of Empires etc.",
			//author
			"Edward Niro",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off<br>-Residue will be non-existent on<br> your PS4 Slim Console<br>-DIMENSIONS: 13.00 x 0.01 x 25.00",
			//url
			"single-product-page?designName=world-war&productName=ps4-slim-console"
		);
		$world_war['ps4-pro-console'] = new product (
			//four images of size 589x591
			"../images/products/world-war/ps4-pro-console/560X460/Front.jpg",
			"../images/products/world-war/ps4-pro-console/560X460/Back.jpg",
			"../images/products/world-war/ps4-pro-console/560X460/Side.jpg",
			"../images/products/world-war/ps4-pro-console/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/world-war/ps4-pro-console/187X140/Front.jpg",
			"../images/products/world-war/ps4-pro-console/187X140/Back.jpg",
			"../images/products/world-war/ps4-pro-console/187X140/Side.jpg",
			"../images/products/world-war/ps4-pro-console/187X140/Zoom.jpg",
			//design name
			"world war" ,
			//design name html
			"world<br>war",
			//design image
			"../images/products/world-war/design.jpg",
			//product name
			"PS4 console",
			//product Image
			"../images/products/world-war/ps4-pro-console/console.png",
			//price dollars
			"20",
			//price cents
			"99",
			//short description
			"World War inspired design from<br> industry expert Edward Niro,<br> Identify yourself as the best in<br> Mordern / Medieval Warfare Simulations like<br> Call of Duty, Battlefield, Age of Empires etc.",
			//long description
			"World War inspired design from<br> industry expert Edward Niro,<br> Identify yourself as the best in<br> Mordern / Medieval Warfare Simulations like<br> Call of Duty, Battlefield, Age of Empires etc.",
			//author
			"Edward Niro",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off<br>-Residue will be non-existent <br>on your PS4 Pro Console<br>-DIMENSIONS: 13.00 x 0.01 x 25.00",
			//url
			"single-product-page?designName=world-war&productName=ps4-pro-console"
		);
		$world_war['ps4-bundle'] = new product (
			//four images of size 589x591
			"../images/products/world-war/ps4-bundle/560X460/Front.jpg",
			"../images/products/world-war/ps4-bundle/560X460/Back.jpg",
			"../images/products/world-war/ps4-bundle/560X460/Side.jpg",
			"../images/products/world-war/ps4-bundle/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/world-war/ps4-bundle/187X140/Front.jpg",
			"../images/products/world-war/ps4-bundle/187X140/Back.jpg",
			"../images/products/world-war/ps4-bundle/187X140/Side.jpg",
			"../images/products/world-war/ps4-bundle/187X140/Zoom.jpg",
			//design name
			"world war" ,
			//design name html
			"world<br>war",
			//design image
			"../images/products/world-war/design.jpg",
			//product name
			"PS4 bundle",
			//product Image
			"../images/products/world-war/ps4-bundle/bundle.png",
			//price dollars
			"23",
			//price cents
			"99",
			//short description
			"World War inspired design from<br> industry expert Edward Niro,<br> Identify yourself as the best in<br> Mordern / Medieval Warfare Simulations like<br> Call of Duty, Battlefield, Age of Empires etc.",
			//long description
			"World War inspired design from<br> industry expert Edward Niro,<br> Identify yourself as the best in<br> Mordern / Medieval Warfare Simulations like<br> Call of Duty, Battlefield, Age of Empires etc.",
			//author
			"Edward Niro",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off<br>-Residue will be non-existent <br>on your PS4 bundle<br>-DIMENSIONS: 12.00 x 0.01 x 29.00<br>Controller:  6.24 x 2.00 x 3.90",
			//url
			"single-product-page?designName=world-war&productName=ps4-bundle"
		);
		$world_war['ps4-slim-bundle'] = new product (
			//four images of size 589x591
			"../images/products/world-war/ps4-slim-bundle/560X460/Front.jpg",
			"../images/products/world-war/ps4-slim-bundle/560X460/Back.jpg",
			"../images/products/world-war/ps4-slim-bundle/560X460/Side.jpg",
			"../images/products/world-war/ps4-slim-bundle/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/world-war/ps4-slim-bundle/187X140/Front.jpg",
			"../images/products/world-war/ps4-slim-bundle/187X140/Back.jpg",
			"../images/products/world-war/ps4-slim-bundle/187X140/Side.jpg",
			"../images/products/world-war/ps4-slim-bundle/187X140/Zoom.jpg",
			//design name
			"world war" ,
			//design name html
			"world<br>war",
			//design image
			"../images/products/world-war/design.jpg",
			//product name
			"PS4 Slim bundle",
			//product Image
			"../images/products/world-war/ps4-slim-bundle/bundle.png",
			//price dollars
			"23",
			//price cents
			"99",
			//short description
			"World War inspired design from<br> industry expert Edward Niro,<br> Identify yourself as the best in<br> Mordern / Medieval Warfare Simulations like<br> Call of Duty, Battlefield, Age of Empires etc.",
			//long description
			"World War inspired design from<br> industry expert Edward Niro,<br> Identify yourself as the best in<br> Mordern / Medieval Warfare Simulations like<br> Call of Duty, Battlefield, Age of Empires etc.",
			//author
			"Edward Niro",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off<br>-Residue will be non-existent on<br> your PS4 Slim bundle<br>-DIMENSIONS: 13.00 x 0.01 x 25.00<br>Controller:  6.24 x 2.00 x 3.90",
			//url
			"single-product-page?designName=world-war&productName=ps4-slim-bundle"
		);
		$world_war['ps4-pro-bundle'] = new product (
			//four images of size 589x591
			"../images/products/world-war/ps4-pro-bundle/560X460/Front.jpg",
			"../images/products/world-war/ps4-pro-bundle/560X460/Back.jpg",
			"../images/products/world-war/ps4-pro-bundle/560X460/Side.jpg",
			"../images/products/world-war/ps4-pro-bundle/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/world-war/ps4-pro-bundle/187X140/Front.jpg",
			"../images/products/world-war/ps4-pro-bundle/187X140/Back.jpg",
			"../images/products/world-war/ps4-pro-bundle/187X140/Side.jpg",
			"../images/products/world-war/ps4-pro-bundle/187X140/Zoom.jpg",
			//design name
			"world war" ,
			//design name html
			"world<br>war",
			//design image
			"../images/products/world-war/design.jpg",
			//product name
			"PS4 bundle",
			//product Image
			"../images/products/world-war/ps4-pro-bundle/bundle.png",
			//price dollars
			"23",
			//price cents
			"99",
			//short description
			"World War inspired design from<br> industry expert Edward Niro,<br> Identify yourself as the best in<br> Mordern / Medieval Warfare Simulations like<br> Call of Duty, Battlefield, Age of Empires etc.",
			//long description
			"World War inspired design from<br> industry expert Edward Niro,<br> Identify yourself as the best in<br> Mordern / Medieval Warfare Simulations like<br> Call of Duty, Battlefield, Age of Empires etc.",
			//author
			"Edward Niro",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off<br>-Residue will be non-existent <br>on your PS4 Pro bundle<br>-DIMENSIONS: 13.00 x 0.01 x 25.00<br>Controller:  6.24 x 2.00 x 3.90",
			//url
			"single-product-page?designName=world-war&productName=ps4-pro-bundle"
		);

		// custom ps4 
		$designed_by_You['ps4-controller'] = new product (
			//four images of size 589x591
			"../images/products/designed-by-you/ps4-controller/560X460/Front.jpg",
			"../images/products/designed-by-you/ps4-controller/560X460/Back.jpg",
			"../images/products/designed-by-you/ps4-controller/560X460/Side.jpg",
			"../images/products/designed-by-you/ps4-controller/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/designed-by-you/ps4-controller/187X140/Front.jpg",
			"../images/products/designed-by-you/ps4-controller/187X140/Back.jpg",
			"../images/products/designed-by-you/ps4-controller/187X140/Side.jpg",
			"../images/products/designed-by-you/ps4-controller/187X140/Zoom.jpg",
			//design name
			"designed by You" ,
			//design name html
			"designed<br>by You",
			//design image
			"../images/products/designed-by-you/design.jpg",
			//product name
			"PS4 controller",
			//product Image
			"../images/products/designed-by-you/ps4-controller/controller.png",
			//price dollars
			"28",
			//price cents
			"99",
			//short description
			"Creating your Own Identity has never<br>been easier,Chose your product upload<br>your designand we print it and send you<br>the photo,Pay Only when you get <br>the design that is right for you",
			//long description
			"Creating your Own Identity has never<br>been easier,Chose your product upload<br>your designand we print it and send you<br>the photo,Pay Only when you get <br>the design that is right for you",
			//author
			"You",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off<br>-Residue will be non-existent on<br> your PS4 Controller<br>-DIMENSIONS: 6.24 x 2.00 x 3.90",
			//url
			"custom-product-page?designName=designed-by-you&productName=ps4-controller"
		);
		$designed_by_You['ps4-console'] = new product (
			//four images of size 589x591
			"../images/products/designed-by-you/ps4-console/560X460/Front.jpg",
			"../images/products/designed-by-you/ps4-console/560X460/Back.jpg",
			"../images/products/designed-by-you/ps4-console/560X460/Side.jpg",
			"../images/products/designed-by-you/ps4-console/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/designed-by-you/ps4-console/187X140/Front.jpg",
			"../images/products/designed-by-you/ps4-console/187X140/Back.jpg",
			"../images/products/designed-by-you/ps4-console/187X140/Side.jpg",
			"../images/products/designed-by-you/ps4-console/187X140/Zoom.jpg",
			//design name
			"designed by You" ,
			//design name html
			"designed<br>by You",
			//design image
			"../images/products/designed-by-you/design.jpg",
			//product name
			"PS4 Console",
			//product Image
			"../images/products/designed-by-you/ps4-console/console.png",
			//price dollars
			"41",
			//price cents
			"99",
			//short description
			"Creating your Own Identity has never<br>been easier,Chose your product upload<br>your designand we print it and send you<br>the photo,Pay Only when you get <br>the design that is right for you",
			//long description
			"Creating your Own Identity has never<br>been easier,Chose your product upload<br>your designand we print it and send you<br>the photo,Pay Only when you get <br>the design that is right for you",
			//author
			"You",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off<br>-Residue will be non-existent <br>on your PS4 Console<br>-DIMENSIONS: 12.00 x 0.01 x 29.00",
			//url
			"custom-product-page?designName=designed-by-you&productName=ps4-console"
		);
		$designed_by_You['ps4-slim-console'] = new product (
			//four images of size 589x591
			"../images/products/designed-by-you/ps4-slim-console/560X460/Front.jpg",
			"../images/products/designed-by-you/ps4-slim-console/560X460/Back.jpg",
			"../images/products/designed-by-you/ps4-slim-console/560X460/Side.jpg",
			"../images/products/designed-by-you/ps4-slim-console/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/designed-by-you/ps4-slim-console/187X140/Front.jpg",
			"../images/products/designed-by-you/ps4-slim-console/187X140/Back.jpg",
			"../images/products/designed-by-you/ps4-slim-console/187X140/Side.jpg",
			"../images/products/designed-by-you/ps4-slim-console/187X140/Zoom.jpg",
			//design name
			"designed by You" ,
			//design name html
			"designed<br>by You",
			//design image
			"../images/products/designed-by-you/design.jpg",
			//product name
			"PS4 Slim Console",
			//product Image
			"../images/products/designed-by-you/ps4-slim-console/console.png",
			//price dollars
			"41",
			//price cents
			"99",
			//short description
			"Creating your Own Identity has never<br>been easier,Chose your product upload<br>your designand we print it and send you<br>the photo,Pay Only when you get <br>the design that is right for you",
			//long description
			"Creating your Own Identity has never<br>been easier,Chose your product upload<br>your designand we print it and send you<br>the photo,Pay Only when you get <br>the design that is right for you",
			//author
			"You",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off<br>-Residue will be non-existent on<br> your PS4 Slim Console<br>-DIMENSIONS: 13.00 x 0.01 x 25.00",
			//url
			"custom-product-page?designName=designed-by-you&productName=ps4-slim-console"
		);
		$designed_by_You['ps4-pro-console'] = new product (
			//four images of size 589x591
			"../images/products/designed-by-you/ps4-pro-console/560X460/Front.jpg",
			"../images/products/designed-by-you/ps4-pro-console/560X460/Back.jpg",
			"../images/products/designed-by-you/ps4-pro-console/560X460/Side.jpg",
			"../images/products/designed-by-you/ps4-pro-console/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/designed-by-you/ps4-pro-console/187X140/Front.jpg",
			"../images/products/designed-by-you/ps4-pro-console/187X140/Back.jpg",
			"../images/products/designed-by-you/ps4-pro-console/187X140/Side.jpg",
			"../images/products/designed-by-you/ps4-pro-console/187X140/Zoom.jpg",
			//design name
			"designed by You" ,
			//design name html
			"designed<br>by You",
			//design image
			"../images/products/designed-by-you/design.jpg",
			//product name
			"PS4 Pro Console",
			//product Image
			"../images/products/designed-by-you/ps4-pro-console/console.png",
			//price dollars
			"41",
			//price cents
			"99",
			//short description
			"Creating your Own Identity has never<br>been easier,Chose your product upload<br>your designand we print it and send you<br>the photo,Pay Only when you get <br>the design that is right for you",
			//long description
			"Creating your Own Identity has never<br>been easier,Chose your product upload<br>your designand we print it and send you<br>the photo,Pay Only when you get <br>the design that is right for you",
			//author
			"You",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off<br>-Residue will be non-existent <br>on your PS4 Pro Console<br>-DIMENSIONS: 13.00 x 0.01 x 25.00",
			//url
			"custom-product-page?designName=designed-by-you&productName=ps4-pro-console"
		);
		$designed_by_You['ps4-bundle'] = new product (
			//four images of size 589x591
			"../images/products/designed-by-you/ps4-bundle/560X460/Front.jpg",
			"../images/products/designed-by-you/ps4-bundle/560X460/Back.jpg",
			"../images/products/designed-by-you/ps4-bundle/560X460/Side.jpg",
			"../images/products/designed-by-you/ps4-bundle/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/designed-by-you/ps4-bundle/187X140/Front.jpg",
			"../images/products/designed-by-you/ps4-bundle/187X140/Back.jpg",
			"../images/products/designed-by-you/ps4-bundle/187X140/Side.jpg",
			"../images/products/designed-by-you/ps4-bundle/187X140/Zoom.jpg",
			//design name
			"designed by You" ,
			//design name html
			"designed<br>by You",
			//design image
			"../images/products/designed-by-you/design.jpg",
			//product name
			"PS4 bundle",
			//product Image
			"../images/products/designed-by-you/ps4-bundle/bundle.png",
			//price dollars
			"55",
			//price cents
			"99",
			//short description
			"Creating your Own Identity has never<br>been easier,Chose your product upload<br>your designand we print it and send you<br>the photo,Pay Only when you get <br>the design that is right for you",
			//long description
			"Creating your Own Identity has never<br>been easier,Chose your product upload<br>your designand we print it and send you<br>the photo,Pay Only when you get <br>the design that is right for you",
			//author
			"You",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off<br>-Residue will be non-existent <br>on your PS4 bundle<br>-DIMENSIONS: 12.00 x 0.01 x 29.00<br>Controller:  6.24 x 2.00 x 3.90",
			//url
			"custom-product-page?designName=designed-by-you&productName=ps4-bundle"
		);
		$designed_by_You['ps4-slim-bundle'] = new product (
			//four images of size 589x591
			"../images/products/designed-by-you/ps4-slim-bundle/560X460/Front.jpg",
			"../images/products/designed-by-you/ps4-slim-bundle/560X460/Back.jpg",
			"../images/products/designed-by-you/ps4-slim-bundle/560X460/Side.jpg",
			"../images/products/designed-by-you/ps4-slim-bundle/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/designed-by-you/ps4-slim-bundle/187X140/Front.jpg",
			"../images/products/designed-by-you/ps4-slim-bundle/187X140/Back.jpg",
			"../images/products/designed-by-you/ps4-slim-bundle/187X140/Side.jpg",
			"../images/products/designed-by-you/ps4-slim-bundle/187X140/Zoom.jpg",
			//design name
			"designed by You" ,
			//design name html
			"designed<br>by You",
			//design image
			"../images/products/designed-by-you/design.jpg",
			//product name
			"PS4 Slim bundle",
			//product Image
			"../images/products/designed-by-you/ps4-slim-bundle/bundle.png",
			//price dollars
			"55",
			//price cents
			"99",
			//short description
			"Creating your Own Identity has never<br>been easier,Chose your product upload<br>your designand we print it and send you<br>the photo,Pay Only when you get <br>the design that is right for you",
			//long description
			"Creating your Own Identity has never<br>been easier,Chose your product upload<br>your designand we print it and send you<br>the photo,Pay Only when you get <br>the design that is right for you",
			//author
			"You",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off<br>-Residue will be non-existent on<br> your PS4 Slim bundle<br>-DIMENSIONS: 13.00 x 0.01 x 25.00<br>Controller:  6.24 x 2.00 x 3.90",
			//url
			"custom-product-page?designName=designed-by-you&productName=ps4-slim-bundle"
		);
		$designed_by_You['ps4-pro-bundle'] = new product (
			//four images of size 589x591
			"../images/products/designed-by-you/ps4-pro-bundle/560X460/Front.jpg",
			"../images/products/designed-by-you/ps4-pro-bundle/560X460/Back.jpg",
			"../images/products/designed-by-you/ps4-pro-bundle/560X460/Side.jpg",
			"../images/products/designed-by-you/ps4-pro-bundle/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/designed-by-you/ps4-pro-bundle/187X140/Front.jpg",
			"../images/products/designed-by-you/ps4-pro-bundle/187X140/Back.jpg",
			"../images/products/designed-by-you/ps4-pro-bundle/187X140/Side.jpg",
			"../images/products/designed-by-you/ps4-pro-bundle/187X140/Zoom.jpg",
			//design name
			"designed by You" ,
			//design name html
			"designed<br>by You",
			//design image
			"../images/products/designed-by-you/design.jpg",
			//product name
			"PS4 Pro bundle",
			//product Image
			"../images/products/designed-by-you/ps4-pro-bundle/bundle.png",
			//price dollars
			"55",
			//price cents
			"99",
			//short description
			"Creating your Own Identity has never<br>been easier,Chose your product upload<br>your designand we print it and send you<br>the photo,Pay Only when you get <br>the design that is right for you",
			//long description
			"Creating your Own Identity has never<br>been easier,Chose your product upload<br>your designand we print it and send you<br>the photo,Pay Only when you get <br>the design that is right for you",
			//author
			"You",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off<br>-Residue will be non-existent <br>on your PS4 Pro bundle<br>-DIMENSIONS: 13.00 x 0.01 x 25.00<br>Controller:  6.24 x 2.00 x 3.90",
			//url
			"custom-product-page?designName=designed-by-you&productName=ps4-pro-bundle"
		);

		// pubg-helper handle
		$pubg_helper['pubg-helper'] = new product (
			//four images of size 589x591
			"../images/products/pubg-helper/560X460/Front.jpg",
			"../images/products/pubg-helper/560X460/Back.jpg",
			"../images/products/pubg-helper/560X460/Side.jpg",
			"../images/products/pubg-helper/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/pubg-helper/187X140/Front.jpg",
			"../images/products/pubg-helper/187X140/Back.jpg",
			"../images/products/pubg-helper/187X140/Side.jpg",
			"../images/products/pubg-helper/187X140/Zoom.jpg",
			//design name
			"K21 PUGB Helper Four Finger Linkage Game Handle" ,
			//design name html
			"K21 PUGB Helper<br>Four Finger",
			//design image
			"../images/products/designed-by-you/design.jpg",
			//product name
			"Linkage Game Handle",
			//product Image
			"../images/products/pubg-helper/handle.png",
			//price dollars
			"15",
			//price cents
			"99",
			//short description
			"Four finger operation, easy to win the game,<br>custom collocation function,super variety<br>of fancy play. Suitable for all types of shooting<br>games All mobile phones are Universal, Suitable <br>for 4.7-6.5-inch mobile phones.",
			//long description
			"Creating your Own Identity has never<br>been easier,Chose your product upload<br>your designand we print it and send you<br>the photo,Pay Only when you get <br>the design that is right for you",
			//author
			"You",
			//specification
			"Applicable products: smart phone<br>Product size: 127*75*115mm <br>Product weight: 157g [including packaging]",
			//url
			"single-product-page?designName=handle&productName=pubg-helper"
		);

		if($_POST['get_data'] == 'selectedProduct'){
			if (isset($_POST['designName']) && isset($_POST['productName'])){
				if($_POST['designName'] == 'black-wall'){
					if($_POST['productName'] == 'ps4-controller'){
						$data['status'] = 'ok';
						$data['result'] = $black_wall['ps4-controller'];
						$data['product1'] = $black_wall['ps4-console'];
						$data['product2'] = $black_wall['ps4-bundle'];
						$data['product3'] = $doodle_Lines['ps4-controller'];
						$data['product4'] = $funky_ghost['ps4-controller'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'ps4-console'){
						$data['status'] = 'ok';
						$data['result'] = $black_wall['ps4-console'];
						$data['product1'] = $black_wall['ps4-bundle'];
						$data['product2'] = $black_wall['ps4-controller'];
						$data['product3'] = $doodle_Lines['ps4-console'];
						$data['product4'] = $funky_ghost['ps4-console'];
						//returns data as JSON format
						echo json_encode($data);
					}elseif($_POST['productName'] == 'ps4-slim-console'){
						$data['status'] = 'ok';
						$data['result'] = $black_wall['ps4-slim-console'];
						$data['product1'] = $black_wall['ps4-slim-bundle'];
						$data['product2'] = $black_wall['ps4-controller'];
						$data['product3'] = $doodle_Lines['ps4-slim-console'];
						$data['product4'] = $funky_ghost['ps4-slim-console'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'ps4-pro-console'){
						$data['status'] = 'ok';
						$data['result'] = $black_wall['ps4-pro-console'];
						$data['product1'] = $black_wall['ps4-pro-bundle'];
						$data['product2'] = $black_wall['ps4-controller'];
						$data['product3'] = $doodle_Lines['ps4-pro-console'];
						$data['product4'] = $funky_ghost['ps4-pro-console'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'ps4-bundle'){
						$data['status'] = 'ok';
						$data['result'] = $black_wall['ps4-bundle'];
						$data['product1'] = $black_wall['ps4-console'];
						$data['product2'] = $black_wall['ps4-controller'];
						$data['product3'] = $doodle_Lines['ps4-bundle'];
						$data['product4'] = $funky_ghost['ps4-bundle'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'ps4-slim-bundle'){
						$data['status'] = 'ok';
						$data['result'] = $black_wall['ps4-slim-bundle'];
						$data['product1'] = $black_wall['ps4-slim-console'];
						$data['product2'] = $black_wall['ps4-controller'];
						$data['product3'] = $doodle_Lines['ps4-slim-bundle'];
						$data['product4'] = $funky_ghost['ps4-slim-bundle'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'ps4-pro-bundle'){
						$data['status'] = 'ok';
						$data['result'] = $black_wall['ps4-pro-bundle'];
						$data['product1'] = $black_wall['ps4-pro-console'];
						$data['product2'] = $black_wall['ps4-controller'];
						$data['product3'] = $doodle_Lines['ps4-pro-bundle'];
						$data['product4'] = $funky_ghost['ps4-pro-bundle'];
						//returns data as JSON format
						echo json_encode($data);
					}else{
						echo 'error with product name';
					}
				}else if($_POST['designName'] == 'blue-kaleidoscope'){
					if($_POST['productName'] == 'ps4-controller'){
						$data['status'] = 'ok';
						$data['result'] = $blue_kaleidoscope['ps4-controller'];
						$data['product1'] = $blue_kaleidoscope['ps4-console'];
						$data['product2'] = $blue_kaleidoscope['ps4-bundle'];
						$data['product3'] = $naruto_shippuden['ps4-controller'];
						$data['product4'] = $tokyo_ghoul['ps4-controller'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'ps4-console'){
						$data['status'] = 'ok';
						$data['result'] = $blue_kaleidoscope['ps4-console'];
						$data['product1'] = $blue_kaleidoscope['ps4-bundle'];
						$data['product2'] = $blue_kaleidoscope['ps4-controller'];
						$data['product3'] = $naruto_shippuden['ps4-console'];
						$data['product4'] = $tokyo_ghoul['ps4-console'];
						//returns data as JSON format
						echo json_encode($data);
					}elseif($_POST['productName'] == 'ps4-slim-console'){
						$data['status'] = 'ok';
						$data['result'] = $blue_kaleidoscope['ps4-slim-console'];
						$data['product1'] = $blue_kaleidoscope['ps4-slim-bundle'];
						$data['product2'] = $blue_kaleidoscope['ps4-controller'];
						$data['product3'] = $naruto_shippuden['ps4-slim-console'];
						$data['product4'] = $tokyo_ghoul['ps4-slim-console'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'ps4-pro-console'){
						$data['status'] = 'ok';
						$data['result'] = $blue_kaleidoscope['ps4-pro-console'];
						$data['product1'] = $blue_kaleidoscope['ps4-pro-bundle'];
						$data['product2'] = $blue_kaleidoscope['ps4-controller'];
						$data['product3'] = $naruto_shippuden['ps4-pro-console'];
						$data['product4'] = $tokyo_ghoul['ps4-pro-console'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'ps4-bundle'){
						$data['status'] = 'ok';
						$data['result'] = $blue_kaleidoscope['ps4-bundle'];
						$data['product1'] = $blue_kaleidoscope['ps4-console'];
						$data['product2'] = $blue_kaleidoscope['ps4-controller'];
						$data['product3'] = $naruto_shippuden['ps4-bundle'];
						$data['product4'] = $tokyo_ghoul['ps4-bundle'];
						//returns data as JSON format
						echo json_encode($data);
					}elseif($_POST['productName'] == 'ps4-slim-bundle'){
						$data['status'] = 'ok';
						$data['result'] = $blue_kaleidoscope['ps4-slim-bundle'];
						$data['product1'] = $blue_kaleidoscope['ps4-slim-console'];
						$data['product2'] = $blue_kaleidoscope['ps4-controller'];
						$data['product3'] = $naruto_shippuden['ps4-slim-bundle'];
						$data['product4'] = $tokyo_ghoul['ps4-slim-bundle'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'ps4-pro-bundle'){
						$data['status'] = 'ok';
						$data['result'] = $blue_kaleidoscope['ps4-pro-bundle'];
						$data['product1'] = $blue_kaleidoscope['ps4-pro-console'];
						$data['product2'] = $blue_kaleidoscope['ps4-controller'];
						$data['product3'] = $naruto_shippuden['ps4-pro-bundle'];
						$data['product4'] = $tokyo_ghoul['ps4-pro-bundle'];
						//returns data as JSON format
						echo json_encode($data);
					}else{
						echo 'error with product name';
					}
				}else if($_POST['designName'] == 'call-of-duty'){
					if($_POST['productName'] == 'ps4-controller'){
						$data['status'] = 'ok';
						$data['result'] = $call_of_duty['ps4-controller'];
						$data['product1'] = $call_of_duty['ps4-console'];
						$data['product2'] = $call_of_duty['ps4-bundle'];
						$data['product3'] = $iron_man['ps4-controller'];
						$data['product4'] = $dragon_ball_z['ps4-controller'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'ps4-console'){
						$data['status'] = 'ok';
						$data['result'] = $call_of_duty['ps4-console'];
						$data['product1'] = $call_of_duty['ps4-bundle'];
						$data['product2'] = $call_of_duty['ps4-controller'];
						$data['product3'] = $iron_man['ps4-console'];
						$data['product4'] = $dragon_ball_z['ps4-console'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'ps4-slim-console'){
						$data['status'] = 'ok';
						$data['result'] = $call_of_duty['ps4-slim-console'];
						$data['product1'] = $call_of_duty['ps4-slim-bundle'];
						$data['product2'] = $call_of_duty['ps4-controller'];
						$data['product3'] = $iron_man['ps4-slim-console'];
						$data['product4'] = $dragon_ball_z['ps4-slim-console'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'ps4-pro-console'){
						$data['status'] = 'ok';
						$data['result'] = $call_of_duty['ps4-pro-console'];
						$data['product1'] = $call_of_duty['ps4-pro-bundle'];
						$data['product2'] = $call_of_duty['ps4-controller'];
						$data['product3'] = $iron_man['ps4-pro-console'];
						$data['product4'] = $dragon_ball_z['ps4-pro-console'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'ps4-bundle'){
						$data['status'] = 'ok';
						$data['result'] = $call_of_duty['ps4-bundle'];
						$data['product1'] = $call_of_duty['ps4-console'];
						$data['product2'] = $call_of_duty['ps4-controller'];
						$data['product3'] = $iron_man['ps4-bundle'];
						$data['product4'] = $dragon_ball_z['ps4-bundle'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'ps4-slim-bundle'){
						$data['status'] = 'ok';
						$data['result'] = $call_of_duty['ps4-slim-bundle'];
						$data['product1'] = $call_of_duty['ps4-slim-console'];
						$data['product2'] = $call_of_duty['ps4-controller'];
						$data['product3'] = $iron_man['ps4-slim-bundle'];
						$data['product4'] = $dragon_ball_z['ps4-slim-bundle'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'ps4-pro-bundle'){
						$data['status'] = 'ok';
						$data['result'] = $call_of_duty['ps4-pro-bundle'];
						$data['product1'] = $iron_man['ps4-pro-console'];
						$data['product2'] = $naruto_and_sasuke['ps4-controller'];
						$data['product3'] = $iron_man['ps4-pro-bundle'];
						$data['product4'] = $dragon_ball_z['ps4-pro-bundle'];
						//returns data as JSON format
						echo json_encode($data);
					}else{
						echo 'error with product name';
					}
				}else if($_POST['designName'] == 'doodle-lines'){
					if($_POST['productName'] == 'ps4-controller'){
						$data['status'] = 'ok';
						$data['result'] = $doodle_Lines['ps4-controller'];
						$data['product1'] = $doodle_Lines['ps4-console'];
						$data['product2'] = $doodle_Lines['ps4-bundle'];
						$data['product3'] = $black_wall['ps4-controller'];
						$data['product4'] = $funky_ghost['ps4-controller'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'ps4-console'){
						$data['status'] = 'ok';
						$data['result'] = $doodle_Lines['ps4-console'];
						$data['product1'] = $doodle_Lines['ps4-bundle'];
						$data['product2'] = $doodle_Lines['ps4-controller'];
						$data['product3'] = $black_wall['ps4-console'];
						$data['product4'] = $funky_ghost['ps4-console'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'ps4-slim-console'){
						$data['status'] = 'ok';
						$data['result'] = $doodle_Lines['ps4-slim-console'];
						$data['product1'] = $doodle_Lines['ps4-slim-bundle'];
						$data['product2'] = $doodle_Lines['ps4-controller'];
						$data['product3'] = $black_wall['ps4-slim-console'];
						$data['product4'] = $funky_ghost['ps4-slim-console'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'ps4-pro-console'){
						$data['status'] = 'ok';
						$data['result'] = $doodle_Lines['ps4-pro-console'];
						$data['product1'] = $doodle_Lines['ps4-pro-bundle'];
						$data['product2'] = $doodle_Lines['ps4-controller'];
						$data['product3'] = $black_wall['ps4-pro-console'];
						$data['product4'] = $funky_ghost['ps4-pro-console'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'ps4-bundle'){
						$data['status'] = 'ok';
						$data['result'] = $doodle_Lines['ps4-bundle'];
						$data['product1'] = $doodle_Lines['ps4-console'];
						$data['product2'] = $doodle_Lines['ps4-controller'];
						$data['product3'] = $black_wall['ps4-bundle'];
						$data['product4'] = $funky_ghost['ps4-bundle'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'ps4-slim-bundle'){
						$data['status'] = 'ok';
						$data['result'] = $doodle_Lines['ps4-slim-bundle'];
						$data['product1'] = $doodle_Lines['ps4-slim-console'];
						$data['product2'] = $doodle_Lines['ps4-controller'];
						$data['product3'] = $black_wall['ps4-slim-bundle'];
						$data['product4'] = $funky_ghost['ps4-slim-bundle'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'ps4-pro-bundle'){
						$data['status'] = 'ok';
						$data['result'] = $doodle_Lines['ps4-pro-bundle'];
						$data['product1'] = $doodle_Lines['ps4-pro-console'];
						$data['product2'] = $doodle_Lines['ps4-controller'];
						$data['product3'] = $black_wall['ps4-pro-bundle'];
						$data['product4'] = $funky_ghost['ps4-pro-bundle'];
						//returns data as JSON format
						echo json_encode($data);
					}else{
						echo 'error with product name';
					}
				}else if($_POST['designName'] == 'dragon-ball-z'){
					if($_POST['productName'] == 'ps4-controller'){
						$data['status'] = 'ok';
						$data['result'] = $dragon_ball_z['ps4-controller'];
						$data['product1'] = $dragon_ball_z['ps4-console'];
						$data['product2'] = $dragon_ball_z['ps4-bundle'];
						$data['product3'] = $game_freak['ps4-controller'];
						$data['product4'] = $iron_man['ps4-controller'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'ps4-console'){
						$data['status'] = 'ok';
						$data['result'] = $dragon_ball_z['ps4-console'];
						$data['product1'] = $dragon_ball_z['ps4-bundle'];
						$data['product2'] = $dragon_ball_z['ps4-controller'];
						$data['product3'] = $game_freak['ps4-console'];
						$data['product4'] = $iron_man['ps4-console'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'ps4-slim-console'){
						$data['status'] = 'ok';
						$data['result'] = $dragon_ball_z['ps4-slim-console'];
						$data['product1'] = $dragon_ball_z['ps4-slim-bundle'];
						$data['product2'] = $dragon_ball_z['ps4-controller'];
						$data['product3'] = $game_freak['ps4-slim-console'];
						$data['product4'] = $iron_man['ps4-slim-console'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'ps4-pro-console'){
						$data['status'] = 'ok';
						$data['result'] = $dragon_ball_z['ps4-pro-console'];
						$data['product1'] = $dragon_ball_z['ps4-pro-bundle'];
						$data['product2'] = $dragon_ball_z['ps4-controller'];
						$data['product3'] = $game_freak['ps4-pro-console'];
						$data['product4'] = $iron_man['ps4-pro-console'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'ps4-bundle'){
						$data['status'] = 'ok';
						$data['result'] = $dragon_ball_z['ps4-bundle'];
						$data['product1'] = $dragon_ball_z['ps4-console'];
						$data['product2'] = $dragon_ball_z['ps4-controller'];
						$data['product3'] = $game_freak['ps4-bundle'];
						$data['product4'] = $iron_man['ps4-bundle'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'ps4-slim-bundle'){
						$data['status'] = 'ok';
						$data['result'] = $dragon_ball_z['ps4-slim-bundle'];
						$data['product1'] = $dragon_ball_z['ps4-slim-console'];
						$data['product2'] = $dragon_ball_z['ps4-controller'];
						$data['product3'] = $game_freak['ps4-slim-bundle'];
						$data['product4'] = $iron_man['ps4-slim-bundle'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'ps4-pro-bundle'){
						$data['status'] = 'ok';
						$data['result'] = $dragon_ball_z['ps4-pro-bundle'];
						$data['product1'] = $dragon_ball_z['ps4-pro-console'];
						$data['product2'] = $dragon_ball_z['ps4-controller'];
						$data['product3'] = $game_freak['ps4-pro-bundle'];
						$data['product4'] = $iron_man['ps4-pro-bundle'];
						//returns data as JSON format
						echo json_encode($data);
					}else{
						echo 'error with product name';
					}
				}else if($_POST['designName'] == 'funky-ghost'){
					if($_POST['productName'] == 'ps4-controller'){
						$data['status'] = 'ok';
						$data['result'] = $funky_ghost['ps4-controller'];
						$data['product1'] = $funky_ghost['ps4-console'];
						$data['product2'] = $funky_ghost['ps4-bundle'];
						$data['product3'] = $doodle_Lines['ps4-controller'];
						$data['product4'] = $black_wall['ps4-controller'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'ps4-console'){
						$data['status'] = 'ok';
						$data['result'] = $funky_ghost['ps4-console'];
						$data['product1'] = $funky_ghost['ps4-bundle'];
						$data['product2'] = $funky_ghost['ps4-controller'];
						$data['product3'] = $doodle_Lines['ps4-console'];
						$data['product4'] = $black_wall['ps4-console'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'ps4-slim-console'){
						$data['status'] = 'ok';
						$data['result'] = $funky_ghost['ps4-slim-console'];
						$data['product1'] = $funky_ghost['ps4-slim-bundle'];
						$data['product2'] = $funky_ghost['ps4-controller'];
						$data['product3'] = $doodle_Lines['ps4-slim-console'];
						$data['product4'] = $black_wall['ps4-slim-console'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'ps4-pro-console'){
						$data['status'] = 'ok';
						$data['result'] = $funky_ghost['ps4-pro-console'];
						$data['product1'] = $funky_ghost['ps4-pro-bundle'];
						$data['product2'] = $funky_ghost['ps4-controller'];
						$data['product3'] = $doodle_Lines['ps4-pro-console'];
						$data['product4'] = $black_wall['ps4-pro-console'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'ps4-bundle'){
						$data['status'] = 'ok';
						$data['result'] = $funky_ghost['ps4-bundle'];
						$data['product1'] = $funky_ghost['ps4-console'];
						$data['product2'] = $funky_ghost['ps4-controller'];
						$data['product3'] = $doodle_Lines['ps4-bundle'];
						$data['product4'] = $black_wall['ps4-bundle'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'ps4-slim-bundle'){
						$data['status'] = 'ok';
						$data['result'] = $funky_ghost['ps4-slim-bundle'];
						$data['product1'] = $funky_ghost['ps4-slim-console'];
						$data['product2'] = $funky_ghost['ps4-controller'];
						$data['product3'] = $doodle_Lines['ps4-slim-bundle'];
						$data['product4'] = $black_wall['ps4-slim-bundle'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'ps4-pro-bundle'){
						$data['status'] = 'ok';
						$data['result'] = $funky_ghost['ps4-pro-bundle'];
						$data['product1'] = $funky_ghost['ps4-console'];
						$data['product2'] = $funky_ghost['ps4-controller'];
						$data['product3'] = $doodle_Lines['ps4-pro-bundle'];
						$data['product4'] = $black_wall['ps4-pro-bundle'];
						//returns data as JSON format
						echo json_encode($data);
					}else{
						echo 'error with product name';
					}
				}else if($_POST['designName'] == 'funky-skulls'){
					if($_POST['productName'] == 'ps4-controller'){
						$data['status'] = 'ok';
						$data['result'] = $funky_skulls['ps4-controller'];
						$data['product1'] = $funky_skulls['ps4-console'];
						$data['product2'] = $funky_skulls['ps4-bundle'];
						$data['product3'] = $skull_kaleidoscope['ps4-controller'];
						$data['product4'] = $gears_of_war['ps4-controller'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'ps4-console'){
						$data['status'] = 'ok';
						$data['result'] = $funky_skulls['ps4-console'];
						$data['product1'] = $funky_skulls['ps4-controller'];
						$data['product2'] = $funky_skulls['ps4-bundle'];
						$data['product3'] = $skull_kaleidoscope['ps4-console'];
						$data['product4'] = $gears_of_war['ps4-console'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'ps4-slim-console'){
						$data['status'] = 'ok';
						$data['result'] = $funky_skulls['ps4-slim-console'];
						$data['product1'] = $funky_skulls['ps4-slim-bundle'];
						$data['product2'] = $funky_skulls['ps4-controller'];
						$data['product3'] = $skull_kaleidoscope['ps4-slim-console'];
						$data['product4'] = $gears_of_war['ps4-slim-console'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'ps4-pro-console'){
						$data['status'] = 'ok';
						$data['result'] = $funky_skulls['ps4-pro-console'];
						$data['product1'] = $funky_skulls['ps4-pro-bundle'];
						$data['product2'] = $funky_skulls['ps4-controller'];
						$data['product3'] = $skull_kaleidoscope['ps4-pro-console'];
						$data['product4'] = $gears_of_war['ps4-pro-console'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'ps4-bundle'){
						$data['status'] = 'ok';
						$data['result'] = $funky_skulls['ps4-bundle'];
						$data['product1'] = $funky_skulls['ps4-console'];
						$data['product2'] = $funky_skulls['ps4-controller'];
						$data['product3'] = $skull_kaleidoscope['ps4-bundle'];
						$data['product4'] = $gears_of_war['ps4-bundle'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'ps4-slim-bundle'){
						$data['status'] = 'ok';
						$data['result'] = $funky_skulls['ps4-slim-bundle'];
						$data['product1'] = $funky_skulls['ps4-slim-console'];
						$data['product2'] = $funky_skulls['ps4-controller'];
						$data['product3'] = $skull_kaleidoscope['ps4-slim-bundle'];
						$data['product4'] = $gears_of_war['ps4-slim-bundle'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'ps4-pro-bundle'){
						$data['status'] = 'ok';
						$data['result'] = $funky_skulls['ps4-pro-bundle'];
						$data['product1'] = $funky_skulls['ps4-pro-console'];
						$data['product2'] = $funky_skulls['ps4-controller'];
						$data['product3'] = $skull_kaleidoscope['ps4-pro-bundle'];
						$data['product4'] = $gears_of_war['ps4-pro-bundle'];
						//returns data as JSON format
						echo json_encode($data);
					}else{
						echo 'error with product name';
					}
				}else if($_POST['designName'] == 'game-freak'){
					if($_POST['productName'] == 'ps4-controller'){
						$data['status'] = 'ok';
						$data['result'] = $game_freak['ps4-controller'];
						$data['product1'] = $game_freak['ps4-console'];
						$data['product2'] = $game_freak['ps4-bundle'];
						$data['product3'] = $patriot['ps4-controller'];
						$data['product4'] = $world_war['ps4-controller'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'ps4-console'){
						$data['status'] = 'ok';
						$data['result'] = $game_freak['ps4-console'];
						$data['product1'] = $game_freak['ps4-bundle'];
						$data['product2'] = $game_freak['ps4-controller'];
						$data['product3'] = $patriot['ps4-console'];
						$data['product4'] = $world_war['ps4-console'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'ps4-slim-console'){
						$data['status'] = 'ok';
						$data['result'] = $game_freak['ps4-slim-console'];
						$data['product1'] = $game_freak['ps4-slim-bundle'];
						$data['product2'] = $game_freak['ps4-controller'];
						$data['product3'] = $patriot['ps4-slim-console'];
						$data['product4'] = $world_war['ps4-slim-console'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'ps4-pro-console'){
						$data['status'] = 'ok';
						$data['result'] = $game_freak['ps4-pro-console'];
						$data['product1'] = $game_freak['ps4-pro-bundle'];
						$data['product2'] = $game_freak['ps4-controller'];
						$data['product3'] = $patriot['ps4-pro-console'];
						$data['product4'] = $world_war['ps4-pro-console'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'ps4-bundle'){
						$data['status'] = 'ok';
						$data['result'] = $game_freak['ps4-bundle'];
						$data['product1'] = $game_freak['ps4-console'];
						$data['product2'] = $game_freak['ps4-controller'];
						$data['product3'] = $patriot['ps4-bundle'];
						$data['product4'] = $world_war['ps4-bundle'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'ps4-slim-bundle'){
						$data['status'] = 'ok';
						$data['result'] = $game_freak['ps4-slim-bundle'];
						$data['product1'] = $game_freak['ps4-slim-console'];
						$data['product2'] = $game_freak ['ps4-controller'];
						$data['product3'] = $patriot['ps4-slim-bundle'];
						$data['product4'] = $world_war['ps4-slim-bundle'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'ps4-pro-bundle'){
						$data['status'] = 'ok';
						$data['result'] = $game_freak['ps4-pro-bundle'];
						$data['product1'] = $game_freak['ps4-controller'];
						$data['product2'] = $game_freak['ps4-controller'];
						$data['product3'] = $patriot['ps4-pro-bundle'];
						$data['product4'] = $world_war['ps4-pro-bundle'];
						//returns data as JSON format
						echo json_encode($data);
					}else{
						echo 'error with product name';
					}
				}else if($_POST['designName'] == 'gears-of-war'){
					if($_POST['productName'] == 'ps4-controller'){
						$data['status'] = 'ok';
						$data['result'] = $gears_of_war['ps4-controller'];
						$data['product1'] = $gears_of_war['ps4-console'];
						$data['product2'] = $gears_of_war['ps4-bundle'];
						$data['product3'] = $skull_kaleidoscope['ps4-controller'];
						$data['product4'] = $funky_skulls['ps4-controller'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'ps4-console'){
						$data['status'] = 'ok';
						$data['result'] = $gears_of_war['ps4-console'];
						$data['product1'] = $gears_of_war['ps4-bundle'];
						$data['product2'] = $gears_of_war['ps4-controller'];
						$data['product3'] = $skull_kaleidoscope['ps4-console'];
						$data['product4'] = $funky_skulls['ps4-console'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'ps4-slim-console'){
						$data['status'] = 'ok';
						$data['result'] = $gears_of_war['ps4-slim-console'];
						$data['product1'] = $gears_of_war['ps4-slim-bundle'];
						$data['product2'] = $gears_of_war['ps4-controller'];
						$data['product3'] = $skull_kaleidoscope['ps4-slim-console'];
						$data['product4'] = $funky_skulls['ps4-slim-console'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'ps4-pro-console'){
						$data['status'] = 'ok';
						$data['result'] = $gears_of_war['ps4-pro-console'];
						$data['product1'] = $gears_of_war['ps4-pro-bundle'];
						$data['product2'] = $gears_of_war['ps4-controller'];
						$data['product3'] = $skull_kaleidoscope['ps4-pro-console'];
						$data['product4'] = $funky_skulls['ps4-pro-console'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'ps4-bundle'){
						$data['status'] = 'ok';
						$data['result'] = $gears_of_war['ps4-bundle'];
						$data['product1'] = $gears_of_war['ps4-console'];
						$data['product2'] = $gears_of_war['ps4-controller'];
						$data['product3'] = $skull_kaleidoscope['ps4-bundle'];
						$data['product4'] = $funky_skulls['ps4-bundle'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'ps4-slim-bundle'){
						$data['status'] = 'ok';
						$data['result'] = $gears_of_war['ps4-slim-bundle'];
						$data['product1'] = $gears_of_war['ps4-slim-console'];
						$data['product2'] = $gears_of_war['ps4-controller'];
						$data['product3'] = $skull_kaleidoscope['ps4-slim-bundle'];
						$data['product4'] = $funky_skulls['ps4-slim-bundle'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'ps4-pro-bundle'){
						$data['status'] = 'ok';
						$data['result'] = $gears_of_war['ps4-pro-bundle'];
						$data['product1'] = $gears_of_war['ps4-pro-console'];
						$data['product2'] = $gears_of_war['ps4-controller'];
						$data['product3'] = $skull_kaleidoscope['ps4-pro-bundle'];
						$data['product4'] = $funky_skulls['ps4-pro-bundle'];
						//returns data as JSON format
						echo json_encode($data);
					}else{
						echo 'error with product name';
					}
				}else if($_POST['designName'] == 'iron-man'){
					if($_POST['productName'] == 'ps4-controller'){
						$data['status'] = 'ok';
						$data['result'] = $iron_man['ps4-controller'];
						$data['product1'] = $iron_man['ps4-console'];
						$data['product2'] = $iron_man['ps4-bundle'];
						$data['product3'] = $call_of_duty['ps4-controller'];
						$data['product4'] = $dragon_ball_z['ps4-controller'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'ps4-console'){
						$data['status'] = 'ok';
						$data['result'] = $iron_man['ps4-console'];
						$data['product1'] = $iron_man['ps4-bundle'];
						$data['product2'] = $iron_man['ps4-controller'];
						$data['product3'] = $call_of_duty['ps4-console'];
						$data['product4'] = $dragon_ball_z['ps4-console'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'ps4-slim-console'){
						$data['status'] = 'ok';
						$data['result'] = $iron_man['ps4-slim-console'];
						$data['product1'] = $iron_man['ps4-slim-bundle'];
						$data['product2'] = $iron_man['ps4-controller'];
						$data['product3'] = $call_of_duty['ps4-slim-console'];
						$data['product4'] = $dragon_ball_z['ps4-slim-console'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'ps4-pro-console'){
						$data['status'] = 'ok';
						$data['result'] = $iron_man['ps4-pro-console'];
						$data['product1'] = $iron_man['ps4-pro-bundle'];
						$data['product2'] = $iron_man['ps4-controller'];
						$data['product3'] = $call_of_duty['ps4-pro-console'];
						$data['product4'] = $dragon_ball_z['ps4-pro-console'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'ps4-bundle'){
						$data['status'] = 'ok';
						$data['result'] = $iron_man['ps4-bundle'];
						$data['product1'] = $iron_man['ps4-console'];
						$data['product2'] = $iron_man['ps4-controller'];
						$data['product3'] = $call_of_duty['ps4-bundle'];
						$data['product4'] = $dragon_ball_z['ps4-bundle'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'ps4-slim-bundle'){
						$data['status'] = 'ok';
						$data['result'] = $iron_man['ps4-slim-bundle'];
						$data['product1'] = $iron_man['ps4-slim-console'];
						$data['product2'] = $iron_man['ps4-controller'];
						$data['product3'] = $call_of_duty['ps4-slim-bundle'];
						$data['product4'] = $dragon_ball_z['ps4-slim-bundle'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'ps4-pro-bundle'){
						$data['status'] = 'ok';
						$data['result'] = $iron_man['ps4-pro-bundle'];
						$data['product1'] = $iron_man['ps4-pro-console'];
						$data['product2'] = $iron_man['ps4-controller'];
						$data['product3'] = $call_of_duty['ps4-pro-bundle'];
						$data['product4'] = $dragon_ball_z['ps4-pro-bundle'];
						//returns data as JSON format
						echo json_encode($data);	
					}else{
						echo 'error with product name';
					}
				}else if($_POST['designName'] == 'naruto-and-sasuke'){
					if($_POST['productName'] == 'ps4-controller'){
						$data['status'] = 'ok';
						$data['result'] = $naruto_and_sasuke['ps4-controller'];
						$data['product1'] = $naruto_and_sasuke['ps4-console'];
						$data['product2'] = $naruto_and_sasuke['ps4-bundle'];
						$data['product3'] = $doodle_Lines['ps4-controller'];
						$data['product4'] = $game_freak['ps4-controller'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'ps4-console'){
						$data['status'] = 'ok';
						$data['result'] = $naruto_and_sasuke['ps4-console'];
						$data['product1'] = $naruto_and_sasuke['ps4-bundle'];
						$data['product2'] = $naruto_and_sasuke['ps4-controller'];
						$data['product3'] = $doodle_Lines['ps4-console'];
						$data['product4'] = $game_freak['ps4-console'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'ps4-slim-console'){
						$data['status'] = 'ok';
						$data['result'] = $naruto_and_sasuke['ps4-slim-console'];
						$data['product1'] = $iron_man['ps4-controller'];
						$data['product2'] = $funky_skulls['ps4-controller'];
						$data['product3'] = $doodle_Lines['ps4-console'];
						$data['product4'] = $game_freak['ps4-console'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'ps4-pro-console'){
						$data['status'] = 'ok';
						$data['result'] = $naruto_and_sasuke['ps4-pro-console'];
						$data['product1'] = $naruto_and_sasuke['ps4-pro-bundle'];
						$data['product2'] = $naruto_and_sasuke['ps4-controller'];
						$data['product3'] = $doodle_Lines['ps4-pro-console'];
						$data['product4'] = $game_freak['ps4-pro-console'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'ps4-bundle'){
						$data['status'] = 'ok';
						$data['result'] = $naruto_and_sasuke['ps4-bundle'];
						$data['product1'] = $naruto_and_sasuke['ps4-console'];
						$data['product2'] = $naruto_and_sasuke['ps4-controller'];
						$data['product3'] = $doodle_Lines['ps4-bundle'];
						$data['product4'] = $game_freak['ps4-bundle'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'ps4-slim-bundle'){
						$data['status'] = 'ok';
						$data['result'] = $naruto_and_sasuke['ps4-slim-bundle'];
						$data['product1'] = $naruto_and_sasuke['ps4-slim-console'];
						$data['product2'] = $naruto_and_sasuke['ps4-controller'];
						$data['product3'] = $doodle_Lines['ps4-slim-bundle'];
						$data['product4'] = $game_freak['ps4-slim-bundle'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'ps4-pro-bundle'){
						$data['status'] = 'ok';
						$data['result'] = $naruto_and_sasuke['ps4-pro-bundle'];
						$data['product1'] = $naruto_and_sasuke['ps4-pro-console'];
						$data['product2'] = $naruto_and_sasuke['ps4-controller'];
						$data['product3'] = $doodle_Lines['ps4-pro-bundle'];
						$data['product4'] = $game_freak['ps4-pro-bundle'];
						//returns data as JSON format
						echo json_encode($data);
					}else{
						echo 'error with product name';
					}
				}else if($_POST['designName'] == 'naruto-shippuden'){
					if($_POST['productName'] == 'ps4-controller'){
						$data['status'] = 'ok';
						$data['result'] = $naruto_shippuden['ps4-controller'];
						$data['product1'] = $naruto_shippuden['ps4-console'];
						$data['product2'] = $naruto_shippuden['ps4-bundle'];
						$data['product3'] = $blue_kaleidoscope['ps4-controller'];
						$data['product4'] = $tokyo_ghoul['ps4-controller'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'ps4-console'){
						$data['status'] = 'ok';
						$data['result'] = $naruto_shippuden['ps4-console'];
						$data['product1'] = $naruto_shippuden['ps4-bundle'];
						$data['product2'] = $naruto_shippuden['ps4-controller'];
						$data['product3'] = $blue_kaleidoscope['ps4-console'];
						$data['product4'] = $tokyo_ghoul['ps4-console'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'ps4-slim-console'){
						$data['status'] = 'ok';
						$data['result'] = $naruto_shippuden['ps4-slim-console'];
						$data['product1'] = $naruto_shippuden['ps4-slim-bundle'];
						$data['product2'] = $naruto_shippuden['ps4-controller'];
						$data['product3'] = $blue_kaleidoscope['ps4-slim-console'];
						$data['product4'] = $tokyo_ghoul['ps4-slim-console'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'ps4-pro-console'){
						$data['status'] = 'ok';
						$data['result'] = $naruto_shippuden['ps4-pro-console'];
						$data['product1'] = $naruto_shippuden['ps4-pro-bundle'];
						$data['product2'] = $naruto_shippuden['ps4-controller'];
						$data['product3'] = $blue_kaleidoscope['ps4-pro-console'];
						$data['product4'] = $tokyo_ghoul['ps4-pro-console'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'ps4-bundle'){
						$data['status'] = 'ok';
						$data['result'] = $naruto_shippuden['ps4-bundle'];
						$data['product1'] = $naruto_shippuden['ps4-controller'];
						$data['product2'] = $naruto_shippuden['ps4-controller'];
						$data['product3'] = $blue_kaleidoscope['ps4-bundle'];
						$data['product4'] = $tokyo_ghoul['ps4-bundle'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'ps4-slim-bundle'){
						$data['status'] = 'ok';
						$data['result'] = $naruto_shippuden['ps4-slim-bundle'];
						$data['product1'] = $naruto_shippuden['ps4-slim-console'];
						$data['product2'] = $naruto_shippuden['ps4-controller'];
						$data['product3'] = $blue_kaleidoscope['ps4-slim-bundle'];
						$data['product4'] = $tokyo_ghoul['ps4-slim-bundle'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'ps4-pro-bundle'){
						$data['status'] = 'ok';
						$data['result'] = $naruto_shippuden['ps4-pro-bundle'];
						$data['product1'] = $naruto_shippuden['ps4-pro-console'];
						$data['product2'] = $naruto_shippuden['ps4-controller'];
						$data['product3'] = $blue_kaleidoscope['ps4-pro-bundle'];
						$data['product4'] = $tokyo_ghoul['ps4-pro-bundle'];
						//returns data as JSON format
						echo json_encode($data);
					}else{
						echo 'error with product name';
					}	
				}else if($_POST['designName'] == 'patriot'){
					if($_POST['productName'] == 'ps4-controller'){
						$data['status'] = 'ok';
						$data['result'] = $patriot['ps4-controller'];
						$data['product1'] = $patriot['ps4-console'];
						$data['product2'] = $patriot['ps4-bundle'];
						$data['product3'] = $game_freak['ps4-controller'];
						$data['product4'] = $world_war['ps4-controller'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'ps4-console'){
						$data['status'] = 'ok';
						$data['result'] = $patriot['ps4-console'];
						$data['product1'] = $patriot['ps4-bundle'];
						$data['product2'] = $patriot['ps4-controller'];
						$data['product3'] = $game_freak['ps4-console'];
						$data['product4'] = $world_war['ps4-console'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'ps4-slim-console'){
						$data['status'] = 'ok';
						$data['result'] = $patriot['ps4-slim-console'];
						$data['product1'] = $patriot['ps4-slim-bundle'];
						$data['product2'] = $patriot['ps4-controller'];
						$data['product3'] = $game_freak['ps4-slim-console'];
						$data['product4'] = $world_war['ps4-slim-console'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'ps4-pro-console'){
						$data['status'] = 'ok';
						$data['result'] = $patriot['ps4-pro-console'];
						$data['product1'] = $patriot['ps4-pro-bundle'];
						$data['product2'] = $patriot['ps4-controller'];
						$data['product3'] = $game_freak['ps4-pro-console'];
						$data['product4'] = $world_war['ps4-pro-console'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'ps4-bundle'){
						$data['status'] = 'ok';
						$data['result'] = $patriot['ps4-bundle'];
						$data['product1'] = $patriot['ps4-console'];
						$data['product2'] = $patriot['ps4-controller'];
						$data['product3'] = $game_freak['ps4-bundle'];
						$data['product4'] = $world_war['ps4-bundle'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'ps4-slim-bundle'){
						$data['status'] = 'ok';
						$data['result'] = $patriot['ps4-slim-bundle'];
						$data['product1'] = $patriot['ps4-console'];
						$data['product2'] = $patriot['ps4-controller'];
						$data['product3'] = $game_freak['ps4-slim-bundle'];
						$data['product4'] = $world_war['ps4-slim-bundle'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'ps4-pro-bundle'){
						$data['status'] = 'ok';
						$data['result'] = $patriot['ps4-pro-bundle'];
						$data['product1'] = $patriot['ps4-pro-console'];
						$data['product2'] = $patriot['ps4-controller'];
						$data['product3'] = $game_freak['ps4-pro-bundle'];
						$data['product4'] = $world_war['ps4-pro-bundle'];
						//returns data as JSON format
						echo json_encode($data);
					}else{
						echo 'error with product name';
					}
				}else if($_POST['designName'] == 'skull-kaleidoscope'){
					if($_POST['productName'] == 'ps4-controller'){
						$data['status'] = 'ok';
						$data['result'] = $skull_kaleidoscope['ps4-controller'];
						$data['product1'] = $skull_kaleidoscope['ps4-console'];
						$data['product2'] = $skull_kaleidoscope['ps4-bundle'];
						$data['product3'] = $gears_of_war['ps4-controller'];
						$data['product4'] = $game_freak['ps4-controller'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'ps4-console'){
						$data['status'] = 'ok';
						$data['result'] = $skull_kaleidoscope['ps4-console'];
						$data['product1'] = $skull_kaleidoscope['ps4-bundle'];
						$data['product2'] = $skull_kaleidoscope['ps4-controller'];
						$data['product3'] = $gears_of_war['ps4-console'];
						$data['product4'] = $game_freak['ps4-console'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'ps4-slim-console'){
						$data['status'] = 'ok';
						$data['result'] = $skull_kaleidoscope['ps4-slim-console'];
						$data['product1'] = $skull_kaleidoscope['ps4-slim-bundle'];
						$data['product2'] = $skull_kaleidoscope['ps4-controller'];
						$data['product3'] = $gears_of_war['ps4-slim-console'];
						$data['product4'] = $game_freak['ps4-slim-console'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'ps4-pro-console'){
						$data['status'] = 'ok';
						$data['result'] = $skull_kaleidoscope['ps4-pro-console'];
						$data['product1'] = $skull_kaleidoscope['ps4-pro-bundle'];
						$data['product2'] = $skull_kaleidoscope['ps4-controller'];
						$data['product3'] = $gears_of_war['ps4-pro-console'];
						$data['product4'] = $game_freak['ps4-pro-console'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'ps4-bundle'){
						$data['status'] = 'ok';
						$data['result'] = $skull_kaleidoscope['ps4-bundle'];
						$data['product1'] = $skull_kaleidoscope['ps4-console'];
						$data['product2'] = $skull_kaleidoscope['ps4-controller'];
						$data['product3'] = $gears_of_war['ps4-bundle'];
						$data['product4'] = $game_freak['ps4-bundle'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'ps4-slim-bundle'){
						$data['status'] = 'ok';
						$data['result'] = $skull_kaleidoscope['ps4-slim-bundle'];
						$data['product1'] = $skull_kaleidoscope['ps4-slim-console'];
						$data['product2'] = $skull_kaleidoscope['ps4-controller'];
						$data['product3'] = $gears_of_war['ps4-slim-bundle'];
						$data['product4'] = $game_freak['ps4-slim-bundle'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'ps4-pro-bundle'){
						$data['status'] = 'ok';
						$data['result'] = $skull_kaleidoscope['ps4-pro-bundle'];
						$data['product1'] = $skull_kaleidoscope['ps4-pro-console'];
						$data['product2'] = $skull_kaleidoscope['ps4-controller'];
						$data['product3'] = $gears_of_war['ps4-pro-bundle'];
						$data['product4'] = $game_freak['ps4-pro-bundle'];
						//returns data as JSON format
						echo json_encode($data);
					}else{
						echo 'error with product name';
					}
				}else if($_POST['designName'] == 'tokyo-ghoul'){
					if($_POST['productName'] == 'ps4-controller'){
						$data['status'] = 'ok';
						$data['result'] = $tokyo_ghoul['ps4-controller'];
						$data['product1'] = $tokyo_ghoul['ps4-console'];
						$data['product2'] = $tokyo_ghoul['ps4-bundle'];
						$data['product3'] = $blue_kaleidoscope['ps4-controller'];
						$data['product4'] = $naruto_shippuden['ps4-controller'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'ps4-console'){
						$data['status'] = 'ok';
						$data['result'] = $tokyo_ghoul['ps4-console'];
						$data['product1'] = $tokyo_ghoul['ps4-bundle'];
						$data['product2'] = $tokyo_ghoul['ps4-controller'];
						$data['product3'] = $blue_kaleidoscope['ps4-console'];
						$data['product4'] = $naruto_shippuden['ps4-console'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'ps4-slim-console'){
						$data['status'] = 'ok';
						$data['result'] = $tokyo_ghoul['ps4-slim-console'];
						$data['product1'] = $tokyo_ghoul['ps4-slim-bundle'];
						$data['product2'] = $tokyo_ghoul['ps4-controller'];
						$data['product3'] = $blue_kaleidoscope['ps4-slim-console'];
						$data['product4'] = $naruto_shippuden['ps4-slim-console'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'ps4-pro-console'){
						$data['status'] = 'ok';
						$data['result'] = $tokyo_ghoul['ps4-pro-console'];
						$data['product1'] = $tokyo_ghoul['ps4-pro-bundle'];
						$data['product2'] = $tokyo_ghoul['ps4-controller'];
						$data['product3'] = $blue_kaleidoscope['ps4-pro-console'];
						$data['product4'] = $naruto_shippuden['ps4-pro-console'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'ps4-bundle'){
						$data['status'] = 'ok';
						$data['result'] = $tokyo_ghoul['ps4-bundle'];
						$data['product1'] = $tokyo_ghoul['ps4-console'];
						$data['product2'] = $tokyo_ghoul['ps4-controller'];
						$data['product3'] = $blue_kaleidoscope['ps4-bundle'];
						$data['product4'] = $naruto_shippuden['ps4-bundle'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'ps4-slim-bundle'){
						$data['status'] = 'ok';
						$data['result'] = $tokyo_ghoul['ps4-slim-bundle'];
						$data['product1'] = $tokyo_ghoul['ps4-slim-console'];
						$data['product2'] = $tokyo_ghoul['ps4-controller'];
						$data['product3'] = $blue_kaleidoscope['ps4-bundle'];
						$data['product4'] = $naruto_shippuden['ps4-bundle'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'ps4-pro-bundle'){
						$data['status'] = 'ok';
						$data['result'] = $tokyo_ghoul['ps4-pro-bundle'];
						$data['product1'] = $tokyo_ghoul['ps4-pro-console'];
						$data['product2'] = $tokyo_ghoul['ps4-controller'];
						$data['product3'] = $blue_kaleidoscope['ps4-pro-bundle'];
						$data['product4'] = $naruto_shippuden['ps4-pro-bundle'];
						//returns data as JSON format
						echo json_encode($data);
					}else{
						echo 'error with product name';
					}
				}else if($_POST['designName'] == 'world-war'){
					if($_POST['productName'] == 'ps4-controller'){
						$data['status'] = 'ok';
						$data['result'] = $world_war['ps4-controller'];
						$data['product1'] = $world_war['ps4-console'];
						$data['product2'] = $world_war['ps4-bundle'];
						$data['product3'] = $patriot['ps4-controller'];
						$data['product4'] = $game_freak['ps4-controller'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'ps4-console'){
						$data['status'] = 'ok';
						$data['result'] = $world_war['ps4-console'];
						$data['product1'] = $world_war['ps4-bundle'];
						$data['product2'] = $world_war['ps4-controller'];
						$data['product3'] = $patriot['ps4-console'];
						$data['product4'] = $game_freak['ps4-console'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'ps4-slim-console'){
						$data['status'] = 'ok';
						$data['result'] = $world_war['ps4-slim-console'];
						$data['product1'] = $world_war['ps4-slim-bundle'];
						$data['product2'] = $world_war['ps4-controller'];
						$data['product3'] = $patriot['ps4-slim-console'];
						$data['product4'] = $game_freak['ps4-slim-console'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'ps4-pro-console'){
						$data['status'] = 'ok';
						$data['result'] = $world_war['ps4-pro-console'];
						$data['product1'] = $world_war['ps4-pro-bundle'];
						$data['product2'] = $world_war['ps4-controller'];
						$data['product3'] = $patriot['ps4-pro-console'];
						$data['product4'] = $game_freak['ps4-pro-console'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'ps4-bundle'){
						$data['status'] = 'ok';
						$data['result'] = $world_war['ps4-bundle'];
						$data['product1'] = $world_war['ps4-console'];
						$data['product2'] = $world_war['ps4-controller'];
						$data['product3'] = $patriot['ps4-bundle'];
						$data['product4'] = $game_freak['ps4-bundle'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'ps4-slim-bundle'){
						$data['status'] = 'ok';
						$data['result'] = $world_war['ps4-slim-bundle'];
						$data['product1'] = $world_war['ps4-slim-console'];
						$data['product2'] = $world_war['ps4-controller'];
						$data['product3'] = $patriot['ps4-slim-bundle'];
						$data['product4'] = $game_freak['ps4-slim-bundle'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'ps4-pro-bundle'){
						$data['status'] = 'ok';
						$data['result'] = $world_war['ps4-pro-bundle'];
						$data['product1'] = $world_war['ps4-pro-console'];
						$data['product2'] = $world_war['ps4-controller'];
						$data['product3'] = $patriot['ps4-pro-bundle'];
						$data['product4'] = $game_freak['ps4-pro-bundle'];
						//returns data as JSON format
						echo json_encode($data);
					}else{
						echo 'error with product name';
					}
				}else if($_POST['designName'] == 'designed-by-you'){
					if($_POST['productName'] == 'ps4-controller'){
						$data['status'] = 'ok';
						$data['result'] = $designed_by_You['ps4-controller'];
						$data['product1'] = $designed_by_You['ps4-console'];
						$data['product2'] = $designed_by_You['ps4-bundle'];
						$data['product3'] = $naruto_and_sasuke['ps4-controller'];
						$data['product4'] = $gears_of_war['ps4-controller'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'ps4-console'){
						$data['status'] = 'ok';
						$data['result'] = $designed_by_You['ps4-console'];
						$data['product1'] = $designed_by_You['ps4-bundle'];
						$data['product2'] = $designed_by_You['ps4-controller'];
						$data['product3'] = $naruto_and_sasuke['ps4-console'];
						$data['product4'] = $gears_of_war['ps4-console'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'ps4-slim-console'){
						$data['status'] = 'ok';
						$data['result'] = $designed_by_You['ps4-slim-console'];
						$data['product1'] = $funky_skulls['ps4-slim-bundle'];
						$data['product2'] = $iron_man['ps4-controller'];
						$data['product3'] = $naruto_and_sasuke['ps4-slim-console'];
						$data['product4'] = $gears_of_war['ps4-slim-console'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'ps4-pro-console'){
						$data['status'] = 'ok';
						$data['result'] = $designed_by_You['ps4-pro-console'];
						$data['product1'] = $funky_skulls['ps4-pro-bundle'];
						$data['product2'] = $iron_man['ps4-controller'];
						$data['product3'] = $naruto_and_sasuke['ps4-pro-console'];
						$data['product4'] = $gears_of_war['ps4-pro-console'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'ps4-bundle'){
						$data['status'] = 'ok';
						$data['result'] = $designed_by_You['ps4-bundle'];
						$data['product1'] = $designed_by_You['ps4-console'];
						$data['product2'] = $designed_by_You['ps4-controller'];
						$data['product3'] = $naruto_and_sasuke['ps4-bundle'];
						$data['product4'] = $gears_of_war['ps4-bundle'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'ps4-slim-bundle'){
						$data['status'] = 'ok';
						$data['result'] = $designed_by_You['ps4-slim-bundle'];
						$data['product1'] = $designed_by_You['ps4-slim-console'];
						$data['product2'] = $designed_by_You['ps4-controller'];
						$data['product3'] = $naruto_and_sasuke['ps4-slim-bundle'];
						$data['product4'] = $gears_of_war['ps4-slim-bundle'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'ps4-pro-bundle'){
						$data['status'] = 'ok';
						$data['result'] = $designed_by_You['ps4-pro-bundle'];
						$data['product1'] = $funky_skulls['ps4-pro-console'];
						$data['product2'] = $iron_man['ps4-controller'];
						$data['product3'] = $naruto_and_sasuke['ps4-pro-bundle'];
						$data['product4'] = $gears_of_war['ps4-pro-bundle'];
						//returns data as JSON format
						echo json_encode($data);
					}else{
						echo 'error with product name';
					}
				}else if($_POST['designName'] == 'handle'){
					if($_POST['productName'] == 'pubg-helper'){
						$data['status'] = 'ok';
						$data['result'] = $pubg_helper['pubg-helper'];
						$data['product1'] = $world_war['ps4-console'];
						$data['product2'] = $world_war['ps4-bundle'];
						$data['product3'] = $patriot['ps4-controller'];
						$data['product4'] = $game_freak['ps4-controller'];
						//returns data as JSON format
						echo json_encode($data);
					}else{
						echo 'error with product name';
					}
				}else{
					echo 'error with design name';
				}
			}else{
				echo 'error not set both values';
			}
		}
	}
?>