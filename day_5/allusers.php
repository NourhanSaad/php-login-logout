

<!-- html tags  -->
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="path/to/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>all users</title>

<style>
    div.title{
        padding-top:10%;
    }
    i{
        cursor: pointer;
    }
</style>
</head>
<body class="d-flex flex-column  ">
<div class=" title d-flex justify-content-between w-50 mx-auto "  >
<span style="font-size:24">Users Database</span>
</div>
<hr>
<!-- table  -->
<table class="table table-striped W-50 mx-auto ">
  <thead>
    <tr>
      
      <th >ID</th>
      <th >Username</th>
     

    </tr>
  </thead>
  <tbody>
  <?php


// connection data inclusion
include('connection.php');

$selectQuery = " SELECT id, user_name FROM user";
$query= mysqli_query($con,$selectQuery);
if(mysqli_num_rows($query)>0){
while($result= mysqli_fetch_assoc($query)){
// inserting in table 
?>
  <tr>
                <td><?php  echo $result['id']??""; ?></td>
                <td><?php  echo $result['user_name']??""; ?></td>
              
               
            </tr>


<?php

}
}else{
  echo"<center><strong> No Records stored in database <br> <br></strong></center> ";
}


?>
  </tbody>

</table>
</div>
</body>