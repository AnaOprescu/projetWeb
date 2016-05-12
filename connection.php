<?php
try
{
$bdd = new PDO('mysql:host=localhost;dbname=erasmus;charset=utf8', 'root', '');
}
catch (Exception $e)
{
  die('Erreur : ' . $e->getMessage());
}
$reponse = $bdd->query('SELECT * FROM membre');

while ($donnees = $reponse->fetch())
{
?>
<p>
<strong>Jeu</strong> : <?php echo $donnees['last_name']; ?><br />
Le possesseur de ce jeu est : <?php echo $donnees['first_name']; ?>.
</p>
<?php
}
$reponse->closeCursor(); // Termine le traitement de la requête
?>
