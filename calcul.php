<?php
require_once('index.php');
require_once('articles.php');

if(isset($_POST{'produit1'}))
{
    if($_POST != NULL){
        $value = ($_POST['produit1']);
        echo($value);
    }
    else{
        $value = 0;
    }
}
if(isset($_POST{'produit2'}))
{
    if($_POST != NULL){
        $value = ($_POST['produit2']);
        echo($value);
    }
    else{
        $value = 0;
    }
}
if(isset($_POST{'produit3'}))
{
    if($_POST != NULL){
        $value = ($_POST['produit3']);
        echo($value);
    }
    else{
        $value = 0;
    }
}
if(isset($_POST{'produit4'}))
{
    if($_POST != NULL){
        $value = ($_POST['produit4']);
        echo($value);
    }
    else{
        $value = 0;
    }
}
if(isset($_POST{'product1_quantity'}))
{
    if($_POST != NULL){
        $value = ($_POST['product1_quantity']);
        echo($value);
    }
    else{
        $value = 0;
    }
}
if(isset($_POST{'product2_quantity'}))
{
    if($_POST != NULL){
        $value = ($_POST['product2_quantity']);
        echo($value);
    }
    else{
        $value = 0;
    }
}
if(isset($_POST{'product3_quantity'}))
{
    if($_POST != NULL){
        $value = ($_POST['product3_quantity']);
        echo($value);
   }
    else{
        $value = 0;
    }
}
if(isset($_POST{'product4_quantity'}))
 {
     if($_POST != NULL){
         $value = ($_POST['product4_quantity']);
         echo($value);
     }
     else{
         $value = 0;
    }
 }

$calcul = [];
$theProduit = [];

for($i = 1; $i<=4; $i ++){
    $calcul[] = $_POST['produit'.$i];
    $theProduit[] = $_POST['product'.$i.'_quantity'];
}
$total = 0;

foreach($calcul as $key => $product){
    $total += (new $product())->prix * $theproduit[$key] * 1/(new $product())->articles->devise;
}
echo($total);