<?php

// Start global page
global $activeHeader;
$activeHeader = '_ABOUT';
global $titleDocument;
$titleDocument = 'Página de inicio';
include('../controller/server.php');

$schoolCode = isset($_GET['txtSchoolCode']) ? $_GET['txtSchoolCode'] : '';
$schoolCode_error = true;
$menuCode = isset($_GET['txtMenuCode']) ? $_GET['txtMenuCode'] : '';
$menuCode_error = true;

?>

<!DOCTYPE html>
<html lang="en">
<?php include('./components/head.php'); ?>

<body>
    <?php include('./components/headergeneral.php'); ?>
    <ul class="cards">
  <li>
    <a href="" class="card">
      <img src="https://i.imgur.com/7lHVA4t.jpg" class="card__image" alt="" />
      <div class="card__overlay">
        <div class="card__header">
          <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                     
          <div class="card__header-text">
            <h3 class="card__title">Alejandra Guirales</h3>            
            <span class="card__status">Desarrolladora Aprendiz</span>
          </div>
        </div>
        <p class="card__description">Amante a los gatitos, me gusta jugar videojuegos y leer thrillers</p>
      </div>
    </a>      
  </li>
  <li>
    <a href="" class="card">
      <img src="https://imgur.com/lz2Fdd4.jpg" class="card__image" alt="" />
      <div class="card__overlay">        
        <div class="card__header">
          <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                 
          <div class="card__header-text">
            <h3 class="card__title">Daniel Camilo Montoya</h3>
            <span class="card__status">Desarrollador Semi senior React</span>
          </div>
        </div>
        <p class="card__description">Apasionado con todo, menos las fiestas y el trago. Mi mejor momento es beber un café y escuchar podcasts</p>
      </div>
    </a>
  </li>
  <li>
    <a href="" class="card">
      <img src="https://imgur.com/IIzz8yH.jpg" class="card__image" alt="" />
      <div class="card__overlay">
        <div class="card__header">
          <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                     
          <div class="card__header-text">
            <h3 class="card__title">David Fernando Briceño</h3>
            <span class="card__status">Desarrollador junior</span>
          </div>
        </div>
        <p class="card__description">Cree en ti mismo en algún momento serás recomendado sin dudar de las cosas</p>
      </div>
    </a>
  </li>
</ul>
</body>