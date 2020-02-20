<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <title>TEW - Tracteurs en Weppes - Accueil</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- BOOTSTRAP 4  -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <!-- CSS  -->
  <link rel="stylesheet" href="css/stylesheet.css">
</head>
<body>
<header>
  <?php include_once('repeat/header.php');  ?>
</header>
<main id="page" class="accueil">
  <div class="mx-auto m-3 mb-5" style="width: 90%;">
    <h2 class="text-center text-success"><ins>Bienvenue sur le site de l'association : "Tracteurs en Weppes"</ins></h2>
  </div>
  <div class="container-fluid mt-1">
    <div class="row">
      <div class="col-sm">
        <div class="embed-responsive embed-responsive-16by9 w-100">  <!--  carte  -->
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2532.298337459192!2d2.917300115639607!3d50.60299368424277!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47dd2a32dbe8ec79%3A0x79c80901d70f6112!2sInstitution%20Private%20Catholique%20Sainte-Marie!5e0!3m2!1sen!2sfr!4v1581638515229!5m2!1sen!2sfr" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>
      </div>
      <div class="col-sm">
      <div id="carouselExampleIndicators" class="carousel slide w-100" data-ride="carousel"><!-- carrousel  -->
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/Carrousel-home/img1.jpg" class="d-block w-100" alt="Tracteur1">
          </div>
          <div class="carousel-item">
            <img src="img/Carrousel-home/img2.jpg" class="d-block w-100" alt="Vieille machine">
          </div>
          <div class="carousel-item">
            <img src="img/Carrousel-home/img3.jpg" class="d-block w-100" alt="Tracteur2">
          </div>
          <div class="carousel-item">
            <img src="img/Carrousel-home/img4.jpg" class="d-block w-100" alt="Attelage">
          </div>
          <div class="carousel-item">
            <img src="img/Carrousel-home/img5.jpg" class="d-block w-100" alt="Boutique">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      </div>
      <div class="col-sm";>
        <div class="embed-responsive embed-responsive-16by9 w-100" style="height:550px"> <!-- instagram  -->
          <?php include_once('repeat/ig.php');?>  
        </div> 
      </div>
    </div>
  </div>
    <!-- 2eme ligne   -->
    <div class="container-fluid p-5"> 
      <div class="card-deck">
        <div class="card mr-0 ml-0 mb-0 programmes">
          <a href="programme.php">
            <img class="card-img-top" src="img/accueil/programme.jpg" alt="Tracteur">
          </a>  
        </div>
        <div class="card mr-0 ml-0 mb-0 membres">
          <a href="association.php">
            <img class="card-img-top" src="img/accueil/membres.jpg" alt="Membre">
          </a>  
        </div>
        <div class="card mr-0 ml-0 medias">
          <a href="media.php">
            <img class="card-img-top" src="img/accueil/media.jpg" alt="Secondaire">
          </a>
        </div>
      </div>
    </div>
  </div>
</main>
<footer>
  <?php include_once('repeat/footer.php');?>
</footer>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
<script src="js/main.js"></script>
</html>