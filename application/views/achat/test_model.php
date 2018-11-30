<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 30/11/2018
 * Time: 20:29
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

    <div id="total">Total : <?= $total->valeur_totale?>€ </div>
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

        <?php foreach ($achats as $achat){
            echo "
            <tr>
                <td><a href=\"afficherDetail\">Voir détail</a></td>
                <td>".$achat->libelle."</td>
                <td>$achat->categorie</td>
                <td>$achat->etat</td>
                <td><span class=\"green_label\">$achat->reel/$achat->prevu €</span></td>
                <td>$achat->moyen_payement</td>
                <td>$achat->date_achat_reelle<br/><span class=\"red_label\">$achat->date_debit</span></td>
                <td>$achat->vendeur</td>
                <td></td>
        </tr>
        ";
        }?>


    </table>
</div>