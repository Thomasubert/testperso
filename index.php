<?php


function chargerClasse($classe){

    require $classe . '.php';

}

spl_autoload_register('chargerClasse');

$luke = new Personnage(Personnage::FORCE_MOYENNE);
$vador = new Personnage(Personnage::FORCE_PETITE);

var_dump($vador);
var_dump($luke);


$vador->frapper($luke);  // $perso2 frappe $perso1
$vador->gagnerExperience(); // $perso2 gagne de l'expérience

$luke->frapper($vador);
$luke->gagnerExperience();

echo 'Luke a ', $luke->force(), ' de force, contrairement à Vador qui a ', $vador->force(), ' de force.<br />';
if($luke->experience() == $vador->experience()){

    echo "Même expérience";
}else{
    echo 'Luke a ', $luke->experience(), ' d\'expérience, contrairement à Vador qui a ', $vador->experience(), ' d\'expérience.<br />';

}

echo "<br>";

$vador::parler();

$luke->parler();

echo "<br>";

$luke->parler();
    
    
echo 'Luke a ', $luke->degats(), ' de dégâts, contrairement à Vador qui a ', $vador->degats(), ' de dégâts.<br />';

