
<!DOCTYPE html>
<html lang="en">

<head>
<title>Task</title>
</head>

<body >
  <?php
          include("connection.php");
          $id = $_GET['id'];
          $sql = mysqli_query($con, "SELECT * FROM `register` WHERE id = '$id'") or die(mysqli_error($con));
          $row = mysqli_fetch_array($sql);
        ?>
          <h1 class="h3 mb-4 text-gray-800"> Home Page</h1>

        <div class="row">
            <div class="col-md-12">
              <table class="table table-bordered table-striped" id="example">
                <thead>
                  <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Action</th>
                  </tr>
                </thead>

                <tbody>
                  <?php
                    include("connection.php");
                    $id = 1;
                    $sql = mysqli_query($con, "SELECT * FROM `register`") or die(mysqli_error($con));
                    while($row = mysqli_fetch_array($sql))
                    {
                      echo '<tr>
                              <td>'.$id++.'</td>
                              <td>'.$row['name'].'</td>
                              <td>
                               
                              </td>


                      </tr>';
                    }

                  ?>
                </tbody>
              </table>
              </table>

        
      
</body>

</html>
