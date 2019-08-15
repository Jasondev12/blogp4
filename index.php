<?php
include 'models/connect.models.php';

    $views = scandir('views/');
    if(isset($_GET['page']) && !empty($_GET['page'])){
        if(in_array($_GET['page'].'.php',$views)){
            $page = $_GET['page'];
        }else{
            $page = "error";
        }
    }else{
            $page = "home";
    }

$views_models = scandir('models/');
if(in_array($page.'.models.php',$views_models)){
    include 'models/'.$page.'.models.php';
}
?>



<!DOCTYPE html>
<html>

<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.css" media="screen,projection" />
    <!--Import import.css-->
    <link href="css/import.css" rel="stylesheet">
    <!--Import font Greatvibes-->
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes&display=swap" rel="stylesheet">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
    <?php
        include"views/include/topbar.php";
    ?>

    <div class="container">
        <?php
            include 'views/'.$page.'.php';
        ?>
    </div>



    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.js"></script>
    <script type="text/javascript" src="js/script.js"></script>

    <?php
    $views_js = scandir('js/');
if(in_array($page.'.models.js',$views_js)){
    ?>
    <script type="text/javascript" src="js/<?= $page ?>.models.js"></script>
    <?php
}
    ?>
</body>

</html>
