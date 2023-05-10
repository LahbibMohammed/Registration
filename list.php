	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Liste des inscriptions</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">   
	<style>

	html,body {
		height: 800px;
	}

	body {
		margin: 0;
		background: linear-gradient(45deg, #49a09d, #5f2c82);
		font-family: sans-serif;
		font-weight: 100;
	}

	.container {
		position: absolute;
		top: 50%;
		left: 50%;
		transform: translate(-50%, -50%);
	}

	table {
		width: 800px;
		border-collapse: collapse;
		overflow: hidden;
		box-shadow: 0 0 20px rgba(0,0,0,0.1);
	margin-left:auto;
	margin-right:auto;
	}
	tr{	border: 2px solid rgba(0,0,0,0.5) ;
	}
	th,td {
		padding: 15px;
		background-color: rgba(255,255,255,0.2);
		color: #fff;

	}

	th {
		text-align: left;
	}

	thead {
		th {
			background-color: #55608f;
		}
	}

	tbody {
		tr {
			&:hover {
				background-color: rgba(255,255,255,0.3);
			}
		}


		td {
			position: relative;
			&:hover {
				&:before {
					content: "";
					position: absolute;
					left: 0;
					right: 0;
					top: -9999px;
					bottom: -9999px;
					background-color: rgba(255,255,255,0.2);
					z-index: -1;
				}
			}
		}

		h1{
			padding-left: 300px;
	}

	</style>
	</head>
	<body>

	<h1>Gestion d'utilisateur</h1>

	<hr >

	<br>


		<?php
		include "db_connect.php"; 

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
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
	</body>
	</html>
