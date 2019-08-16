<nav class="blue-grey darken-4">
    <div class="container">
        <div class="nav-wrapper">
            <a href="index.php?page=dashboard" class="brand-logo">Administration</a>

            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>

            <ul class="right hide-on-med-and-down">
                <li class="<?php echo ($page=="dashboard")?"active" : ""; ?>"><a href="index.php?page=write"><i class="material-icons right">edit</i></a></li>
                <li class="<?php echo ($page=="write")?"active" : ""; ?>"><a href="index.php?page=dashboard"><i class="material-icons right">dashboard</i></a></li>

                <li><a href="../index.php?page=home">Quitter</a></li>
                <li><a href="index.php?page=logout">Déconnexion</a></li>
            </ul>
        </div>
        <ul class="sidenav" id="mobile-demo">
            <li class="<?php echo ($page=="dashboard")?"active" : ""; ?>"><a href="index.php?page=dashboard">Tableau de bord<i class="material-icons">dashboard</i></a></li>
            <li class="<?php echo ($page=="write")?"active" : ""; ?>"><a href="index.php?page=write">Publier un article<i class="material-icons">edit</i></a></li>
        </ul>
    </div>
</nav>
