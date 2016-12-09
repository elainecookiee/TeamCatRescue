<!DOCTYPE html>
<html lang="en" >
	<head>
		<meta charset='UTF-8' />
		<title>Team Cat Rescue</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="https://fonts.googleapis.com/css?family=Gochi+Hand|Roboto" rel="stylesheet">

		<style type="text/css">
			body {
				margin:0;
				background-color: #f9f5ed;
			}

			.mainnav, .logo {
				display: flex;
				justify-content: center;
				padding:1em;
			}

			.mainnav {

			}

			nav a {
				padding: 1em;
				color:white;
				text-decoration: none;
				font-family: 'Gochi Hand', cursive;
				font-size: 18pt;

			}

			.filter {
				display: flex;
    			justify-content: center;
    			padding-top: 3em;
    			margin: 2em;
			}

			.topfilter {
				display: flex;
    			justify-content: center;
				position: fixed;
				top:0;
				z-index: 1;
				width:100%;
				height: 60px;
				padding-top: 0;
    			margin: 0;
				background-color: #e6d7b8;
				display: none;
			}

			.topfilter form{
				display: flex;
			}

			select, input {
  				font-size: 16px;
  				margin: 0.5em;
			}

			input {
				background-color: #f69c9d;
				-moz-border-radius:9px;
				-webkit-border-radius:9px;
				border-radius:9px;
				border:0;
				display:inline-block;
				cursor:pointer;
				color:#ffffff;
				font-family: 'Gochi Hand', cursive;
				font-size: 16pt;
				padding:8px 24px;
				text-decoration:none;
				}
				input:hover {
					background-color:#c96a6b;
				}
				input:active {
					position:relative;
					top:1px;
				}


			.banner {
				width: 100%;
				height: 500px;
				background-image: url("images/banner.jpg");
				background-repeat: no-repeat;
				background-position: center;
				background-size: 100%;
			}

			.gallery {
				display: flex;
				justify-content: center;
				flex-wrap: wrap;
			}

			.each {
				background-color: white;
			}

			.thumnail {
				margin-top: 1em;
				margin-left: 1em;
				margin-right: 1em;
				margin-bottom: -0.5em;
			}

			.catname {
				font-family: 'Gochi Hand', cursive;
				font-size: 16pt;
			}

			.detail {
				font-family: 'Roboto', sans-serif;
				font-size:12pt;
				color:grey;
			}

			ul {
				list-style: none;
				margin: none;
			}

		</style>



	</head>
<body>

<div class="banner">
<!--Navigation Bar-->
	<nav class="mainnav" id="home">
	    <a href="#home">Home</a>
	    <a href="about.html">About</a>
	    <a href="catcare.html">Cat Care</a>
	    <a href="contact_page.html">Contact</a>
    </nav>
    <div class="logo">
    <img id="logo" src="assets/logo_main.png" alt="team cat rescue logo" width=160px height="160px" /></div>

<!--Filters-->
 <form class="filter" method='get' action='index.php'>
	<select name='breedForm'>
	<option value="Breed" selected="selected">Breed</option>
	
	<?php

	$db = new PDO('mysql:host=localhost;dbname=cats;charset=utf8', 'root', 'root');
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

	$sql = "SELECT * 
	FROM `breed`";

	$result = $db->prepare($sql);
    $result -> execute();
    $data = $result->fetchAll();

		// loop over it
		foreach( $data as $row ) {
			// display row:
			echo "<option value='";
			echo $row['bid'];
			echo "'>";
			echo $row['breed'];
			echo "</option>";
		}
	?>
	</select>
	<select name='age'>
            	<option value="Age" selected="selected">Age</option>
            	<option value="Adult">Adult</option>
            	<option value="Young">Young</option>
            	<option value="Elder">Elder</option>
            	<option value="Kitten">Kitten</option>
            </select>

            <select name='gender'>
            	<option value="Gender" selected="selected">Gender</option>
            	<option value="Male">Male</option>
            	<option value="Female">Female</option>
            </select>
            <input type='submit' value="Find My Match"/>

</form>

</div>

