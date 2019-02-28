<?php
    require_once('shop.php');
    require_once('articles.php');
    require_once('calcul.php');
?>
<form action='calcul.php' method="post">
    <p>Choissisez votre produit ainsi que sa qantité</p>
    <select name='produit1'> 
        <option value="Ordinateur"><?= $ordinateur->nom ?> <?= $ordinateur->prix?> <?= $ordinateur->devise ?></option>
        <option value="Souris"><?= $souris->nom ?> <?= $souris->prix?> <?= $souris->devise ?></option>
        <option value="Clavier"><?= $clavier->nom ?> <?= $clavier->prix?> <?= $clavier->devise ?></option>
        <option value="Tablette"><?= $tablette->nom ?> <?= $tablette->prix?> <?= $tablette->devise ?></option>
    </select>
    <input name='quantity1' type='number'>
    <select name='produit2'> 
        <option value="Ordinateur"><?= $ordinateur->nom ?> <?= $ordinateur->prix?> <?= $ordinateur->devise ?></option>
        <option value="Souris"><?= $souris->nom ?> <?= $souris->prix?> <?= $souris->devise ?></option>
        <option value="Clavier"><?= $clavier->nom ?> <?= $clavier->prix?> <?= $clavier->devise ?></option>
        <option value="Tablette"><?= $tablette->nom ?> <?= $tablette->prix?> <?= $tablette->devise ?></option>
    </select>
    <input name='quantity2' type='number'>
    <select name='produit3'> 
        <option value="Ordinateur"><?= $ordinateur->nom ?> <?= $ordinateur->prix?> <?= $ordinateur->devise ?></option>
        <option value="Souris"><?= $souris->nom ?> <?= $souris->prix?> <?= $souris->devise ?></option>
        <option value="Clavier"><?= $clavier->nom ?> <?= $clavier->prix?> <?= $clavier->devise ?></option>
        <option value="Tablette"><?= $tablette->nom ?> <?= $tablette->prix?> <?= $tablette->devise ?></option>
    </select>
    <input name='quantity3' type='number'>
    <select name='produit4'> 
        <option value="Ordinateur"><?= $ordinateur->nom ?> <?= $ordinateur->prix?> <?= $ordinateur->devise ?></option>
        <option value="Souris"><?= $souris->nom ?> <?= $souris->prix?> <?= $souris->devise ?></option>
        <option value="Clavier"><?= $clavier->nom ?> <?= $clavier->prix?> <?= $clavier->devise ?></option>
        <option value="Tablette"><?= $tablette->nom ?> <?= $tablette->prix?> <?= $tablette->devise ?></option>
    </select>
    <input name='quantity4' type='number'>
    <input type='submit'>

</form>


