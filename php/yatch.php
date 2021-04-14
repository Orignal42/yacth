<?php include '../partials/header.php' ?>



<section id="yatch">
</div class="map">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d84354.91238563794!2d-2.07717140477443!3d48.64637408983663!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x480e81102126bf5d%3A0xf8e97dadb22be12d!2sSaint-Malo!5e0!3m2!1sfr!2sfr!4v1618391278850!5m2!1sfr!2sfr" width="1500" height="600" margin="10"  loading="lazy"></iframe>
</div>
    <div class="formulaire">
    <input type="text" value="destination">
    <input type="date"></input>
    <input type="date" ></input>

    <label for="taille"></label>
    <select name="taille" id="taille">
    <option value="5m-10m">Choississez la taille:</option>
    <option value="5m-10m">5m-10m></option>
    <option value="10m-20m">10m-20m></option>
    <option value="20m-30m">21m-30m></option>
    <option value="30m-40m">31m-40m></option>
    <option value="40m-50m">41m-50m></option>
    <option value="40m-50m">+50m</option>.
    </select>
    <button>RECHERCHER</button>

</div>
<div class="recherche">
    <h1>Résultat de votre recherche</h1>
    <p>ou voir les Yatchs disponibles</p>
</div>
<div class="filtre">
    <h2><FONT color="orange">Filtrer<br> la selection</FONT></h2>
    <p>TAILLE DU BATEAU &#x25B2; &#x25BC;</p>
    <p>POINT D'ACHAT&#x25B2; &#x25BC;</p>
    <p>PERS. A BORD&#x25B2; &#x25BC;</p>
    DISPONIBILITE <input type="checkbox">


</div>


<div class="cards">
<?php for($i=0 ;$i<12 ; $i++) {      
    echo "
    <div class='col-4'>
    <img src='/YatchPrestige/images/yatch3.jpg'>
        <p >&#12991;</p>
        <h3>Le vent debout-62m</h3>
        <p><FONT color='green'>Disponible</FONT> minimum 7 jours</p>
        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, sed explicabo molestiae dolorum, nostrum itaque deleniti, sunt aliquam odio aspernatur reprehenderit neque fugit dolore quis. Commodi ea aliquam iusto eligendi!
        </p>
        <p>👥15  &#x2693; St malos</p>
        <button>Book now</button>
        </div>
        ";}?>
        </div>
        <div class="infos">

        <p>Pour tout yatch louer la caisse de chateau lapompe offerte</p>
        </div>
        </div>
        <div class="pub">Coca cola</div>

</section>


<?php include "../partials/footer.php" ?>