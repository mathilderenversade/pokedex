<?php

class DBData
{
    private $pdo;

    /**
     *  Connexion à la base de données
     */
    public function __construct()
    {
        $dsn = 'mysql:dbname=pokedex;host=localhost;charset=UTF8;port=3308';
        $username = 'XXXXX'; 
        $password = 'XXXXX';
        // J'ajoute une option qui me permet d'avoir les erreurs directement en Warning dans PHP
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
        ];
        $this->pdo = new PDO($dsn, $username, $password, $options);
    }
    /**
     * Get the value of nom
     */ 
    public function findAll()
    {
        $sql = 'SELECT *
        FROM pokemon 
        ORDER BY `numero`';
		
		$pdoStatement = $this->pdo->query($sql);
		
        $pokemonList = $pdoStatement->fetchAll(PDO::FETCH_ASSOC);
        
        return $pokemonList;
    }

    public function findAllTypes()
    {
        $sql = 'SELECT *
        FROM `type`
        ORDER BY `name`';
        $pdoStatement = $this->pdo->query($sql);
        $typeList = $pdoStatement->fetchAll(PDO::FETCH_ASSOC);
        return $typeList;
    }

    public function findOne($id)
    {
        $sql = 'SELECT *
        FROM `pokemon`
        WHERE `numero`= '.$id ;
        $pdoStatement = $this->pdo->query($sql);
        $pdoStatement->setFetchMode(PDO::FETCH_ASSOC);
        $onePokemon = $pdoStatement->fetch();
        return $onePokemon;
    }

    public function findOneType($id){
        $sql = 'SELECT *
        FROM `pokemon_type`
        INNER JOIN `type` ON `type`.`id` = `type_id`
        WHERE `pokemon_numero`='.$id ;
        $pdoStatement=$this->pdo->query($sql);
        $typeDetail=$pdoStatement->fetchAll(PDO::FETCH_ASSOC);
        //dump($typeDetail);
        return $typeDetail;
    }

    /**
     * findPokemonsByType cette fonction renvoie un tableau contenant les infos liées aux pokemons en fonction du type rentré en id.
     *
     * @param  string $id = l'id est le nom du type donc une string
     *
     * @return void
     */
    public function findPokemonsByType($id) {
      $sql ='SELECT * 
      FROM `pokemon_type`
      INNER JOIN `pokemon` ON `numero` = `pokemon_numero`
      INNER JOIN `type` ON `type`.`id` = `type_id`
      WHERE `type_id` ='.$id ;

      $pdoStatement=$this->pdo->query($sql);
      $pokemonsByType = $pdoStatement->fetchAll(PDO::FETCH_ASSOC);
      return $pokemonsByType; 
    }
}