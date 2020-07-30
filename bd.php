<?php


 /*$conn=mysqli_connect('localhost','root','','myphplogin') or die (mysql_error());*/
/* $conn= new PDO("mysql:host=localhost; dbname=myphplogin",'root','');*/

 try{
 	$conn= new PDO("mysql:host=localhost; dbname=myphplogin",'root','');
 }catch(PDOException $e){
 	die("Erreur de connexion à la base de donnée: " . $e->getMessage());
 }
 



 ?>
