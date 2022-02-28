<?php
include('../sources/config.php');
?>

<?php 
//$clients= $reponse ->fetch();
//var_dump($clients);
$reponse = $connexion->query("SELECT * FROM Client INNER JOIN  Participation ON Client.numClient = Participation.numClient WHERE numAtelier ='".$_POST['numAtelier']."' " );



?>
<!---->	
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
        <a href="vues/vue-profil.php">Profil</a>
        <a href="../controleurs/ctrl-deconnecter.php"> Déconnexion</a>
</div>
    </nav>
    <!---->
    <table class="table-style">
<?php echo ('')?>
<thead>
    <tr>
        <th>Numéro</th>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Email</th>
        <th>Téléphone</th>
        
    </tr>
</thead>           

<tbody>
        <?php while($client = $reponse ->fetch()){?>
                <tr class="alert" role="alert">
                  <th scope='row'><?php echo $client['numClient']?></th>
                  <td><?php echo $client['nomClient']?></td>
                  <td><?php echo $client['prenomClient']?></td>
                  <td><?php echo $client['emailClient']?></td>
                  <td><?php echo $client['telClient']?></td>
  
        <?php } ?>
              </tr>   
        </tbody>
        <br>
        
</div>
<div style="width: 340px;
    margin: 50px auto;
    background: rgb(0 0 0 / 16%);
    box-shadow: 0px 2px 2px rgb(42 41 41 / 75%);
    margin-bottom: 98px;
    padding: 18px;
    text-align: center;">
    
    <a href="vue-liste-ateliers.php" style="color: white;text-decoration:auto">Retour</a>
</body>
</html>

