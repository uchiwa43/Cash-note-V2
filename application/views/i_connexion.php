<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 27/11/2018
 * Time: 15:19
 */
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/style.css"/>
</head>
<body>
    <div id="blackback">
        <div id="connexion">
            <?php //= site_url().'<br/>' ?><?php //echo base_url().'<br/>' ?>
            <h2>
                <a href="<?php echo site_url()?>/interface_utilisateur/presentation" >Présentation de l'application</a> |
                <a href="<?php echo site_url()?>/interface_utilisateur/inscription">S'inscrire</a><br/>
            </h2>


            <img src="<?php echo base_url()?>assets/img/logo.png" id="logo"/>

            <h1>HOW TO USE</h1>

            Toute personne dont le nom est inscrit <br/> sur cette page passera de l'autre coté.

            <form method="POST" action="<?php echo site_url()?>/interface_utilisateur/main_menu">

                <table>
                    <tr>
                        <td><label>Mail : </label></td>
                        <td><input type="text" name="mail"/><br/></td>
                    </tr>

                    <tr>
                        <td><label>Mot-de-Passe : </label></td>
                        <td><input type="password" name="Password"/><br/></td>
                    </tr>
                </table>

                <input type="submit"/>
            </form>
        </div>

        <footer style="background: #000; color: white; padding: 10px">

            <div style="display: inline-block; ">
                Site réalisé en 2019-2019 par Thomas DUPORT
            </div>
            <div style="display: inline-block; padding-left: 400px">
                En cas de bugs, de propositions d'améliorations ou autre, me contacter :
                <br>
                tduport-pro@hotmail.com
            </div>

        </footer>

    </div>

</body>
</html>
