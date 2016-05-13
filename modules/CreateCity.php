<!doctype html>
<html>
 <head>
   <title> Create a new city </title>
     <?php include('../template/links_head.php'); ?>
 </head>

  <body>
    <!--the header part -->
    <?php include('../template/header_admin.php'); ?>

<!--the body of the home page -->
<!--this page is created in order to realise a form to add a new  city in the base -->
<main>
  <div class="row">
  <div class="col s12 m4 l2">&nbsp;</div>
  <div class="col s12 m4 l8">
    <div class="icon-block">
      <h2 class="center light-blue-text"><i class="fa fa-user-plus"></i></h2>
      <h5 class="center">Add a new city </h5>
  </div>
  <div class="col s12 m4 l2">&nbsp;</div>
</div>
</div>

<div class="row">
  <div class="col s12">

    <div class="col s12 m2 l4">
      &nbsp;
    </div>

    <div class="col s12 m8 l4">
    <form class="col s12" action="../functions/f_city.php" method="post">
      <div class="row">
        <div class="input-field col s6">
          <input id="name" type="text" class="validate" name="name">
          <label for="name" name="name">Name</label>
        </div>
        <div class="input-field col s6">
          <input id="country" type="text" class="validate">
          <label for="country">Country</label>
        </div>
        <div class="input-field col s12">
          <input id="location" type="text" class="validate" name="location">
          <label for="location" name="location">Location</label>  <!--sa fac un trigger ceva, in caz ca nu respecta asta -->
        </div>
            <button class="btn waves-effect waves-light orange lighten-2" type="submit" name="action" id="but">Register
              <i class="material-icons right">send</i>
            </button>
          </div>
        </form>
      </div>
    </div>
  </form>
</div>
</div>
</div>

</main>
<!-- the footer part-->
     <?php include('../template/footer.php'); ?>
</body>
</html>
