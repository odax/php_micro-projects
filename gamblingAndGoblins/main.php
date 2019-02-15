<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>G&G</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <?php
    //Header
    class Player {
        public $money;
        public $item;
        public $health;
        function __construct($money, $health){
            $this->money = $money;
            $this->health = $health;
        }
    }
    echo "<h1>Gambling & Goblins</h1>";

    //Player
    echo "<h4>Player Stats</h4>";

    //Instantiation
    $newPlayer = new Player(100, 10);

    //Player__Item-Logic
    $currentItem = "none";
    if ($newPlayer->item) {
        $currentItem = $newPlayer->item;
    }

    //Display
        echo "Health: $newPlayer->health <br>";
        echo "Money: $newPlayer->money <br>";
        echo "Item: $currentItem <br>";
    echo "<h4>Gamblers Table</h4>";
    echo "<h4>Merchant's Shop</h4>";
    echo "<h4>Wilderness</h4>";
    //playerAttributes
    //gamblingFunctions
    //shopInteraction
    //goblinCombat
    ?>
</body>
</html>