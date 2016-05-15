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


  <?php include('add_country.php'); ?>

                          <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                              <div class="alert alert-info">
                                  <button type="button" class="close" data-dismiss="alert">&times;</button>
                                  <strong><i class="icon-user icon-large"></i>&nbsp;List of countries</strong>
                              </div>
                              <thead>
                                  <tr>
                                      <th style="text-align:center;">Name</th>
                                      <th style="text-align:center;">Capital</th>
                                      <th style="text-align:center;">Currency</th>
                                      <th style="text-align:center;">Language</th>
                                      <th style="text-align:center;">Tips</th>
                                      <th style="text-align:center;">Phrases</th>
  									<th style="text-align:center;">Action</th>
                                  </tr>
                              </thead>
                              <tbody>
  							<?php
  								require_once('../connectdb_pdo.php');
  								$result = $bdd->prepare("SELECT * FROM country ORDER BY idCountry ASC");
  								$result->execute();
  								for($i=0; $row = $result->fetch(); $i++){
  								$idCountry=$row['idCountry'];
  							?>
  								<tr>
  								<td style="text-align:center; word-break:break-all; width:300px;"> <?php echo $row ['name']; ?></td>
  								<td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['capital']; ?></td>
                  <td style="text-align:center; word-break:break-all; width:300px;"> <?php echo $row ['currency']; ?></td>
  								<td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['language']; ?></td>
                  <td style="text-align:center; word-break:break-all; width:300px;"> <?php echo $row ['tips']; ?></td>
  								<td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['phrases']; ?></td>
  								<td style="text-align:center; width:350px;">
  									<a href="edit_country.php<?php echo '?idCountry='.$idCountry; ?>" class="btn btn-info">Edit</a>
  									 <a href="#delete<?php echo $idCountry;?>"  data-toggle="modal"  class="btn btn-danger" >Delete </a>
  								</td>

  										<!-- Modal -->
  								<div id="delete<?php  echo $idCountry;?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  								<div class="modal-header">
  								<h3 id="myModalLabel">Delete</h3>
  								</div>
  								<div class="modal-body">
  								<p><div style="font-size:larger;" class="alert alert-danger">Are you Sure you want Delete <b style="color:red;"><?php echo $row['name']." ".$row['capital']." ".$row['currency']." ".$row['language']." ".$row['tips']." ".$row['phrases']; ?></b> Data?</p>
  								</div>
  								<hr>
  								<div class="modal-footer">
  								<button class="btn btn-inverse" data-dismiss="modal" aria-hidden="true">No</button>
  								<a href="../controller/delete_country.php<?php echo '?idCountry='.$idCountry; ?>" class="btn btn-danger">Yes</a>
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
