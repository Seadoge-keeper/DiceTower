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
                <img src="../../Assets/images/Raggy/SignUp.png" class="icon">
                <h1>Registration</h1>
            </div>
            <form action="registerUser.php" class="details" method="post">
                <input type="text" placeholder="Username" name="Username" id="Username">
                <input type="text" placeholder="Password" name="Password" id="Password">
                <input type="text" placeholder="Email" name="Email" id="Email">

                <?php  
                if(empty($_SESSION['Status'])) {
                    echo "<br>";
                 }  
                 else {
                    echo $_SESSION['Status'];
                    $_SESSION['Status'] = null;
                 }
                ?>

                <input type="submit">
            </form>
        </div>
    </div>
</body>