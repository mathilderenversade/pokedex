<h1> Détails de <?=$detailPokemon['nom']; ?> </h1>
<div class='containerDetail'>
    <div class='blockImage'>
        <img src="<?= $_SERVER['BASE_URI'] ?>/img/<?=$detailPokemon['numero'];?>.png">
    </div>
    <div class='itemDetail'>
        <h2>#<?=$detailPokemon['numero'];?> <?= $detailPokemon['nom'] ;?> </h2>
        <?php
foreach ($typePokemon as $typePokemon['']=>$type) : ;?>
    <a href="<?= $_SERVER['BASE_URI'] ?>/types-pokemon/<?=$type['id'];?>">
    <div class="typeItem" style="background-color:#<?=$type['color'];?>" >
        <h4><?=$type['name'];?> </h4>
    </a>
    </div>
<?php endforeach ;?>
        <h2> Statistiques </h2>
            <table>
                <tbody>
                    <tr>
                        <td><h4> PV </h4></td>
                        <td><?=$detailPokemon['pv'];?></td>
                        <td>
                            <div class='progressBar'>
                                <div class='progressBarDetail' style='width:<?=$detailPokemon['pv'];?>px'>
                                </div> 
                            </div>
                        </td>
                    </tr>
        
                    <tr>
                        <td><h4> Attaque </h4></td>
                        <td><?=$detailPokemon['attaque'];?></td>
                        <td>
                            <div class='progressBar'>
                                <div class='progressBarDetail' style='width:<?=$detailPokemon['attaque'];?>px'>
                                </div> 
                            </div>
                        </td>
                    </tr>
                
                    <tr>
                        <td><h4> Défense </h4></td>
                        <td><?=$detailPokemon['attaque'];?></td>
                        <td>
                            <div class='progressBar'>
                                <div class='progressBarDetail' style='width:<?=$detailPokemon['defense'];?>px'>
                                </div> 
                            </div>
                        </td>
                    </tr>
                
                    <tr>
                        <td><h4> Attaque Spé. </h4></td>
                        <td><?=$detailPokemon['attaque_spe'];?></td>
                        <td>
                            <div class='progressBar'>
                                <div class='progressBarDetail' style='width:<?=$detailPokemon['attaque_spe'];?>px'>
                                </div> 
                            </div>
                            </td>
                    </tr>
                
                    <tr>
                        <td><h4> Défense Spé. </h4></td>
                        <td><?=$detailPokemon['defense_spe'];?></td>
                        <td>
                            <div class='progressBar'>
                                <div class='progressBarDetail' style='width:<?=$detailPokemon['defense_spe'];?>px'>
                                </div> 
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td><h4> Vitesse </h4></td>
                        <td><?=$detailPokemon['vitesse'];?></td>
                        <td>
                            <div class='progressBar'>
                                <div class='progressBarDetail' style='width:<?=$detailPokemon['vitesse'];?>px'>
                                </div> 
                            </div>
                        </td>
                    </tr>
        
                </tbody>
            </table>
    </div>  
</div>
<a id="backLink" href="<?= $_SERVER['BASE_URI'] ?>"> Revenir à la liste </a>

