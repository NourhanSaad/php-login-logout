<?php session_start(); ?>


<?php 
    
    require_once ('./connection.php');

?>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="path/to/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Login</title>
<style>
    h4{
        padding-top:20%;
    }
 label{
     font-weight:bold;
 }

</style>
</head>
<body style="width:25%;" class=" mx-auto ">
    <h4>Login</h4>
    <span>Please fill in your credentials to login</span>
    <form action="<?php $_PHP_SELF ?>" method="post">
    <div class="form-group">
    <label for="username">Username</label>
    <input name="username" type="text" class="form-control" id="username"  >
  </div>
      <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input name="password" type="password" class="form-control" for="password"  >
  </div>

        <input type="submit" name="btn" class="btn btn-primary" value="Login">
        <p>Don't have an account? <a href="signup.php">Sign up now</a></p>

    </form>


<?php


     if (!empty($_POST['btn'])){
        $name = $_POST['username'];
         
    $sql=mysqli_query($con,"SELECT * FROM user where user_name='$name'");
        if(mysqli_num_rows($sql)>0)
        {
            $row  = mysqli_fetch_array($sql);
    if(is_array($row))
    {
      if ($_POST['password'] ==  $row['password'] ) {

        $_SESSION['user_name']= $row['user_name'] ;

       header("Location:welcome.php");
            exit;
        }
        else {
            echo '<div class="container"><div class="alert alert-danger" role="alert">
            Password Is Incorrect! </div>
            </div>' ;
        }
    }}
        else {
            echo '<div class="container"><div class="alert alert-danger" role="alert">
            User Name Is Not Exist! </div>
            </div>';
        }
    // echo "Fetched data successfully
    

    mysqli_close($con);}
    ?>






