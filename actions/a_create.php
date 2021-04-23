<?php
require_once 'db_connect.php';
require_once 'file_upload.php';

if ($_POST) {   
    // $id = $_POST['id'];
    // $isbn_code = $_POST['isbn_code'];
    $title = $_POST['title'];
    $author_first_name = $_POST['author_first_name'];
    $author_last_name = $_POST['author_last_name'];
    $short_description = $_POST['short_description'];
    $publisher_name = $_POST['publisher_name'];
    $publisher_size = $_POST['publisher_size'];
    $publisher_address = $_POST['publisher_address'];

    // $publish_date = $_POST['publish_date'];
    // $publish_date = date('Y-m-d', strtotime($_POST['publish_date'])) ;


    $media_type = $_POST['media_type'];
    $status = $_POST['status'];


    $uploadError = '';
    //this function exists in the service file upload.
    $image = file_upload($_FILES['image']);  
   
    $sql = "INSERT INTO media (title, author_first_name, author_last_name, short_description, publisher_name, publisher_size, publisher_address, media_type, status, image) VALUES ('$title', '$author_first_name', '$author_last_name', 'short_description', '$publisher_name', '$publisher_size', '$publisher_address', '$media_type', '$status', '$image->fileName')";

    if ($connect->query($sql) === true) {
        $class = "success";
        $message = "The entry below was successfully created <br>
            <table class='table w-50'><tr>
            <td> $title </td>
            <td> $author_first_name </td>
            <td> $author_last_name </td>
            <td> $short_description </td>
            <td> $publisher_name </td>
            <td> $publisher_size </td>
            <td> $publisher_address </td>
            <td> $media_type </td>
            
            </tr></table><hr>";
        $uploadError = ($image->error !=0)? $image->ErrorMessage :'';
    } else {
        $class = "danger";
        $message = "Error while creating record. Try again: <br>" . $connect->error;
        $uploadError = ($picture->error !=0)? $picture->ErrorMessage :'';
    }
    $connect->close();
} else {
    header("location: ../error.php");
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Update</title>
        <?php require_once '../components/boot.php'?>
    </head>
    <body>
        <div class="container">
            <div class="mt-3 mb-3">
                <h1>Create request response</h1>
            </div>
            <div class="alert alert-<?=$class;?>" role="alert">
                <p><?php echo ($message) ?? ''; ?></p>
                <p><?php echo ($uploadError) ?? ''; ?></p>
                <a href='../index.php'><button class="btn btn-primary" type='button'>Home</button></a>
            </div>
        </div>
    </body>
</html>