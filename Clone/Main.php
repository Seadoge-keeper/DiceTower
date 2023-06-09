<?php
session_start()

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
            <img class="icon" src="Assets\images\DiceImg.png">
            <h1> Dice Tower </h1> <!-- Place holder text-->

            <div class="spacer">

            </div>

            <?php
                if (!isset($_SESSION['loggedin'])) {
                    echo "
                    <div class='accts'>
                    <a href='Webfiles/Loginpages/Login.php'>Log in</a>
                    </div>";
                } else {
                echo "
                    <div class='accts'>
                        <a href='/Webfiles/AcctDetails.php'>Account</a>
                    </div>";
                }
            ?>
        </div>
        <div class="buttons">
            <!-- buttons - contains the links to the other pages -->
            <ul class="menuList">
                <li>
                    <a href="Main.php"> Home </a>
                </li>
                <li>
                    <a href="Webfiles/myGame.php"> My Games</a>
                </li>
                <li>
                    <a href="Webfiles/findGame.php"> Find a game </a>
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
                    <img class="gameIcon" src="Assets/images/DiceImg.png">
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
                        <form action="">
                        <label for="PostText">ChatBox:</label>
                        <input type="text" id="PostText" name="PostText">
                        <button> Image</button>
                        </form>
                        
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
                        Let's try searching over <a href="Webfiles/findGame.php">there</a>
                    </div>
                </div>
            </div>

            <!-- User Timline -->

            <div class="TL">

                <div>
                    <!-- User Details -->
                    <div class="UserSec"> 

                        <div class="UserProfilePicture">
                            <img src="./Assets/images/user.png" alt="">
                        </div>

                        <div class="UserDetails">
                            <h3> UserName </h3>
                            <p> Date </p>
                        </div>
                    
                    </div>

                    <!-- User Post Content -->
                    <div class="Consec"> 
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    Vitae aliquet nec ullamcorper sit amet. Amet cursus sit amet dictum sit.
                    Dignissim diam quis enim lobortis. Vel pretium lectus quam id leo in.
                    Ut lectus arcu bibendum at. Tellus elementum sagittis vitae et leo duis ut diam quam. Consequat mauris nunc congue nisi vitae suscipit.
                    Amet porttitor eget dolor morbi non arcu risus quis varius. Fermentum et sollicitudin ac orci phasellus egestas tellus rutrum.
                    Parturient montes nascetur ridiculus mus. Neque convallis a cras semper auctor neque. Purus gravida quis blandit turpis cursus in.
                    Nisl pretium fusce id velit ut tortor pretium viverra. Urna et pharetra pharetra massa massa ultricies mi. Tellus molestie nunc non blandit massa.
                    Scelerisque varius morbi enim nunc faucibus. Rhoncus urna neque viverra justo nec ultrices dui sapien.
                    </div>
                </div>

            </div>


        </div>

    </div>

    <div>
        footer
    </div>
</body>