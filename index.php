<?php

require_once 'ElementInterface.php';
require_once 'Elements/Rock.php';
require_once 'Elements/Paper.php';
require_once 'Elements/Scissors.php';
require_once 'Elements/Lizard.php';
require_once 'Elements/Spock.php';
require_once 'Results/WinResult.php';
require_once 'Results/LoseResult.php';
require_once 'Results/TieResult.php';
require_once 'Results/Result.php';

$photos = [
    'rock' => "Photos/rock.png",
    'paper' => "Photos/paper.png",
    'scissors' => "Photos/scissors.png",
    'lizard' => "Photos/lizard.png",
    'spock' => "Photos/spock.png"
];

$elements = array_keys($photos);
$playersChoice = $_POST["playersChoice"];

$message = "";
$doBattle = isset($playersChoice) && class_exists($playersChoice);
if ($doBattle) {
    $pcChoice = $elements[rand(0, count($elements) - 1)];
    $result = (new $playersChoice())->beats(new $pcChoice);
    $message = $result->getMessage();
}
?>

<html lang="eng">
<head>
    <link rel="stylesheet" href="stylesheet.css">
</head>
<body>
<h1>ROCK, PAPER, SCISSORS, LIZARD, SPOCK</h1>

<?php if ($doBattle): ?>
    <div class="center">
        <span class="playerName">Player</span>
        <span class="pcName">PC</span>
    </div>
    <div class="center">
        <span class="battle"><img src="<?= $photos[$playersChoice] ?>" alt="playersChoice"></span> VS
        <span class="battle"><img src="<?= $photos[$pcChoice] ?>" alt="pcChoice">
    </span>
    </div>
    <h2><?= $message ?></h2>
<?php else: ?>
    <p>Choose your fighter: </p>
<?php endif; ?>

<form action="/" method="post">
    <div class="center">
        <?php foreach ($elements as $element): ?>
            <button type="submit" name="playersChoice" value="<?= $element ?>">
                <img src="<?= $photos[$element] ?>" alt="<?= $element ?>" class="button">
            </button>
        <?php endforeach; ?>
    </div>
    <?php if ($doBattle): ?>
        <div class="buttonReset, center">
            <button type="submit" name="playersChoice" value="" class="buttonReset">
                Reset
            </button>
        </div>
    <?php endif; ?>
</body>
</html>