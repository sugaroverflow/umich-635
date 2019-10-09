<?php

/*
 * We are going to build a game that uses functions to get data and battle pokemon
 * We will have a function that will randomly select a pokemon
 * Another function will provide the strength of the pokemon
 * A final function will provide the battle results
 */


function startPokemonJourney($trainer, $starter="Pikachu") {
    echo "\n\n-------------------------\n";
    echo "Welcome to the world of Pokemon, $trainer!\n";
    return $starter;
}

function randomPokemonSelector() {
    $list_of_pokemon = array (
        "Bulbasaur","Charmander","Squirtle","Metapod","Pidgey", "Pikachu","Sandshrew", "Clefairy", "Zubat","Poliwag", "Bellsprout","Ponyta","Gengar","Krabby",
    );
    $rand_keys = array_rand($list_of_pokemon, 3);
    $new_array = array();
    foreach ($rand_keys as $key) {
        array_push($new_array, $list_of_pokemon[$key]);
    }
    return $new_array;
}

function getPokemonsWithStrength(&$pokemon_list) {
    foreach ($pokemon_list as $index => $pokemon) {
        $str = rand(20, 100);
        $pokemon_list[$index] = array("name" => $pokemon, "strength" => $str);
    }
    return $pokemon_list;
}

function generateOpponent() {
    $list_of_random_pokemon = randomPokemonSelector();
    $rand_pointer = array_rand( $list_of_random_pokemon, 1);
    $opponent = $list_of_random_pokemon[$rand_pointer];
    return array("name" => $opponent, "strength" => rand(20, 100));
}

function battle($selectedPokemon, $opponent) {
    echo "\n\n~~~~~ Battle ! \n";
    echo "$selectedPokemon[name], $selectedPokemon[strength] vs $opponent[name], $opponent[strength]";
    if ($selectedPokemon["strength"] > $opponent["strength"]) {
        return True;
    }
    else {
        return False;
    }
}

function results($battleResult) {
    if ($battleResult) {
        echo "\n\nCongratulations, $trainer! You won!";
    }
    else {
        echo "\n\nOh no! $trainer, you lost!";

    }
}
$trainer = 'Danny';
$starter = startPokemonJourney($trainers, 'Charmander');
$dannys_list = randomPokemonSelector();
echo("\nYour Pokemons: " . implode(", ", $dannys_list) . ', and ' . $starter);

getPokemonsWithStrength($dannys_list);
print("\n");

print_r($dannys_list);

$opponent = generateOpponent();
$result = battle($dannys_list[1], $opponent);
results($result);
echo "\n\n-------------------------\n";

?>
