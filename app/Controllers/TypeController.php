<?php

/***
 * Affiche la page des types de pokemons
 */

class TypeController extends CoreController {

    public function types() {

        // ON récupère les types
        $dbdata = new DBdata();
        $pokemonTypes = $dbdata->GetPokemonTypes();

        $this->show('types', [
            'title' => 'Types de Pokémons',
            'pokemonTypes' => $pokemonTypes
        ]);

    }

    public function oneType($urlParams) {

        // ON récupère les types
        $dbdata = new DBdata();
        $pokemonDetails = $dbdata->getTypeId($urlParams['id']);
        

        $this->show('oneType', [
            'title' => 'Pokémons : ',
            'pokemons' => $pokemonDetails
        ]);

    }

}