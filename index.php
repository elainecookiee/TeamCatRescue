<!DOCTYPE html>
<html lang="en" >
	<head>
		<meta charset='UTF-8' />
		<title>Team Cat Rescue</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="https://fonts.googleapis.com/css?family=Gochi+Hand|Roboto" rel="stylesheet">

		<style type="text/css">
			body {
				min-width: 460px;
				margin:0;
 				background: url("images/patternBg.png");
 				display: flex;
    			flex-direction: column;
    			align-items: center;
			}

			.mainnav, .logo {
				display: flex;
				justify-content: center;
				padding:1em;
			}

			nav a {
				padding: 1em;
				color:white;
				text-decoration: none;
				font-family: 'Gochi Hand', cursive;
				font-size: 18pt;
			}

			a {
				text-decoration: none;
				color:#545454;
			}

			a:hover {
				color: #F69C9D;
			}

			.msg {
				font-family: 'Gochi Hand', cursive;
				font-size: 18pt;
				margin: 1em;
			}

			.filter {
				display: flex;
    			justify-content: center;
    			padding-top: 3em;
    			margin: 2em;
    			flex-wrap: wrap;
			}

			.topfilter {
				display: none;
    			justify-content: center;
				position: fixed;
				top:0;
				z-index: 1;
				width:100%;
				height: 60px;
				padding-top: 0;
    			margin: 0;
				background-color: #e6d7b8;
				
			}

			.topfilter form {
				display: flex;
				flex-wrap: wrap;
				justify-content: center;
			}

			select, input {
  				font-size: 16px;
  				margin: 0.5em;
			}

			input {
				background-color: #f69c9d;
				-moz-border-radius:9px;
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
				height: 520px;
				background-image: url("images/banner.jpg");
				background-repeat: no-repeat;
				background-position: center;
				background-size:cover;
		
			}

			.gallery {
				display: flex;
				max-width: 1280px;
				flex-direction: row;
				justify-content: center;
				flex-wrap: wrap;
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
				list-style-image: url(assets/list.png);
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

			/*FEATURED*/
			.featuredGallery{
				display: flex;
				flex-direction: column;
				align-items: center;
				background-color: #f0e6d3;
			}

			.title{
				font-family: 'Gochi Hand', cursive;
				font-size: 24pt;
				color: #f69c9d;
				margin-top: 1em;
			}

			.featured{
				max-width: 1280px;
				display: flex;
				flex-direction: row;
				justify-content: center;
				flex-wrap: wrap;
			}

/* Mobile */
@media screen and (max-width : 425px){
	/* Styles */
		input {
			padding:1px 24px;
		}

}
		</style>

	</head>

<body>

<div class="banner">
<!--Navigation Bar-->
	<nav class="mainnav" id="home">
	    <a href="index.php">Home</a>
	    <a href="about.php">About</a>
	    <a href="catcare.html">Cat Care</a>
	    <a href="contact_page.html">Contact</a>
    </nav>
    <div class="logo">
    <a href="index.php"><img id="logo" src="assets/logo_main.png" alt="team cat rescue logo" width=160px height="160px" /></a></div>

<!--Filters-->
 <form class="filter" method='get' action='index.php' id="failcat">
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

// if no result found msg
    if (empty($data)) { 
    echo '<img class="thumnail" src="images/cat2.png" /><div class="msg">Sorry, no matching file found!</div>';
    echo "<script>location.hash = '#failcat'</script>";
}

// if results found
if( isset($_GET['gender']) ){
    echo "<div class='gallery'>";

	for ($i = 0; $i < sizeof($data); $i++ ) {
		echo "<div><a href='". $data[$i]['html'] ."'>";
		echo "<img class='thumnail' src=\"images/" . $data[$i]['image'] . "\"></a>" ;
		echo "<ul class='info'><a href='". $data[$i]['html'] ."'>";
		echo "<li class='catname'>" . $data[$i]['name']. "</li></a>
		<li class='detail'>" . $data[$i]['breed']." • ".$data[$i]['age']." • ".$data[$i]['gender']."</li>
		</ul></div>";
	};

	echo "</div>";
}

?>

</div>


<!-- Featured Cats -->
<div class="featuredGallery">
	<div class="title">Featured Cats</div>
	<div class="featured">
		<div><a href="individual_Wigglebutt.html"><img class='thumnail' src='images/wigglebutt2.jpg'/></a>
			<ul class="info">
				<li class="catname"><a href="individual_Wigglebutt.html">Wigglebutt</a></li>
				<li class="detail">Scottish Fold • Kitten • Female</li>
			</ul>
		</div>
		<div><a href="individual_Meowington.html"><img class='thumnail' src='images/Meowington2.jpg'/></a>
			<ul class="info">
				<li class="catname"><a href="individual_Meowington.html">Fluffy Meowington</a></li>
				<li class="detail">Bombay • Kitten • Male</li>
			</ul>
		</div>
		<div><a href="individual_Toast.html"><img class='thumnail' src='images/Toast2.jpg'/></a>
			<ul class="info">
				<li class="catname"><a href="individual_Toast.html">Toast</a></li>
				<li class="detail">Ragamuffin • Young • Male</li>
			</ul>
		</div>
	</div>
</div>



<script>
window.onload = function() {
	window.addEventListener ("scroll", scrollMenuTop);
}

function scrollMenuTop() {
	var mq = window.matchMedia("(min-width:460px)");
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

