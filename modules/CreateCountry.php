<!doctype html>
<html>
 <head>
   <title> Create a new country </title>
     <?php include('../template/links_head.php'); ?>
 </head>

  <body>
    <!--the header part -->
    <?php include('../template/header_admin.php'); ?>

<!--the body of the home page -->
<main>
  <!-- this part is created with a form in order to add another country -->
  <div class="row">
  <div class="col s12 m4 l2">&nbsp;</div>
  <div class="col s12 m4 l8">
    <div class="icon-block">
      <h2 class="center light-blue-text"><i class="fa fa-user-plus"></i></h2>
      <h5 class="center">Add a new country </h5>
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
        <div class="input-field col s6">
          <input id="name" type="text" class="validate">
          <label for="name">Name</label>
        </div>
        <div class="input-field col s6">
          <input id="capital" type="text" class="validate">
          <label for="capital">Capital</label>
        </div>
        <div class="input-field col s12">
          <input id="currency" type="text" class="validate">
          <label for="currency">Currency</label>  <!--sa fac un trigger ceva, in caz ca nu respecta asta -->
        </div>
        <div class="input-field col s12">
          <input id="language" type="text" class="validate">
          <label for="language">Official language(s)</label>
        </div>
      </div>
      <div class="row">
        <form class="col s12">
          <div class="row">
            <div class="input-field col s12">
              <textarea id="textarea1" class="materialize-textarea"></textarea>
              <label for="textarea1">Known by</label>
            </div>
            <div class="input-field col s12">
              <textarea id="textarea1" class="materialize-textarea"></textarea>
              <label for="textarea1">Important phrases to know</label>
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
