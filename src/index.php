<?php

require '../vendor/autoload.php';

use Petrik\PivarcsiGergelyMate\Halloween\Models\Esemeny;
use Petrik\PivarcsiGergelyMate\Halloween\Models\Lako;

$lako1 = new Lako("Bodri");
$lako2 = new Lako("Erdő");
$lako3 = new Lako("Gergely");
$lako4 = new Lako("Marcell");

$resztvevok = array($lako1, $lako2, $lako3, $lako4);

$esemeny1 = new Esemeny("Kísértetjárta kastélytúra", $lako1, $resztvevok, new DateTime());
$esemeny2 = new Esemeny("Halállaza hullámvasút", $lako4, $resztvevok, new DateTime());

echo $esemeny1->getNev();
?>