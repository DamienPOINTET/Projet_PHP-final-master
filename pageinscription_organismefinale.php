<!DOCTYPE html>
<html>
<meta charset = "UTF-8">
<head>
	<title>CompFundation | Recherche</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="font-awesome-4.5.0/css/font-awesome.css">
	<link rel="stylesheet" href="font-awesome-4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="font-awesome-4.5.0/css/font-awesome-animation.css">
	<link rel="stylesheet" href="font-awesome-4.5.0/css/font-awesome-animation.min.css">
	<link rel="shortcut icon" type="image/x-icon" href="img/favicon2.ico" />
</head>
<body>
	<div class="header">
		<a href="index.php"><img class="logo" src="img/logo2.png"></a>
		<h1>Bien chercher pour bien trouver</h1>
	</div>
	<nav class="test">
		<ul>
			<li><a class="item faa-parent animated-hover" href="index.php"><i class="fa fa-home faa-burst"></i> Accueil</a></li>
  			<li>
  				<a class="item faa-parent animated-hover" href="#"><i class="fa fa-plus-square faa-burst"></i> Inscription</a>
  				<ul>
  					<li><a href="pageinscription_organismefinale.php">Organisme</a></li>
  					<li><a href="pageinscription_intervenant.php">Intervenant</a></li>
  				</ul>
  			</li>
  			<li>
    			<a class="item faa-parent animated-hover"  href="#"><i class="fa fa-search faa-burst"></i> Recherche</a>
    			<ul>
      				<li><a href="rechercheO.php">Organisme</a></li>
      				<li><a href="rechercheI.php">Intervenant</a></li>
    			</ul>
  			</li>
  			<li><a class="item faa-parent animated-hover" href="contact.php"><i class="fa fa-envelope faa-burst"></i> Contact</a></li>
		</ul>
	</nav>
</head>
<body>
 <?php 
  $dbconn= mysqli_connect('localhost','root', 'mitou140597');
  mysqli_select_db($dbconn, 'recherche_emploie');
  $nom='';
  $email='';
  $telephone='';
  $codepostal='';
  $ville='';
  $statutcotisation=0;
  
   if (count($_POST) > 0)
   {
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $codepostal = $_POST['codepostal'];
    $ville = $_POST['ville'];
    $statutcotisation = $_POST['statutcotisation'];
    $requeteOrganisme = "INSERT INTO organisme(org_nom, org_email, org_telephone, org_codepostal, org_ville, org_statutcotisation) VALUES ('".$nom."', '".$email."', '".$telephone."', '".$codepostal."', '".$ville."', '".$statutcotisation."')";
	mysqli_query($dbconn,$requeteOrganisme);
  }
 ?>
  <form method="post" action="index.php" class="formulaire_organisme">
  
<label for="nom"><i class="fa fa-user"></i> Nom</label> :<input type="text" name="nom" id="nom" value="<?php print($nom); ?>"/><br /></br>
			<label for="adresse"><i class="fa fa-globe"></i> Adresse</label> :<input type="text" name="adresse" id="adresse" /></br/></br>
			<label for="codepostal"><i class="fa fa-map-signs"></i> Code Postal</label> :<input type="number" name="codpostal" id="codepostal" value="<?php print($codepostal); ?>"/><br /></br><label for="ville"> <i class="fa fa-building"></i> Ville</label> :<input type="text" name="ville" id="ville" VALUE="<?php print($ville); ?>"/></br/></br>
			<label for="telephone"><i class="fa fa-phone"></i> Numéro de téléphone</label> :<input type="number" name="telephone" id="telephone" value="<?php print($telephone); ?>"/><br /></br>
			<label for="email"><i class="fa fa-envelope"></i> Email</label> :<input type="text" name="email" id="email" value="<?php print($email); ?>"/><br/></br>
            <label for="statutcotisation"><i class="fa fa-money"></i> Statut cotisation</label> :<input type="number" name="statutcotisation" id="statutcotisation" value="<?php print($statutcotisation); ?>"/><br />
  <div class="bouton_annuler">
   </br>
    <input type="reset" value="Annuler" onclick="document.location.href='pageinscription.php'"/></a>
    <input type="submit" value="Valider" /></a>
   </div>
  </form>
 </body>
</html>