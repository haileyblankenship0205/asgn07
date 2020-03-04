<html>

<head>
    <title>Game Characters</title>
    <link rel ="stylesheet" type="text/css" href="sample.css">
</head>

<body>
<?php

include("inc-game-character-object.php");

$character = new GameCharacter();
$character2 = new GameCharacter();

$character->setPlayerName("Player 1");
$character->setScore("150");

$character2->setPlayerName("Player 2");
$character2->setScore("250");

print("<h1>First Player</h2>");
print("<p>Your characters name is " .$character->getPlayerName(). " and your score is " .$character->getScore(). "</p>");

print("<h1>Second Player</h1>");
print("<p>Your characters name is " .$character2->getPlayerName(). " and your score is " .$character2->getScore(). "</p>");

if($character->getScore() > $character2->getScore())
{
    $winner = $character->getPlayerName();
}
else {
    $winner = $character2->getPlayerName();
}

print("<h1>The winner is...</h1>");
print("<p>$winner</p>");

?>
</body>
</html>