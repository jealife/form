<?php

$nom = $_POST['lastname'];
$prenom = $_POST['firstname'];
$desc=$_POST['description'];
$add=$_POST['adress'];
$file = fopen("cont.txt", "w");

fwrite($file, $nom . "\n" . $prenom. "\n" .$add. "\n" .$desc);

fclose($file);


header('Location: http://localhost:8000/cv.php')


?>