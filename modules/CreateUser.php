<!doctype html>
<html>
 <head>
   <title>Erasmus - A life chainging experience</title>
     <?php include('../template/links_head.php'); ?>
 </head>

  <body>
<!--the header part -->
<?php include('../template/header_admin.php'); ?>

<!--the body of the home page -->
<main>
  <!-- form to create a new member + buttom to register-->
  <!-- sa le fac sa fie obligatoriu fiecare camp -->
  <div class="row">
  <div class="col s12 m4 l2">&nbsp;</div>
  <div class="col s12 m4 l8">
    <div class="icon-block">
      <h2 class="center light-blue-text"><i class="fa fa-user-plus"></i></h2>
      <h5 class="center"> Become a member</h5>
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
          <input id="first_name" type="text" class="validate">
          <label for="first_name">First Name</label>
        </div>
        <div class="input-field col s6">
          <input id="last_name" type="text" class="validate">
          <label for="last_name">Last Name</label>
        </div>
        <div class="input-field col s12">
          <input value="ex:firstname.lastname" id="first_name2" type="text" class="validate">
          <label class="active" for="first_name2">Username</label> <!--sa fac un trigger ceva, in caz ca nu respecta asta -->
        </div>
        <div class="input-field col s12">
          <input id="country_origin" type="text" class="validate">
          <label for="country_origin">Country of origin</label>
        </div>
        <div class="input-field col s12">
          <input id="city_origin" type="text" class="validate">
          <label for="city_origin">City of origin</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="fb_name" type="text" class="validate">
          <label for="fb_name"> Facebook name</label>
        </div>
      </div>
      <div class="row">  <!-- makes sure that they will right smth@smth.st -->
        <div class="input-field col s12">
          <input id="email" type="email" class="validate">
          <label for="email">Email</label>
        </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="password" type="password" class="validate">
          <label for="password">Password</label>
        </div>
      </div>
      <div class="input-field col s12">
    <select>
      <option value="" disabled selected>Choose your current status</option> <!-- sa vad cum sa fac, dupa optiune tr sa complete tara sau nu -->
      <option value="1"> I am erasmus </option>
      <option value="2"> I am not erasmus</option>
    </select>
  </div>
  <div class="row">
    <div class="input-field col s12">
      <input id="country_dest" type="text" class="validate">
      <label  for="country_dest" > Country of destination </label>
    </div>
  </div>
  <div class="row">
    <div class="input-field col s12">
      <input id="city_dest" type="text" class="validate">
      <label for="city_dest"> City of destination </label>
    </div>
  </div>
  <button class="btn waves-effect waves-light orange lighten-2" type="submit" name="action" id="but">Register
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
