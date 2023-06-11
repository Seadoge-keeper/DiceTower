<?php
include '../../connectSQL.php';

if (empty($_POST['Username']) || empty($_POST['Password']) || empty($_POST['Email'])) {
    $_SESSION["Status"] = "Please fill in all of the boxes of the registration Form";
    header("Location: Registration.php");
}

if ($stmt = $conn->prepare('SELECT ID, Password FROM userdb WHERE username = ?')) { #Connects variable into database with prepare
    $stmt->bind_param('s', $_POST['Username']); #finds ID and Password from userdb using Username Parameter
    $stmt->execute(); #Executes prepared statement
    $stmt->store_result(); #Keeps the results of $stmt

    if ($stmt->num_rows > 0) {
        $_SESSION["Status"] = "This user already Exists";
        header("Location: Registration.php");
    } else {
        if ($stmt = $conn->prepare('INSERT INTO userdb (Username, Password, Email) VALUES (?, ?, ?)')) {
            $password = password_hash($_POST['Password'], PASSWORD_DEFAULT);
            $stmt->bind_param('sss', $_POST['Username'], $password, $_POST['Email']);
            $stmt->execute();

            session_regenerate_id();
            $_SESSION['Loggedin'] = True;
            $_SESSION['Name'] = $_POST['Username'];
            $name = $_SESSION['Name'];

            $User = "SELECT ID FROM userdb WHERE Username = $name";

            $holder = mysqli_query($conn,$User);

            $UserNo = $holder->fetch_assoc();
            $_SESSION['ID'] = $UserNo['ID'];
            header("Location: ../../Index.php");
        } else {
            echo 'Statement error';
        }
    }
    $stmt->close();
}



?>