<?php
require_once 'actions/db_connect.php';

if ($_GET['id']) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM media WHERE id = {$id}";
    $result = $connect->query($sql);
    if ($result->num_rows == 1) {
        $data = $result->fetch_assoc();
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
<html>
    <head>
        <title>Edit Product</title>
        <?php require_once 'components/boot.php'?>
        <style type= "text/css">
            fieldset {
                margin: auto;
                margin-top: 100px;
                width: 60% ;
            }  
            .img-thumbnail{
                width: 70px !important;
                height: 70px !important;
            }     
        </style>
    </head>
    <body>
        <fieldset>
            <legend class='h2'>Update request <img class='img-thumbnail rounded-circle' src='pictures/<?php echo $picture ?>' alt="<?php echo $title ?>"></legend>
            <form action="actions/a_update.php"  method="post" enctype="multipart/form-data">
                <table class="table">
                    <!-- <tr>
                        <th>Name</th>
                        <td><input class="form-control" type="text"  name="name" placeholder ="Product Name" value="
                        "  /></td>
                    </tr> -->
                    <!-- <tr>
                        <th>Price</th>
                        <td><input class="form-control" type= "number" name="price" step="any"  placeholder="Price" value ="
                        " /></td>
                    </tr> -->

                    <tr>
                        <th>Title</th>
                        <td><input class='form-control' type="text" name="title"  placeholder="Title" /></td>
                    </tr>
                    <tr>
                        <th>Author_first_name</th>
                        <td><input class='form-control' type="text" name="author_first_name"  placeholder="Authors firstname" /></td>
                    </tr>
    
                    <tr>
                        <th>Author_last_name</th>
                        <td><input class='form-control' type="text" name="author_last_name"  placeholder="Authors lastname" /></td>
                    </tr>    
                    <tr>
                        <th>Short_description</th>
                        <td><input class='form-control' type="text" name="short_description"  placeholder="Short description" /></td>
                    </tr>    
                    <tr>
                        <th>Publisher_name</th>
                        <td><input class='form-control' type="text" name="publisher_name"  placeholder="Publishers name" /></td>
                    </tr>    
                    <tr>
                        <th>Publisher_size</th>
                        <td><input class='form-control' type="text" name="publisher_size"  placeholder="Publishers size" /></td>
                    </tr>    
                    <tr>
                        <th>Publisher_address</th>
                        <td><input class='form-control' type="text" name="publisher_address"  placeholder="Publishers address" /></td>
                    </tr>    
                    <!-- <tr>
                        <th>Publish_date</th>
                        <td><input class='form-control' type="date" name="publish_date"  placeholder="Publish date" /></td>
                    </tr>     -->
                    <tr>
                        <th>Media_type</th>
                        <td><input class='form-control' type="text" name="media_type"  placeholder="Media type" /></td>
                    </tr>    
                    <tr>
                        <th>Status</th>
                        <td><input class='form-control' type="text" name="status"  placeholder="Status" /></td>
                    </tr>  




                    <tr>
                        <th>Picture</th>
                        <td><input class="form-control" type="file" name= "picture" /></td>
                    </tr>
                    <tr>
                        <input type= "hidden" name= "id" value= "<?php echo $data['id'] ?>" />
                        <input type= "hidden" name= "picture" value= "<?php echo $data['picture'] ?>" />
                        <td><button class="btn" style='background-color: #7828FD; color: white;' type= "submit">Save Changes</button></td>
                        <td><a href= "index.php"><button class="btn" style='background-color: #FA5C65; color: white;' type="button">Back</button></a></td>
                    </tr>
                </table>
            </form>
        </fieldset>
    </body>
</html>