<div class="topfilter">
 <form method='get' action='index.php'>
	<select name='breedForm'>
	<option value="Breed" selected="selected">Breed</option>
	
	<?php

	$db = new PDO('mysql:host=localhost;dbname=cats;charset=utf8', 'root', 'root');
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

	$sql = "SELECT * 
	FROM `breed`";

	$result = $db->prepare($sql);
    $result -> execute();
    $data = $result->fetchAll();

		// loop over it
		foreach( $data as $row ) {
			// display row:
			echo "<option value='";
			echo $row['bid'];
			echo "'>";
			echo $row['breed'];
			echo "</option>";
		}
	?>
	</select>
	<select name='age'>
            	<option value="Age" selected="selected">Age</option>
            	<option value="Adult">Adult</option>
            	<option value="Young">Young</option>
            	<option value="Elder">Elder</option>
            	<option value="Kitten">Kitten</option>
            </select>

            <select name='gender'>
            	<option value="Gender" selected="selected">Gender</option>
            	<option value="Male">Male</option>
            	<option value="Female">Female</option>
            </select>
            <input type='submit' value="Find My Match"/>

</form>
</div>

<div class="gallery">	

	
	
<?php


	if( isset($_GET['breedForm'])&& $_GET['breedForm']!="Breed" ) {
	           $breedSearch = $_GET['breedForm'];
            } else {
	           $breedSearch = '%';
            };

    if( isset($_GET['age'])&& $_GET['age']!='Age' ) {
	           $ageSearch = $_GET['age'];
            } else {
	           $ageSearch = "%";
            };

    if( isset($_GET['gender'])&& $_GET['gender']!='Gender' ) {
	           $genderSearch = $_GET['gender'];
            } else {
	           $genderSearch = "%";
            };

    $db = new PDO('mysql:host=localhost;dbname=cats;charset=utf8', 'root', 'root');
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

	$sql = "
	SELECT * 
	FROM `cat`
	INNER JOIN `breed`
	ON (`cat`.`bid`=`breed`.`bid`)
	WHERE `breed`.`bid` LIKE :breedForm AND `age` LIKE :age AND `gender`LIKE :gender
	";
	

	// $sql = "SELECT * 
	// 	FROM `cat` INNER JOIN `breed`
	// 	ON (`cat`.`bid`=`breed`.`bid`)
	// 	WHERE `breed` = :breed AND `gender` = :gender AND `age`= :age" ;

	$result = $db->prepare($sql);
    $result -> execute(
    	array(
  ':breedForm' => $breedSearch,
 	':age' => $ageSearch,
  ':gender'   => $genderSearch)
    	);
    $data = $result->fetchAll();

    // var_dump($breedSearch);
    // var_dump($ageSearch);
    // var_dump($genderSearch);

	$localID = -1;
for ($i = 0; $i < sizeof($data); $i++ ) {

	if( $localID != $data[$i]['id'] ) {
		if( $localID > -1 ) {
		 	 echo "</div>";
		};
		echo "<div class='each'><img class=\"thumnail\" src=\"images/" . $data[$i]['image'] . "\">" ;
		echo "<div><ul class='info'><li class='catname'>" . $data[$i]['name']. "</li>
		<li class='detail'>" . $data[$i]['breed']." • ".$data[$i]['age']." • ".$data[$i]['gender']."</li>
		</ul>
		</div>";
		}
		else {
			"<div><ul class='info'><li class='catname'>" . $data[$i]['name']. "</li>
		<li class='detail'>" . $data[$i]['breed']." • ".$data[$i]['age']." • ".$data[$i]['gender']."</li>
		</ul>
		</div>";
		}
};

?>

</div>

<script>
window.onload = function() {
	window.addEventListener ("scroll", scrollMenuTop);
}

function scrollMenuTop() {
	var mq = window.matchMedia("(min-width:1024px)");
	var scrolled = window.scrollY;
	var x = document.querySelector(".topfilter");
	if ((scrolled>500)&&(mq.matches)) 
		{x.style.display = "block";
		x.style.display = "flex";
}
	else { x.style.display = "none"
	}
}
</script>

</body>

</html>

