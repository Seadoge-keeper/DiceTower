<?php
include '../../connectSQL.php';

if (empty($_POST['Username']) && empty($_POST['Password'])) {
    $_SESSION['Status'] = "Please fill the username and password!";
    header('Location:Login.php');
}

if ($stmt = $conn->prepare('SELECT ID, Password FROM userdb WHERE username = ?')) {
    $stmt->bind_param('s', $_POST['Username']);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $password);
        $stmt->fetch();
        if (password_verify($_POST['Password'], $password)) {
            session_regenerate_id();
            $_SESSION['Loggedin'] = true;
            $_SESSION['Name'] = $_POST['Username'];
            $_SESSION['ID'] = $id;
            header("Location: ../../Index.php");
        } else {
            $_SESSION["Status"] = "Invalid Password";
            header('Location:Login.php');
        }
    } else {
        $_SESSION["Status"] = "Invalid Username";
        header('Location:Login.php');
    }
    $stmt->close();
}

?>