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
  <!-- form to create a new member + buttom to register-->
  <!-- sa le fac sa fie obligatoriu fiecare camp -->
  <div class="row">
  <div class="col s12 m4 l2">&nbsp;</div>
  <div class="col s12 m4 l8">
    <div class="icon-block">
      <h2 class="center light-blue-text"><i class="fa fa-user-plus"></i></h2>
      <h5 class="center"> Become a membre </h5>
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
    <form class="col s12" action="../functions/f_user.php" method="post">
      <div class="row">
        <div class="input-field col s6">
          <input id="first_name" required name="first_name" type="text" class="validate" >
          <label for="first_name" name="first_name"  >First Name</label>
        </div>
        <div class="input-field col s6">
          <input id="last_name" type="text"  name="last_name"class="validate">
          <label for="last_name" name="last_name">Last Name</label>
        </div>
        <div class="input-field col s12">
          <input value="ex:firstname.lastname" id="pseudo" type="text" class="validate" name="pseudo">
          <label class="active" for="pseudo" name="pseudo">Pseudo</label> <!--sa fac un trigger ceva, in caz ca nu respecta asta -->
        </div>
        <div class="input-field col s12">
          <input id="country_origin" type="text" class="validate" name="country_origin">
          <label for="country_origin" name="country_origin">Country of origin</label>
        </div>
        <div class="input-field col s12">
          <input id="city_origin" type="text" class="validate" name="city_origin">
          <label for="city_origin" name="city_origin">City of origin</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="fb_name" type="text" class="validate" name="fb_name">
          <label for="fb_name" name="fb_name"> Facebook name</label>
        </div>
      </div>
      <div class="row">  <!-- makes sure that they will right smth@smth.st -->
        <div class="input-field col s12">
          <input id="email" type="email" class="validate" name="email">
          <label for="email" name="email">Email</label>
        </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="password" type="password" class="validate" name="password">
          <label for="password" name="password">Password</label>
        </div>
      </div>
      <div class="input-field col s12">
  </div>
  <div class="row">
    <div class="input-field col s12">
      <input id="country_dest"  type="text" class="validate" name="country_dest">
      <label  for="country_dest" id="show-option" name="country_dest" > Country of destination </label>
    </div>
  </div>
  <div class="row">
    <div class="input-field col s12">
      <input id="city_dest"  type="text" class="validate" name="city_dest">
      <label for="city_dest" id="show-option" name="city_dest"> City of destination </label>
    </div>
  </div>
  <button class="btn waves-effect waves-light orange lighten-2" type="submit" name="action" id="but" >Register
    <i class="material-icons right">send</i>
  </button>
  </div>
    </form>
  </div>
  </div>
</div>

<!-- the footer part-->
</main>
     <?php include('../template/footer.php'); ?>
</body>
</html>
