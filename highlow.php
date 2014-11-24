<?php

// // Dump arg count
// var_dump($argc);
// // Dump arg vars
// var_dump($argv);
// // Exit with 0 errors

// Check for an argument count of 3
if ($argc == 3) {

	// $high = ($argv[1] > $argv[2]) ? $argv[1] : $argv[2];
	// $low = ($argv[1] < $argv[2]) ? $argv[1] : $argv[2];

	$low = $argv[1];
	$high = $argv[2];

	$low = (is_numeric($argv[1])) ? $argv[1] : 1;

	if(is_numeric($argv[1])) {

		$low = $argv[1];
		
	} else {
		$low = 1;
	}

} else {
	$low = 1;
	$high = 100;
}

$random = mt_rand($low, $high);

echo "Guess from $low to $high." . PHP_EOL;


	# code...

	// if that argument count is three, 
	// then use argument 2 to set the min
	// use argument 3 to set the max

	// mt_rand($min, $max);

echo "Pick a random number."; 

$number_guess = fgets(STDIN);


do {
	
	if ($number_guess > $random){
		fwrite(STDOUT, "Guess lower.\n");

	} 

	elseif ($number_guess < $random) {
		echo "Guess higher.\n";
	} 

	// else {
	// 	echo "You got the right answer!";
	// }

	$number_guess = fgets(STDIN);

} while ($random_number != $number_guess);

echo "Congrats" . PHP_EOL;


exit(0);

?>