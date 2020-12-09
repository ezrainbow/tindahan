<?php
    namespace tindahan;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <title>Login Form in PHP With Session</title>
</head>
<body style="background:#000;">

    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="card bg-dark mt-5">
                    <div class="card-title bg-secondary text-white mt-5">
                        <h3 class="text-center py-3">Login Form in PHP </h3>
                    </div>

                    <?php 
                        if(@$_GET['Empty']==true)
                        {
                    ?>
                        <div class="alert-light text-danger text-center py-3"><?php echo $_GET['Empty'] ?></div>                                
                    <?php
                        }
                    ?>


                    <?php 
                        if(@$_GET['Invalid']==true)
                        {
                    ?>
                        <div class="alert-light text-danger text-center py-3"><?php echo $_GET['Invalid'] ?></div>                                
                    <?php
                        }
                    ?>

                    <div class="card-body">
                        <form action="Process.php" method="post">
                            <input type="text" name="UName" placeholder=" User Name" class="form-control mb-3">
                            <input type="password" name="Password" placeholder=" Password" class="form-control mb-3">
                            <div class="text-center"> 
                                <button class="btn btn-light mt-3" name="Login">Login</button>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
