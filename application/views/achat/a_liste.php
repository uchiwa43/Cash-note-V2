<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 27/11/2018
 * Time: 17:27
 */
?>

<h1>Achats</h1>

<div class="space_bt">

    <a href="" title="A l'aide !" >
        <img src="<?= base_url()?>/assets/img/icon-help.png" height="48"/>
    </a>


    <div id="recherche">
        <form method="POST">

            <div class="space_bt" >
                <span>Filtrer : </span><input type="submit" width="55" >
            </div> <br/>

            <div id="bloc_date" class="inl_bl valign_t">
                <input type="checkbox" name="is_date"/><label>Date d'achat:</label><br/>
                <table>
                    <tr>
                        <td><label>Début :</label></td>
                        <td><input type="date" name="date_debut"/>
                    </tr>
                    <tr>
                        <td><label>Fin :</label></td>
                        <td><input type="date" name="date_fin"/></td>
                    </tr>
                </table>
            </div>

            <div id="bloc_categorie" class="inl_bl valign_t" >
                <input type="checkbox" name="is_categorie"/>
                <label>Categorie :</label><br/>
                <select name="categorie">
                    <option value="1">Obligatoire</option>
                    <option value="2">Essence</option>
                    <option value="3">Voiture</option>
                    <option value="4">Manga</option>
                    <option value="5">Ciné</option>
                </select>
            </div>

            <!--div id="bloc_type" style="display:inline-block;vertical-align:top;" >
                <input type="checkbox" name="is_type"/>
                <label>Type :</label><br/>
                <select name="type">
                    <option value="1">Obligatoire</option>
                    <option value="2">Loisir</option>
                </select>
            </div-->

            <div id="bloc_vendeur" class="inl_bl valign_t">
                <input type="checkbox" name="is_vendeur"/>
                <label>Vendeur :</label><br/>
                <select name="vendeur">
                    <option value="1">Centre 2 - Saint-Etienne</option>
                    <option value="2">DBDH - Saint-Etienne</option>
                </select>
            </div>

        </form>
    </div>

</div>



<div id="donnees" >

    <div id="total">Total : 430€ </div>
    <div id="boutons_ajout" class="inl_bl">
        <a href="ajouter" class="push_button red_button">Ajout Achat</a>
    </div>
    <div id="boutons_ajout" class="inl_bl">
        <a href="ajoutRapide" class="push_button blue_button">Ajout rapide</a>
    </div>

    <table id="achat" class="datatable display" >
        <thead>
        <td></td>
        <td>Libelle</td>
        <td>Catégorie</td>
        <td>Etat</td>
        <td>Prix Réel/<br/>Prix prévu</td>
        <td>Moyen de<br/>payement</td>
        <td>Date d'achat<br/>Date de débit</td>
        <td>Vendeur<br/>(Entreprise/personne)</td>
        <td>Achat sur<br/>internet?</td>
        </thead>


        <tr>
            <td><a href="afficherDetail">Voir détail</a></td>
            <td>SP95</td>
            <td>Essence</td>
            <td>Prévu</td>
            <td><span class="green_label">44/45 €</span></td>
            <td>CB</td>
            <td>2018-03-26<br/><span class="red_label">Date de débit manquante</span></td>
            <td>Leclerc<br/>Firminy</td>
            <td></td>
        </tr>
        <tr>
            <td><a href="">Voir détail</a></td>
            <td>Cartes Sifr + MP17</td>
            <td>Yu-Gi-Oh</td>
            <td>Effectué</td>
            <td><span class="red_label">8/6 €</span></td>
            <td>Paypal</td>
            <td><span class="red_label">2018-03-24</span><br/>2018-03-26</td>
            <td>Cardmarket</td>
            <td><a href="https://www.cardmarket.com/fr/YuGiOh/MainPage/showShipment?idShipment=56654185" target="_blank">Oui</a></td>
        </tr>
        <tr>
            <td><a href="">Voir détail</a></td>
            <td>Boosters</td>
            <td>Yu-Gi-Oh</td>
            <td>Prévu</td>
            <td>13.5/13.5 €</td>
            <td>Liquide</td>
            <td><span class="green_label">2018-03-24</span></td>
            <td>La taverne du Gobelin Farci,<br/>Saint-étienne,<br/>Bellevue</td>
            <td></td>
        </tr>
    </table>
</div>