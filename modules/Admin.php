<!doctype html>
<html>
 <head>
   <title> Admin first page</title>
     <?php include('../template/links_head.php'); ?>
 </head>

<!--the header part -->
<?php include('../template/header_admin.php'); ?>


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

</main>
<!-- the footer part-->
     <?php include('../template/footer.php'); ?>
</body>
</html>
