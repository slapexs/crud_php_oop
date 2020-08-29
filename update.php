<?php
    include_once('function.php');
    $id = $_GET['id'];
    $fetchOne = new DB_con();
    $updateData = new DB_con();

        if(isset($_POST['update'])){
            $m_name = $_POST['m_name'];
            $m_phone = $_POST['m_phone'];
            $m_email = $_POST['m_email'];

                $sql = $updateData->updateData($m_name, $m_phone, $m_email, $id);
                    if($sql){
                        echo "<script>alert('Data updated');</script>";
                        echo "<script>window.location.href='index.php';</script>";
                    }else{
                        echo "<script>alert('Fail to update data');</script>";
                        echo "<script>window.location.href='update.php?id=$id';</script>";
                    }
        }
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
        <link rel="shortcut icon" href="https://image.flaticon.com/icons/svg/2921/2921197.svg" type="image/x-icon">
    <title>Update page</title>
  </head>
  <body>
    <div class="container">
        <h1 class="mt-5">Update user[<?php echo $id; ?>]</h1>
        <hr>
        <?php


            $sql = $fetchOne->fetchone($id);
            while($row = mysqli_fetch_array($sql)){
        ?>
            <form action="" method="POST">
                <div class="mb-3">
                    <label for="m_name">Name</label>
                    <input type="text" class="form-control" name="m_name" id="m_name" value="<?php echo $row['m_name'] ?>" required>
                </div>

                <div class="mb-3">
                    <label for="m_phone">Phone</label>
                    <input type="text" class="form-control" name="m_phone" id="m_phone" value="<?php echo $row['m_phone'] ?>" required>
                </div>

                <div class="mb-3">
                    <label for="m_email">Email</label>
                    <input type="email" class="form-control" name="m_email" id="m_email" value="<?php echo $row['m_email'] ?>" required>
                </div>

                <div class="">
                    <button class="btn btn-warning" type="submit" name="update">Update</button>
                </div>
            </form>
        <?php } ?>
        
    </div>

    <!-- Optional JavaScript -->
    <!-- Popper.js first, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  </body>
</html>