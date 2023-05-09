<?php
include "db_connect.php";

$errorMessage = '';

if (isset($_POST["submit"])) {
    $First_Name = mysqli_real_escape_string($conn, $_POST['nom']);
    $Last_Name = mysqli_real_escape_string($conn, $_POST['prenom']);
    $Adresse = mysqli_real_escape_string($conn, $_POST['adresse']);
    $Date_Of_Birthday = mysqli_real_escape_string($conn, $_POST['datee']);
    $Nationality = mysqli_real_escape_string($conn, $_POST['natio']);
    $Level_Of_Study = mysqli_real_escape_string($conn, $_POST['niveau']);
    $Gender = mysqli_real_escape_string($conn, $_POST['genre']);

    if (
        trim($First_Name) != "" &&
        trim($Last_Name) != "" &&
        trim($Adresse) != "" &&
        trim($Date_Of_Birthday) != "" &&
        trim($Nationality) != "" &&
        trim($Level_Of_Study) != "" &&
        trim($Gender) != ""
    ) {
        $sql = "INSERT INTO gestion_utilisateur (First_Name, Last_Name, Adresse, Date_Of_Birthday, Nationality, Level_Of_Study, Gender) VALUES ('$First_Name', '$Last_Name', '$Adresse', '$Date_Of_Birthday', '$Nationality', '$Level_Of_Study', '$Gender')";
        mysqli_query($conn, $sql);
        header("location:list.php");
        exit();
    } else {
        $errorMessage = "Veuillez remplir tous les champs.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Formulaire</title>
    <style type="text/css">
            /* all */
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap");

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: "Poppins", sans-serif;
    }

    :root {
      --main-blue: #71b7e6;
      --main-purple: #9b59b6;
      --main-grey: #ccc;
      --sub-grey: #d9d9d9;
    }

    body {
      display: flex;
      height: 100vh;
      justify-content: center; /*center vertically */
      align-items: center; /* center horizontally */
      background: linear-gradient(135deg, var(--main-blue), var(--main-purple));
      padding: 10px;
    }
    /* container and form */
    .container {
      max-width: 700px;
      width: 100%;
      background: #fff;
      padding: 25px 30px;
      border-radius: 5px;
    }
    .container .title {
      font-size: 25px;
      font-weight: 500;
      position: relative;
    }

    .container .title::before {
      content: "";
      position: absolute;
      height: 3.5px;
      width: 30px;
      background: linear-gradient(135deg, var(--main-blue), var(--main-purple));
      left: 0;
      bottom: 0;
    }

    .container form .user__details {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      margin: 20px 0 12px 0;
    }
    /* inside the form user details */
    form .user__details .input__box {
      width: calc(100% / 2 - 20px);
      margin-bottom: 15px;
    }

    .user__details .input__box .details {
      font-weight: 500;
      margin-bottom: 5px;
      display: block;
    }
    .user__details .input__box input {
      height: 45px;
      width: 100%;
      outline: none;
      border-radius: 5px;
      border: 1px solid var(--main-grey);
      padding-left: 15px;
      font-size: 16px;
      border-bottom-width: 2px;
      transition: all 0.3s ease;
    }

    .user__details .input__box input:focus,
    .user__details .input__box input:valid {
      border-color: var(--main-purple);
    }

    /* inside the form gender details */

    form .gender__details .gender__title {
      font-size: 20px;
      font-weight: 500;
    }

    form .gender__details .category {
      display: flex;
      width: 80%;
      margin: 15px 0;
    }

    .gender__details .category label {
      display: flex;
      align-items: center;
    }

    .gender__details .category .dot {
      height: 18px;
      width: 18px;
      background: var(--sub-grey);
      border-radius: 50%;
      margin: 10px;
      border: 5px solid transparent;
      transition: all 0.3s ease;
    }

    #dot-1:checked ~ .category .one,
    #dot-2:checked ~ .category .two,
    #dot-3:checked ~ .category .three {
      border-color: var(--sub-grey);
      background: var(--main-purple);
    }

    form input[type="radio"] {
      display: none;
    }

    /* submit button */
    form .button {
      height: 45px;
      margin: 45px 0;
    }

    form .button input {
      height: 100%;
      width: 100%;
      outline: none;
      color: #fff;
      border: none;
      font-size: 18px;
      font-weight: 500;
      border-radius: 5px;
      background: linear-gradient(135deg, var(--main-blue), var(--main-purple));
      transition: all 0.3s ease;
    }

    form .button input:hover {
      background: linear-gradient(-135deg, var(--main-blue), var(--main-purple));
    }

    @media only screen and (max-width: 584px) {
      .container {
        max-width: 100%;
      }

      form .user__details .input__box {
        margin-bottom: 15px;
        width: 100%;
      }

      form .gender__details .category {
        width: 100%;
      }

      .container form .user__details {
        max-height: 300px;
        overflow-y: scroll;
      }

      .user__details::-webkit-scrollbar {
        width: 0;
      }
    }
    .category label{
      margin-right:30px;
    }
    div select{
  padding:9px;
  border:1px solid var(--main-grey);
  background-color:white;
  width:100%;
  border-radius:5px;
  }
      .error {
              color: red;
          }
    </style>

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
