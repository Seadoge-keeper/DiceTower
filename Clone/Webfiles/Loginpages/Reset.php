<?php
include '../../connectSQL.php';

if (empty($_POST['Username']) && empty($_POST['Password'] && empty($_POST['Email']) && $_POST['NewPassword'])) {
    $_SESSION['Status'] = "Please fill the forms!";
    header('Location:ResetPass.php');
    exit();
}

if ($_POST['Password'] == $_POST['NewPassword']) {
    if ($stmt = $conn->prepare('SELECT ID, Password FROM userdb WHERE Email = ?')) {
        $stmt->bind_param('s', $_POST['Email']);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            if ($stmt = $conn->prepare('UPDATE userdb SET Password = (?) WHERE Email = ?')) {
                $password = password_hash($_POST['NewPassword'], PASSWORD_DEFAULT);
                $stmt->bind_param('ss', $password, $_POST['Email']);
                $stmt->execute();
                $_SESSION['Status'] = "Password Sucessfully changed";
                header('Location:Login.php');

            } else {
                $_SESSION['Status'] = "SQL Error";
                header('Location:ResetPass.php');
            }

        } else {
            $_SESSION['Status'] = "Email does not exist";
            header('Location:ResetPass.php');
            exit();
        }
    }

} else {
    $_SESSION['Status'] = "Passwords do not match!";
    header('Location:ResetPass.php');
}

?>