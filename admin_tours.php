<?php

include 'config.php';

error_reporting(0);

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <title>E-Tour</title>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <link rel='stylesheet' type='text/css' media='screen' href='css/style.css'>
</head>

<body>
  <div class="row justify-content-center m-0">
    <div class="col-sm-2 bg-dark text-light text-center" style="height: 100vh;">
      <h3 class="p-4">Admin <br> Panel</h3>
      <hr>
      <div class="list-group">
        <a href="admin_panel.php" class="btn btn-dark p-3 text-start" aria-current="true">Dashboard</a>
        <a href="admin_users.php" class="btn btn-dark p-3 text-start">Users</a>
        <a href="admin_tours.php" class="btn btn-light m-3 text-start">Tours</a>
        <a href="admin_bookings.php" class="btn btn-dark p-3 text-start">Bookings</a>
        <a href="admin_inbox.php" class="btn btn-dark p-3 text-start">Inbox</a>
        <hr>
        <a href="index.php" class="btn btn-dark text-start">Back to site</a>
      </div>
    </div>
    <div class="col-sm-10 bg-light text-dark p-5">
      <!-- Button trigger modal -->
      <div class="d-flex">
        <button type="button" class="btn btn-danger px-5 me-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
          Add New Tour
        </button>
      </div>

      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              ...
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>

      <table class="table mt-5 bg-white">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Title</th>
            <th scope="col">Price</th>
            <th scope="col">Destination</th>
            <th scope="col">Duration</th>
            <th scope="col">Ratings</th>
            <th scope="col">Active Status</th>
            <th scope="col">Edit</th>
            <th scope="col">Deactivate</th>
          </tr>
        </thead>
        <tbody>
          <?php

          $sql = "SELECT * FROM Tours";
          $stmt = mysqli_stmt_init($conn);
          if (!mysqli_stmt_prepare($stmt, $sql)) {
            echo "SQL statement failed";
          } else {
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);

            while ($row = mysqli_fetch_assoc($result)) {
              echo "<tr>
              <th scope='row'>$row[id]</th>
               <td>$row[title]</td>
               <td>$row[price]</td>
               <td>$row[destination]</td>
               <td>$row[duration]</td>
               <td>$row[ratings]</td>
               <td>$row[active]</td>
               <td>   
                <a href='' class='btn btn-primary btn-sm editbtn'>Edit</a>
              </td>
              <td>   
                <a href='' class='btn btn-danger btn-sm'>Deactivate</a>
              </td>
              </tr>";
            }
          }

          ?>
        </tbody>
      </table>

    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>