<!doctype html>
<html>
<!doctype html>
<html>
 <head>
   <title>Erasmus - A life chainging experience</title>
     <?php include('../template/links_head_table.php'); ?>
 </head>

  <body>
<?php include('../template/header_user_table.php'); ?>

<main>
      <div class="row-fluid">
          <div class="span12">




              <div class="container">


  <?php include('add_city_user.php'); ?>

                          <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                              <div class="alert alert-info">
                                  <button type="button" class="close" data-dismiss="alert">&times;</button>
                                  <strong><i class="icon-user icon-large"></i>&nbsp;List of cities</strong>
                              </div>
                              <thead>
                                  <tr>
                                      <th style="text-align:center;">Name</th>
                                      <th style="text-align:center;">Location</th>
                                  </tr>
                              </thead>
                              <tbody>
               <?php
                 require_once('../connectdb_pdo.php');
                 $result = $bdd->prepare("SELECT * FROM city ORDER BY idCity ASC");
                 $result->execute();
                 for($i=0; $row = $result->fetch(); $i++){
                 $idCity=$row['idCity'];
               ?>
                 <tr>
                 <td style="text-align:center; word-break:break-all; width:300px;"> <?php echo $row ['name']; ?></td>
                 <td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['location']; ?></td>




                 </div>
                 </tr>
                 <?php } ?>
                              </tbody>
                          </table>



          </div>
          </div>
          </div>
      </div>

</main>
  </body>
  </html>
