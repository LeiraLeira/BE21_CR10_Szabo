<?php 
require_once 'actions/db_connect.php';

if ($_GET['id']) {
    $id = $_GET['id'];

    // $title = $_GET['title'];
    // $author_first_name = $_GET['author_first_name'];
    // $author_last_name = $_GET['author_last_name'];
    // $short_description = $_GET['short_description'];
    // $publisher_name = $_GET['publisher_name'];
    // $publisher_size = $_GET['publisher_size'];
    // $publisher_address = $_GET['publisher_address'];



    $sql = "SELECT * FROM media WHERE id = {$id}" ;
    $result = $connect->query($sql);
    $data = $result->fetch_assoc();
    if ($result->num_rows == 1) {
        $title = $data['title'];
        $author_first_name = $data['author_first_name'];
        $author_last_name = $data['author_last_name'];
    } else {
        header("location: error.php");
    }
    $connect->close();
} else {
    header("location: error.php");
}  
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Delete Product</title>
        <?php require_once 'components/boot.php'?>
        <style type= "text/css">
            fieldset {
                margin: auto;
                margin-top: 100px;
                width: 70% ;
            }     
            .img-thumbnail{
                width: 70px !important;
                height: 70px !important;
            }    
        </style>
    </head>
    <body>
        <fieldset>
            <legend class='h2 mb-3'>Delete request <img class='img-thumbnail rounded-circle' src='pictures/<?php echo $picture ?>' alt="<?php echo $title ?>"></legend>
            <h5>You have selected the data below:</h5>
            <table class="table w-75 mt-3">
                <tr>
                    <td><?php echo $title?></td>
                </tr>
            </table>

            <h3 class="mb-4">Do you really want to delete this product?</h3>
            <form action ="actions/a_delete.php" method="post">
                <input type="hidden" name="id" value="<?php echo $id ?>" />
                <input type="hidden" name="picture" value="<?php echo $picture ?>" />
                <button class="btn" style='background-color: #7828FD; color: white;' type="submit">Yes, delete it!</button>
                <a href="index.php"><button class="btn" style='background-color: #FA5C65; color: white;' type="button">No, go back!</button></a>
            </form>
        </fieldset>
    </body>
</html>