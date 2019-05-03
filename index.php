<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Luckiest+Guy" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="function.js"></script>

    <title>Assignment 01</title>
</head>
<body>
  <?php include 'navbar.php' ?>

  <div id="date" class='font date'> 
    Today is:&nbsp  
    <?php include 'display-server-time.php' ?>
  </div>
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/university.jpg" class="d-block w-100" alt="...">
                <div class="slogan">
                  <h1 class="font text-header text-shadow">David Souza</h1>
                  <h4 class="font text-shadow">Developer Student</h4>
                  <h4 class="font text-shadow">Business Lover</h4>
                </div>
            </div>
            </div>
          </div>
      </div>
      <div id="coming-soon">
        <div class='font date'>
        <?php include 'countdown.php' ?> 
        </div>
        <img src="img/coming.png" alt="">
      </div>
</html>