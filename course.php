<?php
 session_start();
 if(empty($_SESSION['user_email'])){
   header('location:login.php');
 }

    const ROOT ='mysql:dbname=e_classe_db;host=localhost;port=3306';
    const USERNAME ='root';
    const PASSWORD='';
    
    $pdo=new PDO(ROOT,USERNAME,PASSWORD);

    function getdata(){
        global $pdo;
    
        if($pdo){
            $query='SELECT *FROM courses';
            $statement = $pdo -> prepare($query);
    
            $statement-> execute();
    
            return $statement->fetchAll();
        }
    }
    $courses=[];
    $courses=getdata();
    
  ?> 












<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description"
    content="Le site officiel de restauration d'e-learning classe  Si vous etes actuellement  un étiduant  YouCode creer votre compte et commencer par choisir plusieurs options " />
  <meta name="author" content="payment, courses, home, courses, logout" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>DashbordAdmin</title>
  <!-- Favicon-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
  <!-- Core theme CSS (includes Bootstrap)-->
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/Dashbord.css">
  <link rel="stylesheet" href="css/student.css">

</head>

<body>

<main>
  <?php include 'include/side.php' ?>
  <!-- Page content wrapper-->
  <!-- Top navigation-->
  <?php include 'include/nav.php' ?>



  <!-- Page content-->
  <div class="container-fluid">
 

    <div class="container ">
    <div class="col-12 d-flex justify-content-end ">
            <a href="formC.php">
              <input value="add New course" class="btn btn-primary ms-1 p-2 px-3 btn-info text-light mt-5 " type="submit" />
            </a>
          </div>

      <div class="row p-3 table-responsive pt-4">
        <table class="table table-borderless spacing-table ">
          <thead>
            <tr>
              <th scope="col"></th>
              <th scope="col" class="text-capitalize">name</th>
              <th scope="col" class="text-capitalize">email</th>
              <th scope="col" class="text-capitalize">phone</th>
              <th scope="col" class="text-capitalize">type</th>
              <th scope="col" class="text-capitalize">plateforme</th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>

          <tr>
        <?php foreach ($courses as $courses) : ?>
        <td><img src="pexels-photo-2379004 1.png" alt=""></td>
        <td><?php echo $courses["name"] ?></td>
        <td><?php echo $courses["email"] ?></td>
        <td><?php echo $courses["phone"] ?></td>
        <td><?php echo $courses["type"] ?></td>
        <td><?php echo $courses["plateforme"] ?></td>
        <td><a><i class="bi bi-pencil fs-5 text-info"></i></a> <a  class="m-3"><i class="bi bi-trash fs-5 text-info"></i></a></td>
</tr>
<?php endforeach ?>


          </tbody>
        </table>

      </div>

    </div>


  </div>
  </main>



  <!-- Bootstrap core JS-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Core theme JS-->
  <script src="side/side.js"></script>
</body>

</html>