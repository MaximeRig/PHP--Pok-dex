<?php
// ON simplifie l'écriture
$pokemon = $viewArr['pokemon'];
?>
<main class="main__detailPokemon">
    <h2 class="main__detailPokemon--title">Détail de <?php echo $pokemon[0]['nom']; ?></h2>
    <div class="detailPokemon">
        <img class="detailPokemon--img" src="<?php echo $_SERVER['BASE_URI']; ?>/img/<?php echo $pokemon[0]['numero']; ?>.png" alt="<?php echo $pokemon[0]['nom']; ?>">
        <div class="detailPokemon__description">
            <h3 class="detailPokemon--title">#<?php echo $pokemon[0]['numero']; ?> <?php echo $pokemon[0]['nom']; ?></h3>
            <div class="detailPokemon--types">
                <a href="<?php echo $router->generate('type', ['id' => $pokemon[0]['typeId']]); ?>" style="background-color:#<?php echo $pokemon[0]['typeColor'] ?>"><?php echo $pokemon[0]['typeName']; ?></a>
                <a href="<?php echo $router->generate('type', ['id' => $pokemon[1]['typeId']]); ?>" style="background-color:#<?php echo $pokemon[1]['typeColor'] ?>"><?php echo $pokemon[1]['typeName']; ?></a>
            </div>
            <h4 class="detailPokemon--subtitle" >Statistiques</h4>
            <div class="detailPokemon--table">
                <div class="row">
                    <p class="row--stateName">PV</p>
                    <p class="row--stat"><?php echo $pokemon[0]['pv'] ?></p>
                    <div class="row--percent"></div>
                </div>
                <div class="row">
                    <p class="row--stateName">Attaque</p>
                    <p class="row--stat"><?php echo $pokemon[0]['pv'] ?></p>
                    <div class="row--percent"></div>
                </div>
                <div class="row">
                    <p class="row--stateName">Défense</p>
                    <p class="row--stat"><?php echo $pokemon[0]['pv'] ?></p>
                    <div class="row--percent"></div>
                </div>
                <div class="row">
                    <p class="row--stateName">Attaque Spé</p>
                    <p class="row--stat"><?php echo $pokemon[0]['pv'] ?></p>
                    <div class="row--percent"></div>
                </div>
                <div class="row">
                    <p class="row--stateName">Défense Spé</p>
                    <p class="row--stat"><?php echo $pokemon[0]['pv'] ?></p>
                    <div class="row--percent"></div>
                </div>
                <div class="row">
                    <p class="row--stateName">Vitesse</p>
                    <p class="row--stat"><?php echo $pokemon[0]['pv'] ?></p>
                    <div class="row--percent"></div>
                </div>
            </div>
        </div>
    </div>
    <a class="main__detailPokemon--link" href="<?php //echo $router->generate('type'); ?>">retour à la liste</a>
</main>