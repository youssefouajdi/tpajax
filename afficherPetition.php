<?php
	require 'Petition.php'
	?>
	<title>Liste des Petitions</title>
	<?php
 		echo '<table class="table table-hover">';	
  echo "<thead>"; 
  echo "<tr>";   
	 echo '<th scope="col">id</th>'; 
	 echo '<th scope="col">Titre</th>';  
	 echo '<th scope="col">Desription</th>';
	 echo '<th scope="col">Date Public</th>'; 
 echo "</tr>"; 
 echo "</thead>"; 
 $query = Petition::getAll();
 while ($data = $query->fetch()) {
  echo "<tbody>";
		echo '<tr class="table-warning">';
		echo '<td scope="row">'.$data['IDP'].'</td>'; 
		echo '<td>'.$data['Titre'].'</td>';  
		echo '<td>'.$data['Description'].'</td>';
		echo '<td>'.$data['DatePublic'].'</td>';		
		echo '<td><a href="signaturePetition.php?id='. $data['IDP'] . '"><button type="button" class="btn btn-primary">Signer Une petition</button></a></td>';

    echo "</tr>";
   echo "</tbody>";
}
echo "</table>";
