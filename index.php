<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YourDish-site</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-----------Header----------->
    <header class="entete">
        <div class="logo">
            <a href="#">
                <p> <span>Your</span>Dish</p>
            </a>
        </div>
        <ul class="menu">
            <li><a href="#home">Acceuil</a></li>
            <li><a href="#men">Menu</a></li>
            <li><a href="#about_us">A propos</a></li>
            <li><a href="#reservation">Reservation</a></li>
        </ul>

        <!-----------Menu Responsive------------->

        <div class="toggle_menu">

        </div>
    </header>

    <!-----------FINHeader----------->

    <!-----------SectionSuite----------->
    <section id="home">

        <div class="left">
            <h4>Explorez Notre Nouveau Menu</h4>
            <h1>Cuisine Africaine Authentique</h1>
            <p> Découvrez une expérience culinaire exceptionnelle avec des plats préparés avec soin, mettant en valeur les saveurs authentiques de l'Afrique.</p>
            <button class="btn" type="submit"><a href="">Reserver Maintenant</a></button>
        </div>
        <div class="right">
            <img src="image/img1.png">
        </div>
        </div>
    </section>


    <!-----------SectionFIN suite----------->

    <!-----------SectionMENU----------->
    <section id="men">
        <h4 class="mini_title">Decouvrez Notre Menu</h4>
        <h2 class="title">Menu Populaire</h2>

        <div class="dishes">

            <div class="dish">
                <img src="image/img1.png" alt="">
                <p>Poulet Braise</p>
                <h2>15,10 $</h2>
                <a href="#" class="" date-content="Contenu du pop-up pour Poulet Orido">Details.d</a>
            </div>

            <div class="dish">
                <img src="image/img2.png" alt="">
                <p>Poulet Orido</p>
                <h2>12,50$</h2>
                <a href="#" class="" date-content="Contenu du pop-up pour Poulet Orido">Details.d</a>
            </div>
            <div class="dish">
                <img src="image/img3.png" alt="">
                <p>Poulet Orido</p>
                <h2>25,10 $</h2>
                <a href="#" class="" date-content="Contenu du pop-up pour Poulet Orido">Details.d</a>
            </div>
            <div class="dish">
                <img src="image/img4.png" alt="">
                <p>Poulet Orido</p>
                <h2>16,10 $</h2>
                <a href="#" class="" date-content="Contenu du pop-up pour Poulet Orido">Details.d</a>
            </div>
            <div class="dish">
                <img src="image/img5.png" alt="">
                <p>Couscous Nature</p>
                <h2>22,10 $</h2>
                <a href="#" class="" date-content="Contenu du pop-up pour Poulet Orido">Details.d</a>
            </div>
            <div class="dish">
                <img src="image/img6.png" alt="">
                <p>Riz+sauce</p>
                <h2>15,70 $</h2>

                <a href="#" class="" date-content="Contenu du pop-up pour Poulet Orido">Details.d</a>
            </div>
        </div>

        </div>


    </section>

    <!-----------APROPOS----------->
    <section id="about_us">
        <h4 class="mini_title">Apropos de nous</h4>
        <h2 class="title">Notre Histoire</h2>

        <div class="about">

            <div class="left">
                <img src="image/img-about-us.png">
            </div>
            <div class="right">
                <h3>Meilleure Cuisine au Monde</h3>
                <p>Venez vivre une expérience culinaire unique où chaque plat raconte une histoire de saveurs africaines authentiques..</p>
                <p>Découvrez l'art de la cuisine africaine traditionnelle et contemporaine dans un cadre chaleureux et accueillant.</p>
                <button><a href="#">En Savoir Plus</a></button>
            </div>


    </section>

    <!--------FIN APROPOS----------->

    <!--------Section commentaire----------->
    <div id="comment_section">
        <h4 class="mini_title">Ce que disent nos clients</h4>
        <h2 class="title">Temoignages</h2>
        <div class="comments">
            <div class="comment">
                <div>
                    <img src="image/img1.png" alt="">
                    <h4>Smith laore</h4>
                </div>
                "Une ambiance chaleureuse et des plats délicieux. Un lieu incontournable pour les amateurs de cuisine africaine."
            </div>
            <div class="comment">
                <div>
                    <img src="image/img1.png" alt="">
                    <h4>Smith laore</h4>
                </div>
                Découvrez l'art de la cuisine africaine traditionnelle et contemporaine dans un cadre chaleureux et accueillant.
            </div>
            <div class="comment">
                <div>
                    <img src="image/img1.png">
                    <h4>Smith laore</h4>
                </div>
                "Une ambiance chaleureuse et des plats délicieux. Un lieu incontournable pour les amateurs de cuisine africaine."
            </div>
        </div>


    </div>
    </div>
    </div>
    <!--------FIN SCommentaire----------->

    <!--------REservation----------->
    <section id="reservation">
        <h4 class="mini_title">Faites vos Reservation</h4>
        <h2 class="title">Reserver votre place</h2>
        <form action="traitementReservation.php" method="post">
            <label for="">Votre nom</label>
            <input type="text" name="name" required="required">
            <label for="phone">Votre numero de Telephone</label>
            <input type="text" name="number" oninput="limitInputLength()" required="required" placeholder="0123456789">
            <label for="">Date de reservation</label>
            <input type="date" name="date" min="<?php echo date('Y-m-d'); ?>">
            <textarea cols="30" rows="10" name="comment" required="required">Indiquer toutes informations supplementaires ici</textarea>

            <input type="submit" value="faire une reservation" name="submit">
        </form>

    </section>

    <!--------fIN -REservation----------->


    <!-----------SectionFIN MENU----------->

    <!-----------Footer----------->
    <footer>
        <div class="services_list">
            <div class="service">
                <img src="image/clock.png" alt="">
                <h2>Ouverture</h2>
                <p>10h30 à 23h30</p>
                <p>23h30 à 09h30</p>

            </div>
            <div class="service">
                <img src="image/pin.png" alt="">
                <h2>Adresses</h2>
                <p>France-Paris</p>
                <p>Togo-Lome</p>

            </div>
            <div class="service">
                <img src="image/email.png" alt="">
                <h2>Emails</h2>
                <p>yourdish@.com</p>
                <p>yourdish@.com</p>

            </div>
            <div class="service">
                <img src="image/email.png" alt="">
                <h2>Numbers</h2>
                <p>+337 80 12 04 05</p>
                <p>+334 12 50 74 01</p>

            </div>
            <hr>
        </div>
        <p class="footer_text">"Une ambiance chaleureuse et des plats délicieux. Un lieu incontournable pour les amateurs de cuisine africaine."
            </div><span>YourDish</span> | Tous les droits reservés</p>
    </footer>

    <!-----------Fin Footer----------->


    <script type="text/javascript" src="js/script.js">

    </script>
</body>

</html>