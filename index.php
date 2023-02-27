<?php include ('connection.php' ) ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <script src="http://cdn.tailwindcss.com"></script> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
       
    <div class="container">
        <div class="row mx-auto">
            <div class="col-4 border border-secondary rounded shadow p-2">
            <form action="" method="post">
                <div class="mx-auto " style="width:230px ">
                    <h4 class="mb-0">Create New Account</h4>
                </div>
                <hr>

                <label for="">Name</label>

                <div class="mb-1">
                    <input type="text"name="name" class="form-control"placeholder="first name" >
                </div>
                <div class="mb-1">
                    <label  class="form-label">Email address</label>
                    <input type="email"name="email" class="form-control" >
                </div>
                <div class="mb-2">
                    <label for="" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <label for="">Gender</label>
                <div class="d-flex gap-5 mb-1">
                    <div class="form-check">
                    <input class="form-check-input"name="gender" value="male" type="radio">
                    <label class="form-check-label" for="">Male</label>
                </div>
                <div>
                    <input class="form-check-input" name="gender" value="female" type="radio">
                    <label class="form-check-label" >Female</label>
                </div>
                <div>
                    <input class="form-check-input" name="gender" value="other" type="radio" >
                    <label class="form-check-label" >Other</label>
                </div>
               
                </div>
                <div class="mb-2">
                    <label for="">Date of Birth</label>
                    <input type="date" placeholder="enter your DOB" name="dob" class="form-control">
                </div>
                <div>
                    <input type="submit" name="submit" class="btn btn-success  w-100">
                </div>
                </form>
            </div>
        </div>
    </div>

</body>
</html>
<?php
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $gender=$_POST['gender'];
    $dob=$_POST['dob'];

    $query="INSERT INTO fb (name,email,password,gender,dob) VALUES('$name','$email','$password','$gender','$dob')";
    $data=mysqli_query($conn,$query);
    if($data){
        echo "data added succesfully";
    }else{
        echo "failed";
    }

}
?>