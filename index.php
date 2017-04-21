<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title> PHP TABLEAUX</title>
</head>
<body>

<!-- Exercice 1 -->
<?php
    $tabMois=["janvier",
    "février",
    "mars",
    "avril",
    "mai",
    "juin",
    "juillet",
    "aout",
    "septembre",
    "octobre",
    "novembre",
    "décembre",]
?>
<!-- Exercice 2 -->
<?php
echo $tabMois[2];
?>

</br>

<!-- Exercice 3 -->
<?php
echo $tabMois[5];
?>
</br>
<!-- exercice 4 -->
<?php
echo $tabMois[8-1]="août";
?>
</br>
<!-- exercice 5 -->

<?php
$Dep = [
        02=>"Aisne",
        59=>"Nord",
        60=>"Oise",
        62=>"Pas-de-Calais",
        80=>"Somme",
        ];
?>
</br>
<!-- exercice 6 -->
<?php
echo $Dep[59];
?>
</br>
<!-- exercice 7 -->
<?php
$Dep[51]="Marne";
?>
</br>
<!-- exercice 8 -->
<?php
foreach($tabMois as $key => $value){
  echo  "mois ".$key." : ".$value."</br>";
}
?>
</br>
<!-- exercice 9 -->
<?php
foreach($Dep as $key => $value){
  echo "N° département :".$key." Nom : ".$value."</br>";
}

?>
</br>
<!-- exercice 10 -->
<?php
foreach($Dep as $key => $value){
  echo "Le département ".$value." a le numero ".$key."</br>";
}
?>
</body>
</head>
</html>
