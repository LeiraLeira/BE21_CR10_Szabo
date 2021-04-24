<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php require_once 'components/boot.php'?>
        <title>PHP CRUD  |  Add Product</title>
        <style>
            fieldset {
                margin: auto;
                margin-top: 100px;
                width: 60% ;
            }       
        </style>
    </head>
    <body>
        <fieldset>
            <legend class='h2'>Add Media</legend>
            <form action="actions/a_create.php" method= "post" enctype="multipart/form-data">
                <table class='table'>

                    <!-- <tr>
                        <th>Id</th>
                        <td><input class='form-control' type="number" name= "id" placeholder="ID" step="any" /></td>
                    </tr>
                    <tr>
                        <th>ISBN Code</th>
                        <td><input class='form-control' type="number" name= "isbn_code" placeholder="ISBN Code" step="any" /></td>
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
                        <td><input class='form-control' type="file" name="picture" /></td>
                    </tr>

                    <tr>
                        <td><button class='btn' style='background-color: #7828FD; color: white;' type="submit">Insert Media</button></td>
                        <td><a href="home.php"><button class='btn' style='background-color: #FA5C65; color: white;' type="button">Home</button></a>
                        <a href='index.php'><button class="btn" style='background-color: #162C9a; color: white;' type='button'>Show Media</button></a>
                        </td>

                    </tr>
                </table>
            </form>
        </fieldset>
    </body>
</html>