<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="studentlife.css">
    <link rel="stylesheet" href="css/style.css" />
</head>
<body>
    <header>
   
    </div>
       <a id="logo" href="index.php">
         <img src="img/isik.png" alt="Logo" />
       </a>
       <?php
      
       if(isset($_SESSION["username"])){
       $navbar='<nav>
         <ul>
           <li><a href="presentation.php">Our Institute</a></li>
           <li><a href="studentlife.php">Student Life</a></li>
           <li><a href="forum1.php">Forum</a></li>
           <li><a href="logout.php">Logout</a></li>
           <li><span> Hello, ' . $_SESSION["username"] . '</span></li>
         </ul>
       </nav>';
       } else  {
         $navbar='<nav>
         <ul>
           <li><a href="presentation.php">Our Institute</a></li>
           <li><a href="">Student Life</a></li>
           <li><a href="forum1.php">Forum</a></li>
           <li><a href="login1.php">Sign in</a></li>
         </ul>
       </nav>';
       }
       echo $navbar;
       ?>
       </header>
    <div class="left">
      
       
        <h1 class="title1">Activités culturelles</h1>
   <p class="paragraph2">La vie etudiantine a pour mission d’offrir le cadre nécessaire à l’engagement, l’éducation et le développement de l’esprit de recherche chez les étudiants. Il s’emploie aussi à développer un environnement à même d’optimiser leur expérience universitaire et de les préparer à servir l’administration des finances. Notre objectif principal consiste à offrir aux étudiants des conditions propices au développement de leur vie estudiantine et de leur milieu professionnel.</p>
<p class="paragraph2">A l’Institut  Supérieur d’Informatique du Kef, on a 4 clubs :</p>
<ul class="liste">
<li>Club Microsoft</li>
<li>Club foot garçons</li>
<li>Club hand garçons</li>
<li>Club hand filles</li>
</ul>   
     </div>
     
</body>
</html>