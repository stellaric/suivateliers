<?php
include('../sources/config.php');
?>
<?php
$connexion->query("DELETE FROM Atelier WHERE numAtelier = '".$_POST['numAtelier']."'");
header("Location: ../vues/vue-liste-ateliers.php");
?>