<?php
try{
 $pdo = new PDO("mysql:host=localhost;port=localhost;dbname=universidad;","root","");
 $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo($e->getMessage());
}
?>