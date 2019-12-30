<?php


class CoreController {
    // méthode show
    // en protected permet aux classes filles d'utiliser cette méthode, mais va interdire son usage depuis l'extérieur
    // 1er argument de show est le nom de la vue, le 2e argument est le tableau contenant les données à afficher par la vue - la clé de ce tableau est un choix discrétionnaire que nous faisons -> cette clé sera utilisé par l'extract dans le CoreController qui transformera cette clé en variable.
    protected function show($viewName, $viewData = [])
    {   
        // on définit cette variable pour que nos vues puissent mettre le lien de la page courante en avant
        // Toutes nos données dynamiques à utiliser dans les vues se trouveront dans $viewData (par souci de simplification)
        $viewData['currentPage'] = $viewName;
        // déclare des variables dont le nom correspond aux clés du tableau passé en argument
        // chaque variable prend la valeur correspondante dans le tableau
        extract($viewData);
        //dump($viewData);

        // __DIR__ vaut /var/www/html/S05/..../controllers
        require __DIR__ . '/../views/header.tpl.php';
        // on inclut une vue selon la valeur du paramètre $viewName
        require __DIR__ . '/../views/' . $viewName . '.tpl.php';
        require __DIR__ . '/../views/footer.tpl.php';
    }
}