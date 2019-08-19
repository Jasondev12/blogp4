<nav class="blue-grey darken-4">
    <div class="container">
        <div class="nav-wrapper">
            <a href="index.php?page=home" class="brand-logo">Jean Forteroche</a>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
                <li class="<?php echo ($page=="home")?"active" : ""; ?>"><a href="index.php?page=home">ACCUEIL</a></li>
                <li class="<?php echo ($page=="blog")?"active" : ""; ?>"><a href="index.php?page=blog">BLOG</a></li>
                <li class="<?php echo ($page=="apropos")?"active" : ""; ?>"><a href="index.php?page=apropos">A PROPOS</a></li>
                <li class="<?php echo ($page=="Dashboard") ?>"><a href="controllers/index.php?page=dashboard">ADMINISTRATION</a></li>
            </ul>
        </div>
        <ul class="sidenav" id="mobile-demo">
            <li class="<?php echo ($page=="home")?"active" : ""; ?>"><a href="index.php?page=home">Accueil</a></li>
            <li class="<?php echo ($page=="blog")?"active" : ""; ?>"><a href="index.php?page=blog">Blog</a></li>
            <li class="<?php echo ($page=="apropos")?"active" : ""; ?>"><a href="index.php?page=apropos">A propos</a></li>
            <li class="<?php echo ($page=="Dashboard") ?>"><a href="controllers/index.php?page=dashboard">Dashboard</a></li>
        </ul>
    </div>
</nav>
