<h4> Cliquez sur un type pour voir tous les Pokémons de ce type </h4>

<div class="container">
<?php
foreach ($typeList as $typeList['']=>$type) : ;?>
    <a href="<?= $_SERVER['BASE_URI'] ?>/types-pokemon/<?=$type['id'];?>">
    <div class="typeItem" style="background-color:#<?=$type['color'];?>" >
        <h4><?=$type['name'];?> </h4>
        </a>
    </div>
<?php endforeach ;?>
</div>