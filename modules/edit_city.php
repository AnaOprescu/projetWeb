<?php
include ('../template/links_head_table.php');
include('../template/footer_table.php');
$ID=$_GET['idCity'];
?>
<body>


<div class="container">
<div class="hero-unit-header">
 <div class="container-con">
<!-- end banner & menunav -->

<div class="container">
<div class="row-fluid">
<div class="span12">
<div class="row-fluid">
<div class="span3"></div>
<div class="span6">


<div class="hero-unit-3">
<center>

<?php
include('../connectdb_pdo.php');
$result = $bdd->prepare("SELECT * FROM city where idCity='$ID'");
$result->execute();
for($i=0; $row = $result->fetch(); $i++){
$idCity=$row['idCity'];
?>
<form class="form-horizontal" method="post" action="../controller/edit_city.php<?php echo '?idCity='.$idCity; ?>"  enctype="multipart/form-data" style="float: right;">
                                <legend><h4>Edit</h4></legend>
                                <h4>Information about the city</h4>
                                <hr>
								<div class="control-group">
                                    <label class="control-label" for="inputPassword">Name:</label>
                                    <div class="controls">
                                        <input type="text" name="name" required value=<?php echo $row['name']; ?>>
                                    </div>
                                </div>
								<div class="control-group">
                                    <label class="control-label" for="inputPassword">Location:</label>
                                    <div class="controls">
                                        <input type="text" name="location" required value=<?php echo $row['location']; ?>>
                                    </div>
                                </div>


								 <div class="control-group">
                                    <div class="controls">

                                        <button type="submit" name="update" class="btn btn-success" style="margin-right: 65px;">Save</button>
										<a href="Management_cities.php" class="btn">Back</a>
                                    </div>
                                </div>
                            </form>
<?php } ?>
								</center>
								</center>

								</div>
								</div>
								</div>
								</div>
								</div>
								</div>
								</div>
								</div>
								</div>
</body>
</html>
