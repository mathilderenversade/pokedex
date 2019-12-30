<?php

class MainController extends CoreController {

   public function home(){

    $pokemons = new DBData();
    $pokemonList = $pokemons->findAll();

    $this->show('home', [
        'pokemonList'=> $pokemonList
       ]);
   } 

   public function type(){
       $types = new DBData();
       $typeList = $types->findAllTypes();

       $this->show('type', [
           'typeList'=>$typeList
       ]);
   }

   public function detail($params){
       $detail = new DBData();
       $onePokemon = $detail->findOne($params['id']);
       $typeDetail = $detail->findOneType($params['id']);

       $this->show('pokemon', [
           'detailPokemon' => $onePokemon,
           'typePokemon' => $typeDetail
       ]);
   }

   public function pokemonsByType($params){
       $pokemonsByType = new DBData;
       $oneTypeList = $pokemonsByType->findPokemonsByType($params['id']);
       //dump($oneTypeList);
       $this->show('pokemonsType', [
           'oneTypeList' => $oneTypeList,
       ]);
   }
}