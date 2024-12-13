<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel = "stylesheet" href = "styles/style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  
</head>
<style>
    .navbar-nav .nav-link:hover {
        color: greenyellow !important; 
    }
</style>

    <nav class="navbar navbar-expand-lg " style="background-color:black;" >
        <div class="container-fluid">
          <a class="navbar-brand" href="#" >
            <img src="image/ASTREAM-LOGO.png" style="height: 60px; width:210px; margin: 0;
            padding: 0;
            
            line-height: 1;
            font-weight: 600;
            letter-spacing: 0.8px;">
            
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown" style="padding-left: 650px;" >
            <ul class="navbar-nav"  >
              <li class="nav-item" id="navbar">
                <a class="nav-link active" aria-current="page" href="index.php" style="color: white;
                 padding-right: 40px; 
                 font-size:16px;" 
              >Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="abot.php" style="color: white; padding-right: 40px; font-size:16px;">About</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="services.php" role="button" data-bs-toggle="dropdown" style="color: white; padding-right: 40px; font-size:16px;" aria-expanded="false">
                  Services
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="web development.php">Web Development</a></li>
                  <li><a class="dropdown-item" href="webdesigning.php">Web Designing</a></li>
                  <li><a class="dropdown-item" href="Appdevelpment.php">App Development</a></li>
                  <li><a class="dropdown-item" href="softwaredevelop.php">Software Development</a></li>
                  <li><a class="dropdown-item" href="softwaretesting.php">Software Testing</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php" style="color: white; font-size:16px;">Contact</a>
              </li>
            </ul>
            
          </div>
        </div>
      </nav>
