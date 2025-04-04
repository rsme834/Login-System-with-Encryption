<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>

<body>
    <div class="container">
        <div class="box form-box">
            <?php
            include("config.php");

            if (isset($_POST['submit'])) {
                $email = mysqli_real_escape_string($con, $_POST['email']);
                $password = mysqli_real_escape_string($con, $_POST['password']);

                // تعديل الاستعلام ليكون فقط جلب البيانات بناءً على البريد الإلكتروني
                $result = mysqli_query($con, "SELECT * FROM users WHERE Email='$email'") or die("Select Error");
                $row = mysqli_fetch_assoc($result);

                if (is_array($row) && !empty($row)) {
                    // استخدام password_verify للتحقق من كلمة المرور
                    if (password_verify($password, $row['Password'])) {
                        $_SESSION['valid'] = $row['Email'];
                        $_SESSION['username'] = $row['Username'];
                        $_SESSION['age'] = $row['Age'];
                        $_SESSION['id'] = $row['Id'];

                        // إعادة التوجيه إلى الصفحة الرئيسية
                        header("Location: home.php");
                    } else {
                        echo "<div class='message'>
                            <p>Wrong Password</p>
                        </div><br>";
                        echo "<a href='index.php'><button class='btn'>Go Back</button></a>";
                    }
                } else {
                    echo "<div class='message'>
                        <p>Wrong Email</p>
                    </div><br>";
                    echo "<a href='index.php'><button class='btn'>Go Back</button></a>";
                }
            } else {
            ?>

            <header>Login</header>
            <form action="" method="post">
                <div class="field input">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" autocomplete="off" required>
                </div>

                <div class="field">
                    <input type="submit" class="btn" name="submit" value="Login" required>
                </div>

                <div class="links">
                    Don't have an account? <a href="register.php">Sign Up Now</a>
                </div>
            </form>
            <?php } ?>
        </div>
    </div>
</body>

</html>

