<?php

?>

<head>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="header.css">
</head>

<body>
    <div class="header">
        <!-- Header comprises two parts -->
        <div class="logo">
            <!-- logo - contains the title and logo img -->
            <img class="icon" src="/Assets/images/DiceImg.png">
            <h1> Dice Tower </h1> <!-- Place holder text-->

            <div class="spacer">

            </div>

            <?php
            if (!isset($_SESSION['loggedin'])) {
            echo "
            <div class='accts'>
                <a href='/Loginpages/Login.php'>Log in</a>
            </div>";
            } else {
            echo "
            <div class='accts'>
                <a href='/Webfiles/AcctDetails.html'>Account</a>
            </div>";
            }
        ?>
            <div class="accts">
                <a href="/Webfiles/AcctDetails.html">Account</a>
            </div>
        </div>
        <div class="buttons">
            <!-- buttons - contains the links to the other pages -->
            <ul class="menuList">
                <li>
                    <a href="Main.html"> Home </a>
                </li>
                <li>
                    <a href="/Webfiles/myGame.html"> My Games</a>
                </li>
                <li>
                    <a href="/Webfiles/findGame.html"> Find a game </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="timeline">
        <!-- Main Homepage Body -->

        <div class="schedule">
            <!-- Schedule list -->
            <h1 class="schdLis"> Upcoming Games </h1>

            <div class="CGWrap">
                <div class="CGhead">
                    <img class="gameIcon" src="/Assets/images/DiceImg.png">
                    <a href="#" class="gTitle">
                        <h3>game title</h3>
                    </a>
                </div>

                <div> divider</div>
                <div class="schdDate">
                    <h2>Scheduled date</h2>
                </div>

            </div>

        </div>

        <div class="gameChat">
            <!-- gameChat a section for displaying messages from campaigns you are a part of -->
            <div class="CCC">
                <!-- CCC = Campaign Chat Container -->
                <img src="Assets\images\Placeholder.jpg" class="SUPFP" /> <!-- SUPP = Server User Profile Picture -->
                <div class="CCCC">
                    <!-- CCC = Campaign Chat Content Container -->
                    <h3>
                        Profile Name
                    </h3>
                    <div class="CCM">
                        <!-- CCM = Campaign Chat Message -->
                        Chat content
                    </div>
                </div>
            </div>

            <div class="CCC">
                <!-- This container will contain the Empty timeline message (Starring Raggy) -->
                <!-- CCC = Campaign Chat Container -->
                <img src="Assets\images\Raggy\EmptyLog.png" class="ERag" /> <!-- ERag = Empty Raggy -->
                <div class="RagText">
                    <!-- CCC = Campaign Chat Content Container -->
                    <h3>
                        Sleepy town...
                    </h3>
                    <div class="CCM">
                        <!-- CCM = Campaign Chat Message -->
                        Let's try searching over <a href="/Webfiles/findGame.html">there</a>
                    </div>
                </div>
            </div>


        </div>

    </div>

    <div>
        footer
    </div>
</body>