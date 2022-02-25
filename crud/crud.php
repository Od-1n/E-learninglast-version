<?php

const ROOT ='mysql:dbname=e_classe_db;host=localhost;port=3306';
const USERNAME ='root';
const PASSWORD='';

$pdo=new PDO(ROOT,USERNAME,PASSWORD);

function create($name,$email,$phone,$enroll_number,$date_of_admission){
    global $pdo;
    if($pdo){
        $query= "INSERT INTO students(name,email,phone,enroll_number,date_of_admission) values(:name,:email,:phone,:enroll_number,:date_of_admission)";
    $statement=$pdo->prepare($query);

    $statement->execute([

            ':name'=>$name,
            ':email'=>$email,
            ':phone'=>$phone,
            ':enroll_number'=>$enroll_number,
            ':date_of_admission'=>$date_of_admission,
            ]);
    }
}

function getdata(){
    global $pdo;

    if($pdo){
        $query='SELECT *FROM students';
        $statement = $pdo -> prepare($query);

        $statement-> execute();

        return $statement->fetchAll();
    }
}

function delete($id){
    global $pdo;
    if($pdo){
        $query="DELETE FROM students where id=:id";
        $statement=$pdo->prepare($query);

        $statement ->execute([

            ':id'=>$id

        ]);

    }
}


