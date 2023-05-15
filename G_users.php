<?php
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