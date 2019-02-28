<?php
    require_once('shop.php');
    require_once('articles.php');
    require_once('calcul.php');
?>
<form action='calcul.php' method="post">
    <p>Choissisez votre produit ainsi que sa qantité</p>
    <select name='produit1'> 
        <option value="Ordinateur">Nom = <?= $ordinateur->nom ?> Prix = <?= $ordinateur->prix?> Cours du Dollar par rapport à l'euro = <?= $Dollar->valeur ?></option>
        <option value="Souris">Nom = <?= $souris->nom ?> Prix = <?= $souris->prix?> Cours de l'euro par rapport à l'euro = <?= $EUR->valeur ?></option>
        <option value="Clavier">Nom = <?= $clavier->nom ?> Prix = <?= $clavier->prix?> Cours du Livre par rapport à l'euro = <?= $Livre->valeur ?></option>
        <option value="Tablette">Nom = <?= $tablette->nom ?> Prix = <?= $tablette->prix?> Cours du Yen par rapport à l'euro = <?= $Yen->valeur ?></option>
    </select>
    <input name='product1_quantity' type='number'>
    <select name='produit2'> 
        <option value="Ordinateur">Nom = <?= $ordinateur->nom ?> Prix = <?= $ordinateur->prix?> Cours du Dollar par rapport à l'euro = <?= $Dollar->valeur ?></option>
        <option value="Souris">Nom = <?= $souris->nom ?> Prix = <?= $souris->prix?> Cours de l'euro par rapport à l'euro = <?= $EUR->valeur ?></option>
        <option value="Clavier">Nom = <?= $clavier->nom ?> Prix = <?= $clavier->prix?> Cours du Livre par rapport à l'euro = <?= $Livre->valeur ?></option>
        <option value="Tablette">Nom = <?= $tablette->nom ?> Prix = <?= $tablette->prix?> Cours du Yen par rapport à l'euro = <?= $Yen->valeur ?></option>
    </select>
    <input name='product2_quantity' type='number'>
    <select name='produit3'> 
        <option value="Ordinateur">Nom = <?= $ordinateur->nom ?> Prix = <?= $ordinateur->prix?> Cours du Dollar par rapport à l'euro = <?= $Dollar->valeur ?></option>
        <option value="Souris">Nom = <?= $souris->nom ?> Prix = <?= $souris->prix?> Cours de l'euro par rapport à l'euro = <?= $EUR->valeur ?></option>
        <option value="Clavier">Nom = <?= $clavier->nom ?> Prix = <?= $clavier->prix?> Cours du Livre par rapport à l'euro = <?= $Livre->valeur ?></option>
        <option value="Tablette">Nom = <?= $tablette->nom ?> Prix = <?= $tablette->prix?> Cours du Yen par rapport à l'euro = <?= $Yen->valeur ?></option>
    </select>
    <input name='product3_quantity' type='number'>
    <select name='produit4'> 
        <option value="Ordinateur">Nom = <?= $ordinateur->nom ?> Prix = <?= $ordinateur->prix?> Cours du Dollar par rapport à l'euro = <?= $Dollar->valeur ?></option>
        <option value="Souris">Nom = <?= $souris->nom ?> Prix = <?= $souris->prix?> Cours de l'euro par rapport à l'euro = <?= $EUR->valeur ?></option>
        <option value="Clavier">Nom = <?= $clavier->nom ?> Prix = <?= $clavier->prix?> Cours du Livre par rapport à l'euro = <?= $Livre->valeur ?></option>
        <option value="Tablette">Nom = <?= $tablette->nom ?> Prix = <?= $tablette->prix?> Cours du Yen par rapport à l'euro = <?= $Yen->valeur ?></option>
    </select>
    <input name='product4_quantity' type='number'>
    <input type='submit'>
</form>


