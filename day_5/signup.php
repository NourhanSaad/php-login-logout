<?php session_start(); ?>


<?php 
    
    require_once ('./connection.php');

?>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="path/to/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Signup</title>
<style>
    h4{
        padding-top:10%;
    }
 label{
     font-weight:bold;
     font-weight:500;
 }

</style>
</head>
<body style="width:25%;" class=" mx-auto ">
<h4>Sign Up</h4>

<hr>
<span>Please fill this form to create an account</span>
<br><br>
<!-- for creation  -->
<form method="post" action="<?php $_PHP_SELF ?>">
<div class="form-group">
            <label for="username">User Name</label>
            <input type="text" class="form-control mb-2" name="name" id="username" placeholder="Enter User Name" required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control mb-2" name="password" id="password" placeholder="Password" required>
        </div>
        <div class="form-group">
            <label for="confirm">Confirm Password</label>
            <input type="password" class="form-control mb-4" name="confirm" id="confirm"
                placeholder="Confirm Password" required>
        </div>
 <button name="submit" type="submit" value="submit"  class="btn btn-primary">Sign Up</button>
  <button name="cancel" type="reset" class=" border btn btn-light">Cancel</button>
  <br><br>
  <span>Already have an account? <a href="login.php"> Login Here</a></span>
</form>
</body>
<!------------ inserting dataaaaaa --------------->
<?php  
   
  
 if (isset($_POST['submit'])){
    $name = $_POST['name'];
   
    $sql_u = "SELECT * FROM user WHERE user_name= '$name'";
    $res_u = mysqli_query($con, $sql_u);
    if (mysqli_num_rows($res_u) > 0) {
        echo '<div class="container"><div class="alert alert-danger" role="alert">
        Sorry... username already taken, try new one </div>
</div>';	
  	}
   
    elseif ($_POST["password"] === $_POST["confirm"]) {
            
    
$data1 = "insert into user values('','".$_POST['name']."','".$_POST['password']."');" ;
$retval = mysqli_query( $con,$data1 );
   
if(! $retval ) {
die('Could not insert to table: ' . mysqli_error($con));
}

header("Location:login.php");
mysqli_close($con);

      
 } else {
    echo '<div class="container"><div class="alert alert-danger" role="alert">
password not matched </div>
</div>';
 }
}






       
           ?>



