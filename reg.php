
<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>

    <style>
        body {
            background-color: lavender;
            font-size: medium;
            text-align: center;
        }

        form {
            margin-top: 20px;
        }
        .container {
    background-color: white;
    width: 350px;
    margin: 50px auto;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px gray;
}

input {
    margin: 5px;
    padding: 5px;
}
    
    </style>
</head>

<body>
 <div class="container">

    <h2>Registration Form</h2>

    <form method="POST" action="">

        Name:
        <input type="text" name="name"
               pattern="[A-Za-z ]{2,50}"
               title="Enter a valid name"
               required>
        <br><br>

        Email:
        <input type="email" name="email" required>
        <br><br>

        Password:
        <input type="password" name="password"
               minlength="6" required>
        <br><br>

        Phone:
        <input type="text" name="phone"
               maxlength="10"
               pattern="[0-9]{10}"
               title="Enter exactly 10 digits"
               required>
        <br><br>

        Gender:
        <input type="radio" name="gender"
               value="Male" required> Male

        <input type="radio" name="gender"
               value="Female"> Female
        <br><br>

        <input type="submit" name="submit"
               value="Register">

    </form>

    <?php

    if (isset($_POST['submit']))
    {
        $name = trim($_POST['name'] ?? "");
        $email = trim($_POST['email'] ?? "");
        $password = $_POST['password'] ?? "";
        $phone = trim($_POST['phone'] ?? "");
        $gender = $_POST['gender'] ?? "";

        // Check empty fields
        if ($name == "" || $email == "" ||
            $password == "" || $phone == "" ||
            $gender == "")
        {
            echo "<p style='color:red;'>All fields are required</p>";
        }

        // Name validation
        elseif (!preg_match("/^[A-Za-z ]{2,50}$/", $name))
        {
            echo "<p style='color:red;'>Invalid Name</p>";
        }

        // Email validation
        elseif (!filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            echo "<p style='color:red;'>Invalid Email</p>";
        }

        // Password validation
        elseif (strlen($password) < 6)
        {
            echo "<p style='color:red;'>Password must contain at least 6 characters</p>";
        }

        // Phone validation
        elseif (!preg_match("/^[0-9]{10}$/", $phone))
        {
            echo "<p style='color:red;'>Phone number must contain exactly 10 digits</p>";
        }

        // Gender validation
        elseif (!in_array($gender, ["Male", "Female"], true))
        {
            echo "<p style='color:red;'>Invalid Gender</p>";
        }

        // Successful registration
        else
        {
            echo "<h3 style='color:green;'>Registration Successful!</h3>";

            echo "Welcome, " . htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
        }
    }

    ?>
</div>
</body>
</html>

