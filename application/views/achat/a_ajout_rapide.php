<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 30/11/2018
 * Time: 17:28
 */
?>
<a href="index">Retour</a>

<h1>Ajout rapide d'achat</h1>

<form method="get" action="" class="cadre_centre" id="ar_achat">
    <table>
        <tr>
            <td><label>Achat<span class="red_label">*</span> : </label></td>
            <td><select name="achat">
                    <option value="1">Essence</option>
                    <option value="2">Telephone</option>
                    <option value="3">Prélèvement Banque</option>
                    <option value="4">Assurance </option>
                </select></td>
        </tr>
        <tr>
            <td>Vendeur<span class="red_label">*</span></td>
            <td><select name="vendeur" id="vendeur">
                    <option value="1">Ne sais pas encore</option>
                    <option value="2">Red by SFR</option>
                    <option value="3">Caisse d'Epargne</option>
                    <option value="4">Macif</option>
                </select></td>
        </tr>
        <tr>
            <td><label>Date d'achat prévue (début) <span class="red_label">*</span>: </label></td>
            <td><input type="date" name="date_achat_prevue_debut"/></td>
        </tr>
        <tr>
            <td><label>Date d'achat prévue (fin) <span class="red_label">*</span>: </label></td>
            <td><input type="date" name="date_achat_prevue_fin"/></td>
        </tr>
        <tr>
            <td><label>Prix prévu <span class="red_label">*</span>: </label></td>
            <td><input type="number" name="valeur_prevue"/></td>
        </tr>
        <tr id="div_essence">
            <td>Quantité :</td>
            <td><input type="number" name="quantite"/></td>
        </tr>
    </table>

    <input type="submit"/>
</form>

