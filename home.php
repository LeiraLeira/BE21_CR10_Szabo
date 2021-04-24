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

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Welcome to the BIG LIBRARY</a>
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
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact</a>
        </li>
        <!-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown link
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li> -->
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




    <div class="container">
      <div class="row">

        <div class="card" style="width: 18rem;">
        <img src="https://cdn.pixabay.com/photo/2016/09/08/22/43/books-1655783__340.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Our Media Portfolio</h5>
          <p class="card-text">Here you can browse through our big media Portfolio of 100 Million products.</p>
          <a href="index.php" class="btn btn-primary" >Show Media</a>
        </div>
        </div>

        <div class="card" style="width: 18rem;">
        <img src="https://cdn.pixabay.com/photo/2016/09/10/17/18/book-1659717__340.jpg" class="card-img-top" alt="...">
        <div class="card-body">
        <h5 class="card-title">Our Media Portfolio</h5>
        <p class="card-text">Here you can add to our big media Portfolio of 100 Million products.</p>
        <a href="create.php" class="btn btn-primary" >Add Media</a>
        </div>
        </div>

        <div class="card" style="width: 18rem;">
        <img src="https://cdn.pixabay.com/photo/2016/09/10/17/18/book-1659717__340.jpg" class="card-img-top" alt="...">
        <div class="card-body">
        <h5 class="card-title">Our Media Portfolio</h5>
        <p class="card-text">Do you have any questions, suggestions? Feel free to cantact us.</p>
        <a href="create.php" class="btn btn-primary" >Contact Us</a>
        </div>
        </div>

      </div>
    </div>








            <!-- <div class='mb-3'>
                <a href= "index.php"><button class='btn btn-primary'type="button" >Show Media</button></a>
                <a href= "create.php"><button class='btn btn-primary'type="button" >Add Media</button></a>
            </div> -->
            <!-- <p class='h2'>Media Info</p>
            <table class='table table-striped'>
                <thead class='table-success'>
                    <tr>
                        <th>id</th>
                        <th>isbn_code</th>
                        <th>picture</th>
                        <th>title</th>
                        <th>a_first_name</th>
                        <th>a_last_name</th>
                        <th>short_description</th>
                        <th>p_name</th>
                        <th>p_size</th>
                        <th>p_address</th>
                        <th>p_date</th>
                        <th>media_type</th>
                        <th>status</th>
                    </tr>
                </thead>
                <tbody>
                    <?= $tbody;?>
                </tbody>
            </table> -->
        </div>
    </body>
</html>