<?php
session_start();

?>

<head>
    <link rel="stylesheet" href="Login.css">
</head>

<body>
    <div class="Wrapper">
<<<<<<< Updated upstream
        <button onclick="history.back()" class="back"> <img src="../../Assets/images/back.png" alt=""> </button>
    <div class="PageContainer">
        <div class="Title">
        <img src="../../Assets/images/DiceImg.png" class="icon">
        <h1>Dice Tower</h1>
        </div>
        <form action="" class="details">
            <input type="text" placeholder="Username">
            <input type="password" placeholder="Password">
=======
        <button onclick="history.back()" class="back"> Back </button>
        <div class="PageContainer">
            <div>
                <img src="../../Assets/images/DiceImg.png" class="icon">
                <h1>Dice Tower</h1>
            </div>
            <form action="Loggingin.php" class="details" method="post">
                <input type="text" placeholder="Username" name="Username">
                <input type="password" placeholder="Password" name="Password">
>>>>>>> Stashed changes

                <?php
                if (empty($_SESSION['Status'])) {
                    echo "<br>";
                } else {
                    echo $_SESSION['Status'];
                    $_SESSION['Status'] = null;
                }
                ?>

<<<<<<< Updated upstream
            <input type="submit" class="submit">
        </form>
        <div>
            don't have an account yet? <a href="Registration.php"> Click Here </a>
        </div>
        <div>
            Forgot password? <a href="./ResetPass.php"> Click Here </a>
        </div>
    </div>
=======
                <input type="submit">
            </form>
            <div>
                don't have an account yet? <a href="Registration.php">Click Here</a>
            </div>
            <div>
                Forgot password? <a href="./ResetPass.php">Click Here</a>
            </div>
        </div>
>>>>>>> Stashed changes
    </div>
</body>