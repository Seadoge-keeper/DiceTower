<?php
session_start()

    ?>

<head>
    <link rel="stylesheet" href="findGame.css">
    <link rel="stylesheet" href="../header.css">
</head>

<body>
    <div class="header">
        <!-- Header comprises two parts -->
        <div class="logo">
            <!-- logo - contains the title and logo img -->
            <img class="icon" src="../Assets/images/DiceImg.png">
            <h1> Dice Tower </h1> <!-- Place holder text-->

            <div class="spacer">

            </div>

            <?php
            if (!isset($_SESSION['Loggedin'])) {
                echo "
                    <div class='accts'>
                    <a href='Loginpages/Login.php'>Log in</a>
                    </div>";
            } else {
                echo "
                    <div class='accts'>
                        <a href='AcctDetails.php'>Account</a>
                    </div>";
            }
            ?>
        </div>
        <div class="buttons">
            <!-- buttons - contains the links to the other pages -->
            <ul class="menuList">
                <li>
                    <a href="../Index.php"> Home </a>
                </li>
                <li>
                    <a href="myGame.php"> My Games</a>
                </li>
                <li>
                    <a href="findGame.php"> Find a game </a>
                </li>
            </ul>
        </div>

    </div>

    <div class="Gameboard">

        <div class="ListedGame">
            <img src="../Assets\images\Placeholder.jpg" class="GameProfilePic">
            <div>
                <div>
                    <div class="gameheader">
                        <img src="../Assets\images\Placeholder.jpg" class="Pfp">
                        <div class="Hosts">
                            <h3>Host: </h3>
                            <h3> Username </h3>
                        </div>
                    </div>
                </div>
                <h2 class="GameTitle">
                    Game title
                </h2>
                <div class="description">
                    descriptiondescriptiondescriptiondescriptiondescriptiondescriptiondescriptiondescriptiondescriptiondescriptiondescriptiondescriptiondescriptiondescriptiondescriptiondescriptiondescriptiondescriptiondescriptiondescriptiondescriptiondescriptiondescription
                </div>
                <form action="">
                    <input type="submit" class="Join" value="Join Game"></input>
                </form>
            </div>

        </div>
</body>