<div class="container">
<?php
foreach ($pokemonList as $pokemonList['']=>$pokemon) : ;?>
    <div class="item">
    <a href="<?= $_SERVER['BASE_URI'] ?>/pokemon/<?=$pokemon['numero'];?>">
        <img src="<?= $_SERVER['BASE_URI'] ?>/img/<?=$pokemon['numero'];?>.png">
            <div class="name">
                <h4>#<?=$pokemon['numero'];?> <?= $pokemon['nom'] ;?>
            </div> 
    </a>   
    </div>
<?php endforeach ;?>
</div>


