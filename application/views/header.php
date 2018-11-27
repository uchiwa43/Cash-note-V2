<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <!--mon custom css-->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/style.css?refresh=0"/>

    <!--Jquery-->
    <script
            src="https://code.jquery.com/jquery-3.3.1.js"
            integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
            crossorigin="anonymous"></script>
    <!--Plugin DataTable-->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready( function () {
            $('.datatable').DataTable();
        } );
    </script>
    <!-- -->

</head>
<body>

    <header class="space_bt">
        <a href="<?php echo site_url()?>/interface_utilisateur/main_menu" title="Retourner sur le menu principal"  style="vertical-align: baseline">
            <img src="<?php echo base_url()?>assets/img/logo-icon.png" />
        </a>

        <div id="connecte" >

            tduport-pro@hotmail.com
            <br/>
            <a href="<?php echo site_url()?>/interface_utilisateur/">Me déconnecter</a>
        </div>

    </header>