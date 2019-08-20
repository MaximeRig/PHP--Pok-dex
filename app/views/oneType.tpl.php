<?php
$pokemons = $viewArr['pokemons'];
// dd($viewArr['pokemons']);
?>

<main class="main__pokemonType">
    <div class="main__pokemon">
        <?php foreach($pokemons as $pokemon): ?>
            <a href="<?php echo $router->generate('detail', ['id' => $pokemon['numero']]); ?>" class="pokemons">
                <img class="pokemons--img" src="<?php echo $_SERVER['BASE_URI']; ?>/img/<?php echo $pokemon['numero']; ?>.png" alt="<?php echo $pokemon['nom']; ?>">
                <h2 class="pokemons--title">#<?php echo $pokemon['numero']; ?> <?php echo $pokemon['nom']; ?></h2>
            </a>
        <?php endforeach; ?>
    </div>
</main>