<?php


$random_number = mt_rand(1, 100);

echo " Guess a random number."; 

$number_guess = fgets(STDIN);

do {

	// if ($number_guess != int) {
	// 	echo "That is not a number!" . PHP_EOL;
	
	
	if ($number_guess > $random_number){
		fwrite(STDOUT, "Guess lower.\n");

	} 

	elseif ($number_guess < $random_number) {
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