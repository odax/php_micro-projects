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
    echo "<h1>Gambling & Goblins</h1>";

    //Player
    echo "<h4>Player Stats</h4>";

    class Player {
        public $money;
        public $item;
        public $health;
        function __construct($money, $health){
            $this->money = $money;
            $this->health = $health;
        }
        function setMoney($dif){
            $this->money += $dif;
        }
    }

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

    //Gambler's table
    echo "<h4>Gamblers Table</h4>";
    class Table {
        public $bet;
        function setBet($amount){
            if ($amount) {
            $this->bet = $amount;
            } else echo "Please bet at least 1 gold";
        }
        function play($gameType){
            switch($gameType) {
                case "low":
                    $gen = rand(1,10);
                    if ($gen > 3) {
                        return $this->bet;
                    } else {
                        // return -$this->bet;
                        return "lose";
                    }
                    break;
                case "med":
                    $gen = rand(1,10);
                    if ($gen > 5) {
                        return $this->bet * 1.95;
                    } else {
                        return -$this->bet;
                    }
                    break;
                case "high":
                $gen = rand(1,10);
                    if ($gen > 7) {
                        return $this->bet * 2.35;
                    } else {
                        return -$this->bet;
                    }
                    break;
            }
        }
    }

    //instantiation
    $newTable = new Table();
    //logic

    //display
    ?>
    <form action="main.php" method="post">
        Place Bet On Table: <input type="number" name="currentBet">
        <input type="submit">
    </form>


    <?php
    $currentBet = $_POST["currentBet"];
    if ($currentBet){
        echo "You've placed $currentBet gold on the table <br>";
    }
    $newTable->setBet($currentBet);
    ?>
    <form action="main.php" method="post">
        <br>Choose your risk: <br>
        Low (70/30): <input type="radio" name="gamble" value="low"> <br>
        Med (50/50): <input type="radio" name="gamble" value="med"> <br>
        High (30/70): <input type="radio" name="gamble" value="high">
        <input type="submit">
    </form><br>
    <?php
    $gameType = $_POST["gamble"];
    $dif = $newTable->play($gameType);
    echo "$dif";
    echo "<h4>Merchant's Shop</h4>";
    echo "<h4>Wilderness</h4>";
    //playerAttributes
    //gamblingFunctions
    //shopInteraction
    //goblinCombat
    ?>
</body>
</html>