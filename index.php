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
$mat=@$_POST['matricule'];
$octpaie=@$_POST['octpaie'];
$novpaie=@$_POST['novpaie'];
$decpaie=@$_POST['decpaie'];
$janvpaie=@$_POST['janvpaie'];
$fevpaie=@$_POST['fevpaie'];
$marspaie=@$_POST['marspaie'];
$avpaie=@$_POST['avpaie'];
$maipaie=@$_POST['maipaie'];
$juinpaie=@$_POST['juinpaie'];
$nom=@$_POST['nom'];
$prenom=@$_POST['prenom'];
$classe=@$_POST['classe'];
$montan=@$_POST['montan'];

?>


<?php  
//enregister paie
//la colonne datep de la table paie est la date du paiement du frais de la scolarit� : c'est la date au moment du paiement
if(isset($_POST['boutval'])&&!empty($mat)){
  if(!empty($octpaie)){
   mysqli_query($conn,"update paie set mtp='$octpaie',datep=NOW() where ideleve='$mat' and mois='Octobre'");
    $mess='<b class="succes">Paiement valid� !</b>';
  }
  
  if(!empty($novpaie)){
   mysqli_query($conn,"update paie set mtp='$novpaie',datep=NOW() where ideleve='$mat' and mois='Novembre'");
    $mess='<b class="succes">Paiement valid� !</b>';
  }
  
  if(!empty($decpaie)){
   mysqli_query($conn,"update paie set mtp='$decpaie',datep=NOW() where ideleve='$mat' and mois='Decembre'");
    $mess='<b class="succes">Paiement valid� !</b>';
  }
  
  if(!empty($janvpaie)){
   mysqli_query($conn,"update paie set mtp='$janvpaie',datep=NOW() where ideleve='$mat' and mois='Janvier'");
    $mess='<b class="succes">Paiement valid� !</b>';
  }
  
  if(!empty($fevpaie)){
   mysqli_query($conn,"update paie set mtp='$fevpaie',datep=NOW() where ideleve='$mat' and mois='Fevrier'");
    $mess='<b class="succes">Paiement valid� !</b>';
  }
  
  if(!empty($marspaie)){
   mysqli_query($conn,"update paie set mtp='$marspaie',datep=NOW() where ideleve='$mat' and mois='Mars'");
    $mess='<b class="succes">Paiement valid� !</b>';
  }
  
  if(!empty($avpaie)){
   mysqli_query($conn,"update paie set mtp='$avpaie',datep=NOW() where ideleve='$mat' and mois='Avril'");
    $mess='<b class="succes">Paiement valid� !</b>';
  }
  
  if(!empty($maipaie)){
   mysqli_query($conn,"update paie set mtp='$maipaie',datep=NOW() where ideleve='$mat' and mois='Mai'");
    $mess='<b class="succes">Paiement valid� !</b>';
  }
  
  if(!empty($juinpaie)){
   mysqli_query($conn,"update paie set mtp='$juinpaie',datep=NOW() where ideleve='$mat' and mois='Juin'");
    $mess='<b class="succes">Paiement valid� !</b>';
  }
  
  }
?>

<?php  
//suppr�ssion paie
/*
if(isset($_POST['boutsupp'])&&!empty($mat)){

$rq=mysqli_query($conn,"delete from paie where mois='$mois' and ideleve='$mat'");
if($rq){
$mess="<b class='succes'>Suppr�ssion r�ussie !</b>";

      
            
}
else
$mess="<b class='erreur'>Impossible de supprimer !</b>";
}
*/
?>

<!-- Created by TopStyle Trial - www.topstyle4.com -->
<!DOCTYPE html>
<html>
<head>
	<title>chcode_appli</title>
	<link rel="stylesheet" type="text/css" href="cssfile.css">
</head>

<body>
	<div align="center">
	<a href="eleve.php">ELEVE CRUD</a><br><br>
	<a href="vfpaiement.php">VERIFIER PAIEMENT MENSUEL</a>
	<h2>Formulaire de paiement des frais de scolarit� :</h2>
	<?php /*l'ann�e scolaire s'�tend d'Octobre � Juin et le frais mensuel de scolarit� est de 20 �*/?>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST" >
  <table align="">
  
     <tr ><td></td><td> <?php print $mess;?></td></tr>
     <tr><td></td><td><strong>Matricule �l�ve :</strong></td></tr>
   <tr><td></td><td><input type="text" name="matricule" value="<?php print $mat;?>" class="champ" size="25"></td></tr>
