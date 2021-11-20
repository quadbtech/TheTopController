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
		$products =[
            //game freak xbox one x controller
            new product (
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
            ),

            //funky skulls one x console
            new product (
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
            ),

            //doodle lines xbox one x bundle
            new product (
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
            ),
            
            // naruto and sasuke xbox one x controller
            new product (
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
            ),

            //dragon ball z xbox one x console
            new product (
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
            ),
            
            // iron man xbox one x bundle
            new product (
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
            )

        ];

		

		if($_POST['get_data'] == 'selectedProduct'){
            $data['status'] = 'ok';
            $data['result'] = $products;
            echo json_encode($data);
		}
	}
?>