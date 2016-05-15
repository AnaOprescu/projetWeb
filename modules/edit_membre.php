<?php
include ('../template/links_head_table.php');
include('../template/footer_table.php');
$ID=$_GET['idMembre'];
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
$result = $bdd->prepare("SELECT * FROM membre where idMembre='$ID'");
$result->execute();
for($i=0; $row = $result->fetch(); $i++){
$idMembre=$row['idMembre'];
?>
<form class="form-horizontal" method="post" action="../controller/edit_membre.php<?php echo '?idMembre='.$idMembre; ?>"  enctype="multipart/form-data" style="float: right;">
                                <legend><h4>Edit</h4></legend>
                                <h4>Information about the membre</h4>
                                <hr>
								<div class="control-group">
                                    <label class="control-label" for="inputPassword">First name:</label>
                                    <div class="controls">
                                        <input type="text" name="first_name" required value=<?php echo $row['first_name']; ?>>
                                    </div>
                                </div>
								<div class="control-group">
                                    <label class="control-label" for="inputPassword">Last name:</label>
                                    <div class="controls">
                                        <input type="text" name="last_name" required value=<?php echo $row['last_name']; ?>>
                                    </div>
                                </div>
                                <div class="control-group">
                                                    <label class="control-label" for="inputPassword">Pseudo:</label>
                                                    <div class="controls">
                                                        <input type="text" name="pseudo" required value=<?php echo $row['pseudo']; ?>>
                                                    </div>
                                                </div>
                                <div class="control-group">
                                                    <label class="control-label" for="inputPassword">Country of origin:</label>
                                                    <div class="controls">
                                                        <input type="text" name="country_origin" required value=<?php echo $row['country_origin']; ?>>
                                                    </div>
                                                </div>
                                                <div class="control-group">
                                                                    <label class="control-label" for="inputPassword">City of origin:</label>
                                                                    <div class="controls">
                                                                        <input type="text" name="city_origin" required value=<?php echo $row['city_origin']; ?>>
                                                                    </div>
                                                                </div>
                                                <div class="control-group">
                                                                    <label class="control-label" for="inputPassword">Facebook name:</label>
                                                                    <div class="controls">
                                                                        <input type="text" name="fb_name" required value=<?php echo $row['fb_name']; ?>>
                                                                    </div>
                                                                </div>
                                                                <div class="control-group">
                                                                                    <label class="control-label" for="inputPassword">Email:</label>
                                                                                    <div class="controls">
                                                                                        <input type="text" name="email" required value=<?php echo $row['email']; ?>>
                                                                                    </div>
                                                                                </div>
                                                                <div class="control-group">
                                                                                    <label class="control-label" for="inputPassword">Password:</label>
                                                                                    <div class="controls">
                                                                                        <input type="password" name="language" required value=<?php echo $row['language']; ?>>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="control-group">
                                                                                                    <label class="control-label" for="inputPassword">Tips:</label>
                                                                                                    <div class="controls">
                                                                                                        <input type="text" name="tips" required value=<?php echo $row['tips']; ?>>
                                                                                                    </div>
                                                                                                </div>
                                                                                <div class="control-group">
                                                                                                    <label class="control-label" for="inputPassword">Phrases:</label>
                                                                                                    <div class="controls">
                                                                                                        <input type="text" name="phrases" required value=<?php echo $row['phrases']; ?>>
                                                                                                    </div>
                                                                                                </div>



								 <div class="control-group">
                                    <div class="controls">

                                        <button type="submit" name="update" class="btn btn-success" style="margin-right: 65px;">Save</button>
										<a href="Management_countries.php" class="btn">Back</a>
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
