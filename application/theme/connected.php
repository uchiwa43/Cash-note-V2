<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 28/11/2018
 * Time: 15:18
 */
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="<?= $charset?>">
        <title><?= $titre?> </title>

        <!--mon custom css-->
        <link rel="stylesheet" href="<?php echo base_url()?>assets/css/style.css"/>

        <!--css DataTable-->
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.css">

        <?php foreach ($css as $url){
            echo ' <link rel="stylesheet" type="text/css" media="screen" href=" '. $url .' "> ';
        }?>

    </head>

    <body>

        <?php include_once('header.php')?>

        <div id="contenu">
            <?php echo $output; ?>
        </div>

        <?php include_once('footer.php')?>

        <!--Jquery-->
        <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>

        <!--JS DataTable-->
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>
        <script>
            $(document).ready( function () {
                $('.datatable').DataTable();
            } );
        </script>

    </body>
</html>
