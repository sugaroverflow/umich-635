<?php

function startFirstPokemonJourney() {
  echo "Welcome, Pokemon Trainer!\n";
  echo "I hope you're ready to go on an adventure!\n";

  return "Pikachu!";
}

function startPokemonJourney($trainer, $starter="Pikachu") {
  echo "Welcome, Pokemon Trainer $trainer!/n";
  return $starter;
}
function getPokemonStrength($starter) {
  $str = rand(30, 100);
  return $str;
}

startPokemonJourney('Fatima');
// Prints:  "Welcome, Pokemon Trainer Fatima!"
// Returns: "Pikachu"

startPokemonJourney('Danny', 'Charmander');
// Prints:  "Welcome, Pokemon Trainer Danny!"
// Returns: "Charmander"


$starter = startPokemonJourney('Danny', 'Charmander');
$poke_str = getPokemonStrength($starter);

$pikachu_moves = array(
  'normal' =>	array(
      'Growl' => 15,
      'Tail Whip' => 25),
  'electric' => array(
      'Thunder Shock'	=> 30,
      'Thunder Wave' => 55)
);

// Add a new electric attack, Spark:
$pikachu_moves['electric']['Spark'] = 65;
// Remove the old attack, Thunder Shock:
unset($pikachu_moves['electric']['Thunder Shock']);
print_r($pikachu_moves);


$my_pokemon = array("Pikachu" => "Electric", "Charmander" => "Fire", "Manaphy" => "Water");

foreach ($my_pokemon as $pkm => $typ) {
  echo "Name: ", $pkm," - Type: ",$typ,"\n";
}

$pikachu_moves = array(
  'normal' =>	array(
      'Growl' => 15,
      'Tail Whip' => 25),
  'electric' => array(
      'Thunder Shock'	=> 30,
      'Thunder Wave' => 55)
);

//  Scan through outer loop
foreach ($pikachu_moves as $moves) {
  //  Check type
  if (is_array($moves)){
      //  Scan through inner loop
      foreach ($moves as $atk => $pwr) {
        echo "Attack: ", $atk," - Power: ",$pwr,"\n";
      }
  }
}


function nicknamePokemon(&$pokemon, $name)
{
  $pokemon = "$name the $pokemon\n";
  echo $pokemon;
}

$pkm_name = "Pikachu";
nicknamePokemon($pkm_name, "Charlie"); // Prints: Charlie the Pikachu
echo $pkm_name; // Prints: Charlie the Pikachu


?>
