<?php
include('../sources/config.php');
?>

<?php 
//$clients= $reponse ->fetch();
//var_dump($clients);
$reponse = $connexion->query("SELECT * FROM ResponsableAteliers ='".$_POST['numResp']."' " );
?>

<!--HTML-->
<!DOCTYPE html>
<head>
    <title>SuivAteliers</title>
   	 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="../styles/styles.css" rel="stylesheet" type='text/css'>
        <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
        
       

</head>

<body>
<!--Barre navigateur du site suivi Atelier  -->
<nav>
       <h1> SuivAteliers</h1>
<div class="onglets">
        <a href="vue-liste-ateliers.php">Liste Ateliers</a>
        <a href="vue-profil.php">Profil</a>
        <a href="../controleurs/ctrl-deconnecter.php"> Déconnexion</a>
        
       </div>
    </nav>
    <!---->

<div class="cadre">
    <p>EN CONSTRUCTION</p>
    <a href="vue-liste-ateliers.php">Retour</a>
</div>

</body>
</html>
