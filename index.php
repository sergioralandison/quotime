<?php include('header.php'); ?>

<!--Pseudo-container des deux parties-->
<div class="align-items-center d-flex flex-row vw-100 vh-100">

  <!--Partie menu de gauche-->
  <div class="position-fixed d-inline-block fa-rotate-90 l-text">
    <p class="d-inline">projects.</p>
    <p class="d-inline">templates.</p>
    <p class="d-inline">donate us.</p>
  </div>

  <!--Partie de gauche avec logo-->
  <div class="w-50 h-100 box-left">
    <div>
      <p class="logo position-fixed">quotime’</p>
    </div>
    <div>
      <i class="fa fa-long-arrow-left position-fixed l-arrow"></i>
    </div>
  </div>

  <div class="fixed-bottom text-bottom-l">
    <p class="d-text d-inline">Say hello! - </p>
    <p class="d-inline"><a href="mailto:hi@quotime.com">hi@quotime.co</a></p>
  </div>

  <!--Partie de droite avec un background-img-->
  <div class="w-50 h-100 bg-secondary box-right">

    <!--Partie en haut à droite avec îcone de recherche et menu-->
    <button class="btn text-white btn-bars fixed-top"><i class="fa fa-bars"></i></button>
    <button class="btn text-white btn-search fixed-top"><i class="fa fa-search"></i></button>

    <!-- Partie en bas à droite avec les icônes à liens externes -->
    <p class="follow-text fixed-bottom">Follow us</p>
    <a href="https://dribbble.com/" class="btn btn-dribble text-white fixed-bottom"><i class="fa fa-dribbble"></i></a>
    <a href="https://www.instagram.com/" class="btn btn-ins text-white fixed-bottom"><i class="fa fa-instagram"></i></a>
    <a href="https://www.facebook.com/" class="btn btn-fb text-white fixed-bottom"><i class="fa fa-facebook"></i></a>

    <!--Flèche de droite-->
    <div>
      <i class="fa fa-long-arrow-right position-fixed r-arrow"></i>
    </div>
  </div>
</div>

<!--Partie de la photo principale au centre-->
<div class="vw-100 vh-100 position-absolute d-flex justify-content-center align-items-center style1">
  <div class="main-photo bg-dark">
    <div class="btn-more">
      <i class="fa fa-circle-o-notch w3-xlarge fa-rotate-90 icon-circle">
        <i class="fa fa-plus w3-large icon-plus position-relative"></i>
      </i>
    </div>
  </div>
</div>

<!--Partie de la sous-citation-->
<div class="vw-100 vh-100 position-absolute d-flex justify-content-center align-items-center style2">
  <h2 class="under-quote">Be your kind of</h2>
</div>

<!--Partie de la citation-->
<div class="vw-100 vh-100 position-absolute d-flex flex-column justify-content-center align-items-center style1">
  <div class="block-text">
    <p class="title-quote">Beautiful</p>
    <div class="under-text">
      <p>Generate your own</p>
      <p>quotes with beautiful</p>
      <p>stock images.</p>
    </div>

  </div>
</div>
</div>

<?php include('footer.php'); ?>
