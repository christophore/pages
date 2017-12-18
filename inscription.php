<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
     <title>Document</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="com.css"/>
    <style>
    body   {
        background:url(82253901_o.gif)no-repeat;
        background-size:cover;
    }
    </style>
</head>
<body>
<form action="inscription.php" mehod="post">
<legend><h2>Page Login</h2></legend>
            LOGIN: <input type="text" name="LOGIN" required/> <br/> <br/>
            <select name="profil">
            <option value="">Profil</option>
            <option value="admin">Admin</option>
            <option value="user">User</option>
            </select>
            <input type="submit" name="inscription" value="inscription"/> <br /> <br />

</form>
</body>
</html>
<?php
