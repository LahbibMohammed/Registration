<?php
		$contenu = mysqli_query($conn, "SELECT * FROM gestion_utilisateur");
		
		echo "<table  >";
		echo "<thead>";
		echo "<tr>";
		echo  "<th>First_Name</th>";
		echo  "<th>Last_Name</th>";
		echo  "<th>Adresse</th>";
		echo  "<th>Date_Of_Birthday</th>";
		echo  "<th>Nationality</th>";
		echo  "<th>Level_Of_Study</th>";
		echo  "<th>Gender</th>";
		echo "</tr>";
		echo "</thead>";



		while($ligne = mysqli_fetch_assoc($contenu)) {
		echo "<tbody>";
			echo "<tr>";
			echo "<td>". $ligne['First_Name']."</td>";
			echo "<td>". $ligne['Last_Name']."</td>";
			echo "<td>". $ligne['Adresse']."</td>";
			echo "<td>". $ligne['Date_Of_Birthday']."</td>";
			echo "<td>". $ligne['Nationality']."</td>";
			echo "<td>". $ligne['Level_Of_Study']."</td>";
			echo "<td>". $ligne['Gender']."</td>";
			echo "</tr>";
		echo "</tbody>";

		}
		echo "</table>";
		mysqli_close($conn);
?>
