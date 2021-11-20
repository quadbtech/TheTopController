<?php
if(!empty($_POST['get_data']))
	{
    	$data = array();
	
		class product {  
		 
			public $designName = "Black Wall";
			public $designNameHtml = "Black<br>Wall";
			public $designName3 = "Black Wall";
            public $author = "ROBERT W. CHAMBERS";
			public $Description ="Another Brick Wall inspired design<br> from industry expert Robert W. Chambers,<br> Identify yourself as the best in Pop Culture";
			public $productUrl = "custom-product-page?designName=black-wall";

			// Constructor is being implemented. 
			public function __construct($designName,$designNameHtml,$designName3,$author,$Description,$productUrl) { 
				 
				$this->designName = $designName; 
				$this->designNameHtml = $designNameHtml;
				$this->designName3 = $designName3;
				$this->author = $author;  
				$this->Description = $Description; 
				$this->productUrl = $productUrl;  
			} 
		} 

		// now constructor is called automatically  
		// because we have initialized the object 
		// or class Bird. 

		$black_wall['black-wall'] = new product (
			//design name
			"Black Wall",
			//design name html
			"Black<br>Wall",
			// design name 3
			"Black Wall",
            //author
            "ROBERT W. CHAMBERS",
			//description
			"Another Brick Wall inspired design<br> from industry expert Robert W. Chambers,<br> Identify yourself as the best in Pop Culture",			
			//url
			"product-page?designName=black-wall"
        );
        $blue_kaleidoscope['blue-kaleidoscope'] = new product (
			//design name
			"blue<br>kaleidoscope",
			//design name html
			"blue<br>kaleido<br>scope",
			// design name 3
			"blue kaleidoscope",
            //author
            "Tsujita Masujiro",
			//description
			"Blue Kaliedoscope inspired design<br> from industry expert Tsujita Masujiro, <br>Identify yourself as the best in Pop Culture",			
			//url
			"product-page?designName=blue-kaleidoscope"
        );
        $call_of_duty['call-of-duty'] = new product (
			//design name
			"Call of Duty",
			//design name html
			"Call<br>of Duty",
			// design name 3
			"Call of Duty",
            //author
            "Richard Eveland",
			//description
			"Call of Duty Inspired Design From Industry Expert Richard Eveland, Identify Yourself As The Best In Gaming, Offical Merch From Activision.",			
			//url
			"product-page?designName=call-of-duty"
        );
		$doodle_lines['doodle-lines'] = new product (
			//design name
			"Doodle Lines",
			//design name html
			"Doodle<br>Lines",
			// design name 3
			"Doodle Lines",
            //author
            "Robert W. Chambers",
			//description
			"Doodle Lines Inspired Design From Industry Expert Robert W. Chambers, Identify Yourself As The Best In Pop Culture.",			
			//url
			"product-page?designName=doodle-lines"
		);
		$dragon_ball_z['dragon-ball-z'] = new product (
			//design name
			"Dragon Ball Z",
			//design name html
			"Dragon<br>Ball Z",
			// design name 3
			"Dragon Ball Z",
            //author
            "Edward Niro",
			//description
			"Dragon Ball Z Inspired Design By Edward Niro, USA's Top Designers, If You Are Into Anime You Cannot Be Living Without This Design.The Design Represents The Core Ideology Of Dragon Ball Z.",	
			//url
			"product-page?designName=dragon-ball-z"
		);
		$funky_ghost['funky-ghost'] = new product (
			//design name
			"Funky Ghost",
			//design name html
			"Funky<br>Ghost",
			// design name 3
			"Funky Ghost",
            //author
            "Tsujita Masujiro",
			//description
			"Funky Ghost Inspired Design From Industry Expert Tsujita Masujiro, Identify Yourself As The Best In Pop Culture.",			
			//url
			"product-page?designName=funky-ghost"
		);	
		$funky_skulls['funky-skulls'] = new product (
			//design name
			"Funky Skulls",
			//design name html
			"Funky<br>Skulls",
			// design name 3
			"Funky Skulls",
            //author
            "Robert W. Chambers",
			//description
			"Funky Skulls Inspired Design From Industry Expert Robert W. Chambers, Identify Yourself As The Best In Pop Culture.",			
			//url
			"product-page?designName=funky-skulls"
		);
		$game_freak['game-freak'] = new product (
			//design name
			"Game Freak",
			//design name html
			"Game<br>Freak",
			// design name 3
			"Game Freak",
            //author
            "David E. Hunt",
			//description
			"Game Freak Inspired Design From Industry Expert David E. Hunt, Identify Yourself As The Best In Pop Culture.",			
			//url
			"product-page?designName=game-freak"
		);
		$gears_of_war['gears-of-war'] = new product (
			//design name
			"Gears Of War",
			//design name html
			"Gears<br>Of War",
			// design name 3
			"Gears Of War",
            //author
            "DAVID E. HUNT",
			//description
			"Gears Of War Inspired Design From Industry Expert David E. Hunt, Identify Yourself As The Best In Gaming, Offical Merch From Epic Games.",			
			//url
			"product-page?designName=gears-of-war"
		);
		$iron_man['iron-man'] = new product (
			//design name
			"Iron Man",
			//design name html
			"Iron<br>Man",
			// design name 3
			"Iron Man",
            //author
            "Richard Eveland",
			//description
			"Iron Man Inspired Design From Industry Expert Richard Eveland, Identify Yourself As The Best In Pop Culture, Offical Design From Marvel",			
			//url
			"product-page?designName=iron-man"
		);
		$naruto_and_sasuke['naruto-and-sasuke'] = new product (
			//design name
			"Naruto And Sasuke",
			//design name html
			"Naruto<br>And<br>Sasuke",
			// design name 3
			"Naruto And Sasuke",
            //author
            "Yoshie Akina",
			//description
			"Naruto And Sasuke Inspired Design By Yoshie Akina, Japan's Top Designers, If You Are Into Anime You Cannot Be Living Without This Design.",			
			//url
			"product-page?designName=naruto-and-sasuke"
		);
		$naruto_shippuden['naruto-shippuden'] = new product (
			//design name
			"Naruto Shippuden",
			//design name html
			"Naruto<br>Shippuden",
			// design name 3
			"Naruto Shippuden",
            //author
            "Yoshie Akina",
			//description
			"Naruto Shippuden Inspired Design By Yoshie Akina, Japan's Top Designers, If You Are Into Anime You Cannot Be Living Without This Design.",			
			//url
			"product-page?designName=naruto-shippuden"
		);
		$patriot['patriot'] = new product (
			//design name
			"patriot",
			//design name html
			"patriot",
			// design name 3
			"patriot",
            //author
            "DAVID E. HUNT",
			//description
			"America Inspired Design From Industry Expert David David E. Hunt, Identify Yourself As The Best Patriot, OfficalMerch From America",			
			//url
			"product-page?designName=patriot"
		);
		$skull_kaleidoscope['skull-kaleidoscope'] = new product (
			//design name
			"Skull Kaleidoscope",
			//design name html
			"Skull<br>Kaleido<br>scope",
			// design name 3
			"Skull Kaleidoscope",
            //author
            "Edward Niro",
			//description
			"Skull Kaliedoscope Inspired Design From Industry Expert Edward Niro, Identify Yourself As The Best In Pop Culture.",			
			//url
			"product-page?designName=skull-kaleidoscope"
		);
		$tokyo_ghoul['tokyo-ghoul'] = new product (
			//design name
			"Tokyo Ghoul",
			//design name html
			"Tokyo<br>Ghoul",
			// design name 3
			"Tokyo Ghoul",
            //author
            "Tsujita Masujiro",
			//description
			"Tokyo Ghoul Inspired Design By Tsujita Masujiro, Japan's Top Designers, If You Are Into Anime You Cannot Be Living Without This Design.",			
			//url
			"product-page?designName=tokyo-ghoul"
		);		
		$world_war['world-war'] = new product (
			//design name
			"World War",
			//design name html
			"World<br>War",
			// design name 3
			"World War",
            //author
            "Edward Niro",
			//description
			"World War Inspired Design From Industry Expert Edward Niro, Identify Yourself As The Best In Mordern / Medieval Warfare Simulations Like Call Of Duty, Battlefield, Age Of Empires Etc.",		
			//url
			"product-page?designName=world-war"
		);

		if($_POST['get_data'] == 'selectedProduct'){
			if (isset($_POST['designName'])){
				if($_POST['designName'] == 'black-wall'){
				    $data['status'] = 'ok';
				    $data['result'] = $black_wall['black-wall'];
				    //returns data as JSON format
                    echo json_encode($data);
                }elseif($_POST['designName'] == 'blue-kaleidoscope'){
                    $data['status'] = 'ok';
                    $data['result'] = $blue_kaleidoscope['blue-kaleidoscope'];
                    //returns data as JSON format
                    echo json_encode($data);
                }elseif($_POST['designName'] == 'call-of-duty'){
                    $data['status'] = 'ok';
                    $data['result'] = $call_of_duty['call-of-duty'];
                    //returns data as JSON format
					echo json_encode($data);
				}elseif($_POST['designName'] == 'doodle-lines'){
                    $data['status'] = 'ok';
                    $data['result'] = $doodle_lines['doodle-lines'];
                    //returns data as JSON format
					echo json_encode($data);
				}elseif($_POST['designName'] == 'dragon-ball-z'){
                    $data['status'] = 'ok';
                    $data['result'] = $dragon_ball_z['dragon-ball-z'];
                    //returns data as JSON format
					echo json_encode($data);	
				}elseif($_POST['designName'] == 'funky-ghost'){
                    $data['status'] = 'ok';
                    $data['result'] = $funky_ghost['funky-ghost'];
                    //returns data as JSON format
					echo json_encode($data);
				}elseif($_POST['designName'] == 'funky-skulls'){
                    $data['status'] = 'ok';
                    $data['result'] = $funky_skulls['funky-skulls'];
                    //returns data as JSON format
					echo json_encode($data);
				}elseif($_POST['designName'] == 'game-freak'){
                    $data['status'] = 'ok';
                    $data['result'] = $game_freak['game-freak'];
                    //returns data as JSON format
					echo json_encode($data);
				}elseif($_POST['designName'] == 'gears-of-war'){
                    $data['status'] = 'ok';
                    $data['result'] = $gears_of_war['gears-of-war'];
                    //returns data as JSON format
					echo json_encode($data);	
				}elseif($_POST['designName'] == 'iron-man'){
                    $data['status'] = 'ok';
                    $data['result'] = $iron_man['iron-man'];
                    //returns data as JSON format
					echo json_encode($data);
				}elseif($_POST['designName'] == 'naruto-and-sasuke'){
                    $data['status'] = 'ok';
                    $data['result'] = $naruto_and_sasuke['naruto-and-sasuke'];
                    //returns data as JSON format
					echo json_encode($data);
				}elseif($_POST['designName'] == 'naruto-shippuden'){
                    $data['status'] = 'ok';
                    $data['result'] = $naruto_shippuden['naruto-shippuden'];
                    //returns data as JSON format
					echo json_encode($data);
				}elseif($_POST['designName'] == 'patriot'){
                    $data['status'] = 'ok';
                    $data['result'] = $patriot['patriot'];
                    //returns data as JSON format
					echo json_encode($data);	
				}elseif($_POST['designName'] == 'skull-kaleidoscope'){
                    $data['status'] = 'ok';
                    $data['result'] = $skull_kaleidoscope['skull-kaleidoscope'];
                    //returns data as JSON format
					echo json_encode($data);
				}elseif($_POST['designName'] == 'tokyo-ghoul'){
                    $data['status'] = 'ok';
                    $data['result'] = $tokyo_ghoul['tokyo-ghoul'];
                    //returns data as JSON format
					echo json_encode($data);
				}elseif($_POST['designName'] == 'world-war'){
                    $data['status'] = 'ok';
                    $data['result'] = $world_war['world-war'];
                    //returns data as JSON format
                    echo json_encode($data);			
				}else{
                    echo 'error with design name';
                }
            }
		}
    }
?>