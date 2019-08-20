<?php

/***
 * Affiche la page d'un pokemon
 */

class DetailController extends CoreController {

    public function detail($urlParams) {

        $dbdata = new DBdata();

        $pokemon = $dbdata->getOnePokemon($urlParams['id']);


        $this->show('detail', [
            'title' => $pokemon[0]['nom'],
            'pokemon' => $pokemon
        ]);

    }

}