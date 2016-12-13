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
        <title>Team Cat Rescue</title> 
    </head>

    <body>

        <nav>
            <a href="#">Home</a>
            <a href="about.html">About</a>
            <a href="catcare.html">Cat Care</a>
            <a href="#">Contact</a>
        </nav>

<!-- INDIVIDUAL CAT-->

    <div class='individual'>
        <div class='float' id='cat'>
            <img id='tag' src="images/tag2.png" width="100%"/>
            <img id='catPic' src="images/Ariel.jpg" width= "50%"/>
        <div class='ab'>Hello, My name is Ariel!</div>
            <ul>
                <li><strong>Name: </strong>Ariel</li>
                <li><strong>Gender: </strong>F</li>
                <li><strong>Age: </strong>10 years 7 months</li>
                <li><strong>Breed: </strong>Domestic Shorthair</li>
                <li><strong>Colour: </strong>Brown and White</li>
                <li><strong>Personality: </strong>Quiet, Gentle</li>
            </ul>
        </div>

<!-- CAT'S STORY -->
        <div class='float' id='story'>
            <h1> Ariel's Story </h1>
            <p>I'm quiet as a mouse, and a little bit shy. Still feeling out my surroundings in this new place! Definitely beats the mean streets, if you know what I'm saying! My foster mom tells me I'm sweet as pie, and I must confess, can't say that I disagree with her!</p>
            <p>Dislikes: Other cats--my friends, I am not feelin' them right now. I like to soak up your attention, hang out by myself, and any other furry felines in my face is just a no for me. But I'm learning to warm up to them because, you know, they keep meowing that 'Why Can't We Be Friends' song and it's driving my nuts like nip!</p>
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
                <form class='contact-form' method='POST' action='individual_Ariel.php'>
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