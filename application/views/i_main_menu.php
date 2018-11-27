<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 27/11/2018
 * Time: 15:36
 */
?>

<div class="menu" id="main_menu">
    <a href="Tirelire/t_liste.html" title="L'évolution de mon argent cette année">
        <div class="bloc_menu bloc_main color1" >
            Tirelire
        </div></a><a href="MoisEnCours/m_index.html" title="Mes dépenses, mes recettes, et le total pour ce mois">
        <div class="bloc_menu bloc_main color2">
            Bilan du mois en cours
        </div></a>
    <br/>

    <a href="<?= site_url()?>/achat/" title="Liste de toutes mes dépenses">
        <div class="bloc_menu bloc_main color2">
            Achats
        </div></a>
    <a href="Recette/r_liste.html" title="Liste de tout l'argent que j'ai reçu">
        <div class="bloc_menu bloc_main color3">
            Recettes
        </div></a>
    <br/>

    <a href="Progression/p_liste.html" title="Progression de mes achats par rapport aux limites">
        <div class="bloc_menu bloc_main color3">
            Progression des achats
        </div></a>

    <a href="<?= site_url()?>/composants/" title="Ajouter des catégories, des sites internets, des vendeurs...">
        <div class="bloc_menu bloc_main color1">
            Composants des achats et recettes
        </div></a>

    <br/>

    <a href="Utilisateurs/u_liste.html">
        <div class="bloc_menu bloc_main color1">
            Gestion des Utilisateurs
        </div></a>

    <a href="Utilisateurs/u_modif.html">
        <div class="bloc_menu bloc_main color2">
            Modifier mon compte
        </div></a>
    <br/>
</div>
