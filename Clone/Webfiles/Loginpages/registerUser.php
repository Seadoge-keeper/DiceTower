<?php
include '../../connectSQL.php';

if (empty($_POST['Username']) || empty($_POST['Password']) || empty($_POST['Email'])) {
    $_SESSION["Status"] = "Please fill in all of the boxes of the registration Form";
    header("Location: Registration.php");
}

if ($stmt = $conn->prepare('SELECT ID, Password FROM userdb WHERE username = ?')) {
    $stmt->bind_param('s', $_POST['Username']);
    $stmt->execute();
    $stmt->store_result();

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
            $_SESSION['ID'] = $id;
            header("Location: ../../Index.php");
        } else {
            echo 'Statement error';
        }
    }
    $stmt->close();
}



?>