<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  
</head>
<body>
<?php include("../Model/viewdatabase.php");?>

<div class="container">
        <h1>Table Data</h1>
        <table class="table table-bordered">
          <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Full name</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <!-- Create do while loop for display data -->
            <?php do{?>
            <tr class="text-center">   
                <td><?php echo $row["id"] ?></td>
                <td><?php echo $row["fullname"] ?></td>
                <td><?php echo $row["email"] ?></td>
                <td>
                  <a href="index.php?editid=<?php echo  $row["id"];?>" class="btn btn-success" >Edit</a>
                  <a href="index.php?deleteid=<?php echo $row["id"];?>" class="btn btn-danger" >Delete</a>
                </td>
            </tr>

          </tbody>
          <?php }while($row = $data->fetch_assoc())?>
        </table>
</div>
</body>
</html>