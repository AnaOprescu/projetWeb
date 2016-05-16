<!doctype html>
<html>
 <head>
   <title>Erasmus - A life chainging experience</title>
     <?php include('../template/links_head_table.php'); ?>
 </head>

  <body>
<?php include('../template/header_admin_table.php'); ?>

<main>
      <div class="row-fluid">
          <div class="span12">




              <div class="container">


  <?php include('add_membre_user.php'); ?>

                          <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                              <div class="alert alert-info">
                                  <button type="button" class="close" data-dismiss="alert">&times;</button>
                                  <strong><i class="icon-user icon-large"></i>&nbsp;List of members </strong>
                              </div>
                              <thead>
                                  <tr>
                                      <th style="text-align:center;">First name</th>
                                      <th style="text-align:center;">Last name</th>
                                      <th style="text-align:center;">Pseudo</th>
                                      <th style="text-align:center;">Country of origin</th>
                                      <th style="text-align:center;"> City of origin</th>
                                      <th style="text-align:center;"> Facebook name</th>
                                      <th style="text-align:center;"> Email</th>
                                      <th style="text-align:center;"> Country of destination</th>
                                      <th style="text-align:center;"> City of destination</th>
  									<th style="text-align:center;">Action</th>
                                  </tr>
                              </thead>
                              <tbody>
  							<?php
  								require_once('../connectdb_pdo.php');
  								$result = $bdd->prepare("SELECT * FROM membre ORDER BY idMembre ASC");
  								$result->execute();
  								for($i=0; $row = $result->fetch(); $i++){
  								$idMembre=$row['idMembre'];
  							?>
  								<tr>
  								<td style="text-align:center; word-break:break-all; width:300px;"> <?php echo $row ['first_name']; ?></td>
  								<td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['last_name']; ?></td>
                  <td style="text-align:center; word-break:break-all; width:300px;"> <?php echo $row ['pseudo']; ?></td>
  								<td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['country_origin']; ?></td>
                  <td style="text-align:center; word-break:break-all; width:300px;"> <?php echo $row ['city_origin']; ?></td>
  								<td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['fb_name']; ?></td>
                  <td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['email']; ?></td>
                  <td style="text-align:center; word-break:break-all; width:300px;"> <?php echo $row ['country_dest']; ?></td>
                  <td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['city_dest']; ?></td>
  								<td style="text-align:center; width:350px;">

  									 <a href="#delete<?php echo $idMembre;?>"  data-toggle="modal"  class="btn btn-danger" >Delete </a>
  								</td>

  										<!-- Modal -->
  								<div id="delete<?php  echo $idMembre;?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  								<div class="modal-header">
  								<h3 id="myModalLabel">Delete</h3>
  								</div>
  								<div class="modal-body">
  								<p><div style="font-size:larger;" class="alert alert-danger">Are you Sure you want Delete <b style="color:red;"><?php echo $row['first_name']." ".$row['last_name']." ".$row['pseudo']." ".$row['country_origin']." ".$row['city_origin']." ".$row['fb_name']." ".$row['email']." ".$row['country_dest']." ".$row['city_dest']; ?></b> Data?</p>
  								</div>
  								<hr>
  								<div class="modal-footer">
  								<button class="btn btn-inverse" data-dismiss="modal" aria-hidden="true">No</button>
  								<a href="../controller/delete_membre.php<?php echo '?idMembre='.$idMembre; ?>" class="btn btn-danger">Yes</a>
  								</div>
  								</div>
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
