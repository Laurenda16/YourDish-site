<?php
include 'connect.php';
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $number = $_POST['number'];
    $date = $_POST['date'];
    $comment = $_POST['comment'];

    $sql = " insert into `reservation` (name,number,date,comment) values('$name', '$number', '$date', '$comment')";
    $result = mysqli_query($con, $sql);

    if ($result) {
        //  echo "Data inserted successfully";
        header('location:index.php');
    } else {
        die(mysqli_error($con));
    }
}

?>
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
            <p><span>Your</span>Dish</p>
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
            <h4>Notre Nouveau Menu</h4>
            <h1>CUISINE AFRICAINE</h1>
            <p> Itaque ad facere voluptatum sequi illum pariatur, fugiptatibus dolore aperiam rerum ea magnam consectetur.</p>
            <button class="btn" type="submit"><a href="">Commander Maintenant</a></button>
        </div>
        <div class="right">
            <img src="image/img1.png">
        </div>
        </div>
    </section>


    <!-----------SectionFIN suite----------->

    <!-----------SectionMENU----------->
    <section id="men">
        <h4 class="mini_title">Notre Menu</h4>
        <h2 class="title">Menu Populaire</h2>

        <div class="dishes">

            <div class="dish">
                <img src="image/img1.png" alt="">
                <p>Poulet Orido</p>
                <p>25,10 $</p>
                <a href="#">Detail..</a>
            </div>

            <div class="dish">
                <img src="image/img2.png" alt="">
                <p>Poulet Orido</p>
                <h2>25,10 $</h2>
                <a href="#">Detail..</a>
            </div>
            <div class="dish">
                <img src="image/img3.png" alt="">
                <p>Poulet Orido</p>
                <h2>25,10 $</h2>
                <a href="#">Detail..</a>
            </div>
            <div class="dish">
                <img src="image/img4.png" alt="">
                <p>Poulet Orido</p>
                <h2>25,10 $</h2>
                <a href="#">Detail..</a>
            </div>
            <div class="dish">
                <img src="image/img5.png" alt="">
                <p>Poulet Orido</p>
                <h2>25,10 $</h2>
                <a href="#">Details</a>
            </div>
            <div class="dish">
                <img src="image/img6.png" alt="">
                <p>Poulet Orido</p>
                <h2>25,10 $</h2>
                <a href="#">Plat</a>
            </div>

        </div>


    </section>

    <!-----------APROPOS----------->
    <section id="about_us">
        <h4 class="mini_title">Apropos de nous</h4>
        <h2 class="title">Quoi choisir?</h2>

        <div class="about">

            <div class="left">
                <img src="image/img-about-us.png">
            </div>
            <div class="right">
                <h3>Meilleure Cuisine au Monde</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores facilis nesciunt accusamus praesentium, recusandae corporis obcaecati dolor nulla quasi sapiente, itaque molestiae voluptate distinctio hic maxime culpa qui, explicabo ipsam.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam sapiente architecto autem, laborum quaerat cupiditate debitis amet alias voluptas obcaecati, inventore corporis aperiam quia soluta. Ipsa nesciunt quibusdam consequuntur explicabo!
                    Consequatur voluptatibus doloribus laudantium, blanditiis nam quibusdam saepe voluptate labore velit perspiciatis pariatur praesentium. Obcaecati quibusdam minima aperiam totam. Nisi aspernatur natus possimus obcaecati voluptate quidem iste totam atque asperiores.</p>
                <button><a href="#">Plus Infos</a></button>
            </div>


    </section>

    <!--------FIN APROPOS----------->

    <!--------Section commentaire----------->
    <div id="comment_section">
        <h4 class="mini_title">Commentaire</h4>
        <h2 class="title">Des commentaires sur nous</h2>
        <div class="comments">
            <div class="comment">
                <div>
                    <img src="image/img1.png" alt="">
                    <h4>Smith laore</h4>
                </div>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Itaque facilis delectus ullam. Quibusdam, dicta incidunt neque, quas voluptates dolores assumenda distinctio hic illum, provident veniam esse! Laborum minus accusantium molestias.
            </div>
            <div class="comment">
                <div>
                    <img src="image/img1.png" alt="">
                    <h4>Smith laore</h4>
                </div>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Itaque facilis delectus ullam. Quibusdam, dicta incidunt neque, quas voluptates dolores assumenda distinctio hic illum, provident veniam esse! Laborum minus accusantium molestias.
            </div>
            <div class="comment">
                <div>
                    <img src="image/img1.png">
                    <h4>Smith laore</h4>
                </div>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Itaque facilis delectus ullam. Quibusdam, dicta incidunt neque, quas voluptates dolores assumenda distinctio hic illum, provident veniam esse! Laborum minus accusantium molestias.
            </div>
        </div>
    </div>
    <!--------FIN SCommentaire----------->

    <!--------REservation----------->
    <section id="reservation">
        <h4 class="mini_title">Reservation</h4>
        <h2 class="title">Pour votre reservation</h2>
        <form action="" method="post">
            <label for="">Votre nom</label>
            <input type="text" name="name">
            <label for="">Votre numero </label>
            <input type="number" name="number" min="5">
            <label for="">Date de reservation</label>
            <input type="date" name="date">
            <textarea name="" id="" cols="30" rows="10" name="comment">

            </textarea>
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
        <p class="footer_text">Repris par <span>Laurenda Edorh</span> | Tous les droits reservés</p>
    </footer>

    <!-----------Fin Footer----------->


    <script type="text/javascript" src="js/script.js">

    </script>
</body>

</html>