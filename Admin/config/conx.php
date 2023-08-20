<?php
 $host="127.0.0.1:3307";
 $user="root";
 $pwd="";
 $db="market";

 session_start();

$conn=mysqli_connect($host,$user,$pwd,$db); //or die("unable to connect");
if(!$conn){
    die("<script>alert('Connexion Failed')</script>");
}

?>