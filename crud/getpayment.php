<?php

const ROOT ='mysql:dbname=e_classe_db;host=localhost;port=3306';
const USERNAME ='root';
const PASSWORD='';

$pdo=new PDO(ROOT,USERNAME,PASSWORD);


function getdata(){
    global $pdo;

    if($pdo){
        $query='SELECT *FROM payment_details';
        $statement = $pdo -> prepare($query);

        $statement-> execute();

        return $statement->fetchAll();
    }
}