<?php
session_start(); // Start the session

$servername = "localhost";
$serveruser = "root";
$password = "";

try {
    $BDD = new PDO("mysql:host=$servername;dbname=emos", $serveruser, $password);
} catch (PDOException $e) {
    echo "erreur" . $e->getMessage();
}

if (isset($_POST['ok'])) {
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $tel = $_POST['tel'];
    $adress = $_POST['adress'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $student = $_POST['student'];

    try{
        $BDD -> exec ("INSERT INTO personne(name,lastname,tel,adress,email,password)values('$name','$lastname','$tel','$adress','$email','$password')");
        $BDD-> exec("INSERT INTO utilisateur(email,isStudent)values('$email','$student')"); 
    }
    catch(Exception $e) {
        header('Location : ../login.html');
    }
    header("Location: ../home/index.php");
exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="../../style/login.css">
</head>
<body>
    <div class="login-box">
        <h2>Inscription</h2>
        <form method="POST" onsubmit="return validateForm();">
            <div class="user-box">
                <input type="text" name="name" id="1" required>
                <label>Nom</label>
            </div>
            <div class="user-box">
                <input type="text" name="lastname" id="2" required>
                <label>Prenom</label>
            </div>
            <div class="user-box">
                <input type="text" name="tel" id="3" required>
                <label>Tel</label>
            </div>
            <div class="user-box">
                <input type="text" name="adress" id="4" required>
                <label>Adresse</label>
            </div>
            <div class="user-box">
                <input type="email" name="email" id="5" required>
                <label>Email</label>
            </div>
            <div class="user-box">
                <input type="password" name="password" id="6"  required>
                <label>Mot de passe</label>
            </div>
            <div class="user-box">
                <input type="password" name="verifpassword" id="7" required>
                <label>Verifier mot de passe</label>
            </div>
            <div class="user-box">
                <select name="student" id="">
                    <option value="0">Enseignant</option>
                    <option value="1">Eleve</option>
                </select>
            </div>
            <button type="submit" name="ok" class="ok" href="#" onclick="validateForm()">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                Register
            </button>
            <button class="ok" type="reset" >
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                Annuler
            </button>
        </form>
    </div>
    

    <script>
        function validateForm() {
            var nameInput = document.getElementById('1').value;
            var lastNameInput = document.getElementById('2').value;
            var telInput = document.getElementById('3').value;
            var passwordInput = document.getElementById('6').value;
            var confirmPasswordInput = document.getElementById('7').value;
    
            // Check if name and last name contain only characters
            var nameRegex = /^[a-zA-Z]+$/;
            if (!nameRegex.test(nameInput) || !nameRegex.test(lastNameInput)) {
                alert('Name and last name should contain only characters.');
                return;
            }
    
            // Check if tel is an integer of 8 numbers
            var telRegex = /^\d{8}$/;
            if (!telRegex.test(telInput)) {
                alert('Tel should be an integer of 8 numbers.');
                return;
            }
    
            // Check if password and confirm password are the same
            if (passwordInput !== confirmPasswordInput) {
                alert('Passwords do not match.');
                return;
            }
    
            // All conditions are met, you can proceed with the registration logic here
            // For example, you can submit the form or perform other actions.
    
            alert('Form is valid. Registration can proceed.');
    
            // You can uncomment the line below to submit the form if needed.
            // document.forms[0].submit();
        }
    </script>
    
</body>
</html>


