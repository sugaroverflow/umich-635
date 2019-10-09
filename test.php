<?php

$pikachu_moves = array(
  'normal' =>	array(
      'Growl' => 15,
      'Tail Whip' => 25),
  'electric' => array(
      'Thunder Shock'	=> 30,
      'Thunder Wave' => 55)
);

// print_r($pikachu_moves['normal'][0]); # does not work
// var_dump(shuffle($pikachu_moves));
//
$numbers = range(1, 20);
// print_r($numbers);
shuffle($numbers);
foreach ($numbers as $number) {
    echo "$number ";
}
print_r($numbers);

shuffle($pikachu_moves);
print_r($pikachu_moves);
?>
