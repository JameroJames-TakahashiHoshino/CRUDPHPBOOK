<?php
// JameroBootstrap7 - Car e-commerce (Bootstrap 3)
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>JameroCars - Car E-Commerce</title>

  <!-- Bootstrap 3 CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

  <style>
   
    body {
      margin:0;
      font-family: Arial, sans-serif;
      color: #fff;
      background-image:
        linear-gradient(rgba(5,10,15,0.75), rgba(5,10,15,0.5)),
        url('https://images.unsplash.com/photo-1503376780353-7e6692767b70?auto=format&fit=crop&w=1800&q=80');
      background-size: cover;
      background-position: center;
      background-attachment: fixed;
    }

    /* Navbar */
    .navbar-inverse {
      background-color: rgba(0,0,0,0.75);
      border-color: rgba(0,0,0,0.85);
    }
    .navbar-inverse .navbar-brand { color: #f1c40f; font-weight:700; }
    .navbar-inverse .nav > li > a { color: #ddd; }
    .navbar-inverse .nav > li > a:hover { color: #fff; }

    /* Jumbotron */
    .jumbotron {
      background: rgba(0,0,0,0.45);
      color: #fff;
      border-radius: 8px;
      padding: 40px 20px;
      margin-top: 20px;
    }

    /* Product thumbnails */
    .thumbnail {
      background: rgba(255,255,255,0.95);
      color: #000;
      border: none;
      border-radius: 8px;
      padding: 0;
      overflow: hidden;
      transition: transform 0.18s ease, box-shadow 0.18s ease;
    }
    .thumbnail:hover {
      transform: translateY(-6px);
      box-shadow: 0 10px 30px rgba(0,0,0,0.45);
    }
    .thumbnail img {
      width:100%;
      height:180px;
      object-fit:cover;
      display:block;
    }
    .caption { padding: 12px; }

    /* Section headings */
    .section-title {
      color: #fff;
      margin: 40px 0 20px;
      text-shadow: 0 2px 6px rgba(0,0,0,0.6);
    }

    /* Footer */
    footer {
      background: rgba(0,0,0,0.7);
      color: #bbb;
      padding: 18px 0;
      margin-top: 30px;
    }

    .dark-card {
      background: rgba(20, 20, 20, 0.75);
      color: #f0f0f0;
      border-radius: 10px;
      padding: 30px 25px;
      box-shadow: 0 10px 25px rgba(0,0,0,0.6);
      backdrop-filter: blur(6px);
      margin-bottom: 40px;
    }
    .dark-card h2, .dark-card h3 {
      color: #f1c40f;
      font-weight: 700;
    }
    .dark-card p {
      font-size: 16px;
      line-height: 1.8;
      color: #ddd;
    }
    .dark-card hr {
      border-top: 2px solid #f1c40f;
      width: 60px;
      margin: 20px auto;
    }
    .form-control { border-radius: 4px; }
  </style>
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-inverse">
    <div class="container">
      <div class="navbar-header">
        <a class="navbar-brand" href="index.php">JameroCars</a>
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
        </button>
      </div>

      <div class="collapse navbar-collapse" id="nav-collapse">
        <ul class="nav navbar-nav navbar-right">
          <li class="active"><a href="#home">Home</a></li>
          <li><a href="#shop">Shop</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header / Hero -->
  <div class="container" id="home">
    <div class="jumbotron text-center">
      <h1>Welcome to JameroCars</h1>
      <p class="lead">Find your dream car — luxury, sports, or everyday rides.</p>
      <p><a class="btn btn-warning btn-lg" href="#shop" role="button">Browse Cars</a></p>
    </div>
  </div>

  <!-- Shop / Products -->
  <div id="shop" class="container">
    <h2 class="text-center section-title">Available Cars</h2>

    <?php
      $cars = [
        ["name"=>"Ford Mustang GT",       "price"=>55000,  "image"=>"Images/Image1.jpg"],
        ["name"=>"Chevrolet Camaro",      "price"=>48000,  "image"=>"Images/Image2.jpg"],
        ["name"=>"Tesla Model S",         "price"=>75000,  "image"=>"Images/Image3.jpg"],
        ["name"=>"BMW M3",                "price"=>67000,  "image"=>"Images/Image4.jpg"],
        ["name"=>"Audi R8",               "price"=>142000, "image"=>"Images/Image5.jpg"],
        ["name"=>"Mercedes AMG GT",       "price"=>119000, "image"=>"Images/Image6.jpg"],
        ["name"=>"Porsche 911 Carrera",   "price"=>115000, "image"=>"Images/Image7.jpg"],
        ["name"=>"Lamborghini Huracan",   "price"=>210000, "image"=>"Images/Image8.jpg"],
        ["name"=>"Ferrari 488 GTB",       "price"=>250000, "image"=>"Images/Image9.jpg"],
      ];

      $i = 0;
      echo '<div class="row">';
      foreach ($cars as $car) {
        echo '<div class="col-sm-4" style="margin-bottom:18px;">';
          echo '<div class="thumbnail">';
            echo '<img src="'.htmlspecialchars($car['image']).'" alt="'.htmlspecialchars($car['name']).'">';
            echo '<div class="caption text-center">';
              echo '<h4>'.htmlspecialchars($car['name']).'</h4>';
              echo '<p><strong>$'.number_format($car['price'], 0, '.', ',').'</strong></p>';
              echo '<p><a href="buy.php?car='.urlencode($car['name']).'&price='.$car['price'].'&image='.urlencode($car['image']).'" class="btn btn-success" role="button">Add to Cart</a></p>';
            echo '</div>';
          echo '</div>';
        echo '</div>';

        $i++;
        if ($i % 3 == 0) { echo '</div><div class="row">'; }
      }
      echo '</div>';
    ?>
  </div>

  <!-- About -->
  <div id="about" class="container" style="margin-top:80px;">
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <div class="dark-card text-center">
          <img src="https://cdn-icons-png.flaticon.com/512/145/145867.png" alt="Boy Icon" style="width:80px; margin-bottom:15px;">
          <h2>About JameroCars</h2>
          <hr>
          <p>
            <strong>JameroCars</strong> is your trusted car e-commerce platform where innovation meets passion.  
            We connect buyers with top-quality vehicles — from reliable daily drivers to elite sports cars.  
          </p>
          <p>
            Our mission is simple: make car buying <strong>transparent, exciting, and secure</strong>.  
            Every car listed undergoes strict inspection, high-quality imagery, and safe transaction support.  
          </p>
          <p style="font-size:18px; font-style:italic; margin-top:15px; color:#f1c40f;">
            "Drive your dreams with confidence."
          </p>
        </div>
      </div>
    </div>
  </div>

  <!-- Contact -->
  <div id="contact" class="container" style="margin-bottom:80px;">
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <div class="dark-card">
          <div class="row">
            <!-- Contact Form -->
            <div class="col-md-6">
              <h3 class="text-center">Get in Touch</h3>
              <hr>
              <form method="post" action="#">
                <div class="form-group">
                  <input id="name" name="name" class="form-control" placeholder="Full Name" required>
                </div>
                <div class="form-group">
                  <input id="email" name="email" type="email" class="form-control" placeholder="Email Address" required>
                </div>
                <div class="form-group">
                  <textarea id="message" name="message" class="form-control" rows="5" placeholder="Your Message" required></textarea>
                </div>
                <button type="submit" class="btn btn-warning btn-block">Send Message</button>
              </form>
            </div>

            <!-- Contact Info -->
            <div class="col-md-6 text-center" style="margin-top:20px;">
              <h3>Contact Info</h3>
              <hr>
              <p><i class="glyphicon glyphicon-map-marker"></i> Manila, Philippines</p>
              <p><i class="glyphicon glyphicon-earphone"></i> +63 912 345 6789</p>
              <p><i class="glyphicon glyphicon-envelope"></i> support@jamerocars.com</p>

              
              <div style="margin-top:20px; border-radius:8px; overflow:hidden;">
                <iframe 
                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7721.593543798568!2d121.037647!3d14.599512!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c9fa32c4e4b9%3A0x9e7453b6c32dd2c!2sManila!5e0!3m2!1sen!2sph!4v1700000000000"
                  width="100%" height="220" frameborder="0" style="border:0;" allowfullscreen></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer class="text-center">
    <div class="container">
      <p>&copy; <?php echo date('Y'); ?> JameroCars. All rights reserved.</p>
    </div>
  </footer>

  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>
