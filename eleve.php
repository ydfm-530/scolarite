<?php 
/*include_once('conn.php');*/
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbscolarite";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
} 
$mess='';
/*$mess2='';
$mess3='';
$classe2=@$_POST['classe2'];*/
?>
<?php  
//ajouter eleve
$mat=@$_POST['matricule'];
$nom=@$_POST['nom'];
$prenom=@$_POST['prenom'];
$classe=@$_POST['classe'];
$montan=@$_POST['montan'];
if(isset($_POST['boutadd'])&&!empty($mat)){
$rq=mysqli_query($conn,"insert into eleve values('$mat','$nom','$prenom','$classe','$montan')");
if($rq){
$mess='<b class="succes">Insertion réussie !</b>';
mysqli_query($conn,"insert into paie(ideleve,mois,mtp,datep) 
values('$mat','Octobre','0','NULL'),
      ('$mat','Novembre','0','NULL'),
      ('$mat','Decembre','0','NULL'),
      ('$mat','Janvier','0','NULL'),
      ('$mat','Fevrier','0','NULL'),
      ('$mat','Mars','0','NULL'),
      ('$mat','Avril','0','NULL'),
      ('$mat','Mai','0','NULL'),
      ('$mat','Juin','0','NULL');
                                  ");
}
else
$mess="<b class='erreur'>Impossible d'insérer !</b>";
}

?>
<?php  
//modification
if(isset($_POST['boutmod'])&&!empty($mat)){
$rq=mysqli_query($conn,"update eleve set nom='$nom',prenom='$prenom',classe='$classe',mta='$montan' where matricule='$mat' ");
if($rq){
$mess='<b class="succes">Modification réussie !</b>';
}
else
$mess="<b class='erreur'>Impossible de modifier !</b>";
}

?>
<?php  
//supprimer élève
if(isset($_POST['boutsupp'])&&!empty($mat)){
$rq=mysqli_query($conn,"delete from paie where ideleve='$mat'");
if($rq){
$mess='<b class="succes">Suppréssion réussie !</b>';
mysqli_query($conn,"delete from eleve where matricule='$mat'");
}
else
$mess="<b class='erreur'>Impossible de supprimer !</b>";
}

?>
<!-- Created by TopStyle Trial - www.topstyle4.com -->
<!DOCTYPE html>
<html>
<head>
	<title>chcode_appli</title>
	<meta charset="utf8">
	<link rel="stylesheet" type="text/css" href="cssfile.css">
</head>

<body>
	<div align="center">
		<a href="index.php">ACCUEIL</a>
			<h2>Enregistrement des élèves :</h2>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST" >
  <table align="">
  
     <tr ><td></td><td> <?php print $mess;?></td></tr>
    <tr><td></td><td><strong >Matricule :</strong></td></tr>
   <tr><td></td><td><input type="text" name="matricule" value="<?php print $mat;?>"  size="25"  ></td></tr>
   <tr><td></td><td><strong>Nom  :</strong></td></tr>
   <tr><td></td><td><input type="text" name="nom" class="champ" value="<?php print $nom;?>" size="25"></td></tr>
   <tr><td></td><td><strong>Prenom :</strong></td></tr>
   <tr><td></td><td><input type="text" name="prenom" class="champ" value="<?php print $prenom;?>"size="25"></td></tr>
   <tr><td></td><td><strong>Classe :</strong></td></tr>
  <tr><td></td><td><select name="classe" id="classe"  >
         <option  value="6eme">6eme</option>
        <option  value="5eme">5eme</option>
        <option  value="4eme">4eme</option>
        <option  value="3eme">3eme</option>
     </select></td></tr>
   
   <tr><td></td><td><strong>Montant annuel ( € ) :</strong></td></tr>
   <tr><td></td><td><input type="text" name="montan" class="champ" value="<?php print $montan;?>" size="25"></td></tr>
      <tr><td></td><td><input type="submit" name="boutadd" value="Enregistrer" class="bouton" ></td></tr>
       <tr><td></td><td><input type="submit" name="boutsupp" value="Supprimer" class="bouton" ></td></tr>
        <tr><td></td><td><input type="submit" name="boutmod" value="Modifier" class="bouton" ></td></tr>
  </table>
   </form>
  
 
  
  <h2>Liste de tous les élèves :</h2>
	<?php 
  $qq2=mysqli_query($conn,"select * from eleve ");
  //inner join vente on produit.codeprod=vente.idprod group by codeprod
  print'<table border="1" class="tab"><tr><th>Matricule</th><th>Nom</th>
  <th>Prenom</th><th>Classe</th><th>Montant annuel ( € )</th></tr>';
	while($rst2=mysqli_fetch_assoc($qq2)){
	 print"<tr>";
	         echo"<td>".$rst2['matricule']."</td>";
	         echo"<td>".$rst2['nom']."</td>";
	         echo"<td>".$rst2['prenom']."</td>";
	         echo"<td>".$rst2['classe']."</td>";
	         echo"<td>".$rst2['mta']."</td>"; 
	         } 
	         /*Application réalisée du 8 au 17 Juin 2020 à N'djaména au Tchad par
        TARGOTO CHRISTIAN
        Contact : 23560316682 / ct@chrislink.net
 */    
  ?>
  
  
	</div>
</body>
</html>