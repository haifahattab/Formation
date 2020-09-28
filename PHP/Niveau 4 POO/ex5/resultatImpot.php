<?php
include('impot.php');
if (isset($_GET["submit"])) {
    $personne1 = new impot($_GET["nom"], $_GET["revenu"]);
    $personne1->calculeImpot();
    $personne1->afficheImpot();
}
?>
