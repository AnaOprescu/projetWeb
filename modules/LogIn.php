<!doctype html>
<html>
 <head>
   <title>Erasmus - A life chainging experience</title>
     <?php include('../template/links_head.php'); ?>
 </head>

  <body>
<!--the header part -->
<?php include('../template/header.php'); ?>

<!--the body of the home page -->
<main>

<!--created the log in form + button submit -->
<div class="col s12 m4 l2">&nbsp;</div>
<div class="col s12 m4 l8">
  <div class="icon-block">
    <h2 class="center light-blue-text"><i class="fa fa-user-plus"></i></h2>
    <h5 class="center"> Log in to your account </h5>
</div>
<div class="col s12 m4 l2">&nbsp;</div>
</div>
    <div class="row" id="form_center">
      <form class="col s12">
        <div class="row">
          <div class="input-field col s6">
            <i class="material-icons prefix">account_circle</i>
            <input id="icon_prefix" type="text" class="validate">
            <label for="icon_prefix">Name</label>
          </div>
          <div class="input-field col s6">
            <i class="material-icons prefix">vpn_key</i>
            <input id="icon_telephone" type="tel" class="validate">
            <label for="icon_telephone">Password</label>
          </div>
        </div>
      </form>
    </div>
  </div>

   <button class="btn waves-effect waves-light orange lighten-2" type="submit" name="action" id="form_button">Submit
    <i class="material-icons right">send</i>
  </button>

<!-- the footer part-->
</main>
<!-- the footer part-->
     <?php include('../template/footer.php'); ?>
</body>
</html>
