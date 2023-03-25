<?php 

require 'db_connection.php';
require 'actions/file_upload.php'; 

$id = $_GET['id'];

$sql = "SELECT * FROM items WHERE id = $id";
$result = mysqli_query($connect, $sql);
$row = mysqli_fetch_assoc($result);   

if(isset($_POST["submit"])){

  $title = $_POST['title'];
  $image = file_upload($_FILES['image'], "update");    
  $ISBN_code = $_POST['ISBN_code'];
  $description = $_POST['description'];
  $type = $_POST['type'];
  $author_first_name = $_POST['author_first_name'];
  $author_last_name = $_POST['author_last_name'];
  $publisher_name = $_POST['publisher_name'];
  $publisher_address = $_POST['publisher_address'];
  $publish_date = $_POST['publish_date'];
  $status = $_POST['status'];

  
  if($image->error == 0){

    $sql_update = " UPDATE `items` SET `title`='$title',`image`='$image->fileName',`ISBN_code`='$ISBN_code',`description`='$description',`type`='$type',`author_first_name`='$author_first_name',`author_last_name`='$author_last_name',`publisher_name`='$publisher_name',`publisher_address`='$publisher_address',`publish_date`='$publish_date',`status`='$status' WHERE `id` = '$id'";
    
    
    
   
  }else{

    $sql_update = " UPDATE `items` SET `title`='$title',`ISBN_code`='$ISBN_code',`description`='$description',`type`='$type',`author_first_name`='$author_first_name',`author_last_name`='$author_last_name',`publisher_name`='$publisher_name',`publisher_address`='$publisher_address',`publish_date`='$publish_date',`status`='$status' WHERE `id` = '$id'";
    
  }
  if(mysqli_query($connect, $sql_update)){

    header ('Location: index.php');
    
  }
   
}

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <meta name="author" content="Jaime Coca">
    <meta name="generator" content="Hugo 0.108.0">
    <title>Vienna Central Library</title>
    <?php require_once 'components/bootstrap.php'?>

    
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>

    
  </head>
  <body>
    
  <header>
  
  <div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container">
      <a href="index.php" class="navbar-brand d-flex align-items-center">
        
        <strong>Vienna Central Library</strong>
      </a>
      
    </div>
  </div>
  </header>


<main>

  <section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">Vienna Central Library</h1>
        <p class="lead text-muted">Welcome to the VCL manage system</p>
        
      </div>
    </div>
  </section>

  <div class="album py-5 bg-light">
    <div class="container">

      

      
        <fieldset>
            <legend class='h2'>Update Item</legend>
            <form method="post" enctype="multipart/form-data">
                <table class='table'>
                    <tr>
                        <th>Title</th>
                        <td><input class='form-control' type="text" name="title"  placeholder="Item title" required value="<?=$row['title']?>"/></td>
                    </tr> 
                    <tr>
                        <th>Image</th>
                        <td><input class='form-control' type="file" name="image" /></td>
                    </tr>  
                    <tr>
                        <th>ISBN Code</th>
                        <td><input class='form-control' type="number" name="ISBN_code" placeholder="Enter the ISBN code (10 digits)" maxlength='10' required value="<?=$row['ISBN_code']?>"/></td>
                    </tr>
                    <tr>
                      <th>Description</th>
                      <td><input class='form-control' type="text" name="description" placeholder="Description" value="<?=$row['description']?>"/></td>
                    </tr>
                    <tr>
                      <th>Type</th>
                      <td>
                        <select class="form-select" aria-label="Default select example" name="type" required value="<?=$row['type']?>">
                              
                              <option value="Book">Book</option>
                              <option value="CD">CD</option>
                              <option value="DVD">DVD</option>
                        </select>
                      </td>
                    </tr>
                    <tr>
                      <th>Author (First Name)</th>
                      <td><input class='form-control' type="text" name="author_first_name"  placeholder="First name" required value="<?=$row['author_first_name']?>"/>
                      </td>
                    </tr>
                    <tr>
                      <th>Author (Last Name)</th>
                      <td><input class='form-control' type="text" name="author_last_name"  placeholder="Last name" required value="<?=$row['author_last_name']?>"/>
                      </td>
                    </tr>
                    <tr>
                      <th>Publisher</th>
                      <td><input class='form-control' type="text" name="publisher_name"  placeholder="Publisher name" required value="<?=$row['publisher_name']?>"/>
                      </td>
                    </tr>
                    <tr>
                      <th>Publisher Address</th>
                      <td><input class='form-control' type="text" name="publisher_address"  placeholder="Publisher address" value="<?=$row['publisher_address']?>" />
                      </td>
                    </tr>
                    <tr>
                      <th>Publish Date</th>
                      <td><input class='form-control' type="date" name="publish_date"  placeholder="Publish date" required value="<?=$row['publish_date']?>"/>
                      </td>
                    </tr>
                    <tr>
                      <th>Status</th>
                      <td>
                        <select class="form-select" aria-label="Default select example" name="status" required value="<?=$row['status']?>">
                          <option value="Available">Available</option>
                          <option value="Reserved">Reserved</option>                             
                        </select>                         
                      </td>
                    </tr>                                      

                </table>
                
                <input type="submit" name="submit" value="Save" class='btn btn-success'>
                 

            </form>
        </fieldset>

      
    </div>
  </div>

</main>


<footer class="text-muted py-5">
  <div class="container">
    <p class="float-end mb-1">
      <a href="#" class="btn btn-secondary">Back to top</a>
    </p>
    <p class="mb-1">&copy;Vienna Central Library  <br>
    Traumgasse 54, 1030 Wien</p>
    
  </div>
</footer>


 

      
  </body>
</html>
