<html lang="en">
<head>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
<?php
include('connect.php');

$query = "SELECT * FROM user WHERE status='Active'";
$query_run = mysqli_query($conn,$query);

while($row = mysqli_fetch_array($query_run))
{
  ?>  
  <table class="table table-bordered">
  <thead>        
         <tr>
           <th class="col-1">id</th>
           <th class="col-1">first name</th>
           <th class="col-1">last name</th>
           <th class="col-1">Age</th>
           <th class="col-1">email</th>
           <th class="col-1">status</th>
           <!-- <th>action</th>    -->
         </tr>   
         </thead>
    <tbody>
    <tr>
    <td class="row-1"><?php echo $row['id'];?></td>
    <td class="row-1"><?php echo $row['fname'];?></td>
    <td class="row-1"><?php echo $row['lname'];?></td>
    <td class="row-1"><?php echo $row['age'];?></td>
    <td class="row-1"><?php echo $row['email'];?></td>
    <td class="row-1"><?php echo $row['status'];?></td> 
    </tr>
    </tbody>
</table>
<?php
}
?>
</body>
</html>
