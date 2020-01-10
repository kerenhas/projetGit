<?php
include 'index.php';

?>
<!DOCTYPE html>

<html>

  <head>
    <title>Titre affiché dans la barre de titre du navigateur</title>
  </head>

  <body>
  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img1.jfif" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img2.jfif" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img3.jfif" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
  </body>

</html>