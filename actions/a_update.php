<?php
require_once 'db_connect.php';
require_once 'file_upload.php';

if ($_POST) {    
    // $name = $_POST['name'];
    // $price = $_POST['price'];
    $id = $_POST['id'];

    $title = $_POST['title'];
    $author_first_name = $_POST['author_first_name'];
    $author_last_name = $_POST['author_last_name'];
    $short_description = $_POST['short_description'];
    $publisher_name = $_POST['publisher_name'];
    $publisher_size = $_POST['publisher_size'];
    $publisher_address = $_POST['publisher_address'];


    //variable for upload pictures errors is initialized
    $uploadError = '';

    $picture = file_upload($_FILES['picture']);//file_upload() called  

    if($picture->error===0){
        ($_POST["picture"]=="product.png")?: unlink("../pictures/$_POST[picture]");           
        // $sql = "UPDATE media SET name = '$name', price = $price, picture = '$picture->fileName' WHERE id = {$id}";
        $sql = "UPDATE media SET title = '$title', 
                                -- author_first_name = '$author_first_name', 
                                -- author_last_name = '$author_last_name', 
                                -- short_description = '$short_description', 
                                -- publisher_name = '$publisher_name',
                                -- publisher_size = '$publisher_size',
                                -- publisher_address = '$publisher_address';

                                image = '$picture->fileName' WHERE id = {$id}";
    }else{
        // $sql = "UPDATE media SET name = '$name', price = $price WHERE id = {$id}";
        $sql = "UPDATE media SET title = '$title', 
                                -- author_first_name = '$author_first_name', 
                                -- author_last_name = '$author_last_name', 
                                -- short_description = '$short_description', 
                                -- publisher_name = '$publisher_name',
                                -- publisher_size = '$publisher_size',
                                -- publisher_address = '$publisher_address';

                                image = '$picture->fileName' WHERE id = {$id}";
    }    
    if ($connect->query($sql) === TRUE) {
        $class = "success";
        $message = "The record was successfully updated";
        $uploadError = ($picture->error !=0)? $picture->ErrorMessage :'';
    } else {
        $class = "danger";
        $message = "Error while updating record : <br>" . $connect->error;
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
                <h1>Update request response</h1>
            </div>
            <div class="alert alert-<?php echo $class;?>" role="alert">
                <p><?php echo ($message) ?? ''; ?></p>
                <p><?php echo ($uploadError) ?? ''; ?></p>
                <a href='../update.php?id=<?=$id;?>'><button class="btn" style='background-color: #7828FD; color: white;' type='button'>Back</button></a>
                <a href='../home.php'><button class="btn" style='background-color: #FA5C65; color: white;' type='button'>Home</button></a>
                <a href='../index.php'><button class="btn" style='background-color: #162C9a; color: white;' type='button'>Show Media</button></a>
            </div>
        </div>
    </body>
</html>