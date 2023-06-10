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
        <div>
            <img src="../../Assets/images/Raggy/ResetPass.png" class="icon">
            <h1>Reset Password</h1>
=======
        <button onclick="history.back()" class="back"> Back </button>
        <div class="PageContainer">
            <div>
                <img src="../../Assets/images/Raggy/ResetPass.png" class="icon">
                <h1>Reset Password</h1>
            </div>
            <form action="" class="details">
                <input type="text" placeholder="Username">
                <input type="text" placeholder="Email">
                <input type="text" placeholder="Password">
                <input type="text" placeholder="New Password">

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
>>>>>>> Stashed changes
        </div>
    </div>
</body>