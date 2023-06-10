<?php

include '../connectSQL.php';

$sql = "SELECT ID, Username, Password, Email From userdb";
$result = $conn->query($sql);

$info = $result->fetch_assoc();
?>
<script>
    function ToggleEdit () {
const att = document.createAttribute("style");
const opt = document.getElementById("Options");
if(opt.hasAttribute("style")) {
    opt.setAttributeNode("style", "Visibility: Hidden");
}
else {
    att.value = "Visibility: Visible";
    opt.setAttributeNode(att);
}
    }
</script>


<head>
    <link rel="stylesheet" href="AcctDetails.css">
    <link rel="stylesheet" href="../header.css">
</head>

<body>
    <div class="Wrapper">
        <button onclick="document.location='../Index.php'" class="back"> Back </button>
        <div class="PageContainer">
            <?php
            
            ?>



            <div>
                <img src="../Assets/images/DiceImg.png" class="icon">
                <h1>Dice Tower</h1>
            </div>
            <br>
            <div class="details">
                <a>Name:
                    <?php echo $info["Username"] ?>
                </a>
                <a>Password: ****</a>
                <a>Email:
                    <?php echo $info["Email"] ?>
                </a>

            </div>
            <div class="select">
            <button onclick=" ToggleEdit() ">Edit Details</button> 
            <form action="logOut.php" class="Logout">
                <input type="submit" value="Log Out">

            </div>
            </form> 
        </div>
        <div id="Options" class="Options">
            <button>Change Username</button>
            <button>Change Password</button>
                <button> Change Email </button>
        </div>

    </div>
</body>