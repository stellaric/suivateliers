<?php
include('../sources/config.php');
?>
<!--formulaire authentification php -->
<?php
session_start();
$reponse = $connexion->query('SELECT * FROM ResponsableAteliers');
$responsables = $reponse->fetchall();

if (isset($_POST['loginResp']) && isset($_POST['mdpResp'])) {
    $loginResp = htmlspecialchars($_POST['loginResp']);
    $mdpResp = htmlspecialchars($_POST['mdpResp']);

 #vérifier si l'email et mdp de l'utilisateur est correcte si elle est correcte , 
#elle renvoie à la vue liste atelier

    for ($i=0;$i< count($responsables);$i++){
        if ($loginResp == $responsables[$i]['loginResp']){
            if ($mdpResp == $responsables[$i]['mdpResp']){
                session_start();
                $_SESSION['numResp'] = $responsables[$i]['numResp'];
                $_SESSION['nomResp'] = $responsables[$i]['nomResp'];
                $_SESSION['prenomResp'] = $responsables[$i]['prenomResp'];
                header('Location:../vues/vue-liste-ateliers.php');
                exit;
            }
        }
    }

      #si l'email/mdp est incorrecte, elle renvoie à la page de connexion 
    for ($i=0; $i <count($responsables);$i++){
        if ($loginResp != $responsables[$i]['loginResp'] && $mdpResp != $responsables[$i]['mdpResp']){
            header('Location:../index.php?login_err=already');
        }
    }
}
else{
    //var_dump($utilisateurs);
    header('Location:../index.php?login_err=already');
  }
?>