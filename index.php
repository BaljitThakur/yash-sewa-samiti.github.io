<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title>Yash sewa sameti events</title>
  <link rel="stylesheet" href="styles.css" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

</head>

<body>
<?php
    require('db.php');
    session_start();
    ?>

  <?php if($_SESSION['username']){ ?>

  <header class="top">
    <div class="container">
      <div class="row align-item-center">
        <div class="col-md-6 col-sm-8 col-xs-6">
          <h3>Yash Sewa Samiti</h3>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6">
          <p>Random event</p>
          <a href="login.php" class="btn btn-primary">Add Event</a>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6">
          <p><?php echo $_SESSION['username']; ?></p>
          <a href="logout.php" class="btn btn-primary">logout</a>
        </div>
      </div>
    </div>
  </header>

   <?php } 
   
   else {
   ?>

  <header class="top">
    <div class="container">
      <div class="row align-item-center">
        <div class="col-md-10 col-sm-8 col-xs-6">
          <h3>Yash Sewa Samiti</h3>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6">
          <p>Random event</p>
          <a href="login.php" class="btn btn-primary">Add Event</a>
        </div>
        
      </div>
    </div>
  </header>
  <?php } ?>
  <!-- //carousel -->


  <div class="container-fluid" id="mycaro">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner">
        <div class="item active">
          <img src="img1.png" alt="educate all" id="img" />
          <div class="carousel-caption">
            <h3>Educate all</h3>
            <p>Jab padhega india tabhi toh badhega india</p>
          </div>
        </div>

        <div class="item">
          <img src="img2.png" alt="Chicago" id="img" />
          <div class="carousel-caption">
            <h3>Educate all</h3>
            <p>Jab padhega india tabhi toh badhega india</p>
          </div>
        </div>

        <div class="item">
          <img src="img3.png" alt="New York" id="img" />
          <div class="carousel-caption">
            <h3>Educate all</h3>
            <p>Jab padhega india tabhi toh badhega india</p>
          </div>
        </div>
      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>





  <div class="container">
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "1234";
    $dbname = "event";
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }
    $sql = "SELECT title, description, imagefile FROM data";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
      // output data of each row
      while ($row = mysqli_fetch_assoc($result)) {
    ?>
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-lg-12">
              <a href="">
                <div class="card-flyer">
                  <div class="text-box">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="image-box">
                          <img src="cardimg1.png" alt="" />
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="text-container">
                          <h6><?php echo $row["title"]; ?></h6>
                          <p>
                          <?php echo $row["description"]; ?>
                          </p>
                          <a href="#" class="btn btn-outline-primary">Know more</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>




    <?php
      }
    } else {
      echo "0 results";
    }

    mysqli_close($conn);

    ?>
  </div>

  <div id="footer">
    <div class="container">
      <h1>Footer</h1>
    </div>
  </div>


</body>

</html>