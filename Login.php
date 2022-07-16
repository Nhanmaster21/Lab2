 <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dream Body</title>
    <!-- custom css file link -->
    <link rel="stylesheet" href="css/style.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap"
      rel="stylesheet"
    />
  </head>

  <body>
    <div class="left">
      <a href="#">
        <img src="images/Logo.png" alt="Gym Logo" />
      </a>
      <div>Dream Body</div>
    </div>
    <div class="mid">
      <nav class="navbar">
        <ul>
          <li><a href="#" class="active">Home</a></li>
          <li><a href="#">Training</a></li>
          <li><a href="#">Workout Gallery</a></li>
          <li><a href="#">About us</a></li>
          <li><a href="#">Contact us</a></li>
          <input type="text" name="search" placeholder ="Search here"> 
        </ul>
      </nav>
    </div>
    <div class="right">
      <button class="btn">Call Us Now</button>
      <button class="btn">Email</button>
      
    </div>
    <div class="container">
      <form id = "form_reg" action="reg.php" method="post" netlify>
        <h1>Welcome to our service</h1>
        <h2>Register Now!!!</h2>
        <div class="inputs">
          <input type="text" name="name" placeholder="Enter your Name" />
          <input type="number" name="age" placeholder="Enter your Age" />
          <input type="tel" name="mobile" placeholder="Enter your Phone"/>
          <input type="email" name="email" placeholder="Enter your Email ID" />
          <input type="pass" name="pass" placeholder="Enter your Password" />
        </div>
        <input type="submit" class ="btn btn-primary btn-block mt-4" name="btn-reg" value ="Submit">
      </form>
    </div>
  <!-- custom css file link -->
  <!-- <script src="js/script.js"></script> -->
  </body>
</html>
