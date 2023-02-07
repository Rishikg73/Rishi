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
           <th></th>
           <th>First Name</th>
           <th>Last Name</th>
           <th>Age</th>
           <th>Email</th>
           <th>Status</th>
           <th>Action</th>   
         </tr>   
         </thead>
         <tbody>
           <!-- insert data -->
           <?php
              $result=mysqli_query($conn,"select * from user");
            ?>
          <?php
           while($row =mysqli_fetch_assoc($result)){
          ?>
          <tr> 
           <!-- checkbox -->
            <td><input type="checkbox" name="mycheck" id="mycheck"
            data-status = "<?php echo $row['status']; ?>" data-id ="<?php echo $row['id']; ?>" value ="<?php echo $row['id'];?>"></td>
           
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
            <!-- change buttons -->
            <td>
               <?php if($row['status']=='Inactive')
                {  
                 ?>
                 <!-- <button type="submit" class="btn btn-success ml-5" onclick="return activestatus('<?php echo $row['id'];?>','<?php echo $row['status'];?>')" name="active" id="active">Active</button> -->
                 <?php
                }
                
                else  if($row['status']!='Deleted')
                {
                  ?>
                 <!-- <button type="submit"  class="btn btn-danger ml-5" onclick="return inactivestatus('<?php echo $row['id'];?>','<?php echo $row['status'];?>')" name="inactive" id="inactive">Inactive</button> -->
                 <?php
                 }
                 
              ?>
                <?php if($row['status']!= 'Deleted')
               {
                ?>
                <a href="http://localhost/star-admin/template/pages/samples/viewemployee.php?id=<?=$row['id'];?>" class="btn btn-info btn-rounded btn-icon " target="_blank">
                <i class="">View</i></a>
                <?php
               }
               ?>     
               <?php if($row['status']!= 'Deleted')
               {
                ?>
                <a href="http://localhost/star-admin/template/pages/samples/editemployee.php?id=<?=$row['id'];?>" class="btn btn-warning btn-rounded btn-icon" target="_blank">
                <i class="">Edit</i></a>
                <?php
               }
               ?>    
              <?php if($row['status']!='Deleted')
              {
                 ?>
                 <button type="submit"  class="btn btn-danger btn-rounded btn-icon"  onclick="return singledelete('<?php echo $row['id'];?>','<?php echo $row['status'];?>')" name="delete" id="delete">
                 <i class="">Delete</i></button> 
                 <?php
              } 
                 ?>                                
            </td>
            
          </tr>
          <?php
         }?>  
         </tbody>
       
    </table>

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