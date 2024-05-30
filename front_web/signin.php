<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body style="background-repeat: no-repeat;
    background-image: url(../img/bg/organic-food.jpg);
    background-size: cover;">

    <div class="container mt-5 w-50 pt-5">
        <h2>Đăng nhập</h2>
        <?php
        if (isset($_GET['error'])) {
            echo $_GET['error'];
        }
        if (isset($_GET['success'])) {
            echo $_GET['success'];
        }
        ?>
        <form action="process_signin.php" method="post">
            <div class="mb-3 mt-3">
                <label for="email" class="bg-light rounded">Email:</label>
                <input type="email" class="form-control" required id="email" placeholder="Enter email" name="email">
            </div>
            <div class="mb-3">
                <label for="password" class="bg-light rounded">Password:</label>
                <input type="password" class="form-control" required id="pwd" placeholder="Enter password"
                    name="password">
            </div>
            <button type="submit" class="btn btn-primary mb-2">Đăng nhập</button>    
        </form>
        <a href="signup.php"><button class="btn btn-success">Đăng ký</button></a>   
        <a href="../index.php"><button class="btn btn-info">Về trang chủ</button></a>
    </div>

</body>

</html>