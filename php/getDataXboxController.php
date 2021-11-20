<?php
if(!empty($_POST['get_data']))
	{
    	$data = array();
	
		class product {  
		
			public $productImageLoc1 = "../images/products/black-wall/xbox-one-controller/560X460/Front.jpg"; 
			public $productImageLoc2 = "../images/products/black-wall/xbox-one-controller/560X460/Back.jpg"; 
			public $productImageLoc3 = "../images/products/black-wall/xbox-one-controller/560X460/Side.jpg"; 
			public $productImageLoc4 = "../images/products/black-wall/xbox-one-controller/560X460/Zoom.jpg"; 
			public $productImageThumbLoc1 = "../images/products/black-wall/xbox-one-controller/187X140/Front.jpg"; 
			public $productImageThumbLoc2 = "../images/products/black-wall/xbox-one-controller/187X140/Back.jpg"; 
			public $productImageThumbLoc3 = "../images/products/black-wall/xbox-one-controller/187X140/Side.jpg"; 
			public $productImageThumbLoc4 = "../images/products/black-wall/xbox-one-controller/187X140/Zoom.jpg"; 
			public $designName = "black wall";
			public $designNameHtml = "black<br>wall";
			public $designImage = "../images/products/black-wall/design.jpg";
			public $productName = "xbox one controller";
			public $productImage = "../images/products/Black Wall/010XBOX One.jpg";
			public $priceDollar = "18";	
			public $priceCents = "99";
			public $shortDescription ="Make the Witcher’s hunt even more<br>exciting with the limited edition<br>Geralt of Rivia Xbox One<br>Controller skin.";
			public $longDescription ="Make The Witcher’s Hunt Even More Exciting With The Limited Edition Geralt Of Rivia Xbox One, Xbox One S, Xbox One X Controller Skin. With Its Surreal Illustrations, This Xbox Skin Is Guaranteed To Further Improve Your Gaming Experience.<br><br>This Witcher 3 Xbox Skin Is A Perfect Fit For Your Controller That Won’t Ever Get In The Way Of Geralt’s Reunion With Ciri.";
			public $author = "William Blake";
			public $specification ="-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One  Controller<br>-DIMENSIONS: 6.00 x 4.00 x 1.70";
			public $productUrl = "single-product-page?designName=black-wall&productName=xbox-one-controller";
			public $sku = "CUS/CONTR/TOP/20209801";

			// Constructor is being implemented. 
			public function __construct($productImageLoc1, $productImageLoc2, $productImageLoc3, $productImageLoc4, $productImageThumbLoc1, $productImageThumbLoc2, $productImageThumbLoc3, $productImageThumbLoc4, $designName, $designNameHtml, $designImage, $productName, $productImage, $priceDollar, $priceCents, $shortDescription , $longDescription, $author,  $specification, $productUrl,$sku) { 
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
				$this->sku = $sku;  
			} 
		} 

		// now constructor is called automatically  
		// because we have initialized the object 
		// or class Bird. 

		// Design Black Wall
		// controller
		$black_wall['xbox-one-controller'] = new product (
			//four images of size 589x591
			"../images/products/black-wall/xbox-one-controller/560X460/Front.jpg",
			"../images/products/black-wall/xbox-one-controller/560X460/Back.jpg",
			"../images/products/black-wall/xbox-one-controller/560X460/Side.jpg",
			"../images/products/black-wall/xbox-one-controller/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/black-wall/xbox-one-controller/187X140/Front.jpg",
			"../images/products/black-wall/xbox-one-controller/187X140/Back.jpg",
			"../images/products/black-wall/xbox-one-controller/187X140/Side.jpg",
			"../images/products/black-wall/xbox-one-controller/187X140/Zoom.jpg",
			//design name
			"black wall" ,
			//design name html
			"black<br>wall",
			//design image
			"../images/products/black-wall/design.jpg",
			//product name
			"xbox one controller",
			//product Image
			"../images/products/black-wall/xbox-one-controller/controller.png",
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
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One Controller<br>-DIMENSIONS: 6.00 x 4.00 x 1.70",
			//url
			"single-product-page?designName=black-wall&productName=xbox-one-controller",
			//sku
			"CUS/CONTR/TOP/20209801"
		);
		$black_wall['xbox-one-s-controller'] = new product (
			//four images of size 589x591
			"../images/products/black-wall/xbox-one-s-controller/560X460/Front.jpg",
			"../images/products/black-wall/xbox-one-s-controller/560X460/Back.jpg",
			"../images/products/black-wall/xbox-one-s-controller/560X460/Side.jpg",
			"../images/products/black-wall/xbox-one-s-controller/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/black-wall/xbox-one-s-controller/187X140/Front.jpg",
			"../images/products/black-wall/xbox-one-s-controller/187X140/Back.jpg",
			"../images/products/black-wall/xbox-one-s-controller/187X140/Side.jpg",
			"../images/products/black-wall/xbox-one-s-controller/187X140/Zoom.jpg",
			//design name
			"black wall" ,
			//design name html
			"black<br>wall",
			//design image
			"../images/products/black-wall/design.jpg",
			//product name
			"xbox one s controller",
			//product Image
			"../images/products/black-wall/xbox-one-s-controller/controller.png",
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
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One S Controller<br>-DIMENSIONS: 6.00 x 4.00 x 1.70",
			//url
			"single-product-page?designName=black-wall&productName=xbox-one-s-controller",
			//sku
			"CUS/CONTR/TOP/20209802"
		);
		$black_wall['xbox-one-x-controller'] = new product (
			//four images of size 589x591
			"../images/products/black-wall/xbox-one-x-controller/560X460/Front.jpg",
			"../images/products/black-wall/xbox-one-x-controller/560X460/Back.jpg",
			"../images/products/black-wall/xbox-one-x-controller/560X460/Side.jpg",
			"../images/products/black-wall/xbox-one-x-controller/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/black-wall/xbox-one-x-controller/187X140/Front.jpg",
			"../images/products/black-wall/xbox-one-x-controller/187X140/Back.jpg",
			"../images/products/black-wall/xbox-one-x-controller/187X140/Side.jpg",
			"../images/products/black-wall/xbox-one-x-controller/187X140/Zoom.jpg",
			//design name
			"black wall" ,
			//design name html
			"black<br>wall",
			//design image
			"../images/products/black-wall/design.jpg",
			//product name
			"xbox one x controller",
			//product Image
			"../images/products/black-wall/xbox-one-x-controller/controller.png",
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
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One X Controller<br>-DIMENSIONS: 6.00 x 4.00 x 1.70",
			//url
			"single-product-page?designName=black-wall&productName=xbox-one-x-controller",
			//sku
			"CUS/CONTR/TOP/20209803"
		);
		$black_wall['xbox-one-elite-controller'] = new product (
			//four images of size 589x591
			"../images/products/black-wall/xbox-one-elite-controller/560X460/Front.jpg",
			"../images/products/black-wall/xbox-one-elite-controller/560X460/Back.jpg",
			"../images/products/black-wall/xbox-one-elite-controller/560X460/Side.jpg",
			"../images/products/black-wall/xbox-one-elite-controller/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/black-wall/xbox-one-elite-controller/187X140/Front.jpg",
			"../images/products/black-wall/xbox-one-elite-controller/187X140/Back.jpg",
			"../images/products/black-wall/xbox-one-elite-controller/187X140/Side.jpg",
			"../images/products/black-wall/xbox-one-elite-controller/187X140/Zoom.jpg",
			//design name
			"black wall" ,
			//design name html
			"black<br>wall",
			//design image
			"../images/products/black-wall/design.jpg",
			//product name
			"xbox one elite controller",
			//product Image
			"../images/products/black-wall/xbox-one-elite-controller/controller.png",
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
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One Elite Controller<br>-DIMENSIONS: 6.00 x 4.00 x 1.70",
			//url
			"single-product-page?designName=black-wall&productName=xbox-one-elite-controller",
			//sku
			"CUS/CONTR/TOP/20209804"
		);
		$black_wall['xbox-one-elite-wireless-controller'] = new product (
			//four images of size 589x591
			"../images/products/black-wall/xbox-one-elite-wireless-controller/560X460/Front.jpg",
			"../images/products/black-wall/xbox-one-elite-wireless-controller/560X460/Back.jpg",
			"../images/products/black-wall/xbox-one-elite-wireless-controller/560X460/Side.jpg",
			"../images/products/black-wall/xbox-one-elite-wireless-controller/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/black-wall/xbox-one-elite-wireless-controller/187X140/Front.jpg",
			"../images/products/black-wall/xbox-one-elite-wireless-controller/187X140/Back.jpg",
			"../images/products/black-wall/xbox-one-elite-wireless-controller/187X140/Side.jpg",
			"../images/products/black-wall/xbox-one-elite-wireless-controller/187X140/Zoom.jpg",
			//design name
			"black wall" ,
			//design name html
			"black<br>wall",
			//design image
			"../images/products/black-wall/design.jpg",
			//product name
			"xbox one elite wireless controller",
			//product Image
			"../images/products/black-wall/xbox-one-elite-wireless-controller/controller.png",
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
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One Elite Wireless Controller<br>-DIMENSIONS: 6.00 x 4.00 x 1.70",
			//url
			"single-product-page?designName=black-wall&productName=xbox-one-elite-wireless-controller",
			//sku
			"CUS/CONTR/TOP/20209805"
		);

		// consoles

		$black_wall['xbox-one-console'] = new product (
		//four images of size 589x591
			"../images/products/black-wall/xbox-one-console/560X460/Front.jpg",
			"../images/products/black-wall/xbox-one-console/560X460/Back.jpg",
			"../images/products/black-wall/xbox-one-console/560X460/Side.jpg",
			"../images/products/black-wall/xbox-one-console/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/black-wall/xbox-one-console/187X140/Front.jpg",
			"../images/products/black-wall/xbox-one-console/187X140/Back.jpg",
			"../images/products/black-wall/xbox-one-console/187X140/Side.jpg",
			"../images/products/black-wall/xbox-one-console/187X140/Zoom.jpg",
			//design name
			"black wall" ,
			//design name html
			"black<br>wall",
			//design image
			"../images/products/black-wall/design.jpg",
			//product name
			"xbox one console",
			//product Image
			"../images/products/black-wall/xbox-one-console/console.png",
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
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One console<br>-DIMENSIONS: 12.00 x 0.01 x 29.00",
			//url
			"single-product-page?designName=black-wall&productName=xbox-one-console",
			//sku
			"CUS/CONTR/TOP/20209806"
		);
		$black_wall['xbox-one-s-console'] = new product (
			//four images of size 589x591
			"../images/products/black-wall/xbox-one-s-console/560X460/Front.jpg",
			"../images/products/black-wall/xbox-one-s-console/560X460/Back.jpg",
			"../images/products/black-wall/xbox-one-s-console/560X460/Side.jpg",
			"../images/products/black-wall/xbox-one-s-console/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/black-wall/xbox-one-s-console/187X140/Front.jpg",
			"../images/products/black-wall/xbox-one-s-console/187X140/Back.jpg",
			"../images/products/black-wall/xbox-one-s-console/187X140/Side.jpg",
			"../images/products/black-wall/xbox-one-s-console/187X140/Zoom.jpg",
			//design name
			"black wall" ,
			//design name html
			"black<br>wall",
			//design image
			"../images/products/black-wall/design.jpg",
			//product name
			"xbox one s console",
			//product Image
			"../images/products/black-wall/xbox-one-s-console/console.png",
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
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One S console<br>-DIMENSIONS: 12.00 x 0.01 x 29.00",
			//url
			"single-product-page?designName=black-wall&productName=xbox-one-s-console",
			//sku
			"CUS/CONTR/TOP/20209807"
		);
		$black_wall['xbox-one-x-console'] = new product (
			//four images of size 589x591
			"../images/products/black-wall/xbox-one-x-console/560X460/Front.jpg",
			"../images/products/black-wall/xbox-one-x-console/560X460/Back.jpg",
			"../images/products/black-wall/xbox-one-x-console/560X460/Side.jpg",
			"../images/products/black-wall/xbox-one-x-console/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/black-wall/xbox-one-x-console/187X140/Front.jpg",
			"../images/products/black-wall/xbox-one-x-console/187X140/Back.jpg",
			"../images/products/black-wall/xbox-one-x-console/187X140/Side.jpg",
			"../images/products/black-wall/xbox-one-x-console/187X140/Zoom.jpg",
			//design name
			"black wall" ,
			//design name html
			"black<br>wall",
			//design image
			"../images/products/black-wall/design.jpg",
			//product name
			"xbox one x console",
			//product Image
			"../images/products/black-wall/xbox-one-x-console/console.png",
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
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One X console<br>-DIMENSIONS: 11.42 x 0.01 x 11.90",
			//url
			"single-product-page?designName=black-wall&productName=xbox-one-x-console",
			//sku
			"CUS/CONTR/TOP/20209808"
		); 

		// bundle
		$black_wall['xbox-one-bundle'] = new product (
			//four images of size 589x591
			"../images/products/black-wall/xbox-one-bundle/560X460/Front.jpg",
			"../images/products/black-wall/xbox-one-bundle/560X460/Back.jpg",
			"../images/products/black-wall/xbox-one-bundle/560X460/Side.jpg",
			"../images/products/black-wall/xbox-one-bundle/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/black-wall/xbox-one-bundle/187X140/Front.jpg",
			"../images/products/black-wall/xbox-one-bundle/187X140/Back.jpg",
			"../images/products/black-wall/xbox-one-bundle/187X140/Side.jpg",
			"../images/products/black-wall/xbox-one-bundle/187X140/Zoom.jpg",
			//design name
			"black wall" ,
			//design name html
			"black<br>wall",
			//design image
			"../images/products/black-wall/design.jpg",
			//product name
			"xbox one bundle",
			//product Image
			"../images/products/black-wall/xbox-one-bundle/bundle.png",
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
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One console & Controller <br>-DIMENSIONS: Console: 12.00 x 0.01 x 29.00<br>Controller: 6.00 x 4.00 x 1.70",
			//url
			"single-product-page?designName=black-wall&productName=xbox-one-bundle",
			//sku
			"CUS/CONTR/TOP/20209809"
		); 

		$black_wall['xbox-one-s-bundle'] = new product (
			//four images of size 589x591
			"../images/products/black-wall/xbox-one-s-bundle/560X460/Front.jpg",
			"../images/products/black-wall/xbox-one-s-bundle/560X460/Back.jpg",
			"../images/products/black-wall/xbox-one-s-bundle/560X460/Side.jpg",
			"../images/products/black-wall/xbox-one-s-bundle/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/black-wall/xbox-one-s-bundle/187X140/Front.jpg",
			"../images/products/black-wall/xbox-one-s-bundle/187X140/Back.jpg",
			"../images/products/black-wall/xbox-one-s-bundle/187X140/Side.jpg",
			"../images/products/black-wall/xbox-one-s-bundle/187X140/Zoom.jpg",
			//design name
			"black wall" ,
			//design name html
			"black<br>wall",
			//design image
			"../images/products/black-wall/design.jpg",
			//product name
			"xbox one s bundle",
			//product Image
			"../images/products/black-wall/xbox-one-s-bundle/bundle.png",
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
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One S console & Controller <br>-DIMENSIONS: Console: 12.00 x 0.01 x 29.00<br>Controller: 6.00 x 4.00 x 1.70",
			//url
			"single-product-page?designName=black-wall&productName=xbox-one-s-bundle",
			//sku
			"CUS/CONTR/TOP/20209810"
		); 

		$black_wall['xbox-one-x-bundle'] = new product (
			//four images of size 589x591
			"../images/products/black-wall/xbox-one-x-bundle/560X460/Front.jpg",
			"../images/products/black-wall/xbox-one-x-bundle/560X460/Back.jpg",
			"../images/products/black-wall/xbox-one-x-bundle/560X460/Side.jpg",
			"../images/products/black-wall/xbox-one-x-bundle/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/black-wall/xbox-one-x-bundle/187X140/Front.jpg",
			"../images/products/black-wall/xbox-one-x-bundle/187X140/Back.jpg",
			"../images/products/black-wall/xbox-one-x-bundle/187X140/Side.jpg",
			"../images/products/black-wall/xbox-one-x-bundle/187X140/Zoom.jpg",
			//design name
			"black wall" ,
			//design name html
			"black<br>wall",
			//design image
			"../images/products/black-wall/design.jpg",
			//product name
			"xbox one x bundle",
			//product Image
			"../images/products/black-wall/xbox-one-x-bundle/bundle.png",
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
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One X console & Controller <br>-DIMENSIONS: Console: 12.00 x 0.01 x 29.00<br>Controller: 6.00 x 4.00 x 1.70",
			//url
			"single-product-page?designName=black-wall&productName=xbox-one-x-bundle",
			//sku
			"CUS/CONTR/TOP/20209811"
		); 
		// controller
		$blue_kaleidoscope['xbox-one-controller'] = new product (
		//four images of size 589x591
			"../images/products/blue-kaleidoscope/xbox-one-controller/560X460/Front.jpg",
			"../images/products/blue-kaleidoscope/xbox-one-controller/560X460/Back.jpg",
			"../images/products/blue-kaleidoscope/xbox-one-controller/560X460/Side.jpg",
			"../images/products/blue-kaleidoscope/xbox-one-controller/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/blue-kaleidoscope/xbox-one-controller/187X140/Front.jpg",
			"../images/products/blue-kaleidoscope/xbox-one-controller/187X140/Back.jpg",
			"../images/products/blue-kaleidoscope/xbox-one-controller/187X140/Side.jpg",
			"../images/products/blue-kaleidoscope/xbox-one-controller/187X140/Zoom.jpg",
			//design name
			"blue kaleidoscope" ,
			//design name html
			"blue<br>kaleidoscope",
			//design image
			"../images/products/blue-kaleidoscope/design.jpg",
			//product name
			"xbox one controller",
			//product Image
			"../images/products/blue-kaleidoscope/xbox-one-controller/controller.png",
			//price dollars
			"15",
			//price cents
			"99",
			//short description
			"Blue Kaliedoscope inspired design<br> from industry expert Tsujita Masujiro, <br>Identify yourself as the best in Pop Culture",
			//long description
			"Blue Kaliedoscope inspired design<br> from industry expert Tsujita Masujiro, <br>Identify yourself as the best in Pop Culture",
			//author
			"Tsujita Masujiro",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One Controller<br>-DIMENSIONS: 6.00 x 4.00 x 1.70",
			//url
			"single-product-page?designName=blue-kaleidoscope&productName=xbox-one-x-controller",
			//sku
			"CUS/CONTR/TOP/20209821"
		);
		$blue_kaleidoscope['xbox-one-s-controller'] = new product (
			//four images of size 589x591
			"../images/products/blue-kaleidoscope/xbox-one-s-controller/560X460/Front.jpg",
			"../images/products/blue-kaleidoscope/xbox-one-s-controller/560X460/Back.jpg",
			"../images/products/blue-kaleidoscope/xbox-one-s-controller/560X460/Side.jpg",
			"../images/products/blue-kaleidoscope/xbox-one-s-controller/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/blue-kaleidoscope/xbox-one-s-controller/187X140/Front.jpg",
			"../images/products/blue-kaleidoscope/xbox-one-s-controller/187X140/Back.jpg",
			"../images/products/blue-kaleidoscope/xbox-one-s-controller/187X140/Side.jpg",
			"../images/products/blue-kaleidoscope/xbox-one-s-controller/187X140/Zoom.jpg",
			//design name
			"blue kaleidoscope" ,
			//design name html
			"blue<br>kaleidoscope",
			//design image
			"../images/products/blue-kaleidoscope/design.jpg",
			//product name
			"xbox one s controller",
			//product Image
			"../images/products/blue-kaleidoscope/xbox-one-s-controller/controller.png",
			//price dollars
			"15",
			//price cents
			"99",
			//short description
			"Blue Kaliedoscope inspired design<br> from industry expert Tsujita Masujiro, <br>Identify yourself as the best in Pop Culture",
			//long description
			"Blue Kaliedoscope inspired design<br> from industry expert Tsujita Masujiro, <br>Identify yourself as the best in Pop Culture",
			//author
			"Tsujita Masujiro",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One S Controller<br>-DIMENSIONS: 6.00 x 4.00 x 1.70",
			//url
			"single-product-page?designName=blue-kaleidoscope&productName=xbox-one-s-controller",
			//sku
			"CUS/CONTR/TOP/20209822"
		);
		$blue_kaleidoscope['xbox-one-x-controller'] = new product (
			//four images of size 589x591
			"../images/products/blue-kaleidoscope/xbox-one-x-controller/560X460/Front.jpg",
			"../images/products/blue-kaleidoscope/xbox-one-x-controller/560X460/Back.jpg",
			"../images/products/blue-kaleidoscope/xbox-one-x-controller/560X460/Side.jpg",
			"../images/products/blue-kaleidoscope/xbox-one-x-controller/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/blue-kaleidoscope/xbox-one-x-controller/187X140/Front.jpg",
			"../images/products/blue-kaleidoscope/xbox-one-x-controller/187X140/Back.jpg",
			"../images/products/blue-kaleidoscope/xbox-one-x-controller/187X140/Side.jpg",
			"../images/products/blue-kaleidoscope/xbox-one-x-controller/187X140/Zoom.jpg",
			//design name
			"blue kaleidoscope" ,
			//design name html
			"blue<br>kaleidoscope",
			//design image
			"../images/products/blue-kaleidoscope/design.jpg",
			//product name
			"xbox one x controller",
			//product Image
			"../images/products/blue-kaleidoscope/xbox-one-x-controller/controller.png",
			//price dollars
			"15",
			//price cents
			"99",
			//short description
			"Blue Kaliedoscope inspired design<br> from industry expert Tsujita Masujiro, <br>Identify yourself as the best in Pop Culture",
			//long description
			"Blue Kaliedoscope inspired design<br> from industry expert Tsujita Masujiro, <br>Identify yourself as the best in Pop Culture",
			//author
			"Tsujita Masujiro",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One X Controller<br>-DIMENSIONS: 6.00 x 4.00 x 1.70",
			//url
			"single-product-page?designName=blue-kaleidoscope&productName=xbox-one-x-controller",
			//sku
			"CUS/CONTR/TOP/20209815"
		); 
		$blue_kaleidoscope['xbox-one-elite-controller'] = new product (
			//four images of size 589x591
			"../images/products/blue-kaleidoscope/xbox-one-elite-controller/560X460/Front.jpg",
			"../images/products/blue-kaleidoscope/xbox-one-elite-controller/560X460/Back.jpg",
			"../images/products/blue-kaleidoscope/xbox-one-elite-controller/560X460/Side.jpg",
			"../images/products/blue-kaleidoscope/xbox-one-elite-controller/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/blue-kaleidoscope/xbox-one-elite-controller/187X140/Front.jpg",
			"../images/products/blue-kaleidoscope/xbox-one-elite-controller/187X140/Back.jpg",
			"../images/products/blue-kaleidoscope/xbox-one-elite-controller/187X140/Side.jpg",
			"../images/products/blue-kaleidoscope/xbox-one-elite-controller/187X140/Zoom.jpg",
			//design name
			"blue kaleidoscope" ,
			//design name html
			"blue<br>kaleidoscope",
			//design image
			"../images/products/blue-kaleidoscope/design.jpg",
			//product name
			"xbox one elite controller",
			//product Image
			"../images/products/blue-kaleidoscope/xbox-one-elite-controller/controller.png",
			//price dollars
			"15",
			//price cents
			"99",
			//short description
			"Blue Kaliedoscope inspired design<br> from industry expert Tsujita Masujiro, <br>Identify yourself as the best in Pop Culture",
			//long description
			"Blue Kaliedoscope inspired design<br> from industry expert Tsujita Masujiro, <br>Identify yourself as the best in Pop Culture",
			//author
			"Tsujita Masujiro",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One Elite Controller<br>-DIMENSIONS: 6.00 x 4.00 x 1.70",
			//url
			"single-product-page?designName=blue-kaleidoscope&productName=xbox-one-elite-controller",
			//sku
			"CUS/CONTR/TOP/20209824"
		);
		$blue_kaleidoscope['xbox-one-elite-wireless-controller'] = new product (
			//four images of size 589x591
			"../images/products/blue-kaleidoscope/xbox-one-elite-wireless-controller/560X460/Front.jpg",
			"../images/products/blue-kaleidoscope/xbox-one-elite-wireless-controller/560X460/Back.jpg",
			"../images/products/blue-kaleidoscope/xbox-one-elite-wireless-controller/560X460/Side.jpg",
			"../images/products/blue-kaleidoscope/xbox-one-elite-wireless-controller/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/blue-kaleidoscope/xbox-one-elite-wireless-controller/187X140/Front.jpg",
			"../images/products/blue-kaleidoscope/xbox-one-elite-wireless-controller/187X140/Back.jpg",
			"../images/products/blue-kaleidoscope/xbox-one-elite-wireless-controller/187X140/Side.jpg",
			"../images/products/blue-kaleidoscope/xbox-one-elite-wireless-controller/187X140/Zoom.jpg",
			//design name
			"blue kaleidoscope" ,
			//design name html
			"blue<br>kaleidoscope",
			//design image
			"../images/products/blue-kaleidoscope/design.jpg",
			//product name
			"xbox one elite wireless controller",
			//product Image
			"../images/products/blue-kaleidoscope/xbox-one-x-controller/controller.png",
			//price dollars
			"15",
			//price cents
			"99",
			//short description
			"Blue Kaliedoscope inspired design<br> from industry expert Tsujita Masujiro, <br>Identify yourself as the best in Pop Culture",
			//long description
			"Blue Kaliedoscope inspired design<br> from industry expert Tsujita Masujiro, <br>Identify yourself as the best in Pop Culture",
			//author
			"Tsujita Masujiro",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One Elite Wireless Controller<br>-DIMENSIONS: 6.00 x 4.00 x 1.70",
			//url
			"single-product-page?designName=blue-kaleidoscope&productName=xbox-one-x-controller",
			//sku
			"CUS/CONTR/TOP/20209825"
		);

		//consoles
		
		$blue_kaleidoscope['xbox-one-console'] = new product (
		//four images of size 589x591
			"../images/products/blue-kaleidoscope/xbox-one-console/560X460/Front.jpg",
			"../images/products/blue-kaleidoscope/xbox-one-console/560X460/Back.jpg",
			"../images/products/blue-kaleidoscope/xbox-one-console/560X460/Side.jpg",
			"../images/products/blue-kaleidoscope/xbox-one-console/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/blue-kaleidoscope/xbox-one-console/187X140/Front.jpg",
			"../images/products/blue-kaleidoscope/xbox-one-console/187X140/Back.jpg",
			"../images/products/blue-kaleidoscope/xbox-one-console/187X140/Side.jpg",
			"../images/products/blue-kaleidoscope/xbox-one-console/187X140/Zoom.jpg",
			//design name
			"blue kaleidoscope" ,
			//design name html
			"blue<br>kaleidscope",
			//design image
			"../images/products/blue-kaleidoscope/design.jpg",
			//product name
			"xbox one console",
			//product Image
			"../images/products/blue-kaleidoscope/xbox-one-console/console.png",
			//price dollars
			"20",
			//price cents
			"99",
			//short description
			"Blue Kaliedoscope inspired design<br> from industry expert Tsujita Masujiro, <br>Identify yourself as the best in Pop Culture",
			//long description
			"Blue Kaliedoscope inspired design<br> from industry expert Tsujita Masujiro, <br>Identify yourself as the best in Pop Culture",
			//author
			"Tsujita Masujiro",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One console<br>-DIMENSIONS: 12.00 x 0.01 x 29.00",
			//url
			"single-product-page?designName=blue-kaleidoscope&productName=xbox-one-console",
			//sku
			"CUS/CONTR/TOP/20209826"
		);
		$blue_kaleidoscope['xbox-one-s-console'] = new product (
			//four images of size 589x591
			"../images/products/blue-kaleidoscope/xbox-one-s-console/560X460/Front.jpg",
			"../images/products/blue-kaleidoscope/xbox-one-s-console/560X460/Back.jpg",
			"../images/products/blue-kaleidoscope/xbox-one-s-console/560X460/Side.jpg",
			"../images/products/blue-kaleidoscope/xbox-one-s-console/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/blue-kaleidoscope/xbox-one-s-console/187X140/Front.jpg",
			"../images/products/blue-kaleidoscope/xbox-one-s-console/187X140/Back.jpg",
			"../images/products/blue-kaleidoscope/xbox-one-s-console/187X140/Side.jpg",
			"../images/products/blue-kaleidoscope/xbox-one-s-console/187X140/Zoom.jpg",
			//design name
			"blue kaleidoscope" ,
			//design name html
			"blue<br>kaleidscope",
			//design image
			"../images/products/blue-kaleidoscope/design.jpg",
			//product name
			"xbox one s console",
			//product Image
			"../images/products/blue-kaleidoscope/xbox-one-s-console/console.png",
			//price dollars
			"20",
			//price cents
			"99",
			//short description
			"Blue Kaliedoscope inspired design<br> from industry expert Tsujita Masujiro, <br>Identify yourself as the best in Pop Culture",
			//long description
			"Blue Kaliedoscope inspired design<br> from industry expert Tsujita Masujiro, <br>Identify yourself as the best in Pop Culture",
			//author
			"Tsujita Masujiro",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One S console<br>-DIMENSIONS: 12.00 x 0.01 x 29.00",
			//url
			"single-product-page?designName=blue-kaleidoscope&productName=xbox-one-s-console",
			//sku
			"CUS/CONTR/TOP/20209827"
		);
		$blue_kaleidoscope['xbox-one-x-console'] = new product (
			//four images of size 589x591
			"../images/products/blue-kaleidoscope/xbox-one-x-console/560X460/Front.jpg",
			"../images/products/blue-kaleidoscope/xbox-one-x-console/560X460/Back.jpg",
			"../images/products/blue-kaleidoscope/xbox-one-x-console/560X460/Side.jpg",
			"../images/products/blue-kaleidoscope/xbox-one-x-console/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/blue-kaleidoscope/xbox-one-x-console/187X140/Front.jpg",
			"../images/products/blue-kaleidoscope/xbox-one-x-console/187X140/Back.jpg",
			"../images/products/blue-kaleidoscope/xbox-one-x-console/187X140/Side.jpg",
			"../images/products/blue-kaleidoscope/xbox-one-x-console/187X140/Zoom.jpg",
			//design name
			"blue kaleidoscope" ,
			//design name html
			"blue<br>kaleidscope",
			//design image
			"../images/products/blue-kaleidoscope/design.jpg",
			//product name
			"xbox one x console",
			//product Image
			"../images/products/blue-kaleidoscope/xbox-one-x-console/console.png",
			//price dollars
			"20",
			//price cents
			"99",
			//short description
			"Blue Kaliedoscope inspired design<br> from industry expert Tsujita Masujiro, <br>Identify yourself as the best in Pop Culture",
			//long description
			"Blue Kaliedoscope inspired design<br> from industry expert Tsujita Masujiro, <br>Identify yourself as the best in Pop Culture",
			//author
			"Tsujita Masujiro",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One X console<br>-DIMENSIONS: 11.42 x 0.01 x 11.90",
			//url
			"single-product-page?designName=blue-kaleidoscope&productName=xbox-one-x-console",
			//sku
			"CUS/CONTR/TOP/20209828"
		); 

		// bundle

		$blue_kaleidoscope['xbox-one-bundle'] = new product (
			//four images of size 589x591
			"../images/products/blue-kaleidoscope/xbox-one-bundle/560X460/Front.jpg",
			"../images/products/blue-kaleidoscope/xbox-one-bundle/560X460/Back.jpg",
			"../images/products/blue-kaleidoscope/xbox-one-bundle/560X460/Side.jpg",
			"../images/products/blue-kaleidoscope/xbox-one-bundle/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/blue-kaleidoscope/xbox-one-bundle/187X140/Front.jpg",
			"../images/products/blue-kaleidoscope/xbox-one-bundle/187X140/Back.jpg",
			"../images/products/blue-kaleidoscope/xbox-one-bundle/187X140/Side.jpg",
			"../images/products/blue-kaleidoscope/xbox-one-bundle/187X140/Zoom.jpg",
			//design name
			"blue kaleidoscope" ,
			//design name html
			"blue<br>kaleidoscope",
			//design image
			"../images/products/blue-kaleidoscope/design.jpg",
			//product name
			"xbox one bundle",
			//product Image
			"../images/products/blue-kaleidoscope/xbox-one-bundle/bundle.png",
			//price dollars
			"23",
			//price cents
			"99",
			//short description
			"Blue Kaliedoscope inspired design<br> from industry expert Tsujita Masujiro, <br>Identify yourself as the best in Pop Culture",
			//long description
			"Blue Kaliedoscope inspired design<br> from industry expert Tsujita Masujiro, <br>Identify yourself as the best in Pop Culture",
			//author
			"Tsujita Masujiro",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One console & Controller <br>-DIMENSIONS: Console: 12.00 x 0.01 x 29.00<br>Controller: 6.00 x 4.00 x 1.70",
			//url
			"single-product-page?designName=blue-kaleidoscope&productName=xbox-one-bundle",
			//sku
			"CUS/CONTR/TOP/20209829"
		); 

		$blue_kaleidoscope['xbox-one-s-bundle'] = new product (
			//four images of size 589x591
			"../images/products/blue-kaleidoscope/xbox-one-s-bundle/560X460/Front.jpg",
			"../images/products/blue-kaleidoscope/xbox-one-s-bundle/560X460/Back.jpg",
			"../images/products/blue-kaleidoscope/xbox-one-s-bundle/560X460/Side.jpg",
			"../images/products/blue-kaleidoscope/xbox-one-s-bundle/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/blue-kaleidoscope/xbox-one-s-bundle/187X140/Front.jpg",
			"../images/products/blue-kaleidoscope/xbox-one-s-bundle/187X140/Back.jpg",
			"../images/products/blue-kaleidoscope/xbox-one-s-bundle/187X140/Side.jpg",
			"../images/products/blue-kaleidoscope/xbox-one-s-bundle/187X140/Zoom.jpg",
			//design name
			"blue kaleidoscope" ,
			//design name html
			"blue<br>kaleidoscope",
			//design image
			"../images/products/blue-kaleidoscope/design.jpg",
			//product name
			"xbox one s bundle",
			//product Image
			"../images/products/blue-kaleidoscope/xbox-one-s-bundle/bundle.png",
			//price dollars
			"23",
			//price cents
			"99",
			//short description
			"Blue Kaliedoscope inspired design<br> from industry expert Tsujita Masujiro, <br>Identify yourself as the best in Pop Culture",
			//long description
			"Blue Kaliedoscope inspired design<br> from industry expert Tsujita Masujiro, <br>Identify yourself as the best in Pop Culture",
			//author
			"Tsujita Masujiro",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One S console & Controller <br>-DIMENSIONS: Console: 12.00 x 0.01 x 29.00<br>Controller: 6.00 x 4.00 x 1.70",
			//url
			"single-product-page?designName=blue-kaleidoscope&productName=xbox-one-s-bundle",
			//sku
			"CUS/CONTR/TOP/20209830"
		); 

		$blue_kaleidoscope['xbox-one-x-bundle'] = new product (
			//four images of size 589x591
			"../images/products/blue-kaleidoscope/xbox-one-x-bundle/560X460/Front.jpg",
			"../images/products/blue-kaleidoscope/xbox-one-x-bundle/560X460/Back.jpg",
			"../images/products/blue-kaleidoscope/xbox-one-x-bundle/560X460/Side.jpg",
			"../images/products/blue-kaleidoscope/xbox-one-x-bundle/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/blue-kaleidoscope/xbox-one-x-bundle/187X140/Front.jpg",
			"../images/products/blue-kaleidoscope/xbox-one-x-bundle/187X140/Back.jpg",
			"../images/products/blue-kaleidoscope/xbox-one-x-bundle/187X140/Side.jpg",
			"../images/products/blue-kaleidoscope/xbox-one-x-bundle/187X140/Zoom.jpg",
			//design name
			"blue kaleidoscope" ,
			//design name html
			"blue<br>kaleidoscope",
			//design image
			"../images/products/blue-kaleidoscope/design.jpg",
			//product name
			"xbox one x bundle",
			//product Image
			"../images/products/blue-kaleidoscope/xbox-one-x-bundle/bundle.png",
			//price dollars
			"23",
			//price cents
			"99",
			//short description
			"Blue Kaliedoscope inspired design<br> from industry expert Tsujita Masujiro, <br>Identify yourself as the best in Pop Culture",
			//long description
			"Blue Kaliedoscope inspired design<br> from industry expert Tsujita Masujiro, <br>Identify yourself as the best in Pop Culture",
			//author
			"Tsujita Masujiro",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One X console & Controller <br>-DIMENSIONS: Console: 12.00 x 0.01 x 29.00<br>Controller: 6.00 x 4.00 x 1.70",
			//url
			"single-product-page?designName=blue-kaleidoscope&productName=xbox-one-x-bundle",
			//sku
			"CUS/CONTR/TOP/20209831"
		);
		
		// controller
		$call_of_duty['xbox-one-controller'] = new product (
		//four images of size 589x591
			"../images/products/call-of-duty/xbox-one-controller/560X460/Front.jpg",
			"../images/products/call-of-duty/xbox-one-controller/560X460/Back.jpg",
			"../images/products/call-of-duty/xbox-one-controller/560X460/Side.jpg",
			"../images/products/call-of-duty/xbox-one-controller/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/call-of-duty/xbox-one-controller/187X140/Front.jpg",
			"../images/products/call-of-duty/xbox-one-controller/187X140/Back.jpg",
			"../images/products/call-of-duty/xbox-one-controller/187X140/Side.jpg",
			"../images/products/call-of-duty/xbox-one-controller/187X140/Zoom.jpg",
			//design name
			"call of duty" ,
			//design name html
			"call <br>of duty",
			//design image
			"../images/products/call-of-duty/design.jpg",
			//product name
			"xbox one controller",
			//product Image
			"../images/products/call-of-duty/xbox-one-controller/controller.png",
			//price dollars
			"15",
			//price cents
			"99",
			//short description
			"call of duty inspired design from<br> industry expert Richard Eveland,<br> Identify yourself as the best in gaming,<br> OfficalMerch from Activision",
			//long description
			"call of duty inspired design from<br> industry expert Richard Eveland,<br> Identify yourself as the best in gaming,<br> OfficalMerch from Activision",
			//author
			"Richard Eveland",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One Controller<br>-DIMENSIONS: 6.00 x 4.00 x 1.70",
			//url
			"single-product-page?designName=call-of-duty&productName=xbox-one-x-controller",
			//sku
			"CUS/CONTR/TOP/20209841"
		);
		$call_of_duty['xbox-one-s-controller'] = new product (
			//four images of size 589x591
			"../images/products/call-of-duty/xbox-one-s-controller/560X460/Front.jpg",
			"../images/products/call-of-duty/xbox-one-s-controller/560X460/Back.jpg",
			"../images/products/call-of-duty/xbox-one-s-controller/560X460/Side.jpg",
			"../images/products/call-of-duty/xbox-one-s-controller/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/call-of-duty/xbox-one-s-controller/187X140/Front.jpg",
			"../images/products/call-of-duty/xbox-one-s-controller/187X140/Back.jpg",
			"../images/products/call-of-duty/xbox-one-s-controller/187X140/Side.jpg",
			"../images/products/call-of-duty/xbox-one-s-controller/187X140/Zoom.jpg",
			//design name
			"call of duty" ,
			//design name html
			"call <br>of duty",
			//design image
			"../images/products/call-of-duty/design.jpg",
			//product name
			"xbox one s controller",
			//product Image
			"../images/products/call-of-duty/xbox-one-s-controller/controller.png",
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
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One S Controller<br>-DIMENSIONS: 6.00 x 4.00 x 1.70",
			//url
			"single-product-page?designName=call-of-duty&productName=xbox-one-s-controller",
			//sku
			"CUS/CONTR/TOP/20209842"
		);
		$call_of_duty['xbox-one-x-controller'] = new product (
			//four images of size 589x591
			"../images/products/call-of-duty/xbox-one-x-controller/560X460/Front.jpg",
			"../images/products/call-of-duty/xbox-one-x-controller/560X460/Back.jpg",
			"../images/products/call-of-duty/xbox-one-x-controller/560X460/Side.jpg",
			"../images/products/call-of-duty/xbox-one-x-controller/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/call-of-duty/xbox-one-x-controller/187X140/Front.jpg",
			"../images/products/call-of-duty/xbox-one-x-controller/187X140/Back.jpg",
			"../images/products/call-of-duty/xbox-one-x-controller/187X140/Side.jpg",
			"../images/products/call-of-duty/xbox-one-x-controller/187X140/Zoom.jpg",
			//design name
			"call of duty" ,
			//design name html
			"call <br>of duty",
			//design image
			"../images/products/call-of-duty/design.jpg",
			//product name
			"xbox one x controller",
			//product Image
			"../images/products/call-of-duty/xbox-one-x-controller/controller.png",
			//price dollars
			"15",
			//price cents
			"99",
			//short description
			"Call of Duty inspired design from<br> industry expert Richard Eveland,<br> Identify yourself as the best in gaming,<br> OfficalMerch from Activision",
			//long description
			"Call of Duty inspired design from<br> industry expert Richard Eveland,<br> Identify yourself as the best in gaming,<br> OfficalMerch from Activision",
			//author
			"Richard Eveland",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One X Controller<br>-DIMENSIONS: 6.00 x 4.00 x 1.70",
			//url
			"single-product-page?designName=call-of-duty&productName=xbox-one-x-controller",
			//sku
			"CUS/CONTR/TOP/20209843"
		); 
		$call_of_duty['xbox-one-elite-controller'] = new product (
			//four images of size 589x591
			"../images/products/call-of-duty/xbox-one-elite-controller/560X460/Front.jpg",
			"../images/products/call-of-duty/xbox-one-elite-controller/560X460/Back.jpg",
			"../images/products/call-of-duty/xbox-one-elite-controller/560X460/Side.jpg",
			"../images/products/call-of-duty/xbox-one-elite-controller/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/call-of-duty/xbox-one-elite-controller/187X140/Front.jpg",
			"../images/products/call-of-duty/xbox-one-elite-controller/187X140/Back.jpg",
			"../images/products/call-of-duty/xbox-one-elite-controller/187X140/Side.jpg",
			"../images/products/call-of-duty/xbox-one-elite-controller/187X140/Zoom.jpg",
			//design name
			"call of duty" ,
			//design name html
			"call <br>of duty",
			//design image
			"../images/products/call-of-duty/design.jpg",
			//product name
			"xbox one elite controller",
			//product Image
			"../images/products/call-of-duty/xbox-one-elite-controller/controller.png",
			//price dollars
			"15",
			//price cents
			"99",
			//short description
			"Call of Duty inspired design from<br> industry expert Richard Eveland,<br> Identify yourself as the best in gaming,<br> OfficalMerch from Activision",
			//long description
			"Call Of Duty inspired design from<br> industry expert Richard Eveland,<br> Identify yourself as the best in gaming,<br> OfficalMerch from Activision",
			//author
			"Richard Eveland",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One Elite Controller<br>-DIMENSIONS: 6.00 x 4.00 x 1.70",
			//url
			"single-product-page?designName=call-of-duty&productName=xbox-one-elite-controller",
			//sku
			"CUS/CONTR/TOP/20209844"
		);
		$call_of_duty['xbox-one-elite-wireless-controller'] = new product (
			//four images of size 589x591
			"../images/products/call-of-duty/xbox-one-elite-wireless-controller/560X460/Front.jpg",
			"../images/products/call-of-duty/xbox-one-elite-wireless-controller/560X460/Back.jpg",
			"../images/products/call-of-duty/xbox-one-elite-wireless-controller/560X460/Side.jpg",
			"../images/products/call-of-duty/xbox-one-elite-wireless-controller/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/call-of-duty/xbox-one-elite-wireless-controller/187X140/Front.jpg",
			"../images/products/call-of-duty/xbox-one-elite-wireless-controller/187X140/Back.jpg",
			"../images/products/call-of-duty/xbox-one-elite-wireless-controller/187X140/Side.jpg",
			"../images/products/call-of-duty/xbox-one-elite-wireless-controller/187X140/Zoom.jpg",
			//design name
			"call of duty" ,
			//design name html
			"call <br>of duty",
			//design image
			"../images/products/call-of-duty/design.jpg",
			//product name
			"xbox one elite wireless controller",
			//product Image
			"../images/products/call-of-duty/xbox-one-elite-wireless-controller/controller.png",
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
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One Elite Wireless Controller<br>-DIMENSIONS: 6.00 x 4.00 x 1.70",
			//url
			"single-product-page?designName=call-of-duty&productName=xbox-one-elite-wireless-controller",
			//sku
			"CUS/CONTR/TOP/20209845"
		);

		// console
		$call_of_duty['xbox-one-console'] = new product (
		//four images of size 589x591
			"../images/products/call-of-duty/xbox-one-console/560X460/Front.jpg",
			"../images/products/call-of-duty/xbox-one-console/560X460/Back.jpg",
			"../images/products/call-of-duty/xbox-one-console/560X460/Side.jpg",
			"../images/products/call-of-duty/xbox-one-console/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/call-of-duty/xbox-one-console/187X140/Front.jpg",
			"../images/products/call-of-duty/xbox-one-console/187X140/Back.jpg",
			"../images/products/call-of-duty/xbox-one-console/187X140/Side.jpg",
			"../images/products/call-of-duty/xbox-one-console/187X140/Zoom.jpg",
			//design name
			"call of duty" ,
			//design name html
			"call<br>of duty",
			//design image
			"../images/products/call-of-duty/design.jpg",
			//product name
			"xbox one console",
			//product Image
			"../images/products/call-of-duty/xbox-one-console/console.png",
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
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One console<br>-DIMENSIONS: 12.00 x 0.01 x 29.00",
			//url
			"single-product-page?designName=call-of-duty&productName=xbox-one-console",
			//sku
			"CUS/CONTR/TOP/20209846"
		);
		$call_of_duty['xbox-one-s-console'] = new product (
			//four images of size 589x591
			"../images/products/call-of-duty/xbox-one-s-console/560X460/Front.jpg",
			"../images/products/call-of-duty/xbox-one-s-console/560X460/Back.jpg",
			"../images/products/call-of-duty/xbox-one-s-console/560X460/Side.jpg",
			"../images/products/call-of-duty/xbox-one-s-console/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/call-of-duty/xbox-one-s-console/187X140/Front.jpg",
			"../images/products/call-of-duty/xbox-one-s-console/187X140/Back.jpg",
			"../images/products/call-of-duty/xbox-one-s-console/187X140/Side.jpg",
			"../images/products/call-of-duty/xbox-one-s-console/187X140/Zoom.jpg",
			//design name
			"call of duty" ,
			//design name html
			"call<br>of duty",
			//design image
			"../images/products/call-of-duty/design.jpg",
			//product name
			"xbox one s console",
			//product Image
			"../images/products/call-of-duty/xbox-one-s-console/console.png",
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
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One S console<br>-DIMENSIONS: 12.00 x 0.01 x 29.00",
			//url
			"single-product-page?designName=call-of-duty&productName=xbox-one-s-console",
			//sku
			"CUS/CONTR/TOP/20209847"
		);
		$call_of_duty['xbox-one-x-console'] = new product (
			//four images of size 589x591
			"../images/products/call-of-duty/xbox-one-x-console/560X460/Front.jpg",
			"../images/products/call-of-duty/xbox-one-x-console/560X460/Back.jpg",
			"../images/products/call-of-duty/xbox-one-x-console/560X460/Side.jpg",
			"../images/products/call-of-duty/xbox-one-x-console/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/call-of-duty/xbox-one-x-console/187X140/Front.jpg",
			"../images/products/call-of-duty/xbox-one-x-console/187X140/Back.jpg",
			"../images/products/call-of-duty/xbox-one-x-console/187X140/Side.jpg",
			"../images/products/call-of-duty/xbox-one-x-console/187X140/Zoom.jpg",
			//design name
			"call of duty" ,
			//design name html
			"call<br>of duty",
			//design image
			"../images/products/call-of-duty/design.jpg",
			//product name
			"xbox one x console",
			//product Image
			"../images/products/call-of-duty/xbox-one-x-console/console.png",
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
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One X console<br>-DIMENSIONS: 11.42 x 0.01 x 11.90",
			//url
			"single-product-page?designName=call-of-duty&productName=xbox-one-x-console",
			//sku
			"CUS/CONTR/TOP/20209848"
		); 
		

		// bundle

		$call_of_duty['xbox-one-bundle'] = new product (
			//four images of size 589x591
			"../images/products/call-of-duty/xbox-one-bundle/560X460/Front.jpg",
			"../images/products/call-of-duty/xbox-one-bundle/560X460/Back.jpg",
			"../images/products/call-of-duty/xbox-one-bundle/560X460/Side.jpg",
			"../images/products/call-of-duty/xbox-one-bundle/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/call-of-duty/xbox-one-bundle/187X140/Front.jpg",
			"../images/products/call-of-duty/xbox-one-bundle/187X140/Back.jpg",
			"../images/products/call-of-duty/xbox-one-bundle/187X140/Side.jpg",
			"../images/products/call-of-duty/xbox-one-bundle/187X140/Zoom.jpg",
			//design name
			"call of duty" ,
			//design name html
			"call <br>of duty",
			//design image
			"../images/products/call-of-duty/design.jpg",
			//product name
			"xbox one bundle",
			//product Image
			"../images/products/call-of-duty/xbox-one-bundle/bundle.png",
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
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One console & Controller <br>-DIMENSIONS: Console: 12.00 x 0.01 x 29.00<br>Controller: 6.00 x 4.00 x 1.70",
			//url
			"single-product-page?designName=call-of-duty&productName=xbox-one-bundle",
			//sku
			"CUS/CONTR/TOP/20209849"
		); 

		$call_of_duty['xbox-one-s-bundle'] = new product (
			//four images of size 589x591
			"../images/products/call-of-duty/xbox-one-s-bundle/560X460/Front.jpg",
			"../images/products/call-of-duty/xbox-one-s-bundle/560X460/Back.jpg",
			"../images/products/call-of-duty/xbox-one-s-bundle/560X460/Side.jpg",
			"../images/products/call-of-duty/xbox-one-s-bundle/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/call-of-duty/xbox-one-s-bundle/187X140/Front.jpg",
			"../images/products/call-of-duty/xbox-one-s-bundle/187X140/Back.jpg",
			"../images/products/call-of-duty/xbox-one-s-bundle/187X140/Side.jpg",
			"../images/products/call-of-duty/xbox-one-s-bundle/187X140/Zoom.jpg",
			//design name
			"call of duty" ,
			//design name html
			"call <br>of duty",
			//design image
			"../images/products/call-of-duty/design.jpg",
			//product name
			"xbox one s bundle",
			//product Image
			"../images/products/call-of-duty/xbox-one-s-bundle/bundle.png",
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
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One S console & Controller <br>-DIMENSIONS: Console: 12.00 x 0.01 x 29.00<br>Controller: 6.00 x 4.00 x 1.70",
			//url
			"single-product-page?designName=call-of-duty&productName=xbox-one-s-bundle",
			//sku
			"CUS/CONTR/TOP/20209823"
		); 

		$call_of_duty['xbox-one-x-bundle'] = new product (
			//four images of size 589x591
			"../images/products/call-of-duty/xbox-one-x-bundle/560X460/Front.jpg",
			"../images/products/call-of-duty/xbox-one-x-bundle/560X460/Back.jpg",
			"../images/products/call-of-duty/xbox-one-x-bundle/560X460/Side.jpg",
			"../images/products/call-of-duty/xbox-one-x-bundle/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/call-of-duty/xbox-one-x-bundle/187X140/Front.jpg",
			"../images/products/call-of-duty/xbox-one-x-bundle/187X140/Back.jpg",
			"../images/products/call-of-duty/xbox-one-x-bundle/187X140/Side.jpg",
			"../images/products/call-of-duty/xbox-one-x-bundle/187X140/Zoom.jpg",
			//design name
			"call of duty" ,
			//design name html
			"call <br>of duty",
			//design image
			"../images/products/call-of-duty/design.jpg",
			//product name
			"xbox one x bundle",
			//product Image
			"../images/products/call-of-duty/xbox-one-x-bundle/bundle.png",
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
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One X console & Controller <br>-DIMENSIONS: Console: 12.00 x 0.01 x 29.00<br>Controller: 6.00 x 4.00 x 1.70",
			//url
			"single-product-page?designName=call-of-duty&productName=xbox-one-x-bundle",
			//sku
			"CUS/CONTR/TOP/20209851"
		);

		// controller
		$doodle_Lines['xbox-one-controller'] = new product (
		//four images of size 589x591
			"../images/products/doodle-lines/xbox-one-controller/560X460/Front.jpg",
			"../images/products/doodle-lines/xbox-one-controller/560X460/Back.jpg",
			"../images/products/doodle-lines/xbox-one-controller/560X460/Side.jpg",
			"../images/products/doodle-lines/xbox-one-controller/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/doodle-lines/xbox-one-controller/187X140/Front.jpg",
			"../images/products/doodle-lines/xbox-one-controller/187X140/Back.jpg",
			"../images/products/doodle-lines/xbox-one-controller/187X140/Side.jpg",
			"../images/products/doodle-lines/xbox-one-controller/187X140/Zoom.jpg",
			//design name
			"doodle Lines" ,
			//design name html
			"doodle<br>Lines",
			//design image
			"../images/products/doodle-lines/design.jpg",
			//product name
			"xbox one controller",
			//product Image
			"../images/products/doodle-lines/xbox-one-controller/controller.png",
			//price dollars
			"15",
			//price cents
			"99",
			//short description
			"Doodle Lines inspired design from<br> industry expert Robert W. Chambers,<br> Identify yourself as the best in Pop Culture",
			//long description
			"Doodle Lines inspired design from<br> industry expert Robert W. Chambers,<br> Identify yourself as the best in Pop Culture",
			//author
			"Robert W. Chambers",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One Controller<br>-DIMENSIONS: 6.00 x 4.00 x 1.70",
			//url
			"single-product-page?designName=doodle-lines&productName=xbox-one-x-controller",
			//sku
			"CUS/CONTR/TOP/20209861"
		);
		$doodle_Lines['xbox-one-s-controller'] = new product (
			//four images of size 589x591
			"../images/products/doodle-lines/xbox-one-s-controller/560X460/Front.jpg",
			"../images/products/doodle-lines/xbox-one-s-controller/560X460/Back.jpg",
			"../images/products/doodle-lines/xbox-one-s-controller/560X460/Side.jpg",
			"../images/products/doodle-lines/xbox-one-s-controller/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/doodle-lines/xbox-one-s-controller/187X140/Front.jpg",
			"../images/products/doodle-lines/xbox-one-s-controller/187X140/Back.jpg",
			"../images/products/doodle-lines/xbox-one-s-controller/187X140/Side.jpg",
			"../images/products/doodle-lines/xbox-one-s-controller/187X140/Zoom.jpg",
			//design name
			"doodle Lines" ,
			//design name html
			"doodle<br>Lines",
			//design image
			"../images/products/doodle-lines/design.jpg",
			//product name
			"xbox one s controller",
			//product Image
			"../images/products/doodle-lines/xbox-one-s-controller/controller.png",
			//price dollars
			"15",
			//price cents
			"99",
			//short description
			"Doodle Lines inspired design from<br> industry expert Robert W. Chambers,<br> Identify yourself as the best in Pop Culture",
			//long description
			"Doodle Lines inspired design from<br> industry expert Robert W. Chambers,<br> Identify yourself as the best in Pop Culture",
			//author
			"Robert W. Chambers",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One S Controller<br>-DIMENSIONS: 6.00 x 4.00 x 1.70",
			//url
			"single-product-page?designName=doodle-lines&productName=xbox-one-s-controller",
			//sku
			"CUS/CONTR/TOP/20209862"
		);
		$doodle_Lines['xbox-one-x-controller'] = new product (
			//four images of size 589x591
			"../images/products/doodle-lines/xbox-one-x-controller/560X460/Front.jpg",
			"../images/products/doodle-lines/xbox-one-x-controller/560X460/Back.jpg",
			"../images/products/doodle-lines/xbox-one-x-controller/560X460/Side.jpg",
			"../images/products/doodle-lines/xbox-one-x-controller/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/doodle-lines/xbox-one-x-controller/187X140/Front.jpg",
			"../images/products/doodle-lines/xbox-one-x-controller/187X140/Back.jpg",
			"../images/products/doodle-lines/xbox-one-x-controller/187X140/Side.jpg",
			"../images/products/doodle-lines/xbox-one-x-controller/187X140/Zoom.jpg",
			//design name
			"doodle Lines" ,
			//design name html
			"doodle<br>Lines",
			//design image
			"../images/products/doodle-lines/design.jpg",
			//product name
			"xbox one x controller",
			//product Image
			"../images/products/doodle-lines/xbox-one-x-controller/controller.png",
			//price dollars
			"15",
			//price cents
			"99",
			//short description
			"Doodle Lines inspired design from<br> industry expert Robert W. Chambers,<br> Identify yourself as the best in Pop Culture",
			//long description
			"Doodle Lines inspired design from<br> industry expert Robert W. Chambers,<br> Identify yourself as the best in Pop Culture",
			//author
			"Robert W. Chambers",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One X Controller<br>-DIMENSIONS: 6.00 x 4.00 x 1.70",
			//url
			"single-product-page?designName=doodle-lines&productName=xbox-one-x-controller",
			//sku
			"CUS/CONTR/TOP/20209863"
		); 
		$doodle_Lines['xbox-one-elite-controller'] = new product (
			//four images of size 589x591
			"../images/products/doodle-lines/xbox-one-elite-controller/560X460/Front.jpg",
			"../images/products/doodle-lines/xbox-one-elite-controller/560X460/Back.jpg",
			"../images/products/doodle-lines/xbox-one-elite-controller/560X460/Side.jpg",
			"../images/products/doodle-lines/xbox-one-elite-controller/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/doodle-lines/xbox-one-elite-controller/187X140/Front.jpg",
			"../images/products/doodle-lines/xbox-one-elite-controller/187X140/Back.jpg",
			"../images/products/doodle-lines/xbox-one-elite-controller/187X140/Side.jpg",
			"../images/products/doodle-lines/xbox-one-elite-controller/187X140/Zoom.jpg",
			//design name
			"doodle Lines" ,
			//design name html
			"doodle<br>Lines",
			//design image
			"../images/products/doodle-lines/design.jpg",
			//product name
			"xbox one elite controller",
			//product Image
			"../images/products/doodle-lines/xbox-one-elite-controller/controller.png",
			//price dollars
			"15",
			//price cents
			"99",
			//short description
			"Doodle Lines inspired design from<br> industry expert Robert W. Chambers,<br> Identify yourself as the best in Pop Culture",
			//long description
			"Doodle Lines inspired design from<br> industry expert Robert W. Chambers,<br> Identify yourself as the best in Pop Culture",
			//author
			"Robert W. Chambers",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One  Controller<br>-DIMENSIONS: 6.00 x 4.00 x 1.70",
			//url
			"single-product-page?designName=doodle-lines&productName=xbox-one-elite-controller",
			//sku
			"CUS/CONTR/TOP/20209864"
		);
		$doodle_Lines['xbox-one-elite-wireless-controller'] = new product (
			//four images of size 589x591
			"../images/products/doodle-lines/xbox-one-elite-wireless-controller/560X460/Front.jpg",
			"../images/products/doodle-lines/xbox-one-elite-wireless-controller/560X460/Back.jpg",
			"../images/products/doodle-lines/xbox-one-elite-wireless-controller/560X460/Side.jpg",
			"../images/products/doodle-lines/xbox-one-elite-wireless-controller/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/doodle-lines/xbox-one-elite-wireless-controller/187X140/Front.jpg",
			"../images/products/doodle-lines/xbox-one-elite-wireless-controller/187X140/Back.jpg",
			"../images/products/doodle-lines/xbox-one-elite-wireless-controller/187X140/Side.jpg",
			"../images/products/doodle-lines/xbox-one-elite-wireless-controller/187X140/Zoom.jpg",
			//design name
			"doodle Lines" ,
			//design name html
			"doodle<br>Lines",
			//design image
			"../images/products/doodle-lines/design.jpg",
			//product name
			"xbox one elite wireless controller",
			//product Image
			"../images/products/doodle-lines/xbox-one-elite-wireless-controller/controller.png",
			//price dollars
			"15",
			//price cents
			"99",
			//short description
			"Doodle Lines inspired design from<br> industry expert Robert W. Chambers,<br> Identify yourself as the best in Pop Culture",
			//long description
			"Doodle Lines inspired design from<br> industry expert Robert W. Chambers,<br> Identify yourself as the best in Pop Culture",
			//author
			"Robert W. Chambers",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One Elite Wireless Controller<br>-DIMENSIONS: 6.00 x 4.00 x 1.70",
			//url
			"single-product-page?designName=doodle-lines&productName=xbox-one-elite-wireless-controller",
			//sku
			"CUS/CONTR/TOP/20209865"
		);

		// consoles
		$doodle_Lines['xbox-one-console'] = new product (
		//four images of size 589x591
			"../images/products/doodle-lines/xbox-one-console/560X460/Front.jpg",
			"../images/products/doodle-lines/xbox-one-console/560X460/Back.jpg",
			"../images/products/doodle-lines/xbox-one-console/560X460/Side.jpg",
			"../images/products/doodle-lines/xbox-one-console/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/doodle-lines/xbox-one-console/187X140/Front.jpg",
			"../images/products/doodle-lines/xbox-one-console/187X140/Back.jpg",
			"../images/products/doodle-lines/xbox-one-console/187X140/Side.jpg",
			"../images/products/doodle-lines/xbox-one-console/187X140/Zoom.jpg",
			//design name
			"doodle Lines" ,
			//design name html
			"doodle<br>Lines",
			//design image
			"../images/products/doodle-lines/design.jpg",
			//product name
			"xbox one console",
			//product Image
			"../images/products/doodle-lines/xbox-one-console/console.png",
			//price dollars
			"20",
			//price cents
			"99",
			//short description
			"Doodle Lines inspired design from<br> industry expert Robert W. Chambers,<br> Identify yourself as the best in Pop Culture",
			//long description
			"Doodle Lines inspired design from<br> industry expert Robert W. Chambers,<br> Identify yourself as the best in Pop Culture",
			//author
			"Robert W. Chambers",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One console<br>-DIMENSIONS: 12.00 x 0.01 x 29.00",
			//url
			"single-product-page?designName=doodle-lines&productName=xbox-one-console",
			//sku
			"CUS/CONTR/TOP/20209866"
		);
		$doodle_Lines['xbox-one-s-console'] = new product (
			//four images of size 589x591
			"../images/products/doodle-lines/xbox-one-s-console/560X460/Front.jpg",
			"../images/products/doodle-lines/xbox-one-s-console/560X460/Back.jpg",
			"../images/products/doodle-lines/xbox-one-s-console/560X460/Side.jpg",
			"../images/products/doodle-lines/xbox-one-s-console/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/doodle-lines/xbox-one-s-console/187X140/Front.jpg",
			"../images/products/doodle-lines/xbox-one-s-console/187X140/Back.jpg",
			"../images/products/doodle-lines/xbox-one-s-console/187X140/Side.jpg",
			"../images/products/doodle-lines/xbox-one-s-console/187X140/Zoom.jpg",
			//design name
			"doodle Lines" ,
			//design name html
			"doodle<br>Lines",
			//design image
			"../images/products/doodle-lines/design.jpg",
			//product name
			"xbox one s console",
			//product Image
			"../images/products/doodle-lines/xbox-one-s-console/console.png",
			//price dollars
			"20",
			//price cents
			"99",
			//short description
			"Doodle Lines inspired design from<br> industry expert Robert W. Chambers,<br> Identify yourself as the best in Pop Culture",
			//long description
			"Doodle Lines inspired design from<br> industry expert Robert W. Chambers,<br> Identify yourself as the best in Pop Culture",
			//author
			"Robert W. Chambers",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One S console<br>-DIMENSIONS: 12.00 x 0.01 x 29.00",
			//url
			"single-product-page?designName=doodle-lines&productName=xbox-one-s-console",
			//sku
			"CUS/CONTR/TOP/20209867"
		);
		$doodle_Lines['xbox-one-x-console'] = new product (
			//four images of size 589x591
			"../images/products/doodle-lines/xbox-one-x-console/560X460/Front.jpg",
			"../images/products/doodle-lines/xbox-one-x-console/560X460/Back.jpg",
			"../images/products/doodle-lines/xbox-one-x-console/560X460/Side.jpg",
			"../images/products/doodle-lines/xbox-one-x-console/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/doodle-lines/xbox-one-x-console/187X140/Front.jpg",
			"../images/products/doodle-lines/xbox-one-x-console/187X140/Back.jpg",
			"../images/products/doodle-lines/xbox-one-x-console/187X140/Side.jpg",
			"../images/products/doodle-lines/xbox-one-x-console/187X140/Zoom.jpg",
			//design name
			"doodle Lines" ,
			//design name html
			"doodle<br>Lines",
			//design image
			"../images/products/doodle-lines/design.jpg",
			//product name
			"xbox one x console",
			//product Image
			"../images/products/doodle-lines/xbox-one-x-console/console.png",
			//price dollars
			"20",
			//price cents
			"99",
			//short description
			"Doodle Lines inspired design from<br> industry expert Robert W. Chambers,<br> Identify yourself as the best in Pop Culture",
			//long description
			"Doodle Lines inspired design from<br> industry expert Robert W. Chambers,<br> Identify yourself as the best in Pop Culture",
			//author
			"Robert W. Chambers",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One X console<br>-DIMENSIONS: 11.42 x 0.01 x 11.90",
			//url
			"single-product-page?designName=doodle-lines&productName=xbox-one-x-console",
			//sku
			"CUS/CONTR/TOP/20209868"
		); 
		
		// bundle
		
		$doodle_Lines['xbox-one-bundle'] = new product (
			//four images of size 589x591
			"../images/products/doodle-lines/xbox-one-bundle/560X460/Front.jpg",
			"../images/products/doodle-lines/xbox-one-bundle/560X460/Back.jpg",
			"../images/products/doodle-lines/xbox-one-bundle/560X460/Side.jpg",
			"../images/products/doodle-lines/xbox-one-bundle/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/doodle-lines/xbox-one-bundle/187X140/Front.jpg",
			"../images/products/doodle-lines/xbox-one-bundle/187X140/Back.jpg",
			"../images/products/doodle-lines/xbox-one-bundle/187X140/Side.jpg",
			"../images/products/doodle-lines/xbox-one-bundle/187X140/Zoom.jpg",
			//design name
			"doodle lines" ,
			//design name html
			"doodle<br>lines",
			//design image
			"../images/products/doodle-lines/design.jpg",
			//product name
			"xbox one bundle",
			//product Image
			"../images/products/doodle-lines/xbox-one-bundle/bundle.png",
			//price dollars
			"23",
			//price cents
			"99",
			//short description
			"Doodle Lines inspired design from<br> industry expert Robert W. Chambers,<br> Identify yourself as the best in Pop Culture",
			//long description
			"Doodle Lines inspired design from<br> industry expert Robert W. Chambers,<br> Identify yourself as the best in Pop Culture",
			//author
			"Robert W. Chambers",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One console & Controller <br>-DIMENSIONS: Console: 12.00 x 0.01 x 29.00<br>Controller: 6.00 x 4.00 x 1.70",
			//url
			"single-product-page?designName=doodle-lines&productName=xbox-one-bundle",
			//sku
			"CUS/CONTR/TOP/20209869"
		); 

		$doodle_Lines['xbox-one-s-bundle'] = new product (
			//four images of size 589x591
			"../images/products/doodle-lines/xbox-one-s-bundle/560X460/Front.jpg",
			"../images/products/doodle-lines/xbox-one-s-bundle/560X460/Back.jpg",
			"../images/products/doodle-lines/xbox-one-s-bundle/560X460/Side.jpg",
			"../images/products/doodle-lines/xbox-one-s-bundle/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/doodle-lines/xbox-one-s-bundle/187X140/Front.jpg",
			"../images/products/doodle-lines/xbox-one-s-bundle/187X140/Back.jpg",
			"../images/products/doodle-lines/xbox-one-s-bundle/187X140/Side.jpg",
			"../images/products/doodle-lines/xbox-one-s-bundle/187X140/Zoom.jpg",
			//design name
			"doodle lines" ,
			//design name html
			"doodle<br>lines",
			//design image
			"../images/products/doodle-lines/design.jpg",
			//product name
			"xbox one s bundle",
			//product Image
			"../images/products/doodle-lines/xbox-one-s-bundle/bundle.png",
			//price dollars
			"23",
			//price cents
			"99",
			//short description
			"Doodle Lines inspired design from<br> industry expert Robert W. Chambers,<br> Identify yourself as the best in Pop Culture",
			//long description
			"Doodle Lines inspired design from<br> industry expert Robert W. Chambers,<br> Identify yourself as the best in Pop Culture",
			//author
			"Robert W. Chambers",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One S console & Controller <br>-DIMENSIONS: Console: 12.00 x 0.01 x 29.00<br>Controller: 6.00 x 4.00 x 1.70",
			//url
			"single-product-page?designName=doodle-lines&productName=xbox-one-s-bundle",
			//sku
			"CUS/CONTR/TOP/20209870"
		); 

		$doodle_Lines['xbox-one-x-bundle'] = new product (
			//four images of size 589x591
			"../images/products/doodle-lines/xbox-one-x-bundle/560X460/Front.jpg",
			"../images/products/doodle-lines/xbox-one-x-bundle/560X460/Back.jpg",
			"../images/products/doodle-lines/xbox-one-x-bundle/560X460/Side.jpg",
			"../images/products/doodle-lines/xbox-one-x-bundle/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/doodle-lines/xbox-one-x-bundle/187X140/Front.jpg",
			"../images/products/doodle-lines/xbox-one-x-bundle/187X140/Back.jpg",
			"../images/products/doodle-lines/xbox-one-x-bundle/187X140/Side.jpg",
			"../images/products/doodle-lines/xbox-one-x-bundle/187X140/Zoom.jpg",
			//design name
			"doodle lines" ,
			//design name html
			"doodle<br>lines",
			//design image
			"../images/products/doodle-lines/design.jpg",
			//product name
			"xbox one x bundle",
			//product Image
			"../images/products/doodle-lines/xbox-one-x-bundle/bundle.png",
			//price dollars
			"23",
			//price cents
			"99",
			//short description
			"Doodle Lines inspired design from<br> industry expert Robert W. Chambers,<br> Identify yourself as the best in Pop Culture",
			//long description
			"Doodle Lines inspired design from<br> industry expert Robert W. Chambers,<br> Identify yourself as the best in Pop Culture",
			//author
			"Robert W. Chambers",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One X console & Controller <br>-DIMENSIONS: Console: 12.00 x 0.01 x 29.00<br>Controller: 6.00 x 4.00 x 1.70",
			//url
			"single-product-page?designName=doodle-lines&productName=xbox-one-x-bundle",
			//sku
			"CUS/CONTR/TOP/20209871"
		);

		// controller
		$dragon_ball_z['xbox-one-controller'] = new product (
		//four images of size 589x591
			"../images/products/dragon-ball-z/xbox-one-controller/560X460/Front.jpg",
			"../images/products/dragon-ball-z/xbox-one-controller/560X460/Back.jpg",
			"../images/products/dragon-ball-z/xbox-one-controller/560X460/Side.jpg",
			"../images/products/dragon-ball-z/xbox-one-controller/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/dragon-ball-z/xbox-one-controller/187X140/Front.jpg",
			"../images/products/dragon-ball-z/xbox-one-controller/187X140/Back.jpg",
			"../images/products/dragon-ball-z/xbox-one-controller/187X140/Side.jpg",
			"../images/products/dragon-ball-z/xbox-one-controller/187X140/Zoom.jpg",
			//design name
			"dragon ball z" ,
			//design name html
			"dragon<br> ball z",
			//design image
			"../images/products/dragon-ball-z/design.jpg",
			//product name
			"xbox one controller",
			//product Image
			"../images/products/dragon-ball-z/xbox-one-controller/controller.png",
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
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One Controller<br>-DIMENSIONS: 6.00 x 4.00 x 1.70",
			//url
			"single-product-page?designName=dragon-ball-z&productName=xbox-one-controller",
			//sku
			"CUS/CONTR/TOP/20209881"
		);
		$dragon_ball_z['xbox-one-s-controller'] = new product (
			//four images of size 589x591
			"../images/products/dragon-ball-z/xbox-one-s-controller/560X460/Front.jpg",
			"../images/products/dragon-ball-z/xbox-one-s-controller/560X460/Back.jpg",
			"../images/products/dragon-ball-z/xbox-one-s-controller/560X460/Side.jpg",
			"../images/products/dragon-ball-z/xbox-one-s-controller/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/dragon-ball-z/xbox-one-s-controller/187X140/Front.jpg",
			"../images/products/dragon-ball-z/xbox-one-s-controller/187X140/Back.jpg",
			"../images/products/dragon-ball-z/xbox-one-s-controller/187X140/Side.jpg",
			"../images/products/dragon-ball-z/xbox-one-s-controller/187X140/Zoom.jpg",
			//design name
			"dragon ball z" ,
			//design name html
			"dragon<br> ball z",
			//design image
			"../images/products/dragon-ball-z/design.jpg",
			//product name
			"xbox one s controller",
			//product Image
			"../images/products/dragon-ball-z/xbox-one-s-controller/controller.png",
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
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One S Controller<br>-DIMENSIONS: 6.00 x 4.00 x 1.70",
			//url
			"single-product-page?designName=dragon-ball-z&productName=xbox-one-s-controller",
			//sku
			"CUS/CONTR/TOP/20209882"
		);
		$dragon_ball_z['xbox-one-x-controller'] = new product (
			//four images of size 589x591
			"../images/products/dragon-ball-z/xbox-one-x-controller/560X460/Front.jpg",
			"../images/products/dragon-ball-z/xbox-one-x-controller/560X460/Back.jpg",
			"../images/products/dragon-ball-z/xbox-one-x-controller/560X460/Side.jpg",
			"../images/products/dragon-ball-z/xbox-one-x-controller/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/dragon-ball-z/xbox-one-x-controller/187X140/Front.jpg",
			"../images/products/dragon-ball-z/xbox-one-x-controller/187X140/Back.jpg",
			"../images/products/dragon-ball-z/xbox-one-x-controller/187X140/Side.jpg",
			"../images/products/dragon-ball-z/xbox-one-x-controller/187X140/Zoom.jpg",
			//design name
			"dragon ball z" ,
			//design name html
			"dragon<br> ball z",
			//design image
			"../images/products/dragon-ball-z/design.jpg",
			//product name
			"xbox one x controller",
			//product Image
			"../images/products/dragon-ball-z/xbox-one-x-controller/controller.png",
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
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One X Controller<br>-DIMENSIONS: 6.00 x 4.00 x 1.70",
			//url
			"single-product-page?designName=dragon-ball-z&productName=xbox-one-x-controller",
			//sku
			"CUS/CONTR/TOP/20209883"
		); 
		$dragon_ball_z['xbox-one-elite-controller'] = new product (
			//four images of size 589x591
			"../images/products/dragon-ball-z/xbox-one-elite-controller/560X460/Front.jpg",
			"../images/products/dragon-ball-z/xbox-one-elite-controller/560X460/Back.jpg",
			"../images/products/dragon-ball-z/xbox-one-elite-controller/560X460/Side.jpg",
			"../images/products/dragon-ball-z/xbox-one-elite-controller/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/dragon-ball-z/xbox-one-elite-controller/187X140/Front.jpg",
			"../images/products/dragon-ball-z/xbox-one-elite-controller/187X140/Back.jpg",
			"../images/products/dragon-ball-z/xbox-one-elite-controller/187X140/Side.jpg",
			"../images/products/dragon-ball-z/xbox-one-elite-controller/187X140/Zoom.jpg",
			//design name
			"dragon ball z" ,
			//design name html
			"dragon<br> ball z",
			//design image
			"../images/products/dragon-ball-z/design.jpg",
			//product name
			"xbox one elite controller",
			//product Image
			"../images/products/dragon-ball-z/xbox-one-x-controller/controller.png",
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
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One Elite Controller<br>-DIMENSIONS: 6.00 x 4.00 x 1.70",
			//url
			"single-product-page?designName=dragon-ball-z&productName=xbox-one-elite-controller",
			//sku
			"CUS/CONTR/TOP/20209884"
		);
		$dragon_ball_z['xbox-one-elite-wireless-controller'] = new product (
			//four images of size 589x591
			"../images/products/dragon-ball-z/xbox-one-elite-wireless-controller/560X460/Front.jpg",
			"../images/products/dragon-ball-z/xbox-one-elite-wireless-controller/560X460/Back.jpg",
			"../images/products/dragon-ball-z/xbox-one-elite-wireless-controller/560X460/Side.jpg",
			"../images/products/dragon-ball-z/xbox-one-elite-wireless-controller/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/dragon-ball-z/xbox-one-elite-wireless-controller/187X140/Front.jpg",
			"../images/products/dragon-ball-z/xbox-one-elite-wireless-controller/187X140/Back.jpg",
			"../images/products/dragon-ball-z/xbox-one-elite-wireless-controller/187X140/Side.jpg",
			"../images/products/dragon-ball-z/xbox-one-elite-wireless-controller/187X140/Zoom.jpg",
			//design name
			"dragon ball z" ,
			//design name html
			"dragon<br> ball z",
			//design image
			"../images/products/dragon-ball-z/design.jpg",
			//product name
			"xbox one elite wireless controller",
			//product Image
			"../images/products/dragon-ball-z/xbox-one-elite-wireless-controller/controller.png",
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
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One Elite Wireless Controller<br>-DIMENSIONS: 6.00 x 4.00 x 1.70",
			//url
			"single-product-page?designName=dragon-ball-z&productName=xbox-one-elite-wireless-controller",
			//sku
			"CUS/CONTR/TOP/20209885"
		);

		// console
		$dragon_ball_z['xbox-one-console'] = new product (
		//four images of size 589x591
			"../images/products/dragon-ball-z/xbox-one-console/560X460/Front.jpg",
			"../images/products/dragon-ball-z/xbox-one-console/560X460/Back.jpg",
			"../images/products/dragon-ball-z/xbox-one-console/560X460/Side.jpg",
			"../images/products/dragon-ball-z/xbox-one-console/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/dragon-ball-z/xbox-one-console/187X140/Front.jpg",
			"../images/products/dragon-ball-z/xbox-one-console/187X140/Back.jpg",
			"../images/products/dragon-ball-z/xbox-one-console/187X140/Side.jpg",
			"../images/products/dragon-ball-z/xbox-one-console/187X140/Zoom.jpg",
			//design name
			"dragon ball z" ,
			//design name html
			"dragon <br>ball z",
			//design image
			"../images/products/dragon-ball-z/design.jpg",
			//product name
			"xbox one console",
			//product Image
			"../images/products/dragon-ball-z/xbox-one-console/console.png",
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
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One console<br>-DIMENSIONS: 12.00 x 0.01 x 29.00",
			//url
			"single-product-page?designName=dragon-ball-z&productName=xbox-one-console",
			//sku
			"CUS/CONTR/TOP/20209886"
		);
		$dragon_ball_z['xbox-one-s-console'] = new product (
			//four images of size 589x591
			"../images/products/dragon-ball-z/xbox-one-s-console/560X460/Front.jpg",
			"../images/products/dragon-ball-z/xbox-one-s-console/560X460/Back.jpg",
			"../images/products/dragon-ball-z/xbox-one-s-console/560X460/Side.jpg",
			"../images/products/dragon-ball-z/xbox-one-s-console/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/dragon-ball-z/xbox-one-s-console/187X140/Front.jpg",
			"../images/products/dragon-ball-z/xbox-one-s-console/187X140/Back.jpg",
			"../images/products/dragon-ball-z/xbox-one-s-console/187X140/Side.jpg",
			"../images/products/dragon-ball-z/xbox-one-s-console/187X140/Zoom.jpg",
			//design name
			"dragon ball z" ,
			//design name html
			"dragon <br>ball z",
			//design image
			"../images/products/dragon-ball-z/design.jpg",
			//product name
			"xbox one s console",
			//product Image
			"../images/products/dragon-ball-z/xbox-one-s-console/console.png",
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
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One S console<br>-DIMENSIONS: 12.00 x 0.01 x 29.00",
			//url
			"single-product-page?designName=dragon-ball-z&productName=xbox-one-s-console",
			//sku
			"CUS/CONTR/TOP/20209887"
		);
		$dragon_ball_z['xbox-one-x-console'] = new product (
			//four images of size 589x591
			"../images/products/dragon-ball-z/xbox-one-x-console/560X460/Front.jpg",
			"../images/products/dragon-ball-z/xbox-one-x-console/560X460/Back.jpg",
			"../images/products/dragon-ball-z/xbox-one-x-console/560X460/Side.jpg",
			"../images/products/dragon-ball-z/xbox-one-x-console/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/dragon-ball-z/xbox-one-x-console/187X140/Front.jpg",
			"../images/products/dragon-ball-z/xbox-one-x-console/187X140/Back.jpg",
			"../images/products/dragon-ball-z/xbox-one-x-console/187X140/Side.jpg",
			"../images/products/dragon-ball-z/xbox-one-x-console/187X140/Zoom.jpg",
			//design name
			"dragon ball z" ,
			//design name html
			"dragon <br>ball z",
			//design image
			"../images/products/dragon-ball-z/design.jpg",
			//product name
			"xbox one x console",
			//product Image
			"../images/products/dragon-ball-z/xbox-one-x-console/console.png",
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
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One X console<br>-DIMENSIONS: 11.42 x 0.01 x 11.90",
			//url
			"single-product-page?designName=dragon-ball-z&productName=xbox-one-x-console",
			//sku
			"CUS/CONTR/TOP/20209888"
		); 

		// bundle

		$dragon_ball_z['xbox-one-bundle'] = new product (
			//four images of size 589x591
			"../images/products/dragon-ball-z/xbox-one-bundle/560X460/Front.jpg",
			"../images/products/dragon-ball-z/xbox-one-bundle/560X460/Back.jpg",
			"../images/products/dragon-ball-z/xbox-one-bundle/560X460/Side.jpg",
			"../images/products/dragon-ball-z/xbox-one-bundle/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/dragon-ball-z/xbox-one-bundle/187X140/Front.jpg",
			"../images/products/dragon-ball-z/xbox-one-bundle/187X140/Back.jpg",
			"../images/products/dragon-ball-z/xbox-one-bundle/187X140/Side.jpg",
			"../images/products/dragon-ball-z/xbox-one-bundle/187X140/Zoom.jpg",
			//design name
			"dragon ball z" ,
			//design name html
			"dragon<br>ball z",
			//design image
			"../images/products/dragon-ball-z/design.jpg",
			//product name
			"xbox one bundle",
			//product Image
			"../images/products/dragon-ball-z/xbox-one-bundle/bundle.png",
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
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One console & Controller <br>-DIMENSIONS: Console: 12.00 x 0.01 x 29.00<br>Controller: 6.00 x 4.00 x 1.70",
			//url
			"single-product-page?designName=dragon-ball-z&productName=xbox-one-bundle",
			//sku
			"CUS/CONTR/TOP/20209889"
		); 

		$dragon_ball_z['xbox-one-s-bundle'] = new product (
			//four images of size 589x591
			"../images/products/dragon-ball-z/xbox-one-s-bundle/560X460/Front.jpg",
			"../images/products/dragon-ball-z/xbox-one-s-bundle/560X460/Back.jpg",
			"../images/products/dragon-ball-z/xbox-one-s-bundle/560X460/Side.jpg",
			"../images/products/dragon-ball-z/xbox-one-s-bundle/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/dragon-ball-z/xbox-one-s-bundle/187X140/Front.jpg",
			"../images/products/dragon-ball-z/xbox-one-s-bundle/187X140/Back.jpg",
			"../images/products/dragon-ball-z/xbox-one-s-bundle/187X140/Side.jpg",
			"../images/products/dragon-ball-z/xbox-one-s-bundle/187X140/Zoom.jpg",
			//design name
			"dragon ball z" ,
			//design name html
			"dragon<br>ball z",
			//design image
			"../images/products/dragon-ball-z/design.jpg",
			//product name
			"xbox one s bundle",
			//product Image
			"../images/products/dragon-ball-z/xbox-one-s-bundle/bundle.png",
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
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One S console & Controller <br>-DIMENSIONS: Console: 12.00 x 0.01 x 29.00<br>Controller: 6.00 x 4.00 x 1.70",
			//url
			"single-product-page?designName=dragon-ball-z&productName=xbox-one-s-bundle",
			//sku
			"CUS/CONTR/TOP/20209890"
		); 

		$dragon_ball_z['xbox-one-x-bundle'] = new product (
			//four images of size 589x591
			"../images/products/dragon-ball-z/xbox-one-x-bundle/560X460/Front.jpg",
			"../images/products/dragon-ball-z/xbox-one-x-bundle/560X460/Back.jpg",
			"../images/products/dragon-ball-z/xbox-one-x-bundle/560X460/Side.jpg",
			"../images/products/dragon-ball-z/xbox-one-x-bundle/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/dragon-ball-z/xbox-one-x-bundle/187X140/Front.jpg",
			"../images/products/dragon-ball-z/xbox-one-x-bundle/187X140/Back.jpg",
			"../images/products/dragon-ball-z/xbox-one-x-bundle/187X140/Side.jpg",
			"../images/products/dragon-ball-z/xbox-one-x-bundle/187X140/Zoom.jpg",
			//design name
			"dragon ball z" ,
			//design name html
			"dragon<br>ball z",
			//design image
			"../images/products/dragon-ball-z/design.jpg",
			//product name
			"xbox one x bundle",
			//product Image
			"../images/products/dragon-ball-z/xbox-one-x-bundle/bundle.png",
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
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One X console & Controller <br>-DIMENSIONS: Console: 12.00 x 0.01 x 29.00<br>Controller: 6.00 x 4.00 x 1.70",
			//url
			"single-product-page?designName=dragon-ball-z&productName=xbox-one-x-bundle",
			//sku
			"CUS/CONTR/TOP/20209891"
		);

		
		// controller
		$funky_ghost['xbox-one-controller'] = new product (
		//four images of size 589x591
			"../images/products/funky-ghost/xbox-one-controller/560X460/Front.jpg",
			"../images/products/funky-ghost/xbox-one-controller/560X460/Back.jpg",
			"../images/products/funky-ghost/xbox-one-controller/560X460/Side.jpg",
			"../images/products/funky-ghost/xbox-one-controller/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/funky-ghost/xbox-one-controller/187X140/Front.jpg",
			"../images/products/funky-ghost/xbox-one-controller/187X140/Back.jpg",
			"../images/products/funky-ghost/xbox-one-controller/187X140/Side.jpg",
			"../images/products/funky-ghost/xbox-one-controller/187X140/Zoom.jpg",
			//design name
			"funky ghost" ,
			//design name html
			"funky<br>ghost",
			//design image
			"../images/products/funky-ghost/design.jpg",
			//product name
			"xbox one controller",
			//product Image
			"../images/products/funky-ghost/xbox-one-controller/controller.png",
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
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One Controller<br>-DIMENSIONS: 6.00 x 4.00 x 1.70",
			//url
			"single-product-page?designName=funky-ghost&productName=xbox-one-controller",
			//sku
			"CUS/CONTR/TOP/20209901"
		);
		$funky_ghost['xbox-one-s-controller'] = new product (
			//four images of size 589x591
			"../images/products/funky-ghost/xbox-one-s-controller/560X460/Front.jpg",
			"../images/products/funky-ghost/xbox-one-s-controller/560X460/Back.jpg",
			"../images/products/funky-ghost/xbox-one-s-controller/560X460/Side.jpg",
			"../images/products/funky-ghost/xbox-one-s-controller/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/funky-ghost/xbox-one-s-controller/187X140/Front.jpg",
			"../images/products/funky-ghost/xbox-one-s-controller/187X140/Back.jpg",
			"../images/products/funky-ghost/xbox-one-s-controller/187X140/Side.jpg",
			"../images/products/funky-ghost/xbox-one-s-controller/187X140/Zoom.jpg",
			//design name
			"funky ghost" ,
			//design name html
			"funky<br>ghost",
			//design image
			"../images/products/funky-ghost/design.jpg",
			//product name
			"xbox one s controller",
			//product Image
			"../images/products/funky-ghost/xbox-one-s-controller/controller.png",
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
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One S Controller<br>-DIMENSIONS: 6.00 x 4.00 x 1.70",
			//url
			"single-product-page?designName=funky-ghost&productName=xbox-one-s-controller",
			//sku
			"CUS/CONTR/TOP/20209902"
		);
		$funky_ghost['xbox-one-x-controller'] = new product (
			//four images of size 589x591
			"../images/products/funky-ghost/xbox-one-x-controller/560X460/Front.jpg",
			"../images/products/funky-ghost/xbox-one-x-controller/560X460/Back.jpg",
			"../images/products/funky-ghost/xbox-one-x-controller/560X460/Side.jpg",
			"../images/products/funky-ghost/xbox-one-x-controller/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/funky-ghost/xbox-one-x-controller/187X140/Front.jpg",
			"../images/products/funky-ghost/xbox-one-x-controller/187X140/Back.jpg",
			"../images/products/funky-ghost/xbox-one-x-controller/187X140/Side.jpg",
			"../images/products/funky-ghost/xbox-one-x-controller/187X140/Zoom.jpg",
			//design name
			"funky ghost" ,
			//design name html
			"funky<br>ghost",
			//design image
			"../images/products/funky-ghost/design.jpg",
			//product name
			"xbox one x controller",
			//product Image
			"../images/products/funky-ghost/xbox-one-x-controller/controller.png",
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
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One X Controller<br>-DIMENSIONS: 6.00 x 4.00 x 1.70",
			//url
			"single-product-page?designName=funky-ghost&productName=xbox-one-x-controller",
			//sku
			"CUS/CONTR/TOP/20209903"
		); 
		$funky_ghost['xbox-one-elite-controller'] = new product (
			//four images of size 589x591
			"../images/products/funky-ghost/xbox-one-elite-controller/560X460/Front.jpg",
			"../images/products/funky-ghost/xbox-one-elite-controller/560X460/Back.jpg",
			"../images/products/funky-ghost/xbox-one-elite-controller/560X460/Side.jpg",
			"../images/products/funky-ghost/xbox-one-elite-controller/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/funky-ghost/xbox-one-elite-controller/187X140/Front.jpg",
			"../images/products/funky-ghost/xbox-one-elite-controller/187X140/Back.jpg",
			"../images/products/funky-ghost/xbox-one-elite-controller/187X140/Side.jpg",
			"../images/products/funky-ghost/xbox-one-elite-controller/187X140/Zoom.jpg",
			//design name
			"funky ghost" ,
			//design name html
			"funky<br>ghost",
			//design image
			"../images/products/funky-ghost/design.jpg",
			//product name
			"xbox one elite controller",
			//product Image
			"../images/products/funky-ghost/xbox-one-elite-controller/controller.png",
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
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One Elite Controller<br>-DIMENSIONS: 6.00 x 4.00 x 1.70",
			//url
			"single-product-page?designName=funky-ghost&productName=xbox-one-elite-controller",
			//sku
			"CUS/CONTR/TOP/20209904"
		);
		$funky_ghost['xbox-one-elite-wireless-controller'] = new product (
			//four images of size 589x591
			"../images/products/funky-ghost/xbox-one-elite-wireless-controller/560X460/Front.jpg",
			"../images/products/funky-ghost/xbox-one-elite-wireless-controller/560X460/Back.jpg",
			"../images/products/funky-ghost/xbox-one-elite-wireless-controller/560X460/Side.jpg",
			"../images/products/funky-ghost/xbox-one-elite-wireless-controller/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/funky-ghost/xbox-one-elite-wireless-controller/187X140/Front.jpg",
			"../images/products/funky-ghost/xbox-one-elite-wireless-controller/187X140/Back.jpg",
			"../images/products/funky-ghost/xbox-one-elite-wireless-controller/187X140/Side.jpg",
			"../images/products/funky-ghost/xbox-one-elite-wireless-controller/187X140/Zoom.jpg",
			//design name
			"funky ghost" ,
			//design name html
			"funky<br>ghost",
			//design image
			"../images/products/funky-ghost/design.jpg",
			//product name
			"xbox one elite wireless controller",
			//product Image
			"../images/products/funky-ghost/xbox-one-elite-wireless-controller/controller.png",
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
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One Elite Wireless Controller<br>-DIMENSIONS: 6.00 x 4.00 x 1.70",
			//url
			"single-product-page?designName=funky-ghost&productName=xbox-one-elite-wireless-controller",
			//sku
			"CUS/CONTR/TOP/20209905"
		);

		// console
		$funky_ghost['xbox-one-console'] = new product (
		//four images of size 589x591
			"../images/products/funky-ghost/xbox-one-console/560X460/Front.jpg",
			"../images/products/funky-ghost/xbox-one-console/560X460/Back.jpg",
			"../images/products/funky-ghost/xbox-one-console/560X460/Side.jpg",
			"../images/products/funky-ghost/xbox-one-console/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/funky-ghost/xbox-one-console/187X140/Front.jpg",
			"../images/products/funky-ghost/xbox-one-console/187X140/Back.jpg",
			"../images/products/funky-ghost/xbox-one-console/187X140/Side.jpg",
			"../images/products/funky-ghost/xbox-one-console/187X140/Zoom.jpg",
			//design name
			"funky ghost" ,
			//design name html
			"funky<br>ghost",
			//design image
			"../images/products/funky-ghost/design.jpg",
			//product name
			"xbox one console",
			//product Image
			"../images/products/funky-ghost/xbox-one-console/console.png",
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
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One console<br>-DIMENSIONS: 12.00 x 0.01 x 29.00",
			//url
			"single-product-page?designName=funky-ghost&productName=xbox-one-console",
			//sku
			"CUS/CONTR/TOP/20209906"
		);
		$funky_ghost['xbox-one-s-console'] = new product (
			//four images of size 589x591
			"../images/products/funky-ghost/xbox-one-s-console/560X460/Front.jpg",
			"../images/products/funky-ghost/xbox-one-s-console/560X460/Back.jpg",
			"../images/products/funky-ghost/xbox-one-s-console/560X460/Side.jpg",
			"../images/products/funky-ghost/xbox-one-s-console/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/funky-ghost/xbox-one-s-console/187X140/Front.jpg",
			"../images/products/funky-ghost/xbox-one-s-console/187X140/Back.jpg",
			"../images/products/funky-ghost/xbox-one-s-console/187X140/Side.jpg",
			"../images/products/funky-ghost/xbox-one-s-console/187X140/Zoom.jpg",
			//design name
			"funky ghost" ,
			//design name html
			"funky<br>ghost",
			//design image
			"../images/products/funky-ghost/design.jpg",
			//product name
			"xbox one s console",
			//product Image
			"../images/products/funky-ghost/xbox-one-s-console/console.png",
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
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One S console<br>-DIMENSIONS: 12.00 x 0.01 x 29.00",
			//url
			"single-product-page?designName=funky-ghost&productName=xbox-one-s-console",
			//sku
			"CUS/CONTR/TOP/20209907"
		);
		$funky_ghost['xbox-one-x-console'] = new product (
			//four images of size 589x591
			"../images/products/funky-ghost/xbox-one-x-console/560X460/Front.jpg",
			"../images/products/funky-ghost/xbox-one-x-console/560X460/Back.jpg",
			"../images/products/funky-ghost/xbox-one-x-console/560X460/Side.jpg",
			"../images/products/funky-ghost/xbox-one-x-console/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/funky-ghost/xbox-one-x-console/187X140/Front.jpg",
			"../images/products/funky-ghost/xbox-one-x-console/187X140/Back.jpg",
			"../images/products/funky-ghost/xbox-one-x-console/187X140/Side.jpg",
			"../images/products/funky-ghost/xbox-one-x-console/187X140/Zoom.jpg",
			//design name
			"funky ghost" ,
			//design name html
			"funky<br>ghost",
			//design image
			"../images/products/funky-ghost/design.jpg",
			//product name
			"xbox one x console",
			//product Image
			"../images/products/funky-ghost/xbox-one-x-console/console.png",
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
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One X console<br>-DIMENSIONS: 11.42 x 0.01 x 11.90",
			//url
			"single-product-page?designName=funky-ghost&productName=xbox-one-x-console",
			//sku
			"CUS/CONTR/TOP/20209908"
		); 
		
		// bundle

		$funky_ghost['xbox-one-bundle'] = new product (
			//four images of size 589x591
			"../images/products/funky-ghost/xbox-one-bundle/560X460/Front.jpg",
			"../images/products/funky-ghost/xbox-one-bundle/560X460/Back.jpg",
			"../images/products/funky-ghost/xbox-one-bundle/560X460/Side.jpg",
			"../images/products/funky-ghost/xbox-one-bundle/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/funky-ghost/xbox-one-bundle/187X140/Front.jpg",
			"../images/products/funky-ghost/xbox-one-bundle/187X140/Back.jpg",
			"../images/products/funky-ghost/xbox-one-bundle/187X140/Side.jpg",
			"../images/products/funky-ghost/xbox-one-bundle/187X140/Zoom.jpg",
			//design name
			"funky ghost" ,
			//design name html
			"funky<br>ghost",
			//design image
			"../images/products/funky-ghost/design.jpg",
			//product name
			"xbox one bundle",
			//product Image
			"../images/products/funky-ghost/xbox-one-bundle/bundle.png",
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
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One console & Controller <br>-DIMENSIONS: Console: 12.00 x 0.01 x 29.00<br>Controller: 6.00 x 4.00 x 1.70",
			//url
			"single-product-page?designName=funky-ghost&productName=xbox-one-bundle",
			//sku
			"CUS/CONTR/TOP/20209909"
		); 

		$funky_ghost['xbox-one-s-bundle'] = new product (
			//four images of size 589x591
			"../images/products/funky-ghost/xbox-one-s-bundle/560X460/Front.jpg",
			"../images/products/funky-ghost/xbox-one-s-bundle/560X460/Back.jpg",
			"../images/products/funky-ghost/xbox-one-s-bundle/560X460/Side.jpg",
			"../images/products/funky-ghost/xbox-one-s-bundle/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/funky-ghost/xbox-one-s-bundle/187X140/Front.jpg",
			"../images/products/funky-ghost/xbox-one-s-bundle/187X140/Back.jpg",
			"../images/products/funky-ghost/xbox-one-s-bundle/187X140/Side.jpg",
			"../images/products/funky-ghost/xbox-one-s-bundle/187X140/Zoom.jpg",
			//design name
			"funky ghost" ,
			//design name html
			"funky<br>ghost",
			//design image
			"../images/products/funky-ghost/design.jpg",
			//product name
			"xbox one s bundle",
			//product Image
			"../images/products/funky-ghost/xbox-one-s-bundle/bundle.png",
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
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One S console & Controller <br>-DIMENSIONS: Console: 12.00 x 0.01 x 29.00<br>Controller: 6.00 x 4.00 x 1.70",
			//url
			"single-product-page?designName=funky-ghost&productName=xbox-one-s-bundle",
			//sku
			"CUS/CONTR/TOP/20209910"
		); 

		$funky_ghost['xbox-one-x-bundle'] = new product (
			//four images of size 589x591
			"../images/products/funky-ghost/xbox-one-x-bundle/560X460/Front.jpg",
			"../images/products/funky-ghost/xbox-one-x-bundle/560X460/Back.jpg",
			"../images/products/funky-ghost/xbox-one-x-bundle/560X460/Side.jpg",
			"../images/products/funky-ghost/xbox-one-x-bundle/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/funky-ghost/xbox-one-x-bundle/187X140/Front.jpg",
			"../images/products/funky-ghost/xbox-one-x-bundle/187X140/Back.jpg",
			"../images/products/funky-ghost/xbox-one-x-bundle/187X140/Side.jpg",
			"../images/products/funky-ghost/xbox-one-x-bundle/187X140/Zoom.jpg",
			//design name
			"funky ghost" ,
			//design name html
			"funky<br>ghost",
			//design image
			"../images/products/funky-ghost/design.jpg",
			//product name
			"xbox one x bundle",
			//product Image
			"../images/products/funky-ghost/xbox-one-x-bundle/bundle.png",
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
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One X console & Controller <br>-DIMENSIONS: Console: 12.00 x 0.01 x 29.00<br>Controller: 6.00 x 4.00 x 1.70",
			//url
			"single-product-page?designName=funky-ghost&productName=xbox-one-x-bundle",
			//sku
			"CUS/CONTR/TOP/20209911"
		);

		// controller
		$funky_skulls['xbox-one-controller'] = new product (
		//four images of size 589x591
			"../images/products/funky-skulls/xbox-one-controller/560X460/Front.jpg",
			"../images/products/funky-skulls/xbox-one-controller/560X460/Back.jpg",
			"../images/products/funky-skulls/xbox-one-controller/560X460/Side.jpg",
			"../images/products/funky-skulls/xbox-one-controller/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/funky-skulls/xbox-one-controller/187X140/Front.jpg",
			"../images/products/funky-skulls/xbox-one-controller/187X140/Back.jpg",
			"../images/products/funky-skulls/xbox-one-controller/187X140/Side.jpg",
			"../images/products/funky-skulls/xbox-one-controller/187X140/Zoom.jpg",
			//design name
			"funky skulls" ,
			//design name html
			"funky<br> skulls",
			//design image
			"../images/products/funky-skulls/design.jpg",
			//product name
			"xbox one controller",
			//product Image
			"../images/products/funky-skulls/xbox-one-controller/controller.png",
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
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One Controller<br>-DIMENSIONS: 6.00 x 4.00 x 1.70",
			//url
			"single-product-page?designName=funky-skulls&productName=xbox-one-controller",
			//sku
			"CUS/CONTR/TOP/20209921"
		);
		$funky_skulls['xbox-one-s-controller'] = new product (
			//four images of size 589x591
			"../images/products/funky-skulls/xbox-one-s-controller/560X460/Front.jpg",
			"../images/products/funky-skulls/xbox-one-s-controller/560X460/Back.jpg",
			"../images/products/funky-skulls/xbox-one-s-controller/560X460/Side.jpg",
			"../images/products/funky-skulls/xbox-one-s-controller/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/funky-skulls/xbox-one-s-controller/187X140/Front.jpg",
			"../images/products/funky-skulls/xbox-one-s-controller/187X140/Back.jpg",
			"../images/products/funky-skulls/xbox-one-s-controller/187X140/Side.jpg",
			"../images/products/funky-skulls/xbox-one-s-controller/187X140/Zoom.jpg",
			//design name
			"funky skulls" ,
			//design name html
			"funky<br> skulls",
			//design image
			"../images/products/funky-skulls/design.jpg",
			//product name
			"xbox one s controller",
			//product Image
			"../images/products/funky-skulls/xbox-one-s-controller/controller.png",
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
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One S Controller<br>-DIMENSIONS: 6.00 x 4.00 x 1.70",
			//url
			"single-product-page?designName=funky-skulls&productName=xbox-one-s-controller",
			//sku
			"CUS/CONTR/TOP/20209922"
		);
		$funky_skulls['xbox-one-x-controller'] = new product (
			//four images of size 589x591
			"../images/products/funky-skulls/xbox-one-x-controller/560X460/Front.jpg",
			"../images/products/funky-skulls/xbox-one-x-controller/560X460/Back.jpg",
			"../images/products/funky-skulls/xbox-one-x-controller/560X460/Side.jpg",
			"../images/products/funky-skulls/xbox-one-x-controller/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/funky-skulls/xbox-one-x-controller/187X140/Front.jpg",
			"../images/products/funky-skulls/xbox-one-x-controller/187X140/Back.jpg",
			"../images/products/funky-skulls/xbox-one-x-controller/187X140/Side.jpg",
			"../images/products/funky-skulls/xbox-one-x-controller/187X140/Zoom.jpg",
			//design name
			"funky skulls" ,
			//design name html
			"funky<br> skulls",
			//design image
			"../images/products/funky-skulls/design.jpg",
			//product name
			"xbox one x controller",
			//product Image
			"../images/products/funky-skulls/xbox-one-x-controller/controller.png",
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
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One X Controller<br>-DIMENSIONS: 6.00 x 4.00 x 1.70",
			//url
			"single-product-page?designName=funky-skulls&productName=xbox-one-x-controller",
			//sku
			"CUS/CONTR/TOP/20209915"
		); 
		$funky_skulls['xbox-one-elite-controller'] = new product (
			//four images of size 589x591
			"../images/products/funky-skulls/xbox-one-elite-controller/560X460/Front.jpg",
			"../images/products/funky-skulls/xbox-one-elite-controller/560X460/Back.jpg",
			"../images/products/funky-skulls/xbox-one-elite-controller/560X460/Side.jpg",
			"../images/products/funky-skulls/xbox-one-elite-controller/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/funky-skulls/xbox-one-elite-controller/187X140/Front.jpg",
			"../images/products/funky-skulls/xbox-one-elite-controller/187X140/Back.jpg",
			"../images/products/funky-skulls/xbox-one-elite-controller/187X140/Side.jpg",
			"../images/products/funky-skulls/xbox-one-elite-controller/187X140/Zoom.jpg",
			//design name
			"funky skulls" ,
			//design name html
			"funky<br> skulls",
			//design image
			"../images/products/funky-skulls/design.jpg",
			//product name
			"xbox one elite controller",
			//product Image
			"../images/products/funky-skulls/xbox-one-elite-controller/controller.png",
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
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One Elite Controller<br>-DIMENSIONS: 6.00 x 4.00 x 1.70",
			//url
			"single-product-page?designName=funky-skulls&productName=xbox-one-elite-controller",
			//sku
			"CUS/CONTR/TOP/20209924"
		);
		$funky_skulls['xbox-one-elite-wireless-controller'] = new product (
			//four images of size 589x591
			"../images/products/funky-skulls/xbox-one-elite-wireless-controller/560X460/Front.jpg",
			"../images/products/funky-skulls/xbox-one-elite-wireless-controller/560X460/Back.jpg",
			"../images/products/funky-skulls/xbox-one-elite-wireless-controller/560X460/Side.jpg",
			"../images/products/funky-skulls/xbox-one-elite-wireless-controller/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/funky-skulls/xbox-one-elite-wireless-controller/187X140/Front.jpg",
			"../images/products/funky-skulls/xbox-one-elite-wireless-controller/187X140/Back.jpg",
			"../images/products/funky-skulls/xbox-one-elite-wireless-controller/187X140/Side.jpg",
			"../images/products/funky-skulls/xbox-one-elite-wireless-controller/187X140/Zoom.jpg",
			//design name
			"funky skulls" ,
			//design name html
			"funky<br> skulls",
			//design image
			"../images/products/funky-skulls/design.jpg",
			//product name
			"xbox one elite wireless controller",
			//product Image
			"../images/products/funky-skulls/xbox-one-elite-wireless-controller/controller.png",
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
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One Elite Wireless Controller<br>-DIMENSIONS: 6.00 x 4.00 x 1.70",
			//url
			"single-product-page?designName=funky-skulls&productName=xbox-one-elite-wireless-controller",
			//sku
			"CUS/CONTR/TOP/20209925"
		);

		// consoles
		$funky_skulls['xbox-one-console'] = new product (
		//four images of size 589x591
			"../images/products/funky-skulls/xbox-one-console/560X460/Front.jpg",
			"../images/products/funky-skulls/xbox-one-console/560X460/Back.jpg",
			"../images/products/funky-skulls/xbox-one-console/560X460/Side.jpg",
			"../images/products/funky-skulls/xbox-one-console/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/funky-skulls/xbox-one-console/187X140/Front.jpg",
			"../images/products/funky-skulls/xbox-one-console/187X140/Back.jpg",
			"../images/products/funky-skulls/xbox-one-console/187X140/Side.jpg",
			"../images/products/funky-skulls/xbox-one-console/187X140/Zoom.jpg",
			//design name
			"funky skulls" ,
			//design name html
			"funky<br>skulls",
			//design image
			"../images/products/funky-skulls/design.jpg",
			//product name
			"xbox one console",
			//product Image
			"../images/products/funky-skulls/xbox-one-console/console.png",
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
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One console<br>-DIMENSIONS: 12.00 x 0.01 x 29.00",
			//url
			"single-product-page?designName=funky-skulls&productName=xbox-one-console",
			//sku
			"CUS/CONTR/TOP/20209926"
		);
		$funky_skulls['xbox-one-s-console'] = new product (
			//four images of size 589x591
			"../images/products/funky-skulls/xbox-one-s-console/560X460/Front.jpg",
			"../images/products/funky-skulls/xbox-one-s-console/560X460/Back.jpg",
			"../images/products/funky-skulls/xbox-one-s-console/560X460/Side.jpg",
			"../images/products/funky-skulls/xbox-one-s-console/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/funky-skulls/xbox-one-s-console/187X140/Front.jpg",
			"../images/products/funky-skulls/xbox-one-s-console/187X140/Back.jpg",
			"../images/products/funky-skulls/xbox-one-s-console/187X140/Side.jpg",
			"../images/products/funky-skulls/xbox-one-s-console/187X140/Zoom.jpg",
			//design name
			"funky skulls" ,
			//design name html
			"funky<br>skulls",
			//design image
			"../images/products/funky-skulls/design.jpg",
			//product name
			"xbox one s console",
			//product Image
			"../images/products/funky-skulls/xbox-one-s-console/console.png",
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
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One S console<br>-DIMENSIONS: 12.00 x 0.01 x 29.00",
			//url
			"single-product-page?designName=funky-skulls&productName=xbox-one-s-console",
			//sku
			"CUS/CONTR/TOP/20209927"
		);
		$funky_skulls['xbox-one-x-console'] = new product (
			//four images of size 589x591
			"../images/products/funky-skulls/xbox-one-x-console/560X460/Front.jpg",
			"../images/products/funky-skulls/xbox-one-x-console/560X460/Back.jpg",
			"../images/products/funky-skulls/xbox-one-x-console/560X460/Side.jpg",
			"../images/products/funky-skulls/xbox-one-x-console/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/funky-skulls/xbox-one-x-console/187X140/Front.jpg",
			"../images/products/funky-skulls/xbox-one-x-console/187X140/Back.jpg",
			"../images/products/funky-skulls/xbox-one-x-console/187X140/Side.jpg",
			"../images/products/funky-skulls/xbox-one-x-console/187X140/Zoom.jpg",
			//design name
			"funky skulls" ,
			//design name html
			"funky<br>skulls",
			//design image
			"../images/products/funky-skulls/design.jpg",
			//product name
			"xbox one x console",
			//product Image
			"../images/products/funky-skulls/xbox-one-x-console/console.png",
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
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One X console<br>-DIMENSIONS: 11.42 x 0.01 x 11.90",
			//url
			"single-product-page?designName=funky-skulls&productName=xbox-one-x-console",
			//sku
			"CUS/CONTR/TOP/20209928"
		); 

		// bundle

		$funky_skulls['xbox-one-bundle'] = new product (
			//four images of size 589x591
			"../images/products/funky-skulls/xbox-one-bundle/560X460/Front.jpg",
			"../images/products/funky-skulls/xbox-one-bundle/560X460/Back.jpg",
			"../images/products/funky-skulls/xbox-one-bundle/560X460/Side.jpg",
			"../images/products/funky-skulls/xbox-one-bundle/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/funky-skulls/xbox-one-bundle/187X140/Front.jpg",
			"../images/products/funky-skulls/xbox-one-bundle/187X140/Back.jpg",
			"../images/products/funky-skulls/xbox-one-bundle/187X140/Side.jpg",
			"../images/products/funky-skulls/xbox-one-bundle/187X140/Zoom.jpg",
			//design name
			"funky skulls" ,
			//design name html
			"funky<br>skulls",
			//design image
			"../images/products/funky-skulls/design.jpg",
			//product name
			"xbox one bundle",
			//product Image
			"../images/products/funky-skulls/xbox-one-bundle/bundle.png",
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
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One console & Controller <br>-DIMENSIONS: Console: 12.00 x 0.01 x 29.00<br>Controller: 6.00 x 4.00 x 1.70",
			//url
			"single-product-page?designName=funky-skulls&productName=xbox-one-bundle",
			//sku
			"CUS/CONTR/TOP/20209929"
		); 

		$funky_skulls['xbox-one-s-bundle'] = new product (
			//four images of size 589x591
			"../images/products/funky-skulls/xbox-one-s-bundle/560X460/Front.jpg",
			"../images/products/funky-skulls/xbox-one-s-bundle/560X460/Back.jpg",
			"../images/products/funky-skulls/xbox-one-s-bundle/560X460/Side.jpg",
			"../images/products/funky-skulls/xbox-one-s-bundle/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/funky-skulls/xbox-one-s-bundle/187X140/Front.jpg",
			"../images/products/funky-skulls/xbox-one-s-bundle/187X140/Back.jpg",
			"../images/products/funky-skulls/xbox-one-s-bundle/187X140/Side.jpg",
			"../images/products/funky-skulls/xbox-one-s-bundle/187X140/Zoom.jpg",
			//design name
			"funky skulls" ,
			//design name html
			"funky<br>skulls",
			//design image
			"../images/products/funky-skulls/design.jpg",
			//product name
			"xbox one s bundle",
			//product Image
			"../images/products/funky-skulls/xbox-one-s-bundle/bundle.png",
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
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One S console & Controller <br>-DIMENSIONS: Console: 12.00 x 0.01 x 29.00<br>Controller: 6.00 x 4.00 x 1.70",
			//url
			"single-product-page?designName=funky-skulls&productName=xbox-one-s-bundle",
			//sku
			"CUS/CONTR/TOP/20209930"
		); 

		$funky_skulls['xbox-one-x-bundle'] = new product (
			//four images of size 589x591
			"../images/products/funky-skulls/xbox-one-x-bundle/560X460/Front.jpg",
			"../images/products/funky-skulls/xbox-one-x-bundle/560X460/Back.jpg",
			"../images/products/funky-skulls/xbox-one-x-bundle/560X460/Side.jpg",
			"../images/products/funky-skulls/xbox-one-x-bundle/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/funky-skulls/xbox-one-x-bundle/187X140/Front.jpg",
			"../images/products/funky-skulls/xbox-one-x-bundle/187X140/Back.jpg",
			"../images/products/funky-skulls/xbox-one-x-bundle/187X140/Side.jpg",
			"../images/products/funky-skulls/xbox-one-x-bundle/187X140/Zoom.jpg",
			//design name
			"funky skulls" ,
			//design name html
			"funky<br>skulls",
			//design image
			"../images/products/funky-skulls/design.jpg",
			//product name
			"xbox one x bundle",
			//product Image
			"../images/products/funky-skulls/xbox-one-x-bundle/bundle.png",
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
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One X console & Controller <br>-DIMENSIONS: Console: 12.00 x 0.01 x 29.00<br>Controller: 6.00 x 4.00 x 1.70",
			//url
			"single-product-page?designName=funky-skulls&productName=xbox-one-x-bundle",
			//sku
			"CUS/CONTR/TOP/20209931"
		);

		// controller
		$game_freak['xbox-one-controller'] = new product (
		//four images of size 589x591
			"../images/products/game-freak/xbox-one-controller/560X460/Front.jpg",
			"../images/products/game-freak/xbox-one-controller/560X460/Back.jpg",
			"../images/products/game-freak/xbox-one-controller/560X460/Side.jpg",
			"../images/products/game-freak/xbox-one-controller/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/game-freak/xbox-one-controller/187X140/Front.jpg",
			"../images/products/game-freak/xbox-one-controller/187X140/Back.jpg",
			"../images/products/game-freak/xbox-one-controller/187X140/Side.jpg",
			"../images/products/game-freak/xbox-one-controller/187X140/Zoom.jpg",
			//design name
			"game freak" ,
			//design name html
			"game<br>freak",
			//design image
			"../images/products/game-freak/design.jpg",
			//product name
			"xbox one controller",
			//product Image
			"../images/products/game-freak/xbox-one-controller/controller.png",
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
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One Controller<br>-DIMENSIONS: 6.00 x 4.00 x 1.70",
			//url
			"single-product-page?designName=game-freak&productName=xbox-one-controller",
			//sku
			"CUS/CONTR/TOP/20209941"
		);
		$game_freak['xbox-one-s-controller'] = new product (
			//four images of size 589x591
			"../images/products/game-freak/xbox-one-s-controller/560X460/Front.jpg",
			"../images/products/game-freak/xbox-one-s-controller/560X460/Back.jpg",
			"../images/products/game-freak/xbox-one-s-controller/560X460/Side.jpg",
			"../images/products/game-freak/xbox-one-s-controller/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/game-freak/xbox-one-s-controller/187X140/Front.jpg",
			"../images/products/game-freak/xbox-one-s-controller/187X140/Back.jpg",
			"../images/products/game-freak/xbox-one-s-controller/187X140/Side.jpg",
			"../images/products/game-freak/xbox-one-s-controller/187X140/Zoom.jpg",
			//design name
			"game freak" ,
			//design name html
			"game<br> freak",
			//design image
			"../images/products/game-freak/design.jpg",
			//product name
			"xbox one s controller",
			//product Image
			"../images/products/game-freak/xbox-one-s-controller/controller.png",
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
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One S Controller<br>-DIMENSIONS: 6.00 x 4.00 x 1.70",
			//url
			"single-product-page?designName=game-freak&productName=xbox-one-s-controller",
			//sku
			"CUS/CONTR/TOP/20209942"
		);
		$game_freak['xbox-one-x-controller'] = new product (
			//four images of size 589x591
			"../images/products/game-freak/xbox-one-x-controller/560X460/Front.jpg",
			"../images/products/game-freak/xbox-one-x-controller/560X460/Back.jpg",
			"../images/products/game-freak/xbox-one-x-controller/560X460/Side.jpg",
			"../images/products/game-freak/xbox-one-x-controller/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/game-freak/xbox-one-x-controller/187X140/Front.jpg",
			"../images/products/game-freak/xbox-one-x-controller/187X140/Back.jpg",
			"../images/products/game-freak/xbox-one-x-controller/187X140/Side.jpg",
			"../images/products/game-freak/xbox-one-x-controller/187X140/Zoom.jpg",
			//design name
			"game freak" ,
			//design name html
			"game<br> freak",
			//design image
			"../images/products/game-freak/design.jpg",
			//product name
			"xbox one x controller",
			//product Image
			"../images/products/game-freak/xbox-one-x-controller/controller.png",
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
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One X Controller<br>-DIMENSIONS: 6.00 x 4.00 x 1.70",
			//url
			"single-product-page?designName=game-freak&productName=xbox-one-x-controller",
			//sku
			"CUS/CONTR/TOP/20209943"
		); 
		$game_freak['xbox-one-elite-controller'] = new product (
			//four images of size 589x591
			"../images/products/game-freak/xbox-one-elite-controller/560X460/Front.jpg",
			"../images/products/game-freak/xbox-one-elite-controller/560X460/Back.jpg",
			"../images/products/game-freak/xbox-one-elite-controller/560X460/Side.jpg",
			"../images/products/game-freak/xbox-one-elite-controller/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/game-freak/xbox-one-elite-controller/187X140/Front.jpg",
			"../images/products/game-freak/xbox-one-elite-controller/187X140/Back.jpg",
			"../images/products/game-freak/xbox-one-elite-controller/187X140/Side.jpg",
			"../images/products/game-freak/xbox-one-elite-controller/187X140/Zoom.jpg",
			//design name
			"game freak" ,
			//design name html
			"game<br> freak",
			//design image
			"../images/products/game-freak/design.jpg",
			//product name
			"xbox one elite controller",
			//product Image
			"../images/products/game-freak/xbox-one-elite-controller/controller.png",
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
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One Elite Controller<br>-DIMENSIONS: 6.00 x 4.00 x 1.70",
			//url
			"single-product-page?designName=game-freak&productName=xbox-one-elite-controller",
			//sku
			"CUS/CONTR/TOP/20209944"
		);
		$game_freak['xbox-one-elite-wireless-controller'] = new product (
			//four images of size 589x591
			"../images/products/game-freak/xbox-one-elite-wireless-controller/560X460/Front.jpg",
			"../images/products/game-freak/xbox-one-elite-wireless-controller/560X460/Back.jpg",
			"../images/products/game-freak/xbox-one-elite-wireless-controller/560X460/Side.jpg",
			"../images/products/game-freak/xbox-one-elite-wireless-controller/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/game-freak/xbox-one-elite-wireless-controller/187X140/Front.jpg",
			"../images/products/game-freak/xbox-one-elite-wireless-controller/187X140/Back.jpg",
			"../images/products/game-freak/xbox-one-elite-wireless-controller/187X140/Side.jpg",
			"../images/products/game-freak/xbox-one-elite-wireless-controller/187X140/Zoom.jpg",
			//design name
			"game freak" ,
			//design name html
			"game<br> freak",
			//design image
			"../images/products/game-freak/design.jpg",
			//product name
			"xbox one elite wireless controller",
			//product Image
			"../images/products/game-freak/xbox-one-elite-wireless-controller/controller.png",
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
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One Elite Wireless Controller<br>-DIMENSIONS: 6.00 x 4.00 x 1.70",
			//url
			"single-product-page?designName=game-freak&productName=xbox-one-elite-wireless-controller",
			//sku
			"CUS/CONTR/TOP/20209945"
		);

		// consoles
		$game_freak['xbox-one-console'] = new product (
		//four images of size 589x591
			"../images/products/game-freak/xbox-one-console/560X460/Front.jpg",
			"../images/products/game-freak/xbox-one-console/560X460/Back.jpg",
			"../images/products/game-freak/xbox-one-console/560X460/Side.jpg",
			"../images/products/game-freak/xbox-one-console/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/game-freak/xbox-one-console/187X140/Front.jpg",
			"../images/products/game-freak/xbox-one-console/187X140/Back.jpg",
			"../images/products/game-freak/xbox-one-console/187X140/Side.jpg",
			"../images/products/game-freak/xbox-one-console/187X140/Zoom.jpg",
			//design name
			"game freak" ,
			//design name html
			"game<br>freak",
			//design image
			"../images/products/game-freak/design.jpg",
			//product name
			"xbox one console",
			//product Image
			"../images/products/game-freak/xbox-one-console/console.png",
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
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One console<br>-DIMENSIONS: 12.00 x 0.01 x 29.00",
			//url
			"single-product-page?designName=game-freak&productName=xbox-one-console",
			//sku
			"CUS/CONTR/TOP/20209946"
		);
		$game_freak['xbox-one-s-console'] = new product (
			//four images of size 589x591
			"../images/products/game-freak/xbox-one-s-console/560X460/Front.jpg",
			"../images/products/game-freak/xbox-one-s-console/560X460/Back.jpg",
			"../images/products/game-freak/xbox-one-s-console/560X460/Side.jpg",
			"../images/products/game-freak/xbox-one-s-console/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/game-freak/xbox-one-s-console/187X140/Front.jpg",
			"../images/products/game-freak/xbox-one-s-console/187X140/Back.jpg",
			"../images/products/game-freak/xbox-one-s-console/187X140/Side.jpg",
			"../images/products/game-freak/xbox-one-s-console/187X140/Zoom.jpg",
			//design name
			"game freak" ,
			//design name html
			"game<br>freak",
			//design image
			"../images/products/game-freak/design.jpg",
			//product name
			"xbox one s console",
			//product Image
			"../images/products/game-freak/xbox-one-s-console/console.png",
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
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One S console<br>-DIMENSIONS: 12.00 x 0.01 x 29.00",
			//url
			"single-product-page?designName=game-freak&productName=xbox-one-s-console",
			//sku
			"CUS/CONTR/TOP/20209947"
		);
		$game_freak['xbox-one-x-console'] = new product (
			//four images of size 589x591
			"../images/products/game-freak/xbox-one-x-console/560X460/Front.jpg",
			"../images/products/game-freak/xbox-one-x-console/560X460/Back.jpg",
			"../images/products/game-freak/xbox-one-x-console/560X460/Side.jpg",
			"../images/products/game-freak/xbox-one-x-console/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/game-freak/xbox-one-x-console/187X140/Front.jpg",
			"../images/products/game-freak/xbox-one-x-console/187X140/Back.jpg",
			"../images/products/game-freak/xbox-one-x-console/187X140/Side.jpg",
			"../images/products/game-freak/xbox-one-x-console/187X140/Zoom.jpg",
			//design name
			"game freak" ,
			//design name html
			"game<br>freak",
			//design image
			"../images/products/game-freak/design.jpg",
			//product name
			"xbox one x console",
			//product Image
			"../images/products/game-freak/xbox-one-x-console/console.png",
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
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One X console<br>-DIMENSIONS: 11.42 x 0.01 x 11.90",
			//url
			"single-product-page?designName=game-freak&productName=xbox-one-x-console",
			//sku
			"CUS/CONTR/TOP/20209948"
		); 

		// bundle

		$game_freak['xbox-one-bundle'] = new product (
			//four images of size 589x591
			"../images/products/game-freak/xbox-one-bundle/560X460/Front.jpg",
			"../images/products/game-freak/xbox-one-bundle/560X460/Back.jpg",
			"../images/products/game-freak/xbox-one-bundle/560X460/Side.jpg",
			"../images/products/game-freak/xbox-one-bundle/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/game-freak/xbox-one-bundle/187X140/Front.jpg",
			"../images/products/game-freak/xbox-one-bundle/187X140/Back.jpg",
			"../images/products/game-freak/xbox-one-bundle/187X140/Side.jpg",
			"../images/products/game-freak/xbox-one-bundle/187X140/Zoom.jpg",
			//design name
			"game freak" ,
			//design name html
			"game<br>freak",
			//design image
			"../images/products/game-freak/design.jpg",
			//product name
			"xbox one bundle",
			//product Image
			"../images/products/game-freak/xbox-one-bundle/bundle.png",
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
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One console & Controller <br>-DIMENSIONS: Console: 12.00 x 0.01 x 29.00<br>Controller: 6.00 x 4.00 x 1.70",
			//url
			"single-product-page?designName=game-freak&productName=xbox-one-bundle",
			//sku
			"CUS/CONTR/TOP/20209949"
		); 

		$game_freak['xbox-one-s-bundle'] = new product (
			//four images of size 589x591
			"../images/products/game-freak/xbox-one-s-bundle/560X460/Front.jpg",
			"../images/products/game-freak/xbox-one-s-bundle/560X460/Back.jpg",
			"../images/products/game-freak/xbox-one-s-bundle/560X460/Side.jpg",
			"../images/products/game-freak/xbox-one-s-bundle/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/game-freak/xbox-one-s-bundle/187X140/Front.jpg",
			"../images/products/game-freak/xbox-one-s-bundle/187X140/Back.jpg",
			"../images/products/game-freak/xbox-one-s-bundle/187X140/Side.jpg",
			"../images/products/game-freak/xbox-one-s-bundle/187X140/Zoom.jpg",
			//design name
			"game freak" ,
			//design name html
			"game<br>freak",
			//design image
			"../images/products/game-freak/design.jpg",
			//product name
			"xbox one s bundle",
			//product Image
			"../images/products/game-freak/xbox-one-s-bundle/bundle.png",
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
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One S console & Controller <br>-DIMENSIONS: Console: 12.00 x 0.01 x 29.00<br>Controller: 6.00 x 4.00 x 1.70",
			//url
			"single-product-page?designName=game-freak&productName=xbox-one-s-bundle",
			//sku
			"CUS/CONTR/TOP/20209923"
		); 

		$game_freak['xbox-one-x-bundle'] = new product (
			//four images of size 589x591
			"../images/products/game-freak/xbox-one-x-bundle/560X460/Front.jpg",
			"../images/products/game-freak/xbox-one-x-bundle/560X460/Back.jpg",
			"../images/products/game-freak/xbox-one-x-bundle/560X460/Side.jpg",
			"../images/products/game-freak/xbox-one-x-bundle/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/game-freak/xbox-one-x-bundle/187X140/Front.jpg",
			"../images/products/game-freak/xbox-one-x-bundle/187X140/Back.jpg",
			"../images/products/game-freak/xbox-one-x-bundle/187X140/Side.jpg",
			"../images/products/game-freak/xbox-one-x-bundle/187X140/Zoom.jpg",
			//design name
			"game freak" ,
			//design name html
			"game<br>freak",
			//design image
			"../images/products/game-freak/design.jpg",
			//product name
			"xbox one x bundle",
			//product Image
			"../images/products/game-freak/xbox-one-x-bundle/bundle.png",
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
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One X console & Controller <br>-DIMENSIONS: Console: 12.00 x 0.01 x 29.00<br>Controller: 6.00 x 4.00 x 1.70",
			//url
			"single-product-page?designName=game-freak&productName=xbox-one-x-bundle",
			//sku
			"CUS/CONTR/TOP/20209951"
		);
		
		// controller
		$gears_of_war['xbox-one-controller'] = new product (
		//four images of size 589x591
			"../images/products/gears-of-war/xbox-one-controller/560X460/Front.jpg",
			"../images/products/gears-of-war/xbox-one-controller/560X460/Back.jpg",
			"../images/products/gears-of-war/xbox-one-controller/560X460/Side.jpg",
			"../images/products/gears-of-war/xbox-one-controller/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/gears-of-war/xbox-one-controller/187X140/Front.jpg",
			"../images/products/gears-of-war/xbox-one-controller/187X140/Back.jpg",
			"../images/products/gears-of-war/xbox-one-controller/187X140/Side.jpg",
			"../images/products/gears-of-war/xbox-one-controller/187X140/Zoom.jpg",
			//design name
			"gears of war" ,
			//design name html
			"gears<br>of war",
			//design image
			"../images/products/gears-of-war/design.jpg",
			//product name
			"xbox one controller",
			//product Image
			"../images/products/gears-of-war/xbox-one-controller/controller.png",
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
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One Controller<br>-DIMENSIONS: 6.00 x 4.00 x 1.70",
			//url
			"single-product-page?designName=gears-of-war&productName=xbox-one-controller",
			//sku
			"CUS/CONTR/TOP/20209961"
		);
		$gears_of_war['xbox-one-s-controller'] = new product (
			//four images of size 589x591
			"../images/products/gears-of-war/xbox-one-s-controller/560X460/Front.jpg",
			"../images/products/gears-of-war/xbox-one-s-controller/560X460/Back.jpg",
			"../images/products/gears-of-war/xbox-one-s-controller/560X460/Side.jpg",
			"../images/products/gears-of-war/xbox-one-s-controller/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/gears-of-war/xbox-one-s-controller/187X140/Front.jpg",
			"../images/products/gears-of-war/xbox-one-s-controller/187X140/Back.jpg",
			"../images/products/gears-of-war/xbox-one-s-controller/187X140/Side.jpg",
			"../images/products/gears-of-war/xbox-one-s-controller/187X140/Zoom.jpg",
			//design name
			"gears of war" ,
			//design name html
			"gears<br>of war",
			//design image
			"../images/products/gears-of-war/design.jpg",
			//product name
			"xbox one s controller",
			//product Image
			"../images/products/gears-of-war/xbox-one-s-controller/controller.png",
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
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One S Controller<br>-DIMENSIONS: 6.00 x 4.00 x 1.70",
			//url
			"single-product-page?designName=gears-of-war&productName=xbox-one-s-controller",
			//sku
			"CUS/CONTR/TOP/20209962"
		);
		$gears_of_war['xbox-one-x-controller'] = new product (
			//four images of size 589x591
			"../images/products/gears-of-war/xbox-one-x-controller/560X460/Front.jpg",
			"../images/products/gears-of-war/xbox-one-x-controller/560X460/Back.jpg",
			"../images/products/gears-of-war/xbox-one-x-controller/560X460/Side.jpg",
			"../images/products/gears-of-war/xbox-one-x-controller/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/gears-of-war/xbox-one-x-controller/187X140/Front.jpg",
			"../images/products/gears-of-war/xbox-one-x-controller/187X140/Back.jpg",
			"../images/products/gears-of-war/xbox-one-x-controller/187X140/Side.jpg",
			"../images/products/gears-of-war/xbox-one-x-controller/187X140/Zoom.jpg",
			//design name
			"gears of war" ,
			//design name html
			"gears<br>of war",
			//design image
			"../images/products/gears-of-war/design.jpg",
			//product name
			"xbox one x controller",
			//product Image
			"../images/products/gears-of-war/xbox-one-x-controller/controller.png",
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
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One X Controller<br>-DIMENSIONS: 6.00 x 4.00 x 1.70",
			//url
			"single-product-page?designName=gears-of-war&productName=xbox-one-x-controller",
			//sku
			"CUS/CONTR/TOP/20209963"
		); 
		$gears_of_war['xbox-one-elite-controller'] = new product (
			//four images of size 589x591
			"../images/products/gears-of-war/xbox-one-elite-controller/560X460/Front.jpg",
			"../images/products/gears-of-war/xbox-one-elite-controller/560X460/Back.jpg",
			"../images/products/gears-of-war/xbox-one-elite-controller/560X460/Side.jpg",
			"../images/products/gears-of-war/xbox-one-elite-controller/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/gears-of-war/xbox-one-elite-controller/187X140/Front.jpg",
			"../images/products/gears-of-war/xbox-one-elite-controller/187X140/Back.jpg",
			"../images/products/gears-of-war/xbox-one-elite-controller/187X140/Side.jpg",
			"../images/products/gears-of-war/xbox-one-elite-controller/187X140/Zoom.jpg",
			//design name
			"gears of war" ,
			//design name html
			"gears<br>of war",
			//design image
			"../images/products/gears-of-war/design.jpg",
			//product name
			"xbox one elite controller",
			//product Image
			"../images/products/gears-of-war/xbox-one-elite-controller/controller.png",
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
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One Elite Controller<br>-DIMENSIONS: 6.00 x 4.00 x 1.70",
			//url
			"single-product-page?designName=gears-of-war&productName=xbox-one-elite-controller",
			//sku
			"CUS/CONTR/TOP/20209964"
		);
		$gears_of_war['xbox-one-elite-wireless-controller'] = new product (
			//four images of size 589x591
			"../images/products/gears-of-war/xbox-one-elite-wireless-controller/560X460/Front.jpg",
			"../images/products/gears-of-war/xbox-one-elite-wireless-controller/560X460/Back.jpg",
			"../images/products/gears-of-war/xbox-one-elite-wireless-controller/560X460/Side.jpg",
			"../images/products/gears-of-war/xbox-one-elite-wireless-controller/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/gears-of-war/xbox-one-elite-wireless-controller/187X140/Front.jpg",
			"../images/products/gears-of-war/xbox-one-elite-wireless-controller/187X140/Back.jpg",
			"../images/products/gears-of-war/xbox-one-elite-wireless-controller/187X140/Side.jpg",
			"../images/products/gears-of-war/xbox-one-elite-wireless-controller/187X140/Zoom.jpg",
			//design name
			"gears of war" ,
			//design name html
			"gears<br>of war",
			//design image
			"../images/products/gears-of-war/design.jpg",
			//product name
			"xbox one elite wireless controller",
			//product Image
			"../images/products/gears-of-war/xbox-one-elite-wireless-controller/controller.png",
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
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One Elite Wireless Controller<br>-DIMENSIONS: 6.00 x 4.00 x 1.70",
			//url
			"single-product-page?designName=gears-of-war&productName=xbox-one-elite-wireless-controller",
			//sku
			"CUS/CONTR/TOP/20209965"
		);

		// consoles
		$gears_of_war['xbox-one-console'] = new product (
		//four images of size 589x591
			"../images/products/gears-of-war/xbox-one-console/560X460/Front.jpg",
			"../images/products/gears-of-war/xbox-one-console/560X460/Back.jpg",
			"../images/products/gears-of-war/xbox-one-console/560X460/Side.jpg",
			"../images/products/gears-of-war/xbox-one-console/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/gears-of-war/xbox-one-console/187X140/Front.jpg",
			"../images/products/gears-of-war/xbox-one-console/187X140/Back.jpg",
			"../images/products/gears-of-war/xbox-one-console/187X140/Side.jpg",
			"../images/products/gears-of-war/xbox-one-console/187X140/Zoom.jpg",
			//design name
			"gears of war" ,
			//design name html
			"gears<br>of war",
			//design image
			"../images/products/gears-of-war/design.jpg",
			//product name
			"xbox one console",
			//product Image
			"../images/products/gears-of-war/xbox-one-console/console.png",
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
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One console<br>-DIMENSIONS: 12.00 x 0.01 x 29.00",
			//url
			"single-product-page?designName=gears-of-war&productName=xbox-one-console",
			//sku
			"CUS/CONTR/TOP/20209966"
		);
		$gears_of_war['xbox-one-s-console'] = new product (
			//four images of size 589x591
			"../images/products/gears-of-war/xbox-one-s-console/560X460/Front.jpg",
			"../images/products/gears-of-war/xbox-one-s-console/560X460/Back.jpg",
			"../images/products/gears-of-war/xbox-one-s-console/560X460/Side.jpg",
			"../images/products/gears-of-war/xbox-one-s-console/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/gears-of-war/xbox-one-s-console/187X140/Front.jpg",
			"../images/products/gears-of-war/xbox-one-s-console/187X140/Back.jpg",
			"../images/products/gears-of-war/xbox-one-s-console/187X140/Side.jpg",
			"../images/products/gears-of-war/xbox-one-s-console/187X140/Zoom.jpg",
			//design name
			"gears of war" ,
			//design name html
			"gears<br>of war",
			//design image
			"../images/products/gears-of-war/design.jpg",
			//product name
			"xbox one s console",
			//product Image
			"../images/products/gears-of-war/xbox-one-s-console/console.png",
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
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One S console<br>-DIMENSIONS: 12.00 x 0.01 x 29.00",
			//url
			"single-product-page?designName=gears-of-war&productName=xbox-one-s-console",
			//sku
			"CUS/CONTR/TOP/20209967"
		);
		$gears_of_war['xbox-one-x-console'] = new product (
			//four images of size 589x591
			"../images/products/gears-of-war/xbox-one-x-console/560X460/Front.jpg",
			"../images/products/gears-of-war/xbox-one-x-console/560X460/Back.jpg",
			"../images/products/gears-of-war/xbox-one-x-console/560X460/Side.jpg",
			"../images/products/gears-of-war/xbox-one-x-console/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/gears-of-war/xbox-one-x-console/187X140/Front.jpg",
			"../images/products/gears-of-war/xbox-one-x-console/187X140/Back.jpg",
			"../images/products/gears-of-war/xbox-one-x-console/187X140/Side.jpg",
			"../images/products/gears-of-war/xbox-one-x-console/187X140/Zoom.jpg",
			//design name
			"gears of war" ,
			//design name html
			"gears<br>of war",
			//design image
			"../images/products/gears-of-war/design.jpg",
			//product name
			"xbox one x console",
			//product Image
			"../images/products/gears-of-war/xbox-one-x-console/console.png",
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
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One X console<br>-DIMENSIONS: 11.42 x 0.01 x 11.90",
			//url
			"single-product-page?designName=gears-of-war&productName=xbox-one-x-console",
			//sku
			"CUS/CONTR/TOP/20209968"
		); 
		
		// bundle

		$gears_of_war['xbox-one-bundle'] = new product (
			//four images of size 589x591
			"../images/products/gears-of-war/xbox-one-bundle/560X460/Front.jpg",
			"../images/products/gears-of-war/xbox-one-bundle/560X460/Back.jpg",
			"../images/products/gears-of-war/xbox-one-bundle/560X460/Side.jpg",
			"../images/products/gears-of-war/xbox-one-bundle/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/gears-of-war/xbox-one-bundle/187X140/Front.jpg",
			"../images/products/gears-of-war/xbox-one-bundle/187X140/Back.jpg",
			"../images/products/gears-of-war/xbox-one-bundle/187X140/Side.jpg",
			"../images/products/gears-of-war/xbox-one-bundle/187X140/Zoom.jpg",
			//design name
			"gears of war" ,
			//design name html
			"gears<br>of war",
			//design image
			"../images/products/gears-of-war/design.jpg",
			//product name
			"xbox one bundle",
			//product Image
			"../images/products/gears-of-war/xbox-one-bundle/bundle.png",
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
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One console & Controller <br>-DIMENSIONS: Console: 12.00 x 0.01 x 29.00<br>Controller: 6.00 x 4.00 x 1.70",
			//url
			"single-product-page?designName=gears-of-war&productName=xbox-one-bundle",
			//sku
			"CUS/CONTR/TOP/20209969"
		); 

		$gears_of_war['xbox-one-s-bundle'] = new product (
			//four images of size 589x591
			"../images/products/gears-of-war/xbox-one-s-bundle/560X460/Front.jpg",
			"../images/products/gears-of-war/xbox-one-s-bundle/560X460/Back.jpg",
			"../images/products/gears-of-war/xbox-one-s-bundle/560X460/Side.jpg",
			"../images/products/gears-of-war/xbox-one-s-bundle/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/gears-of-war/xbox-one-s-bundle/187X140/Front.jpg",
			"../images/products/gears-of-war/xbox-one-s-bundle/187X140/Back.jpg",
			"../images/products/gears-of-war/xbox-one-s-bundle/187X140/Side.jpg",
			"../images/products/gears-of-war/xbox-one-s-bundle/187X140/Zoom.jpg",
			//design name
			"gears of war" ,
			//design name html
			"gears<br>of war",
			//design image
			"../images/products/gears-of-war/design.jpg",
			//product name
			"xbox one s bundle",
			//product Image
			"../images/products/gears-of-war/xbox-one-s-bundle/bundle.png",
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
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One S console & Controller <br>-DIMENSIONS: Console: 12.00 x 0.01 x 29.00<br>Controller: 6.00 x 4.00 x 1.70",
			//url
			"single-product-page?designName=gears-of-war&productName=xbox-one-s-bundle",
			//sku
			"CUS/CONTR/TOP/20209970"
		); 

		$gears_of_war['xbox-one-x-bundle'] = new product (
			//four images of size 589x591
			"../images/products/gears-of-war/xbox-one-x-bundle/560X460/Front.jpg",
			"../images/products/gears-of-war/xbox-one-x-bundle/560X460/Back.jpg",
			"../images/products/gears-of-war/xbox-one-x-bundle/560X460/Side.jpg",
			"../images/products/gears-of-war/xbox-one-x-bundle/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/gears-of-war/xbox-one-x-bundle/187X140/Front.jpg",
			"../images/products/gears-of-war/xbox-one-x-bundle/187X140/Back.jpg",
			"../images/products/gears-of-war/xbox-one-x-bundle/187X140/Side.jpg",
			"../images/products/gears-of-war/xbox-one-x-bundle/187X140/Zoom.jpg",
			//design name
			"gears of war" ,
			//design name html
			"gears<br>of war",
			//design image
			"../images/products/gears-of-war/design.jpg",
			//product name
			"xbox one x bundle",
			//product Image
			"../images/products/gears-of-war/xbox-one-x-bundle/bundle.png",
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
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One X console & Controller <br>-DIMENSIONS: Console: 12.00 x 0.01 x 29.00<br>Controller: 6.00 x 4.00 x 1.70",
			//url
			"single-product-page?designName=gears-of-war&productName=xbox-one-x-bundle",
			//sku
			"CUS/CONTR/TOP/20209971"
		);

		// controller
		$iron_man['xbox-one-controller'] = new product (
		//four images of size 589x591
			"../images/products/iron-man/xbox-one-controller/560X460/Front.jpg",
			"../images/products/iron-man/xbox-one-controller/560X460/Back.jpg",
			"../images/products/iron-man/xbox-one-controller/560X460/Side.jpg",
			"../images/products/iron-man/xbox-one-controller/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/iron-man/xbox-one-controller/187X140/Front.jpg",
			"../images/products/iron-man/xbox-one-controller/187X140/Back.jpg",
			"../images/products/iron-man/xbox-one-controller/187X140/Side.jpg",
			"../images/products/iron-man/xbox-one-controller/187X140/Zoom.jpg",
			//design name
			"iron man" ,
			//design name html
			"iron<br>man",
			//design image
			"../images/products/iron-man/design.jpg",
			//product name
			"xbox one controller",
			//product Image
			"../images/products/iron-man/xbox-one-controller/controller.png",
			//price dollars
			"15",
			//price cents
			"99",
			//short description
			"Iron Man inspired design from<br> industry expert Richard Eveland,<br> Identify yourself as the best in Pop Culture,<br> Offical Design from Marvel ",
			//long description
			"Iron Man inspired design from<br> industry expert Richard Eveland,<br> Identify yourself as the best in Pop Culture,<br> Offical Design from Marvel ",
			//author
			"Richard Eveland",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One Controller<br>-DIMENSIONS: 6.00 x 4.00 x 1.70",
			//url
			"single-product-page?designName=iron-man&productName=xbox-one-controller",
			//sku
			"CUS/CONTR/TOP/20209981"
		);
		$iron_man['xbox-one-s-controller'] = new product (
			//four images of size 589x591
			"../images/products/iron-man/xbox-one-s-controller/560X460/Front.jpg",
			"../images/products/iron-man/xbox-one-s-controller/560X460/Back.jpg",
			"../images/products/iron-man/xbox-one-s-controller/560X460/Side.jpg",
			"../images/products/iron-man/xbox-one-s-controller/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/iron-man/xbox-one-s-controller/187X140/Front.jpg",
			"../images/products/iron-man/xbox-one-s-controller/187X140/Back.jpg",
			"../images/products/iron-man/xbox-one-s-controller/187X140/Side.jpg",
			"../images/products/iron-man/xbox-one-s-controller/187X140/Zoom.jpg",
			//design name
			"iron man" ,
			//design name html
			"iron<br>man",
			//design image
			"../images/products/iron-man/design.jpg",
			//product name
			"xbox one s controller",
			//product Image
			"../images/products/iron-man/xbox-one-s-controller/controller.png",
			//price dollars
			"15",
			//price cents
			"99",
			//short description
			"Iron Man inspired design from<br> industry expert Richard Eveland,<br> Identify yourself as the best in Pop Culture,<br> Offical Design from Marvel ",
			//long description
			"Iron Man inspired design from<br> industry expert Richard Eveland,<br> Identify yourself as the best in Pop Culture,<br> Offical Design from Marvel ",
			//author
			"Richard Eveland",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One S Controller<br>-DIMENSIONS: 6.00 x 4.00 x 1.70",
			//url
			"single-product-page?designName=iron-man&productName=xbox-one-s-controller",
			//sku
			"CUS/CONTR/TOP/20209982"
		);
		$iron_man['xbox-one-x-controller'] = new product (
			//four images of size 589x591
			"../images/products/iron-man/xbox-one-x-controller/560X460/Front.jpg",
			"../images/products/iron-man/xbox-one-x-controller/560X460/Back.jpg",
			"../images/products/iron-man/xbox-one-x-controller/560X460/Side.jpg",
			"../images/products/iron-man/xbox-one-x-controller/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/iron-man/xbox-one-x-controller/187X140/Front.jpg",
			"../images/products/iron-man/xbox-one-x-controller/187X140/Back.jpg",
			"../images/products/iron-man/xbox-one-x-controller/187X140/Side.jpg",
			"../images/products/iron-man/xbox-one-x-controller/187X140/Zoom.jpg",
			//design name
			"iron man" ,
			//design name html
			"iron<br>man",
			//design image
			"../images/products/iron-man/design.jpg",
			//product name
			"xbox one x controller",
			//product Image
			"../images/products/iron-man/xbox-one-x-controller/controller.png",
			//price dollars
			"15",
			//price cents
			"99",
			//short description
			"Iron Man inspired design from<br> industry expert Richard Eveland,<br> Identify yourself as the best in Pop Culture,<br> Offical Design from Marvel ",
			//long description
			"Iron Man inspired design from<br> industry expert Richard Eveland,<br> Identify yourself as the best in Pop Culture,<br> Offical Design from Marvel ",
			//author
			"Richard Eveland",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One X Controller<br>-DIMENSIONS: 6.00 x 4.00 x 1.70",
			//url
			"single-product-page?designName=iron-man&productName=xbox-one-x-controller",
			//sku
			"CUS/CONTR/TOP/20209983"
		); 
		$iron_man['xbox-one-elite-controller'] = new product (
			//four images of size 589x591
			"../images/products/iron-man/xbox-one-elite-controller/560X460/Front.jpg",
			"../images/products/iron-man/xbox-one-elite-controller/560X460/Back.jpg",
			"../images/products/iron-man/xbox-one-elite-controller/560X460/Side.jpg",
			"../images/products/iron-man/xbox-one-elite-controller/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/iron-man/xbox-one-elite-controller/187X140/Front.jpg",
			"../images/products/iron-man/xbox-one-elite-controller/187X140/Back.jpg",
			"../images/products/iron-man/xbox-one-elite-controller/187X140/Side.jpg",
			"../images/products/iron-man/xbox-one-elite-controller/187X140/Zoom.jpg",
			//design name
			"iron man" ,
			//design name html
			"iron<br>man",
			//design image
			"../images/products/iron-man/design.jpg",
			//product name
			"xbox one elite controller",
			//product Image
			"../images/products/iron-man/xbox-one-x-controller/controller.png",
			//price dollars
			"15",
			//price cents
			"99",
			//short description
			"Iron Man inspired design from<br> industry expert Richard Eveland,<br> Identify yourself as the best in Pop Culture,<br> Offical Design from Marvel ",
			//long description
			"Iron Man inspired design from<br> industry expert Richard Eveland,<br> Identify yourself as the best in Pop Culture,<br> Offical Design from Marvel ",
			//author
			"Richard Eveland",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One Elite Controller<br>-DIMENSIONS: 6.00 x 4.00 x 1.70",
			//url
			"single-product-page?designName=iron-man&productName=xbox-one-elite-controller",
			//sku
			"CUS/CONTR/TOP/20209984"
		);
		$iron_man['xbox-one-elite-wireless-controller'] = new product (
			//four images of size 589x591
			"../images/products/iron-man/xbox-one-elite-wireless-controller/560X460/Front.jpg",
			"../images/products/iron-man/xbox-one-elite-wireless-controller/560X460/Back.jpg",
			"../images/products/iron-man/xbox-one-elite-wireless-controller/560X460/Side.jpg",
			"../images/products/iron-man/xbox-one-elite-wireless-controller/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/iron-man/xbox-one-elite-wireless-controller/187X140/Front.jpg",
			"../images/products/iron-man/xbox-one-elite-wireless-controller/187X140/Back.jpg",
			"../images/products/iron-man/xbox-one-elite-wireless-controller/187X140/Side.jpg",
			"../images/products/iron-man/xbox-one-elite-wireless-controller/187X140/Zoom.jpg",
			//design name
			"iron man" ,
			//design name html
			"iron<br>man",
			//design image
			"../images/products/iron-man/design.jpg",
			//product name
			"xbox one elite wireless controller",
			//product Image
			"../images/products/iron-man/xbox-one-elite-wireless-controller/controller.png",
			//price dollars
			"15",
			//price cents
			"99",
			//short description
			"Iron Man inspired design from<br> industry expert Richard Eveland,<br> Identify yourself as the best in Pop Culture,<br> Offical Design from Marvel ",
			//long description
			"Iron Man inspired design from<br> industry expert Richard Eveland,<br> Identify yourself as the best in Pop Culture,<br> Offical Design from Marvel ",
			//author
			"Richard Eveland",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One Elite Wireless Controller<br>-DIMENSIONS: 6.00 x 4.00 x 1.70",
			//url
			"single-product-page?designName=iron-man&productName=xbox-one-elite-wireless-controller",
			//sku
			"CUS/CONTR/TOP/20209985"
		);

		// consoles
		$iron_man['xbox-one-console'] = new product (
		//four images of size 589x591
			"../images/products/iron-man/xbox-one-console/560X460/Front.jpg",
			"../images/products/iron-man/xbox-one-console/560X460/Back.jpg",
			"../images/products/iron-man/xbox-one-console/560X460/Side.jpg",
			"../images/products/iron-man/xbox-one-console/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/iron-man/xbox-one-console/187X140/Front.jpg",
			"../images/products/iron-man/xbox-one-console/187X140/Back.jpg",
			"../images/products/iron-man/xbox-one-console/187X140/Side.jpg",
			"../images/products/iron-man/xbox-one-console/187X140/Zoom.jpg",
			//design name
			"iron man" ,
			//design name html
			"iron<br>man",
			//design image
			"../images/products/iron-man/design.jpg",
			//product name
			"xbox one console",
			//product Image
			"../images/products/iron-man/xbox-one-console/console.png",
			//price dollars
			"20",
			//price cents
			"99",
			//short description
			"Iron Man inspired design from<br> industry expert Richard Eveland,<br> Identify yourself as the best in Pop Culture,<br> Offical Design from Marvel ",
			//long description
			"Iron Man inspired design from<br> industry expert Richard Eveland,<br> Identify yourself as the best in Pop Culture,<br> Offical Design from Marvel ",
			//author
			"Richard Eveland",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One console<br>-DIMENSIONS: 12.00 x 0.01 x 29.00",
			//url
			"single-product-page?designName=iron-man&productName=xbox-one-console",
			//sku
			"CUS/CONTR/TOP/20209986"
		);
		$iron_man['xbox-one-s-console'] = new product (
			//four images of size 589x591
			"../images/products/iron-man/xbox-one-s-console/560X460/Front.jpg",
			"../images/products/iron-man/xbox-one-s-console/560X460/Back.jpg",
			"../images/products/iron-man/xbox-one-s-console/560X460/Side.jpg",
			"../images/products/iron-man/xbox-one-s-console/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/iron-man/xbox-one-s-console/187X140/Front.jpg",
			"../images/products/iron-man/xbox-one-s-console/187X140/Back.jpg",
			"../images/products/iron-man/xbox-one-s-console/187X140/Side.jpg",
			"../images/products/iron-man/xbox-one-s-console/187X140/Zoom.jpg",
			//design name
			"iron man" ,
			//design name html
			"iron<br>man",
			//design image
			"../images/products/iron-man/design.jpg",
			//product name
			"xbox one s console",
			//product Image
			"../images/products/iron-man/xbox-one-s-console/console.png",
			//price dollars
			"20",
			//price cents
			"99",
			//short description
			"Iron Man inspired design from<br> industry expert Richard Eveland,<br> Identify yourself as the best in Pop Culture,<br> Offical Design from Marvel ",
			//long description
			"Iron Man inspired design from<br> industry expert Richard Eveland,<br> Identify yourself as the best in Pop Culture,<br> Offical Design from Marvel ",
			//author
			"Richard Eveland",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One S console<br>-DIMENSIONS: 12.00 x 0.01 x 29.00",
			//url
			"single-product-page?designName=iron-man&productName=xbox-one-s-console",
			//sku
			"CUS/CONTR/TOP/20209987"
		);
		$iron_man['xbox-one-x-console'] = new product (
			//four images of size 589x591
			"../images/products/iron-man/xbox-one-x-console/560X460/Front.jpg",
			"../images/products/iron-man/xbox-one-x-console/560X460/Back.jpg",
			"../images/products/iron-man/xbox-one-x-console/560X460/Side.jpg",
			"../images/products/iron-man/xbox-one-x-console/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/iron-man/xbox-one-x-console/187X140/Front.jpg",
			"../images/products/iron-man/xbox-one-x-console/187X140/Back.jpg",
			"../images/products/iron-man/xbox-one-x-console/187X140/Side.jpg",
			"../images/products/iron-man/xbox-one-x-console/187X140/Zoom.jpg",
			//design name
			"iron man" ,
			//design name html
			"iron<br>man",
			//design image
			"../images/products/iron-man/design.jpg",
			//product name
			"xbox one x console",
			//product Image
			"../images/products/iron-man/xbox-one-x-console/console.png",
			//price dollars
			"20",
			//price cents
			"99",
			//short description
			"Iron Man inspired design from<br> industry expert Richard Eveland,<br> Identify yourself as the best in Pop Culture,<br> Offical Design from Marvel ",
			//long description
			"Iron Man inspired design from<br> industry expert Richard Eveland,<br> Identify yourself as the best in Pop Culture,<br> Offical Design from Marvel ",
			//author
			"Richard Eveland",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One X console<br>-DIMENSIONS: 11.42 x 0.01 x 11.90",
			//url
			"single-product-page?designName=iron-man&productName=xbox-one-x-console",
			//sku
			"CUS/CONTR/TOP/20209988"
		); 
		
		// bundle

		$iron_man['xbox-one-bundle'] = new product (
			//four images of size 589x591
			"../images/products/iron-man/xbox-one-bundle/560X460/Front.jpg",
			"../images/products/iron-man/xbox-one-bundle/560X460/Back.jpg",
			"../images/products/iron-man/xbox-one-bundle/560X460/Side.jpg",
			"../images/products/iron-man/xbox-one-bundle/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/iron-man/xbox-one-bundle/187X140/Front.jpg",
			"../images/products/iron-man/xbox-one-bundle/187X140/Back.jpg",
			"../images/products/iron-man/xbox-one-bundle/187X140/Side.jpg",
			"../images/products/iron-man/xbox-one-bundle/187X140/Zoom.jpg",
			//design name
			"iron man" ,
			//design name html
			"iron<br>man",
			//design image
			"../images/products/iron-man/design.jpg",
			//product name
			"xbox one bundle",
			//product Image
			"../images/products/iron-man/xbox-one-bundle/bundle.png",
			//price dollars
			"23",
			//price cents
			"99",
			//short description
			"Iron Man inspired design from<br> industry expert Richard Eveland,<br> Identify yourself as the best in Pop Culture,<br> Offical Design from Marvel ",
			//long description
			"Iron Man inspired design from<br> industry expert Richard Eveland,<br> Identify yourself as the best in Pop Culture,<br> Offical Design from Marvel ",
			//author
			"Richard Eveland",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One console & Controller <br>-DIMENSIONS: Console: 12.00 x 0.01 x 29.00<br>Controller: 6.00 x 4.00 x 1.70",
			//url
			"single-product-page?designName=iron-man&productName=xbox-one-bundle",
			//sku
			"CUS/CONTR/TOP/20209989"
		); 

		$iron_man['xbox-one-s-bundle'] = new product (
			//four images of size 589x591
			"../images/products/iron-man/xbox-one-s-bundle/560X460/Front.jpg",
			"../images/products/iron-man/xbox-one-s-bundle/560X460/Back.jpg",
			"../images/products/iron-man/xbox-one-s-bundle/560X460/Side.jpg",
			"../images/products/iron-man/xbox-one-s-bundle/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/iron-man/xbox-one-s-bundle/187X140/Front.jpg",
			"../images/products/iron-man/xbox-one-s-bundle/187X140/Back.jpg",
			"../images/products/iron-man/xbox-one-s-bundle/187X140/Side.jpg",
			"../images/products/iron-man/xbox-one-s-bundle/187X140/Zoom.jpg",
			//design name
			"iron man" ,
			//design name html
			"iron<br>man",
			//design image
			"../images/products/iron-man/design.jpg",
			//product name
			"xbox one s bundle",
			//product Image
			"../images/products/iron-man/xbox-one-s-bundle/bundle.png",
			//price dollars
			"23",
			//price cents
			"99",
			//short description
			"Iron Man inspired design from<br> industry expert Richard Eveland,<br> Identify yourself as the best in Pop Culture,<br> Offical Design from Marvel ",
			//long description
			"Iron Man inspired design from<br> industry expert Richard Eveland,<br> Identify yourself as the best in Pop Culture,<br> Offical Design from Marvel ",
			//author
			"Richard Eveland",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One S console & Controller <br>-DIMENSIONS: Console: 12.00 x 0.01 x 29.00<br>Controller: 6.00 x 4.00 x 1.70",
			//url
			"single-product-page?designName=iron-man&productName=xbox-one-s-bundle",
			//sku
			"CUS/CONTR/TOP/20209990"
		); 

		$iron_man['xbox-one-x-bundle'] = new product (
			//four images of size 589x591
			"../images/products/iron-man/xbox-one-x-bundle/560X460/Front.jpg",
			"../images/products/iron-man/xbox-one-x-bundle/560X460/Back.jpg",
			"../images/products/iron-man/xbox-one-x-bundle/560X460/Side.jpg",
			"../images/products/iron-man/xbox-one-x-bundle/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/iron-man/xbox-one-x-bundle/187X140/Front.jpg",
			"../images/products/iron-man/xbox-one-x-bundle/187X140/Back.jpg",
			"../images/products/iron-man/xbox-one-x-bundle/187X140/Side.jpg",
			"../images/products/iron-man/xbox-one-x-bundle/187X140/Zoom.jpg",
			//design name
			"iron man" ,
			//design name html
			"iron<br>man",
			//design image
			"../images/products/iron-man/design.jpg",
			//product name
			"xbox one x bundle",
			//product Image
			"../images/products/iron-man/xbox-one-x-bundle/bundle.png",
			//price dollars
			"23",
			//price cents
			"99",
			//short description
			"Iron Man inspired design from<br> industry expert Richard Eveland,<br> Identify yourself as the best in Pop Culture,<br> Offical Design from Marvel ",
			//long description
			"Iron Man inspired design from<br> industry expert Richard Eveland,<br> Identify yourself as the best in Pop Culture,<br> Offical Design from Marvel ",
			//author
			"Richard Eveland",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One X console & Controller <br>-DIMENSIONS: Console: 12.00 x 0.01 x 29.00<br>Controller: 6.00 x 4.00 x 1.70",
			//url
			"single-product-page?designName=iron-man&productName=xbox-one-x-bundle",
			//sku
			"CUS/CONTR/TOP/20209991"
		);

		// controller
		$naruto_and_sasuke['xbox-one-controller'] = new product (
		//four images of size 589x591
			"../images/products/naruto-and-sasuke/xbox-one-controller/560X460/Front.jpg",
			"../images/products/naruto-and-sasuke/xbox-one-controller/560X460/Back.jpg",
			"../images/products/naruto-and-sasuke/xbox-one-controller/560X460/Side.jpg",
			"../images/products/naruto-and-sasuke/xbox-one-controller/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/naruto-and-sasuke/xbox-one-controller/187X140/Front.jpg",
			"../images/products/naruto-and-sasuke/xbox-one-controller/187X140/Back.jpg",
			"../images/products/naruto-and-sasuke/xbox-one-controller/187X140/Side.jpg",
			"../images/products/naruto-and-sasuke/xbox-one-controller/187X140/Zoom.jpg",
			//design name
			"naruto and sasuke" ,
			//design name html
			"naruto<br> and sasuke",
			//design image
			"../images/products/naruto-and-sasuke/design.jpg",
			//product name
			"xbox one controller",
			//product Image
			"../images/products/naruto-and-sasuke/xbox-one-controller/controller.png",
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
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One Controller<br>-DIMENSIONS: 6.00 x 4.00 x 1.70",
			//url
			"single-product-page?designName=naruto-and-sasuke&productName=xbox-one-controller",
			//sku
			"CUS/CONTR/TOP/20210001"
		);
		$naruto_and_sasuke['xbox-one-s-controller'] = new product (
			//four images of size 589x591
			"../images/products/naruto-and-sasuke/xbox-one-s-controller/560X460/Front.jpg",
			"../images/products/naruto-and-sasuke/xbox-one-s-controller/560X460/Back.jpg",
			"../images/products/naruto-and-sasuke/xbox-one-s-controller/560X460/Side.jpg",
			"../images/products/naruto-and-sasuke/xbox-one-s-controller/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/naruto-and-sasuke/xbox-one-s-controller/187X140/Front.jpg",
			"../images/products/naruto-and-sasuke/xbox-one-s-controller/187X140/Back.jpg",
			"../images/products/naruto-and-sasuke/xbox-one-s-controller/187X140/Side.jpg",
			"../images/products/naruto-and-sasuke/xbox-one-s-controller/187X140/Zoom.jpg",
			//design name
			"naruto and sasuke" ,
			//design name html
			"naruto<br> and sasuke",
			//design image
			"../images/products/naruto-and-sasuke/design.jpg",
			//product name
			"xbox one s controller",
			//product Image
			"../images/products/naruto-and-sasuke/xbox-one-s-controller/controller.png",
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
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One S Controller<br>-DIMENSIONS: 6.00 x 4.00 x 1.70",
			//url
			"single-product-page?designName=naruto-and-sasuke&productName=xbox-one-s-controller",
			//sku
			"CUS/CONTR/TOP/20210002"
		);
		$naruto_and_sasuke['xbox-one-x-controller'] = new product (
			//four images of size 589x591
			"../images/products/naruto-and-sasuke/xbox-one-x-controller/560X460/Front.jpg",
			"../images/products/naruto-and-sasuke/xbox-one-x-controller/560X460/Back.jpg",
			"../images/products/naruto-and-sasuke/xbox-one-x-controller/560X460/Side.jpg",
			"../images/products/naruto-and-sasuke/xbox-one-x-controller/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/naruto-and-sasuke/xbox-one-x-controller/187X140/Front.jpg",
			"../images/products/naruto-and-sasuke/xbox-one-x-controller/187X140/Back.jpg",
			"../images/products/naruto-and-sasuke/xbox-one-x-controller/187X140/Side.jpg",
			"../images/products/naruto-and-sasuke/xbox-one-x-controller/187X140/Zoom.jpg",
			//design name
			"naruto and sasuke",
			//design name html
			"naruto<br> and sasuke",
			//design image
			"../images/products/naruto-and-sasuke/design.jpg",
			//product name
			"xbox one x controller",
			//product Image
			"../images/products/naruto-and-sasuke/xbox-one-x-controller/controller.png",
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
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One X Controller<br>-DIMENSIONS: 6.00 x 4.00 x 1.70",
			//url
			"single-product-page?designName=naruto-and-sasuke&productName=xbox-one-x-controller",
			//sku
			"CUS/CONTR/TOP/20210003"
		); 
		$naruto_and_sasuke['xbox-one-elite-controller'] = new product (
			//four images of size 589x591
			"../images/products/naruto-and-sasuke/xbox-one-elite-controller/560X460/Front.jpg",
			"../images/products/naruto-and-sasuke/xbox-one-elite-controller/560X460/Back.jpg",
			"../images/products/naruto-and-sasuke/xbox-one-elite-controller/560X460/Side.jpg",
			"../images/products/naruto-and-sasuke/xbox-one-elite-controller/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/naruto-and-sasuke/xbox-one-elite-controller/187X140/Front.jpg",
			"../images/products/naruto-and-sasuke/xbox-one-elite-controller/187X140/Back.jpg",
			"../images/products/naruto-and-sasuke/xbox-one-elite-controller/187X140/Side.jpg",
			"../images/products/naruto-and-sasuke/xbox-one-elite-controller/187X140/Zoom.jpg",
			//design name
			"naruto and sasuke" ,
			//design name html
			"naruto<br> and sasuke",
			//design image
			"../images/products/naruto-and-sasuke/design.jpg",
			//product name
			"xbox one elite controller",
			//product Image
			"../images/products/naruto-and-sasuke/xbox-one-elite-controller/controller.png",
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
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One Elite Controller<br>-DIMENSIONS: 6.00 x 4.00 x 1.70",
			//url
			"single-product-page?designName=naruto-and-sasuke&productName=xbox-one-elite-controller",
			//sku
			"CUS/CONTR/TOP/20210004"
		);
		$naruto_and_sasuke['xbox-one-elite-wireless-controller'] = new product (
			//four images of size 589x591
			"../images/products/naruto-and-sasuke/xbox-one-elite-wireless-controller/560X460/Front.jpg",
			"../images/products/naruto-and-sasuke/xbox-one-elite-wireless-controller/560X460/Back.jpg",
			"../images/products/naruto-and-sasuke/xbox-one-elite-wireless-controller/560X460/Side.jpg",
			"../images/products/naruto-and-sasuke/xbox-one-elite-wireless-controller/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/naruto-and-sasuke/xbox-one-elite-wireless-controller/187X140/Front.jpg",
			"../images/products/naruto-and-sasuke/xbox-one-elite-wireless-controller/187X140/Back.jpg",
			"../images/products/naruto-and-sasuke/xbox-one-elite-wireless-controller/187X140/Side.jpg",
			"../images/products/naruto-and-sasuke/xbox-one-elite-wireless-controller/187X140/Zoom.jpg",
			//design name
			"naruto and sasuke" ,
			//design name html
			"naruto<br> and sasuke",
			//design image
			"../images/products/naruto-and-sasuke/design.jpg",
			//product name
			"xbox one elite wireless controller",
			//product Image
			"../images/products/naruto-and-sasuke/xbox-one-x-controller/controller.png",
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
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One Elite Wireless Controller<br>-DIMENSIONS: 6.00 x 4.00 x 1.70",
			//url
			"single-product-page?designName=naruto-and-sasuke&productName=xbox-one-elite-wireless-controller",
			//sku
			"CUS/CONTR/TOP/20210005"
		);

		// consoles
		$naruto_and_sasuke['xbox-one-console'] = new product (
		//four images of size 589x591
			"../images/products/naruto-and-sasuke/xbox-one-console/560X460/Front.jpg",
			"../images/products/naruto-and-sasuke/xbox-one-console/560X460/Back.jpg",
			"../images/products/naruto-and-sasuke/xbox-one-console/560X460/Side.jpg",
			"../images/products/naruto-and-sasuke/xbox-one-console/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/naruto-and-sasuke/xbox-one-console/187X140/Front.jpg",
			"../images/products/naruto-and-sasuke/xbox-one-console/187X140/Back.jpg",
			"../images/products/naruto-and-sasuke/xbox-one-console/187X140/Side.jpg",
			"../images/products/naruto-and-sasuke/xbox-one-console/187X140/Zoom.jpg",
			//design name
			"naruto and sasuke" ,
			//design name html
			"naruto<br>and sasuke",
			//design image
			"../images/products/naruto-and-sasuke/design.jpg",
			//product name
			"xbox one console",
			//product Image
			"../images/products/naruto-and-sasuke/xbox-one-console/console.png",
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
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One console<br>-DIMENSIONS: 12.00 x 0.01 x 29.00",
			//url
			"single-product-page?designName=naruto-and-sasuke&productName=xbox-one-console",
			//sku
			"CUS/CONTR/TOP/20210006"
		);
		$naruto_and_sasuke['xbox-one-s-console'] = new product (
			//four images of size 589x591
			"../images/products/naruto-and-sasuke/xbox-one-s-console/560X460/Front.jpg",
			"../images/products/naruto-and-sasuke/xbox-one-s-console/560X460/Back.jpg",
			"../images/products/naruto-and-sasuke/xbox-one-s-console/560X460/Side.jpg",
			"../images/products/naruto-and-sasuke/xbox-one-s-console/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/naruto-and-sasuke/xbox-one-s-console/187X140/Front.jpg",
			"../images/products/naruto-and-sasuke/xbox-one-s-console/187X140/Back.jpg",
			"../images/products/naruto-and-sasuke/xbox-one-s-console/187X140/Side.jpg",
			"../images/products/naruto-and-sasuke/xbox-one-s-console/187X140/Zoom.jpg",
			//design name
			"naruto and sasuke" ,
			//design name html
			"naruto<br>and sasuke",
			//design image
			"../images/products/naruto-and-sasuke/design.jpg",
			//product name
			"xbox one s console",
			//product Image
			"../images/products/naruto-and-sasuke/xbox-one-s-console/console.png",
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
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One S console<br>-DIMENSIONS: 12.00 x 0.01 x 29.00",
			//url
			"single-product-page?designName=naruto-and-sasuke&productName=xbox-one-s-console",
			//sku
			"CUS/CONTR/TOP/20210007"
		);
		$naruto_and_sasuke['xbox-one-x-console'] = new product (
			//four images of size 589x591
			"../images/products/naruto-and-sasuke/xbox-one-x-console/560X460/Front.jpg",
			"../images/products/naruto-and-sasuke/xbox-one-x-console/560X460/Back.jpg",
			"../images/products/naruto-and-sasuke/xbox-one-x-console/560X460/Side.jpg",
			"../images/products/naruto-and-sasuke/xbox-one-x-console/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/naruto-and-sasuke/xbox-one-x-console/187X140/Front.jpg",
			"../images/products/naruto-and-sasuke/xbox-one-x-console/187X140/Back.jpg",
			"../images/products/naruto-and-sasuke/xbox-one-x-console/187X140/Side.jpg",
			"../images/products/naruto-and-sasuke/xbox-one-x-console/187X140/Zoom.jpg",
			//design name
			"naruto and sasuke" ,
			//design name html
			"naruto<br>and sasuke",
			//design image
			"../images/products/naruto-and-sasuke/design.jpg",
			//product name
			"xbox one x console",
			//product Image
			"../images/products/naruto-and-sasuke/xbox-one-x-console/console.png",
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
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One X console<br>-DIMENSIONS: 11.42 x 0.01 x 11.90",
			//url
			"single-product-page?designName=naruto-and-sasuke&productName=xbox-one-x-console",
			//sku
			"CUS/CONTR/TOP/20210008"
		);
		
		// bundle

		$naruto_and_sasuke['xbox-one-bundle'] = new product (
			//four images of size 589x591
			"../images/products/naruto-and-sasuke/xbox-one-bundle/560X460/Front.jpg",
			"../images/products/naruto-and-sasuke/xbox-one-bundle/560X460/Back.jpg",
			"../images/products/naruto-and-sasuke/xbox-one-bundle/560X460/Side.jpg",
			"../images/products/naruto-and-sasuke/xbox-one-bundle/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/naruto-and-sasuke/xbox-one-bundle/187X140/Front.jpg",
			"../images/products/naruto-and-sasuke/xbox-one-bundle/187X140/Back.jpg",
			"../images/products/naruto-and-sasuke/xbox-one-bundle/187X140/Side.jpg",
			"../images/products/naruto-and-sasuke/xbox-one-bundle/187X140/Zoom.jpg",
			//design name
			"naruto and sasuke" ,
			//design name html
			"naruto<br>and sasuke",
			//design image
			"../images/products/naruto-and-sasuke/design.jpg",
			//product name
			"xbox one bundle",
			//product Image
			"../images/products/naruto-and-sasuke/xbox-one-bundle/bundle.png",
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
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One console & Controller <br>-DIMENSIONS: Console: 12.00 x 0.01 x 29.00<br>Controller: 6.00 x 4.00 x 1.70",
			//url
			"single-product-page?designName=naruto-and-sasuke&productName=xbox-one-bundle",
			//sku
			"CUS/CONTR/TOP/20210009"
		); 

		$naruto_and_sasuke['xbox-one-s-bundle'] = new product (
			//four images of size 589x591
			"../images/products/naruto-and-sasuke/xbox-one-s-bundle/560X460/Front.jpg",
			"../images/products/naruto-and-sasuke/xbox-one-s-bundle/560X460/Back.jpg",
			"../images/products/naruto-and-sasuke/xbox-one-s-bundle/560X460/Side.jpg",
			"../images/products/naruto-and-sasuke/xbox-one-s-bundle/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/naruto-and-sasuke/xbox-one-s-bundle/187X140/Front.jpg",
			"../images/products/naruto-and-sasuke/xbox-one-s-bundle/187X140/Back.jpg",
			"../images/products/naruto-and-sasuke/xbox-one-s-bundle/187X140/Side.jpg",
			"../images/products/naruto-and-sasuke/xbox-one-s-bundle/187X140/Zoom.jpg",
			//design name
			"naruto and sasuke" ,
			//design name html
			"naruto<br>and sasuke",
			//design image
			"../images/products/naruto-and-sasuke/design.jpg",
			//product name
			"xbox one s bundle",
			//product Image
			"../images/products/naruto-and-sasuke/xbox-one-s-bundle/bundle.png",
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
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One S console & Controller <br>-DIMENSIONS: Console: 12.00 x 0.01 x 29.00<br>Controller: 6.00 x 4.00 x 1.70",
			//url
			"single-product-page?designName=naruto-and-sasuke&productName=xbox-one-s-bundle",
			//sku
			"CUS/CONTR/TOP/20210010"
		); 

		$naruto_and_sasuke['xbox-one-x-bundle'] = new product (
			//four images of size 589x591
			"../images/products/naruto-and-sasuke/xbox-one-x-bundle/560X460/Front.jpg",
			"../images/products/naruto-and-sasuke/xbox-one-x-bundle/560X460/Back.jpg",
			"../images/products/naruto-and-sasuke/xbox-one-x-bundle/560X460/Side.jpg",
			"../images/products/naruto-and-sasuke/xbox-one-x-bundle/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/naruto-and-sasuke/xbox-one-x-bundle/187X140/Front.jpg",
			"../images/products/naruto-and-sasuke/xbox-one-x-bundle/187X140/Back.jpg",
			"../images/products/naruto-and-sasuke/xbox-one-x-bundle/187X140/Side.jpg",
			"../images/products/naruto-and-sasuke/xbox-one-x-bundle/187X140/Zoom.jpg",
			//design name
			"naruto and sasuke" ,
			//design name html
			"naruto<br>and sasuke",
			//design image
			"../images/products/naruto-and-sasuke/design.jpg",
			//product name
			"xbox one x bundle",
			//product Image
			"../images/products/naruto-and-sasuke/xbox-one-x-bundle/bundle.png",
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
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One X console & Controller <br>-DIMENSIONS: Console: 12.00 x 0.01 x 29.00<br>Controller: 6.00 x 4.00 x 1.70",
			//url
			"single-product-page?designName=naruto-and-sasuke&productName=xbox-one-x-bundle",
			//sku
			"CUS/CONTR/TOP/20210011"
		);

		// controller
		$naruto_shippuden['xbox-one-controller'] = new product (
		//four images of size 589x591
			"../images/products/naruto-shippuden/xbox-one-controller/560X460/Front.jpg",
			"../images/products/naruto-shippuden/xbox-one-controller/560X460/Back.jpg",
			"../images/products/naruto-shippuden/xbox-one-controller/560X460/Side.jpg",
			"../images/products/naruto-shippuden/xbox-one-controller/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/naruto-shippuden/xbox-one-controller/187X140/Front.jpg",
			"../images/products/naruto-shippuden/xbox-one-controller/187X140/Back.jpg",
			"../images/products/naruto-shippuden/xbox-one-controller/187X140/Side.jpg",
			"../images/products/naruto-shippuden/xbox-one-controller/187X140/Zoom.jpg",
			//design name
			"naruto shippuden" ,
			//design name html
			"naruto<br>shippuden",
			//design image
			"../images/products/naruto-shippuden/design.jpg",
			//product name
			"xbox one controller",
			//product Image
			"../images/products/naruto-shippuden/xbox-one-controller/controller.png",
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
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One Controller<br>-DIMENSIONS: 6.00 x 4.00 x 1.70",
			//url
			"single-product-page?designName=naruto-shippuden&productName=xbox-one-controller",
			//sku
			"CUS/CONTR/TOP/20210021"
		);
		$naruto_shippuden['xbox-one-s-controller'] = new product (
			//four images of size 589x591
			"../images/products/naruto-shippuden/xbox-one-s-controller/560X460/Front.jpg",
			"../images/products/naruto-shippuden/xbox-one-s-controller/560X460/Back.jpg",
			"../images/products/naruto-shippuden/xbox-one-s-controller/560X460/Side.jpg",
			"../images/products/naruto-shippuden/xbox-one-s-controller/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/naruto-shippuden/xbox-one-s-controller/187X140/Front.jpg",
			"../images/products/naruto-shippuden/xbox-one-s-controller/187X140/Back.jpg",
			"../images/products/naruto-shippuden/xbox-one-s-controller/187X140/Side.jpg",
			"../images/products/naruto-shippuden/xbox-one-s-controller/187X140/Zoom.jpg",
			//design name
			"naruto shippuden" ,
			//design name html
			"naruto<br>shippuden",
			//design image
			"../images/products/naruto-shippuden/design.jpg",
			//product name
			"xbox one s controller",
			//product Image
			"../images/products/naruto-shippuden/xbox-one-s-controller/controller.png",
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
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One S Controller<br>-DIMENSIONS: 6.00 x 4.00 x 1.70",
			//url
			"single-product-page?designName=naruto-shippuden&productName=xbox-one-s-controller",
			//sku
			"CUS/CONTR/TOP/20210022"
		);
		$naruto_shippuden['xbox-one-x-controller'] = new product (
			//four images of size 589x591
			"../images/products/naruto-shippuden/xbox-one-x-controller/560X460/Front.jpg",
			"../images/products/naruto-shippuden/xbox-one-x-controller/560X460/Back.jpg",
			"../images/products/naruto-shippuden/xbox-one-x-controller/560X460/Side.jpg",
			"../images/products/naruto-shippuden/xbox-one-x-controller/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/naruto-shippuden/xbox-one-x-controller/187X140/Front.jpg",
			"../images/products/naruto-shippuden/xbox-one-x-controller/187X140/Back.jpg",
			"../images/products/naruto-shippuden/xbox-one-x-controller/187X140/Side.jpg",
			"../images/products/naruto-shippuden/xbox-one-x-controller/187X140/Zoom.jpg",
			//design name
			"naruto shippuden" ,
			//design name html
			"naruto<br>shippuden",
			//design image
			"../images/products/naruto-shippuden/design.jpg",
			//product name
			"xbox one x controller",
			//product Image
			"../images/products/naruto-shippuden/xbox-one-x-controller/controller.png",
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
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One X Controller<br>-DIMENSIONS: 6.00 x 4.00 x 1.70",
			//url
			"single-product-page?designName=naruto-shippuden&productName=xbox-one-x-controller",
			//sku
			"CUS/CONTR/TOP/20210015"
		); 
		$naruto_shippuden['xbox-one-elite-controller'] = new product (
			//four images of size 589x591
			"../images/products/naruto-shippuden/xbox-one-elite-controller/560X460/Front.jpg",
			"../images/products/naruto-shippuden/xbox-one-elite-controller/560X460/Back.jpg",
			"../images/products/naruto-shippuden/xbox-one-elite-controller/560X460/Side.jpg",
			"../images/products/naruto-shippuden/xbox-one-elite-controller/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/naruto-shippuden/xbox-one-elite-controller/187X140/Front.jpg",
			"../images/products/naruto-shippuden/xbox-one-elite-controller/187X140/Back.jpg",
			"../images/products/naruto-shippuden/xbox-one-elite-controller/187X140/Side.jpg",
			"../images/products/naruto-shippuden/xbox-one-elite-controller/187X140/Zoom.jpg",
			//design name
			"naruto shippuden" ,
			//design name html
			"naruto<br>shippuden",
			//design image
			"../images/products/naruto-shippuden/design.jpg",
			//product name
			"xbox one elite controller",
			//product Image
			"../images/products/naruto-shippuden/xbox-one-elite-controller/controller.png",
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
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One Elite Controller<br>-DIMENSIONS: 6.00 x 4.00 x 1.70",
			//url
			"single-product-page?designName=naruto-shippuden&productName=xbox-one-elite-controller",
			//sku
			"CUS/CONTR/TOP/20210024"
		);
		$naruto_shippuden['xbox-one-elite-wireless-controller'] = new product (
			//four images of size 589x591
			"../images/products/naruto-shippuden/xbox-one-elite-wireless-controller/560X460/Front.jpg",
			"../images/products/naruto-shippuden/xbox-one-elite-wireless-controller/560X460/Back.jpg",
			"../images/products/naruto-shippuden/xbox-one-elite-wireless-controller/560X460/Side.jpg",
			"../images/products/naruto-shippuden/xbox-one-elite-wireless-controller/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/naruto-shippuden/xbox-one-elite-wireless-controller/187X140/Front.jpg",
			"../images/products/naruto-shippuden/xbox-one-elite-wireless-controller/187X140/Back.jpg",
			"../images/products/naruto-shippuden/xbox-one-elite-wireless-controller/187X140/Side.jpg",
			"../images/products/naruto-shippuden/xbox-one-elite-wireless-controller/187X140/Zoom.jpg",
			//design name
			"naruto shippuden" ,
			//design name html
			"naruto<br>shippuden",
			//design image
			"../images/products/naruto-shippuden/design.jpg",
			//product name
			"xbox one elite wireless controller",
			//product Image
			"../images/products/naruto-shippuden/xbox-one-elite-wireless-controller/controller.png",
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
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One Elite Wireless Controller<br>-DIMENSIONS: 6.00 x 4.00 x 1.70",
			//url
			"single-product-page?designName=naruto-shippuden&productName=xbox-one-elite-wireless-controller",
			//sku
			"CUS/CONTR/TOP/20210025"
		);

		// consoles
		$naruto_shippuden['xbox-one-console'] = new product (
		//four images of size 589x591
			"../images/products/naruto-shippuden/xbox-one-console/560X460/Front.jpg",
			"../images/products/naruto-shippuden/xbox-one-console/560X460/Back.jpg",
			"../images/products/naruto-shippuden/xbox-one-console/560X460/Side.jpg",
			"../images/products/naruto-shippuden/xbox-one-console/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/naruto-shippuden/xbox-one-console/187X140/Front.jpg",
			"../images/products/naruto-shippuden/xbox-one-console/187X140/Back.jpg",
			"../images/products/naruto-shippuden/xbox-one-console/187X140/Side.jpg",
			"../images/products/naruto-shippuden/xbox-one-console/187X140/Zoom.jpg",
			//design name
			"naruto shippuden" ,
			//design name html
			"naruto<br>shippuden",
			//design image
			"../images/products/naruto-shippuden/design.jpg",
			//product name
			"xbox one console",
			//product Image
			"../images/products/naruto-shippuden/xbox-one-console/console.png",
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
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One console<br>-DIMENSIONS: 12.00 x 0.01 x 29.00",
			//url
			"single-product-page?designName=naruto-shippuden&productName=xbox-one-console",
			//sku
			"CUS/CONTR/TOP/20210026"
		);
		$naruto_shippuden['xbox-one-s-console'] = new product (
			//four images of size 589x591
			"../images/products/naruto-shippuden/xbox-one-s-console/560X460/Front.jpg",
			"../images/products/naruto-shippuden/xbox-one-s-console/560X460/Back.jpg",
			"../images/products/naruto-shippuden/xbox-one-s-console/560X460/Side.jpg",
			"../images/products/naruto-shippuden/xbox-one-s-console/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/naruto-shippuden/xbox-one-s-console/187X140/Front.jpg",
			"../images/products/naruto-shippuden/xbox-one-s-console/187X140/Back.jpg",
			"../images/products/naruto-shippuden/xbox-one-s-console/187X140/Side.jpg",
			"../images/products/naruto-shippuden/xbox-one-s-console/187X140/Zoom.jpg",
			//design name
			"naruto shippuden" ,
			//design name html
			"naruto<br>shippuden",
			//design image
			"../images/products/naruto-shippuden/design.jpg",
			//product name
			"xbox one s console",
			//product Image
			"../images/products/naruto-shippuden/xbox-one-s-console/console.png",
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
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One S console<br>-DIMENSIONS: 12.00 x 0.01 x 29.00",
			//url
			"single-product-page?designName=naruto-shippuden&productName=xbox-one-s-console",
			//sku
			"CUS/CONTR/TOP/20210027"
		);
		$naruto_shippuden['xbox-one-x-console'] = new product (
			//four images of size 589x591
			"../images/products/naruto-shippuden/xbox-one-x-console/560X460/Front.jpg",
			"../images/products/naruto-shippuden/xbox-one-x-console/560X460/Back.jpg",
			"../images/products/naruto-shippuden/xbox-one-x-console/560X460/Side.jpg",
			"../images/products/naruto-shippuden/xbox-one-x-console/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/naruto-shippuden/xbox-one-x-console/187X140/Front.jpg",
			"../images/products/naruto-shippuden/xbox-one-x-console/187X140/Back.jpg",
			"../images/products/naruto-shippuden/xbox-one-x-console/187X140/Side.jpg",
			"../images/products/naruto-shippuden/xbox-one-x-console/187X140/Zoom.jpg",
			//design name
			"naruto shippuden" ,
			//design name html
			"naruto<br>shippuden",
			//design image
			"../images/products/naruto-shippuden/design.jpg",
			//product name
			"xbox one x console",
			//product Image
			"../images/products/naruto-shippuden/xbox-one-x-console/console.png",
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
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One X console<br>-DIMENSIONS: 11.42 x 0.01 x 11.90",
			//url
			"single-product-page?designName=naruto-shippuden&productName=xbox-one-x-console",
			//sku
			"CUS/CONTR/TOP/20210028"
		); 
		
		// bundle

		$naruto_shippuden['xbox-one-bundle'] = new product (
			//four images of size 589x591
			"../images/products/naruto-shippuden/xbox-one-bundle/560X460/Front.jpg",
			"../images/products/naruto-shippuden/xbox-one-bundle/560X460/Back.jpg",
			"../images/products/naruto-shippuden/xbox-one-bundle/560X460/Side.jpg",
			"../images/products/naruto-shippuden/xbox-one-bundle/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/naruto-shippuden/xbox-one-bundle/187X140/Front.jpg",
			"../images/products/naruto-shippuden/xbox-one-bundle/187X140/Back.jpg",
			"../images/products/naruto-shippuden/xbox-one-bundle/187X140/Side.jpg",
			"../images/products/naruto-shippuden/xbox-one-bundle/187X140/Zoom.jpg",
			//design name
			"naruto shippuden" ,
			//design name html
			"naruto<br>shippuden",
			//design image
			"../images/products/naruto-shippuden/design.jpg",
			//product name
			"xbox one bundle",
			//product Image
			"../images/products/naruto-shippuden/xbox-one-bundle/bundle.png",
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
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One console & Controller <br>-DIMENSIONS: Console: 12.00 x 0.01 x 29.00<br>Controller: 6.00 x 4.00 x 1.70",
			//url
			"single-product-page?designName=naruto-shippuden&productName=xbox-one-bundle",
			//sku
			"CUS/CONTR/TOP/20210029"
		); 

		$naruto_shippuden['xbox-one-s-bundle'] = new product (
			//four images of size 589x591
			"../images/products/naruto-shippuden/xbox-one-s-bundle/560X460/Front.jpg",
			"../images/products/naruto-shippuden/xbox-one-s-bundle/560X460/Back.jpg",
			"../images/products/naruto-shippuden/xbox-one-s-bundle/560X460/Side.jpg",
			"../images/products/naruto-shippuden/xbox-one-s-bundle/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/naruto-shippuden/xbox-one-s-bundle/187X140/Front.jpg",
			"../images/products/naruto-shippuden/xbox-one-s-bundle/187X140/Back.jpg",
			"../images/products/naruto-shippuden/xbox-one-s-bundle/187X140/Side.jpg",
			"../images/products/naruto-shippuden/xbox-one-s-bundle/187X140/Zoom.jpg",
			//design name
			"naruto shippuden" ,
			//design name html
			"naruto<br>shippuden",
			//design image
			"../images/products/naruto-shippuden/design.jpg",
			//product name
			"xbox one s bundle",
			//product Image
			"../images/products/naruto-shippuden/xbox-one-s-bundle/bundle.png",
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
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One S console & Controller <br>-DIMENSIONS: Console: 12.00 x 0.01 x 29.00<br>Controller: 6.00 x 4.00 x 1.70",
			//url
			"single-product-page?designName=naruto-shippuden&productName=xbox-one-s-bundle",
			//sku
			"CUS/CONTR/TOP/20210030"
		); 

		$naruto_shippuden['xbox-one-x-bundle'] = new product (
			//four images of size 589x591
			"../images/products/naruto-shippuden/xbox-one-x-bundle/560X460/Front.jpg",
			"../images/products/naruto-shippuden/xbox-one-x-bundle/560X460/Back.jpg",
			"../images/products/naruto-shippuden/xbox-one-x-bundle/560X460/Side.jpg",
			"../images/products/naruto-shippuden/xbox-one-x-bundle/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/naruto-shippuden/xbox-one-x-bundle/187X140/Front.jpg",
			"../images/products/naruto-shippuden/xbox-one-x-bundle/187X140/Back.jpg",
			"../images/products/naruto-shippuden/xbox-one-x-bundle/187X140/Side.jpg",
			"../images/products/naruto-shippuden/xbox-one-x-bundle/187X140/Zoom.jpg",
			//design name
			"naruto shippuden" ,
			//design name html
			"naruto<br>shippuden",
			//design image
			"../images/products/naruto-shippuden/design.jpg",
			//product name
			"xbox one x bundle",
			//product Image
			"../images/products/naruto-shippuden/xbox-one-x-bundle/bundle.png",
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
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One X console & Controller <br>-DIMENSIONS: Console: 12.00 x 0.01 x 29.00<br>Controller: 6.00 x 4.00 x 1.70",
			//url
			"single-product-page?designName=naruto-shippuden&productName=xbox-one-x-bundle",
			//sku
			"CUS/CONTR/TOP/20210031"
		);

		// controller
		$patriot['xbox-one-controller'] = new product (
		//four images of size 589x591
			"../images/products/patriot/xbox-one-controller/560X460/Front.jpg",
			"../images/products/patriot/xbox-one-controller/560X460/Back.jpg",
			"../images/products/patriot/xbox-one-controller/560X460/Side.jpg",
			"../images/products/patriot/xbox-one-controller/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/patriot/xbox-one-controller/187X140/Front.jpg",
			"../images/products/patriot/xbox-one-controller/187X140/Back.jpg",
			"../images/products/patriot/xbox-one-controller/187X140/Side.jpg",
			"../images/products/patriot/xbox-one-controller/187X140/Zoom.jpg",
			//design name
			"patriot" ,
			//design name html
			"patriot",
			//design image
			"../images/products/patriot/design.jpg",
			//product name
			"xbox one controller",
			//product Image
			"../images/products/patriot/xbox-one-controller/controller.png",
			//price dollars
			"15",
			//price cents
			"99",
			//short description
			"America inspired design from<br> industry expert David E.Hunt,<br> Identify yourself as the best patriot,<br> OfficalMerch from America",
			//long description
			"America inspired design from<br> industry expert David E.Hunt,<br> Identify yourself as the best patriot,<br> OfficalMerch from America",
			//author
			"David E. Hunt",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One Controller<br>-DIMENSIONS: 6.00 x 4.00 x 1.70",
			//url
			"single-product-page?designName=patriot&productName=xbox-one-controller",
			//sku
			"CUS/CONTR/TOP/20210041"
		);
		$patriot['xbox-one-s-controller'] = new product (
			//four images of size 589x591
			"../images/products/patriot/xbox-one-s-controller/560X460/Front.jpg",
			"../images/products/patriot/xbox-one-s-controller/560X460/Back.jpg",
			"../images/products/patriot/xbox-one-s-controller/560X460/Side.jpg",
			"../images/products/patriot/xbox-one-s-controller/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/patriot/xbox-one-s-controller/187X140/Front.jpg",
			"../images/products/patriot/xbox-one-s-controller/187X140/Back.jpg",
			"../images/products/patriot/xbox-one-s-controller/187X140/Side.jpg",
			"../images/products/patriot/xbox-one-s-controller/187X140/Zoom.jpg",
			//design name
			"patriot" ,
			//design name html
			"patriot",
			//design image
			"../images/products/patriot/design.jpg",
			//product name
			"xbox one s controller",
			//product Image
			"../images/products/patriot/xbox-one-s-controller/controller.png",
			//price dollars
			"15",
			//price cents
			"99",
			//short description
			"America inspired design from<br> industry expert David E.Hunt,<br> Identify yourself as the best patriot,<br> OfficalMerch from America",
			//long description
			"America inspired design from<br> industry expert David E.Hunt,<br> Identify yourself as the best patriot,<br> OfficalMerch from America",
			//author
			"David E. Hunt",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One S Controller<br>-DIMENSIONS: 6.00 x 4.00 x 1.70",
			//url
			"single-product-page?designName=patriot&productName=xbox-one-s-controller",
			//sku
			"CUS/CONTR/TOP/20210042"
		);
		$patriot['xbox-one-x-controller'] = new product (
			//four images of size 589x591
			"../images/products/patriot/xbox-one-x-controller/560X460/Front.jpg",
			"../images/products/patriot/xbox-one-x-controller/560X460/Back.jpg",
			"../images/products/patriot/xbox-one-x-controller/560X460/Side.jpg",
			"../images/products/patriot/xbox-one-x-controller/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/patriot/xbox-one-x-controller/187X140/Front.jpg",
			"../images/products/patriot/xbox-one-x-controller/187X140/Back.jpg",
			"../images/products/patriot/xbox-one-x-controller/187X140/Side.jpg",
			"../images/products/patriot/xbox-one-x-controller/187X140/Zoom.jpg",
			//design name
			"patriot" ,
			//design name html
			"patriot",
			//design image
			"../images/products/patriot/design.jpg",
			//product name
			"xbox one x controller",
			//product Image
			"../images/products/patriot/xbox-one-x-controller/controller.png",
			//price dollars
			"15",
			//price cents
			"99",
			//short description
			"America inspired design from<br> industry expert David E.Hunt,<br> Identify yourself as the best patriot,<br> OfficalMerch from America",
			//long description
			"America inspired design from<br> industry expert David E.Hunt,<br> Identify yourself as the best patriot,<br> OfficalMerch from America",
			//author
			"David E. Hunt",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One X Controller<br>-DIMENSIONS: 6.00 x 4.00 x 1.70",
			//url
			"single-product-page?designName=patriot&productName=xbox-one-x-controller",
			//sku
			"CUS/CONTR/TOP/20210043"
		); 
		$patriot['xbox-one-elite-controller'] = new product (
			//four images of size 589x591
			"../images/products/patriot/xbox-one-elite-controller/560X460/Front.jpg",
			"../images/products/patriot/xbox-one-elite-controller/560X460/Back.jpg",
			"../images/products/patriot/xbox-one-elite-controller/560X460/Side.jpg",
			"../images/products/patriot/xbox-one-elite-controller/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/patriot/xbox-one-elite-controller/187X140/Front.jpg",
			"../images/products/patriot/xbox-one-elite-controller/187X140/Back.jpg",
			"../images/products/patriot/xbox-one-elite-controller/187X140/Side.jpg",
			"../images/products/patriot/xbox-one-elite-controller/187X140/Zoom.jpg",
			//design name
			"patriot" ,
			//design name html
			"patriot",
			//design image
			"../images/products/patriot/design.jpg",
			//product name
			"xbox one elite controller",
			//product Image
			"../images/products/patriot/xbox-one-elite-controller/controller.png",
			//price dollars
			"15",
			//price cents
			"99",
			//short description
			"America inspired design from<br> industry expert David E.Hunt,<br> Identify yourself as the best patriot,<br> OfficalMerch from America",
			//long description
			"America inspired design from<br> industry expert David E.Hunt,<br> Identify yourself as the best patriot,<br> OfficalMerch from America",
			//author
			"David E. Hunt",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One Elite Controller<br>-DIMENSIONS: 6.00 x 4.00 x 1.70",
			//url
			"single-product-page?designName=patriot&productName=xbox-one-elite-controller",
			//sku
			"CUS/CONTR/TOP/20210044"
		);
		$patriot['xbox-one-elite-wireless-controller'] = new product (
			//four images of size 589x591
			"../images/products/patriot/xbox-one-elite-wireless-controller/560X460/Front.jpg",
			"../images/products/patriot/xbox-one-elite-wireless-controller/560X460/Back.jpg",
			"../images/products/patriot/xbox-one-elite-wireless-controller/560X460/Side.jpg",
			"../images/products/patriot/xbox-one-elite-wireless-controller/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/patriot/xbox-one-elite-wireless-controller/187X140/Front.jpg",
			"../images/products/patriot/xbox-one-elite-wireless-controller/187X140/Back.jpg",
			"../images/products/patriot/xbox-one-elite-wireless-controller/187X140/Side.jpg",
			"../images/products/patriot/xbox-one-elite-wireless-controller/187X140/Zoom.jpg",
			//design name
			"patriot" ,
			//design name html
			"patriot",
			//design image
			"../images/products/patriot/design.jpg",
			//product name
			"xbox one elite wireless controller",
			//product Image
			"../images/products/patriot/xbox-one-elite-wireless-controller/controller.png",
			//price dollars
			"15",
			//price cents
			"99",
			//short description
			"America inspired design from<br> industry expert David E.Hunt,<br> Identify yourself as the best patriot,<br> OfficalMerch from America",
			//long description
			"America inspired design from<br> industry expert David E.Hunt,<br> Identify yourself as the best patriot,<br> OfficalMerch from America",
			//author
			"David E. Hunt",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One Elite Wireless Controller<br>-DIMENSIONS: 6.00 x 4.00 x 1.70",
			//url
			"single-product-page?designName=patriot&productName=xbox-one-elite-wireless-controller",
			//sku
			"CUS/CONTR/TOP/20210045"
		);

		// consoles
		$patriot['xbox-one-console'] = new product (
		//four images of size 589x591
			"../images/products/patriot/xbox-one-console/560X460/Front.jpg",
			"../images/products/patriot/xbox-one-console/560X460/Back.jpg",
			"../images/products/patriot/xbox-one-console/560X460/Side.jpg",
			"../images/products/patriot/xbox-one-console/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/patriot/xbox-one-console/187X140/Front.jpg",
			"../images/products/patriot/xbox-one-console/187X140/Back.jpg",
			"../images/products/patriot/xbox-one-console/187X140/Side.jpg",
			"../images/products/patriot/xbox-one-console/187X140/Zoom.jpg",
			//design name
			"patriot" ,
			//design name html
			"patriot",
			//design image
			"../images/products/patriot/design.jpg",
			//product name
			"xbox one console",
			//product Image
			"../images/products/patriot/xbox-one-console/console.png",
			//price dollars
			"20",
			//price cents
			"99",
			//short description
			"America inspired design from<br> industry expert David E.Hunt,<br> Identify yourself as the best patriot,<br> OfficalMerch from America",
			//long description
			"America inspired design from<br> industry expert David E.Hunt,<br> Identify yourself as the best patriot,<br> OfficalMerch from America",
			//author
			"David E. Hunt",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One console<br>-DIMENSIONS: 12.00 x 0.01 x 29.00",
			//url
			"single-product-page?designName=patriot&productName=xbox-one-console",
			//sku
			"CUS/CONTR/TOP/20210046"
		);
		$patriot['xbox-one-s-console'] = new product (
			//four images of size 589x591
			"../images/products/patriot/xbox-one-s-console/560X460/Front.jpg",
			"../images/products/patriot/xbox-one-s-console/560X460/Back.jpg",
			"../images/products/patriot/xbox-one-s-console/560X460/Side.jpg",
			"../images/products/patriot/xbox-one-s-console/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/patriot/xbox-one-s-console/187X140/Front.jpg",
			"../images/products/patriot/xbox-one-s-console/187X140/Back.jpg",
			"../images/products/patriot/xbox-one-s-console/187X140/Side.jpg",
			"../images/products/patriot/xbox-one-s-console/187X140/Zoom.jpg",
			//design name
			"patriot" ,
			//design name html
			"patriot",
			//design image
			"../images/products/patriot/design.jpg",
			//product name
			"xbox one s console",
			//product Image
			"../images/products/patriot/xbox-one-s-console/console.png",
			//price dollars
			"20",
			//price cents
			"99",
			//short description
			"America inspired design from<br> industry expert David E.Hunt,<br> Identify yourself as the best patriot,<br> OfficalMerch from America",
			//long description
			"America inspired design from<br> industry expert David E.Hunt,<br> Identify yourself as the best patriot,<br> OfficalMerch from America",
			//author
			"David E. Hunt",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One S console<br>-DIMENSIONS: 12.00 x 0.01 x 29.00",
			//url
			"single-product-page?designName=patriot&productName=xbox-one-s-console",
			//sku
			"CUS/CONTR/TOP/20210047"
		);
		$patriot['xbox-one-x-console'] = new product (
			//four images of size 589x591
			"../images/products/patriot/xbox-one-x-console/560X460/Front.jpg",
			"../images/products/patriot/xbox-one-x-console/560X460/Back.jpg",
			"../images/products/patriot/xbox-one-x-console/560X460/Side.jpg",
			"../images/products/patriot/xbox-one-x-console/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/patriot/xbox-one-x-console/187X140/Front.jpg",
			"../images/products/patriot/xbox-one-x-console/187X140/Back.jpg",
			"../images/products/patriot/xbox-one-x-console/187X140/Side.jpg",
			"../images/products/patriot/xbox-one-x-console/187X140/Zoom.jpg",
			//design name
			"patriot" ,
			//design name html
			"patriot",
			//design image
			"../images/products/patriot/design.jpg",
			//product name
			"xbox one x console",
			//product Image
			"../images/products/patriot/xbox-one-x-console/console.png",
			//price dollars
			"20",
			//price cents
			"99",
			//short description
			"America inspired design from<br> industry expert David E.Hunt,<br> Identify yourself as the best patriot,<br> OfficalMerch from America",
			//long description
			"America inspired design from<br> industry expert David E.Hunt,<br> Identify yourself as the best patriot,<br> OfficalMerch from America",
			//author
			"David E. Hunt",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One X console<br>-DIMENSIONS: 11.42 x 0.01 x 11.90",
			//url
			"single-product-page?designName=patriot&productName=xbox-one-x-console",
			//sku
			"CUS/CONTR/TOP/20210048"
		); 

		// bundle
		$patriot['xbox-one-bundle'] = new product (
			//four images of size 589x591
			"../images/products/patriot/xbox-one-bundle/560X460/Front.jpg",
			"../images/products/patriot/xbox-one-bundle/560X460/Back.jpg",
			"../images/products/patriot/xbox-one-bundle/560X460/Side.jpg",
			"../images/products/patriot/xbox-one-bundle/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/patriot/xbox-one-bundle/187X140/Front.jpg",
			"../images/products/patriot/xbox-one-bundle/187X140/Back.jpg",
			"../images/products/patriot/xbox-one-bundle/187X140/Side.jpg",
			"../images/products/patriot/xbox-one-bundle/187X140/Zoom.jpg",
			//design name
			"patriot" ,
			//design name html
			"patriot",
			//design image
			"../images/products/patriot/design.jpg",
			//product name
			"xbox one bundle",
			//product Image
			"../images/products/patriot/xbox-one-bundle/bundle.png",
			//price dollars
			"23",
			//price cents
			"99",
			//short description
			"America inspired design from<br> industry expert David E.Hunt,<br> Identify yourself as the best patriot,<br> OfficalMerch from America",
			//long description
			"America inspired design from<br> industry expert David E.Hunt,<br> Identify yourself as the best patriot,<br> OfficalMerch from America",
			//author
			"David E. Hunt",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One console & Controller <br>-DIMENSIONS: Console: 12.00 x 0.01 x 29.00<br>Controller: 6.00 x 4.00 x 1.70",
			//url
			"single-product-page?designName=patriot&productName=xbox-one-bundle",
			//sku
			"CUS/CONTR/TOP/20210049"
		); 

		$patriot['xbox-one-s-bundle'] = new product (
			//four images of size 589x591
			"../images/products/patriot/xbox-one-s-bundle/560X460/Front.jpg",
			"../images/products/patriot/xbox-one-s-bundle/560X460/Back.jpg",
			"../images/products/patriot/xbox-one-s-bundle/560X460/Side.jpg",
			"../images/products/patriot/xbox-one-s-bundle/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/patriot/xbox-one-s-bundle/187X140/Front.jpg",
			"../images/products/patriot/xbox-one-s-bundle/187X140/Back.jpg",
			"../images/products/patriot/xbox-one-s-bundle/187X140/Side.jpg",
			"../images/products/patriot/xbox-one-s-bundle/187X140/Zoom.jpg",
			//design name
			"patriot" ,
			//design name html
			"patriot",
			//design image
			"../images/products/patriot/design.jpg",
			//product name
			"xbox one s bundle",
			//product Image
			"../images/products/patriot/xbox-one-s-bundle/bundle.png",
			//price dollars
			"23",
			//price cents
			"99",
			//short description
			"America inspired design from<br> industry expert David E.Hunt,<br> Identify yourself as the best patriot,<br> OfficalMerch from America",
			//long description
			"America inspired design from<br> industry expert David E.Hunt,<br> Identify yourself as the best patriot,<br> OfficalMerch from America",
			//author
			"David E. Hunt",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One S console & Controller <br>-DIMENSIONS: Console: 12.00 x 0.01 x 29.00<br>Controller: 6.00 x 4.00 x 1.70",
			//url
			"single-product-page?designName=patriot&productName=xbox-one-s-bundle",
			//sku
			"CUS/CONTR/TOP/20210023"
		); 

		$patriot['xbox-one-x-bundle'] = new product (
			//four images of size 589x591
			"../images/products/patriot/xbox-one-x-bundle/560X460/Front.jpg",
			"../images/products/patriot/xbox-one-x-bundle/560X460/Back.jpg",
			"../images/products/patriot/xbox-one-x-bundle/560X460/Side.jpg",
			"../images/products/patriot/xbox-one-x-bundle/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/patriot/xbox-one-x-bundle/187X140/Front.jpg",
			"../images/products/patriot/xbox-one-x-bundle/187X140/Back.jpg",
			"../images/products/patriot/xbox-one-x-bundle/187X140/Side.jpg",
			"../images/products/patriot/xbox-one-x-bundle/187X140/Zoom.jpg",
			//design name
			"patriot" ,
			//design name html
			"patriot",
			//design image
			"../images/products/patriot/design.jpg",
			//product name
			"xbox one x bundle",
			//product Image
			"../images/products/patriot/xbox-one-x-bundle/bundle.png",
			//price dollars
			"23",
			//price cents
			"99",
			//short description
			"America inspired design from<br> industry expert David E.Hunt,<br> Identify yourself as the best patriot,<br> OfficalMerch from America",
			//long description
			"America inspired design from<br> industry expert David E.Hunt,<br> Identify yourself as the best patriot,<br> OfficalMerch from America",
			//author
			"David E. Hunt",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One X console & Controller <br>-DIMENSIONS: Console: 12.00 x 0.01 x 29.00<br>Controller: 6.00 x 4.00 x 1.70",
			//url
			"single-product-page?designName=patriot&productName=xbox-one-x-bundle",
			//sku
			"CUS/CONTR/TOP/20210051"
		);
		
		// controller
		$skull_kaleidoscope['xbox-one-controller'] = new product (
		//four images of size 589x591
			"../images/products/skull-kaleidoscope/xbox-one-controller/560X460/Front.jpg",
			"../images/products/skull-kaleidoscope/xbox-one-controller/560X460/Back.jpg",
			"../images/products/skull-kaleidoscope/xbox-one-controller/560X460/Side.jpg",
			"../images/products/skull-kaleidoscope/xbox-one-controller/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/skull-kaleidoscope/xbox-one-controller/187X140/Front.jpg",
			"../images/products/skull-kaleidoscope/xbox-one-controller/187X140/Back.jpg",
			"../images/products/skull-kaleidoscope/xbox-one-controller/187X140/Side.jpg",
			"../images/products/skull-kaleidoscope/xbox-one-controller/187X140/Zoom.jpg",
			//design name
			"skull kaleidoscope" ,
			//design name html
			"skull<br>kaleidoscope",
			//design image
			"../images/products/skull-kaleidoscope/design.jpg",
			//product name
			"xbox one controller",
			//product Image
			"../images/products/skull-kaleidoscope/xbox-one-controller/controller.png",
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
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One Controller<br>-DIMENSIONS: 6.00 x 4.00 x 1.70",
			//url
			"single-product-page?designName=skull-kaleidoscope&productName=xbox-one-controller",
			//sku
			"CUS/CONTR/TOP/20210061"
		);
		$skull_kaleidoscope['xbox-one-s-controller'] = new product (
			//four images of size 589x591
			"../images/products/skull-kaleidoscope/xbox-one-s-controller/560X460/Front.jpg",
			"../images/products/skull-kaleidoscope/xbox-one-s-controller/560X460/Back.jpg",
			"../images/products/skull-kaleidoscope/xbox-one-s-controller/560X460/Side.jpg",
			"../images/products/skull-kaleidoscope/xbox-one-s-controller/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/skull-kaleidoscope/xbox-one-s-controller/187X140/Front.jpg",
			"../images/products/skull-kaleidoscope/xbox-one-s-controller/187X140/Back.jpg",
			"../images/products/skull-kaleidoscope/xbox-one-s-controller/187X140/Side.jpg",
			"../images/products/skull-kaleidoscope/xbox-one-s-controller/187X140/Zoom.jpg",
			//design name
			"skull kaleidoscope" ,
			//design name html
			"skull<br>kaleidoscope",
			//design image
			"../images/products/skull-kaleidoscope/design.jpg",
			//product name
			"xbox one s controller",
			//product Image
			"../images/products/skull-kaleidoscope/xbox-one-s-controller/controller.png",
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
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One S Controller<br>-DIMENSIONS: 6.00 x 4.00 x 1.70",
			//url
			"single-product-page?designName=skull-kaleidoscope&productName=xbox-one-s-controller",
			//sku
			"CUS/CONTR/TOP/20210062"
		);
		$skull_kaleidoscope['xbox-one-x-controller'] = new product (
			//four images of size 589x591
			"../images/products/skull-kaleidoscope/xbox-one-x-controller/560X460/Front.jpg",
			"../images/products/skull-kaleidoscope/xbox-one-x-controller/560X460/Back.jpg",
			"../images/products/skull-kaleidoscope/xbox-one-x-controller/560X460/Side.jpg",
			"../images/products/skull-kaleidoscope/xbox-one-x-controller/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/skull-kaleidoscope/xbox-one-x-controller/187X140/Front.jpg",
			"../images/products/skull-kaleidoscope/xbox-one-x-controller/187X140/Back.jpg",
			"../images/products/skull-kaleidoscope/xbox-one-x-controller/187X140/Side.jpg",
			"../images/products/skull-kaleidoscope/xbox-one-x-controller/187X140/Zoom.jpg",
			//design name
			"skull kaleidoscope" ,
			//design name html
			"skull<br>kaleidoscope",
			//design image
			"../images/products/skull-kaleidoscope/design.jpg",
			//product name
			"xbox one x controller",
			//product Image
			"../images/products/skull-kaleidoscope/xbox-one-x-controller/controller.png",
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
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One X Controller<br>-DIMENSIONS: 6.00 x 4.00 x 1.70",
			//url
			"single-product-page?designName=skull-kaleidoscope&productName=xbox-one-x-controller",
			//sku
			"CUS/CONTR/TOP/20210063"
		); 
		$skull_kaleidoscope['xbox-one-elite-controller'] = new product (
			//four images of size 589x591
			"../images/products/skull-kaleidoscope/xbox-one-elite-controller/560X460/Front.jpg",
			"../images/products/skull-kaleidoscope/xbox-one-elite-controller/560X460/Back.jpg",
			"../images/products/skull-kaleidoscope/xbox-one-elite-controller/560X460/Side.jpg",
			"../images/products/skull-kaleidoscope/xbox-one-elite-controller/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/skull-kaleidoscope/xbox-one-elite-controller/187X140/Front.jpg",
			"../images/products/skull-kaleidoscope/xbox-one-elite-controller/187X140/Back.jpg",
			"../images/products/skull-kaleidoscope/xbox-one-elite-controller/187X140/Side.jpg",
			"../images/products/skull-kaleidoscope/xbox-one-elite-controller/187X140/Zoom.jpg",
			//design name
			"skull kaleidoscope" ,
			//design name html
			"skull<br>kaleidoscope",
			//design image
			"../images/products/skull-kaleidoscope/design.jpg",
			//product name
			"xbox one elite controller",
			//product Image
			"../images/products/skull-kaleidoscope/xbox-one-x-controller/controller.png",
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
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One Elite Controller<br>-DIMENSIONS: 6.00 x 4.00 x 1.70",
			//url
			"single-product-page?designName=skull-kaleidoscope&productName=xbox-one-Elite-controller",
			//sku
			"CUS/CONTR/TOP/20210064"
		);
		$skull_kaleidoscope['xbox-one-elite-wireless-controller'] = new product (
			//four images of size 589x591
			"../images/products/skull-kaleidoscope/xbox-one-elite-wireless-controller/560X460/Front.jpg",
			"../images/products/skull-kaleidoscope/xbox-one-elite-wireless-controller/560X460/Back.jpg",
			"../images/products/skull-kaleidoscope/xbox-one-elite-wireless-controller/560X460/Side.jpg",
			"../images/products/skull-kaleidoscope/xbox-one-elite-wireless-controller/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/skull-kaleidoscope/xbox-one-elite-wireless-controller/187X140/Front.jpg",
			"../images/products/skull-kaleidoscope/xbox-one-elite-wireless-controller/187X140/Back.jpg",
			"../images/products/skull-kaleidoscope/xbox-one-elite-wireless-controller/187X140/Side.jpg",
			"../images/products/skull-kaleidoscope/xbox-one-elite-wireless-controller/187X140/Zoom.jpg",
			//design name
			"skull kaleidoscope" ,
			//design name html
			"skull<br>kaleidoscope",
			//design image
			"../images/products/skull-kaleidoscope/design.jpg",
			//product name
			"xbox one elite wireless controller",
			//product Image
			"../images/products/skull-kaleidoscope/xbox-one-elite-wireless-controller/controller.png",
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
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One Elite Controller<br>-DIMENSIONS: 6.00 x 4.00 x 1.70",
			//url
			"single-product-page?designName=skull-kaleidoscope&productName=xbox-one-elite-wireless-controller",
			//sku
			"CUS/CONTR/TOP/20210065"
		);

		// consoles
		$skull_kaleidoscope['xbox-one-console'] = new product (
		//four images of size 589x591
			"../images/products/skull-kaleidoscope/xbox-one-console/560X460/Front.jpg",
			"../images/products/skull-kaleidoscope/xbox-one-console/560X460/Back.jpg",
			"../images/products/skull-kaleidoscope/xbox-one-console/560X460/Side.jpg",
			"../images/products/skull-kaleidoscope/xbox-one-console/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/skull-kaleidoscope/xbox-one-console/187X140/Front.jpg",
			"../images/products/skull-kaleidoscope/xbox-one-console/187X140/Back.jpg",
			"../images/products/skull-kaleidoscope/xbox-one-console/187X140/Side.jpg",
			"../images/products/skull-kaleidoscope/xbox-one-console/187X140/Zoom.jpg",
			//design name
			"skull kaleidoscope" ,
			//design name html
			"skull<br>kaleidoscope",
			//design image
			"../images/products/skull-kaleidoscope/design.jpg",
			//product name
			"xbox one console",
			//product Image
			"../images/products/skull-kaleidoscope/xbox-one-console/console.png",
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
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One console<br>-DIMENSIONS: 12.00 x 0.01 x 29.00",
			//url
			"single-product-page?designName=skull-kaleidoscope&productName=xbox-one-console",
			//sku
			"CUS/CONTR/TOP/20210066"
		);
		$skull_kaleidoscope['xbox-one-s-console'] = new product (
			//four images of size 589x591
			"../images/products/skull-kaleidoscope/xbox-one-s-console/560X460/Front.jpg",
			"../images/products/skull-kaleidoscope/xbox-one-s-console/560X460/Back.jpg",
			"../images/products/skull-kaleidoscope/xbox-one-s-console/560X460/Side.jpg",
			"../images/products/skull-kaleidoscope/xbox-one-s-console/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/skull-kaleidoscope/xbox-one-s-console/187X140/Front.jpg",
			"../images/products/skull-kaleidoscope/xbox-one-s-console/187X140/Back.jpg",
			"../images/products/skull-kaleidoscope/xbox-one-s-console/187X140/Side.jpg",
			"../images/products/skull-kaleidoscope/xbox-one-s-console/187X140/Zoom.jpg",
			//design name
			"skull kaleidoscope" ,
			//design name html
			"skull<br>kaleidoscope",
			//design image
			"../images/products/skull-kaleidoscope/design.jpg",
			//product name
			"xbox one s console",
			//product Image
			"../images/products/skull-kaleidoscope/xbox-one-s-console/console.png",
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
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One S console<br>-DIMENSIONS: 12.00 x 0.01 x 29.00",
			//url
			"single-product-page?designName=skull-kaleidoscope&productName=xbox-one-s-console",
			//sku
			"CUS/CONTR/TOP/20210067"
		);
		$skull_kaleidoscope['xbox-one-x-console'] = new product (
			//four images of size 589x591
			"../images/products/skull-kaleidoscope/xbox-one-x-console/560X460/Front.jpg",
			"../images/products/skull-kaleidoscope/xbox-one-x-console/560X460/Back.jpg",
			"../images/products/skull-kaleidoscope/xbox-one-x-console/560X460/Side.jpg",
			"../images/products/skull-kaleidoscope/xbox-one-x-console/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/skull-kaleidoscope/xbox-one-x-console/187X140/Front.jpg",
			"../images/products/skull-kaleidoscope/xbox-one-x-console/187X140/Back.jpg",
			"../images/products/skull-kaleidoscope/xbox-one-x-console/187X140/Side.jpg",
			"../images/products/skull-kaleidoscope/xbox-one-x-console/187X140/Zoom.jpg",
			//design name
			"skull kaleidoscope" ,
			//design name html
			"skull<br>kaleidoscope",
			//design image
			"../images/products/skull-kaleidoscope/design.jpg",
			//product name
			"xbox one x console",
			//product Image
			"../images/products/skull-kaleidoscope/xbox-one-x-console/console.png",
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
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One X console<br>-DIMENSIONS: 11.42 x 0.01 x 11.90",
			//url
			"single-product-page?designName=skull-kaleidoscope&productName=xbox-one-x-console",
			//sku
			"CUS/CONTR/TOP/20210068"
		); 

		// bundle
		
		$skull_kaleidoscope['xbox-one-bundle'] = new product (
			//four images of size 589x591
			"../images/products/skull-kaleidoscope/xbox-one-bundle/560X460/Front.jpg",
			"../images/products/skull-kaleidoscope/xbox-one-bundle/560X460/Back.jpg",
			"../images/products/skull-kaleidoscope/xbox-one-bundle/560X460/Side.jpg",
			"../images/products/skull-kaleidoscope/xbox-one-bundle/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/skull-kaleidoscope/xbox-one-bundle/187X140/Front.jpg",
			"../images/products/skull-kaleidoscope/xbox-one-bundle/187X140/Back.jpg",
			"../images/products/skull-kaleidoscope/xbox-one-bundle/187X140/Side.jpg",
			"../images/products/skull-kaleidoscope/xbox-one-bundle/187X140/Zoom.jpg",
			//design name
			"skull kaleidoscope" ,
			//design name html
			"naruto<br>shippuden",
			//design image
			"../images/products/skull-kaleidoscope/design.jpg",
			//product name
			"xbox one bundle",
			//product Image
			"../images/products/skull-kaleidoscope/xbox-one-bundle/bundle.png",
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
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One console & Controller <br>-DIMENSIONS: Console: 12.00 x 0.01 x 29.00<br>Controller: 6.00 x 4.00 x 1.70",
			//url
			"single-product-page?designName=skull-kaleidoscope&productName=xbox-one-bundle",
			//sku
			"CUS/CONTR/TOP/20210069"
		); 

		$skull_kaleidoscope['xbox-one-s-bundle'] = new product (
			//four images of size 589x591
			"../images/products/skull-kaleidoscope/xbox-one-s-bundle/560X460/Front.jpg",
			"../images/products/skull-kaleidoscope/xbox-one-s-bundle/560X460/Back.jpg",
			"../images/products/skull-kaleidoscope/xbox-one-s-bundle/560X460/Side.jpg",
			"../images/products/skull-kaleidoscope/xbox-one-s-bundle/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/skull-kaleidoscope/xbox-one-s-bundle/187X140/Front.jpg",
			"../images/products/skull-kaleidoscope/xbox-one-s-bundle/187X140/Back.jpg",
			"../images/products/skull-kaleidoscope/xbox-one-s-bundle/187X140/Side.jpg",
			"../images/products/skull-kaleidoscope/xbox-one-s-bundle/187X140/Zoom.jpg",
			//design name
			"skull kaleidoscope" ,
			//design name html
			"naruto<br>shippuden",
			//design image
			"../images/products/skull-kaleidoscope/design.jpg",
			//product name
			"xbox one s bundle",
			//product Image
			"../images/products/skull-kaleidoscope/xbox-one-s-bundle/bundle.png",
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
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One S console & Controller <br>-DIMENSIONS: Console: 12.00 x 0.01 x 29.00<br>Controller: 6.00 x 4.00 x 1.70",
			//url
			"single-product-page?designName=skull-kaleidoscope&productName=xbox-one-s-bundle",
			//sku
			"CUS/CONTR/TOP/20210070"
		); 

		$skull_kaleidoscope['xbox-one-x-bundle'] = new product (
			//four images of size 589x591
			"../images/products/skull-kaleidoscope/xbox-one-x-bundle/560X460/Front.jpg",
			"../images/products/skull-kaleidoscope/xbox-one-x-bundle/560X460/Back.jpg",
			"../images/products/skull-kaleidoscope/xbox-one-x-bundle/560X460/Side.jpg",
			"../images/products/skull-kaleidoscope/xbox-one-x-bundle/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/skull-kaleidoscope/xbox-one-x-bundle/187X140/Front.jpg",
			"../images/products/skull-kaleidoscope/xbox-one-x-bundle/187X140/Back.jpg",
			"../images/products/skull-kaleidoscope/xbox-one-x-bundle/187X140/Side.jpg",
			"../images/products/skull-kaleidoscope/xbox-one-x-bundle/187X140/Zoom.jpg",
			//design name
			"skull kaleidoscope" ,
			//design name html
			"naruto<br>shippuden",
			//design image
			"../images/products/skull-kaleidoscope/design.jpg",
			//product name
			"xbox one x bundle",
			//product Image
			"../images/products/skull-kaleidoscope/xbox-one-x-bundle/bundle.png",
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
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One X console & Controller <br>-DIMENSIONS: Console: 12.00 x 0.01 x 29.00<br>Controller: 6.00 x 4.00 x 1.70",
			//url
			"single-product-page?designName=skull-kaleidoscope&productName=xbox-one-x-bundle",
			//sku
			"CUS/CONTR/TOP/20210071"
		);

		// controller
		$tokyo_ghoul['xbox-one-controller'] = new product (
		//four images of size 589x591
			"../images/products/tokyo-ghoul/xbox-one-controller/560X460/Front.jpg",
			"../images/products/tokyo-ghoul/xbox-one-controller/560X460/Back.jpg",
			"../images/products/tokyo-ghoul/xbox-one-controller/560X460/Side.jpg",
			"../images/products/tokyo-ghoul/xbox-one-controller/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/tokyo-ghoul/xbox-one-controller/187X140/Front.jpg",
			"../images/products/tokyo-ghoul/xbox-one-controller/187X140/Back.jpg",
			"../images/products/tokyo-ghoul/xbox-one-controller/187X140/Side.jpg",
			"../images/products/tokyo-ghoul/xbox-one-controller/187X140/Zoom.jpg",
			//design name
			"tokyo ghoul" ,
			//design name html
			"tokyo<br>ghoul",
			//design image
			"../images/products/tokyo-ghoul/design.jpg",
			//product name
			"xbox one controller",
			//product Image
			"../images/products/tokyo-ghoul/xbox-one-controller/controller.png",
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
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One Controller<br>-DIMENSIONS: 6.00 x 4.00 x 1.70",
			//url
			"single-product-page?designName=tokyo-ghoul&productName=xbox-one-controller",
			//sku
			"CUS/CONTR/TOP/20210081"
		);
		$tokyo_ghoul['xbox-one-s-controller'] = new product (
			//four images of size 589x591
			"../images/products/tokyo-ghoul/xbox-one-s-controller/560X460/Front.jpg",
			"../images/products/tokyo-ghoul/xbox-one-s-controller/560X460/Back.jpg",
			"../images/products/tokyo-ghoul/xbox-one-s-controller/560X460/Side.jpg",
			"../images/products/tokyo-ghoul/xbox-one-s-controller/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/tokyo-ghoul/xbox-one-s-controller/187X140/Front.jpg",
			"../images/products/tokyo-ghoul/xbox-one-s-controller/187X140/Back.jpg",
			"../images/products/tokyo-ghoul/xbox-one-s-controller/187X140/Side.jpg",
			"../images/products/tokyo-ghoul/xbox-one-s-controller/187X140/Zoom.jpg",
			//design name
			"tokyo ghoul" ,
			//design name html
			"tokyo<br>ghoul",
			//design image
			"../images/products/tokyo-ghoul/design.jpg",
			//product name
			"xbox one s controller",
			//product Image
			"../images/products/tokyo-ghoul/xbox-one-s-controller/controller.png",
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
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One S Controller<br>-DIMENSIONS: 6.00 x 4.00 x 1.70",
			//url
			"single-product-page?designName=tokyo-ghoul&productName=xbox-one-s-controller",
			//sku
			"CUS/CONTR/TOP/20210082"
		);
		$tokyo_ghoul['xbox-one-x-controller'] = new product (
			//four images of size 589x591
			"../images/products/tokyo-ghoul/xbox-one-x-controller/560X460/Front.jpg",
			"../images/products/tokyo-ghoul/xbox-one-x-controller/560X460/Back.jpg",
			"../images/products/tokyo-ghoul/xbox-one-x-controller/560X460/Side.jpg",
			"../images/products/tokyo-ghoul/xbox-one-x-controller/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/tokyo-ghoul/xbox-one-x-controller/187X140/Front.jpg",
			"../images/products/tokyo-ghoul/xbox-one-x-controller/187X140/Back.jpg",
			"../images/products/tokyo-ghoul/xbox-one-x-controller/187X140/Side.jpg",
			"../images/products/tokyo-ghoul/xbox-one-x-controller/187X140/Zoom.jpg",
			//design name
			"tokyo ghoul" ,
			//design name html
			"tokyo<br>ghoul",
			//design image
			"../images/products/tokyo-ghoul/design.jpg",
			//product name
			"xbox one x controller",
			//product Image
			"../images/products/tokyo-ghoul/xbox-one-x-controller/controller.png",
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
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One X Controller<br>-DIMENSIONS: 6.00 x 4.00 x 1.70",
			//url
			"single-product-page?designName=tokyo-ghoul&productName=xbox-one-x-controller",
			//sku
			"CUS/CONTR/TOP/20210083"
		); 
		$tokyo_ghoul['xbox-one-elite-controller'] = new product (
			//four images of size 589x591
			"../images/products/tokyo-ghoul/xbox-one-elite-controller/560X460/Front.jpg",
			"../images/products/tokyo-ghoul/xbox-one-elite-controller/560X460/Back.jpg",
			"../images/products/tokyo-ghoul/xbox-one-elite-controller/560X460/Side.jpg",
			"../images/products/tokyo-ghoul/xbox-one-elite-controller/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/tokyo-ghoul/xbox-one-elite-controller/187X140/Front.jpg",
			"../images/products/tokyo-ghoul/xbox-one-elite-controller/187X140/Back.jpg",
			"../images/products/tokyo-ghoul/xbox-one-elite-controller/187X140/Side.jpg",
			"../images/products/tokyo-ghoul/xbox-one-elite-controller/187X140/Zoom.jpg",
			//design name
			"tokyo ghoul" ,
			//design name html
			"tokyo<br>ghoul",
			//design image
			"../images/products/tokyo-ghoul/design.jpg",
			//product name
			"xbox one elite controller",
			//product Image
			"../images/products/tokyo-ghoul/xbox-one-elite-controller/controller.png",
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
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One Elite Controller<br>-DIMENSIONS: 6.00 x 4.00 x 1.70",
			//url
			"single-product-page?designName=tokyo-ghoul&productName=xbox-one-elite-controller",
			//sku
			"CUS/CONTR/TOP/20210084"
		);
		$tokyo_ghoul['xbox-one-elite-wireless-controller'] = new product (
			//four images of size 589x591
			"../images/products/tokyo-ghoul/xbox-one-elite-wireless-controller/560X460/Front.jpg",
			"../images/products/tokyo-ghoul/xbox-one-elite-wireless-controller/560X460/Back.jpg",
			"../images/products/tokyo-ghoul/xbox-one-elite-wireless-controller/560X460/Side.jpg",
			"../images/products/tokyo-ghoul/xbox-one-elite-wireless-controller/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/tokyo-ghoul/xbox-one-elite-wireless-controller/187X140/Front.jpg",
			"../images/products/tokyo-ghoul/xbox-one-elite-wireless-controller/187X140/Back.jpg",
			"../images/products/tokyo-ghoul/xbox-one-elite-wireless-controller/187X140/Side.jpg",
			"../images/products/tokyo-ghoul/xbox-one-elite-wireless-controller/187X140/Zoom.jpg",
			//design name
			"tokyo ghoul" ,
			//design name html
			"tokyo<br>ghoul",
			//design image
			"../images/products/tokyo-ghoul/design.jpg",
			//product name
			"xbox one elite wireless controller",
			//product Image
			"../images/products/tokyo-ghoul/xbox-one-elite-wireless-controller/controller.png",
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
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One Elite Wireless Controller<br>-DIMENSIONS: 6.00 x 4.00 x 1.70",
			//url
			"single-product-page?designName=tokyo-ghoul&productName=xbox-one-elite-wireless-controller",
			//sku
			"CUS/CONTR/TOP/20210085"
		);

		// consoles
		$tokyo_ghoul['xbox-one-console'] = new product (
		//four images of size 589x591
			"../images/products/tokyo-ghoul/xbox-one-console/560X460/Front.jpg",
			"../images/products/tokyo-ghoul/xbox-one-console/560X460/Back.jpg",
			"../images/products/tokyo-ghoul/xbox-one-console/560X460/Side.jpg",
			"../images/products/tokyo-ghoul/xbox-one-console/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/tokyo-ghoul/xbox-one-console/187X140/Front.jpg",
			"../images/products/tokyo-ghoul/xbox-one-console/187X140/Back.jpg",
			"../images/products/tokyo-ghoul/xbox-one-console/187X140/Side.jpg",
			"../images/products/tokyo-ghoul/xbox-one-console/187X140/Zoom.jpg",
			//design name
			"tokyo ghoul" ,
			//design name html
			"tokyo<br>ghoul",
			//design image
			"../images/products/tokyo-ghoul/design.jpg",
			//product name
			"xbox one console",
			//product Image
			"../images/products/tokyo-ghoul/xbox-one-console/console.png",
			//price dollars
			"20",
			//price cents
			"99",
			//short description
			"Tokyo Ghoul Inspired Design<br> by Tsujita Masujiro, Japan's Top Designers,<br> If you are into anime <br>you cannot be living without this design.<br> Tokyo Ghoul is one of <br>the most popuar anime in the world.",
			//long description
			"Tokyo Ghoul Inspired Design<br> by Tsujita Masujiro, Japan's Top Designers,<br> If you are into anime <br>you cannot be living without this design.<br> Tokyo Ghoul is one of <br>the most popuar anime in the world.",
			//author
			"William Blake",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One  console<br>-DIMENSIONS: 12.00 x 0.01 x 29.00",
			//url
			"single-product-page?designName=tokyo-ghoul&productName=xbox-one-console",
			//sku
			"CUS/CONTR/TOP/20210086"
		);
		$tokyo_ghoul['xbox-one-s-console'] = new product (
			//four images of size 589x591
			"../images/products/tokyo-ghoul/xbox-one-s-console/560X460/Front.jpg",
			"../images/products/tokyo-ghoul/xbox-one-s-console/560X460/Back.jpg",
			"../images/products/tokyo-ghoul/xbox-one-s-console/560X460/Side.jpg",
			"../images/products/tokyo-ghoul/xbox-one-s-console/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/tokyo-ghoul/xbox-one-s-console/187X140/Front.jpg",
			"../images/products/tokyo-ghoul/xbox-one-s-console/187X140/Back.jpg",
			"../images/products/tokyo-ghoul/xbox-one-s-console/187X140/Side.jpg",
			"../images/products/tokyo-ghoul/xbox-one-s-console/187X140/Zoom.jpg",
			//design name
			"tokyo ghoul" ,
			//design name html
			"tokyo<br>ghoul",
			//design image
			"../images/products/tokyo-ghoul/design.jpg",
			//product name
			"xbox one s console",
			//product Image
			"../images/products/tokyo-ghoul/xbox-one-s-console/console.png",
			//price dollars
			"20",
			//price cents
			"99",
			//short description
			"Tokyo Ghoul Inspired Design<br> by Tsujita Masujiro, Japan's Top Designers,<br> If you are into anime <br>you cannot be living without this design.<br> Tokyo Ghoul is one of <br>the most popuar anime in the world.",
			//long description
			"Tokyo Ghoul Inspired Design<br> by Tsujita Masujiro, Japan's Top Designers,<br> If you are into anime <br>you cannot be living without this design.<br> Tokyo Ghoul is one of <br>the most popuar anime in the world.",
			//author
			"William Blake",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One S console<br>-DIMENSIONS: 12.00 x 0.01 x 29.00",
			//url
			"single-product-page?designName=tokyo-ghoul&productName=xbox-one-s-console",
			//sku
			"CUS/CONTR/TOP/20210087"
		);
		$tokyo_ghoul['xbox-one-x-console'] = new product (
			//four images of size 589x591
			"../images/products/tokyo-ghoul/xbox-one-x-console/560X460/Front.jpg",
			"../images/products/tokyo-ghoul/xbox-one-x-console/560X460/Back.jpg",
			"../images/products/tokyo-ghoul/xbox-one-x-console/560X460/Side.jpg",
			"../images/products/tokyo-ghoul/xbox-one-x-console/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/tokyo-ghoul/xbox-one-x-console/187X140/Front.jpg",
			"../images/products/tokyo-ghoul/xbox-one-x-console/187X140/Back.jpg",
			"../images/products/tokyo-ghoul/xbox-one-x-console/187X140/Side.jpg",
			"../images/products/tokyo-ghoul/xbox-one-x-console/187X140/Zoom.jpg",
			//design name
			"tokyo ghoul" ,
			//design name html
			"tokyo<br>ghoul",
			//design image
			"../images/products/tokyo-ghoul/design.jpg",
			//product name
			"xbox one x console",
			//product Image
			"../images/products/tokyo-ghoul/xbox-one-x-console/console.png",
			//price dollars
			"20",
			//price cents
			"99",
			//short description
			"Tokyo Ghoul Inspired Design<br> by Tsujita Masujiro, Japan's Top Designers,<br> If you are into anime <br>you cannot be living without this design.<br> Tokyo Ghoul is one of <br>the most popuar anime in the world.",
			//long description
			"Tokyo Ghoul Inspired Design<br> by Tsujita Masujiro, Japan's Top Designers,<br> If you are into anime <br>you cannot be living without this design.<br> Tokyo Ghoul is one of <br>the most popuar anime in the world.",
			//author
			"William Blake",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One  console<br>-DIMENSIONS: 11.42 x 0.01 x 11.90",
			//url
			"single-product-page?designName=tokyo-ghoul&productName=xbox-one-x-console",
			//sku
			"CUS/CONTR/TOP/20210088"
		); 

		// bundle

		$tokyo_ghoul['xbox-one-bundle'] = new product (
			//four images of size 589x591
			"../images/products/tokyo-ghoul/xbox-one-bundle/560X460/Front.jpg",
			"../images/products/tokyo-ghoul/xbox-one-bundle/560X460/Back.jpg",
			"../images/products/tokyo-ghoul/xbox-one-bundle/560X460/Side.jpg",
			"../images/products/tokyo-ghoul/xbox-one-bundle/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/tokyo-ghoul/xbox-one-bundle/187X140/Front.jpg",
			"../images/products/tokyo-ghoul/xbox-one-bundle/187X140/Back.jpg",
			"../images/products/tokyo-ghoul/xbox-one-bundle/187X140/Side.jpg",
			"../images/products/tokyo-ghoul/xbox-one-bundle/187X140/Zoom.jpg",
			//design name
			"tokyo ghoul" ,
			//design name html
			"tokyo<br>ghoul",
			//design image
			"../images/products/tokyo-ghoul/design.jpg",
			//product name
			"xbox one bundle",
			//product Image
			"../images/products/tokyo-ghoul/xbox-one-bundle/bundle.png",
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
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One console & Controller <br>-DIMENSIONS: Console: 12.00 x 0.01 x 29.00<br>Controller: 6.00 x 4.00 x 1.70",
			//url
			"single-product-page?designName=tokyo-ghoul&productName=xbox-one-bundle",
			//sku
			"CUS/CONTR/TOP/20210089"
		); 

		$tokyo_ghoul['xbox-one-s-bundle'] = new product (
			//four images of size 589x591
			"../images/products/tokyo-ghoul/xbox-one-s-bundle/560X460/Front.jpg",
			"../images/products/tokyo-ghoul/xbox-one-s-bundle/560X460/Back.jpg",
			"../images/products/tokyo-ghoul/xbox-one-s-bundle/560X460/Side.jpg",
			"../images/products/tokyo-ghoul/xbox-one-s-bundle/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/tokyo-ghoul/xbox-one-s-bundle/187X140/Front.jpg",
			"../images/products/tokyo-ghoul/xbox-one-s-bundle/187X140/Back.jpg",
			"../images/products/tokyo-ghoul/xbox-one-s-bundle/187X140/Side.jpg",
			"../images/products/tokyo-ghoul/xbox-one-s-bundle/187X140/Zoom.jpg",
			//design name
			"tokyo ghoul" ,
			//design name html
			"tokyo<br>ghoul",
			//design image
			"../images/products/tokyo-ghoul/design.jpg",
			//product name
			"xbox one s bundle",
			//product Image
			"../images/products/tokyo-ghoul/xbox-one-s-bundle/bundle.png",
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
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One S console & Controller <br>-DIMENSIONS: Console: 12.00 x 0.01 x 29.00<br>Controller: 6.00 x 4.00 x 1.70",
			//url
			"single-product-page?designName=tokyo-ghoul&productName=xbox-one-s-bundle",
			//sku
			"CUS/CONTR/TOP/20210090"
		); 

		$tokyo_ghoul['xbox-one-x-bundle'] = new product (
			//four images of size 589x591
			"../images/products/tokyo-ghoul/xbox-one-x-bundle/560X460/Front.jpg",
			"../images/products/tokyo-ghoul/xbox-one-x-bundle/560X460/Back.jpg",
			"../images/products/tokyo-ghoul/xbox-one-x-bundle/560X460/Side.jpg",
			"../images/products/tokyo-ghoul/xbox-one-x-bundle/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/tokyo-ghoul/xbox-one-x-bundle/187X140/Front.jpg",
			"../images/products/tokyo-ghoul/xbox-one-x-bundle/187X140/Back.jpg",
			"../images/products/tokyo-ghoul/xbox-one-x-bundle/187X140/Side.jpg",
			"../images/products/tokyo-ghoul/xbox-one-x-bundle/187X140/Zoom.jpg",
			//design name
			"tokyo ghoul" ,
			//design name html
			"tokyo<br>ghoul",
			//design image
			"../images/products/tokyo-ghoul/design.jpg",
			//product name
			"xbox one x bundle",
			//product Image
			"../images/products/tokyo-ghoul/xbox-one-x-bundle/bundle.png",
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
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One X console & Controller <br>-DIMENSIONS: Console: 12.00 x 0.01 x 29.00<br>Controller: 6.00 x 4.00 x 1.70",
			//url
			"single-product-page?designName=tokyo-ghoul&productName=xbox-one-x-bundle",
			//sku
			"CUS/CONTR/TOP/20210091"
		);

		// controller
		$world_war['xbox-one-controller'] = new product (
		//four images of size 589x591
			"../images/products/world-war/xbox-one-controller/560X460/Front.jpg",
			"../images/products/world-war/xbox-one-controller/560X460/Back.jpg",
			"../images/products/world-war/xbox-one-controller/560X460/Side.jpg",
			"../images/products/world-war/xbox-one-controller/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/world-war/xbox-one-controller/187X140/Front.jpg",
			"../images/products/world-war/xbox-one-controller/187X140/Back.jpg",
			"../images/products/world-war/xbox-one-controller/187X140/Side.jpg",
			"../images/products/world-war/xbox-one-controller/187X140/Zoom.jpg",
			//design name
			"world war" ,
			//design name html
			"world<br>war",
			//design image
			"../images/products/world-war/design.jpg",
			//product name
			"xbox one controller",
			//product Image
			"../images/products/world-war/xbox-one-controller/controller.png",
			//price dollars
			"15",
			//price cents
			"99",
			//short description
			"World War inspired design from<br> industry expert Edward Niro,<br> Identify yourself as the best in<br> Mordern / Medieval Warfare Simulations like<br> Call of Duty, Battlefield, Age of Empires etc. ",
			//long description
			"World War inspired design from<br> industry expert Edward Niro,<br> Identify yourself as the best in<br> Mordern / Medieval Warfare Simulations like<br> Call of Duty, Battlefield, Age of Empires etc. ",
			//author
			"Edward Niro",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One Controller<br>-DIMENSIONS: 6.00 x 4.00 x 1.70",
			//url
			"single-product-page?designName=world-war&productName=xbox-one-controller",
			//sku
			"CUS/CONTR/TOP/20210101"
		);
		$world_war['xbox-one-s-controller'] = new product (
			//four images of size 589x591
			"../images/products/world-war/xbox-one-s-controller/560X460/Front.jpg",
			"../images/products/world-war/xbox-one-s-controller/560X460/Back.jpg",
			"../images/products/world-war/xbox-one-s-controller/560X460/Side.jpg",
			"../images/products/world-war/xbox-one-s-controller/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/world-war/xbox-one-s-controller/187X140/Front.jpg",
			"../images/products/world-war/xbox-one-s-controller/187X140/Back.jpg",
			"../images/products/world-war/xbox-one-s-controller/187X140/Side.jpg",
			"../images/products/world-war/xbox-one-s-controller/187X140/Zoom.jpg",
			//design name
			"world war" ,
			//design name html
			"world<br>war",
			//design image
			"../images/products/world-war/design.jpg",
			//product name
			"xbox one s controller",
			//product Image
			"../images/products/world-war/xbox-one-s-controller/controller.png",
			//price dollars
			"15",
			//price cents
			"99",
			//short description
			"World War inspired design from<br> industry expert Edward Niro,<br> Identify yourself as the best in<br> Mordern / Medieval Warfare Simulations like<br> Call of Duty, Battlefield, Age of Empires etc. ",
			//long description
			"World War inspired design from<br> industry expert Edward Niro,<br> Identify yourself as the best in<br> Mordern / Medieval Warfare Simulations like<br> Call of Duty, Battlefield, Age of Empires etc. ",
			//author
			"Edward Niro",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One S Controller<br>-DIMENSIONS: 6.00 x 4.00 x 1.70",
			//url
			"single-product-page?designName=world-war&productName=xbox-one-s-controller",
			//sku
			"CUS/CONTR/TOP/20210102"
		);
		$world_war['xbox-one-x-controller'] = new product (
			//four images of size 589x591
			"../images/products/world-war/xbox-one-x-controller/560X460/Front.jpg",
			"../images/products/world-war/xbox-one-x-controller/560X460/Back.jpg",
			"../images/products/world-war/xbox-one-x-controller/560X460/Side.jpg",
			"../images/products/world-war/xbox-one-x-controller/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/world-war/xbox-one-x-controller/187X140/Front.jpg",
			"../images/products/world-war/xbox-one-x-controller/187X140/Back.jpg",
			"../images/products/world-war/xbox-one-x-controller/187X140/Side.jpg",
			"../images/products/world-war/xbox-one-x-controller/187X140/Zoom.jpg",
			//design name
			"world war" ,
			//design name html
			"world<br>war",
			//design image
			"../images/products/world-war/design.jpg",
			//product name
			"xbox one x controller",
			//product Image
			"../images/products/world-war/xbox-one-x-controller/controller.png",
			//price dollars
			"15",
			//price cents
			"99",
			//short description
			"World War inspired design from<br> industry expert Edward Niro,<br> Identify yourself as the best in<br> Mordern / Medieval Warfare Simulations like<br> Call of Duty, Battlefield, Age of Empires etc. ",
			//long description
			"World War inspired design from<br> industry expert Edward Niro,<br> Identify yourself as the best in<br> Mordern / Medieval Warfare Simulations like<br> Call of Duty, Battlefield, Age of Empires etc. ",
			//author
			"Edward Niro",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One X Controller<br>-DIMENSIONS: 6.00 x 4.00 x 1.70",
			//url
			"single-product-page?designName=world-war&productName=xbox-one-x-controller",
			//sku
			"CUS/CONTR/TOP/20210103"
		); 
		$world_war['xbox-one-elite-controller'] = new product (
			//four images of size 589x591
			"../images/products/world-war/xbox-one-elite-controller/560X460/Front.jpg",
			"../images/products/world-war/xbox-one-elite-controller/560X460/Back.jpg",
			"../images/products/world-war/xbox-one-elite-controller/560X460/Side.jpg",
			"../images/products/world-war/xbox-one-elite-controller/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/world-war/xbox-one-elite-controller/187X140/Front.jpg",
			"../images/products/world-war/xbox-one-elite-controller/187X140/Back.jpg",
			"../images/products/world-war/xbox-one-elite-controller/187X140/Side.jpg",
			"../images/products/world-war/xbox-one-elite-controller/187X140/Zoom.jpg",
			//design name
			"world war" ,
			//design name html
			"world<br>war",
			//design image
			"../images/products/world-war/design.jpg",
			//product name
			"xbox one elite controller",
			//product Image
			"../images/products/world-war/xbox-one-elite-controller/controller.png",
			//price dollars
			"15",
			//price cents
			"99",
			//short description
			"World War inspired design from<br> industry expert Edward Niro,<br> Identify yourself as the best in<br> Mordern / Medieval Warfare Simulations like<br> Call of Duty, Battlefield, Age of Empires etc. ",
			//long description
			"World War inspired design from<br> industry expert Edward Niro,<br> Identify yourself as the best in<br> Mordern / Medieval Warfare Simulations like<br> Call of Duty, Battlefield, Age of Empires etc. ",
			//author
			"Edward Niro",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One Elite Controller<br>-DIMENSIONS: 6.00 x 4.00 x 1.70",
			//url
			"single-product-page?designName=world-war&productName=xbox-one-elite-controller",
			//sku
			"CUS/CONTR/TOP/20210104"
		);
		$world_war['xbox-one-elite-wireless-controller'] = new product (
			//four images of size 589x591
			"../images/products/world-war/xbox-one-elite-wireless-controller/560X460/Front.jpg",
			"../images/products/world-war/xbox-one-elite-wireless-controller/560X460/Back.jpg",
			"../images/products/world-war/xbox-one-elite-wireless-controller/560X460/Side.jpg",
			"../images/products/world-war/xbox-one-elite-wireless-controller/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/world-war/xbox-one-elite-wireless-controller/187X140/Front.jpg",
			"../images/products/world-war/xbox-one-elite-wireless-controller/187X140/Back.jpg",
			"../images/products/world-war/xbox-one-elite-wireless-controller/187X140/Side.jpg",
			"../images/products/world-war/xbox-one-elite-wireless-controller/187X140/Zoom.jpg",
			//design name
			"world war" ,
			//design name html
			"world<br>war",
			//design image
			"../images/products/world-war/design.jpg",
			//product name
			"xbox one elite wireless controller",
			//product Image
			"../images/products/world-war/xbox-one-elite-wireless-controller/controller.png",
			//price dollars
			"15",
			//price cents
			"99",
			//short description
			"World War inspired design from<br> industry expert Edward Niro,<br> Identify yourself as the best in<br> Mordern / Medieval Warfare Simulations like<br> Call of Duty, Battlefield, Age of Empires etc. ",
			//long description
			"World War inspired design from<br> industry expert Edward Niro,<br> Identify yourself as the best in<br> Mordern / Medieval Warfare Simulations like<br> Call of Duty, Battlefield, Age of Empires etc. ",
			//author
			"Edward Niro",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One Elite Wireless Controller<br>-DIMENSIONS: 6.00 x 4.00 x 1.70",
			//url
			"single-product-page?designName=world-war&productName=xbox-one-elite-wireless-controller",
			//sku
			"CUS/CONTR/TOP/20210105"
		);
		
		$world_war['xbox-one-console'] = new product (
		//four images of size 589x591
			"../images/products/world-war/xbox-one-console/560X460/Front.jpg",
			"../images/products/world-war/xbox-one-console/560X460/Back.jpg",
			"../images/products/world-war/xbox-one-console/560X460/Side.jpg",
			"../images/products/world-war/xbox-one-console/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/world-war/xbox-one-console/187X140/Front.jpg",
			"../images/products/world-war/xbox-one-console/187X140/Back.jpg",
			"../images/products/world-war/xbox-one-console/187X140/Side.jpg",
			"../images/products/world-war/xbox-one-console/187X140/Zoom.jpg",
			//design name
			"world war" ,
			//design name html
			"world<br>war",
			//design image
			"../images/products/world-war/design.jpg",
			//product name
			"xbox one console",
			//product Image
			"../images/products/world-war/xbox-one-console/console.png",
			//price dollars
			"20",
			//price cents
			"99",
			//short description
			"World War inspired design from<br> industry expert Edward Niro,<br> Identify yourself as the best in<br> Mordern / Medieval Warfare Simulations like<br> Call of Duty, Battlefield, Age of Empires etc. ",
			//long description
			"World War inspired design from<br> industry expert Edward Niro,<br> Identify yourself as the best in<br> Mordern / Medieval Warfare Simulations like<br> Call of Duty, Battlefield, Age of Empires etc. ",
			//author
			"Edward Niro",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One console<br>-DIMENSIONS: 12.00 x 0.01 x 29.00",
			//url
			"single-product-page?designName=world-war&productName=xbox-one-console",
			//sku
			"CUS/CONTR/TOP/20210106"
		);
		$world_war['xbox-one-s-console'] = new product (
			//four images of size 589x591
			"../images/products/world-war/xbox-one-s-console/560X460/Front.jpg",
			"../images/products/world-war/xbox-one-s-console/560X460/Back.jpg",
			"../images/products/world-war/xbox-one-s-console/560X460/Side.jpg",
			"../images/products/world-war/xbox-one-s-console/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/world-war/xbox-one-s-console/187X140/Front.jpg",
			"../images/products/world-war/xbox-one-s-console/187X140/Back.jpg",
			"../images/products/world-war/xbox-one-s-console/187X140/Side.jpg",
			"../images/products/world-war/xbox-one-s-console/187X140/Zoom.jpg",
			//design name
			"world war" ,
			//design name html
			"world<br>war",
			//design image
			"../images/products/world-war/design.jpg",
			//product name
			"xbox one s console",
			//product Image
			"../images/products/world-war/xbox-one-s-console/console.png",
			//price dollars
			"20",
			//price cents
			"99",
			//short description
			"World War inspired design from<br> industry expert Edward Niro,<br> Identify yourself as the best in<br> Mordern / Medieval Warfare Simulations like<br> Call of Duty, Battlefield, Age of Empires etc. ",
			//long description
			"World War inspired design from<br> industry expert Edward Niro,<br> Identify yourself as the best in<br> Mordern / Medieval Warfare Simulations like<br> Call of Duty, Battlefield, Age of Empires etc. ",
			//author
			"Edward Niro",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One S console<br>-DIMENSIONS: 12.00 x 0.01 x 29.00",
			//url
			"single-product-page?designName=world-war&productName=xbox-one-s-console",
			//sku
			"CUS/CONTR/TOP/20210107"
		);
		$world_war['xbox-one-x-console'] = new product (
			//four images of size 589x591
			"../images/products/world-war/xbox-one-x-console/560X460/Front.jpg",
			"../images/products/world-war/xbox-one-x-console/560X460/Back.jpg",
			"../images/products/world-war/xbox-one-x-console/560X460/Side.jpg",
			"../images/products/world-war/xbox-one-x-console/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/world-war/xbox-one-x-console/187X140/Front.jpg",
			"../images/products/world-war/xbox-one-x-console/187X140/Back.jpg",
			"../images/products/world-war/xbox-one-x-console/187X140/Side.jpg",
			"../images/products/world-war/xbox-one-x-console/187X140/Zoom.jpg",
			//design name
			"world war" ,
			//design name html
			"world<br>war",
			//design image
			"../images/products/world-war/design.jpg",
			//product name
			"xbox one x console",
			//product Image
			"../images/products/world-war/xbox-one-x-console/console.png",
			//price dollars
			"20",
			//price cents
			"99",
			//short description
			"World War inspired design from<br> industry expert Edward Niro,<br> Identify yourself as the best in<br> Mordern / Medieval Warfare Simulations like<br> Call of Duty, Battlefield, Age of Empires etc. ",
			//long description
			"World War inspired design from<br> industry expert Edward Niro,<br> Identify yourself as the best in<br> Mordern / Medieval Warfare Simulations like<br> Call of Duty, Battlefield, Age of Empires etc. ",
			//author
			"Edward Niro",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One X console<br>-DIMENSIONS: 11.42 x 0.01 x 11.90",
			//url
			"single-product-page?designName=world-war&productName=xbox-one-x-console",
			//sku
			"CUS/CONTR/TOP/20210108"
		); 

		// bundle

		$world_war['xbox-one-bundle'] = new product (
			//four images of size 589x591
			"../images/products/world-war/xbox-one-bundle/560X460/Front.jpg",
			"../images/products/world-war/xbox-one-bundle/560X460/Back.jpg",
			"../images/products/world-war/xbox-one-bundle/560X460/Side.jpg",
			"../images/products/world-war/xbox-one-bundle/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/world-war/xbox-one-bundle/187X140/Front.jpg",
			"../images/products/world-war/xbox-one-bundle/187X140/Back.jpg",
			"../images/products/world-war/xbox-one-bundle/187X140/Side.jpg",
			"../images/products/world-war/xbox-one-bundle/187X140/Zoom.jpg",
			//design name
			"world war" ,
			//design name html
			"world<br>war",
			//design image
			"../images/products/world-war/design.jpg",
			//product name
			"xbox one bundle",
			//product Image
			"../images/products/world-war/xbox-one-bundle/bundle.png",
			//price dollars
			"23",
			//price cents
			"99",
			//short description
			"World War inspired design from<br> industry expert Edward Niro,<br> Identify yourself as the best in<br> Mordern / Medieval Warfare Simulations like<br> Call of Duty, Battlefield, Age of Empires etc. ",
			//long description
			"World War inspired design from<br> industry expert Edward Niro,<br> Identify yourself as the best in<br> Mordern / Medieval Warfare Simulations like<br> Call of Duty, Battlefield, Age of Empires etc. ",
			//author
			"Edward Niro",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One console & Controller <br>-DIMENSIONS: Console: 12.00 x 0.01 x 29.00<br>Controller: 6.00 x 4.00 x 1.70",
			//url
			"single-product-page?designName=world-war&productName=xbox-one-bundle",
			//sku
			"CUS/CONTR/TOP/20210109"
		); 

		$world_war['xbox-one-s-bundle'] = new product (
			//four images of size 589x591
			"../images/products/world-war/xbox-one-s-bundle/560X460/Front.jpg",
			"../images/products/world-war/xbox-one-s-bundle/560X460/Back.jpg",
			"../images/products/world-war/xbox-one-s-bundle/560X460/Side.jpg",
			"../images/products/world-war/xbox-one-s-bundle/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/world-war/xbox-one-s-bundle/187X140/Front.jpg",
			"../images/products/world-war/xbox-one-s-bundle/187X140/Back.jpg",
			"../images/products/world-war/xbox-one-s-bundle/187X140/Side.jpg",
			"../images/products/world-war/xbox-one-s-bundle/187X140/Zoom.jpg",
			//design name
			"world war" ,
			//design name html
			"world<br>war",
			//design image
			"../images/products/world-war/design.jpg",
			//product name
			"xbox one s bundle",
			//product Image
			"../images/products/world-war/xbox-one-s-bundle/bundle.png",
			//price dollars
			"23",
			//price cents
			"99",
			//short description
			"World War inspired design from<br> industry expert Edward Niro,<br> Identify yourself as the best in<br> Mordern / Medieval Warfare Simulations like<br> Call of Duty, Battlefield, Age of Empires etc. ",
			//long description
			"World War inspired design from<br> industry expert Edward Niro,<br> Identify yourself as the best in<br> Mordern / Medieval Warfare Simulations like<br> Call of Duty, Battlefield, Age of Empires etc. ",
			//author
			"Edward Niro",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One S console & Controller <br>-DIMENSIONS: Console: 12.00 x 0.01 x 29.00<br>Controller: 6.00 x 4.00 x 1.70",
			//url
			"single-product-page?designName=world-war&productName=xbox-one-s-bundle",
			//sku
			"CUS/CONTR/TOP/20210110"
		); 

		$world_war['xbox-one-x-bundle'] = new product (
			//four images of size 589x591
			"../images/products/world-war/xbox-one-x-bundle/560X460/Front.jpg",
			"../images/products/world-war/xbox-one-x-bundle/560X460/Back.jpg",
			"../images/products/world-war/xbox-one-x-bundle/560X460/Side.jpg",
			"../images/products/world-war/xbox-one-x-bundle/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/world-war/xbox-one-x-bundle/187X140/Front.jpg",
			"../images/products/world-war/xbox-one-x-bundle/187X140/Back.jpg",
			"../images/products/world-war/xbox-one-x-bundle/187X140/Side.jpg",
			"../images/products/world-war/xbox-one-x-bundle/187X140/Zoom.jpg",
			//design name
			"world war" ,
			//design name html
			"world<br>war",
			//design image
			"../images/products/world-war/design.jpg",
			//product name
			"xbox one x bundle",
			//product Image
			"../images/products/world-war/xbox-one-x-bundle/bundle.png",
			//price dollars
			"23",
			//price cents
			"99",
			//short description
			"World War inspired design from<br> industry expert Edward Niro,<br> Identify yourself as the best in<br> Mordern / Medieval Warfare Simulations like<br> Call of Duty, Battlefield, Age of Empires etc. ",
			//long description
			"World War inspired design from<br> industry expert Edward Niro,<br> Identify yourself as the best in<br> Mordern / Medieval Warfare Simulations like<br> Call of Duty, Battlefield, Age of Empires etc. ",
			//author
			"Edward Niro",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One X console & Controller <br>-DIMENSIONS: Console: 12.00 x 0.01 x 29.00<br>Controller: 6.00 x 4.00 x 1.70",
			//url
			"single-product-page?designName=world-war&productName=xbox-one-x-bundle",
			//sku
			"CUS/CONTR/TOP/20210111"
		);

		if($_POST['get_data'] == 'selectedProduct'){
			if (isset($_POST['designName']) && isset($_POST['productName'])){
				if($_POST['designName'] == 'black-wall'){
					if($_POST['productName'] == 'xbox-one-controller'){
						$data['status'] = 'ok';
						$data['result'] = $black_wall['xbox-one-controller'];
						$data['product1'] = $black_wall['xbox-one-console'];
						$data['product2'] = $black_wall['xbox-one-bundle'];
						$data['product3'] = $doodle_Lines['xbox-one-controller'];
						$data['product4'] = $funky_ghost['xbox-one-controller'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-s-controller'){
						$data['status'] = 'ok';
						$data['result'] = $black_wall['xbox-one-s-controller'];
						$data['product1'] = $black_wall['xbox-one-s-console'];
						$data['product2'] = $black_wall['xbox-one-s-bundle'];
						$data['product3'] = $doodle_Lines['xbox-one-s-controller'];
						$data['product4'] = $funky_ghost['xbox-one-s-controller'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-x-controller'){
						$data['status'] = 'ok';
						$data['result'] = $black_wall['xbox-one-x-controller'];
						$data['product1'] = $black_wall['xbox-one-x-console'];
						$data['product2'] = $black_wall['xbox-one-x-bundle'];
						$data['product3'] = $doodle_Lines['xbox-one-x-controller'];
						$data['product4'] = $funky_ghost['xbox-one-x-controller'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-elite-controller'){
						$data['status'] = 'ok';
						$data['result'] = $black_wall['xbox-one-elite-controller'];
						$data['product1'] = $black_wall['xbox-one-x-bundle'];
						$data['product2'] = $black_wall['xbox-one-x-console'];
						$data['product3'] = $doodle_Lines['xbox-one-elite-controller'];
						$data['product4'] = $funky_skulls['xbox-one-elite-controller'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-elite-wireless-controller'){
						$data['status'] = 'ok';
						$data['result'] = $black_wall['xbox-one-elite-wireless-controller'];
						$data['product1'] = $black_wall['xbox-one-x-bundle'];
						$data['product2'] = $black_wall['xbox-one-x-console'];
						$data['product3'] = $doodle_Lines['xbox-one-elite-wireless-controller'];
						$data['product4'] = $funky_skulls['xbox-one-elite-wireless-controller'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-console'){
						$data['status'] = 'ok';
						$data['result'] = $black_wall['xbox-one-console'];
						$data['product1'] = $black_wall['xbox-one-controller'];
						$data['product2'] = $black_wall['xbox-one-bundle'];
						$data['product3'] = $doodle_Lines['xbox-one-console'];
						$data['product4'] = $funky_ghost['xbox-one-console'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-s-console'){
						$data['status'] = 'ok';
						$data['result'] = $black_wall['xbox-one-s-console'];
						$data['product1'] = $black_wall['xbox-one-s-controller'];
						$data['product2'] = $black_wall['xbox-one-s-bundle'];
						$data['product3'] = $doodle_Lines['xbox-one-s-console'];
						$data['product4'] = $funky_ghost['xbox-one-s-console'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-x-console'){
						$data['status'] = 'ok';
						$data['result'] = $black_wall['xbox-one-x-console'];
						$data['product1'] = $black_wall['xbox-one-x-controller'];
						$data['product2'] = $black_wall['xbox-one-x-bundle'];
						$data['product3'] = $doodle_Lines['xbox-one-x-console'];
						$data['product4'] = $funky_ghost['xbox-one-x-console'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-bundle'){
						$data['status'] = 'ok';
						$data['result'] = $black_wall['xbox-one-bundle'];
						$data['product1'] = $black_wall['xbox-one-controller'];
						$data['product2'] = $black_wall['xbox-one-console'];
						$data['product3'] = $doodle_Lines['xbox-one-bundle'];
						$data['product4'] = $funky_ghost['xbox-one-bundle'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-s-bundle'){
						$data['status'] = 'ok';
						$data['result'] = $black_wall['xbox-one-s-bundle'];
						$data['product1'] = $black_wall['xbox-one-s-controller'];
						$data['product2'] = $black_wall['xbox-one-s-console'];
						$data['product3'] = $doodle_Lines['xbox-one-s-bundle'];
						$data['product4'] = $funky_ghost['xbox-one-s-bundle'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-x-bundle'){
						$data['status'] = 'ok';
						$data['result'] = $black_wall['xbox-one-x-bundle'];
						$data['product1'] = $black_wall['xbox-one-x-controller'];
						$data['product2'] = $black_wall['xbox-one-x-console'];
						$data['product3'] = $doodle_Lines['xbox-one-x-bundle'];
						$data['product4'] = $funky_ghost['xbox-one-x-bundle'];
						//returns data as JSON format
						echo json_encode($data);
					}else{
						echo 'error with product name';
					}
				}else if($_POST['designName'] == 'blue-kaleidoscope'){
					if($_POST['productName'] == 'xbox-one-controller'){
						$data['status'] = 'ok';
						$data['result'] = $blue_kaleidoscope['xbox-one-controller'];
						$data['product1'] = $blue_kaleidoscope['xbox-one-console'];
						$data['product2'] = $blue_kaleidoscope['xbox-one-bundle'];
						$data['product3'] = $naruto_shippuden['xbox-one-controller'];
						$data['product4'] = $tokyo_ghoul['xbox-one-controller'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-s-controller'){
						$data['status'] = 'ok';
						$data['result'] = $blue_kaleidoscope['xbox-one-s-controller'];
						$data['product1'] = $blue_kaleidoscope['xbox-one-s-console'];
						$data['product2'] = $blue_kaleidoscope['xbox-one-s-bundle'];
						$data['product3'] = $naruto_shippuden['xbox-one-s-controller'];
						$data['product4'] = $tokyo_ghoul['xbox-one-s-controller'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-x-controller'){
						$data['status'] = 'ok';
						$data['result'] = $blue_kaleidoscope['xbox-one-x-controller'];
						$data['product1'] = $blue_kaleidoscope['xbox-one-x-console'];
						$data['product2'] = $blue_kaleidoscope['xbox-one-x-bundle'];
						$data['product3'] = $naruto_shippuden['xbox-one-x-controller'];
						$data['product4'] = $tokyo_ghoul['xbox-one-x-controller'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-elite-controller'){
						$data['status'] = 'ok';
						$data['result'] = $blue_kaleidoscope['xbox-one-elite-controller'];
						$data['product1'] = $blue_kaleidoscope['xbox-one-x-console'];
						$data['product2'] = $blue_kaleidoscope['xbox-one-x-bundle'];
						$data['product3'] = $naruto_shippuden['xbox-one-elite-controller'];
						$data['product4'] = $tokyo_ghoul['xbox-one-elite-controller'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-elite-wireless-controller'){
						$data['status'] = 'ok';
						$data['result'] = $blue_kaleidoscope['xbox-one-elite-wireless-controller'];
						$data['product1'] = $blue_kaleidoscope['xbox-one-x-console'];
						$data['product2'] = $blue_kaleidoscope['xbox-one-x-bundle'];
						$data['product3'] = $naruto_shippuden['xbox-one-elite-wireless-controller'];
						$data['product4'] = $tokyo_ghoul['xbox-one-elite-wireless-controller'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-console'){
						$data['status'] = 'ok';
						$data['result'] = $blue_kaleidoscope['xbox-one-console'];
						$data['product1'] = $blue_kaleidoscope['xbox-one-controller'];
						$data['product2'] = $blue_kaleidoscope['xbox-one-bundle'];
						$data['product3'] = $naruto_and_sasuke['xbox-one-console'];
						$data['product4'] = $tokyo_ghoul['xbox-one-console'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-s-console'){
						$data['status'] = 'ok';
						$data['result'] = $blue_kaleidoscope['xbox-one-s-console'];
						$data['product1'] = $blue_kaleidoscope['xbox-one-s-controller'];
						$data['product2'] = $blue_kaleidoscope['xbox-one-s-bundle'];
						$data['product3'] = $naruto_and_sasuke['xbox-one-s-console'];
						$data['product4'] = $tokyo_ghoul['xbox-one-s-console'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-x-console'){
						$data['status'] = 'ok';
						$data['result'] = $blue_kaleidoscope['xbox-one-x-console'];
						$data['product1'] = $blue_kaleidoscope['xbox-one-x-controller'];
						$data['product2'] = $blue_kaleidoscope['xbox-one-x-bundle'];
						$data['product3'] = $naruto_and_sasuke['xbox-one-x-console'];
						$data['product4'] = $tokyo_ghoul['xbox-one-x-console'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-bundle'){
						$data['status'] = 'ok';
						$data['result'] = $blue_kaleidoscope['xbox-one-bundle'];
						$data['product1'] = $blue_kaleidoscope['xbox-one-controller'];
						$data['product2'] = $blue_kaleidoscope['xbox-one-console'];
						$data['product3'] = $naruto_and_sasuke['xbox-one-bundle'];
						$data['product4'] = $game_freak['xbox-one-bundle'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-s-bundle'){
						$data['status'] = 'ok';
						$data['result'] = $blue_kaleidoscope['xbox-one-s-bundle'];
						$data['product1'] = $blue_kaleidoscope['xbox-one-x-controller'];
						$data['product2'] = $blue_kaleidoscope['xbox-one-s-controller'];
						$data['product3'] = $naruto_and_sasuke['xbox-one-s-bundle'];
						$data['product4'] = $game_freak['xbox-one-s-bundle'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-x-bundle'){
						$data['status'] = 'ok';
						$data['result'] = $blue_kaleidoscope['xbox-one-x-bundle'];
						$data['product1'] = $blue_kaleidoscope['xbox-one-x-controller'];
						$data['product2'] = $blue_kaleidoscope['xbox-one-s-controller'];
						$data['product3'] = $naruto_and_sasuke['xbox-one-x-bundle'];
						$data['product4'] = $game_freak['xbox-one-x-bundle'];
						//returns data as JSON format
						echo json_encode($data);
					}else{
						echo 'error with product name';
					}
				}else if($_POST['designName'] == 'call-of-duty'){
					if($_POST['productName'] == 'xbox-one-controller'){
						$data['status'] = 'ok';
						$data['result'] = $call_of_duty['xbox-one-controller'];
						$data['product1'] = $call_of_duty['xbox-one-console'];
						$data['product2'] = $call_of_duty['xbox-one-bundle'];
						$data['product3'] = $iron_man['xbox-one-controller'];
						$data['product4'] = $dragon_ball_z['xbox-one-controller'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-s-controller'){
						$data['status'] = 'ok';
						$data['result'] = $call_of_duty['xbox-one-s-controller'];
						$data['product1'] = $call_of_duty['xbox-one-s-console'];
						$data['product2'] = $call_of_duty['xbox-one-s-bundle'];
						$data['product3'] = $iron_man['xbox-one-s-controller'];
						$data['product4'] = $dragon_ball_z['xbox-one-s-controller'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-x-controller'){
						$data['status'] = 'ok';
						$data['result'] = $call_of_duty['xbox-one-x-controller'];
						$data['product1'] = $call_of_duty['xbox-one-x-console'];
						$data['product2'] = $call_of_duty['xbox-one-x-bundle'];
						$data['product3'] = $iron_man['xbox-one-x-controller'];
						$data['product4'] = $dragon_ball_z['xbox-one-x-controller'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-elite-controller'){
						$data['status'] = 'ok';
						$data['result'] = $call_of_duty['xbox-one-elite-controller'];
						$data['product1'] = $call_of_duty['xbox-one-x-console'];
						$data['product2'] = $call_of_duty['xbox-one-x-bundle'];
						$data['product3'] = $iron_man['xbox-one-elite-controller'];
						$data['product4'] = $dragon_ball_z['xbox-one-elite-controller'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-elite-wireless-controller'){
						$data['status'] = 'ok';
						$data['result'] = $call_of_duty['xbox-one-elite-wireless-controller'];
						$data['product1'] = $call_of_duty['xbox-one-x-console'];
						$data['product2'] = $call_of_duty['xbox-one-x-bundle'];
						$data['product3'] = $iron_man['xbox-one-elite-wireless-controller'];
						$data['product4'] = $dragon_ball_z['xbox-one-elite-wireless-controller'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-console'){
						$data['status'] = 'ok';
						$data['result'] = $call_of_duty['xbox-one-console'];
						$data['product1'] = $call_of_duty['xbox-one-controller'];
						$data['product2'] = $call_of_duty['xbox-one-bundle'];
						$data['product3'] = $iron_man['xbox-one-console'];
						$data['product4'] = $dragon_ball_z['xbox-one-console'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-s-console'){
						$data['status'] = 'ok';
						$data['result'] = $call_of_duty['xbox-one-s-console'];
						$data['product1'] = $call_of_duty['xbox-one-s-controller'];
						$data['product2'] = $call_of_duty['xbox-one-s-bundle'];
						$data['product3'] = $iron_man['xbox-one-s-console'];
						$data['product4'] = $dragon_ball_z['xbox-one-s-console'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-x-console'){
						$data['status'] = 'ok';
						$data['result'] = $call_of_duty['xbox-one-x-console'];
						$data['product1'] = $call_of_duty['xbox-one-x-controller'];
						$data['product2'] = $call_of_duty['xbox-one-x-bundle'];
						$data['product3'] = $iron_man['xbox-one-x-console'];
						$data['product4'] = $dragon_ball_z['xbox-one-x-console'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-bundle'){
						$data['status'] = 'ok';
						$data['result'] = $call_of_duty['xbox-one-bundle'];
						$data['product1'] = $call_of_duty['xbox-one-controller'];
						$data['product2'] = $call_of_duty['xbox-one-console'];
						$data['product3'] = $iron_man['xbox-one-bundle'];
						$data['product4'] = $dragon_ball_z['xbox-one-bundle'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-s-bundle'){
						$data['status'] = 'ok';
						$data['result'] = $call_of_duty['xbox-one-s-bundle'];
						$data['product1'] = $call_of_duty['xbox-one-x-controller'];
						$data['product2'] = $call_of_duty['xbox-one-s-console'];
						$data['product3'] = $iron_man['xbox-one-s-bundle'];
						$data['product4'] = $dragon_ball_z['xbox-one-s-bundle'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-x-bundle'){
						$data['status'] = 'ok';
						$data['result'] = $call_of_duty['xbox-one-x-bundle'];
						$data['product1'] = $call_of_duty['xbox-one-x-controller'];
						$data['product2'] = $call_of_duty['xbox-one-x-console'];
						$data['product3'] = $iron_man['xbox-one-x-bundle'];
						$data['product4'] = $dragon_ball_z['xbox-one-x-bundle'];
						//returns data as JSON format
						echo json_encode($data);
					}else{
						echo 'error with product name';
					}
				}else if($_POST['designName'] == 'doodle-lines'){
					if($_POST['productName'] == 'xbox-one-controller'){
						$data['status'] = 'ok';
						$data['result'] = $doodle_Lines['xbox-one-controller'];
						$data['product1'] = $doodle_Lines['xbox-one-console'];
						$data['product2'] = $doodle_Lines['xbox-one-bundle'];
						$data['product3'] = $black_wall['xbox-one-controller'];
						$data['product4'] = $funky_ghost['xbox-one-controller'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-s-controller'){
						$data['status'] = 'ok';
						$data['result'] = $doodle_Lines['xbox-one-s-controller'];
						$data['product1'] = $doodle_Lines['xbox-one-s-console'];
						$data['product2'] = $doodle_Lines['xbox-one-s-bundle'];
						$data['product3'] = $black_wall['xbox-one-s-controller'];
						$data['product4'] = $funky_ghost['xbox-one-s-controller'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-x-controller'){
						$data['status'] = 'ok';
						$data['result'] = $doodle_Lines['xbox-one-x-controller'];
						$data['product1'] = $doodle_Lines['xbox-one-x-console'];
						$data['product2'] = $doodle_Lines['xbox-one-x-bundle'];
						$data['product3'] = $black_wall['xbox-one-x-controller'];
						$data['product4'] = $funky_ghost['xbox-one-x-controller'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-elite-controller'){
						$data['status'] = 'ok';
						$data['result'] = $doodle_Lines['xbox-one-elite-controller'];
						$data['product1'] = $doodle_Lines['xbox-one-x-console'];
						$data['product2'] = $doodle_Lines['xbox-one-x-bundle'];
						$data['product3'] = $black_wall['xbox-one-elite-controller'];
						$data['product4'] = $funky_ghost['xbox-one-elite-controller'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-elite-wireless-controller'){
						$data['status'] = 'ok';
						$data['result'] = $doodle_Lines['xbox-one-elite-wireless-controller'];
						$data['product1'] = $doodle_Lines['xbox-one-x-console'];
						$data['product2'] = $doodle_Lines['xbox-one-x-bundle'];
						$data['product3'] = $black_wall['xbox-one-elite-wireless-controller'];
						$data['product4'] = $funky_ghost['xbox-one-elite-wireless-controller'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-console'){
						$data['status'] = 'ok';
						$data['result'] = $doodle_Lines['xbox-one-console'];
						$data['product1'] = $doodle_Lines['xbox-one-controller'];
						$data['product2'] = $doodle_Lines['xbox-one-bundle'];
						$data['product3'] = $black_wall['xbox-one-console'];
						$data['product4'] = $funky_skulls['xbox-one-console'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-s-console'){
						$data['status'] = 'ok';
						$data['result'] = $doodle_Lines['xbox-one-s-console'];
						$data['product1'] = $doodle_Lines['xbox-one-s-controller'];
						$data['product2'] = $doodle_Lines['xbox-one-s-bundle'];
						$data['product3'] = $black_wall['xbox-one-s-console'];
						$data['product4'] = $funky_skulls['xbox-one-s-console'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-x-console'){
						$data['status'] = 'ok';
						$data['result'] = $doodle_Lines['xbox-one-x-console'];
						$data['product1'] = $doodle_Lines['xbox-one-x-controller'];
						$data['product2'] = $doodle_Lines['xbox-one-x-bundle'];
						$data['product3'] = $black_wall['xbox-one-x-console'];
						$data['product4'] = $funky_skulls['xbox-one-x-console'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-bundle'){
						$data['status'] = 'ok';
						$data['result'] = $doodle_Lines['xbox-one-bundle'];
						$data['product1'] = $doodle_Lines['xbox-one-controller'];
						$data['product2'] = $doodle_Lines['xbox-one-console'];
						$data['product3'] = $black_wall['xbox-one-bundle'];
						$data['product4'] = $funky_skulls['xbox-one-bundle'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-s-bundle'){
						$data['status'] = 'ok';
						$data['result'] = $doodle_Lines['xbox-one-s-bundle'];
						$data['product1'] = $doodle_Lines['xbox-one-x-controller'];
						$data['product2'] = $doodle_Lines['xbox-one-s-console'];
						$data['product3'] = $black_wall['xbox-one-s-bundle'];
						$data['product4'] = $funky_skulls['xbox-one-s-bundle'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-x-bundle'){
						$data['status'] = 'ok';
						$data['result'] = $doodle_Lines['xbox-one-x-bundle'];
						$data['product1'] = $doodle_Lines['xbox-one-x-controller'];
						$data['product2'] = $doodle_Lines['xbox-one-x-console'];
						$data['product3'] = $black_wall['xbox-one-x-bundle'];
						$data['product4'] = $funky_skulls['xbox-one-x-bundle'];
						//returns data as JSON format
						echo json_encode($data);
					}else{
						echo 'error with product name';
					}
				}else if($_POST['designName'] == 'dragon-ball-z'){
					if($_POST['productName'] == 'xbox-one-controller'){
						$data['status'] = 'ok';
						$data['result'] = $dragon_ball_z['xbox-one-controller'];
						$data['product1'] = $dragon_ball_z['xbox-one-console'];
						$data['product2'] = $dragon_ball_z['xbox-one-bundle'];
						$data['product3'] = $game_freak['xbox-one-controller'];
						$data['product4'] = $iron_man['xbox-one-controller'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-s-controller'){
						$data['status'] = 'ok';
						$data['result'] = $dragon_ball_z['xbox-one-s-controller'];
						$data['product1'] = $dragon_ball_z['xbox-one-s-console'];
						$data['product2'] = $dragon_ball_z['xbox-one-s-bundle'];
						$data['product3'] = $game_freak['xbox-one-s-controller'];
						$data['product4'] = $iron_man['xbox-one-s-controller'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-x-controller'){
						$data['status'] = 'ok';
						$data['result'] = $dragon_ball_z['xbox-one-x-controller'];
						$data['product1'] = $dragon_ball_z['xbox-one-x-console'];
						$data['product2'] = $dragon_ball_z['xbox-one-x-bundle'];
						$data['product3'] = $call_of_duty['xbox-one-x-controller'];
						$data['product4'] = $iron_man['xbox-one-x-controller'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-elite-controller'){
						$data['status'] = 'ok';
						$data['result'] = $dragon_ball_z['xbox-one-elite-controller'];
						$data['product1'] = $dragon_ball_z['xbox-one-x-console'];
						$data['product2'] = $dragon_ball_z['xbox-one-x-bundle'];
						$data['product3'] = $call_of_duty['xbox-one-elite-controller'];
						$data['product4'] = $iron_man['xbox-one-elite-controller'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-elite-wireless-controller'){
						$data['status'] = 'ok';
						$data['result'] = $dragon_ball_z['xbox-one-elite-wireless-controller'];
						$data['product1'] = $dragon_ball_z['xbox-one-x-console'];
						$data['product2'] = $dragon_ball_z['xbox-one-x-bundle'];
						$data['product3'] = $call_of_duty['xbox-one-elite-wireless-controller'];
						$data['product4'] = $iron_man['xbox-one-elite-wireless-controller'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-console'){
						$data['status'] = 'ok';
						$data['result'] = $dragon_ball_z['xbox-one-console'];
						$data['product1'] = $dragon_ball_z['xbox-one-controller'];
						$data['product2'] = $dragon_ball_z['xbox-one-bundle'];
						$data['product3'] = $call_of_duty['xbox-one-console'];
						$data['product4'] = $iron_man['xbox-one-console'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-s-console'){
						$data['status'] = 'ok';
						$data['result'] = $dragon_ball_z['xbox-one-s-console'];
						$data['product1'] = $dragon_ball_z['xbox-one-s-controller'];
						$data['product2'] = $dragon_ball_z['xbox-one-s-bundle'];
						$data['product3'] = $call_of_duty['xbox-one-s-console'];
						$data['product4'] = $iron_man['xbox-one-s-console'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-x-console'){
						$data['status'] = 'ok';
						$data['result'] = $dragon_ball_z['xbox-one-x-console'];
						$data['product1'] = $dragon_ball_z['xbox-one-s-controller'];
						$data['product2'] = $dragon_ball_z['xbox-one-s-bundle'];
						$data['product3'] = $call_of_duty['xbox-one-s-console'];
						$data['product4'] = $iron_man['xbox-one-s-console'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-bundle'){
						$data['status'] = 'ok';
						$data['result'] = $dragon_ball_z['xbox-one-bundle'];
						$data['product1'] = $dragon_ball_z['xbox-one-controller'];
						$data['product2'] = $dragon_ball_z['xbox-one-console'];
						$data['product3'] = $doodle_Lines['xbox-one-bundle'];
						$data['product4'] = $doodle_Lines['xbox-one-bundle'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-s-bundle'){
						$data['status'] = 'ok';
						$data['result'] = $dragon_ball_z['xbox-one-s-bundle'];
						$data['product1'] = $dragon_ball_z['xbox-one-x-controller'];
						$data['product2'] = $dragon_ball_z['xbox-one-s-console'];
						$data['product3'] = $doodle_Lines['xbox-one-s-bundle'];
						$data['product4'] = $doodle_Lines['xbox-one-s-bundle'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-x-bundle'){
						$data['status'] = 'ok';
						$data['result'] = $dragon_ball_z['xbox-one-x-bundle'];
						$data['product1'] = $dragon_ball_z['xbox-one-x-controller'];
						$data['product2'] = $dragon_ball_z['xbox-one-x-console'];
						$data['product3'] = $doodle_Lines['xbox-one-x-bundle'];
						$data['product4'] = $doodle_Lines['xbox-one-x-bundle'];
						//returns data as JSON format
						echo json_encode($data);
					}else{
						echo 'error with product name';
					}
				}else if($_POST['designName'] == 'funky-ghost'){
					if($_POST['productName'] == 'xbox-one-controller'){
						$data['status'] = 'ok';
						$data['result'] = $funky_ghost['xbox-one-controller'];
						$data['product1'] = $funky_ghost['xbox-one-console'];
						$data['product2'] = $funky_ghost['xbox-one-bundle'];
						$data['product3'] = $doodle_Lines['xbox-one-controller'];
						$data['product4'] = $black_wall['xbox-one-controller'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-s-controller'){
						$data['status'] = 'ok';
						$data['result'] = $funky_ghost['xbox-one-s-controller'];
						$data['product1'] = $funky_ghost['xbox-one-s-console'];
						$data['product2'] = $funky_ghost['xbox-one-s-bundle'];
						$data['product3'] = $doodle_Lines['xbox-one-s-controller'];
						$data['product4'] = $black_wall['xbox-one-s-controller'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-x-controller'){
						$data['status'] = 'ok';
						$data['result'] = $funky_ghost['xbox-one-x-controller'];
						$data['product1'] = $funky_ghost['xbox-one-x-console'];
						$data['product2'] = $funky_ghost['xbox-one-x-bundle'];
						$data['product3'] = $doodle_Lines['xbox-one-x-controller'];
						$data['product4'] = $black_wall['xbox-one-x-controller'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-elite-controller'){
						$data['status'] = 'ok';
						$data['result'] = $funky_ghost['xbox-one-elite-controller'];
						$data['product1'] = $funky_ghost['xbox-one-x-console'];
						$data['product2'] = $funky_ghost['xbox-one-x-bundle'];
						$data['product3'] = $doodle_Lines['xbox-one-elite-controller'];
						$data['product4'] = $black_wall['xbox-one-elite-controller'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-elite-wireless-controller'){
						$data['status'] = 'ok';
						$data['result'] = $funky_ghost['xbox-one-elite-wireless-controller'];
						$data['product1'] = $funky_ghost['xbox-one-x-console'];
						$data['product2'] = $funky_ghost['xbox-one-x-bundle'];
						$data['product3'] = $doodle_Lines['xbox-one-elite-wireless-controller'];
						$data['product4'] = $black_wall['xbox-one-elite-wireless-controller'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-console'){
						$data['status'] = 'ok';
						$data['result'] = $funky_ghost['xbox-one-console'];
						$data['product1'] = $funky_ghost['xbox-one-controller'];
						$data['product2'] = $funky_ghost['xbox-one-bundle'];
						$data['product3'] = $doodle_Lines['xbox-one-console'];
						$data['product4'] = $black_wall['xbox-one-console'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-s-console'){
						$data['status'] = 'ok';
						$data['result'] = $funky_ghost['xbox-one-s-console'];
						$data['product1'] = $funky_ghost['xbox-one-s-controller'];
						$data['product2'] = $funky_ghost['xbox-one-s-bundle'];
						$data['product3'] = $doodle_Lines['xbox-one-s-console'];
						$data['product4'] = $black_wall['xbox-one-s-console'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-x-console'){
						$data['status'] = 'ok';
						$data['result'] = $funky_ghost['xbox-one-x-console'];
						$data['product1'] = $funky_ghost['xbox-one-x-controller'];
						$data['product2'] = $funky_ghost['xbox-one-x-bundle'];
						$data['product3'] = $doodle_Lines['xbox-one-x-console'];
						$data['product4'] = $black_wall['xbox-one-x-console'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-bundle'){
						$data['status'] = 'ok';
						$data['result'] = $funky_ghost['xbox-one-bundle'];
						$data['product1'] = $funky_ghost['xbox-one-controller'];
						$data['product2'] = $funky_ghost['xbox-one-console'];
						$data['product3'] = $doodle_Lines['xbox-one-bundle'];
						$data['product4'] = $black_wall['xbox-one-bundle'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-s-bundle'){
						$data['status'] = 'ok';
						$data['result'] = $funky_ghost['xbox-one-s-bundle'];
						$data['product1'] = $funky_ghost['xbox-one-s-controller'];
						$data['product2'] = $funky_ghost['xbox-one-s-console'];
						$data['product3'] = $doodle_Lines['xbox-one-s-bundle'];
						$data['product4'] = $black_wall['xbox-one-s-bundle'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-x-bundle'){
						$data['status'] = 'ok';
						$data['result'] = $funky_ghost['xbox-one-x-bundle'];
						$data['product1'] = $funky_ghost['xbox-one-x-controller'];
						$data['product2'] = $funky_ghost['xbox-one-x-console'];
						$data['product3'] = $doodle_Lines['xbox-one-x-bundle'];
						$data['product4'] = $black_wall['xbox-one-x-bundle'];
						//returns data as JSON format
						echo json_encode($data);
					}else{
						echo 'error with product name';
					}
				}else if($_POST['designName'] == 'funky-skulls'){
					if($_POST['productName'] == 'xbox-one-controller'){
						$data['status'] = 'ok';
						$data['result'] = $funky_skulls['xbox-one-controller'];
						$data['product1'] = $funky_skulls['xbox-one-console'];
						$data['product2'] = $funky_skulls['xbox-one-bundle'];
						$data['product3'] = $skull_kaleidoscope['xbox-one-controller'];
						$data['product4'] = $gears_of_war['xbox-one-controller'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-s-controller'){
						$data['status'] = 'ok';
						$data['result'] = $funky_skulls['xbox-one-s-controller'];
						$data['product1'] = $funky_skulls['xbox-one-s-console'];
						$data['product2'] = $funky_skulls['xbox-one-s-bundle'];
						$data['product3'] = $skull_kaleidoscope['xbox-one-s-controller'];
						$data['product4'] = $gears_of_war['xbox-one-s-controller'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-x-controller'){
						$data['status'] = 'ok';
						$data['result'] = $funky_skulls['xbox-one-x-controller'];
						$data['product1'] = $funky_skulls['xbox-one-x-console'];
						$data['product2'] = $funky_skulls['xbox-one-x-bundle'];
						$data['product3'] = $skull_kaleidoscope['xbox-one-x-controller'];
						$data['product4'] = $gears_of_war['xbox-one-x-controller'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-elite-controller'){
						$data['status'] = 'ok';
						$data['result'] = $funky_skulls['xbox-one-elite-controller'];
						$data['product1'] = $funky_skulls['xbox-one-x-console'];
						$data['product2'] = $funky_skulls['xbox-one-x-bundle'];
						$data['product3'] = $skull_kaleidoscope['xbox-one-elite-controller'];
						$data['product4'] = $gears_of_war['xbox-one-elite-controller'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-elite-wireless-controller'){
						$data['status'] = 'ok';
						$data['result'] = $funky_skulls['xbox-one-elite-wireless-controller'];
						$data['product1'] = $funky_skulls['xbox-one-x-console'];
						$data['product2'] = $funky_skulls['xbox-one-x-bundle'];
						$data['product3'] = $skull_kaleidoscope['xbox-one-elite-wireless-controller'];
						$data['product4'] = $gears_of_war['xbox-one-elite-wireless-controller'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-console'){
						$data['status'] = 'ok';
						$data['result'] = $funky_skulls['xbox-one-console'];
						$data['product1'] = $funky_skulls['xbox-one-controller'];
						$data['product2'] = $funky_skulls['xbox-one-bundle'];
						$data['product3'] = $skull_kaleidoscope['xbox-one-console'];
						$data['product4'] = $gears_of_war['xbox-one-console'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-s-console'){
						$data['status'] = 'ok';
						$data['result'] = $funky_skulls['xbox-one-s-console'];
						$data['product1'] = $funky_skulls['xbox-one-s-controller'];
						$data['product2'] = $funky_skulls['xbox-one-s-bundle'];
						$data['product3'] = $skull_kaleidoscope['xbox-one-s-console'];
						$data['product4'] = $gears_of_war['xbox-one-s-console'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-x-console'){
						$data['status'] = 'ok';
						$data['result'] = $funky_skulls['xbox-one-x-console'];
						$data['product1'] = $funky_skulls['xbox-one-x-controller'];
						$data['product2'] = $funky_skulls['xbox-one-x-bundle'];
						$data['product3'] = $skull_kaleidoscope['xbox-one-x-console'];
						$data['product4'] = $gears_of_war['xbox-one-x-console'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-bundle'){
						$data['status'] = 'ok';
						$data['result'] = $funky_skulls['xbox-one-bundle'];
						$data['product1'] = $funky_skulls['xbox-one-controller'];
						$data['product2'] = $funky_skulls['xbox-one-console'];
						$data['product3'] = $skull_kaleidoscope['xbox-one-bundle'];
						$data['product4'] = $gears_of_war['xbox-one-bundle'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-s-bundle'){
						$data['status'] = 'ok';
						$data['result'] = $funky_skulls['xbox-one-s-bundle'];
						$data['product1'] = $funky_skulls['xbox-one-s-controller'];
						$data['product2'] = $funky_skulls['xbox-one-s-console'];
						$data['product3'] = $skull_kaleidoscope['xbox-one-s-bundle'];
						$data['product4'] = $gears_of_war['xbox-one-s-bundle'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-x-bundle'){
						$data['status'] = 'ok';
						$data['result'] = $funky_skulls['xbox-one-x-bundle'];
						$data['product1'] = $funky_skulls['xbox-one-x-controller'];
						$data['product2'] = $funky_skulls['xbox-one-x-console'];
						$data['product3'] = $skull_kaleidoscope['xbox-one-x-bundle'];
						$data['product4'] = $gears_of_war['xbox-one-x-bundle'];
						//returns data as JSON format
						echo json_encode($data);
					}else{
						echo 'error with product name';
					}
				}else if($_POST['designName'] == 'game-freak'){
					if($_POST['productName'] == 'xbox-one-controller'){
						$data['status'] = 'ok';
						$data['result'] = $game_freak['xbox-one-controller'];
						$data['product1'] = $game_freak['xbox-one-console'];
						$data['product2'] = $game_freak['xbox-one-bundle'];
						$data['product3'] = $patriot['xbox-one-controller'];
						$data['product4'] = $world_war['xbox-one-controller'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-s-controller'){
						$data['status'] = 'ok';
						$data['result'] = $game_freak['xbox-one-s-controller'];
						$data['product1'] = $game_freak['xbox-one-s-console'];
						$data['product2'] = $game_freak['xbox-one-s-bundle'];
						$data['product3'] = $patriot['xbox-one-s-controller'];
						$data['product4'] = $world_war['xbox-one-s-controller'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-x-controller'){
						$data['status'] = 'ok';
						$data['result'] = $game_freak['xbox-one-x-controller'];
						$data['product1'] = $game_freak['xbox-one-x-console'];
						$data['product2'] = $game_freak['xbox-one-x-bundle'];
						$data['product3'] = $patriot['xbox-one-x-controller'];
						$data['product4'] = $world_war['xbox-one-x-controller'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-elite-controller'){
						$data['status'] = 'ok';
						$data['result'] = $game_freak['xbox-one-elite-controller'];
						$data['product1'] = $game_freak['xbox-one-x-console'];
						$data['product2'] = $game_freak['xbox-one-x-bundle'];
						$data['product3'] = $patriot['xbox-one-elite-controller'];
						$data['product4'] = $world_war['xbox-one-elite-controller'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-elite-wireless-controller'){
						$data['status'] = 'ok';
						$data['result'] = $game_freak['xbox-one-elite-wireless-controller'];
						$data['product1'] = $game_freak['xbox-one-x-console'];
						$data['product2'] = $game_freak['xbox-one-x-bundle'];
						$data['product3'] = $patriot['xbox-one-elite-wireless-controller'];
						$data['product4'] = $world_war['xbox-one-elite-wireless-controller'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-console'){
						$data['status'] = 'ok';
						$data['result'] = $game_freak['xbox-one-console'];
						$data['product1'] = $game_freak['xbox-one-controller'];
						$data['product2'] = $game_freak['xbox-one-bundle'];
						$data['product3'] = $patriot['xbox-one-console'];
						$data['product4'] = $world_war['xbox-one-console'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-s-console'){
						$data['status'] = 'ok';
						$data['result'] = $game_freak['xbox-one-s-console'];
						$data['product1'] = $game_freak['xbox-one-s-controller'];
						$data['product2'] = $game_freak['xbox-one-s-bundle'];
						$data['product3'] = $patriot['xbox-one-s-console'];
						$data['product4'] = $world_war['xbox-one-s-console'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-x-console'){
						$data['status'] = 'ok';
						$data['result'] = $game_freak['xbox-one-x-console'];
						$data['product1'] = $game_freak['xbox-one-x-controller'];
						$data['product2'] = $game_freak['xbox-one-x-bundle'];
						$data['product3'] = $patriot['xbox-one-x-console'];
						$data['product4'] = $world_war['xbox-one-x-console'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-bundle'){
						$data['status'] = 'ok';
						$data['result'] = $game_freak['xbox-one-bundle'];
						$data['product1'] = $game_freak['xbox-one-controller'];
						$data['product2'] = $game_freak['xbox-one-console'];
						$data['product3'] = $patriot['xbox-one-bundle'];
						$data['product4'] = $naruto_and_sasuke['xbox-one-bundle'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-s-bundle'){
						$data['status'] = 'ok';
						$data['result'] = $game_freak['xbox-one-s-bundle'];
						$data['product1'] = $game_freak['xbox-one-s-controller'];
						$data['product2'] = $game_freak['xbox-one-s-console'];
						$data['product3'] = $patriot['xbox-one-s-bundle'];
						$data['product4'] = $naruto_and_sasuke['xbox-one-s-bundle'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-x-bundle'){
						$data['status'] = 'ok';
						$data['result'] = $game_freak['xbox-one-x-bundle'];
						$data['product1'] = $game_freak['xbox-one-x-controller'];
						$data['product2'] = $game_freak['xbox-one-x-console'];
						$data['product3'] = $patriot['xbox-one-x-bundle'];
						$data['product4'] = $naruto_and_sasuke['xbox-one-x-bundle'];
						//returns data as JSON format
						echo json_encode($data);
					}else{
						echo 'error with product name';
					}
				}else if($_POST['designName'] == 'gears-of-war'){
					if($_POST['productName'] == 'xbox-one-controller'){
						$data['status'] = 'ok';
						$data['result'] = $gears_of_war['xbox-one-controller'];
						$data['product1'] = $gears_of_war['xbox-one-console'];
						$data['product2'] = $gears_of_war['xbox-one-bundle'];
						$data['product3'] = $skull_kaleidoscope['xbox-one-controller'];
						$data['product4'] = $funky_skulls['xbox-one-controller'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-s-controller'){
						$data['status'] = 'ok';
						$data['result'] = $gears_of_war['xbox-one-s-controller'];
						$data['product1'] = $gears_of_war['xbox-one-s-console'];
						$data['product2'] = $gears_of_war['xbox-one-s-bundle'];
						$data['product3'] = $skull_kaleidoscope['xbox-one-s-controller'];
						$data['product4'] = $funky_skulls['xbox-one-s-controller'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-x-controller'){
						$data['status'] = 'ok';
						$data['result'] = $gears_of_war['xbox-one-x-controller'];
						$data['product1'] = $gears_of_war['xbox-one-x-console'];
						$data['product2'] = $gears_of_war['xbox-one-x-bundle'];
						$data['product3'] = $skull_kaleidoscope['xbox-one-x-controller'];
						$data['product4'] = $funky_skulls['xbox-one-x-controller'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-elite-controller'){
						$data['status'] = 'ok';
						$data['result'] = $gears_of_war['xbox-one-elite-controller'];
						$data['product1'] = $gears_of_war['xbox-one-x-console'];
						$data['product2'] = $gears_of_war['xbox-one-x-bundle'];
						$data['product3'] = $skull_kaleidoscope['xbox-one-elite-controller'];
						$data['product4'] = $funky_skulls['xbox-one-elite-controller'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-elite-wireless-controller'){
						$data['status'] = 'ok';
						$data['result'] = $gears_of_war['xbox-one-elite-wireless-controller'];
						$data['product1'] = $gears_of_war['xbox-one-x-console'];
						$data['product2'] = $gears_of_war['xbox-one-x-bundle'];
						$data['product3'] = $skull_kaleidoscope['xbox-one-elite-wireless-controller'];
						$data['product4'] = $funky_skulls['xbox-one-elite-wireless-controller'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-console'){
						$data['status'] = 'ok';
						$data['result'] = $gears_of_war['xbox-one-console'];
						$data['product1'] = $gears_of_war['xbox-one-controller'];
						$data['product2'] = $gears_of_war['xbox-one-bundle'];
						$data['product3'] = $skull_kaleidoscope['xbox-one-console'];
						$data['product4'] = $funky_skulls['xbox-one-console'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-s-console'){
						$data['status'] = 'ok';
						$data['result'] = $gears_of_war['xbox-one-s-console'];
						$data['product1'] = $gears_of_war['xbox-one-s-controller'];
						$data['product2'] = $gears_of_war['xbox-one-s-bundle'];
						$data['product3'] = $skull_kaleidoscope['xbox-one-s-console'];
						$data['product4'] = $funky_skulls['xbox-one-s-console'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-x-console'){
						$data['status'] = 'ok';
						$data['result'] = $gears_of_war['xbox-one-x-console'];
						$data['product1'] = $gears_of_war['xbox-one-x-controller'];
						$data['product2'] = $gears_of_war['xbox-one-x-bundle'];
						$data['product3'] = $skull_kaleidoscope['xbox-one-x-console'];
						$data['product4'] = $funky_skulls['xbox-one-x-console'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-bundle'){
						$data['status'] = 'ok';
						$data['result'] = $gears_of_war['xbox-one-bundle'];
						$data['product1'] = $gears_of_war['xbox-one-controller'];
						$data['product2'] = $gears_of_war['xbox-one-console'];
						$data['product3'] = $skull_kaleidoscope['xbox-one-bundle'];
						$data['product4'] = $funky_skulls['xbox-one-bundle'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-s-bundle'){
						$data['status'] = 'ok';
						$data['result'] = $gears_of_war['xbox-one-s-bundle'];
						$data['product1'] = $gears_of_war['xbox-one-s-controller'];
						$data['product2'] = $gears_of_war['xbox-one-s-console'];
						$data['product3'] = $skull_kaleidoscope['xbox-one-s-bundle'];
						$data['product4'] = $funky_skulls['xbox-one-s-bundle'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-x-bundle'){
						$data['status'] = 'ok';
						$data['result'] = $gears_of_war['xbox-one-x-bundle'];
						$data['product1'] = $gears_of_war['xbox-one-x-controller'];
						$data['product2'] = $gears_of_war['xbox-one-x-console'];
						$data['product3'] = $skull_kaleidoscope['xbox-one-x-bundle'];
						$data['product4'] = $funky_skulls['xbox-one-x-bundle'];
						//returns data as JSON format
						echo json_encode($data);
					}else{
						echo 'error with product name';
					}
				}else if($_POST['designName'] == 'iron-man'){
					if($_POST['productName'] == 'xbox-one-controller'){
						$data['status'] = 'ok';
						$data['result'] = $iron_man['xbox-one-controller'];
						$data['product1'] = $iron_man['xbox-one-console'];
						$data['product2'] = $iron_man['xbox-one-bundle'];
						$data['product3'] = $call_of_duty['xbox-one-controller'];
						$data['product4'] = $dragon_ball_z['xbox-one-controller'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-s-controller'){
						$data['status'] = 'ok';
						$data['result'] = $iron_man['xbox-one-s-controller'];
						$data['product1'] = $iron_man['xbox-one-s-console'];
						$data['product2'] = $iron_man['xbox-one-s-bundle'];
						$data['product3'] = $call_of_duty['xbox-one-s-controller'];
						$data['product4'] = $dragon_ball_z['xbox-one-s-controller'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-x-controller'){
						$data['status'] = 'ok';
						$data['result'] = $iron_man['xbox-one-x-controller'];
						$data['product1'] = $iron_man['xbox-one-x-console'];
						$data['product2'] = $iron_man['xbox-one-x-bundle'];
						$data['product3'] = $call_of_duty['xbox-one-x-controller'];
						$data['product4'] = $dragon_ball_z['xbox-one-x-controller'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-elite-controller'){
						$data['status'] = 'ok';
						$data['result'] = $iron_man['xbox-one-elite-controller'];
						$data['product1'] = $iron_man['xbox-one-x-console'];
						$data['product2'] = $iron_man['xbox-one-x-bundle'];
						$data['product3'] = $call_of_duty['xbox-one-elite-controller'];
						$data['product4'] = $dragon_ball_z['xbox-one-elite-controller'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-elite-wireless-controller'){
						$data['status'] = 'ok';
						$data['result'] = $iron_man['xbox-one-elite-wireless-controller'];
						$data['product1'] = $iron_man['xbox-one-x-console'];
						$data['product2'] = $iron_man['xbox-one-x-bundle'];
						$data['product3'] = $call_of_duty['xbox-one-elite-wireless-controller'];
						$data['product4'] = $dragon_ball_z['xbox-one-elite-wireless-controller'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-console'){
						$data['status'] = 'ok';
						$data['result'] = $iron_man['xbox-one-console'];
						$data['product1'] = $iron_man['xbox-one-controller'];
						$data['product2'] = $iron_man['xbox-one-bundle'];
						$data['product3'] = $call_of_duty['xbox-one-console'];
						$data['product4'] = $dragon_ball_z['xbox-one-console'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-s-console'){
						$data['status'] = 'ok';
						$data['result'] = $iron_man['xbox-one-s-console'];
						$data['product1'] = $iron_man['xbox-one-s-controller'];
						$data['product2'] = $iron_man['xbox-one-s-bundle'];
						$data['product3'] = $call_of_duty['xbox-one-s-console'];
						$data['product4'] = $dragon_ball_z['xbox-one-s-console'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-x-console'){
						$data['status'] = 'ok';
						$data['result'] = $iron_man['xbox-one-x-console'];
						$data['product1'] = $iron_man['xbox-one-x-controller'];
						$data['product2'] = $iron_man['xbox-one-x-bundle'];
						$data['product3'] = $call_of_duty['xbox-one-x-console'];
						$data['product4'] = $dragon_ball_z['xbox-one-x-console'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-bundle'){
						$data['status'] = 'ok';
						$data['result'] = $iron_man['xbox-one-bundle'];
						$data['product1'] = $iron_man['xbox-one-controller'];
						$data['product2'] = $iron_man['xbox-one-console'];
						$data['product3'] = $call_of_duty['xbox-one-bundle'];
						$data['product4'] = $dragon_ball_z['xbox-one-bundle'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-s-bundle'){
						$data['status'] = 'ok';
						$data['result'] = $iron_man['xbox-one-s-bundle'];
						$data['product1'] = $iron_man['xbox-one-s-controller'];
						$data['product2'] = $iron_man['xbox-one-s-console'];
						$data['product3'] = $call_of_duty['xbox-one-s-bundle'];
						$data['product4'] = $dragon_ball_z['xbox-one-s-bundle'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-x-bundle'){
						$data['status'] = 'ok';
						$data['result'] = $iron_man['xbox-one-x-bundle'];
						$data['product1'] = $iron_man['xbox-one-x-controller'];
						$data['product2'] = $iron_man['xbox-one-x-console'];
						$data['product3'] = $call_of_duty['xbox-one-x-bundle'];
						$data['product4'] = $dragon_ball_z['xbox-one-x-bundle'];
						//returns data as JSON format
						echo json_encode($data);
					}else{
						echo 'error with product name';
					}
				}else if($_POST['designName'] == 'naruto-and-sasuke'){
					if($_POST['productName'] == 'xbox-one-controller'){
						$data['status'] = 'ok';
						$data['result'] = $naruto_and_sasuke['xbox-one-controller'];
						$data['product1'] = $naruto_and_sasuke['xbox-one-console'];
						$data['product2'] = $naruto_and_sasuke['xbox-one-bundle'];
						$data['product3'] = $doodle_Lines['xbox-one-controller'];
						$data['product4'] = $game_freak['xbox-one-controller'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-s-controller'){
						$data['status'] = 'ok';
						$data['result'] = $naruto_and_sasuke['xbox-one-s-controller'];
						$data['product1'] = $naruto_and_sasuke['xbox-one-s-console'];
						$data['product2'] = $naruto_and_sasuke['xbox-one-s-bundle'];
						$data['product3'] = $doodle_Lines['xbox-one-s-controller'];
						$data['product4'] = $game_freak['xbox-one-s-controller'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-x-controller'){
						$data['status'] = 'ok';
						$data['result'] = $naruto_and_sasuke['xbox-one-x-controller'];
						$data['product1'] = $naruto_and_sasuke['xbox-one-x-console'];
						$data['product2'] = $naruto_and_sasuke['xbox-one-x-bundle'];
						$data['product3'] = $doodle_Lines['xbox-one-x-controller'];
						$data['product4'] = $game_freak['xbox-one-x-controller'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-elite-controller'){
						$data['status'] = 'ok';
						$data['result'] = $naruto_and_sasuke['xbox-one-elite-controller'];
						$data['product1'] = $naruto_and_sasuke['xbox-one-x-console'];
						$data['product2'] = $naruto_and_sasuke['xbox-one-x-bundle'];
						$data['product3'] = $doodle_Lines['xbox-one-elite-controller'];
						$data['product4'] = $game_freak['xbox-one-elite-controller'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-elite-wireless-controller'){
						$data['status'] = 'ok';
						$data['result'] = $naruto_and_sasuke['xbox-one-elite-wireless-controller'];
						$data['product1'] = $naruto_and_sasuke['xbox-one-x-console'];
						$data['product2'] = $naruto_and_sasuke['xbox-one-x-bundle'];
						$data['product3'] = $doodle_Lines['xbox-one-elite-wireless-controller'];
						$data['product4'] = $game_freak['xbox-one-elite-wireless-controller'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-console'){
						$data['status'] = 'ok';
						$data['result'] = $naruto_and_sasuke['xbox-one-console'];
						$data['product1'] = $naruto_and_sasuke['xbox-one-controller'];
						$data['product2'] = $naruto_and_sasuke['xbox-one-bundle'];
						$data['product3'] = $doodle_Lines['xbox-one-console'];
						$data['product4'] = $game_freak['xbox-one-console'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-s-console'){
						$data['status'] = 'ok';
						$data['result'] = $naruto_and_sasuke['xbox-one-s-console'];
						$data['product1'] = $naruto_and_sasuke['xbox-one-s-controller'];
						$data['product2'] = $naruto_and_sasuke['xbox-one-s-bundle'];
						$data['product3'] = $doodle_Lines['xbox-one-s-console'];
						$data['product4'] = $game_freak['xbox-one-s-console'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-x-console'){
						$data['status'] = 'ok';
						$data['result'] = $naruto_and_sasuke['xbox-one-x-console'];
						$data['product1'] = $naruto_and_sasuke['xbox-one-x-controller'];
						$data['product2'] = $naruto_and_sasuke['xbox-one-x-bundle'];
						$data['product3'] = $doodle_Lines['xbox-one-x-console'];
						$data['product4'] = $game_freak['xbox-one-x-console'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-bundle'){
						$data['status'] = 'ok';
						$data['result'] = $naruto_and_sasuke['xbox-one-bundle'];
						$data['product1'] = $naruto_and_sasuke['xbox-one-controller'];
						$data['product2'] = $naruto_and_sasuke['xbox-one-console'];
						$data['product3'] = $doodle_Lines['xbox-one-bundle'];
						$data['product4'] = $game_freak['xbox-one-bundle'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-s-bundle'){
						$data['status'] = 'ok';
						$data['result'] = $naruto_and_sasuke['xbox-one-s-bundle'];
						$data['product1'] = $naruto_and_sasuke['xbox-one-s-controller'];
						$data['product2'] = $naruto_and_sasuke['xbox-one-s-console'];
						$data['product3'] = $doodle_Lines['xbox-one-s-bundle'];
						$data['product4'] = $game_freak['xbox-one-s-bundle'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-x-bundle'){
						$data['status'] = 'ok';
						$data['result'] = $naruto_and_sasuke['xbox-one-x-bundle'];
						$data['product1'] = $naruto_and_sasuke['xbox-one-x-controller'];
						$data['product2'] = $naruto_and_sasuke['xbox-one-x-console'];
						$data['product3'] = $doodle_Lines['xbox-one-x-bundle'];
						$data['product4'] = $game_freak['xbox-one-x-bundle'];
						//returns data as JSON format
						echo json_encode($data);
					}else{
						echo 'error with product name';
					}
				}else if($_POST['designName'] == 'naruto-shippuden'){
					if($_POST['productName'] == 'xbox-one-controller'){
						$data['status'] = 'ok';
						$data['result'] = $naruto_shippuden['xbox-one-controller'];
						$data['product1'] = $naruto_shippuden['xbox-one-console'];
						$data['product2'] = $naruto_shippuden['xbox-one-bundle'];
						$data['product3'] = $blue_kaleidoscope['xbox-one-controller'];
						$data['product4'] = $tokyo_ghoul['xbox-one-controller'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-s-controller'){
						$data['status'] = 'ok';
						$data['result'] = $naruto_shippuden['xbox-one-s-controller'];
						$data['product1'] = $naruto_shippuden['xbox-one-s-console'];
						$data['product2'] = $naruto_shippuden['xbox-one-s-bundle'];
						$data['product3'] = $blue_kaleidoscope['xbox-one-s-controller'];
						$data['product4'] = $tokyo_ghoul['xbox-one-s-controller'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-x-controller'){
						$data['status'] = 'ok';
						$data['result'] = $naruto_shippuden['xbox-one-x-controller'];
						$data['product1'] = $naruto_shippuden['xbox-one-x-console'];
						$data['product2'] = $naruto_shippuden['xbox-one-x-bundle'];
						$data['product3'] = $blue_kaleidoscope['xbox-one-x-controller'];
						$data['product4'] = $tokyo_ghoul['xbox-one-x-controller'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-elite-controller'){
						$data['status'] = 'ok';
						$data['result'] = $naruto_shippuden['xbox-one-elite-controller'];
						$data['product1'] = $naruto_shippuden['xbox-one-x-console'];
						$data['product2'] = $naruto_shippuden['xbox-one-x-bundle'];
						$data['product3'] = $blue_kaleidoscope['xbox-one-elite-controller'];
						$data['product4'] = $tokyo_ghoul['xbox-one-elite-controller'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-elite-wireless-controller'){
						$data['status'] = 'ok';
						$data['result'] = $naruto_shippuden['xbox-one-elite-wireless-controller'];
						$data['product1'] = $naruto_shippuden['xbox-one-x-console'];
						$data['product2'] = $naruto_shippuden['xbox-one-x-bundle'];
						$data['product3'] = $blue_kaleidoscope['xbox-one-elite-wireless-controller'];
						$data['product4'] = $tokyo_ghoul['xbox-one-elite-wireless-controller'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-console'){
						$data['status'] = 'ok';
						$data['result'] = $naruto_shippuden['xbox-one-console'];
						$data['product1'] = $naruto_shippuden['xbox-one-controller'];
						$data['product2'] = $naruto_shippuden['xbox-one-bundle'];
						$data['product3'] = $blue_kaleidoscope['xbox-one-console'];
						$data['product4'] = $tokyo_ghoul['xbox-one-console'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-s-console'){
						$data['status'] = 'ok';
						$data['result'] = $naruto_shippuden['xbox-one-s-console'];
						$data['product1'] = $naruto_shippuden['xbox-one-s-controller'];
						$data['product2'] = $naruto_shippuden['xbox-one-s-bundle'];
						$data['product3'] = $blue_kaleidoscope['xbox-one-s-console'];
						$data['product4'] = $tokyo_ghoul['xbox-one-s-console'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-x-console'){
						$data['status'] = 'ok';
						$data['result'] = $naruto_shippuden['xbox-one-x-console'];
						$data['product1'] = $naruto_shippuden['xbox-one-x-controller'];
						$data['product2'] = $naruto_shippuden['xbox-one-x-bundle'];
						$data['product3'] = $blue_kaleidoscope['xbox-one-x-console'];
						$data['product4'] = $tokyo_ghoul['xbox-one-x-console'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-bundle'){
						$data['status'] = 'ok';
						$data['result'] = $naruto_shippuden['xbox-one-bundle'];
						$data['product1'] = $naruto_shippuden['xbox-one-controller'];
						$data['product2'] = $naruto_shippuden['xbox-one-console'];
						$data['product3'] = $blue_kaleidoscope['xbox-one-bundle'];
						$data['product4'] = $tokyo_ghoul['xbox-one-bundle'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-s-bundle'){
						$data['status'] = 'ok';
						$data['result'] = $naruto_shippuden['xbox-one-s-bundle'];
						$data['product1'] = $naruto_shippuden['xbox-one-s-controller'];
						$data['product2'] = $naruto_shippuden['xbox-one-s-console'];
						$data['product3'] = $blue_kaleidoscope['xbox-one-s-bundle'];
						$data['product4'] = $tokyo_ghoul['xbox-one-s-bundle'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-x-bundle'){
						$data['status'] = 'ok';
						$data['result'] = $naruto_shippuden['xbox-one-x-bundle'];
						$data['product1'] = $naruto_shippuden['xbox-one-x-controller'];
						$data['product2'] = $naruto_shippuden['xbox-one-x-console'];
						$data['product3'] = $blue_kaleidoscope['xbox-one-x-bundle'];
						$data['product4'] = $tokyo_ghoul['xbox-one-x-bundle'];
						//returns data as JSON format
						echo json_encode($data);
					}else{
						echo 'error with product name';
					}	
				}else if($_POST['designName'] == 'patriot'){
					if($_POST['productName'] == 'xbox-one-controller'){
						$data['status'] = 'ok';
						$data['result'] = $patriot['xbox-one-controller'];
						$data['product1'] = $patriot['xbox-one-console'];
						$data['product2'] = $patriot['xbox-one-bundle'];
						$data['product3'] = $game_freak['xbox-one-controller'];
						$data['product4'] = $world_war['xbox-one-controller'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-s-controller'){
						$data['status'] = 'ok';
						$data['result'] = $patriot['xbox-one-s-controller'];
						$data['product1'] = $patriot['xbox-one-s-console'];
						$data['product2'] = $patriot['xbox-one-s-bundle'];
						$data['product3'] = $game_freak['xbox-one-s-controller'];
						$data['product4'] = $world_war['xbox-one-s-controller'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-x-controller'){
						$data['status'] = 'ok';
						$data['result'] = $patriot['xbox-one-x-controller'];
						$data['product1'] = $patriot['xbox-one-x-console'];
						$data['product2'] = $patriot['xbox-one-x-bundle'];
						$data['product3'] = $game_freak['xbox-one-x-controller'];
						$data['product4'] = $world_war['xbox-one-x-controller'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-elite-controller'){
						$data['status'] = 'ok';
						$data['result'] = $patriot['xbox-one-elite-controller'];
						$data['product1'] = $patriot['xbox-one-x-console'];
						$data['product2'] = $patriot['xbox-one-x-bundle'];
						$data['product3'] = $game_freak['xbox-one-elite-controller'];
						$data['product4'] = $world_war['xbox-one-elite-controller'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-elite-wireless-controller'){
						$data['status'] = 'ok';
						$data['result'] = $patriot['xbox-one-elite-wireless-controller'];
						$data['product1'] = $patriot['xbox-one-x-console'];
						$data['product2'] = $patriot['xbox-one-x-bundle'];
						$data['product3'] = $game_freak['xbox-one-elite-wireless-controller'];
						$data['product4'] = $world_war['xbox-one-elite-wireless-controller'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-console'){
						$data['status'] = 'ok';
						$data['result'] = $patriot['xbox-one-console'];
						$data['product1'] = $patriot['xbox-one-controller'];
						$data['product2'] = $patriot['xbox-one-bundle'];
						$data['product3'] = $game_freak['xbox-one-console'];
						$data['product4'] = $world_war['xbox-one-console'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-s-console'){
						$data['status'] = 'ok';
						$data['result'] = $patriot['xbox-one-s-console'];
						$data['product1'] = $patriot['xbox-one-s-controller'];
						$data['product2'] = $patriot['xbox-one-s-bundle'];
						$data['product3'] = $game_freak['xbox-one-s-console'];
						$data['product4'] = $world_war['xbox-one-s-console'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-x-console'){
						$data['status'] = 'ok';
						$data['result'] = $patriot['xbox-one-x-console'];
						$data['product1'] = $patriot['xbox-one-x-controller'];
						$data['product2'] = $patriot['xbox-one-x-bundle'];
						$data['product3'] = $game_freak['xbox-one-x-console'];
						$data['product4'] = $world_war['xbox-one-x-console'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-bundle'){
						$data['status'] = 'ok';
						$data['result'] = $patriot['xbox-one-bundle'];
						$data['product1'] = $patriot['xbox-one-controller'];
						$data['product2'] = $patriot['xbox-one-console'];
						$data['product3'] = $game_freak['xbox-one-bundle'];
						$data['product4'] = $world_war['xbox-one-bundle'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-s-bundle'){
						$data['status'] = 'ok';
						$data['result'] = $patriot['xbox-one-s-bundle'];
						$data['product1'] = $patriot['xbox-one-s-controller'];
						$data['product2'] = $patriot['xbox-one-s-console'];
						$data['product3'] = $game_freak['xbox-one-s-bundle'];
						$data['product4'] = $world_war['xbox-one-s-bundle'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-x-bundle'){
						$data['status'] = 'ok';
						$data['result'] = $patriot['xbox-one-x-bundle'];
						$data['product1'] = $patriot['xbox-one-x-controller'];
						$data['product2'] = $patriot['xbox-one-x-console'];
						$data['product3'] = $game_freak['xbox-one-x-bundle'];
						$data['product4'] = $world_war['xbox-one-x-bundle'];
						//returns data as JSON format
						echo json_encode($data);
					}else{
						echo 'error with product name';
					}
				}else if($_POST['designName'] == 'skull-kaleidoscope'){
					if($_POST['productName'] == 'xbox-one-controller'){
						$data['status'] = 'ok';
						$data['result'] = $skull_kaleidoscope['xbox-one-controller'];
						$data['product1'] = $skull_kaleidoscope['xbox-one-console'];
						$data['product2'] = $skull_kaleidoscope['xbox-one-bundle'];
						$data['product3'] = $gears_of_war['xbox-one-controller'];
						$data['product4'] = $game_freak['xbox-one-controller'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-s-controller'){
						$data['status'] = 'ok';
						$data['result'] = $skull_kaleidoscope['xbox-one-s-controller'];
						$data['product1'] = $skull_kaleidoscope['xbox-one-s-console'];
						$data['product2'] = $skull_kaleidoscope['xbox-one-s-bundle'];
						$data['product3'] = $gears_of_war['xbox-one-s-controller'];
						$data['product4'] = $game_freak['xbox-one-s-controller'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-x-controller'){
						$data['status'] = 'ok';
						$data['result'] = $skull_kaleidoscope['xbox-one-x-controller'];
						$data['product1'] = $skull_kaleidoscope['xbox-one-x-console'];
						$data['product2'] = $skull_kaleidoscope['xbox-one-x-bundle'];
						$data['product3'] = $gears_of_war['xbox-one-x-controller'];
						$data['product4'] = $game_freak['xbox-one-x-controller'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-elite-controller'){
						$data['status'] = 'ok';
						$data['result'] = $skull_kaleidoscope['xbox-one-elite-controller'];
						$data['product1'] = $skull_kaleidoscope['xbox-one-x-console'];
						$data['product2'] = $skull_kaleidoscope['xbox-one-x-bundle'];
						$data['product3'] = $gears_of_war['xbox-one-elite-controller'];
						$data['product4'] = $game_freak['xbox-one-elite-controller'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-elite-wireless-controller'){
						$data['status'] = 'ok';
						$data['result'] = $skull_kaleidoscope['xbox-one-elite-wireless-controller'];
						$data['product1'] = $skull_kaleidoscope['xbox-one-x-console'];
						$data['product2'] = $skull_kaleidoscope['xbox-one-x-bundle'];
						$data['product3'] = $gears_of_war['xbox-one-elite-wireless-controller'];
						$data['product4'] = $game_freak['xbox-one-elite-wireless-controller'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-console'){
						$data['status'] = 'ok';
						$data['result'] = $skull_kaleidoscope['xbox-one-console'];
						$data['product1'] = $skull_kaleidoscope['xbox-one-controller'];
						$data['product2'] = $skull_kaleidoscope['xbox-one-bundle'];
						$data['product3'] = $gears_of_war['xbox-one-console'];
						$data['product4'] = $game_freak['xbox-one-console'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-s-console'){
						$data['status'] = 'ok';
						$data['result'] = $skull_kaleidoscope['xbox-one-s-console'];
						$data['product1'] = $skull_kaleidoscope['xbox-one-s-controller'];
						$data['product2'] = $skull_kaleidoscope['xbox-one-s-bundle'];
						$data['product3'] = $gears_of_war['xbox-one-s-console'];
						$data['product4'] = $game_freak['xbox-one-s-console'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-x-console'){
						$data['status'] = 'ok';
						$data['result'] = $skull_kaleidoscope['xbox-one-x-console'];
						$data['product1'] = $skull_kaleidoscope['xbox-one-x-controller'];
						$data['product2'] = $skull_kaleidoscope['xbox-one-x-bundle'];
						$data['product3'] = $gears_of_war['xbox-one-x-console'];
						$data['product4'] = $game_freak['xbox-one-x-console'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-bundle'){
						$data['status'] = 'ok';
						$data['result'] = $skull_kaleidoscope['xbox-one-bundle'];
						$data['product1'] = $skull_kaleidoscope['xbox-one-controller'];
						$data['product2'] = $skull_kaleidoscope['xbox-one-console'];
						$data['product3'] = $gears_of_war['xbox-one-bundle'];
						$data['product4'] = $game_freak['xbox-one-bundle'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-s-bundle'){
						$data['status'] = 'ok';
						$data['result'] = $skull_kaleidoscope['xbox-one-s-bundle'];
						$data['product1'] = $skull_kaleidoscope['xbox-one-s-controller'];
						$data['product2'] = $skull_kaleidoscope['xbox-one-s-console'];
						$data['product3'] = $gears_of_war['xbox-one-s-bundle'];
						$data['product4'] = $game_freak['xbox-one-s-bundle'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-x-bundle'){
						$data['status'] = 'ok';
						$data['result'] = $skull_kaleidoscope['xbox-one-x-bundle'];
						$data['product1'] = $skull_kaleidoscope['xbox-one-x-controller'];
						$data['product2'] = $skull_kaleidoscope['xbox-one-x-console'];
						$data['product3'] = $gears_of_war['xbox-one-x-bundle'];
						$data['product4'] = $game_freak['xbox-one-x-bundle'];
						//returns data as JSON format
						echo json_encode($data);
					}else{
						echo 'error with product name';
					}
				}else if($_POST['designName'] == 'tokyo-ghoul'){
					if($_POST['productName'] == 'xbox-one-controller'){
						$data['status'] = 'ok';
						$data['result'] = $tokyo_ghoul['xbox-one-controller'];
						$data['product1'] = $tokyo_ghoul['xbox-one-console'];
						$data['product2'] = $tokyo_ghoul['xbox-one-bundle'];
						$data['product3'] = $blue_kaleidoscope['xbox-one-controller'];
						$data['product4'] = $naruto_shippuden['xbox-one-controller'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-s-controller'){
						$data['status'] = 'ok';
						$data['result'] = $tokyo_ghoul['xbox-one-s-controller'];
						$data['product1'] = $tokyo_ghoul['xbox-one-s-console'];
						$data['product2'] = $tokyo_ghoul['xbox-one-s-bundle'];
						$data['product3'] = $blue_kaleidoscope['xbox-one-s-controller'];
						$data['product4'] = $naruto_shippuden['xbox-one-s-controller'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-x-controller'){
						$data['status'] = 'ok';
						$data['result'] = $tokyo_ghoul['xbox-one-x-controller'];
						$data['product1'] = $tokyo_ghoul['xbox-one-x-console'];
						$data['product2'] = $tokyo_ghoul['xbox-one-x-bundle'];
						$data['product3'] = $blue_kaleidoscope['xbox-one-x-controller'];
						$data['product4'] = $naruto_shippuden['xbox-one-x-controller'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-elite-controller'){
						$data['status'] = 'ok';
						$data['result'] = $tokyo_ghoul['xbox-one-elite-controller'];
						$data['product1'] = $tokyo_ghoul['xbox-one-x-console'];
						$data['product2'] = $tokyo_ghoul['xbox-one-x-bundle'];
						$data['product3'] = $blue_kaleidoscope['xbox-one-elite-controller'];
						$data['product4'] = $naruto_shippuden['xbox-one-elite-controller'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-elite-wireless-controller'){
						$data['status'] = 'ok';
						$data['result'] = $tokyo_ghoul['xbox-one-elite-wireless-controller'];
						$data['product1'] = $tokyo_ghoul['xbox-one-x-console'];
						$data['product2'] = $tokyo_ghoul['xbox-one-x-bundle'];
						$data['product3'] = $blue_kaleidoscope['xbox-one-elite-wireless-controller'];
						$data['product4'] = $naruto_shippuden['xbox-one-elite-wireless-controller'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-console'){
						$data['status'] = 'ok';
						$data['result'] = $tokyo_ghoul['xbox-one-console'];
						$data['product1'] = $tokyo_ghoul['xbox-one-controller'];
						$data['product2'] = $tokyo_ghoul['xbox-one-bundle'];
						$data['product3'] = $blue_kaleidoscope['xbox-one-console'];
						$data['product4'] = $naruto_shippuden['xbox-one-console'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-s-console'){
						$data['status'] = 'ok';
						$data['result'] = $tokyo_ghoul['xbox-one-s-console'];
						$data['product1'] = $tokyo_ghoul['xbox-one-s-controller'];
						$data['product2'] = $tokyo_ghoul['xbox-one-s-bundle'];
						$data['product3'] = $blue_kaleidoscope['xbox-one-s-console'];
						$data['product4'] = $naruto_and_sasuke['xbox-one-s-console'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-x-console'){
						$data['status'] = 'ok';
						$data['result'] = $tokyo_ghoul['xbox-one-x-console'];
						$data['product1'] = $tokyo_ghoul['xbox-one-x-controller'];
						$data['product2'] = $tokyo_ghoul['xbox-one-x-bundle'];
						$data['product3'] = $blue_kaleidoscope['xbox-one-x-console'];
						$data['product4'] = $naruto_and_sasuke['xbox-one-x-console'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-bundle'){
						$data['status'] = 'ok';
						$data['result'] = $tokyo_ghoul['xbox-one-bundle'];
						$data['product1'] = $tokyo_ghoul['xbox-one-controller'];
						$data['product2'] = $tokyo_ghoul['xbox-one-console'];
						$data['product3'] = $blue_kaleidoscope['xbox-one-bundle'];
						$data['product4'] = $naruto_and_sasuke['xbox-one-bundle'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-s-bundle'){
						$data['status'] = 'ok';
						$data['result'] = $tokyo_ghoul['xbox-one-s-bundle'];
						$data['product1'] = $tokyo_ghoul['xbox-one-s-controller'];
						$data['product2'] = $tokyo_ghoul['xbox-one-s-console'];
						$data['product3'] = $naruto_and_sasuke['xbox-one-s-bundle'];
						$data['product4'] = $naruto_and_sasuke['xbox-one-s-bundle'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-x-bundle'){
						$data['status'] = 'ok';
						$data['result'] = $tokyo_ghoul['xbox-one-x-bundle'];
						$data['product1'] = $tokyo_ghoul['xbox-one-x-controller'];
						$data['product2'] = $tokyo_ghoul['xbox-one-x-console'];
						$data['product3'] = $naruto_and_sasuke['xbox-one-x-bundle'];
						$data['product4'] = $naruto_shippuden['xbox-one-x-bundle'];
						//returns data as JSON format
						echo json_encode($data);
					}else{
						echo 'error with product name';
					}
				}else if($_POST['designName'] == 'world-war'){
					if($_POST['productName'] == 'xbox-one-controller'){
						$data['status'] = 'ok';
						$data['result'] = $world_war['xbox-one-controller'];
						$data['product1'] = $world_war['xbox-one-console'];
						$data['product2'] = $world_war['xbox-one-bundle'];
						$data['product3'] = $patriot['xbox-one-controller'];
						$data['product4'] = $game_freak['xbox-one-controller'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-s-controller'){
						$data['status'] = 'ok';
						$data['result'] = $world_war['xbox-one-s-controller'];
						$data['product1'] = $world_war['xbox-one-s-console'];
						$data['product2'] = $world_war['xbox-one-s-bundle'];
						$data['product3'] = $patriot['xbox-one-s-controller'];
						$data['product4'] = $game_freak['xbox-one-s-controller'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-x-controller'){
						$data['status'] = 'ok';
						$data['result'] = $world_war['xbox-one-x-controller'];
						$data['product1'] = $world_war['xbox-one-x-console'];
						$data['product2'] = $world_war['xbox-one-x-bundle'];
						$data['product3'] = $patriot['xbox-one-x-controller'];
						$data['product4'] = $game_freak['xbox-one-x-controller'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-elite-controller'){
						$data['status'] = 'ok';
						$data['result'] = $world_war['xbox-one-elite-controller'];
						$data['product1'] = $world_war['xbox-one-x-console'];
						$data['product2'] = $world_war['xbox-one-x-bundle'];
						$data['product3'] = $patriot['xbox-one-elite-controller'];
						$data['product4'] = $game_freak['xbox-one-elite-controller'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-elite-wireless-controller'){
						$data['status'] = 'ok';
						$data['result'] = $world_war['xbox-one-elite-wireless-controller'];
						$data['product1'] = $world_war['xbox-one-x-console'];
						$data['product2'] = $world_war['xbox-one-x-bundle'];
						$data['product3'] = $patriot['xbox-one-elite-wireless-controller'];
						$data['product4'] = $game_freak['xbox-one-elite-wireless-controller'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-console'){
						$data['status'] = 'ok';
						$data['result'] = $world_war['xbox-one-console'];
						$data['product1'] = $world_war['xbox-one-controller'];
						$data['product2'] = $world_war['xbox-one-bundle'];
						$data['product3'] = $patriot['xbox-one-console'];
						$data['product4'] = $game_freak['xbox-one-console'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-s-console'){
						$data['status'] = 'ok';
						$data['result'] = $world_war['xbox-one-s-console'];
						$data['product1'] = $world_war['xbox-one-s-controller'];
						$data['product2'] = $world_war['xbox-one-s-bundle'];
						$data['product3'] = $patriot['xbox-one-s-console'];
						$data['product4'] = $game_freak['xbox-one-s-console'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-x-console'){
						$data['status'] = 'ok';
						$data['result'] = $world_war['xbox-one-x-console'];
						$data['product1'] = $world_war['xbox-one-x-controller'];
						$data['product2'] = $world_war['xbox-one-x-bundle'];
						$data['product3'] = $patriot['xbox-one-x-console'];
						$data['product4'] = $game_freak['xbox-one-x-console'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-bundle'){
						$data['status'] = 'ok';
						$data['result'] = $world_war['xbox-one-bundle'];
						$data['product1'] = $world_war['xbox-one-controller'];
						$data['product2'] = $world_war['xbox-one-console'];
						$data['product3'] = $patriot['xbox-one-bundle'];
						$data['product4'] = $game_freak['xbox-one-bundle'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-s-bundle'){
						$data['status'] = 'ok';
						$data['result'] = $world_war['xbox-one-s-bundle'];
						$data['product1'] = $world_war['xbox-one-s-controller'];
						$data['product2'] = $world_war['xbox-one-s-console'];
						$data['product3'] = $patriot['xbox-one-s-bundle'];
						$data['product4'] = $game_freak['xbox-one-s-bundle'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-x-bundle'){
						$data['status'] = 'ok';
						$data['result'] = $world_war['xbox-one-x-bundle'];
						$data['product1'] = $world_war['xbox-one-x-controller'];
						$data['product2'] = $world_war['xbox-one-x-console'];
						$data['product3'] = $patriot['xbox-one-x-bundle'];
						$data['product4'] = $game_freak['xbox-one-x-bundle'];
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