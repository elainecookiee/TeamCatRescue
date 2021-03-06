<?php session_start();?>

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
    
    <?php
        include('header.php');
    ?>
    

<!-- WELCOME MESSAGE -->
        <div class='welcome'>
            <h1>Welcome</h1>
            <p>Team Cat Rescue is a haven for cats who have been abandoned and need a new home. Anyone who would love to adopt a cat can do so at Cat House. Our mission is to find each cat lover their perfect match.</p>
        </div>

<!-- SUCCESS STORIES -->
    <h1 class='welcome'>Success Stories</h1>
    <div class='success'>
        <div class='float'>
            <img src="images/success_Astro.jpg" width="50%"/>
            <p class="item">“This is little Astro. He belongs to a friend of mine. He is a little stray with a big personality and quite a few physical defects but he is getting more beautiful each day as his adopted family treats him to only the best biscuits in town.”</p>
        </div>
        <div class='float' id='floatr'>
            <img src="images/success_Oliver.jpg" width="50%"/>
            <p class="item">“Oliver is my little tiger. Olive-coloured eyes, a bow-tie to match. He may look small and timid, but he is always so wild and free-spirited. He reminds me of myself, actually, because I used to be timid and shy, too, but with time, I have learned to reach for the stars. We are one alike.”</p>
        </div>
        <div class='float'>
            <img src="images/success_Jimi.jpg" width="50%"/>
            <p class="item">“I was interested in cats until I started looking after my son's cat. I was first captivated by Jimi’s cute little crossed eyes, and then I got to know his sweet nature; I just had to bring him home. Now, he is a part of my life. He needed me as much as I needed him.”</p>
        </div>
    </div>

    <?php
        include('footer.php');
    ?>

    </body>
</html>