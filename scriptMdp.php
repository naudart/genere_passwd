<?php
    // On initialise les données à zéro
    $minuscule = 0;
    $majuscule = 0;
    $chiffre = 0;
    $caractere = 0;
    

    // On initialise toute les valeurs récupéré par l'utilisateur
    if(isset($_POST['minuscule'])){
        $minuscule = $_POST['minuscule'];
    }
    if(isset($_POST['majuscule'])){
        $majuscule = $_POST['majuscule'];
    }
    if(isset($_POST['chiffre'])){
        $chiffre = $_POST['chiffre'];
    }
    if(isset($_POST['caractere'])){
        $caractere = $_POST['caractere'];
    }
    if(isset($_POST['select'])){
        $select = $_POST['select']-1;
    }
    if(isset($_POST['select_2'])){
        $select_2 = $_POST['select_2']-1;
    }
    if(isset($_POST['submit'])){
        $submit = $_POST['submit'];
    }
    /* Différents type de chaine de caractères */
    $chaine_1 = "abcdefghijklmnopqrstuvwxyz"; 
    $chaine_2 = "ABCDEFGHIJKLMNOPQRSTUVWXYZ" ;
    $chaine_3 = "0123456789" ;
    $chaine_4 = "~!@#$%^&*()-_=+[]{};:,./?";
    
    // Découpage des diférentes chaines en tableaux
    $arr1 = str_split($chaine_1); 
    $arr2 = str_split($chaine_2);
    $arr3 = str_split($chaine_3);
    $arr4 = str_split($chaine_4);

    // On compte le nombre d'élément dans ces tableaux et on les places dans des variables 
    $len_1 = count($arr1);
    $len_2 = count($arr2);
    $len_3 = count($arr3);
    $len_4 = count($arr4);
    
    // On initialise une chaine de caractère vide une variable TOUT. Elle contiendra tout les mdp
    $tout = '';

    // Toute les option son récupérer dans une variable
    $submit_score = $minuscule + $majuscule + $chiffre + $caractere;

    // Puis on test si la case à été cocher
    //Si c'est le cas. 
    //On insérere un chiffre aléatoire dans l'ARRAY de la chaine coresspondante. Arr1 = chaine_1.
    //On rentre la nouvelle valeur des ARRAY dans TOUT
        if($minuscule == 1){
            for ($i=0;$i<=$select;$i++){
                $rand_1 = rand(0,$len_1-1);
                $tout .= $arr1[$rand_1];
            }
        }
        if($majuscule == 1){
            for ($i=0;$i<=$select;$i++){
                $rand_2 = rand(0,$len_2-1);
                $tout .= $arr2[$rand_2];
            }
        }

        if($chiffre == 1){
            for ($i=0;$i<=$select;$i++){
                $rand_3 = rand(0,$len_3-1);
                $tout .= $arr3[$rand_3];
            }
        }
        if($caractere == 1){
            for ($i=0;$i<=$select;$i++){
                $rand_4 = rand(0,$len_4-1);
                $tout .= $arr4[$rand_4];
            }
        }
    
    ////// ON DECOMPOSE //////
    // On mélange notre TOUT
    $shuffled = str_shuffle($tout);
    // On découpe notre mélange et on le met dans un ARRAY
    $shuffled_split = str_split($shuffled);
    //On compte le nombre d'élément de cet ARRAY
    $shuffled_len = count($shuffled_split);
    

    // Et on affiche le tout, avec une classe CSS pour le look.
    for ($j=0;$j<=$select_2;$j++){
        
        echo "<p class='mdpStyle'>";
        for ($i=0;$i<=$select;$i++){
            $rand = mt_rand(0,$shuffled_len-1);
            echo $shuffled_split[$rand];
        }
        echo "</p><hr>";
    }
    ?>