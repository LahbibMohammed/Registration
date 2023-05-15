<?php
include "db_connect.php";
require "../php/G_users.php";
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Formulaire</title>
    <style type="text/css">@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap");</style>
    <link href="../css/styles.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="title">Register</div>
        <form action="#" method="POST">
        <div class="user__details">
      <div class="input__box">
        <span class="details">First Name</span>
        <input type="text"  required name="nom" >
      </div>
      <div class="input__box">
        <span class="details">Last Name</span>
        <input type="text"  required name="prenom">
      </div>
      <div class="input__box">
        <span class="details">Adresse</span>
        <input type="text"  required name="adresse" >
      </div>
      <div class="input__box">
        <span class="details">Date Of Birthday</span>
        <input type="date" name="datee" required>
      </div>
      <div class="input__box">
        <span class="details">Nationality</span>
        <select name="natio" class="form-select">
            <option>Francais</option>
            <option selected>Marocain </option>
          </select>
      </div>
      <div class="input__box">
        <span class="details">Level Of Study</span>
        <select name="niveau" class="form-select">
            <option>bac</option>
            <option  selected>bac+2</option>
            <option  >LP</option>
            <option >Master</option>
          </select>      </div>

    </div>
    <div class="gender__details">
  <input type="radio" name="genre" value="male" required id="dot-1">
  <input type="radio" name="genre" value="female" required id="dot-2">
  <span class="gender__title">Gender</span>
  <div class="category">
    <label for="dot-1">
      <span class="dot one"></span>
      <span>Male</span>
    </label>
    <label for="dot-2">
      <span class="dot two"></span>
      <span>Female</span>
    </label>
  </div>
</div>

    <div class="button">
      <input type="submit" value="Enregistrer"  name="submit"   >
    </div>            
    
    
    <div class="error"><?php echo $errorMessage; ?></div>
        </form>
    </div>
</body>
</html>
