<?php require_once ('db_connection.php'); 

$sql = "SELECT * FROM items";
$result = mysqli_query($connect, $sql);
$tbody='';

if(mysqli_num_rows($result)  > 0) {    
  while($row = mysqli_fetch_assoc($result)){     

      $tbody .= "
      <div class='col'>
          <div class='card shadow-sm'>
            <img src='images/$row[image]' class='card-img-top'>

            <div class='card-body'>
              <h5 class='card-title'>$row[title]</h5>
              
              <small class='text-muted'>$row[type]</small>
              
              <h6 class='card-title'>by $row[author_first_name] $row[author_last_name]</h6>

              

              <div class='d-flex justify-content-between align-items-center'>
                

                <a href='details.php?id=$row[id]' class='btn btn-lg btn-primary'>Details</a>    

                <a href='update.php?id=$row[id]' class='btn btn-lg btn-warning'>Edit</a>

                <a href='delete.php?id=$row[id]' class='btn btn-lg btn-danger'>Delete</a>                  
                
              </div>
                <small class='text-muted'>$row[status]</small>
            </div>
          </div>
        </div>";
  }
}else {
  $tbody =  "<tr><td colspan='5'><center>No Data Available </center></td></tr>";
};


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
    <img src="pictures/hero.jpg">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        
        <p class="lead text-muted">Welcome to the VCL manage system</p>
        <p>
          <a href="create.php" class="btn btn-success my-2">Create Item</a>
          
        </p>
      </div>
    </div>
  </section>

  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

      
        <?= $tbody;?>

      </div>
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


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>



