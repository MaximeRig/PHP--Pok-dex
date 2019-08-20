<?php
$types = $viewArr['pokemonTypes'];
// dd($types);
?>
<main class="main__types">
    <h2 class="main__types--title">Cliquez sur un type pour voir tous les Pokémons de ce type</h2>
    <div class="main__types--colors">
        <?php foreach($types as $type): ?>
            <div class="color" style="background-color:#<?php echo $type->getColor(); ?>">
            <a class="link" href="<?php echo $router->generate('type', ['id' => $type->getId()]) ?>"><?php echo $type->getName(); ?></a>
            </div>
        <?php endforeach; ?>
    </div>
</main>