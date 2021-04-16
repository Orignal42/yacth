<?php include '../partials/header.php' ?>

<div class="aboutus">
<!-- Flickity HTML init -->
<div class="carousel1" data-flickity>
  <div class="carousel-cell1">
     <img src='/YatchPrestige/images/yatch6.jpg'> 
  </div>
     <div class="carousel-cell1">
        <img src='/YatchPrestige/images/yatch4.jpg'>
    </div>
  
</div>  
<div class="aboutus">
    <div class="cygnus">
     <h1>Le Cygnus</h1> <h2> Port d'attache</h2> 
    </div>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam pariatur autem est, itaque minus doloribus eius, veniam totam modi eum vel necessitatibus porro rerum, at in. Cum sequi ipsum iste.</p>

<div class="tabulations">

  <?php @include 'tab.php' ?> 

 

  </div>  

          <div class="command col-3">
          <h3>Récapitulatif de la commande</h3>
          <h4>Le Cygnus</h4>
          <p>42 mètre</p>
  
        <input type="date">
        <input type="date" >
        <select name="nbre" id="nbre">
            <option value="nbre de personnes">Choississez le nombre:</option>
            <option value="1-5">1-5</option>
            <option value="5-10">5-10</option>
            <option value="10-15">10-15</option>


          </div> 


      
</div>
<div class="dispo">
            <h3>Verifier la disponibilité</h3>
            <input type="date">
            <input type="date" >
            <button>VERIFIER</button>
            <button>BOOK NOW</button>
         </div>

<?php @include 'car.php' ?> 
<?php include "../partials/footer.php" ?>