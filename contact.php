<?php
session_start();
if(!isset($_SESSION['username']))
header('location:contact.html')
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <title>|| IRCTC Corporate Portal ||</title>
  <link rel="icon" type="image/png" href="assets/images/favicon.png">
  <!--Main style css-->
  <link rel="stylesheet" href="assets/css/style.css">
  <!--Responsive style css-->
  <link rel="stylesheet" href="assets/css/responsive.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <script src="assets/js/jquery.min.js"></script>

  <script>
    jQuery(function () {
      jQuery('#headers').load('header.html');
      jQuery('#footer').load('footer.html');
    });
  </script>
  <style>
    div.elem-group {
      margin: 40px 0;
    }

    label {
      display: block;
      font-family: 'Aleo';
      padding-bottom: 4px;
      font-size: 1.25em;
    }

    input,
    select,
    textarea {
      border-radius: 2px;
      border: 1px solid #ccc;
      box-sizing: border-box;
      font-size: 1.25em;
      font-family: 'Aleo';
      width: 500px;
      padding: 8px;
    }

    textarea {
      height: 250px;
    }

    button {
      height: 50px;
      background: green;
      color: white;
      border: 2px solid darkgreen;
      font-size: 1.25em;
      font-family: 'Aleo';
      border-radius: 4px;
      cursor: pointer;
    }

    button:hover {
      border: 2px solid black;
    }
    .user ul{
  margin:auto;
  padding:1.5rem;
  font-weight:500;
  font-size:1.2rem;
  color:red;
  margin-right:0;
}
  </style>
</head>

<body><br><br>
  <center>
    <!-- Start Header Here -->
    <div id="headers"></div>
    <header class="main_header fixed_header">
      <div class="container clearfix">
        <div class="logo_head">
          <a href="index.php"><img src="assets/images/irctc-new-logo.png" alt=""></a>
        </div>
        <div class="navbar-expand-lg nav_btn_toggle">
          <button class="navbar-toggler open_mobile_menu" type="button" data-target="#topNavMobile">
            <div class="menuName">Menu</div>
            <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
          </button>
        </div>

        <nav class="top_nav_links navbar navbar-expand-lg">
          <div class="collapse navbar-collapse" id="topNav">
            <ul class="navbar-nav">
              <li class="has-child">
                <a href="index.php">Home</a>
              </li>
              <li class="has-child">
                <a href="about.php">About Us</a>

              </li>

              <li><a href="logout.php">Log out</a></li>

            </ul>
                    <div class="user">

  <ul>Hello <?php echo $_SESSION['username'];?></ul>
</div>
           
          </div>
        </nav>

      </div>
    </header><br><br><br><br>
    <!--END main header -->
    <center>
      <h1>Contact Us </h1><br>
      <form action="thankyou.html" method="post">
        <div class="elem-group">
          <label for="name">Your Name</label>
          <input type="text" id="name" name="visitor_name" placeholder="Enter Name" pattern=[A-Z\sa-z]{3,20} required>
        </div>
        <div class="elem-group">
          <label for="email">Your E-mail</label>
          <input type="email" id="email" name="visitor_email" placeholder="name@email.com" required>
        </div>
        <div class="elem-group">
          <label for="department-selection">Choose Concerned Department</label>
          <select id="department-selection" name="concerned_department" required>
            <option value="">Select a Department</option>
            <option value="billing">Billing</option>
            <option value="marketing">Marketing</option>
            <option value="technical support">Technical Support</option>
          </select>
        </div>
        <div class="elem-group">
          <label for="title">Reason For Contacting Us</label>
          <input type="text" id="title" name="email_title" required placeholder="" pattern=[A-Za-z0-9\s]{8,60}>
        </div>
        <div class="elem-group">
          <label for="message">Write your message</label>
          <textarea id="message" name="visitor_message" placeholder="Say whatever you want." required></textarea>
        </div>
        <a href="thankyou.html">
          <button type="submit">Send Message</button></a>
      </form>
    </center>
    <!-- Start Footer -->
    <div id="footer"></div>
    <footer>

      <div class="copyright">© 2021 IRCTC | MINI PROJECT BY KARNA KUMAR CHAUDHARY.</div>
    </footer>
    <a id="back-to-top" href="#" class="back-to-top" role="button" title="Click to return on the top page"
      data-toggle="tooltip" data-placement="left">
      <i class="fa fa-arrow-up"></i>
    </a>
    <!--Bootstrap 4.1.0-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="assets/libs/bootstrap-4.1.0/bootstrap.min.js"></script>

    <!--OwlCarousel2-2.3.4-->
    <script src="assets/libs/owlcarousel2-2.3.4/owl.carousel.min.js"></script>
    <!--Custom js-->
    <script src="assets/js/custom.js"></script>
    <!--Custom js-->
    <script src="assets/js/marquee.js"></script>
    <script>
      $(document).ready(function () {
        $(window).scroll(function () {
          if ($(this).scrollTop() > 50) {
            $('#back-to-top').fadeIn();
          } else {
            $('#back-to-top').fadeOut();
          }
        });
        // scroll body to 0px on click
        $('#back-to-top').click(function () {
          $('#back-to-top').tooltip('hide');
          $('body,html').animate({
            scrollTop: 0
          }, 800);
          return false;
        });

        $('#back-to-top').tooltip('show');

      });    
    </script>


</body>

</html>