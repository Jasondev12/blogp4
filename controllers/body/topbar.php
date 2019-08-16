<nav class="blue-grey darken-4">
    <div class="container">
        <div class="nav-wrapper">
            <a href="index.php?page=home" class="brand-logo">Administration</a>

            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>

            <ul class="right hide-on-med-and-down">
                <li class="<?php echo ($page=="dashboard")?"active" : ""; ?>"><a href="index.php?page=dashboard"><i class="material-icons right">Tableau de bord</i></a></li>
            </ul>
        </div>
        <ul class="sidenav" id="mobile-demo">
            <li class="<?php echo ($page=="dashboard")?"active" : ""; ?>"><a href="index.php?page=dashboard"><i class="material-icons">Tableau de bord</i></a></li>
        </ul>
    </div>
</nav>
