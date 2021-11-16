<?php



require './vendor/autoload.php';

use BUILDER\Burger;
use BUILDER\BurgerBuilder;

use LUNCH\HotDog;
use LUNCH\HotDogBuilder;


$burger = new BurgerBuilder();

$burger->addBread('Pao Frances');
$burger->addPatty('Beef');
$burger->addVeggies('Pickles');
$burger->addSauces('All');
$burger->addWithExtraCheese();



echo '<pre>';

print_r($burger);

print '<hr>';

echo '</pre>';


$lanche = new HotDogBuilder();

$lanche->addPao('Pao para HotDog');
$lanche->addSalsicha('1 salsicha Sadia');
$lanche->addMostarda(true);
$lanche->addCatchup(true);
$lanche->addVinagrete('molho de tomate com cebola');
$lanche->addBatataPalha('Batata palha');
$lanche->addMilho();



echo '<pre>';

print_r($lanche);

echo '</pre>';