<!doctype html>
<html>
<head>
  <title> Create the page for users who have a suggestion for a new city to be added </title>
    <?php include('../template/links_head.php'); ?>
</head>

 <body>
   <!--the header part -->
   <?php include('../template/header_user.php'); ?>

<!--the body of the home page -->
<main>
  <!-- this part is created to let the members suggest us a  city that they will wish to see in the list -->
  <div class="row">
  <div class="col s12 m4 l2">&nbsp;</div>
  <div class="col s12 m4 l8">
    <div class="icon-block">
      <h2 class="center light-blue-text"><i class="fa fa-user-plus"></i></h2>
      <h5 class="center">Let us know about a city you would like to be added here </h5>
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
    <form class="col s12">
      <div class="row">
        <div class="input-field col s12">
          <input id="city" type="text" class="validate">
          <label for="city">City</label>
        </div>
        <div class="input-field col s12">
          <input id="country" type="text" class="validate">
          <label for="country">Country</label>
        </div>
           <button class="btn waves-effect waves-light orange lighten-2" type="submit" name="action" id="but">Send
              <i class="material-icons right">note_add</i>
            </button>
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
