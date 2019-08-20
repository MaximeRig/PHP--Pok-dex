<?php

/***
 * Affiche la page Home et 404
 */

class MainController extends CoreController {

    public function home() {

        // Instanciation de DBdata
        $dbdata = new DBdata();

        $pokemons = $dbdata->getPokemon();

        $this->show('home', [
            'title' => 'Mon Pokédex',
            'pokemons' => $pokemons
        ]);

    }

}