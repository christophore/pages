<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr" >
<head>
    <title>Mon super site</title>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="com.css"/>
    <style>
    body {
        background: url("9.gif") no-repeat;
        background-size:cover;
    }
    form  {
        text-align: center;
        
    }
    </style>
</head>
<body>
        <form action="verification.php" method="post">
            <legend><h2>Page Login</h2></legend>
            LOGIN: <input type="text" name="login" required/> <br/> <br/>
            PASSWORD : <input type="password" name="password"required/> <br/> <br/>
            <select name="profil" >
                <option value="">Profil</option>
                <option value="user">USER</option>
                <option value="admin">ADMIN</option>
            </select><br/> <br/>
                 <input type="submit" name="connexion" value="Connexion" /> <br/> <br/>
        </form>
        <form action="inscription.php" method="post">
        <input type="submit" name="inscription" value="inscription" /> <br/> <br/>
        </form>
</body>
</html>
<?php


