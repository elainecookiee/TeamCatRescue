<!DOCTYPE HTML>
<html>
    <head>
        <title>Team Cat Rescue</title> 
        <meta charset=utf-8> 
        <link rel="stylesheet" type="text/css" href="styles.css">
        <link href="https://fonts.googleapis.com/css?family=Gochi+Hand" rel="stylesheet"> 
        <!-- The browser will automatically choose the appropriate FavIcon size. -->
        <link rel="icon" type="image/png" href="assets/fav16.png" sizes="16x16">
        <link rel="icon" type="image/png" href="assets/fav32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="assets/fav48.png" sizes="48x48">
    </head>
    <body>
        <header> 
            <nav>
                <img id="mainLogo" src="assets/logo.png" />
                <a href="#" target="_self" class="topNav">Home</a> <a href="#" target="_self" class="topNav">About</a> <a href="#" target="_self" class="topNav">Cat Care</a> <a href="#" target="_self" class="topNav">Contact</a>
            </nav>
        </header>
        <div class="careOrg">
            <div class="catCare">
                <div class="catCareStuff" id="careContent">
                    <h2>Index</h2>
                    <ul>
                        <li><a target="_self" href="#catDiet">Diet</a></li>
                        <li><a target="_self" href="#catAllergies">Allergies</a></li>
                        <li><a target="_self" href="#catVaccines">Vaccines</a></li>
                        <li><a target="_self" href="#catCare">Care</a></li>
                    </ul>
                </div>
                <div class="float">
                    <img src="assets/dryFood.jpg" class="catImages" />
                    <div class="textCont">
                        <h2 id="catDiet">Diet</h2>
                        <p>Cats have a much better chance at optimal health if they are fed canned food (or a balanced homemade diet) instead of dry kibble. This is because dry food as an extremely low water content, too many carbs, and too much plant-based protein (as opposed to animal-based). Dry food is also extremely processed, which means it loses a lot of the nutrients. Dry food can also become easily contaminated, especially when sitting in warm places for extended periods of time. You can always give your cat home-made meats, specifically raw or semi-raw chicken, turkey, and rabbit. It will do them good.</p>
                        <ul class="subList">
                            <li>Dry kibble is not recommended.</li>
                            <li>It has low water content.</li>
                            <li>It has way too many carbs.</li>
                            <li>It kibble has too much plant-based protein.</li>
                            <li>It can become easily contaminated.</li>
                            <li>You can give your cat raw/semi-raw chicken, turkey, rabbit.</li>
                        </ul>
                    </div>
                </div> <!-- float -->
                <div class='float' id='float'>
                    <img src="assets/allergy.jpg" class="catImages" />
                    <div class="textCont">
                        <h2 id="catAllergies">Allergies</h2>
                        <p>Cats can have allergies and intolerances, just like humans. Some of the most common allergies your cat may have are: pollen, perfumes, cleaning agents, cigarette smoke, rubber, certain plants, fleas or flea-control products, some cat litters, grass, other organic substances, and even certain kinds of food. If you notice your cat acting strangely, exhibiting constant itchiness or redness, or suffering from diarrhea, visit your vet to check for any allergies or intolerances your cat may have.</p>
                    <ul class="subList2">
                        <li>Cats can have intolerances and allergies.</li>
                        <li>Plants, dust, smoke, food, etc.</li>
                        <li>Talk to vet for changes in behaviour.</li>
                    </ul>
                    </div>
                </div> <!-- float/floatr -->
                <div class='float'>
                    <img src="assets/vaccine.jpg" class="catImages" />
                    <div class="textCont">
                        <h2 id="catVaccines">Vaccines</h2>
                        <p>In regards to vaccinating your cats, there is a set of core vaccines that should be given to every single cat, and vaccines that should only be given to certain cats based on their specific situation, which can depend on things such as age, breed, and more. The typical suggested core vaccines are panleukopenia (distempter), feline viral rhinotracheitis, feline calcivirus, and rabies. It is highly recommended to vaccinate your cat against the former three diseases at least every three years, though in some cases, it would be wiser to do so more frequently. Speak to your vet to determine your cat's case.</p>
                        <ul class="subList2">
                            <li>Required vaccines vary on different factors.</li>
                            <li>Required core vaccine: panleukopenia (distempter)</li>
                            <li>Required core vaccine: feline viral rhinotracheitis</li>
                            <li>Required core vaccine: feline calcivirus</li>
                            <li>Required core vaccine: rabies</li>
                            <li>Talk to vet to determine vaccines.</li>
                        </ul>
                    </div>
                </div> <!-- float -->
                <div class='float'>
                    <img src="assets/care.jpg" class="catImages" />
                    <div class="textCont">
                        <h2 id="catVaccines">Care</h2>
                        <p>Cats require a lot of care. They need a lot of love and attention, even if it doesn't seem needed at first. They also need to have their fur brushed regularly with a special brush, much like humans brush their own hair regularly. It is important to give your cat physical attention, such as petting or massaging your cat. This is because neglected cats will tend to misbehave quite often.</p>
                    <p>Make sure to check the litterbox regularly and clean it at least once a week. Feeding your cat organic catnip will also help in your cat's maintenance. Once a month, you should make sure to clean their beds and bowls, and make sure there is sufficient food in the house. Yearly, you should get your cat examined by a vet and inspect them for tartar, changes in habits, and overall condition of their bed and toys.</p>
                    <ul class="subList2">
                        <li><strong>Weekly</strong>
                            <ul>
                                <li>Clean litterbox</li>
                                <li>Brush cat fur</li>
                                <li>Organic catnip</li>
                            </ul>
                        </li>
                         <li><strong>Monthly</strong>
                            <ul>
                                <li>Clean bed</li>
                                <li>Clean bowls</li>
                                <li>Check food bags</li>
                            </ul>
                        </li>
                         <li><strong>Yearly</strong>
                            <ul>
                                <li>Vet appointments</li>
                                <li>Check condition of bed and toys</li>
                                <li>Observe overall habits changes</li>
                            </ul>
                        </li>
                    </ul> 
                    </div>
                </div> <!-- float -->
            </div> <!-- catCare -->
        </div> <!-- careOrg -->
        <?php
        include('footer.php');
        ?>