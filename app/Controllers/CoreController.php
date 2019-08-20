<?php

/***
 * Clas parent des Controllers
 */

class CoreController {

    protected $router;

    /***
     * Initialisation de $router pour l'utiliser dans les views
     */

    public function __construct($router) {

        $this->router = $router;

    }

    protected function show($viewName, $viewArr=[]) {

        // Récupération de $router
        $router = $this->router;

        // Inclusion des vues
        include __DIR__.'/../views/header.tpl.php';
        include __DIR__.'/../views/'.$viewName.'.tpl.php';
        include __DIR__.'/../views/footer.tpl.php';

    }

}