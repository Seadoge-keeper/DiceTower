<?php

include '../connectSQL.php';

$img_Status = 0; #Default Image Status = None
$content = $_POST['Text'];
$t = time();
echo "Date: " . (date("Y-m-d", $t)) . "<br>Text Message: " . $content . "<br>";
echo "<pre>";
print_r($_FILES['UploadImg']);
echo "<pre>";

$img_name = $_FILES['UploadImg']['name'];
$img_size = $_FILES['UploadImg']['size'];
$tmp_name = $_FILES['UploadImg']['tmp_name'];
$error = $_FILES['UploadImg']['error'];

if (isset($_FILES['UploadImg'])) { # Code for Processing Images 
    if ($error === 0) {
        if ($img_size > 125000) {
            $_SESSION['Status'] = "No files larger than 1mb";
            echo $_SESSION['Status'];
            $_SESSION['Status'] = null;
        } else {
            $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
            $img_ex_lc = strtolower($img_ex);

            $allowed_exs = array("jpg", "jpeg", "png");

            if (in_array($img_ex_lc, $allowed_exs)) {
                $new_img_name = uniqid("IMG-", true) . '.' . $img_ex_lc;
                $img_uplo_path = 'uploads/' . $new_img_name;
                move_uploaded_file($tmp_name, $img_uplo_path);
                $img_Status = 1;

                echo "Attempting to send"; # Continue on the Image Uploading video here
            } else {

                $_SESSION['Status'] = "Invalid File Type";
                echo $_SESSION['Status'];
                $_SESSION['Status'] = null;
            }
        }
    } else {

        $_SESSION['Status'] = "No files larger than 1mb";
        echo $_SESSION['Status'];
        $_SESSION['Status'] = null;
    }

} else {
    echo "<br>No Images Found";

}
echo "<br>Moving to text";
if (isset($_POST['Text']) && empty($_POST['Text'])) { # Code for Processing the Chat Messages
    # No data inputted
    echo "<br>No Text found";

} else {
    echo "<br> Text Found";
    if ($stmt = $conn->prepare('SELECT username FROM userdb WHERE ID = ?')) {
        echo "<br> Preparing Post User ID";
        $stmt->bind_param('i', $_SESSION['ID']);
        $stmt->execute();
        $stmt->store_result();
        $Uploader = $_SESSION['ID'];

        $plcehlder = 0;

        if ($img_Status == 1) {
            session_regenerate_id();
            echo "<br> Img Name: " . $new_img_name;

            $query = "INSERT INTO posts (Message, Time, Likes, Image_Url, Comments, UserID, has_image) VALUES (?,?,?,?,?,?,?)";
            $stmt = $conn->prepare($query);
            echo "<br>Date: " . (date("Y-m-d", $t)) . "<br>Text Message: " . $content . "<br>User ID: " . $Uploader . "<br>Img Status: " . $img_Status . "<br>Img Title: " . $new_img_name;
            $stmt->bind_param("ssisiii", $content, $t, $plcehlder, $new_img_name, $plcehlder, $Uploader, $img_Status);
            $stmt->execute();

            header("location: myGame.php");

        }
        else {
            session_regenerate_id();
            echo "<br> Img Name: " . $new_img_name;

            $query = "INSERT INTO posts (Message, Time, Likes, Image_Url, Comments, UserID, has_image) VALUES (?,?,?,?,?,?,?)";
            $stmt = $conn->prepare($query);
            echo "<br>Date: " . (date("Y-m-d", $t)) . "<br>Text Message: " . $content . "<br>User ID: " . $Uploader . "<br>Img Status: " . $img_Status . "<br>Img Title: " . $new_img_name;
            $stmt->bind_param("ssisiii", $content, $t, $plcehlder, $plcehlder, $plcehlder, $Uploader, $plcehlder);
            $stmt->execute();

            header("location: myGame.php");

        }
    }

}

$conn->close();


$Input = $_POST['Text'];



/*
if ($stmt = $conn->prepare('SELECT ID, Message, Time, FROM posts')) {
}
*/


?>