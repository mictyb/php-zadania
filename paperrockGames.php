<?php

function rockPaperScissors(string $player1, string $player2): string
{
$winner = '';
if($player1 == $player2 & $player1=='paper'){
$winner = 'draw';
 
}
elseif ( ($player1==='paper'&&$player2==='rock') | ($player1==='rock'&&$player2==='paper') ){
    $winner ='player 1 win ' .$player1 .$player2;
}

elseif (($player1==='paper'&&$player2==='scissors') | ( $player1==='scissors'&&$player2==='paper'))
{
    $winner ='player 2 win ' .$player1 .$player2;
}
elseif (( $player1==='paper'&&$player2==='dummy') | ( $player1==='dummy'&&$player2==='paper'))

{
    $winner ='wrong input ' .$player1 .'&nbsp' .$player2;
}

return $winner;

}

//scissors
$player1 = 'paper';
$player2 = 'dummy';

echo (rockPaperScissors($player1, $player2));


?>
