<?php
include "config.php";

    // input value show
    $id = $_GET['id'];
    $sql = "SELECT * FROM `users` WHERE id='$id'";
    $result = mysqli_query($connect, $sql);
    $row = mysqli_fetch_assoc($result);
    $name = $row['name'];
    $email = $row['email'];
    $phone = $row['phone'];
    
// date update
if(isset($_POST['update'])){
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    // SQL Qurey
    $sql = "UPDATE `users` set id= '$id', name='$name', email= '$email', phone='$phone' WHERE id ='$id'";
    $result = mysqli_query($connect, $sql);

    if($result){
        header('location:index.php');
    }else{
        die(mysqli_error($connect));
    }

};


?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Update | PHP CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
        <div class="container">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6 mt-5">
                    <div class="card">
                        <div class="card-header bg-success p-2 text-dark bg-opacity-50">
                            <h2>Update Information</h2>
                            <a class="btn btn-dark float-end" href="index.php"  style="margin-top:-42px;">Back</a>
                        </div>
                        <div class="card-body">
                            <form action ="" method ="POST">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" value="<?php echo $name; ?>" name="name"  class="form-control" id="name" placeholder="Enter your name">
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" value="<?php echo $email; ?>" name="email" class="form-control" id="email" placeholder="Enter your email address">     
                                </div>
                                <div class="mb-3">
                                    <label for="phone" class="form-label">Phone</label>
                                    <input type="tel" value="<?php echo $phone; ?>" name="phone" class="form-control" id="phone" placeholder="Enter your phone number">     
                                </div>
                                <button type="submit" name="update" class="btn btn-primary">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
  </body>
</html>