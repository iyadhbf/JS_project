<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>presentation</title>
    <link rel="stylesheet" href="presentation.css">
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
          <li><a href="studentlife.php">Student Life</a></li>
          <li><a href="forum1.php">Forum</a></li>
          <li><a href="login1.php">Sign in</a></li>
        </ul>
      </nav>';
      }
      echo $navbar;
      ?>
      </header>
    <h1 class="title1">Présentation</h1>
        
	<p><span class="text">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size: medium;">L&rsquo;Institut&nbsp; Sup&eacute;rieur  d&rsquo;Informatique du Kef a &eacute;t&eacute; cr&eacute;e selon le d&eacute;cret n&deg;06-1587 du 6 juin 2006 portant  cr&eacute;ation d&rsquo;&eacute;tablissements &nbsp;d&rsquo;enseignement  sup&eacute;rieur et de recherche.</span><br /> <span class="text">&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<span style="font-size: medium;"><br /> En effet, l&rsquo;ISIKef est l&rsquo;une des &eacute;tablissements universitaires  de l&rsquo;universit&eacute; de Jendouba.<br /><br /> </span></span></span></p>
<h2><span style="font-size: large;">Responsables :</span></h2>
<p>&nbsp;</p>
<strong>Directeur&nbsp;:</strong> Mr. Hayouni Mohamed<br /> <strong>Secr&eacute;taire g&eacute;n&eacute;ral&nbsp;:</strong> Mr. KHAMMASSI AISSA<br /><br /><span class="text"><span style="font-size: medium;">
<h2 class="titre">Cordonn&eacute;es :</h2>
<p>&nbsp;</p>
</span></span> <strong>Adresse&nbsp;:</strong> 5 rue Salah Ayache 7100 Le Kef<br /> <strong>T&eacute;l&eacute;phone&nbsp;:</strong> 78&nbsp;201&nbsp;056&nbsp;&nbsp;&nbsp; Fax&nbsp;: 78&nbsp;200&nbsp;237<br /> <strong>Site web :</strong> www.isikef.rnu.tn<br /><br /><span style="font-size: medium;"><span class="text"><span class="text"><span style="font-size: medium;"><strong><span style="text-decoration: underline;"><br /><br /></span></strong></span></span> </span></span><span style="font-size: medium;"><span class="text"> </span></span><ol> </ol> 
<ul>
</ul>
<ol> </ol><span class="text"><span style="font-size: medium;"><strong><span style="text-decoration: underline;"><br /></span></strong></span></span>   
      </div>
</body>
</html>