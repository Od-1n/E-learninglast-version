
<?php

const ROOT ='mysql:dbname=e_classe_db;host=localhost;port=3306';
const USERNAME ='root';
const PASSWORD='';

$pdo=new PDO(ROOT,USERNAME,PASSWORD);


function create($name,$email,$phone,$type,$plateforme){
    global $pdo;
    if($pdo){
        $query= "INSERT INTO courses(name,email,phone,type,plateforme) values(:name,:email,:phone,:type,:plateforme)";
        $statement=$pdo->prepare($query);

    $statement->execute([

            ':name'=>$name,
            ':email'=>$email,
            ':phone'=>$phone,
            ':type'=>$type,
            ':plateforme'=>$plateforme,
            ]);
    }
}

    if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['type']) && isset($_POST['plateforme'])){
    if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['phone']) && !empty($_POST['type']) && !empty($_POST['plateforme'])){
            create($_POST['name'],$_POST['email'],$_POST['phone'],$_POST['type'],$_POST['plateforme']);
            header('location:course.php');
        }
      
      }
?>

      <!DOCTYPE html>
      <html lang="en">
      <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bootstrap Site</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
        <link rel="stylesheet" href="css/sign.css">
      </head>
      <body>
      <div class="d-flex vh-100 justify-content-center align-items-center bg-body">
        <div class="container-fluid divcont">
            
                <div class="d-flex justify-content-center">
                    <div class="col-md-4 shadow rounded-3 col-sm-12 p-4 bg-light bor-red">
                        <div class="text-start">
                            <h2 class="border-start e-c">
                                E-Classe
                            </h2>
                        </div>
                        <div class="text-center">
                            <h4 class="text-uppercase">add course </h4>
                            
                        </div>



                        <div class="text-center">
                            <form action="" method="POST">
                                <div class="form-control d-flex justify-content-end bor-red bg-light shadow rounded-3 ">
                                <div class="row">
                                <div class="form-group mt-4">
                                    <input placeholder="username" type="text" name="name" required>
                                </div>
                                <div class="form-group mt-4">
                                    <input placeholder="email" type="email" name="email" required>
                                </div>
                                <div class="form-group mt-4">
                                    <input placeholder="phone" type="number" name="phone" required>
                                </div>
                                <div class="form-group mt-4">
                                    <input placeholder="type" type="number" name="type" required>
                                </div>
                                <div class="form-group mt-4">
                                    <input placeholder="plateforme" type="number" name="plateforme" required>
                                </div>
                            
                                <div class="form-group mt-4">
                                    <button class="btn btn-primary" type="Submit" name="insert">insert</button>
                                </div>
                                </div>
                                </div>
                            </form>
                            
                        </div>

                    </div>
                </div>
            
        </div>
    </div>






    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
      </body>
      </html>