<tr><td></td><td><strong>Mois :</strong></td><td><strong>Montant pay� (�) :</strong></td></tr>
   <tr><td></td><td><input type="text" name="oct"  value="Octobre" size="25"></td>
      <td><input type="number" name="octpaie" min="0" max="20" value="<?php print $octpaie;?>" size="25"></td>
   </tr>
   
   <tr><td></td><td><input type="text" name="nov"  value="Novembre" size="25"></td>
      <td><input type="number" name="novpaie" min="0" max="20"  value="<?php print $novpaie;?>" size="25"></td>
   </tr>
   
    <tr><td></td><td><input type="text" name="dec"  value="D�cembre" size="25"></td>
      <td><input type="number" name="decpaie" min="0" max="20" value="<?php print $decpaie;?>" size="25"></td>
   </tr>
   
   <tr><td></td><td><input type="text" name="janv"  value="Janvier" size="25"></td>
      <td><input type="number" name="janvpaie" min="0" max="20" value="<?php print $janvpaie;?>" size="25"></td>
   </tr>
   
    <tr><td></td><td><input type="text" name="fev"  value="F�vrier" size="25"></td>
      <td><input type="number" name="fevpaie" min="0" max="20" value="<?php print $fevpaie;?>" size="25"></td>
   </tr>
   
   <tr><td></td><td><input type="text" name="mars"  value="Mars" size="25"></td>
      <td><input type="number" name="marspaie" min="0" max="20" value="<?php print $marspaie;?>" size="25"></td>
   </tr>
   
   <tr><td></td><td><input type="text" name="av"  value="Avril" size="25"></td>
      <td><input type="number" name="avpaie" min="0" max="20" value="<?php print $avpaie;?>" size="25"></td>
   </tr>
   
   <tr><td></td><td><input type="text" name="mai"  value="Mai" size="25"></td>
      <td><input type="number" name="maipaie" min="0" max="20" value="<?php print $maipaie;?>" size="25"></td>
   </tr>
   
   <tr><td></td><td><input type="text" name="juin"  value="Juin" size="25"></td>
      <td><input type="number" name="juinpaie" min="0" max="20" value="<?php print $juinpaie;?>" size="25"></td>
   </tr>
   
   
   
      <tr><td></td><td><input type="submit" name="boutval" value="Valider" class="bouton" ></td></tr>
      <tr><td></td><td><input type="submit" name="boutvf" value="V�rifier" class="bouton" ></td></tr>
       
  </table>
  </form>
  <br>
  <?php 
    if(isset($_POST['boutvf'])){
      $qq2=mysqli_query($conn,"select matricule,nom,prenom,classe,mois,mtp,datep from
      eleve inner join paie on eleve.matricule=paie.ideleve  where ideleve='$mat' ");  
      print'<table border="1" class="tab"><tr><th>MATRICULE</th><th>NOM</th><th>PRENOM</th><th>CLASSE</th><th>MOIS</th><th>MONTANT (�)</th><th>DATE</th></tr>';
	while($rst2=mysqli_fetch_assoc($qq2)){
	 print"<tr>";
	         echo"<td>".$rst2['matricule']."</td>";
	         echo"<td>".$rst2['nom']."</td>";
	         echo"<td>".$rst2['prenom']."</td>";
	         echo"<td>".$rst2['classe']."</td>";
	         echo"<td>".$rst2['mois']."</td>";
	         echo"<td>".$rst2['mtp']."</td>";
	         echo"<td>".$rst2['datep']."</td>";
	          
	         }
    
    }
    /*Application r�alis�e du 8 au 17 Juin 2020 � N'djam�na au Tchad par
        TARGOTO CHRISTIAN
        Contact : 23560316682 / ct@chrislink.net
 */
  
  ?>
  
  
	</div>
</body>
</html>