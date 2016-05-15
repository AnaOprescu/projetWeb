<!doctype html>
<html>
 <head>
   <title> Create the home page of the user </title>
     <?php include('../template/links_head.php'); ?>
 </head>

  <body>
    <!--the header part -->
    <?php include('../template/header_user.php'); ?>

<!--the body of the home page -->
<main>
 <!-- this part is created  to diplay the page for the users-->
  <div class="container">
      <div class="section">

        <!--   Icon Section   -->
        <div class="row">
          <div class="col s12 m4">
            <div class="icon-block">
              <h2 class="center light-blue-text"><i class="material-icons">language</i></h2>
              <h5 class="center"><a href="../modules/List_countries.php">List of countries</h5>
              <p>This part is reserved to diplay the list of the countries available, from where you can find the cities and members.</p>
            </div>
          </div>

          <div class="col s12 m4">
            <div class="icon-block">
              <h2 class="center light-blue-text"><i class="material-icons">group</i></h2>
              <h5 class="center"><a href="../modules/List_members.php">List of members</h5>
              <p>This part is reserved to diplay the list of members os this site which are erasmus or a pre-erasmus student that has not already decided what to do.</p>
            </div>
          </div>

          <div class="col s12 m4">
            <div class="icon-block">
              <h2 class="center light-blue-text"><i class="material-icons">note_add</i></h2>
              <h5 class="center"><a href="../modules/Suggestion.php">Suggestion</a></h5>
              <p>This part is created specially for any student that would like to add a new country or city, which after will be included by us on the official list. </p>
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
