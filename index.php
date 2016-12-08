<!DOCTYPE html>
<html lang="en" >
	<head>
		<meta charset='UTF-8' />
		<title>Team Cat Rescue</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="https://fonts.googleapis.com/css?family=Gochi+Hand|Roboto" rel="stylesheet">

		<style type="text/css">
			a.logo, .title {
				display: flex;
				justify-content: center;
			}

			form {
				display: flex;
    			justify-content: center;
    			margin: 2em;
			}

			.gallery {
				display: flex;
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
            <input type='submit' />

</form>





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
		echo "<div><img class=\"thumnail\" src=\"images/" . $data[$i]['image'] . "\">" ;
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
</body>

</html>

