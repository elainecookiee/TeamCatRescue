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

        <nav>
            <a href="index.php">Home</a>
            <a href="about.php">About</a>
            <a href="catcare.php">Cat Care</a>
            <a href="contact_page.php">Contact</a>
        </nav>

<!-- INDIVIDUAL CAT-->

    <div class='individual'>
        <div class='float' id='cat'>
            <img id='tag' src="images/tag2.png" width="100%"/>
            <img id='catPic' src="images/Wigglebutt.jpg" width= "50%"/>
        <div class='ab'>Hello, I'm Wigglebutt!</div>
            <ul>
                <li><strong>Name: </strong>Wigglebutt</li>
                <li><strong>Gender: </strong>F</li>
                <li><strong>Age: </strong>4 months</li>
                <li><strong>Breed: </strong>Scottish Fold</li>
                <li><strong>Colour: </strong>Grey</li>
                <li><strong>Personality: </strong>Playful Bookworm</li>
            </ul>
        </div>


<!-- CAT'S STORY -->
        <div class='float' id='story'>
            <h1> Wigglebutt's Story </h1>
            <p>Wigglebutt is a very playful little kitty. She was found wandering around a small bookstore in North Point. The owners of the bookstore let her sleep inside and play with their customers. Wigglebutt enjoys patrolling the aisles and taking naps on stacks of books.</p>
            <p>She loves hanging out with customers especially when they are trying to read. Although she loves being around books, she gets cold sometimes in the Winter and is looking for a warm human to snuggle with.</p>
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
                <form class='contact-form' method='POST' action='individual_Wigglebutt.php'>
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