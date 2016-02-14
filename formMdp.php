<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Exercice 3</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<!--      <div class="menu"><?php include("liens_exo_perso.php");?></div>-->
    <h1>Exercice</h1>
    <h2>Génération d'un mot de passe</h2>
    
    <div class="content">
    <div class="info">
    <h3>Sélectionnez les options de votre mot de passe sécurisé: <br></h3>
    <form action="exo3.php" method="post" name="submit">
        <p><input type="checkbox" name="minuscule" value="1" checked > Avec des lettres minuscules [ a b c d e f g h ... x y z ]</p>
        <p><input type="checkbox" name="majuscule" value="1" checked  > Avec des lettres majuscules [ A B C D E F G H ... X Y Z ]</p>
        <p><input type="checkbox" name="chiffre" value="1" checked > Avec des chiffres [ 0 1 2 3 4 5 6 7 8 9 ]</p>
        <p><input type="checkbox" name="caractere" value="1" checked > Avec des caractères spéciaux [ ~ ! @ # $ % ^ & * ( ) - _ = + [ ] { } ; : , .  / ? ]</p>
        <p><select name="select">            
            <?php
            $select = 8;
            $select_2 = 1;//Nombre de caractères par défaut

                for($i=0;$i<=255;$i++){
                    echo "<option value='$i' ";
                    if($select==$i){echo "selected";}
                    echo">$i</option>";
                }
            ?>
            </select>  Nombre de caractères dans le mot de passe</p>
            <p><select name="select_2">
            <?php
                for($i=0;$i<=20;$i++){
                    echo "<option value='$i' ";
                    if($select_2==$i){echo "selected";}
                    echo">$i</option>";
                }
            ?>
        </select> Nombre de mots de passe à créer (pour générer plusieurs mots de passe à la fois)</p>
        <p><input type="submit"></p>
    </form>
    
    </div>
    <?php include('scriptMdp.php');?>    
    </div>
    
    
</body>
</html>