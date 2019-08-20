<?php 
    // Siplification de l'écriture
    $pokemons = $viewArr['pokemons'];
    // dd($pokemons);
?>
<main class="main">
    <div class="main__pokemon">
        <?php foreach($pokemons as $pokemon): ?>
            <a href="<?php echo $router->generate('detail', ['id' => $pokemon->getnumero()]); ?>" class="pokemons">
                <img class="pokemons--img" src="<?php echo $_SERVER['BASE_URI']; ?>/img/<?php echo $pokemon->getNumero(); ?>.png" alt="<?php echo $pokemon->getName(); ?>">
                <h2 class="pokemons--title">#<?php echo $pokemon->getNumero(); ?> <?php echo $pokemon->getName(); ?></h2>
            </a>
        <?php endforeach; ?>
    </div>
</main>