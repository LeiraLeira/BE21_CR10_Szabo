<?php 
require_once 'actions/db_connect.php';
$sql = "SELECT * FROM media";
$result = mysqli_query($connect ,$sql);
$tbody=''; //this variable will hold the body for the table
if(mysqli_num_rows($result)  > 0) {     
    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){         
        $tbody .= "
            <tr>
            <td><a href='update.php?id=" .$row['id']."'><button class='btn btn-primary btn-sm' type='button'>Edit</button></a>
            <a href='delete.php?id=" .$row['id']."'><button class='btn btn-danger btn-sm' type='button'>Delete</button></a></td>
            
            <td>" .$row['isbn_code']."</td>
            <td><img class='img-thumbnail' src='pictures/" .$row['image']."'</td>
            <td>" .$row['title']."</td>
            <td>" .$row['author_first_name']."</td>
            <td>" .$row['author_last_name']."</td>
            <td>" .$row['short_description']."</td>
            <td>" .$row['publisher_name']."</td>
            <td>" .$row['publisher_size']."</td>
            <td>" .$row['publisher_address']."</td>
            <td>" .$row['publish_date']."</td>
            <td>" .$row['media_type']."</td>
            <td>" .$row['status']."</td>

            </tr>";
    };
} else {
    $tbody =  "<tr><td colspan='5'><center>No Data Available </center></td></tr>";
}

$connect->close();
?>

<!DOCTYPE html>
<html lang="en">

<nav class="navbar navbar-expand-lg navbar-light" >
  <div class="container-fluid">
    <a class="navbar-brand" href="#">BIG LIBRARY</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php">Show Media</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="create.php">Add Media</a>
        </li>
        <li class="nav-item" style="margin-right: 10rem;">
          <a class="nav-link"  href="contact.php">Contact Us</a>
        </li>

      </form>
      </ul>
    </div>
  </div>
</nav>


    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP CRUD</title>
        <?php require_once 'components/boot.php'?>
        <style type="text/css">
            .manageProduct {           
                margin: auto;
            }
            .img-thumbnail {
                width: 70px !important;
                height: 70px !important;
            }
            td {          
                text-align: left;
                vertical-align: middle;
            }
            tr {
                text-align: center;
            }
        </style>
    </head>
    <body>
        <div class="manageProduct w-75 mt-3">    

    <h1 style="text-align: center; margin-bottom: 2rem">Welcome to our library!</h1>

    <div class="container">
      <div class="row">

        <div class="card" style="width: 18rem;">
        <img src="https://cdn.pixabay.com/photo/2016/09/08/22/43/books-1655783__340.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Our Media Portfolio</h5>
          <p class="card-text">Here you can browse through our big media Portfolio of 100 Million products.</p>
          <a href="index.php" class="btn" style="background-color: #7828FD; color: white;">Show Media</a>
        </div>
        </div>

        <div class="card" style="width: 18rem;">
        <img src="https://cdn.pixabay.com/photo/2012/03/04/00/17/books-21849__340.jpg" class="card-img-top" alt="...">
        <div class="card-body">
        <h5 class="card-title">Add Media</h5>
        <p class="card-text">Here you can add to our big media Portfolio of 100 Million products.</p>
        <a href="create.php" class="btn" style="background-color: #7828FD; color: white;">Add Media</a>
        </div>
        </div>

        <div class="card" style="width: 18rem;">
        <img src="https://cdn.pixabay.com/photo/2015/07/31/11/45/library-869061__340.jpg" class="card-img-top" alt="...">
        <div class="card-body">
        <h5 class="card-title">Contact Us</h5>
        <p class="card-text">Do you have any questions, suggestions? Feel free to cantact us.</p>
        <a href="create.php" class="btn" style="background-color: #7828FD; color: white;">Contact Us</a>
        </div>
        </div>

      </div>
    </div>


        </div>

    </body>
</html>