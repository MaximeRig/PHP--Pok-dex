<?php
class DBData
{
    private $pdo;

    /**
     *  Connexion à la base de données
     */
    public function __construct()
    {
        $dsn = 'mysql:dbname=pokedex;host=localhost;charset=UTF8';
        $username = 'pokedex';
        $password = 'pokedex';
        // J'ajoute une option qui me permet d'avoir les erreurs directement en Warning dans PHP
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
        ];
        $this->pdo = new PDO($dsn, $username, $password, $options);
    }


    /***
     * Récupération des infos des pokemons
     */
    public function getPokemon() {

        // Requête
        $sql = '
            SELECT *
            FROM `pokemon`;
        ';

        // Exécution de la requête
        $pdoStatement = $this->pdo->query($sql);
        
        // Configuration de l'objet PDOStatement
        $pdoStatement->setFetchMode(PDO::FETCH_CLASS, 'Pokemon');

        $pokemons = $pdoStatement->fetchAll();

        
        return $pokemons;

    }


    /***
     * Récupération des types de pokemons
     */
    public function GetPokemonTypes() {

        // Requête
        $sql = '
            SELECT *
            FROM `type`;
        ';

        // Exécution de la requête
        $pdoStatement = $this->pdo->query($sql);
        
        // Configuration de l'objet PDOStatement
        $pdoStatement->setFetchMode(PDO::FETCH_CLASS, 'Types');

        $types = $pdoStatement->fetchAll();
        
        return $types;

    }

    /***
     * Récupération d'un type donné
     */
    public function getTypeId($pokemonType) {

        // Requête => pokemon_numero AS pokemonNum
        $sql = '
            SELECT pokemon.*
            FROM `pokemon`
            JOIN `pokemon_type` ON pokemon.numero = pokemon_type.pokemon_numero
            WHERE pokemon_type.type_id ='.$pokemonType;

        // Exécution de la requête
        $pdoStatement = $this->pdo->query($sql);
        
        $pokemonDetails = $pdoStatement->fetchAll(PDO::FETCH_ASSOC);

        return $pokemonDetails;

    }

    /***
     * Récupération d'un pokemon donné
     */

    public function getOnePokemon($pokemonNum) {

        // pokemon_numero AS pokemonNum
        // SELECT pokemon.*
        // FROM `pokemon`
        // JOIN `pokemon_type` ON pokemon.numero = pokemon_type.pokemon_numero
        // WHERE pokemon.numero = '.$pokemonNum;
        $sql = '
            SELECT pokemon.*,
            type.id AS typeId,
            type.name AS typeName,
            type.color AS typeColor
            FROM `pokemon_type`
            JOIN pokemon ON pokemon.numero = pokemon_type.pokemon_numero
            JOIN type ON pokemon_type.type_id = type.id
            WHERE pokemon_type.pokemon_numero ='.$pokemonNum;
            
        
        $pdoStatement = $this->pdo->query($sql);

        $pokemon = [];
        $row = $pdoStatement->fetch(PDO::FETCH_ASSOC);
        while ($row) {
            $pokemon[] = $row;
            $row = $pdoStatement->fetch(PDO::FETCH_ASSOC);
        }

        return $pokemon;

    }
}