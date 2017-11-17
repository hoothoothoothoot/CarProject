<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $pagetitle; ?></title>
    </head>
    <body>
        <nav>
            <a href ="http://webinfo.iutmontp.univ-montp2.fr/~rabesonw/CarProject/index.php?action=read">Car home page</a>
            <a href ="http://webinfo.iutmontp.univ-montp2.fr/~rabesonw/CarProject/index.php?action=read&controller=utilisateur">User home page</a>
            <a href ="http://webinfo.iutmontp.univ-montp2.fr/~rabesonw/CarProject/index.php?action=read&controller=trajet">Journey home page</a>
        </nav>
        <?php
        // Si $controleur='voiture' et $view='list',
        // alors $filepath="/chemin_du_site/view/voiture/list.php"
        $filepath = File::build_path(array("view", $controller, "$view.php"));
        require $filepath;
        ?>
    </body>
    <footer>
        <p style="border: 1px solid black; text-align:right; padding-right:1em;">Carpool of Hoot</p>
    </footer>
</html>
