<?php
include('../sources/config.php');
?>

<!DOCTYPE html>

<head>
    <title>SuivAteliers</title>
   	 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="styles/styles.css" rel="stylesheet" type='text/css'>
        <link rel="icon" type="image/x-icon" href="/images/favicon.ico">


</head>

<body >

 <!--Barre de Menu -->
 
    <nav>
       <h1> SuivAteliers</h1>
<div class="onglets">
        <a href="../sbateliers/index.php">Espace Client</a>
      
</div>
    </nav>
<!---->

<header>
<div class="cadre">
    <h1>Connexion</h1>

   <?php
   if (isset($_GET['login_err']))
   {
       $err= htmlspecialchars($_GET['login_err']);
       switch($err)
       {
           case'mdpResp':
            ?>
             <div class="alert alert-danger">
                                <strong>Erreur</strong> Mot de passe incorrect
                            </div>
                            <?php
                        break;

             case 'loginResp':
                        ?>
            <div class="alert alert-danger">
                  <strong>Erreur</strong> Login incorrect
                     </div>
                    <?php
                     break;

                 case 'already':
                    ?>
                    <div class="alert alert-danger">
                      <strong>Erreur</strong> <br>Identifiant ou Mot de passe  incorrects
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">  <span aria-hidden="true">&times;</span>
                             </button>
                                </div>
                            <?php
                            break;
       }
   }
   ?>


  <form action="controleurs/ctrl-connecter.php" method="post">
                 
                <div class="form-group">
                    <input type="text" name="loginResp" class="form-control" placeholder="Pseudo" required="required" autocomplete="off">
                </div>
                <br>
                <div class="form-group">
                    <input type="password" name="mdpResp" class="form-control" placeholder="Mot de passe" required="required" autocomplete="off">
                </div>
                <br>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Connexion</button>
                </div>   
            </form>
</div>
</header>

<section>

</section>





</body>
</html>