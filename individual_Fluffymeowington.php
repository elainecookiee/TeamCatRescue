<?php

    $db = new PDO('mysql:host=localhost;dbname=cats;charset=utf8', 'root', 'root');

?>

<!DOCTYPE HTML>
<html>
    <head>
        <meta charset=utf-8>
        <link rel="stylesheet" href="normalize.css"/>
        <link rel="stylesheet" href="main.css"/>
        <link href="https://fonts.googleapis.com/css?family=Gochi+Hand" rel="stylesheet"> 
        <meta name="viewpoint" content="width=device-width, initial-scale=1.0"/>
        <link rel="icon" type="image/png" href="assets/fav16.png" sizes="16x16">
        <link rel="icon" type="image/png" href="assets/fav32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="assets/fav48.png" sizes="48x48">
        <title>Team Cat Rescue</title> 
    </head>

    <body>

        <header> 
            <nav>
           <a href="index.php">Home</a>
           <a href="about.php">About</a>
           <a href="catcare.php">Cat Care</a>
           <a href="contact_page.php">Contact</a>
       </nav>
        </header>
<!-- INDIVIDUAL CAT-->

    <div class='individual'>
        <div class='float' id='cat'>
            <img id='tag' src="images/tag2.png" width="100%"/>
            <img id='catPic' src="images/Meowington.jpg" width= "50%"/>
        <div class='ab'>Hello, I'm Fluffymeowington!</div>
            <ul>
                <li><strong>Name: </strong>Fluffymeowington</li>
                <li><strong>Gender: </strong>M</li>
                <li><strong>Age: </strong>2 months</li>
                <li><strong>Breed: </strong>Bombay</li>
                <li><strong>Colour: </strong>Black</li>
                <li><strong>Personality: </strong>Courageous</li>
            </ul>
        </div>

<!-- CAT'S STORY -->
        <div class='float' id='story'>
            <h1> Fluffymeowington's Story </h1>
            <p>Fluffymeowington was a little black kitten found unable to walk, cold and motionless, but against all odds, the volunteers did not give up on him. After 2 weeks, he could only lie limply, raising his head occasionally.</p>
            <p>Some nights, the tenacious kitten could curl his paws around a human finger, standing with support, and he would start picking up his paws to take steps. He even sat on his hind legs and batted at a toy! With a lot of love, this miracle baby has not only learned to walk, but he can run and dash like any other cats. With love and care, he is able to live a normal, happy and healthy life today.</p>
        </div>


    <div class='contact_us'>
        <section id='set_imformation' class='information'>
             <?php
                if( isset($_POST['name']) ) {
                    $addname = $_POST['name'];
                }
                if( isset($_POST['email']) ) {
                    $addemail = $_POST['email'];
                }
                if( isset($_POST['phone']) ) {
                    $addphone = $_POST['phone'];
                }
                if( isset($_POST['date']) ) {
                    $adddate = $_POST['date'];
                }
                if( isset($_POST['time']) ) {
                    $addtime = $_POST['time'];
                }


                if( isset($addname) && isset($addemail) && isset($addphone) && isset($adddate) && isset($addtime) ) {

                    $sql = "INSERT INTO `appointment_message` (`name`,`email`,`phone`,`date`,`time`) VALUES ( ?, ?, ?, ?, ? )";
                    $query = $db->prepare( $sql );


                    try {
                        $result = $query->execute( [ $addname, $addemail, $addphone, $adddate, $addtime] );
                    } catch ( PDOException $err ) {
                        echo "ERROR: ".$err->getMessage();
                    }

                }
            ?>

  
<!-- window -->
        <?php
            $name = isset($_POST['name']) ? $_POST['name'] : null;
            $email = isset($_POST['email']) ? $_POST['email'] : null;
            $phone = isset($_POST['phone']) ? $_POST['phone'] : null;
            $date = isset($_POST['date']) ? $_POST['date'] : null;
            $time = isset($_POST['time']) ? $_POST['time'] : null;
            
            if ( isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['date']) && isset($_POST['time']) ) {            
            
                echo '<script language="javascript">';

                echo 'alert("Dear '.$name.' you just Successfully made an appointment! Your appointment is: '.$date.' at '.$time.'.");';
                
                echo '</script>';
            } 

        ?> 
            <h3 id='subject'>Book a Visit!</h3>
                <form class='contact-form' method='POST' action='individual_Fluffymeowington.php'>
                        <div class="form">
                            <input class="a" name="name" placeholder="Full name" />
                            <input class="a" name="email" placeholder="Email" />
                            <input class="a" name="phone" placeholder="Phone Number" />
                            <input type="date" class="a" name="date" placeholder="Date (YYYY-MM-DD)" />
                            <input type="time" class="a" name="time" placeholder="Time (12:34 AM)" />
                        </div>
                        <div><input class="input" type="submit" value='SUBMIT'/></div>            
                </form> 
        </section>  
        <div><img id="catBottom" src="images/cat1.png" width="20%"/></div>
    </div>


        <footer> 
            <div class='social'>
                <a href="https://www.facebook.com/" target="_blank" alt="Facebook"><img src="images/icon-fb.svg" height="30"></a>
                <a href="https://twitter.com/" target="_blank" alt="Twitter"><img src="images/icon-twitter.svg" height="30"></a>
                <a href="https://www.instagram.com/" target="_blank" alt="Instagram"><img src="images/icon-ig.svg" height="30"></a>
            </div>
        </footer>

    </body>
</html>