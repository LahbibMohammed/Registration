<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des inscriptions</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">   
<style>
    body,td {

      background-color:rgb(100,120,200);

    }
    table {
  border-collapse: collapse; /* Fusionne les bordures des cellules */
  width: 100%; /* Définit la largeur du tableau */
  margin-bottom: 20px; /* Ajoute un espace sous le tableau */
    }

    td {
      text-align: left; /* Aligne le texte sur la gauche */
      padding: 8px; /* Ajoute de l'espace à l'intérieur des cellules */
      border-bottom: 1px solid #ddd; /* Ajoute une bordure en bas de chaque ligne */

    }

    tr:nth-child(odd) {
      font-weight: bold; /* Rend le texte en gras dans la première colonne */
      border-top: 1px solid #ddd; /* Ajoute une bordure en haut de la première ligne */
      border-bottom: 2px solid #ddd; /* Ajoute une bordure plus épaisse en bas de la dernière ligne */
      color:rgb(180,180,255);

    }

    tr:nth-child(even){
      font-weight: 500; 
      color:rgb(255,255,0);

    }

    /* hr {
      background-color: #fff;
      padding: 0;
      margin: 80px;
    } */


    hr.hr-18 {
      background-color: #fff;
      height: 30px;
      border: 1px solid #8c8c8c;
      border-radius: 20px;
    }
    /* 
    hr.hr-18:before {
      display: block;
      content: "";
      height: 30px;
      margin-top: -31px;
      border: 0 solid #8c8c8c;
      border-bottom-width: 1px;
      border-radius: 20px;
    } */

    h1 {
        position: relative;
        color: #FFF;
        font-weight: 90;
        font-size: 90px;
        padding: 0;
        margin: 0;
        line-height: 1;
        text-shadow: 0 0 10px #ff006c, 0 0 20px #ff006c, 0 0 30px #ff006c, 0 0 40px #ff417d, 0 0 70px #ff417d, 0 0 80px #ff417d, 0 0 100px #ff417d, 0 0 150px #ff417d;
        text-align:center;
    }
    }

</style>
</head>
<body>

<h1>Gestion d'utilisateur</h1>

<hr class="hr-18">

<br>


    <?php
    include "db_connect.php"; 

    $contenu = mysqli_query($conn, "SELECT * FROM gestion_utilisateur");
    
    echo "<table  >";
    while($ligne = mysqli_fetch_assoc($contenu)) {
        echo "<tr>";
        echo "<td>". $ligne['First_Name']."</td>";
        echo "<td>". $ligne['Last_Name']."</td>";
        echo "<td>". $ligne['Adresse']."</td>";
        echo "<td>". $ligne['Date_Of_Birthday']."</td>";
        echo "<td>". $ligne['Nationality']."</td>";
        echo "<td>". $ligne['Level_Of_Study']."</td>";
        echo "<td>". $ligne['Gender']."</td>";
        echo "</tr>";
    }
    echo "</table>";
    mysqli_close($conn);
    ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>
