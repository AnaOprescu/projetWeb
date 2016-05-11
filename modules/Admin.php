<!doctype html>
<html>
 <head>
   <meta charset="UTF-8">
   <!--Import own CSS page-->
   <link href="../materialize/style.css" rel="stylesheet">
     <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import CSS library-->
    <link href='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css' rel='stylesheet'>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
 </head>

  <body>
<!--the header part -->
   <header>
     <nav class="light-blue lighten-2">
    <div class="nav-wrapper">
      <a href="#" class="brand-logo"><i class="material-icons">language</i>< </a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="About.html">About</a></li>
        <li><a href=".">Home</a></li>
        <li><a href="../modules/LogIn.html">Log In</a></li>
        <li><a href="Register.html">Register</a></li>
      </ul>
    </div>
  </nav>
</header>


<!--the body of the home page -->
<main>
 <!-- this part is created to modelise who to diplay the page for the admin -->
  <div class="container">
      <div class="section">

        <!--   Icon Section   -->
        <div class="row">
          <div class="col s12 m4">
            <div class="icon-block">
              <h2 class="center light-blue-text"><i class="material-icons">language</i></h2>
              <h5 class="center">List of countries</h5>
            </div>
          </div>

          <div class="col s12 m4">
            <div class="icon-block">
              <h2 class="center light-blue-text"><i class="material-icons">group</i></h2>
              <h5 class="center">List of members</h5>
            </div>
          </div>

          <div class="col s12 m4">
            <div class="icon-block">
              <h2 class="center light-blue-text"><i class="material-icons">language</i></h2>
              <h5 class="center">List of cities</h5>
            </div>
          </div>
        </div>

      </div>
      <br><br>

      <div class="section">

      </div>
    </div>


<!-- the footer part-->
</main>
   <footer class="page-footer light-blue lighten-2">
    <div class="container">
      <div class="row">
        <div class="col s4">
          <img src="../images/logo.png" class="responsive-img">
        </div>
        <div class="col s4">
        <h5 class="white-text">Erasmus Association</h5>
        <p class="grey-text text-lighten-4"> A life-changing experience</p>
      </div>
        <div class="col s4">
          <h5 class="white-text">Links</h5>
          <ul>
            <li><a class="grey-text text-lighten-3" href="#!">GitHub</a></li>
            <li><a class="grey-text text-lighten-3" href="http://www.polytech-montpellier.fr" target="_blank">Polytech Montpellier</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      © 2016 Ana-Maria OPRESCU
      </div>
    </div>
  </footer>

  <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>

   <script>
      $(document).ready(function(){
        $('.slider').slider();
      });
      </script>
</body>
</html>
