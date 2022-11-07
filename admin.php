<?php
    session_start();
    include "backend/getConnection.php";
        if (isset($_POST['submit'])) {
            
            $conn=getConnection();
            if (empty($_POST['email']) || empty($_POST['password'])) {
                $message='<label>All fields are required</label>';
            }else{
                $query="SELECT * FROM users WHERE email=:email AND password=:password";
                $stmt=$conn->prepare($query);
                $stmt->execute(
                    array(
                        'email'=>$_POST['email'],
                        'password'=>$_POST['password']
                    )
                );
                $count=$stmt->rowCount();
                if ($count>0) {
                    $_SESSION['email']=$_POST['email'];
                    header("location: frontend/dashboard.php");
                }else{
                    echo "<script>alert('Wrong Email or Password, Retry Again')</script>";
                }
            }
        }
    $conn=null;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Area</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body id="admin">
    <div class="container-fluid container-admin">
        <div class="row row-admin" >
            <div class="col card admin">

                <form action="" method="post" class="card-body card-admin">
                    <h1 class="card-title text-center mb-4">Login Please</h1>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="email_login" placeholder="name@example.com" name="email"  required>
                        <label for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="password_login" placeholder="Password" name="password" required>
                        <label for="floatingPassword">Password</label>
                    </div>
                    <input type="submit" value="Login" class="btn btn-primary mb-1 btn-admin" name="submit">
                    <a href="index.php" class="btn btn-outline-primary mb-3 btn-admin">Back</a>
                </form>


            </div>
        </div>
    </div>
    <script src="bootstrap/js/bootstrap.js"></script>
</body>

</html>