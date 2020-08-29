<?php
    include_once('function.php');
    $fetch = new DB_con();
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <link rel="shortcut icon" href="https://image.flaticon.com/icons/svg/2921/2921112.svg" type="image/x-icon">
    <title>View page</title>
  </head>
  <body>
    <div class="container">
        <div class="mt-5">
            <h1>View</h1>
            <a href="insert.php" class="btn btn-success">Insert</a>
            <hr>
        </div>

        <div class="table-responsived">
            <table class="table table-border">
                <thead class="table-dark text-center">
                    <th class="align-middle">#</th>
                    <th class="align-middle">Name</th>
                    <th class="align-middle">Phone</th>
                    <th class="align-middle">Email</th>
                    <th class="align-middle">Edit</th>
                    <th class="align-middle">Delete</th>
                </thead>

                <tbody>
                <?php
                    $sql = $fetch->fetchAll();
                    while($row = mysqli_fetch_array($sql)){
                ?>
                    <tr class="align-middle text-center">
                        <td><?php echo $row['m_id']; ?></td>
                        <td><?php echo $row['m_name']; ?></td>
                        <td><?php echo $row['m_phone']; ?></td>
                        <td><?php echo $row['m_email']; ?></td>
                        <td><a href="update.php?id=<?php echo $row['m_id']; ?>" class="btn btn-warning">Edit</a></td>
                        <td><a href="delete.php?id=<?php echo $row['m_id']; ?>" class="btn btn-dark">Delete</a></td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- Popper.js first, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  </body>
</html>