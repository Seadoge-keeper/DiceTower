<head>
    <link rel="stylesheet" href="myGame.css">
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

            <!--  delete this comment once converted to php
            if (!isset($_SESSION['loggedin'])) {
            echo "
            <div class="accts">
                <a href="/Loginpages/Login.html">Account</a>
            </div>
            } else {
            echo "
            <div class="accts">
                <a href="/Webfiles/AcctDetails.html">Account</a>
            </div>

            }
        ?>-->

            <div class="accts">
                <a href="/Webfiles/AcctDetails.html">Account</a>
            </div>
        </div>
        <div class="buttons">
            <!-- buttons - contains the links to the other pages -->
            <ul class="menuList">
                <li>
                    <a href="../Main.html"> Home </a>
                </li>
                <li>
                    <a href="myGame.html"> My Games</a>
                </li>
                <li>
                    <a href="findGame.html"> Find a game </a>
                </li>
            </ul>
        </div>
    </div>

    <br>

    <div class="Serverlist">
        <div>
            <!-- Adaptive List for  -->
            Game lists
        </div>
        <div>
            playspace
            <div class="Tools">
                Tool bar
                <input list="Characters" placeholder="Select Character">
                <form action=""><input type="button" value="New Character"></form>
                </form>
                <datalist id="Characters">
                    <!-- Here PHP will be added to create new elements based on a database -->
                    <option value="OOC - Out of Character">
                        <!-- How I want it to appear: " (Username)CharacterName "  -->
                </datalist>
            </div>
            <div class="GCCont">
                <!-- Game Chat Container -->
                Game chat
                <div class="MsgCont">
                    <!-- Message Container -->
                    <h4> (Username)CharacterName </h4>
                    <div> Chat contents</div>
                </div>
            </div>
        </div>
    </div>
</body>