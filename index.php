<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Aymeric Thomas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

  <div class="navbar">
    <a href="formulaire.html"><button class="envoyer"><p class="avis">Avis</p></button></a>
  </div>
  

<h2 class="titre-spe">Ma première page</h2>
<h1>WEB.</h1>

<a href="#home"><img src="https://static.thenounproject.com/png/496855-200.png" class="img-scoll"/></a>

<section id="home">
<h2 class="titre-spe">1) Présentation</h2>
</section>

<p class="p-spe">Je m'appelle Aymeric Thomas, j'ai 16 ans.
Je suis en classe de Première (P3) à Louis Vincent.
Je provient du collège George de la Tour Metz.</p>

<h2 class="titre-spe">2) Les moyennes du premier trimestre des trois spécialités</h2>

<p class="p-spe">Mes moyennes du premier trimestre dans mes trois spécialités sont :</p>

<table class="tableau-styliser">
  <thead>
    <tr>
      <th>Matières</th>
      <th>Moyennes</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Mathématique</td>
      <td>13</td>
    </tr>
    <tr>
      <td>Physique-Chimique    </td>
      <td>12</td>
    </tr>
    <tr>
      <td>Numérique et sciences informatiques    </td>
      <td>16</td>
    </tr>
  </tbody>
</table>

<h2 class="titre-spe">3) Loisirs préférés</h2>

<p class="p-spe">Mes loisirs préférés sont :</p>

<div class="card">
    <img src="https://cdn.discordapp.com/attachments/1068560900002422897/1069241996113346580/media-img_1.jpg"/>
    <div class="card-details">
      <h2 class="card-head"><strong>La musique</strong></h2>
      <p><i>que ce soit en écouter (rap, rock...) mais aussi en pratiquer (piano, guitare)</i><br><br></p>
    </div>
</div>

<br>
<br>

<div class="card">
    <img src="https://i.imgur.com/Qfa7yQ8.png"/>
    <div class="card-details">
      <h2 class="card-head"><strong>Les technologies</strong></h2>
      <p><i>que ce soit dans la découverte de celle-ci, mais aussi par l'utilisation</i><br><br></p>
    </div>
</div>

<h2 class="titre-spe">4) Dernier(s) film(s) vu(s) au cinéma ou série(s) vue(s) sur la plate-forme</h2>

<div class="carrousel">

  <div class="mySlides affiche">
    <img class="img-slide" src="https://images.omerlocdn.com/resize?url=https%3A%2F%2Fgcm.omerlocdn.com%2Fproduction%2Fglobal%2Ffiles%2Fimage%2Ffe855630-a5f6-4c5f-a07a-7fcbf0702ccb.JPG&width=1024&type=jpeg&stripmeta=true" style="width:100%">
    <div class="text_carrousel">Avatar 2</div>
  </div>

  <div class="mySlides affiche">
    <img class="img-slide" src="https://images.caradisiac.com/images/3/3/4/3/193343/S0-route-de-nuit-baby-driver-l-enfance-de-l-art-cinematographique-698112.jpg" style="width:100%">
    <div class="text_carrousel">Baby Driver</div>
  </div>

  <div class="mySlides affiche">
    <img class="img-slide" src="https://static.cnews.fr/sites/default/files/styles/image_750_422/public/top_gun_maverick_63a304bb58dda_0.jpg?itok=zvBi4LlR" style="width:100%">
    <div class="text_carrousel">Top Gun</div>
  </div>


  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div> 

<script>
  let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
} 
</script>

<p class="p-spe">AVATAR 2 : LA VOIE DE L’EAU raconte l'histoire des membres de la famille Sully (Jake, Neytiri et leurs enfants), les épreuves auxquelles ils sont confrontés, les chemins qu’ils doivent emprunter pour se protéger les uns les autres, les batailles qu’ils doivent mener pour rester en vie et les tragédies qu'ils endurent.</p>

<a href="https://youtu.be/VKi10HFRhgM"><p class="p-spe">Bande Annonce.</p></a>

<p class="p-spe">BABY DRIVER : Le jeune Baby (Ansel Elgort) a perdu ses parents dans un accident de voiture dont il aura hérité des acouphènes. Il n’a pas été dégoûté du volant pour autant. Et pour cause, il est devenu chauffeur VTC pour une bande de gangsters à la solde de Doc (Kevin Spacey). Baby fait tourner les moteurs pendant que Buddy (Jon Hamm), Darling (Eiza González) et Griff (Jon Bernthal) dévalisent.

Baby n’a pas la moindre intention d’en faire sa vie. Ce qui a le don d’énerver Griff.</p>

<a href="https://youtu.be/lX5iuGbQcZw"><p class="p-spe">Bande Annonce.</p></a>

<p class="p-spe">TOP GUN : Lors d’une manoeuvre, le Lieutenant Bill Cortell dit « Cougar » (John Stockwell) et le Lieutenant Pete Mitchell (Tom Cruise) dit « Maverick » sont pris en chasse par deux MIG. Cougar panique alors que Maverick, au prix d’une belle pirouette, se permet de faire un pied de nez au pilote ennemi. C’est presque à contre-coeur que le Commandant Tom Jardian dit « Stinger » (James Tolkan) envoie Maverick et son second Nick Bradshaw dit « Goose » (Anthony Edwards) à Miramar, l’école d’élite de l’aviation de chasse américaine.</p>    

<a href="https://youtu.be/T0TylN8e5hI"><p class="p-spe">Bande Annonce.</p></a>

<p>Bonjour <?php echo $_POST['Nom']; ?> </p>

</body>
</html>