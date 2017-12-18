<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="#" method="post">
            <legend><h2>Page Login</h2></legend>
            LOGIN: <input type="text" name="login" required/> <br/> <br/>
           profil: <select name="profil" />
                <option value="">Profil</option>
                <option value="user">USER</option>
                <option value="admin">ADMIN</option>
            </select><br/> <br/>
            <input type="submit" name="connexion" value="Connexion" /> <br/> <br/>
</form>
</body>

</html>
<?php
    // $size : longueur du mot passe voulu
    function chaine_aleatoire($nb_car, $chaine = 'azertyuiopqsdfghjklmwxcvbn123456789')
    {
        $nb_lettres = strlen($chaine) - 1;
        $generation = '';
        for($i=0; $i < $nb_car; $i++)
        {
            $pos = mt_rand(0, $nb_lettres);
            $car = $chaine[$pos];
            $generation .= $car;
        }
        return $generation;
    }

    if(isset($_POST['login']) && isset($_POST['profil']))
    {
        extract($_POST);
        $compteur=0;
        $monfichier = fopen("exemple.txt","a+");
        for($i=0; $i<15; $i++)
        {
            $line = fgets($monfichier);
            $donnee = explode("-",$line);
            $login0=strval($donnee[0]);
            if($login==$login0)
            {
                $compteur++;
            }
            if(isset($compteur) && $compteur>=1)
            {
                echo"Ce login.......";
            }
            else
            {
                $password = chaine_aleatoire(8);
                $fin = "\r\n";
                echo $login.'-'.$password.'-'.$profil.'-'.$fin;
                fputs($monfichier, $login.'-'.$password.'-'.$profil.'-'.$fin);
                fclose($monfichier);
            }
        }
        else
        {
            echo"ùlmkljh,nvb,n;";
        }
    }
?>
