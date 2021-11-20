<?php
if(!empty($_POST['get_data']))
	{
    	$data = array();
	
		class product {  
		
			public $productImageLoc1 = "../images/products/designed-by-you/xbox-one-controller/560X460/Front.jpg"; 
			public $productImageLoc2 = "../images/products/designed-by-you/xbox-one-controller/560X460/Back.jpg"; 
			public $productImageLoc3 = "../images/products/designed-by-you/xbox-one-controller/560X460/Side.jpg"; 
			public $productImageLoc4 = "../images/products/designed-by-you/xbox-one-controller/560X460/Zoom.jpg"; 
			public $productImageThumbLoc1 = "../images/products/designed-by-you/xbox-one-controller/187X140/Front.jpg"; 
			public $productImageThumbLoc2 = "../images/products/designed-by-you/xbox-one-controller/187X140/Back.jpg"; 
			public $productImageThumbLoc3 = "../images/products/designed-by-you/xbox-one-controller/187X140/Side.jpg"; 
			public $productImageThumbLoc4 = "../images/products/designed-by-you/xbox-one-controller/187X140/Zoom.jpg"; 
			public $designName = "designed by You";
			public $designNameHtml = "designed<br>by You";
			public $designImage = "../images/products/designed-by-you/design.jpg";
			public $productName = "xbox one controller";
			public $productImage = "../images/products/designed by You/010XBOX One.jpg";
			public $priceDollar = "28";	
			public $priceCents = "99";
			public $shortDescription ="Make the Witcher’s hunt even more<br>exciting with the limited edition<br>Geralt of Rivia Xbox One<br>Controller skin.";
			public $longDescription ="Make The Witcher’s Hunt Even More Exciting With The Limited Edition Geralt Of Rivia Xbox One, Xbox One S, Xbox One X Controller Skin. With Its Surreal Illustrations, This Xbox Skin Is Guaranteed To Further Improve Your Gaming Experience.<br><br>This Witcher 3 Xbox Skin Is A Perfect Fit For Your Controller That Won’t Ever Get In The Way Of Geralt’s Reunion With Ciri.";
			public $author = "You";
			public $specification ="-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One  Controller<br>-DIMENSIONS: 6.00 x 4.00 x 1.70";
			public $productUrl = "custom-product-page?designName=designed-by-you&productName=xbox-one-controller";

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

		$designed_by_You['xbox-one-controller'] = new product (
			//four images of size 589x591
			"../images/products/designed-by-you/xbox-one-controller/560X460/Front.jpg",
			"../images/products/designed-by-you/xbox-one-controller/560X460/Back.jpg",
			"../images/products/designed-by-you/xbox-one-controller/560X460/Side.jpg",
			"../images/products/designed-by-you/xbox-one-controller/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/designed-by-you/xbox-one-controller/187X140/Front.jpg",
			"../images/products/designed-by-you/xbox-one-controller/187X140/Back.jpg",
			"../images/products/designed-by-you/xbox-one-controller/187X140/Side.jpg",
			"../images/products/designed-by-you/xbox-one-controller/187X140/Zoom.jpg",
			//design name
			"designed by You" ,
			//design name html
			"designed<br>by You",
			//design image
			"../images/products/designed-by-you/design.jpg",
			//product name
			"xbox one controller",
			//product Image
			"../images/products/designed-by-you/xbox-one-controller/controller.png",
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
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One Controller<br>-DIMENSIONS: 6.00 x 4.00 x 1.70",
			//url
			"custom-product-page?designName=designed-by-you&productName=xbox-one-controller"
		);
		$designed_by_You['xbox-one-s-controller'] = new product (
			//four images of size 589x591
			"../images/products/designed-by-you/xbox-one-s-controller/560X460/Front.jpg",
			"../images/products/designed-by-you/xbox-one-s-controller/560X460/Back.jpg",
			"../images/products/designed-by-you/xbox-one-s-controller/560X460/Side.jpg",
			"../images/products/designed-by-you/xbox-one-s-controller/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/designed-by-you/xbox-one-s-controller/187X140/Front.jpg",
			"../images/products/designed-by-you/xbox-one-s-controller/187X140/Back.jpg",
			"../images/products/designed-by-you/xbox-one-s-controller/187X140/Side.jpg",
			"../images/products/designed-by-you/xbox-one-s-controller/187X140/Zoom.jpg",
			//design name
			"designed by You" ,
			//design name html
			"designed<br>by You",
			//design image
			"../images/products/designed-by-you/design.jpg",
			//product name
			"xbox one s controller",
			//product Image
			"../images/products/designed-by-you/xbox-one-s-controller/controller.png",
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
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One S Controller<br>-DIMENSIONS: 6.00 x 4.00 x 1.70",
			//url
			"custom-product-page?designName=designed-by-you&productName=xbox-one-s-controller"
		);
		$designed_by_You['xbox-one-x-controller'] = new product (
			//four images of size 589x591
			"../images/products/designed-by-you/xbox-one-x-controller/560X460/Front.jpg",
			"../images/products/designed-by-you/xbox-one-x-controller/560X460/Back.jpg",
			"../images/products/designed-by-you/xbox-one-x-controller/560X460/Side.jpg",
			"../images/products/designed-by-you/xbox-one-x-controller/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/designed-by-you/xbox-one-x-controller/187X140/Front.jpg",
			"../images/products/designed-by-you/xbox-one-x-controller/187X140/Back.jpg",
			"../images/products/designed-by-you/xbox-one-x-controller/187X140/Side.jpg",
			"../images/products/designed-by-you/xbox-one-x-controller/187X140/Zoom.jpg",
			//design name
			"designed by You" ,
			//design name html
			"designed<br>by You",
			//design image
			"../images/products/designed-by-you/design.jpg",
			//product name
			"xbox one x controller",
			//product Image
			"../images/products/designed-by-you/xbox-one-x-controller/controller.png",
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
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One X Controller<br>-DIMENSIONS: 6.00 x 4.00 x 1.70",
			//url
			"custom-product-page?designName=designed-by-you&productName=xbox-one-x-controller"
		);
		$designed_by_You['xbox-one-elite-controller'] = new product (
			//four images of size 589x591
			"../images/products/designed-by-you/xbox-one-elite-controller/560X460/Front.jpg",
			"../images/products/designed-by-you/xbox-one-elite-controller/560X460/Back.jpg",
			"../images/products/designed-by-you/xbox-one-elite-controller/560X460/Side.jpg",
			"../images/products/designed-by-you/xbox-one-elite-controller/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/designed-by-you/xbox-one-elite-controller/187X140/Front.jpg",
			"../images/products/designed-by-you/xbox-one-elite-controller/187X140/Back.jpg",
			"../images/products/designed-by-you/xbox-one-elite-controller/187X140/Side.jpg",
			"../images/products/designed-by-you/xbox-one-elite-controller/187X140/Zoom.jpg",
			//design name
			"designed by You" ,
			//design name html
			"designed<br>by You",
			//design image
			"../images/products/designed-by-you/design.jpg",
			//product name
			"xbox one elite controller",
			//product Image
			"../images/products/designed-by-you/xbox-one-elite-controller/controller.png",
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
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One Elite Controller<br>-DIMENSIONS: 6.00 x 4.00 x 1.70",
			//url
			"custom-product-page?designName=designed-by-you&productName=xbox-one-elite-controller"
		);
		$designed_by_You['xbox-one-elite-wireless-controller'] = new product (
			//four images of size 589x591
			"../images/products/designed-by-you/xbox-one-elite-wireless-controller/560X460/Front.jpg",
			"../images/products/designed-by-you/xbox-one-elite-wireless-controller/560X460/Back.jpg",
			"../images/products/designed-by-you/xbox-one-elite-wireless-controller/560X460/Side.jpg",
			"../images/products/designed-by-you/xbox-one-elite-wireless-controller/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/designed-by-you/xbox-one-elite-wireless-controller/187X140/Front.jpg",
			"../images/products/designed-by-you/xbox-one-elite-wireless-controller/187X140/Back.jpg",
			"../images/products/designed-by-you/xbox-one-elite-wireless-controller/187X140/Side.jpg",
			"../images/products/designed-by-you/xbox-one-elite-wireless-controller/187X140/Zoom.jpg",
			//design name
			"designed by You" ,
			//design name html
			"designed<br>by You",
			//design image
			"../images/products/designed-by-you/design.jpg",
			//product name
			"xbox one elite wireless controller",
			//product Image
			"../images/products/designed-by-you/xbox-one-elite-wireless-controller/controller.png",
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
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One Elite Wireless Controller<br>-DIMENSIONS: 6.00 x 4.00 x 1.70",
			//url
			"custom-product-page?designName=designed-by-you&productName=xbox-one-elite-wireless-controller"
		);
		$designed_by_You['xbox-one-console'] = new product (
			//four images of size 589x591
			"../images/products/designed-by-you/xbox-one-console/560X460/Front.jpg",
			"../images/products/designed-by-you/xbox-one-console/560X460/Back.jpg",
			"../images/products/designed-by-you/xbox-one-console/560X460/Side.jpg",
			"../images/products/designed-by-you/xbox-one-console/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/designed-by-you/xbox-one-console/187X140/Front.jpg",
			"../images/products/designed-by-you/xbox-one-console/187X140/Back.jpg",
			"../images/products/designed-by-you/xbox-one-console/187X140/Side.jpg",
			"../images/products/designed-by-you/xbox-one-console/187X140/Zoom.jpg",
			//design name
			"designed by You" ,
			//design name html
			"designed<br>by You",
			//design image
			"../images/products/designed-by-you/design.jpg",
			//product name
			"xbox one console",
			//product Image
			"../images/products/designed-by-you/xbox-one-console/console.png",
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
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One  console<br>-DIMENSIONS: 12.00 x 0.01 x 29.00",
			//url
			"custom-product-page?designName=designed-by-you&productName=xbox-one-console"
		);
		$designed_by_You['xbox-one-s-console'] = new product (
			//four images of size 589x591
			"../images/products/designed-by-you/xbox-one-s-console/560X460/Front.jpg",
			"../images/products/designed-by-you/xbox-one-s-console/560X460/Back.jpg",
			"../images/products/designed-by-you/xbox-one-s-console/560X460/Side.jpg",
			"../images/products/designed-by-you/xbox-one-s-console/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/designed-by-you/xbox-one-s-console/187X140/Front.jpg",
			"../images/products/designed-by-you/xbox-one-s-console/187X140/Back.jpg",
			"../images/products/designed-by-you/xbox-one-s-console/187X140/Side.jpg",
			"../images/products/designed-by-you/xbox-one-s-console/187X140/Zoom.jpg",
			//design name
			"designed by You" ,
			//design name html
			"designed<br>by You",
			//design image
			"../images/products/designed-by-you/design.jpg",
			//product name
			"xbox one s console",
			//product Image
			"../images/products/designed-by-you/xbox-one-s-console/console.png",
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
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One S console<br>-DIMENSIONS: 12.00 x 0.01 x 29.00",
			//url
			"custom-product-page?designName=designed-by-you&productName=xbox-one-s-console"
		);
		$designed_by_You['xbox-one-x-console'] = new product (
			//four images of size 589x591
			"../images/products/designed-by-you/xbox-one-x-console/560X460/Front.jpg",
			"../images/products/designed-by-you/xbox-one-x-console/560X460/Back.jpg",
			"../images/products/designed-by-you/xbox-one-x-console/560X460/Side.jpg",
			"../images/products/designed-by-you/xbox-one-x-console/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/designed-by-you/xbox-one-x-console/187X140/Front.jpg",
			"../images/products/designed-by-you/xbox-one-x-console/187X140/Back.jpg",
			"../images/products/designed-by-you/xbox-one-x-console/187X140/Side.jpg",
			"../images/products/designed-by-you/xbox-one-x-console/187X140/Zoom.jpg",
			//design name
			"designed by You" ,
			//design name html
			"designed<br>by You",
			//design image
			"../images/products/designed-by-you/design.jpg",
			//product name
			"xbox one x console",
			//product Image
			"../images/products/designed-by-you/xbox-one-x-console/console.png",
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
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One x console<br>-DIMENSIONS: 12.00 x 0.01 x 29.00",
			//url
			"custom-product-page?designName=designed-by-you&productName=xbox-one-x-console"
		);
		$designed_by_You['xbox-one-bundle'] = new product (
			//four images of size 589x591
			"../images/products/designed-by-you/xbox-one-bundle/560X460/Front.jpg",
			"../images/products/designed-by-you/xbox-one-bundle/560X460/Back.jpg",
			"../images/products/designed-by-you/xbox-one-bundle/560X460/Side.jpg",
			"../images/products/designed-by-you/xbox-one-bundle/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/designed-by-you/xbox-one-bundle/187X140/Front.jpg",
			"../images/products/designed-by-you/xbox-one-bundle/187X140/Back.jpg",
			"../images/products/designed-by-you/xbox-one-bundle/187X140/Side.jpg",
			"../images/products/designed-by-you/xbox-one-bundle/187X140/Zoom.jpg",
			//design name
			"designed by You" ,
			//design name html
			"designed<br>by You",
			//design image
			"../images/products/designed-by-you/design.jpg",
			//product name
			"xbox one bundle",
			//product Image
			"../images/products/designed-by-you/xbox-one-bundle/bundle.png",
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
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One  bundle <br>-DIMENSIONS: Console: 12.00 x 0.01 x 29.00<br>Controller: 6.00 x 4.00 x 1.70",
			//url
			"custom-product-page?designName=designed-by-you&productName=xbox-one-bundle"
		);
		$designed_by_You['xbox-one-s-bundle'] = new product (
			//four images of size 589x591
			"../images/products/designed-by-you/xbox-one-s-bundle/560X460/Front.jpg",
			"../images/products/designed-by-you/xbox-one-s-bundle/560X460/Back.jpg",
			"../images/products/designed-by-you/xbox-one-s-bundle/560X460/Side.jpg",
			"../images/products/designed-by-you/xbox-one-s-bundle/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/designed-by-you/xbox-one-s-bundle/187X140/Front.jpg",
			"../images/products/designed-by-you/xbox-one-s-bundle/187X140/Back.jpg",
			"../images/products/designed-by-you/xbox-one-s-bundle/187X140/Side.jpg",
			"../images/products/designed-by-you/xbox-one-s-bundle/187X140/Zoom.jpg",
			//design name
			"designed by You" ,
			//design name html
			"designed<br>by You",
			//design image
			"../images/products/designed-by-you/design.jpg",
			//product name
			"xbox one s bundle",
			//product Image
			"../images/products/designed-by-you/xbox-one-s-bundle/bundle.png",
			//price dollars
			"51",
			//price cents
			"99",
			//short description
			"Creating your Own Identity has never<br>been easier,Chose your product upload<br>your designand we print it and send you<br>the photo,Pay Only when you get <br>the design that is right for you",
			//long description
			"Creating your Own Identity has never<br>been easier,Chose your product upload<br>your designand we print it and send you<br>the photo,Pay Only when you get <br>the design that is right for you",
			//author
			"You",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One S bundle <br>-DIMENSIONS: Console: 12.00 x 0.01 x 29.00<br>Controller: 6.00 x 4.00 x 1.70",
			//url
			"custom-product-page?designName=designed-by-you&productName=xbox-one-s-bundle"
		);
		$designed_by_You['xbox-one-x-bundle'] = new product (
			//four images of size 589x591
			"../images/products/designed-by-you/xbox-one-x-bundle/560X460/Front.jpg",
			"../images/products/designed-by-you/xbox-one-x-bundle/560X460/Back.jpg",
			"../images/products/designed-by-you/xbox-one-x-bundle/560X460/Side.jpg",
			"../images/products/designed-by-you/xbox-one-x-bundle/560X460/Zoom.jpg",
			//four thumbnails of size
			"../images/products/designed-by-you/xbox-one-x-bundle/187X140/Front.jpg",
			"../images/products/designed-by-you/xbox-one-x-bundle/187X140/Back.jpg",
			"../images/products/designed-by-you/xbox-one-x-bundle/187X140/Side.jpg",
			"../images/products/designed-by-you/xbox-one-x-bundle/187X140/Zoom.jpg",
			//design name
			"designed by You" ,
			//design name html
			"designed<br>by You",
			//design image
			"../images/products/designed-by-you/design.jpg",
			//product name
			"xbox one x bundle",
			//product Image
			"../images/products/designed-by-you/xbox-one-x-bundle/bundle.png",
			//price dollars
			"51",
			//price cents
			"99",
			//short description
			"Creating your Own Identity has never<br>been easier,Chose your product upload<br>your designand we print it and send you<br>the photo,Pay Only when you get <br>the design that is right for you",
			//long description
			"Creating your Own Identity has never<br>been easier,Chose your product upload<br>your designand we print it and send you<br>the photo,Pay Only when you get <br>the design that is right for you",
			//author
			"You",
			//specification
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One x bundle <br>-DIMENSIONS: Console: 12.00 x 0.01 x 29.00<br>Controller: 6.00 x 4.00 x 1.70",
			//url
			"custom-product-page?designName=designed-by-you&productName=xbox-one-x-bundle"
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
			"36",
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
			"36",
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
			"36",
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
			"50",
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
			"50",
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
			"50",
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
			"36",
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
			"36",
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
			"36",
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
			"50",
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
			"50",
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
			"50",
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
			"-Premium matte decal skin<br>-Easy to put on, easy to take off. <br>-Residue will be non-existent on your<br>Xbox One X Controller<br>-DIMENSIONS: 6.00 x 4.00 x 1.70",
			//url
			"single-product-page?designName=naruto-shippuden&productName=xbox-one-x-controller",
			//sku
			"CUS/CONTR/TOP/20210023"
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
			"36",
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
			"36",
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
			"36",
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
			"50",
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
			"50",
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
			"50",
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

		if($_POST['get_data'] == 'selectedProduct'){
			if (isset($_POST['designName']) && isset($_POST['productName'])){
				if($_POST['designName'] == 'designed-by-you'){
					if($_POST['productName'] == 'xbox-one-controller'){
						$data['status'] = 'ok';
						$data['result'] = $designed_by_You['xbox-one-controller'];
						$data['product1'] = $designed_by_You['xbox-one-console'];
						$data['product2'] = $designed_by_You['xbox-one-bundle'];
						$data['product3'] = $naruto_and_sasuke['xbox-one-controller'];
						$data['product4'] = $gears_of_war['xbox-one-controller'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-s-controller'){
						$data['status'] = 'ok';
						$data['result'] = $designed_by_You['xbox-one-s-controller'];
						$data['product1'] = $designed_by_You['xbox-one-s-console'];
						$data['product2'] = $designed_by_You['xbox-one-s-bundle'];
						$data['product3'] = $naruto_and_sasuke['xbox-one-s-controller'];
						$data['product4'] = $gears_of_war['xbox-one-s-controller'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-x-controller'){
						$data['status'] = 'ok';
						$data['result'] = $designed_by_You['xbox-one-x-controller'];
						$data['product1'] = $designed_by_You['xbox-one-x-console'];
						$data['product2'] = $designed_by_You['xbox-one-x-bundle'];
						$data['product3'] = $naruto_and_sasuke['xbox-one-x-controller'];
						$data['product4'] = $gears_of_war['xbox-one-x-controller'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-elite-controller'){
						$data['status'] = 'ok';
						$data['result'] = $designed_by_You['xbox-one-elite-controller'];
						$data['product1'] = $designed_by_You['xbox-one-x-console'];
						$data['product2'] = $designed_by_You['xbox-one-x-bundle'];
						$data['product3'] = $naruto_and_sasuke['xbox-one-elite-controller'];
						$data['product4'] = $gears_of_war['xbox-one-elite-controller'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-elite-wireless-controller'){
						$data['status'] = 'ok';
						$data['result'] = $designed_by_You['xbox-one-elite-wireless-controller'];
						$data['product1'] = $designed_by_You['xbox-one-x-console'];
						$data['product2'] = $designed_by_You['xbox-one-x-bundle'];
						$data['product3'] = $naruto_and_sasuke['xbox-one-elite-wireless-controller'];
						$data['product4'] = $gears_of_war['xbox-one-elite-wireless-controller'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-console'){
						$data['status'] = 'ok';
						$data['result'] = $designed_by_You['xbox-one-console'];
						$data['product1'] = $designed_by_You['xbox-one-controller'];
						$data['product2'] = $designed_by_You['xbox-one-bundle'];
						$data['product3'] = $naruto_and_sasuke['xbox-one-console'];
						$data['product4'] = $gears_of_war['xbox-one-console'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-s-console'){
						$data['status'] = 'ok';
						$data['result'] = $designed_by_You['xbox-one-s-console'];
						$data['product1'] = $designed_by_You['xbox-one-s-controller'];
						$data['product2'] = $designed_by_You['xbox-one-s-bundle'];
						$data['product3'] = $naruto_and_sasuke['xbox-one-s-console'];
						$data['product4'] = $gears_of_war['xbox-one-s-console'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-x-console'){
						$data['status'] = 'ok';
						$data['result'] = $designed_by_You['xbox-one-x-console'];
						$data['product1'] = $designed_by_You['xbox-one-x-controller'];
						$data['product2'] = $designed_by_You['xbox-one-x-bundle'];
						$data['product3'] = $naruto_and_sasuke['xbox-one-x-console'];
						$data['product4'] = $gears_of_war['xbox-one-x-console'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-bundle'){
						$data['status'] = 'ok';
						$data['result'] = $designed_by_You['xbox-one-bundle'];
						$data['product1'] = $designed_by_You['xbox-one-controller'];
						$data['product2'] = $designed_by_You['xbox-one-console'];
						$data['product3'] = $naruto_and_sasuke['xbox-one-bundle'];
						$data['product4'] = $gears_of_war['xbox-one-bundle'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-s-bundle'){
						$data['status'] = 'ok';
						$data['result'] = $designed_by_You['xbox-one-s-bundle'];
						$data['product1'] = $designed_by_You['xbox-one-controller'];
						$data['product2'] = $designed_by_You['xbox-one-console'];
						$data['product3'] = $naruto_and_sasuke['xbox-one-bundle'];
						$data['product4'] = $gears_of_war['xbox-one-bundle'];
						//returns data as JSON format
						echo json_encode($data);
					}else if($_POST['productName'] == 'xbox-one-x-bundle'){
						$data['status'] = 'ok';
						$data['result'] = $designed_by_You['xbox-one-x-bundle'];
						$data['product1'] = $designed_by_You['xbox-one-controller'];
						$data['product2'] = $designed_by_You['xbox-one-console'];
						$data['product3'] = $naruto_and_sasuke['xbox-one-bundle'];
						$data['product4'] = $gears_of_war['xbox-one-bundle'];
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