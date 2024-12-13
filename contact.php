<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="styles/style.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> 

</head>

<body>


  <?php include('header.php');
  if (isset($_SESSION['msg'])) {
    echo '<script>
  const Toast = Swal.mixin({
  toast: true,
  position: "top-end",
  showConfirmButton: false,
  timer: 3000,
  timerProgressBar: true,
  didOpen: (toast) => {
    toast.onmouseenter = Swal.stopTimer;
    toast.onmouseleave = Swal.resumeTimer;
  }
});
Toast.fire({
  icon: "success",
  title: "'.$_SESSION['msg'].'"
});</script>
  ';
  session_unset();
  }
  ?>

  </head>

  <body>

    <div class="header">
      <img src="image/px2.jpg">
    </div>

    <div class="contain">

      <div class="wrapper">

        <div class="form">
          <h4>Contact us</h4>
          <h2 class="form-headline"> We are excited to have the opportunity to work with you and provide our expertise
            to help achieve your
            goals.</h2>
          <form method="POST" id="submit-form" action="save.php">

            <p>
              <input id="name" class="form-input" type="text" placeholder="Your Name*" name="fullname" onkeydown="return/^[a-zA-Z\s]+$/.test(event.key)" required>
              <small></small>
            </p>

            <p>
              <input id="email" name="email" class="form-input" type="email" placeholder="Your Email*">
              <small></small>
            </p>

            <p class="full-width">
              <input id="phone" name="mobile" class="form-input" type="text" placeholder=" Your Phone Number*" onkeypress="return validateNumber(event)" maxlength="10" minlength="10" required>
              <small></small>
            </p>

            <p class="full-width">
              <textarea name="yourmessage" id="message" cols="30" rows="7" placeholder="Your Message*" required></textarea>
              <small></small>
            </p>
            <!--<p class="full-width">
          <input type="checkbox" id="checkbox" name="checkbox" checked> Yes, I would like to receive communications by call / email about Company's services.
        </p>-->
            <p class="full-width">
              <input type="submit" class="submit-btn" value="Submit" id="form-submit">

              <span style="color:green;" id="msg"></span>
            </p>
          </form>
        </div>

        <div class="contacts contact-wrapper">

          <ul>
            <li>BSI, Bussiness Sector 63 (Noida)<span class="highlight-text-grey"></span><br>We are ready to know
              how we can help you?</li>
            <span class="hightlight-contact-info">
              <li class="email-info"><i class="fa fa-envelope" aria-hidden="true"></i>pss@gmail.com</li>
              <li><i class="fa fa-phone" aria-hidden="true"></i> <span class="highlight-text">+911 563 0789</span></li>
            </span>
          </ul>
        </div>
      </div>
    </div>


    <div class="mapouter">
      <div class="gmap_canvas"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d59673.37255352948!2d77.29224!3d20.808039!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x604c3c4160741f7b%3A0x5be6bb2f97663c66!2sPSS%20Techno%20Service%20Digital%20Marketing!5e0!3m2!1sen!2sus!4v1714728553392!5m2!1sen!2sus" width="100%" height="450" style="border:0; margin-top:30px; margin-bottom:10px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
    </div>








    <script>
      function validateNumber(e) {
        const pattern = /^[0-9]$/;
        return pattern.test(e.key);
      }
    </script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9gybBogGzCGa9ZQIVFANpcQ7c5bSJ5gE6l9mbCe3m/NB6Y2Dl7z" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-pprn3073KE6tl6YczR6fIV0g0QnjNQzovGVdE8O3pEgGii1jRM/43VsF4y/faTbt" crossorigin="anonymous"></script>

    <script>
      function toggleMenu() {
        var links = document.querySelector('.links');
        links.classList.toggle('active');
      }
    </script>



    <!--footer-->

    <?php include('footer.php'); ?>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>

</html>