<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>employee tables</title>
</head>
<body>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap.min.css">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

<div class="col-lg grid-margin stretch-card">
   <div class="card">
     <div class="card-body">

<table id="example" class="table table-striped table-bordered" style="width:100%"> 
<?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "employee";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if(!$conn) 
{
 die("Connection failed: " . mysqli_connect_error());
}
?> 
       <thead>        
         <tr>
           <th>Id</th>
           <th>First Name</th>
           <th>Last Name</th>
           <th>Age</th>
           <th>Email</th>
           <th>Status</th>
           <!-- <th>Action</th>    -->
         </tr>   
         </thead>
         <tbody>
           <!-- insert data -->
           <?php
              $result=mysqli_query($conn,"select * from user where status='Inactive'");
            ?>
          <?php
           while($row =mysqli_fetch_assoc($result)){
          ?>
          <tr> 
           <!-- checkbox -->
            <td><?php echo $row['id'];?></td>
            <td><?php echo $row['fname'];?></td>
            <td><?php echo $row['lname'];?></td>
            <td><?php echo $row['age'];?></td>
            <td><?php echo $row['email'];?></td>
          
            <!-- change message -->
            <td>
                
               <?php if($row['status']=='Active')
                {
                  echo '<p style=color:green;>Active</p>';
                }
                else if($row['status']=='Inactive')
                {
                  echo '<p style=color:red;>Inactive</p>';
                }
                else 
                {
                  echo '<p  style=color:blue;>Deleted</p>';
                }
              ?> 
              
            </td>
           
            
          </tr>
          <?php
         }?>  
         </tbody>    
    </table>
  </div> 
</div>
</div>
    <script src=" https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap.min.js"></script>

 



    <script>

$(document).ready(function () {
    $('#example').DataTable();
});
</script>
</body>
</html>