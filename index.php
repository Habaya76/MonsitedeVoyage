<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <title>Mon site de voyage</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
   <header>
       <div class="wrapper">
        <h1>Noumou Voyage<span class="point">.</span></h1>
            <nav>
                <ul>
                    <li><a href="#main_image">Accueil</a></li>
                    <li><a href="#steps">Destinations</a></li>
                    <li><a href="#posibilities">Circuits</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
       </div>
   </header>
      <section id="main_image">
        <div class="wrapper">
            <h2>Organisez votre  <br><strong> voyage sur mesure</strong></h2>
            <a href="#" class="button1">Par ici</a>

        </div>
      </section>

      <section id="steps">
        <div class="wrapper">
            <ul>
                <li id="step_1">
                    <h4>Planifier</h4>
                    <p>
                        Confiez-nous vos rêves d'évasion : en famille ou entre amis, nous trouverons la formule qui comblera vos attentes.
                    </p>
                </li>
                <li id="step_2">
                    <h4>Organiser</h4>
                    <p>Bénéficiez de l'expertise de nos spécialistes de chaque destination, ils vous accompagnent dans la réalisation de votre voyage.</p>
                </li>
                <li id="step_3">
                    <h4>Voyager</h4>
                    <p>Nous nous chargeons d'assurer votre sérénité tout au long de votre voyage.</p>
                </li>
                <div class="clear"></div>
            </ul>
        </div>
      </section>

      <section id="possibilities">
        <div class="wrapper">
            <article style="background-image: url(image/article-image-1.jpg);">
                <div class="overlay">
                    <h4>Partez en famille</h4>
                    <p><small>Offrez le meilleur à ceux que vous aimez et partagez des moments fabuleux!</small></p>
                    <a href="#" class="button2">Plus d'infos</a>
                </div>      
            </article>
            <article style="background-image: url(image/article-image-2.jpg);">
                <div class="overlay">
                    <h4>Envie de s'evader</h4>
                    <p><smal>Parfois un peu d'évasion serait le bienvenue et ferait le plus grand bien!</smal></p>
                    <a href="#" class="button2">Plus d'infos</a>
                 </div>
            </article>
            <div class="clear"></div>
        </div>
      </section>

      <section id="contact">
        <div class="wrapper">
            <h3>Contactez-nous</h3>
            <p>
                Chez Travel Agency nous savons que voyager est une aventure humaine mais 
                également un engagement financier important pour vous.
                C'est pourquoi nous mettons un point d'honneur à
                prendre en compte chacune de vos attentes pour 
                vous aider dans la préparation de votre séjour, 
                circuit ou voyage sur mesure.
           </p>
           <form >
                <label for="name">Nom</label>
                <input type="text" id="name" placeholder="votre nom">

                <label for="email">Email</label>
                <input type="text" id="email" placeholder="votre email">

                <input type="submit" value="OK" class="button3">
           </form>

        </div>
      </section>
      <div class="clear"></div>

   <footer>
       <div class="wrapper">
        <h1>Noumou Voyage<span class="point">.</span></h1>
        <div class="copyright">Copyright @ 2016. Tous droit reservés</div>

       </div>
   </footer> 
</body>
</html>