<?php include("../controller/c_cookie.php");?>

<!doctype html>
<html>
 <head>
   <title> Log in page </title>
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
      <form class="col s12" method="post" action="../controller/c_login.php">
        <div class="row">
          <div class="input-field col s6">
            <i class="material-icons prefix">account_circle</i>
            <input id="pseudo" type="text" class="validate" name="pseudo" required>
            <label for="pseudo" name="pseudo">pseudo</label>
          </div>
          <div class="input-field col s6">
            <i class="material-icons prefix">vpn_key</i>
            <input id="password" type="password" class="validate" name="password" required>
            <label for="password" name="password">password</label>
          </div>
        </div>
      </div>

    <button class="btn waves-effect waves-light orange lighten-2" type="submit" name="action" id="form_button" value="Login">Submit
    <i class="material-icons right">send</i>
  </button>

</form>
<!-- the footer part-->
</main>
<!-- the footer part-->
     <?php include('../template/footer.php'); ?>
</body>
</html>
