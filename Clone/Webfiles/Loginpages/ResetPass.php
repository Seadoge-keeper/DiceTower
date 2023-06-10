<?php
session_start();

?>

<head>
    <link rel="stylesheet" href="Login.css">
</head>

<body>
    <div class="Wrapper">
        <button onclick="history.back()" class="back"> <img src="../../Assets/images/back.png" alt=""> </button>
        <div class="PageContainer">
            <div>
                <img src="../../Assets/images/Raggy/ResetPass.png" class="icon">
                <h1>Reset Password</h1>
            </div>
            <form action="Reset.php" class="details" method="post">
                <input type="text" placeholder="Username" name="Username">
                <input type="text" placeholder="Email" name="Email">
                <input type="text" placeholder="Password" name="Password">
                <input type="text" placeholder="New Password" name="NewPassword">

                <?php
                if (empty($_SESSION['Status'])) {
                    echo "<br>";
                } else {
                    echo $_SESSION['Status'];
                    $_SESSION['Status'] = null;
                }
                ?>

                <input type="submit">
            </form>
        </div>
</body>