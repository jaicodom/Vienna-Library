<?php
require_once '../db_connection.php';
require_once 'file_upload.php';


if ($_POST) {  

  $title = $_POST['title'];
  $image = file_upload($_FILES['image']);
  $ISBN_code = $_POST['ISBN_code'];
  $description = $_POST['description'];
  $type = $_POST['type'];
  $author_first_name = $_POST['author_first_name'];
  $author_last_name = $_POST['author_last_name'];
  $publisher_name = $_POST['publisher_name'];
  $publisher_address = $_POST['publisher_address'];
  $publish_date = $_POST['publish_date'];
  $status = $_POST['status'];

  $uploadError = '';
   
   
   
  $sql = "INSERT INTO `items`(`title`, `image`, `ISBN_code`, `description`, `type`, `author_first_name`, `author_last_name`, `publisher_name`, `publisher_address`, `publish_date`, `status`) VALUES ('$title','$image->fileName','$ISBN_code','$description','$type','$author_first_name','$author_last_name','$publisher_name','$publisher_address','$publish_date','$status')";
  

  if (mysqli_query($connect, $sql) === true) {
       $class = "success";
       $message = "$type successfully created <br>
            <table class='table w-50'><tr>
            <td> $title </td>
            <td> by $author_first_name $author_last_name </td>
            </tr></table><hr>";
       $uploadError = ($image->error !=0)? $image->ErrorMessage :'';
  } else {
       $class = "danger";
       $message = "Error while creating record. Try again: <br>" . $connect->error;
       $uploadError = ($picture->error !=0)? $picture->ErrorMessage :'';
  }
  mysqli_close($connect);
} else {
   header("location: ../error.php");
}
?>


<!DOCTYPE html>
<html lang="en">
   <head>
       <meta charset="UTF-8">
       <title>Update</title>
       <?php require_once '../components/bootstrap.php'?>
   </head>
   <header>
  
        <div class="navbar navbar-dark bg-dark shadow-sm">
            <div class="container">
            <a href="index.php" class="navbar-brand d-flex align-items-center">
                
                <strong>Vienna Central Library</strong>
            </a>
            
            </div>
        </div>
    </header>
   <body>
       <div class="container">
           
           <div class="alert alert-<?=$class;?>" role="alert">
               <p><?php echo ($message) ?? ''; ?></p>
               <p><?php echo ($uploadError) ?? ''; ?></p>
               <a href='../index.php'><button class="btn btn-primary" type='button'>Home</button></a>
           </div>
       </div>
   </body>
   <footer class="text-muted py-5">
  <div class="container">
    <p class="float-end mb-1">
      <a href="#" class="btn btn-secondary">Back to top</a>
    </p>
    <p class="mb-1">&copy;Vienna Central Library  <br>
    Traumgasse 54, 1030 Wien</p>
    
  </div>
</footer>
</html>