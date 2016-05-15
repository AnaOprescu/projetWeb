<?php
include ('../template/links_head_table.php');
include('../template/footer_table.php');
$ID=$_GET['idCountry'];
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
$result = $bdd->prepare("SELECT * FROM country where idCountry='$ID'");
$result->execute();
for($i=0; $row = $result->fetch(); $i++){
$idCountry=$row['idCountry'];
?>
<form class="form-horizontal" method="post" action="../controller/edit_country.php<?php echo '?idCountry='.$idCountry; ?>"  enctype="multipart/form-data" style="float: right;">
                                <legend><h4>Edit</h4></legend>
                                <h4>Information about the country</h4>
                                <hr>
								<div class="control-group">
                                    <label class="control-label" for="inputPassword">Name:</label>
                                    <div class="controls">
                                        <input type="text" name="name" required value=<?php echo $row['name']; ?>>
                                    </div>
                                </div>
								<div class="control-group">
                                    <label class="control-label" for="inputPassword">Capital:</label>
                                    <div class="controls">
                                        <input type="text" name="capital" required value=<?php echo $row['capital']; ?>>
                                    </div>
                                </div>
                                <div class="control-group">
                                                    <label class="control-label" for="inputPassword">Currency:</label>
                                                    <div class="controls">
                                                        <input type="text" name="currency" required value=<?php echo $row['currency']; ?>>
                                                    </div>
                                                </div>
                                <div class="control-group">
                                                    <label class="control-label" for="inputPassword">Language:</label>
                                                    <div class="controls">
                                                        <input type="text" name="language" required value=<?php echo $row['language']; ?>>
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
