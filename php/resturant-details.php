<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  <!--Fontawesome CDN-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="../styles/styles.css">
  <link rel="stylesheet" href="../styles/resturant-details.css">
  <title>Resturant-Details</title>
</head>

<body>
  <div class="container">
      <div class="row">
          <div class="col-md-12">
              <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                  <a class="navbar-brand" href="./resturant-list.php">Zomato</a>
                  <div class="collapse navbar-collapse" id="navbarNav">
                      <ul class="navbar-nav">
                          <!-- <li class="nav-item active">
                              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                          </li> -->
                          <li class="nav-item">
                              <a href="./update-resturant-details.php" class="nav-link">Update Resturant Details</a>
                          </li>
                      </ul>
                  </div>
              </nav>
          </div>
      </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-10">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <!-- carousel-indicators -->
          <ol class="carousel-indicators">
            <li class="active" data-target="#myCarousel" data-slide-to="0"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
            <!-- <li data-target="#myCarousel" data-slide-to="4"></li> -->
          </ol>
          <div class="carousel-inner">
              <div class="item">
                <img src="../images/donuts.jpg" alt="Donuts">
              </div>
              <div class="item">
                <img src="../images/icecream.jpg" alt="Icecream">
              </div>
              <!-- <div class="item">
                  <img src="../images/milkshakes.jpg" alt="Milkshake">
              </div> -->
              <div class="item">
                <img src="../images/panipuri.jpg" alt="Panipuri">
              </div>
              <div class="item active">
                <img src="../images/sandwich.jpg" alt="Sandwich">
              </div>
          </div>
            <!-- Carousel controls -->
           <a class="carousel-control left" href="#myCarousel" data-slide="prev">
               <span class="glyphicon glyphicon-chevron-left"></span>
           </a>
           <a class="carousel-control right" href="#myCarousel" data-slide="next">
               <span class="glyphicon glyphicon-chevron-right"></span>
           </a>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-8">
        <form action="./resturant-details.php" method="post">
          <div class="form-group">
            <h4>Write a Review</h4>
            <input type="text" class="form-control" id="review" name="review" placeholder="Help other foodies by sharing your review">
            <input type="text" class="form-control" id="rating" name="rating" placeholder="Rate your experience out of 5">
          </div>
            <button type="submit" id="submitReview" class="btn btn-primary">Add a Review</button>
        </form>
      </div>
    </div>
    <div class="row">
      <div class="col-md-8">
        <h4>Review(s)</h4>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3">
                            <img src="../images/burger.jpg" alt="Profile Picture">
                        </div>
                        <div class="col-md-9">
                          <h5><b>Harsha Chinni</b></h5>
                          <p>The food was delicious, If you're a non-veg lover, try Chicken Biryani</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3">
                            <img src="../images/icecream.jpg" alt="Profile Picture">
                        </div>
                        <div class="col-md-9">
                          <h5><b>Sravya Nanda Harsha</b></h5>
                          <p>The food was delicious, If you're a veg lover, try Palak Panner</p>
                        </div>
                    </div>
                </div>
            </div>
      </div>
    </div>
  </div>

</body>

</html>

<?php
// session_start();
  require_once './db_connection.php';
  $conn = new mysqli($hn, $un, $pw, $db);
  if($conn->connect_error) die("connection failed " .$conn->connect_error);
  // print_r($conn);
  echo '<br>';
  // print_r($_SESSION['user_id']);
  print_r($_COOKIE['user_id']);
  $userId = $_COOKIE['user_id'];
  echo '<br>';
  if(isset($_POST['review'])){
    $review = $_POST['review'];
    $rating = $_POST['rating'];
    $query = "INSERT INTO review (description, rating) VALUES ('$review', '$rating')";
    print_r($query);
    echo '<br>';
    $result = $conn->query($query);
    print_r(!$result);
    echo '<br>';
    $fetchReviewId = "SELECT review_id FROM review WHERE description = '$review'";
    // print_r($fetchReviewId);
    $fetchReviewIdResult = $conn->query($fetchReviewId);
    print_r($fetchReviewIdResult);
    $rowCount = $fetchReviewIdResult->num_rows;
    for($loop = 0; $loop< $rowCount; $loop++){
      $fetchReviewIdResult->data_seek($loop);
      $row = $fetchReviewIdResult->fetch_array(MYSQLI_NUM);
      $review_id = $row[0];
    }

  } else{

    echo "No review is written";
  }
?>
