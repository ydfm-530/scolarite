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
$mois=@$_POST['mois'];
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
	<a href="index.php">ACCUEIL</a><br><br>
  <h2>Vérification des paiements mensuels (afficher la liste des élèves qui n'ont pas encore payé pour ce mois ) 	:</h2>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST" >
  <table align="">
    
  <tr><td></td><td><select name="mois" id="mois"  >
         <option  value="Octobre">Octobre</option>
        <option  value="Novembre">Novembre</option>
         <option  value="Decembre">Décembre</option>
          <option  value="Janvier">Janvier</option>
           <option  value="Fevrier">Février</option>
            <option  value="Mars">Mars</option>
             <option  value="Avril">Avril</option>
              <option  value="Mai">Mai</option>
               <option  value="Juin">Juin</option>
        
     </select></td>
     <td><input type="submit" name="bvf" value="Vérifier" class="bouton" ></td></tr>
  </table>
   </form>
   <br>
   <?php 
    if(isset($_POST['bvf'])){
      $qq2=mysqli_query($conn,"select matricule,nom,prenom,classe,mois,mtp,datep from
      eleve inner join paie on eleve.matricule=paie.ideleve  where mois='$mois' and mtp<20 ");  
      print'<table border="1" class="tab"><tr><th>MATRICULE</th><th>NOM</th><th>PRENOM</th><th>CLASSE</th><th>MOIS</th><th>MONTANT (€)</th><th>DATE</th></tr>';
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
    /*Application réalisée du 8 au 17 Juin 2020 à N'djaména au Tchad par
        TARGOTO CHRISTIAN
        Contact : 23560316682 / ct@chrislink.net
 */
  
  ?>
  
  
	
	</div>
</body>
</html>