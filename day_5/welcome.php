
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="path/to/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Welcome</title>
</head>
<style>
    body{
        padding-top:5%;
    }
    h2{
        text-align:center;
    }
    button{
        margin-left:9rem;
        background-color:#BF1F21;
        color:#fff;
        font-size:16px; 
        cursor:pointer;
    }
  
</style>

<?php session_start(); ?>


<?php 
if (!$_SESSION['user_name']){
    header("Location:login.php");
}
?>

        <body style="width:40%;" class=" mx-auto "> 
      
        <h2>Hi, <?php echo "<strong>" .$_SESSION['user_name']. "</strong>" ."."." "."Welcome to our site." ?> </h2>
        <hr>
        <img src="./img/img1.JPG" alt="welcome" style="width:100%">
           <br><br>
     <a href="login.php"><button type="button" class="btn w-50" name="logout"> Sign out of your Account</button></a>
     <br><br>

</body>
<?php 
if (!empty($_POST['logout'])){
    session_destroy(); 
    header("Location:login.php");
}
?>

</html>
