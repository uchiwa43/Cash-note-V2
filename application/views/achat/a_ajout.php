<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 30/11/2018
 * Time: 13:30
 */
?>
<a href="index">Retour</a>

<h1>Ajouter achat</h1>

<form method="get" action="a_liste.html" class="cadre_centre" id="ajout_achat">
    <table>
        <tr>
            <td><label>Libellé<span class="red_label">*</span> : </label></td>
            <td><input type="text" name="libelle" required/></td>
        </tr>
        <tr>
            <td><label>Catégorie<span class="red_label">*</span> : </label></td>
            <td><select name="categorie">
                    <option value="1">Autre</option>
                    <option value="2">Essence</option>
                    <option value="3">Manga</option>
                    <option value="4">Cinéma</option>
                </select></td>

        </tr>
        <tr>
            <td><label>Etat<span class="red_label">*</span> : </label></td>
            <td><select name="etat">
                    <option value="1">Effectué</option>
                    <option value="2">Prévu</option>
                    <option value="0">Supprimé</option>
                </select></td>
        </tr>
        <tr>
            <td><label>Moyen de payement<span class="red_label">*</span> : </label></td>
            <td><select name="moyen_payement">
                    <option value="1">Carte bancaire</option>
                    <option value="2">Liquide</option>
                    <option value="3">Ne sais pas</option>
                </select></td>
        </tr>
        <tr>
            <td><label>Prix d'achat réel : </label></td>
            <td><input type="number" name="valeur_reelle" /></td>
        </tr>
        <tr>
            <td><label>Prix d'achat prévu : </label></td>
            <td><input type="number" name="valeur_prevue" /></td>
        </tr>
        <tr>
            <td><label>Date d'achat réelle : </label></td>
            <td><input type="date" name="date_achat_reelle" /></td>
        </tr>

        <tr>
            <td><label>Date de sortie : </label></td>
            <td><input type="date" name="date_sortie" /></td>
        </tr>
        <tr>
            <td><label>Date d'achat prévue (début) : </label></td>
            <td><input type="date" name="date_achat_prevue_debut" /></td>
        </tr>
        <tr>
            <td><label>Date d'achat prévue (fin) : </label></td>
            <td><input type="date" name="date_achat_prevue_fin" /></td>
        </tr>
        <tr>
            <td><label>Entreprise/personne qui vend<span class="red_label">*</span> : </label></td>
            <td><select name="entreprise_personne">
                    <option value="1">Centre 2 - Saint-étienne - Bellevue</option>
                    <option value="2">Des Bulles et des hommes - Saint-étienne - Bellevue</option>
                    <option value="3">Lucile</option>
                </select></td>
        </tr>
        <tr>
            <td><label>Commentaire : </label></td>
            <td><textarea name="commentaire" rows="4" cols="50"></textarea></td>
        </tr>
        <tr>
            <td><label>Quantité : </label></td>
            <td><input type="number" name="quantite" /></td>
        </tr>
        <tr id="div_prix_unite">
            <td>Prix à l'unité :</td>
            <td><input type="text" name="prix_unite" /></td>
        </tr>
    </table>



    <input type="checkbox" id="is_internet" />Achat par internet

    <fieldset id="div_internet">
        <table>
            <tr>
                <td><label>Nom du site internet : </label></td>
                <td><select name="site_internet">
                        <option value="1">YuGiOh CardMarket</option>
                        <option value="2">Amazon</option>
                        <option value="3">Cool anime stuff</option>
                    </select></td>
            </tr>
            <tr>
                <td><label>Adresse URL du produit : </label></td>
                <td><input type="text" name="url_produit" /></td>
            </tr>
            <tr>
                <td><label>Date d'envoi : </label></td>
                <td><input type="date" name="date_envoi" /></td>
            </tr>
            <tr>
                <td><label>Periode réception prévue : </label></td>
                <td><input type="text" name="periode_reception_prevue" /></td>
            </tr>
            <tr>
                <td><label>Date de reception : </label></td>
                <td><input type="date" name="date_reception" /></td>
            </tr>
            <tr>
                <td><label>Durée du transport : </label></td>
                <td><input type="text" name="duree" /></td>
            </tr>
        </table>

    </fieldset>
    <br/>

    <fieldset id="div_pnl">
        <legend>Payement non liquide</legend>
        <label>Date de débit : </label><input type="date" name="date_debit"/>
    </fieldset>
    <br/>

    <fieldset id="div_essence">
        <legend>Essence</legend>
        <label>Nombre de kilomètres parcourus : </label><input type="text" name="date_debit"/>
    </fieldset>
    <br/>

    <div class="form_submit">
        <input type="submit"/>
    </div>
</form>