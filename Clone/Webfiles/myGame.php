<?php

include '../connectSQL.php';

?>

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

    <br>

    <div class="Serverlist">
        <div>
            <!-- Adaptive List for multiple games // Optional Content -->
            Game lists
        </div>
        <div>
            <div class="Tools">
                Tool bar ||
                <input list="Characters" placeholder="Select Character">
                <form action=""><input type="button" value="New Character"></form>
                <!-- Come back to this later // optional Content -->
                </form>
                <datalist id="Characters">
                    <!-- Here PHP will be added to create new elements based on a database -->
                    <option value="OOC - Out of Character">
                        <!-- How I want it to appear: " (Username)CharacterName "  -->
                </datalist>
            </div>





            <div class="GCCont">
                <!-- Game Chat Container -->
                <?php

                $all = "SELECT * FROM posts";
                $table = $conn->query($all);
                $loop = $table->num_rows;



                if ($loop > 0) {
                    while ($row = $table->fetch_assoc()) {
                        $box = $row;

                        $IDno = $box['ID'];
                        $IDUser = $box['UserID'];
                        $IDMessage = $box['Message'];
                        $IDUrl = $box['Image_Url'];
                        $IDImgStat = $box['has_image'];
                        $IDLikes = $box['Likes'];
                        $IDTime = $box['Time'];
                        $IDComm = $box['Comments'];

                        $User = "SELECT Username FROM userdb WHERE ID = $IDUser";

                        $Poster = mysqli_query($conn, $User);

                        $Owner = $Poster->fetch_assoc();

                        $PostName = $Owner['Username'];

                        if ($IDImgStat == 1) {
                            echo "
                            <div class='MsgCont'>
                                <!-- Message Container -->
                                <div>
                                <h4 class='User'><i>" . $PostName . "</i></h4>
                                <h4>CharacterName </h4>
                                </div>
                                <img class='Upload' src='uploads/" . $IDUrl . "'>
                                <div> " . $IDMessage . "</div>
                                <form method='post'>
                                <input type='Hidden' name='" . $IDno . "' value='" . $IDno . "'>
                                <input type='submit' class='Like'>".$IDLikes."</Button>
                                </form>";
                            if (isset($_POST[$IDno])) {
                                echo "<br>Post Liked";
                            }
                            echo "</div>";

                        } else {
                            echo "
                            <div class='MsgCont'>
                                <!-- Message Container -->
                                <div>
                                <h4 class='User'><i>" . $PostName . "</i></h4>
                                <h4>CharacterName </h4>
                                </div>
                                <div> " . $IDMessage . "</div>
                                <form method='post'>
                                <input type='Hidden' name='" . $IDno . "' value='" . $IDno . "'>
                                <input type='submit' class='Like'>".$IDLikes."</Button>
                                </form>";
                            if (isset($_POST[$IDno])) {
                                $LikeQuery = "INSERT INTO posts (Likes) value (?)";
                                $Newlike = $IDLikes + 1; 
                                echo $Newlike;
                            }
                            echo "</div>";

                        }


                    }

                }


                ?>
                <br>
                <div class="Chatbox">
                    <form action="GameChat.php" class="PostBox" method="post" enctype="multipart/form-data">
                        <input type="text" name="Text" id="Text">
                        <input type="file" name="UploadImg">
                        <input type="submit" name="Send" id="Send">
                    </form>

                    <?php
                    if (empty($_SESSION['Status'])) {
                        echo "<br>";
                    } else {
                        echo $_SESSION['Status'];
                        $_SESSION['Status'] = null;
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>