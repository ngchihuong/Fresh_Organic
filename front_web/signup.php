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

    <div class="container mt-3">
        <h2>Đăng ký</h2>
        <?php
        if (isset($_GET['error'])) {
            echo '<div class="alert alert-danger">' . $_GET['error'] . '</div>';
        }
        if (isset($_GET['success'])) {
            echo '<div class="alert alert-success">' . $_GET['success'] . '</div>';
        }
        ?>
        <form action="process_signup.php" method="post" class="form">
            <div class="mb-3 mt-3">
                <label for="name" class="bg-light rounded">Name:</label>
                <input type="text" class="form-control" required id="name" placeholder="Enter name" name="name">
            </div>
            <div class="mb-3 mt-3">
                <label for="email"class="bg-light rounded">Email:</label>
                <input onblur="ValidateEmail(email.value)" type="email" class="form-control" required id="email" placeholder="Enter email" name="email">
                <p id="errorMessage"></p>
                <!-- <label for="email" class="bg-light rounded">Email:</label>
                <input type="email" class="form-control" required id="email" placeholder="Enter email" name="email"> -->
                <small id="emailError" class="text-danger bg-light"></small>
            </div>
            <div class="mb-3">
                <label for="password" class="bg-light rounded">Password:</label>
                <input type="password" class="form-control" required id="pwd" placeholder="Enter password"
                    name="password">
            </div>
            <div class="mb-3 mt-3">
                <!-- <label for="phone">Phone:</label>
                <input type="phone" class="form-control" required id="phone" placeholder="Enter phone number" name="phone">
                <p id="errorPhone"></p> -->
                <label for="phone" class="bg-light rounded p-2">Phone:</label>
                <input type="tel" class="form-control" pattern="[0-9]{10}" id="phone" placeholder="Enter phone number"
                    name="phone">
                <small id="phoneError" class=" text-danger bg-light"></small>
            </div>
            <div class="mb-3 mt-3">
                <label for="address" class="bg-light rounded">Address:</label>
                <input type="text" class="form-control" required id="address" placeholder="Enter address"
                    name="address">
            </div>
            <button type="submit" class="btn btn-primary mb-2">Đăng ký</button>
        </form>
        <a href="../index.php"><button class="btn btn-info">Về trang chủ</button></a>
    </div>
    <script>
        document.getElementById('email').addEventListener('input', function () {
            var email = this.value.trim();
            var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            var isValid = emailRegex.test(email);
            var errorElement = document.getElementById('emailError');

            if (!isValid) {
                errorElement.textContent = 'Invalid email address.';
            } else {
                errorElement.textContent = '';
            }
        });
        document.getElementById('phone').addEventListener('input', function () {
            var phoneNumber = this.value.trim();
            var phoneRegex = /^0[0-9]{9}$/;
            var isValid = phoneRegex.test(phoneNumber);
            var errorElement = document.getElementById('phoneError');

            if (!isValid) {
                errorElement.textContent = 'Invalid phone number. Must start with 0 and have 10 digits.';
            } else {
                errorElement.textContent = '';
            }
        });
    </script>
</body>

</html>
<script>
    function ValidateEmail(mail) 
{
 if (/^\w+([.-]?\w+)@\w+([.-]?\w+)(.\w{2,3})+$/.test(document.querySelector("#email").value))
  {
    return (true)
  }
    // document.querySelector("#errorMessage").value = "error"
    document.getElementById("errorMessage").innerHTML = "<b style='color:red;'>Invalid email</b>"
    return (false)
}
// function ValidatePhone(phone) 
// {
//  if (/(84|0[3|5|7|8|9])+([0-9]{8})\b/g.test(document.querySelector("#phone").value))
//   {
//     return (true)
//   }
//     // document.querySelector("#errorMessage").value = "error"
//     document.getElementById("errorPhone").innerHTML = "<b style='color:red;'>Invalid phone</b>"
//     return (false)
// }
</script>

</html>
